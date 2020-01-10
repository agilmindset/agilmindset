<!DOCTYPE html>
<html lang="pt-BR" prefix="og: http://ogp.me/ns#">

<head>
    <!-- Configurações Gerais -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, maximum-scale=5.0, minimum-scale=1.0">
    <!-- /Configurações Gerais -->
    <!-- Meta Dados Genéricos -->
    <title><?= $tituloPagina ?></title>
    <meta name="title" content="<?= $tituloPagina ?>">
    <meta name="description" content="<?= $tituloPagina . " - " . $descricaoPagina ?>">
    <!-- /Meta Dados Genéricos -->
    <!-- Cache -->
    <meta http-equiv="Cache-control" content="public">
    <meta http-equiv="cache-control" content="max-age=31536000">
    <meta name="revisit-after" content="1 year">
    <meta http-equiv="expires" content="1 year">
    <meta name="identifier-URL" content="<?= $urlPagina ?>">
    <meta name="url" content="<?= $urlPagina ?>">
    <meta property="og:url" content="<?= $urlPagina ?>">
    <link rel="canonical" href="https://agilmindset.com/<?= $urlAmigavelPagina ?>">
    <!-- /Cache -->
    <!-- Manifesto Json -->
    <link type="manifest+json" rel="manifest" href="./manifest.json">
    <link type="manifest+json" rel="manifest" href="./manifest.webmanifest">
    <meta name="application-name" content="agilmindset">
    <link rel="icon" sizes="16x16" href="./assets/favicons/favicon.ico">
    <!-- /Manifesto Json -->
    <!-- Schema.org Json -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": [
                "Organization",
                "Project"
            ],
            "additionalType": [
                "http://www.productontology.org/doc/Project",
                "http://www.productontology.org/id/Project"
            ],
            "@id": "https://agilmindset.com",
            "url": "https://agilmindset.com",
            "name": "agil mindset",
            "alternateName": "agil mindset",
            "legalName": "Marcelo Diament37484380873",
            "logo": "https://agilmindset.com/assets/favicons/favicon-512x512.png",
            "description": "Inovação através do Engajamento e da Colaboração",
            "telephone": "+55-11-97605-2723",
            "email": "webmaster@agilmindset.com",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "BR",
                "addressLocality": "São Paulo",
                "addressRegion": "São Paulo",
                "postalCode": "05089-001",
                "streetAddress": "Rua Guaipá, Vila Leopoldina"
            },
            "brand": {
                "@type": "Thing",
                "name": "agil mindset"
            },
            "sameAs": ["https://www.facebook.com/agilmindset", "https://www.instagram.com/agilmindset/", "https://www.linkedin.com/company/agilmindset/"],
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+55-11-97605-2723",
                "contactType": "sales",
                "areaServed": "BR",
                "availableLanguage": ["Portuguese", "English", "Spanish"]
            }]
        }
    </script>
    <!-- /Schema.org Json -->
    <!-- OG Meta Data e outras meta data -->
    <meta property="og:title" content="<?= $tituloPagina ?>">
    <meta property="og:description" content="<?= $descricaoPagina ?>">
    <meta name="abstract" content="<?= $tituloPagina ?>">
    <meta property="og:site_name" content="<?= $tituloPagina ?>">
    <meta property="og:locale" content="pt-BR">
    <meta name="og:locality" content="São Paulo">
    <meta name="og:region" content="SP">
    <meta name="og:country-name" content="BR">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://agilmindset.com/assets/favicons/favicon-128x128.png">
    <meta property="og:image:alt" content="<?= $tituloPagina ?>">
    <meta property="og:image:url" content="https://agilmindset.com/assets/favicons/favicon-128x128.png">
    <meta property="og:image:secure_url" content="https://agilmindset.com/assets/favicons/favicon-128x128.png">
    <meta property="og:image:type" content="img/png">
    <meta property="og:image:width" content="128">
    <meta property="og:image:height" content="128">
    <meta name="robots" content="index,follow">
    <!-- /OG Meta Data e outras meta data -->
    <!-- Dados de Autoria -->
    <meta name="author" content="Marcelo Diament, Djament Comunicação">
    <meta name="contact" content="contato@djament.com.br">
    <meta name="reply-to" content="contato@djament.com.br">
    <meta name="copyright" content="Djament">
    <meta name="web_author" content="Djament Comunicação">
    <!-- /Dados de Autoria -->
    <!-- Dados para mobile app -->
    <meta name="rating" content="general">
    <meta name="theme-color" content="#adff2f">
    <meta name="msapplication-TileColor" content="#adff2f">
    <meta name="application-name" content="<?= $tituloPagina ?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?= $tituloPagina ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- /Dados para mobile app -->
    <!-- Estilos -->
    <link rel="pre-load" href="assets/css/style.css" />
    <link rel="pre-render" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- /Estilos -->
    <!-- Favicons -->
    <meta name="msapplication-TileImage" content="./assets/favicons/ms-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="512x512" href="./assets/favicons/favicon-512x512.png">
    <link rel="icon" type="image/png" sizes="228x228" href="./assets/favicons/favicon-228x228.png">
    <link rel="shortcut icon" sizes="196x196" href="./assets/favicons/favicon-196.png">
    <link rel="icon" sizes="192x192" href="./assets/favicons/touch-icon-192x192.png">
    <link rel="icon" sizes="192x192" href="./assets/favicons/android-icon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicons/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" sizes="128x128" href="./assets/favicons/favicon-128x128.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicons/apple-touch-icon-114x114.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicons/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicons/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" sizes="72x72" href="./assets/favicons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicons/apple-touch-icon-57x57.png">
    <link rel="icon" type="image/png" sizes="48x48" href="./assets/favicons/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon-16x16.png">
    <!-- /Favicons -->
</head>