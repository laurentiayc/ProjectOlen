@extends('layouts.home')
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Perolehan</h4> 
    </div>
</div>

<a href="/perolehan/create" class="btn btn-info" role="button">Tambahkan Perolehan</a>
<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <center><h3 class="box-title">Daftar Perolehan</h3></center>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Donatur</th>
                            <th>Kegiatan</th>
                            <th>Tanggal Donasi</th>
                            <th>Donasi Cash</th>
                            <th>Donasi Barang</th>
                            <th>Total Donasi</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($perolehans as $perolehan)
                        <tr>
                            @foreach($donaturs as $namaDon)
                            <td>{{ $namaDon->nama_donatur }}</td>
                            @endforeach
                            @foreach($kegiatans as $namKeg)
                            <td>{{ $namKeg->namaKegiatan }}</td>
                            @endforeach
                            <td>{{ $perolehan->tgl_donasi }}</td>
                            <td>{{ $perolehan->donasi_cash }}</td>
                            <td>{{ $perolehan->donasi_barang }}</td>
                            <td>{{ $perolehan->total_donasi }}</td>
                            <td><a href="perolehan/delete/{{$perolehan->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                            <td><a href="perolehan/edit/{{$perolehan->id}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>        
@endsection()

                        