@extends('tampilan_luar.app')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('frontend/background/cars-stack.jpg')}}');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('frontend.dashboard')}}">Home <i
                            class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
                        class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Silahkan Pilih Mobilnya</h1>
        </div>
    </div>
</div>
</section>


<section class="ftco-section bg-light">
<div class="container">
    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end"
                    style="background-image: url({{Storage::url($car->foto_mobil)}});">
                </div>
                <div class="text">
                    <h2>{{ $car->nama_mobil }}</h2>
                    <p><strong>Harga Sewa:</strong> {{ formatRupiah($car->harga_sewa) }} / hari</p>
                    <a href="{{ route('car.show', $car->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col text-center">
            {{ $cars->links()}}
        </div>
    </div>
</div>
</section>
    
@endsection