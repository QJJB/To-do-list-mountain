import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
import react from '@vitejs/plugin-react';
=======
>>>>>>> 6089fa36348632ee7f80c95b3ff2d9bcc5b60332

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: 'resources/js/app.jsx',
            refresh: true,
        }),
        react(),
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
>>>>>>> 6089fa36348632ee7f80c95b3ff2d9bcc5b60332
    ],
});
