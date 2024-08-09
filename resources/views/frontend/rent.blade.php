@extends('tampilan_luar.app')

@section('content')
<div class="hero-wrap ftco-degree-bg" style="background-image: url('{{asset('frontend/background/dirt-road.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Ayo Rental Sekarang</h1>
                    <p style="font-size: 18px;"></p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">What we offer</span>
        <h2 class="mb-2">Featured Vehicles</h2>
      </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                  @foreach ($cars as $car)
                  <div class="item">
                      <div class="car-wrap rounded ftco-animate">
                          <div class="img rounded d-flex align-items-end" style="background-image: url({{Storage::url($car->foto_mobil)}});">
                          </div>
                          <div class="text">
                              <h2 class="mb-0"><a href="#">{{ $car->nama_mobil}}</a></h2>
                              <div class="d-flex mb-3">
                                  <p class="price ml-auto">{{ formatRupiah(optional($car->harga)->harga_service) }} <span>/hari</span></p>
                              </div>
                              {{-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{route('car.show', $car->id)}}" class="btn btn-secondary py-2 ml-1">Details</a></p> --}}
                          </div>
                      </div>
                  </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
  
<section class="ftco-section ftco-about">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
              <h1>Silahkan Isi Formnya</h1>
            </div>
            <div class="col-md-8 ftco-animate">
                <div class="heading-section pl-md-8">
                    @if(session('success'))
                    <h2>{{ session('success') }}</h2>
                    <p>Kami akan segera hubungi kamu secepatnya</p>
                    @else
                    <form action="{{route('sewa.store')}}" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="service_id" value="1"> --}}
                    <div class="form-group">
                        <label for="service_id"> Mau paket yang mana?</label>
                        <select class="form-control" id="service_id" name="service_id">
                            <option value="" disabled selected>Pilih Paket</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                                    {{ $service->nama_service }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mobil_id">Mau mobil yang mana?</label>
                        <select class="form-control" id="mobil_id" name="mobil_id" required>
                            <option value="" disabled selected>Pilih Mobil</option>
                            @foreach($cars as $car)
                                <option value="{{ $car->id }}" data-service-ids="{{ $carServices->where('car_id', $car->id)->pluck('service_id')->implode(',') }}" {{ old('mobil_id') == $car->id ? 'selected' : '' }}>
                                    {{ $car->nama_mobil }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_penyewa">Nama Kamu</label>
                        <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" value="{{ old('nama_penyewa') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP Kamu</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" maxlength="12" value="{{ old('no_hp') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_penyewa">Alamat Kamu</label>
                        <input type="text" class="form-control" id="alamat_penyewa" name="alamat_penyewa" value="{{ old('alamat_penyewa') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email_penyewa">Email Kamu</label>
                        <input type="text" class="form-control" id="email_penyewa" name="email_penyewa" value="{{ old('email_penyewa') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="penjemputan">Kapan Kamu Dijemput?</label>
                        <input type="date" class="form-control" id="penjemputan" name="penjemputan" value="{{ old('penjemputan') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="lama_sewa">Berapa lama sewanya (hari)?</label>
                        <input type="number" class="form-control" id="lama_sewa" name="lama_sewa" value="{{ old('lama_sewa') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
            @endif
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
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Wedding Ceremony</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">City Transfer</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Airport Transfer</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Whole City Tour</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const serviceSelect = document.getElementById('service_id');
        const carSelect = document.getElementById('mobil_id');
        
        serviceSelect.addEventListener('change', function () {
            const selectedService = this.value;
            Array.from(carSelect.options).forEach(option => {
                const serviceIds = option.getAttribute('data-service-ids').split(',');
                if (serviceIds.includes(selectedService)) {
                    option.style.display = '';
                } else {
                    option.style.display = 'none';
                }
            });
            carSelect.selectedIndex = 0;
        });
    });
</script>
    
    

@endsection