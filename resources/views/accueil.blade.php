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
                <a class="CTA">Découvrez nos artisans</a>
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
            <p>Chez l'établi français, nous croyons en la beauté de l'artisanat authentique et en la passion des créateurs talentueux. Notre marketplace est bien plus qu'une plateforme de vente en ligne, c'est un espace dédié à la célébration des artisans français. Nous nous engageons à mettre en lumière leurs créations uniques, façonnées avec soin, créativité et expertise. Les clients découvrent une collection exceptionnelle d'œuvres artisanales, allant des pièces traditionnelles aux créations contemporaines. Nous sommes fiers de soutenir une communauté d'artisans passionnés, en favorisant des échanges équitables et durables. Chaque achat effectué sur notre plateforme contribue directement à soutenir ces artisans, à préserver des techniques ancestrales et à encourager la créativité artisanale.</p>
        </div>
    </div>

    <div class="fond2">
        <h2>Notre équipe</h2>
    </div>

    <div class="entreprise2">
        <div>
            <img class="logo3" src="{{ asset('img/Photo-équipe/Photo-Thomas.png') }}">
            <p>Développeur Web</p>
        </div>
        <div>
            <img class="logo3" src="{{ asset('img/Photo-équipe/Photo_Jules.png') }}">
            <p>Développeur Web</p>
        </div>
        <div>
            <img class="logo3" src="{{ asset('img/Photo-équipe/Photo_alix_pro.png') }}">
            <p>Designer</p>
        </div>
        <div>
            <img class="logo3" src="{{ asset('img/Photo-équipe/Photo_samson.png') }}">
            <p>Web marketer</p>
        </div>
        <div>
            <img class="logo3" src="{{ asset('img/Photo-équipe/Photo_alex.png') }}">
            <p>Community Manager</p>
        </div>
    </div>

@include('../templates/footer')