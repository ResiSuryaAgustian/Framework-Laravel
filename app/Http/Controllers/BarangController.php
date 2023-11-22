<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BarangController extends Controller
{
    public function index()
    {
        return view('barang');
    }

    public function proses(Request $request)
{
    // Form input

    $kode_barang = $request->input('kode_barang');
    $nama_barang = $request->input('nama_barang');
    $jenis_varian = $request->input('jenis_varian');
    $qty = $request->input('qty');
    $harga_jual = $request->input('harga_jual');

    // Hitung total harga
    $total_harga = $qty * $harga_jual;

    // Hitung potongan harga
    $potongan_harga = 0;
    if ($total_harga >= 500000) {
        $potongan_harga = 0.5 * $total_harga;   //total pembelanjaan >= 500,000 diskon 50%
    } elseif ($total_harga >= 200000) {
        $potongan_harga = 0.2 * $total_harga;   //total pembelanjaan >= 200,000 diskon 20%
    } elseif ($total_harga >= 100000) {
        $potongan_harga = 0.1 * $total_harga;       //total pembelanjaan >= 100,000 diskon 10%
    }

    // Hitung harga setelah diskon
    $harga_setelah_diskon = $total_harga - $potongan_harga;

    $result = [
        'kode_barang' => $kode_barang,
        'nama_barang' => $nama_barang,
        'jenis_varian' => $jenis_varian,
        'qty' => $qty,
        'harga_jual' => $harga_jual,
        'total_harga' => $total_harga,
        'potongan_harga' => $potongan_harga,
        'harga_setelah_diskon' => $harga_setelah_diskon,
    ];

    return view('content', ['result' => $result]);
}
public function coba()
    {
        return view('utama');
    }

    public function form()
    {
        return view('content');
    }

    public function prosesdua(Request $requestdua)
{
    // Form input

    $kode_barang = $requestdua->input('kode_barang');
    $nama_barang = $requestdua->input('nama_barang');
    $jenis_varian = $requestdua->input('jenis_varian');
    $qty = $requestdua->input('qty');
    $harga_jual = $requestdua->input('harga_jual');

    dd($kode_barang);

    // Hitung total harga
    $total_harga = $qty * $harga_jual;

    // Hitung potongan harga
    $potongan_harga = 0;
    if ($total_harga >= 500000) {
        $potongan_harga = 0.5 * $total_harga;   //total pembelanjaan >= 500,000 diskon 50%
    } elseif ($total_harga >= 200000) {
        $potongan_harga = 0.2 * $total_harga;   //total pembelanjaan >= 200,000 diskon 20%
    } elseif ($total_harga >= 100000) {
        $potongan_harga = 0.1 * $total_harga;       //total pembelanjaan >= 100,000 diskon 10%
    }

    // Hitung harga setelah diskon
    $harga_setelah_diskon = $total_harga - $potongan_harga;

    $hasil = [
        'kode_barang' => $kode_barang,
        'nama_barang' => $nama_barang,
        'jenis_varian' => $jenis_varian,
        'qty' => $qty,
        'harga_jual' => $harga_jual,
        'total_harga' => $total_harga,
        'potongan_harga' => $potongan_harga,
        'harga_setelah_diskon' => $harga_setelah_diskon,
    ];

    return view('content', ['hasil' => $hasil]);
}

}
