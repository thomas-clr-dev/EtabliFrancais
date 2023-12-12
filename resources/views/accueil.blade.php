<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/nep6jxu.css">
    <link rel="stylesheet" href="https://use.typekit.net/nep6jxu.css">
    <title>Etabli Français</title>
</head>

<body>
    <div class="nav" style="background-image: url({{ asset('img/header.png') }});">
        <div class="colonne1">
            <img class="Logo" src="{{ asset('img/logo.png') }}">
        </div>
        <div class="colonne2">
            <a href="#accueil">Accueil</a>
            <a href="#nosartisans">Nos artisans</a>
            <a href="#boutique">Boutique</a>
            <a href="#Contact">Contact</a>
        </div>
        <div class="colonne3">
            <img class="compte" src="{{ asset('img/profil.png') }}">
            <img class="panier" src="{{ asset('img/cart.png') }}">
        </div>
    </div>

    <div class="header">
        <h1>Nos Domaines</h1>
    </div>
</body>

</html>