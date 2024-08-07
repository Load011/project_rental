@extends('tampilan.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Aktivasi Pesanan</h3>
                        </div>

                        <div class="card-body">
                            <div>
                                <a href="{{ route('transaksi.create')}}" class="btn btn-success mb-3">
                                    <i class="fas fa-plus"></i>
                                    <span>Atur Pemesanan</span>
                                </a>
                                @if($traqs->isEmpty())
                                <div class="alert alert-info">
                                    Belum ada pesanan yang direalisasikan
                                </div>
                                @else
                            </div>
                            <table class="table">
                                <thead class="thead-fixed">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Penyewa</th>
                                        <th>Mobil Yang Disewa</th>
                                        <th>Lama Penyewaan</th>
                                        <th>Supir</th>
                                        <th>Upah Supir</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($traqs as $index=>$traq)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$traq->sewa->nama_penyewa}}</td>
                                        <td>{{ $traq->sewa->mobil->nama_mobil }}</td> <!-- Display nama_mobil here -->
                                        <td>{{$traq->sewa->lama_sewa}} hari</td>
                                        <td>{{$traq->supir->nama_supir}}</td>
                                        <td>Rp {{ number_format($traq->upah_supir, 0, ',', '.') }}</td> <!-- Add thousands separator -->
                                        <td>
                                            <a href="{{ route('transaksi.edit', $traq->id) }}"
                                                class="btn btn-secondary btn-sm">Edit</a>
                                            <form action="{{ route('transaksi.destroy', $traq->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection