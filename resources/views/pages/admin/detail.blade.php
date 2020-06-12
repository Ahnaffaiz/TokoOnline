@extends('layouts.admin')

@section('title', 'Detail Produk')
@section('content')
    <div class="comtainer">
        <div class="card border-left-primary">
            <div class="card-body">
                <h1 class="card-title">{{$product->title}}</h1>
                <img src="..." class="card-img-top" alt="...">
                <h4 class="text-success">Rp. {{$product->price}}</h4>
                <table>
                    <tr>
                        <td>Kategori</td>
                        <td>    :</td>
                        <td>{{$product->categories}}</td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td>    :</td>
                        <td>{{$product->author}}</td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>    :</td>
                        <td>{{$product->publiser}}</td>
                    </tr>
                    <tr>
                        <td>Tahun</td>
                        <td>    :</td>
                        <td>{{$product->year}}</td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>    :</td>
                        <td>{{$product->stock}} buah</td>
                    </tr>
                </table>
                <p class="card-text mt-3">{{$product->details}}</p>
                <div class="mt-5">
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger ml-2">Hapus</a>
                    <a href="/produk" class="btn btn-outline-warning ml-2">Kembali</a>
                </div>
            </div>
          </div>
    </div>
@endsection