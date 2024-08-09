@extends('tampilan_luar.app')

@section('content')

<div class="hero-wrap ftco-degree-bg" style="background-image: url('{{asset('frontend/background/royce.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">
            <div class="text w-100 text-center mb-md-5 pb-md-5">
              <h1 class="mb-4">Pelayanan Terbaik, ada disini</h1>
              <p style="font-size: 18px;">Kenyamanan Perjalanan Anda Dimulai di Sini</p>
          </div>
        </div>
      </div>
    </div>
  </div>

   <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
          <div class="row no-gutters">
              <div class="col-md-12	featured-top">
                  <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form action="#" class="request-form ftco-animate bg-primary">
                        <h2>Make your trip</h2>
                              <div class="form-group">
                                  <label for="" class="label">Pick-up location</label>
                                  <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                              </div>
                              <div class="form-group">
                                  <label for="" class="label">Drop-off location</label>
                                  <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                              </div>
                              <div class="d-flex">
                                  <div class="form-group mr-2">
                          <label for="" class="label">Pick-up date</label>
                          <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
                        </div>
                        <div class="form-group ml-2">
                          <label for="" class="label">Drop-off date</label>
                          <input type="text" class="form-control" id="book_off_date" placeholder="Date">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="label">Pick-up time</label>
                      <input type="text" class="form-control" id="time_pick" placeholder="Time">
                    </div>
                      <div class="form-group">
                        <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
                      </div>
                          </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
                                <div class="row d-flex mb-4">
                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                              <div class="services w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                                <div class="text w-100">
                                  <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                              </div>
                              </div>      
                            </div>
                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                              <div class="services w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                                <div class="text w-100">
                                  <h3 class="heading mb-2">Select the Best Deal</h3>
                                </div>
                              </div>      
                            </div>
                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                              <div class="services w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                                <div class="text w-100">
                                  <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                </div>
                              </div>      
                            </div>
                          </div>
                          <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
                            </div>
                        </div>
                    </div>
              </div>
        </div>
  </section>


  <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
          <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Apa yang kami tawarkan?</span>
          <h2 class="mb-2">Seluruh Armada Kami</h2>
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
                                  <p class="price ml-auto">{{ formatRupiah(optional($car->harga)->harga_service) }} <span>/day</span></p>
                                </div>
                                {{-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{route('car.show', $car->slug)}}" class="btn btn-secondary py-2 ml-1">Details</a></p> --}}
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
      <div class="row no-gutters">
        <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('{{asset('frontend/background/side1.jpg')}}');">
        </div>
        <div class="col-md-6 wrap-about ftco-animate">
          <div class="heading-section heading-section-white pl-md-5">
            <span class="subheading">Tentang Kami</span>
            <h2 class="mb-4">Selamat Datang di GPAS</h2>
            <h3>Membawamu kemana pun imajinasimu melangkah.​</h3>​              
            <p>Di GPAS, kami memahami bahwa setiap perjalanan itu unik, 
              itulah sebabnya kami menawarkan beragam kendaraan untuk memenuhi setiap preferensi dan kesempatan. 
              Apakah Anda mencari mobil untuk menjelajahi kota, SUV yang luas untuk perjalanan keluarga, 
              kendaraan segala medan untuk keperluan perusahaan Anda, atau sedan mewah untuk acara istimewa, 
              kami memiliki kendaraan yang sempurna untuk Anda</p>
            <p><a href="#" class="btn btn-primary py-3 px-4">Temukan Kendaraanmu </a></p>
          </div>
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
          @foreach($services as $service)
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-transportation"></span>
            </div>
          </div>
          <div class="text-w-100">
            <h3 class="heading mb-2">{{$service->nama_service}}</h3>
            <p>{{$service->deskripsi_servis}}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

      

  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
          <h2 class="mb-3">Pelanggan yang puas dengan pelayanan kami</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url('{{asset('frontend/testimoni/test_1.jpg')}}')">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">Saya sangat puas dengan layanan rental mobil ini. 
                    Mobilnya dalam kondisi prima dan bersih, serta proses penyewaannya sangat mudah dan cepat. 
                    Pelayanan pelanggan yang diberikan juga sangat ramah dan profesional. 
                    Saya pasti akan merekomendasikan layanan ini kepada teman-teman saya.</p>
                  <p class="name">Andi Sembiring</p>
                  <span class="position">Server Manager</span>
                </div>
              </div>
            </div>
            <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url('{{asset('frontend/testimoni/test_2.jpg')}}')">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Pengalaman saya menyewa mobil di sini sangat memuaskan. 
                        Harga sewanya sangat terjangkau dan pilihan mobilnya juga banyak. 
                        Selama perjalanan, saya merasa sangat nyaman dan aman. 
                        Terima kasih atas pelayanannya yang luar biasa!</p>
                    <p class="name">Tulus Purba</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url('{{asset('frontend/testimoni/test_3.jpg')}}')">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Layanan rental mobil ini benar-benar luar biasa. 
                        Dari awal hingga akhir, semuanya berjalan lancar. 
                        Mobil yang saya sewa sangat terawat dan sesuai dengan yang dijanjikan. 
                        Stafnya juga sangat membantu dan responsif terhadap semua pertanyaan saya. 
                        Sangat direkomendasikan bagi siapa saja yang membutuhkan rental mobil</p>
                    <p class="name">Partogu Sintong</p>
                    <span class="position">Ketua RT</span>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-counter ftco-section img bg-light" id="section-counter">
          <div class="overlay"></div>
      <div class="container">
          <div class="row">
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="2">0</strong>
              <span>Year <br>Experienced</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="20">0</strong>
              <span>Total <br>Cars</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="150">0</strong>
              <span>Happy <br>Customers</span>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text d-flex align-items-center">
              <strong class="number" data-number="67">0</strong>
              <span>Total <br>Branches</span>
            </div>
          </div>
        </div> --}}
      </div>
      </div>
  </section>	
    
@endsection