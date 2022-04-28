@extends('visitors.template.base')

@section('title', 'DC - Comics')
    
@section('content')

<div>
    <section class="section-main-top">
        <img src="../img/jumbotron.jpg" alt="ciao">
    </section>

    <section class="section-main-bottom">

        <div class="label-current-series">CURRENT SERIES</div>

        <div class="container container-box-series">
            
            @foreach ($comics as $comic)
                <div class="single-box-series">
                    <img class="series-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                
                    <div class="series-title"> {{ $comic['series'] }} </div>
                </div>
            @endforeach
        </div>

        <div class="container-btn-load">
            <div class="btn-load-more">LOAD MORE</div>
        </div>

    </section>
</div>


<div>
    <nav>
        <div class="container nav-container">
            <div class="nav-item">
                <img src="../img/buy-comics-digital-comics.png" alt="Digital Comics">
                <div>DIGITAL COMICS</div>
            </div>
            <div class="nav-item">
                <img src="../img/buy-comics-merchandise.png" alt="Digital Comics">
                <div>DC MERCHANDISE</div>
            </div>
            <div class="nav-item">
                <img src="../img/buy-comics-subscriptions.png" alt="Digital Comics">
                <div>SUBSCRIPTION</div>
            </div>
            <div class="nav-item">
                <img class="img-locator" src="../img/buy-comics-shop-locator.png" alt="Digital Comics">
                <div>COMIC SHOP LOCATOR</div>
            </div>
            <div class="nav-item">
                <img src="../img/buy-dc-power-visa.svg" alt="Digital Comics">
                <div>DC POWER VISA</div>
            </div>
  
        </div>
    </nav>
  </div>



@endsection