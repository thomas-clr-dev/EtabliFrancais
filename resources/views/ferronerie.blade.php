@include('../templates/navbar')



<div class="ArtisansBois" style="background-image: url({{ asset('img/forest.png') }});">
    <div class="header white-filter">
        <h1>Nos Ferroniers</h1>
    </div>
    <div class="white-filter">
        <div class="boite">
            <div>
                <img class="b" src="{{ asset('img/ant_dur.webp') }}" />
            </div>
            <div class="texte">
                <h3>Antoine Durand</h3>

                <p>Antoine Durand  est bien plus qu'un simple forgeron. Il est un artiste habile dans l'art ancestral de la ferronnerie. Ses créations transcendent la simple fonctionnalité pour devenir des pièces d'art intemporelles. Chaque pièce forgée par ses mains expertes raconte une histoire, alliant la robustesse du métal à une élégance artistique remarquable.</p>
                <br>
                <a class="CTA2">Nous contacter</a>
            </div>
        </div>

        <div class="boite">
            <div>
                <img class="b" src="{{ asset('img/em_ren.webp') }}" />
            </div>
            <div class="texte">
                <h3>Émile Renaud</h3>

                <p>Émile Renaud est un virtuose du métal, un artisan dont les mains agiles transforment le fer en œuvres d'une beauté saisissante. Chacune de ses créations est le fruit d'une passion profonde pour l'artisanat, alliant habilement tradition et innovation. Du plus simple des éléments métalliques aux pièces les plus élaborées, Émile insuffle une âme à chacune de ses créations.</p>
                <br>
                <a class="CTA2">Nous contacter</a>
            </div>
        </div>
    </div>

</div>



@include('../templates/footer')