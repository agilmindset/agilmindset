$(document).ready(function(){
    console.log('\nDocument Ready\n\n')
    window.onload = function(){
        console.log('\nWindow Loaded\n\n');
        console.log(
            '\n\n%cbem vindx ao\n\n%cagil%cmindset\n\n%c \n',
            'color: #fff; font-size: 64px; line-height: 84px;font-family: monospace;',
            'background:#192d35; color: #fff; font-size: 72px; line-height: 84px;font-family: monospace;',
            'background:#192d35; color: #adff2f; font-size: 72px; line-height: 84px; font-weight:bolder;font-family: monospace;',
            'background: url("https://agilmindset.com/assets/favicons/console-480x480.jpg"); background-position: center; line-height: 480px; font-size: 873px; color: transparent; text-transform: uppercase;\n\n',
        )
        // this.setTimeout(() => {
        //     console.log(
        //         '\n\n%cATENÇÃO:\n\n\t%cEsta é uma versão beta, publicada exclusivamente para testes.\n\tSugestões e críticas são sempre muito bem vindas!\n\n\n',
        //         'background:#ff00ff; color: #ffffff; font-size: 64px;font-family: monospace;',
        //         'background:#f8f9fa; color: #ff00ff; font-size: 64px;font-family: monospace;'
        //     )
        // }, 4000)

        // if ('serviceWorker' in navigator) {
        //     window.addEventListener('load', function() {
        //         navigator.serviceWorker.register('script.js').then(function(registration) {
        //         // Registration was successful
        //         console.log('ServiceWorker registration successful with scope: ', registration.scope);
        //         }, function(err) {
        //         // registration failed :(
        //         console.log('ServiceWorker registration failed: ', err);
        //         });
        //     });
        // }

        // self.addEventListener('install', function(event) {
        //     // Perform install steps
        //     var CACHE_NAME = 'agilmindset-cache-v1';
        //     var urlsToCache = [
        //         '/',
        //         '/index.php',
        //         '/cadastrar.php',
        //         '/404.php',
        //         '/inc/*',
        //         '/assets/css/style.css',
        //         '/assets/js/script.js',
        //         '/assets/img/*',
        //         '/assets/favicons/*',
        //     ];

        //     self.addEventListener('install', function(event) {
        //         // Perform install steps
        //         event.waitUntil(
        //             caches.open(CACHE_NAME)
        //             .then(function(cache) {
        //                 console.log('Opened cache');
        //                 return cache.addAll(urlsToCache);
        //             })
        //         );
        //     });
        // });

        // self.addEventListener('fetch', function(event) {
        //     event.respondWith(
        //         caches.match(event.request)
        //             .then(function(response) {
        //                 // Cache hit - return response
        //                 if (response) {
        //                 return response;
        //                 }
                
        //                 // IMPORTANT: Clone the request. A request is a stream and
        //                 // can only be consumed once. Since we are consuming this
        //                 // once by cache and once by the browser for fetch, we need
        //                 // to clone the response.
        //                 var fetchRequest = event.request.clone();
                
        //                 return fetch(fetchRequest).then(
        //                 function(response) {
        //                     // Check if we received a valid response
        //                     if(!response || response.status !== 200 || response.type !== 'basic') {
        //                     return response;
        //                     }
                
        //                     // IMPORTANT: Clone the response. A response is a stream
        //                     // and because we want the browser to consume the response
        //                     // as well as the cache consuming the response, we need
        //                     // to clone it so we have two streams.
        //                     var responseToCache = response.clone();
                
        //                     caches.open(CACHE_NAME)
        //                     .then(function(cache) {
        //                         cache.put(event.request, responseToCache);
        //                     });
                
        //                     return response;
        //                 }
        //             );
        //         })
        //     );
        // });

        


    }
});