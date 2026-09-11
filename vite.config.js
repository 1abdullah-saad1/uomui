import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
    build: {
        lib: {
            entry: resolve(__dirname, 'resources/js/uomui.js'),
            name: 'UomUI',
            formats: ['iife'],
            fileName: () => 'uomui.js',
        },

        outDir: 'dist/js',

        emptyOutDir: false,
    },
});
