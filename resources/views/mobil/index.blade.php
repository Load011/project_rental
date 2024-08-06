@extends('tampilan.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Mobil Rental</h3>
                        </div>

                        <div class="card-body">
                            <div>
                                <a href="{{ route('mobil.create')}}" class="btn btn-success mb-3">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah Mobil</span>
                                </a>
                                @if($cars->isEmpty())
                                <div class="alert alert-info">
                                    Tidak Ada Mobil Tersedia
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
                                    @foreach($cars as $index=>$car)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$car->nama_mobil}}</td>
                                        <td>{{$car->harga_sewa}}</td>
                                        <td>{{$car->tmp_duduk}}</td>
                                        <td>{{$car->mileage}}</td>
                                        <td>{{$car->bahan_bakar}}</td>
                                        <td>
                                            <a href="{{ route('mobil.edit', $car->id) }}"
                                                class="btn btn-secondary btn-sm">Edit</a>
                                            <form action="{{ route('mobil.destroy', $car->id) }}" method="POST"
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