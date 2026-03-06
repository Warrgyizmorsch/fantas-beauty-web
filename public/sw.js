self.addEventListener('install', (e) => {
    console.log('[Service Worker] Installed');
});

self.addEventListener('fetch', (e) => {
    // Ye code website ko normally load hone dega
    e.respondWith(fetch(e.request).catch(() => {
        return new Response("Offline mode - Please check your internet connection.");
    }));
});