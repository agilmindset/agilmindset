<!DOCTYPE html>
<html lang="pt-BR" prefix="og: http://ogp.me/ns#">
<head>

    <!-- CONFIGURAÇÕES GERAIS -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, maximum-scale=5.0, minimum-scale=1.0">

    <!-- META DADOS -->
    <title><?= $tituloPagina ?></title>
    <meta name="title" content="<?= $tituloPagina ?>">
    <meta name="description" content="<?= $tituloPagina . "" . $descricaoPagina ?>">

    <!-- CACHE -->
    <meta http-equiv="Cache-control" content="public">
    <meta http-equiv="cache-control" content="max-age=0">
    <meta name="revisit-after" content="7 days">
    <meta http-equiv="expires" content="0">

    <!-- MANIFESTO -->
    <link rel="manifest" href="./manifest.json">

    <!-- SCHEMA.ORG -->
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": [
            "Organization",
            "Consultancy"
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
        "sameAs": ["https://www.facebook.com/djamentcomunicacao", "https://www.instagram.com/djamentcomunicacao/"],
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+55-11-97605-2723",
            "contactType": "sales",
            "areaServed": "BR",
            "availableLanguage": ["Portuguese", "English", "Spanish"]
        }]
        }
    </script>

    <!-- ESTILOS -->
    <link rel="pre-load" href="assets/css/style.css" />
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link async href="https://fonts.googleapis.com/css?family=Comfortaa:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="msapplication-TileImage" content="./assets/favicons/tile.png">
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="512x512" href="./assets/favicons/favicon-512x512.png">
    <link rel="icon" type="image/png" sizes="228x228" href="./assets/favicons/favicon-228x228.png">
    <link rel="shortcut icon" sizes="196x196" href="./assets/favicons/favicon-196.png">
    <link rel="icon" sizes="192x192" href="./assets/favicons/touch-icon-192x192.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="./assets/favicons/apple-touch-icon-precomposed-180x180.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="./assets/favicons/apple-touch-icon-precomposed-152x152.png">
    <link rel="icon" type="image/png" sizes="128x128" href="./assets/favicons/favicon-128x128.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/favicons/apple-touch-icon-precomposed-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="./assets/favicons/apple-touch-icon-precomposed-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/favicons/apple-touch-icon-precomposed-114x114.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicons/favicon-96x96.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="./assets/favicons/apple-touch-icon-precomposed-76x76.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/favicons/apple-touch-icon-precomposed-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="./assets/favicons/apple-touch-icon-precomposed-60x60.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="./assets/favicons/apple-touch-icon-precomposed-57x57.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon-16x16.png">
    <!-- /Favicons -->
</head>