@extends('layout')

@section('home')
    <h1>Selamat Datang, Faqih!</h1>
    <div class="table-container">
        <div class="table-header">
            <h2>Daftar Produk</h2>
            <button>
                <img src="{{ asset('assets/img/plus-solid.png') }}" alt="Tambah Produk">
                <span>Tambahkan Produk</span>
            </button>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Produk 1</td>
                <td>Kategori 1</td>
                <td>Rp. 100.000</td>
            </tr>
        </table>
    </div>
@endsection