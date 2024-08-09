@extends('tampilan.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Mobil Service</h3>
                        </div>

                        <div class="card-body">
                            <div>
                                <a href="{{ route('mo_srv.create')}}" class="btn btn-success mb-3">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah Mobil Service</span>
                                </a>
                                @if($moses->isEmpty())
                                <div class="alert alert-info">
                                    Tidak Ada Service
                                </div>
                                @else
                            </div>
                            <table class="table">
                                <thead class="thead-fixed">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Mobil</th>
                                        <th>Jenis Service</th>
                                        <th>Harga Service</th>
                                        <th>Aksi Tambahan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($moses as $index=>$mose)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$mose->mobil->nama_mobil}}</td>
                                        <td>{{$mose->service->nama_service}}</td>
                                        <td>Rp {{number_format($mose->harga_service, 0, ',', '.')}}</td>
                                        <td>
                                            <a href="{{ route('mo_srv.edit', $mose->id) }}"
                                                class="btn btn-secondary btn-sm">Edit</a>
                                            <form action="{{ route('mo_srv.destroy', $mose->id) }}" method="POST"
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