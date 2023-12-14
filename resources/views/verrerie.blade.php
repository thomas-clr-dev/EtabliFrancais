@include('../templates/navbar')



<div class="ArtisansBois" style="background-image: url({{ asset('img/forest.png') }});">
    <div class="header white-filter">
        <h1>Nos Verriers</h1>
    </div>
    <div class="white-filter">
        <div class="boite">
            <div>
                <img class="b" src="{{ asset('img/luc_reyn.jpg') }}" />
            </div>
            <div class="texte">
                <h3>Lucas Reynard</h3>

                <p>Lucas Reynard, incarne la fusion de l'art et de la fonctionnalité dans la création de pièces uniques
                    en verre. Il se distingue par son savoir-faire artisanal, où chaque œuvre est méticuleusement conçue
                    à la main. De la verrerie décorative élégante aux ustensiles de cuisine pratiques, chaque création
                    reflète un mélange subtil entre créativité, qualité et esthétique.</p>
                <br>
                <a class="CTA2">Nous contacter</a>
            </div>
        </div>

        <div class="boite">
            <div>
                <img class="b" src="{{ asset('img/aure_lef.webp') }}" />
            </div>
            <div class="texte">
                <h3>Aurélie Lefèvre</h3>

                <p>Aurélie Lefèvre Les créations de Aurélie sont des témoignages éblouissants de son talent exceptionnel
                    en tant que maître-verrière et artiste visionnaire. Chaque pièce façonnée par ses mains habiles
                    révèle une harmonie parfaite entre tradition et innovation.</p>
                <br>
                <a class="CTA2">Nous contacter</a>
            </div>
        </div>
    </div>

</div>



@include('../templates/footer')