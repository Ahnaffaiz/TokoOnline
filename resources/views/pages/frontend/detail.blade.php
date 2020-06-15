@extends('layouts.index')

@section('title', 'Detail Produk')
@section('content')
    <div class="container">
        <div class="card mx-5 my-5">
            <div class="card-body">
            <h1 class="card-title my-3 ">{{$product->title}}</h1>
            <img src="/images/{{$product->images}}" class="card-img-top" style="max-width: 700px; max-height: 700px;">
                <h4 class="text-success mt-3">Rp. {{$product->price}}</h4>
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
                        <td>{{$product->publisher}}</td>
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
                <p class="mt-4">Details :</p>
                <p>{{$product->details}}</p>
                <div class="mt-5">
                    <a href="#" class="btn button-blue">Beli</a>
                    {{-- <a href="#" class="btn button-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
          </div>
    </div>


@endsection