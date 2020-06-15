@extends('layouts.admin')

@section('title', 'Daftar Produk')
@section('content')
    <div class="container">
        <a href="/produk/create" class="btn btn-primary my-3"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Produk</a>
        <table class="table table-striped table-bordered" id="table_product">
            
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Buku</strong> Berhasil ditambahkan
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <thead class="bg-primary text-white" >
                <tr>
                    {{-- <td scope="col">Sampul</td> --}}
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td scope="col">{{$loop->iteration}}</td>
                    <td  scope="col">{{$product->title}}</td>
                    <td  scope="col">{{$product->price}}</td>
                    <td  scope="col">{{$product->stock}}</td>
                    <td scope="col">
                    <a href="/produk/{{$product->id}}" class="badge badge-info">Detail</a>
                    </td>    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready( function () {
        $('#table_product').DataTable();
    } );
    </script>
@endsection