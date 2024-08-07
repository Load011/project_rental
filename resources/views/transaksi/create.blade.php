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
                            <form action="{{ route('transaksi.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="id_pesanan">Pesanan</label>
                                    <select name="id_pesanan" class="form-control" required>
                                        <option value="" disabled selected>Pilih Pesanan</option>
                                        @foreach($orders as $order)
                                            <option value="{{ $order->id }}">{{ $order->nama_penyewa }} - {{ $order->lama_sewa }} hari</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_supir">Supir</label>
                                    <select name="id_supir" class="form-control" required>
                                        <option value="" disabled selected>Pilih Supir</option>
                                        @foreach($drivers as $driver)
                                            <option value="{{ $driver->id }}">{{ $driver->nama_supir }}</option>
                                        @endforeach
                                    </select>
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
@endsection