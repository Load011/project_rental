@extends('tampilan.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">

                        <div class="card-header">
                            <h3 class="card-title"> Tambah Service Rental</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_service">Nama service:</label>
                                        <input type="text" class="form-control" id="nama_service" name="nama_service" value="{{ old('nama_service')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_service">Deskripsi service:</label>
                                        <input type="text" class="form-control" id="deskripsi_service" name="deskripsi_service" value="{{ old('deskripsi_service')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="upah_supir">Upah Supir :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" name="upah_supir" id="upah_supir" class="form-control currency" onkeyup="formatInput(this)" value="{{ old('upah_supir')}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">/per hari</span>
                                            </div>
                                        </div>
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