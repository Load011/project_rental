@extends('tampilan.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">

                        <div class="card-header">
                            <h3 class="card-title"> Tambah Supir Rental</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{route('supir.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_supir">Nama Supir:</label>
                                        <input type="text" class="form-control" id="nama_supir" name="nama_supir" value="{{ old('nama_supir')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_sim">No SIM Supir</label>
                                        <input type="text" name="no_sim" id="no_sim" class="form-control" maxlength="16" required  value="{{ old('no_sim')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_ktp">No KTP Supir</label>
                                        <input type="text" name="no_ktp" id="no_ktp" class="form-control" maxlength="16" required value="{{ old('no_ktp')}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_tlp">No Telepon Supir:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="no_tlp" name="no_tlp" data-inputmask="'mask': '+62 999-9999-9999'" data-mask value="{{ old('no_tlp') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_supir">Alamat Tinggal Supir</label>
                                        <input type="text" name="alamat_supir" id="alamat_supir" class="form-control" required value="{{ old('alamat_supir')}}">
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
        $(document).ready(function(){
            $('[data-mask]').inputmask();
            $('form').on('submit', function() {
                let no_tlp = $('#no_tlp').val();
                no_tlp = no_tlp.replace(/^\+62|\D/g, '');
                no_tlp = '+62' + no_tlp;
                $('#no_tlp').val(no_tlp);
            });
        });
    </script>
@endsection