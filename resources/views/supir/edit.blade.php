@extends('tampilan.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"> Edit Supir</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('supir.update', $supir->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_supir">Nama Supir:</label>
                                <input type="text" class="form-control" id="nama_supir" name="nama_supir" value="{{ $supir->nama_supir }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_tlp">No Telepon Supir:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="no_tlp" name="no_tlp" data-inputmask="'mask': '+62 999-9999-9999'" data-mask value="{{ $supir->no_tlp }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_ktp">No KTP Supir:</label>
                                <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ $supir->no_ktp }}" pattern="\d{16}" maxlength="16" minlength="16" required>
                            </div>
                            <div class="form-group">
                                <label for="no_sim">No KTP Supir:</label>
                                <input type="text" class="form-control" id="no_sim" name="no_sim" value="{{ $supir->no_sim }}" pattern="\d{16}" maxlength="16" minlength="16" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat_supir">Alamat Supir:</label>
                                <input type="text" class="form-control" id="alamat_supir" name="alamat_supir" value="{{ $supir->alamat_supir }}" required>
                            </div>                           
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('supir.index', $supir->id) }}'">Batal</button>  
                </form>
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