@include('../templates/navbar')



<div class="carousel" style="background-image: url('{{ asset('img/forest.png') }}');">
    <div class="white-filter">
        <div class="header">
            <h1>Nos secteurs d'Activités</h1>
        </div>
        <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="carousel-item">

                <div class="ébénisterie">
                    <div>
                        <img class="bvm" src="{{ asset('img/wood.png') }}">
                    </div>
                    <div>
                        <H2>
                            Ebénisterie
                        </H2>
                        <p>
                            L’ébéniste est un artisan qui transforme des bois, plus ou moins précieux, pour créer du
                            mobilier <br> fonctionnel ou décoratif.<br>
                            Les commodes, encoignures, secrétaires, cabinets, bureaux et autres meubles recouverts <br>
                            d’écailles, de marqueterie, de laque, de vernis, de porcelaine sont des meubles
                            d’ébénisterie.
                            <br>
                            Un meuble d'ébéniste peut être de style ancien ou de création contemporaine.
                        </p>
                        <a class="bouton" href="{{ route('ebenisterie') }}">Découvrir nos artisans</a>
                    </div>
                </div>
            </div>

            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">

                <div class="ébénisterie">
                    <div>
                        <img class="bvm" src="{{ asset('img/glass.png') }}">
                    </div>
                    <div>
                        <H2>
                            Verrerie
                        </H2>
                        <p>
                            La verrerie est l’art de la fabrication du verre. <br> Elle désigne aussi l’atelier du
                            verrier
                            et l’ouvrage en verre. Depuis l’Égypte ancienne, <br> le verre fascine par ses propriétés
                            étranges. Translucide ou transparent, il se travaille au feu, <br> un peu comme un métal.
                        </p>
                        <a class="bouton" href="{{ route('verrerie') }}">Découvrir nos artisans</a>
                    </div>
                </div>
            </div>

            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">

                <div class="ébénisterie">
                    <div>
                        <img class="bvm" src="{{ asset('img/iron.png') }}">
                    </div>
                    <div>
                        <H2>
                            Ferronnerie
                        </H2>
                        <p>
                            La ferronnerie est l'art et la technique du travail du fer à la forge, à l'étampe ou au
                            marteau.
                            <br>Les ouvrages de ferronnerie sont réalisés par un ferronnier ou un forgeron.
                        </p>
                        <a class="bouton" href="{{ route('ferronerie') }}">Découvrir nos artisans</a>
                    </div>
                </div>
            </div>
            <label for="carousel-3" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-1" class="carousel-control next control-3">›</label>
        </div>
    </div>
</div>


@include('../templates/footer')