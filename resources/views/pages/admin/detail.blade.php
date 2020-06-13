@extends('layouts.admin')

@section('title', 'Detail Produk')
@section('content')
    <div class="comtainer">
        <div class="card border-left-primary">
            <div class="card-body">
            <h1 class="card-title my-3">{{$product->title}}</h1>
            <img src="/images/{{$product->images}}" class="card-img-top">
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
                    <a href="{{$product->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{$product->id}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger ml-2" type="submit" onclick="myFunction()" id="delete">Hapus</button>
                    </form>
                    <a href="/produk" class="btn btn-outline-warning ml-2">Kembali</a>
                </div>
            </div>
          </div>
    </div>

    @section('script')
        <script>
            function myFunction() {
            var txt;
            var r = confirm("Hapus data produk ?");
            if (r == true) {
                txt = "You pressed OK!";
            } else {
                txt = "You pressed Cancel!";
            }
            document.getElementById("delete").innerHTML = txt;
            }
        </script>
    @endsection


@endsection