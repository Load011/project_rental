@extends('tampilan.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Supir Rental</h3>
                        </div>

                        <div class="card-body">
                            <div>
                                <a href="{{ route('supir.create')}}" class="btn btn-success mb-3">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah Supir</span>
                                </a>
                                @if($drivers->isEmpty())
                                <div class="alert alert-info">
                                    Tidak Ada Supir Tersedia
                                </div>
                                @else
                            </div>
                            <table class="table">
                                <thead class="thead-fixed">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Mobil</th>
                                        <th>Harga Sewa / hari</th>
                                        <th>Banyak Kursi</th>
                                        <th>Mileage</th>
                                        <th>Bahan Bakar</th>
                                        <th>Aksi Tambahan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($drivers as $index=>$driver)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$driver->nama_supir}}</td>
                                        <td>{{$driver->no_sim}}</td>
                                        <td>{{$driver->no_tlp}}</td>
                                        <td>{{$driver->no_ktp}}</td>
                                        <td>{{$driver->alamat_supir}}</td>
                                        <td>
                                            <a href="{{ route('supir.edit', $driver->id) }}"
                                                class="btn btn-secondary btn-sm">Edit</a>
                                            <form action="{{ route('supir.destroy', $driver->id) }}" method="POST"
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