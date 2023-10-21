@extends('LayoutMasyarakat')

@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header text-bg-white">
                <h4 class="h4 card-title">Data Laporan Pengduan Masyarakat</h4>
                <div class="card-body">
                    <table id="td-validasi" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Isi Laporan</th>
                                <th>Aksi</th>
                            </tr>
                            <tbody>
                                @foreach ($data as $item)
                                    
                                @endforeach
                                <tr>
                                    <td>{{$item->id_pengaduan}}</td>
                                    <td>{{$item->nik}}</td>
                                    <td>{{$item->tanggal_pengaduan}}</td>
                                    <td>{{$item->isi_laporan}}</td>
                                    <td>
                                        <div class="d-flax gap-2 mb-2">
                                            <button type="button" class="btn btn-primary">Cek Laporan</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection