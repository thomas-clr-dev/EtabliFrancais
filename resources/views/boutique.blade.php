@include('../templates/navbar')

<div style="background-image: url({{ asset('img/forest.png') }});">
        <span class="border"></span>
        <div class="white-filter">
            <div class="header">
                <h1>Les produits de nos artisans </h1>
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

@include('../templates/footer')