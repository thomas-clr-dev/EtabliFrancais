@include('../templates/navbar')



<div class="ArtisansBois" style="background-image: url({{ asset('img/forest.png') }});">
    <div class="header white-filter">
        <h1>Nos Ebénistes</h1>
    </div>
    <div class="white-filter">
        <div class="boite">
            <div>
                <img class="b" src="{{ asset('img/leo_dub.webp') }}" />
            </div>
            <div class="texte">
                <h3>Léonard Dubois</h3>

                <p>Léonard Dubois, l'ébéniste chevronné au talent incontesté, façonne le bois avec une maîtrise digne
                    des plus grands artisans. Sa passion pour le travail du bois transparaît dans chacune de ses
                    créations, où la minutie des détails rencontre l'élégance intemporelle.</p>
                <br>
                <a class="CTA2">Nous contacter</a>
            </div>
        </div>

        <div class="boite">
            <div>
                <img class="b" src="{{ asset('img/marc_bouchard.webp') }}" />
            </div>
            <div class="texte">
                <h3>Marc Bouchard</h3>

                <p>Marcel Bouchard, l'ébéniste passionné, est un véritable artiste du bois. Son atelier est un
                    sanctuaire où la créativité prend vie, chaque morceau de bois se transformant sous ses mains
                    expertes en œuvres d'art intemporelles. Avec une approche méticuleuse, Marcel fusionne habilement la
                    tradition et l'innovation, créant des meubles qui transcendent les époques.</p>
                <br>
                <a class="CTA2">Nous contacter</a>
            </div>
        </div>
    </div>

</div>



@include('../templates/footer')