@include('../templates/navbar')

    <div style="background-image: url({{ asset('img/forest.png') }});">
        <span class="border"></span>
        <div class="white-filter">
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

            <div class="btn-s1">
                <button class="CTA">Découvrez nos artisans</button>
            </div>
        </div>

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
            <img class="logo3" src="{{ asset('img/logo-white.png') }}">
            <h4>Mention Légales <br> Politique de confidentialité</h4>
        </div>
        <div>
            <h3>Contact</h3>
            <h4>Email <br> Téléphone <br> Adresse <br> Insta <br> Facebook</h4>
        </div>
    </div>
    
</body>

</html>