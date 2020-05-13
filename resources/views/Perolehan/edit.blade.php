@extends('layouts.home')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Perolehan</h4> 
    </div>
</div>

<div class="row">
  <div class="col-sm-12">  
    <div class="white-box">
      <center><h3 class="box-title">Tambah Perolehan</h3></center></br>   
      <form action="/perolehan/edit" method="post" class="form-horizontal form-material">
      {{ csrf_field() }}
        <div class="form-group">
          <label class="col-sm-12">Donatur</label>
            <div class="col-sm-12">
              <select class="form-control form-control-line" name="donatur_id">
              <option value="" disabled {{ old('namaDona') ? '' : 'selected' }}>Pilih Donatur</option>
              @foreach($donaturs as $namaDona)
                <option value="{{$namaDona->id}}" {{ old('namaDona') ? 'selected' : '' }} >{{$namaDona->nama_donatur}}</option>
              @endforeach
              </select>
            </div>
        </div>
        <div class="form-group">
          <label class="col-sm-12">Kegiatan</label>
            <div class="col-sm-12">
              <select class="form-control form-control-line" name="kegiatan_id">
              <option value="" disabled {{ old('namaKegi') ? '' : 'selected' }}>Pilih Kegiatan</option>
              @foreach($kegiatans as $namaKegi)
                <option value="{{$namaKegi->id}}" {{ old('namaKegi') ? 'selected' : '' }} >{{$namaKegi->namaKegiatan}}</option>
              @endforeach
              </select>
            </div>
        </div>
        <div class="form-group">
          <label for="tgl_donasi" class="col-md-12">Tanggal Donasi</label>
          <div class="col-md-12">
            <input type="Date" class="form-control" id="tgl_donasi" placeholder="Masukkan Tanggal Donasi" name="tgl_donasi" class="form-control form-control-line"> 
          </div>
        </div>
        <div class="form-group">
          <label for="donasi_cash" class="col-md-12">Donasi Cash</label>
          <div class="col-md-12">
            <input type="Text" class="form-control" id="donasi_cash" placeholder="Masukkan Donasi Cash" name="donasi_cash" class="form-control form-control-line"> 
          </div>
        </div>
        <div class="form-group">
          <label for="donasi_barang" class="col-md-12">Donasi Barang</label>
          <div class="col-md-12">
            <input type="Text" class="form-control" id="donasi_barang" placeholder="Masukkan Donasi Barang" name="donasi_barang" class="form-control form-control-line"> 
          </div>
        </div>
        <div class="form-group">
          <label for="total_donasi" class="col-md-12">Total Donasi</label>
          <div class="col-md-12">
            <input type="Text" class="form-control" id="total_donasi" placeholder="Masukkan Donasi Barang" name="total_donasi" class="form-control form-control-line"> 
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection()

        