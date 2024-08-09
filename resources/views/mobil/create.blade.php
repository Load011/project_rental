@extends('tampilan.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">

                        <div class="card-header">
                            <h3 class="card-title"> Tambah Mobil</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{route('mobil.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_mobil">Nama Mobil:</label>
                                        <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="{{ old('nama_mobil')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_mobil">Jenis Mobil:</label>
                                        <select class="form-control" id="jenis_mobil" name="jenis_mobil">
                                            <option value="">Pilih Jenis Mobil</option>
                                            <option value="Exclusive" {{ old('jenis_mobil') == 'Exclusive' ? 'selected' : '' }}>Exclusive</option>
                                            <option value="Harian" {{ old('jenis_mobil') == 'Harian' ? 'selected' : '' }}>Harian</option>
                                            <option value="Offroad" {{ old('jenis_mobil') == 'Offroad' ? 'selected' : '' }}>Offroad</option>
                                            <option value="Premium" {{ old('jenis_mobil') == 'Premium' ? 'selected' : '' }}>Premium</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_mobil">Deskripsi Mobil</label>
                                        <textarea name="deskripsi_mobil" class="form-control" required value="{{ old('deskripsi_mobil')}}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="mileage">Mileage:</label>
                                        <div class="input-group">
                                            <input type="text" name="mileage" id="mileage" class="form-control" value="{{ old('mileage')}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">KM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="foto_mobil">Foto Mobil</label>
                                        <input type="file" name="foto_mobil" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tmp_duduk">Tempat Duduk:</label>
                                        <div class="input-group">
                                            <input type="text" name="tmp_duduk" id="tmp_duduk" class="form-control" value="{{ old('tmp_duduk')}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Orang Dewasa</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahan_bakar">Bahan Bakar</label>
                                        <select class="form-control" id="bahan_bakar" name="bahan_bakar">
                                            <option value="">Pilih Jenis Bahan Bakar</option>
                                            <option value="Solar" {{ old('bahan_bakar') == 'Solar' ? 'selected' : '' }}>Solar</option>
                                            <option value="Pertalite" {{ old('bahan_bakar') == 'Pertalite' ? 'selected' : '' }}>Pertalite</option>
                                            <option value="Pertamax" {{ old('bahan_bakar') == 'Pertamax' ? 'selected' : '' }}>Pertamax</option>
                                            <option value="Dexlite" {{ old('bahan_bakar') == 'Dexlite' ? 'selected' : '' }}>Dexlite</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>

<script>
    function formatInput(input) {
        let value = input.value.replace(/[^0-9]/g, '');
        if (value) {
            value = parseInt(value, 10).toLocaleString('en-US').replace(/,/g, '.');
        }
        input.value = value;
    }
    function unformatInput(input) {
        return input.value.replace(/[^0-9.]/g, '').replace(/\./g, '');
    }
    document.getElementById('currencyForm').addEventListener('submit', function(event) {
        let currencyFields = document.querySelectorAll('.currency');
        currencyFields.forEach(function(field) {
            field.value = unformatInput(field);
        });
    });
</script>
@endsection