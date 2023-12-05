
@extends('utama')

@section('content')
<form action="/barang/edit/{{ $data['kode_barang'] }}" method="post">
    @csrf
    @method('post')

    <div class="form-group">
        <label>Kode Barang:</label>
        <input class="form-control" type="text" name="kode_barang" value="{{ $data['kode_barang'] }}" readonly>
    </div>

    <div class="form-group">
        <label>Nama Barang:</label>
        <input class="form-control" type="text" name="nama_barang" value="{{ $data['nama_barang'] }}" readonly>
    </div>

    <div class="form-group">
        <label>Jenis Varian:</label>
        <input class="form-control" type="text" name="jenis_varian" value="{{ $data['jenis_varian'] }}" readonly>
    </div>

    <div class="form-group">
        <label>QTY:</label>
        <input class="form-control" type="text" name="qty" value="{{ $data['qty'] }}" readonly>
    </div>

    <div class="form-group">
        <label>Harga Jual:</label>
        <input class="form-control" type="text" name="harga_jual" value="{{ $data['harga_jual'] }}" readonly>
    </div>

    <!-- Other input fields with pre-filled data -->

    <button type="submit" class="btn btn-primary me-2">Update</button>
    <a href="/barang" class="btn btn-light">Cancel</a>
</form>
