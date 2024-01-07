import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/theme.css',
                'resources/css/theme-elements.css',
                'resources/css/theme-blog.css',
                'resources/css/theme-shop.css',
                'resources/css/skins/default.css',
                'resources/scss/custom.scss',

            ],
            refresh: true,
        }),
    ],
});
