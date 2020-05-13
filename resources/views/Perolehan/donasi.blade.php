@extends('layouts.home')

@section('content')

<div class="row">
    <div class="col-sm-12">  
        <div class="white-box">
            <center><h3 class="box-title">Tambah Donasi</h3></center></br>   
            <form action="/perolehan/create" method="post" class="form-horizontal form-material">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="donasi_cash" class="col-md-12">Donasi Cash</label>
                <div class="col-md-12">
                    <input type="Text" class="form-control" id="donasi_cash" placeholder="Masukkan Nominal Donasi" name="donasi_cash" class="form-control form-control-line"> 
                </div>
            </div>
            <div class="form-group">
                <label for="donasi_barang" class="col-md-12">Donasi Barang</label>
                <div class="col-md-12">
                    <input type="Text" class="form-control" id="donasi_barang" placeholder="Masukkan Nominal Donasi" name="donasi_barang" class="form-control form-control-line"> 
                </div>
            </div>
        </div>
    </div>
</div>

@section

