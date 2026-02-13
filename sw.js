// Service Worker - Siqueira e Blanco
const CACHE_NAME = 'sb-engenharia-v2';
const OFFLINE_URL = '/';

// Arquivos essenciais para cache
const PRECACHE_ASSETS = [
  '/',
  '/styles.css',
  '/script.js',
  '/Logomarca.png',
  '/manifest.json',
];

const CACHEABLE_EXTENSIONS = /\.(?:css|js|mjs|png|jpg|jpeg|webp|gif|svg|ico|woff2?|ttf|otf|eot|json)$/i;

function isCacheableRequest(url, request) {
  if (request.method !== 'GET') return false;
  if (url.origin !== self.location.origin) return false;
  if (url.pathname.startsWith('/includes/')) return false;

  const isNavigation = request.mode === 'navigate';
  const isStaticAsset = CACHEABLE_EXTENSIONS.test(url.pathname);
  const isPrecachedPath = PRECACHE_ASSETS.includes(url.pathname);

  // Evita cachear endpoints com query dinâmica.
  if (url.search && !isNavigation && !isStaticAsset) return false;

  return isNavigation || isStaticAsset || isPrecachedPath;
}

// Install - precache essenciais
self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => cache.addAll(PRECACHE_ASSETS))
  );
  self.skipWaiting();
});

// Activate - limpar caches antigos
self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((keys) =>
      Promise.all(keys.filter((key) => key !== CACHE_NAME).map((key) => caches.delete(key)))
    )
  );
  self.clients.claim();
});

// Fetch - network first, fallback to cache
self.addEventListener('fetch', (event) => {
  const requestUrl = new URL(event.request.url);
  const isNavigation = event.request.mode === 'navigate';

  if (!isCacheableRequest(requestUrl, event.request)) return;

  event.respondWith(
    fetch(event.request)
      .then((response) => {
        if (response && response.ok && response.type === 'basic') {
          const clone = response.clone();
          const requestToCache = isNavigation ? new Request(requestUrl.pathname) : event.request;
          caches.open(CACHE_NAME).then((cache) => {
            cache.put(requestToCache, clone);
          });
        }
        return response;
      })
      .catch(() =>
        caches.match(event.request).then((cached) => {
          if (cached) return cached;
          if (isNavigation) {
            return caches.match(requestUrl.pathname).then((pageCached) => pageCached || caches.match(OFFLINE_URL));
          }
          return caches.match(OFFLINE_URL);
        })
      )
  );
});
