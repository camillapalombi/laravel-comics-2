@extends('visitors.template.base')

@section('title', $title)
    
<!--CONTENT : -->

@section('content')

<main>
    <div class="container-jumbotron">
        <img src="{{ asset('/img/jumbotron.jpg') }}" alt="DC">
    </div>
 
    <div class="blue-line">
       <div class="container">
          <div class="single-img">
             <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
          </div>
       </div>
    </div>

 <!-- SECTION LEFT -->
    <div class="container-description">
       <div class="container">
          <div class="section-left">
             <h1>{{ $comic['title'] }}</h1>
             <div class="green-line">
                <div>
                   <div>
                      <span class="us-price">U.S. Price: </span><span class="dollar-price">{{ $comic['price'] }}</span>
                   </div>
 
                   
                </div>

                <!--Select availability:  -->
                <select name="availability">
                   <option value="0">Check Availability</option>
                   <option value="1">Unavailable</option>
                   <option value="2">Available</option>
                </select>

             </div>

             <p>{{ $comic['description'] }}</p>

          </div>

<!--SECTION RIGHT -->
          <div class="section-right">
            <span class="advertisement">ADVERTISEMENT</span>
             <img src="{{ asset('/img/adv.jpg') }}" alt="Advertising">
          </div>
       </div>
    </div>

 <!-- COMICS INFORMATIONS BOX -->
    <section id="box-info">
       <div class="container">
           <!--LEFT INFO BOX -->
          <div class="left-info">
             <h3>Talent</h3>
             <div class="info-row">
                <span class="prefix-info">Art By:</span>
                <span class="informations">
                    {{ implode(', ', $comic['artists']) }}
                </span>
             </div>
             <div class="info-row">
                <span class="prefix-info">Written By:&nbsp;</span>
                <span class="informations">
                    {{ implode(', ', $comic['writers']) }}
                </span>
             </div>
          </div>

          <!--RIGHT INFO BOX -->
          <div class="right-info">
             <h3>Specs</h3>
             <div class="info-row">
                <span class="prefix-info">Series:&nbsp;</span>
                <span class="informations">
                    {{ $comic['series'] }}
                </span>
             </div>
             <div class="info-row">
                <span class="prefix-info">U.S. Price:&nbsp;</span>
                <span class="informations">
                    {{ $comic['price'] }}
                </span>
             </div>
             <div class="info-row">
                <span class="prefix-info">On Sales Date:</span>
                <span class="informations">
                    {{ $comic['sale_date'] }}
                </span>
             </div>
          </div>
       </div>
    </section>
 </main>

@endsection