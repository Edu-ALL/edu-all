<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'role' => 'required|string|max:50',
            'fullname' => 'required|string|max:150',
            'mail' => 'required|email|max:150',
            'phone' => 'required|string|max:30',
            'secondary_name' => 'nullable|string|max:150',
            'school_name' => 'nullable|string|max:150',
            'graduation_year' => 'nullable|string|max:10',
            'grade' => 'nullable|string|max:20',
            'program_id' => 'nullable|string|max:50',
            'interest_program' => 'nullable|string|max:150',
            'lead_source' => 'nullable|string|max:100',
        ]);

        if (config('services.odoo.driver') === 'log') {
            Log::info('Odoo lead (not sent)', $data);

            return response()->json(['ok' => true]);
        }

        $odooResponse = Http::withHeaders([
            'X-Api-Key' => config('services.odoo.api_key'),
            'X-Company-Id' => config('services.odoo.company_id'),
        ])
            ->timeout(10)
            ->post(config('services.odoo.endpoint'), $data + ['secondary_mail' => null, 'secondary_phone' => null]);

        if ($odooResponse->failed()) {
            Log::error('Odoo lead API request failed', [
                'status' => $odooResponse->status(),
            ]);

            return response()->json(['message' => 'Submission failed'], 502);
        }

        return response()->json(['message' => 'Submission successful'], 200);
    }
}
