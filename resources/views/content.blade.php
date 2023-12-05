@extends('utama')

@section('content')


{{-- <div class="main-panel">        
    <div class="content-wrapper">
      <div class="row"> --}}
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

                <button type="submit" class="btn btn-primary me-2">Proses</button>
                <button class="btn btn-light">Cancel</button>
            
              </form>

<br><br>
@if(isset($result))
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                <th style="border: 1px solid #dddddd; padding: 8px;">Kode Barang</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">Nama Barang</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">Jenis Varian</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">Qty</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">Harga Jual</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">Total Harga</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">Potongan Harga</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">Harga Setelah Diskon</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $result['kode_barang'] }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $result['nama_barang'] }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $result['jenis_varian'] }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $result['qty'] }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $result['harga_jual'] }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $result['total_harga'] }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $result['potongan_harga'] }}</td>
                <td style="border: 1px solid #dddddd; padding: 8px;">{{ $result['harga_setelah_diskon'] }}</td>
                <td><a href="/konten/edit">Edit</a></td>
            </tr>
        </tbody>
    </table>
    <td style="border: 1px solid #dddddd; padding: 8px;">
      <a href="/barang/edit/{{ $result['kode_barang'] }}" class="btn btn-warning">Edit</a>
  </td>
@endif



            </div>
          </div>
        </div>




@endsection
