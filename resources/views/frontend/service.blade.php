@extends('tampilan_luar.app')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('frontend/background/service.jpg')}}');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
    <div class="col-md-9 ftco-animate pb-5">
      <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
              class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
            class="ion-ios-arrow-forward"></i></span></p>
      <h1 class="mb-3 bread">Our Services</h1>
    </div>
  </div>
</div>
</section>

<section class="ftco-section">
<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-7 text-center heading-section ftco-animate">
      <span class="subheading">Services</span>
      <h2 class="mb-3">Our Latest Services</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="services services-2 w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span>
        </div>
        <div class="text w-100">
          <a href="{{route('frontend.wedding')}}">
            <h3 class="heading mb-2">Wedding Ceremony</h3>
            <p>For your best day of your life, we provide you the best accommodation</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="services services-2 w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span>
        </div>
        <div class="text w-100">
          <h3 class="heading mb-2">Toba Lake and Samosir</h3>
          <p>Lake Toba has so many beautiful tourist destinations that it would be a real loss if you missed it.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="services services-2 w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
        </div>
        <div class="text w-100">
          <h3 class="heading mb-2">Airport Transfer</h3>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <a href="{{route('frontend.rent')}}">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
          </div>
          <div class="text w-100">
            <h3 class="heading mb-2">Whole City Tour</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </a>
      
    </div>
  </div>
</div>
</section>
@endsection