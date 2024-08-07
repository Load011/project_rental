@extends('tampilan_luar.app')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('frontend/images/bg_3.jpg')}}');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                            class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i
                        class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Detail Mobil</h1>
        </div>
    </div>
</div>
</section>


<section class="ftco-section ftco-car-details">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="car-details">
                <div class="img rounded" style="background-image: url({{Storage::url($car->foto_mobil)}});"></div>
                <div class="text text-center">
                    <h2>{{$car->nama_mobil}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
                <div class="media-body py-md-4">
                    <div class="d-flex mb-3 align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-dashboard"></span></div>
                        <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Kilometer Mobil
                                <span>{{$car->mileage}} KM</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
                <div class="media-body py-md-4">
                    <div class="d-flex mb-3 align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-pistons"></span></div>
                        <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Transmisi Mobil
                                <span>{{$car->transmisi}}</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
                <div class="media-body py-md-4">
                    <div class="d-flex mb-3 align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-car-seat"></span></div>
                        <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Tempat Duduk
                                <span> {{$car->tmp_duduk}} Orang Dewasa</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
                <div class="media-body py-md-4">
                    <div class="d-flex mb-3 align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-diesel"></span></div>
                        <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Jenis Bahan Bakar
                                <span>{{$car->bahan_bakar}}</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pills">
            <div class="bd-example bd-example-tabs">
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="pills-manufacturer-tab" data-toggle="pill"
                                href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                aria-expanded="true">Deskripsi Mobil</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel"
                        aria-labelledby="pills-manufacturer-tab">
                        {!! $car->deskripsi_mobil !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-section mt-5 bg-light">
<div class="container">
    <div class="row no-gutters">
        <div class="col-md-12	featured-top">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-10 d-flex align-items-center">
                    <div class="services-wrap rounded-right w-100">
                        <h3 class="heading-section text-center mb-4">What are you waiting for?</h3>
                        <div class="row d-flex mb-4">
                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                <div class="services w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="flaticon-route"></span></div>
                                    <div class="text w-100">
                                        <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                <div class="services w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="flaticon-handshake"></span></div>
                                    <div class="text w-100">
                                        <h3 class="heading mb-2">Select the Best Deal</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center align-self-stretch ftco-animate">
                                <div class="services w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="flaticon-rent"></span></div>
                                    <div class="text w-100 text-center mx-auto m-auto">
                                        <h3 class="heading mb-2 text-center">Reserve Your Rental Car</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-5"><a href="#"
                                class="btn text-center mx-auto m-auto ml-auto btn-primary py-3 px-4">Book
                                Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Pilih Mobil</span>
            <h2 class="mb-2">Tertarik dengan Mobil lainnya?</h2>
        </div>
    </div>
    <div class="row">
        @foreach($related_cars as $rc)
        <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end"
                    style="background-image: url({{Storage::url($rc->foto_mobil)}});">
                </div>
                <div class="text">
                    <h2 class="mb-0"><a href="car-single.html">{{$rc->nama_mobil}}</a></h2>
                    <div class="d-flex mb-3">
                        <p class="price ml-auto">Rp {{$rc->harga_sewa}} <span>/day</span></p>
                    </div>
                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                            href="{{route('car.show', $rc->id)}}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
@endsection