<?php

namespace App\Logging;

use Exception;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LogstashHttpLogger
{
    public function __invoke(array $config)
    {
        $logger = new Logger('logstash');

        $logger->pushHandler(new class extends AbstractProcessingHandler {
            protected function write(array $record): void
            {
                try {
                    Http::asJson()
                        ->withBasicAuth(env('LOGSTASH_USER'), env('LOGSTASH_PASS'))
                        ->timeout(2)
                        ->post(env('LOGSTASH_URL'), [
                            'project' => 'EduALL Website',
                            'message' => $record['message'],
                            'level' => $record['level_name'],
                            'context' => $record['context'],
                            'channel' => $record['channel'],
                            'datetime' => $record['datetime']->format('Y-m-d H:i:s'),
                        ]);

                    // Log::channel('daily')->debug($respose);
                } catch (Exception $e) {
                    Log::error('error :' . $e->getMessage());
                    // Jangan sampai logging error bikin aplikasi crash
                }
            }
        });

        return $logger;
    }
}
