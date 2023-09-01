@extends('template.index')

@section('contents')

<!-- Start We Help Section -->
<div class="we-help-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="imgs-grid">
                    <div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
                    <div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
                    <div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
                </div>
            </div>
            <div class="col-lg-5 ps-lg-5">
                <h2 class="section-title mb-4">Nós te ajudamos a personalizar no seu estilo</h2>
                <p>Nós iremos personalizar de acordo com o seu estilo e desejo, podendo até escolher móveis personalizados. Segue alguns estilos abaixo:</p>
                <ul class="list-unstyled custom-list my-4">
                    <li>Moderna</li>
                    <li>Rústica</li>
                    <li>Orientak</li>
                    <li>Vintage</li>
                </ul>
                <p><a herf="#" class="btn">Explore</a></p>
            </div>
        </div>
    </div>
</div>
<!-- End We Help Section -->

<!-- Start Popular Product -->
<div class="popular-product">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="images/product-1.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Cadeira branca</h3>
                        <p>Confortável e estilosa. </p>
                        <p><a href="#">Leia mais</a></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="images/product-2.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Cadeira aero</h3>
                        <p>Te deixa nos "ares".</p>
                        <p><a href="#">Leia mais</a></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="images/product-3.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Cadeira ergonômica</h3>
                        <p>Promete aliviar a dor e desconforto.</p>
                        <p><a href="#">Leia mais</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Popular Product -->

@endsection
