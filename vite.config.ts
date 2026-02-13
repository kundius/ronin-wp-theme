import { defineConfig } from 'vite'

export default defineConfig({
  base: '/wp-content/themes/ronin-wp-theme/dist/',
  build: {
    rollupOptions: {
      output: {
        entryFileNames: `assets/[name].js`,
        chunkFileNames: `assets/[name].chunk.js`,
        assetFileNames: `assets/[name].[ext]`
      }
    }
  },
  server: {
    watch: {
      usePolling: true
    }
  }
})
