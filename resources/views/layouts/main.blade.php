<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- isso ta dizendo que vai "entregar" o titulo daqui pra usar em outras views - repaorveitamento de codigo -->

    <!-- Fonte do Google -->

    <!-- CSS Bootstrap -->


    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/index.js"></script>
</head>
<body>
    @yield('content') <!-- isso ta dizendo que vai "entregar" o conteudo abaixo pra outras views - reaproveitamento de codigo -->
    <footer>HDC Events &copy; 2020</footer>
</body>
</html>
