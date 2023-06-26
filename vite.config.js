import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/css/bootstrap.min.css',
                'public/css/admin/app.css',
                'public/css/user/regular-talk.css',
                'public/js/bootstrap.bundle.min.js',
                'public/js/admin/main.js',
            ],
            refresh: true,
        }),
    ],
});
