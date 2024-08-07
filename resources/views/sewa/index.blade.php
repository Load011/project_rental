@extends('tampilan.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Sewa Mobil</h3>
                        </div>

                        <div class="card-body">
                            <div>
                                @if($rents->isEmpty())
                                <div class="alert alert-info">
                                    Tidak Ada Mobil Tersedia
                                </div>
                                @else
                            </div>
                            <table class="table">
                                <thead class="thead-fixed">
                                    <tr>
                                        <th>#</th>
                                        <th> Mobil Rental </th>
                                        <th> Nama Penyewa </th>
                                        <th> No Telepon </th>
                                        <th> Alamat Penyewa </th>
                                        <th> Email Penyewa </th>
                                        <th> Lama Penyewaan </th>
                                        <th> Harga Penyewa </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($rents as $index=>$rent)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$rent->mobil->nama_mobil}}</td>
                                        <td>{{$rent->nama_penyewa}}</td>
                                        <td>{{$rent->no_hp}}</td>
                                        <td>{{$rent->alamat_penyewa}}</td>
                                        <td>{{$rent->email_penyewa}}</td>
                                        <td>{{$rent->lama_sewa}}</td>
                                        <td>{{$rent->harga_penyewaan}}</td>
                                        <td>
                                            <a href="{{ route('mobil.edit', $rent->id) }}"
                                                class="btn btn-secondary btn-sm">Edit</a>
                                            <form action="{{ route('mobil.destroy', $rent->id) }}" method="POST"
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