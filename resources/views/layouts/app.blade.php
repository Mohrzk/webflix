<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <nav>
        <a href="/">Accueil</a>
        <a href="/fiorella">Présentation</a>
        <a href="/fiorella?color=blue">Fiorella Bleue</a>
        <a href="/fiorella/emma">Fiorella et Emma</a>
        <a href="/fiorella/paul">Fiorella et paul</a>
        <a href="/fiorella-apropos">À propos</a>
    </nav>


    @yield('content')


    <footer>
        webflix &copy; {{ date('y')}}
    </footer>

</body>
</html>