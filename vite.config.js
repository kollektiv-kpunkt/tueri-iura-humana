import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: "pn110.ddev.site",
            protocol: "wss",
        },
    },
    resolve: {
        alias: {
            '@fonts': '/resources/assets/fonts',
        },
    },
});
