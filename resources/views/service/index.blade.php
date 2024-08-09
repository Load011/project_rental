@extends('tampilan.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Service Rental</h3>
                        </div>

                        <div class="card-body">
                            <div>
                                <a href="{{ route('service.create')}}" class="btn btn-success mb-3">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah Service</span>
                                </a>
                                @if($services->isEmpty())
                                <div class="alert alert-info">
                                    Tidak Ada Service Tersedia
                                </div>
                                @else
                            </div>
                            <table class="table">
                                <thead class="thead-fixed">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Service</th>
                                        <th>Deskripsi Service</th>
                                        <th>Upah Supir per harinya</th>
                                        <th>Aksi Tambahan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($services as $index=>$srv)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$srv->nama_service}}</td>
                                        <td>{{$srv->deskripsi_servis}}</td>
                                        <td>Rp {{number_format($srv->upah_supir, 0, ',', '.')}}</td>
                                        <td>
                                            <a href="{{ route('service.edit', $srv->id) }}"
                                                class="btn btn-secondary btn-sm">Edit</a>
                                            <form action="{{ route('service.destroy', $srv->id) }}" method="POST"
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