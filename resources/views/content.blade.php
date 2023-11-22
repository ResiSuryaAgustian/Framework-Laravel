@extends('utama')

@section('content')

<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tokoku</h4>
              <p class="card-description">
                Selamat berbelanja
              </p>
              <form action="/barang/proses" method="post">
                @csrf
            <!-- 1. Kode barang
                2. Nama Barang
                3. Jenis varian
                4. Qty
                5. Harga Jual -->
            

                <div class="form-group">
                    <label>Kode Barang:</label>
                <input class="form-control" type="text" name="kode_barang" required>
                </div>

                <div class="form-group">
                    <label>Nama Barang:</label>
                <input class="form-control" type="text" name="nama_barang" required>
                </div>
            
                <div class="form-group">
                <label>Jenis Varian:</label>
                <input class="form-control"  type="text" name="jenis_varian" required>
                </div>
            
                <div class="form-group">
                <label>Qty:</label>
                <input class="form-control" type="text" name="qty" required>
                </div>
            
                <div class="form-group">
                <label>Harga Jual:</label>
                <input class="form-control" type="text" name="harga_jual" required>
                </div>
                
            
            
                {{-- <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                  </label>
                </div> --}}
                <button type="submit" class="btn btn-primary me-2">Proses</button>
                <button class="btn btn-light">Cancel</button>
            
              </form>
              @isset($result)
                <h2>Hasil:</h2>
                <p>Kode Barang: {{ $result['kode_barang'] }}</p>
                <p>Nama Barang: {{ $result['nama_barang'] }}</p>
                <p>Jenis Varian: {{ $result['jenis_varian'] }}</p>
                <p>Qty: {{ $result['qty'] }}</p>
                <p>Harga Jual: {{ $result['harga_jual'] }}</p>
            
                <p>Total Harga Jual: {{ $result['total_harga'] }}</p>
                <p>Potongan Harga: {{ $result['potongan_harga'] }}</p>
                <p>Harga yang Harus Dibayar: {{ $result['harga_setelah_diskon'] }}</p>
            @endisset

            </div>
          </div>
        </div>




@endsection
