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
            <a href="{{ route('accueil') }}"><img class="Logo" src="{{ asset('img/logo-large.png') }}"></a>
        </div>
        <div class="colonne2">
            <a href="#accueil">Accueil</a>
            <a href="#nosartisans">Nos artisans</a>
            <a href="#boutique">Boutique</a>
            <a href="#Contact">Contact</a>
        </div>
        <div class="colonne3">
            <a href=""><img class="compte" src="{{ asset('img/profil.png') }}"></a>
            <a href=""><img class="panier" src="{{ asset('img/cart.png') }}"></a>
        </div>
    </div>

    <div class="header">
        <h1>Nos Domaines</h1>
    </div>

    <div class="métiers">
        <div>
            <img class="bvm" src="{{ asset('img/wood.png') }}">
            <h2>Ebénisterie</h2>
        </div>
        <div>
            <img class="bvm" src="{{ asset('img/glass.png') }}">
            <h2>Verrerie</h2>
        </div>
        <div>
            <img class="bvm" src="{{ asset('img/iron.png') }}">
            <h2>Ferronnerie</h2>
        </div>
    </div>

    <div class="logo2">
        <img src="{{ asset('img/logo-large.png') }}">
    </div>

    <div class="fond">
        <h2>Qu'est ce que l'établi francais?</h2>
    </div>
    <div class="entreprise">
        <div>
            <img class="logo3" src="{{ asset('img/logo.png') }}">
        </div>
        <div>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun<br> ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud<br> exercitation ullamco laboris nisi ut
                aliquip ex ea commodo <br>consequat. Duis aute irure dolor in reprehenderit <br>in voluptate velit esse
                cillum dolore eu fugiat <br>nulla pariatur. Excepteur sint occaecat cupidatat non<br> proident, sunt in
                culpa qui officia <br>deserunt mollit anim id est laborum."</p>
        </div>
    </div>

    <div class="fond2">
        <h2>Notre équipe</h2>
    </div>

    <div class="entreprise2">
        <div>
            <img class="logo3" src="{{ asset('img/logo.png') }}">
            <p>iut uycuyfc uy</p>
        </div>
        <div>
            <img class="logo3" src="{{ asset('img/logo.png') }}">
            <p>iut uycuyfc uy</p>
        </div>
        <div>
            <img class="logo3" src="{{ asset('img/logo.png') }}">
            <p>iut uycuyfc uy</p>
        </div>
        <div>
            <img class="logo3" src="{{ asset('img/logo.png') }}">
            <p>iut uycuyfc uy</p>
        </div>
        <div>
            <img class="logo3" src="{{ asset('img/logo.png') }}">
            <p>iut uycuyfc uy</p>
        </div>
    </div>

    <div class="footer">
        <div>
            <h3>Plan du site</h3>
            <h4>Accueil <br> nos artisans <br> boutique <br> contact <br> compte <br> panier</h4>
        </div>
        <div>
            <img class="logo3" src="{{ asset('img/logo.png') }}">
            <h4>Mention Légales <br> Politique de confidentialité</h4>
        </div>
        <div>
            <h3>Contact</h3>
            <h4>Email <br> Téléphone <br> Adresse <br> Insta <br> Facebook</h4>
        </div>
    </div>
</body>

</html>