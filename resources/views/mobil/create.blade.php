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
                                        <label for="harga_sewa">Harga Sewa</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" name="harga_sewa" id="harga_sewa" class="form-control currency" onkeyup="formatInput(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_mobil">Deskripsi Mobil</label>
                                        <textarea name="deskripsi_mobil" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="mileage">Mileage</label>
                                        <input type="number" name="mileage" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="foto_mobil">Foto Mobil</label>
                                        <input type="file" name="foto_mobil" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tmp_duduk">Tempat Duduk</label>
                                        <input type="number" name="tmp_duduk" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahan_bakar">Bahan Bakar</label>
                                        <input type="text" name="bahan_bakar" class="form-control" required>
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