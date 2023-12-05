<form action="/barang/proses" method="post">
    @csrf
<!-- 1. Kode barang
	2. Nama Barang
	3. Jenis varian
	4. Qty
	5. Harga Jual -->

    <div>
    <label>Kode Barang:</label>
    <input type="text" name="kode_barang" required> 
    </div>

    <div>
    <label>Nama Barang:</label>
    <input type="text" name="nama_barang" required>
    </div>

    <div>
    <label>Jenis Varian:</label>
    <input type="text" name="jenis_varian" required>
    </div>

    <div>
    <label>Qty:</label>
    <input type="text" name="qty" required>
    </div>

    <div>
    <label>Harga Jual:</label>
    <input type="text" name="harga_jual" required>
    </div>
        
    <button type="submit">Proses</button>
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


@isset($result)
<table>
    <thead>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Varian</th>
            <th>Qty</th>
            <th>Harga Jual</th>
            <th>Total Harga</th>
            <th>Potongan Harga</th>
            <th>Harga Setelah Diskon</th>
        </tr>
    </thead>
    <tr>
        <td>{{ $result['kode_barang'] }}</td>
    </tr>
</table>
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