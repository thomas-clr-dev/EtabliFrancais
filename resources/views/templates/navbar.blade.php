<!DOCTYPE html>
<html lang="fr">

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
        <div class="blur">
            <div class="colonne1">
                <a href="{{ route('accueil') }}"><img class="Logo" src="{{ asset('img/logo-large.png') }}"
                        onmouseover="this.src='{{ asset('img/logo-large-white.png') }}'"
                        onmouseout="this.src='{{ asset('img/logo-large.png') }}'"></a>
            </div>
            <div class="colonne2">
                <a class="nav-item" href="{{ route('accueil') }}">Accueil</a>
                <a class="nav-item" href="{{ route('artisans') }}">Nos artisans</a>
                <a class="nav-item" href="{{ route('boutique') }}">Boutique</a>
                <a class="nav-item" href="{{ route('contact') }}">Contact</a>
            </div>
            <div class="colonne3">
                <a href="{{ route('compte') }}"><img class="compte" src="{{ asset('img/profil.png') }}"></a>
                <a href="{{ route('contact') }}"><img class="panier" src="{{ asset('img/cart.png') }}"></a>
            </div>
        </div>
    </div>