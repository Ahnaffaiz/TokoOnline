@extends('layouts.admin')

@section('title', 'Daftar Produk')
@section('content')
    <div class="conatiner">
        <table class="table ">
            <thead class="table-primary">
                <th>
                    
                    {{-- <td scope="col">Sampul</td> --}}
                    <td scope="col">Judul</td>
                    <td scope="col">Katogori</td>
                    <td scope="col">Penulis</td>
                    <td scope="col">Penerbit</td>
                    <td scope="col">Tahun Terbit</td>
                    <td scope="col">Stok</td>
                    <td scope="col">Action</td>
                </th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td scope="col">{{$loop->iteration}}</td>
                    <td  scope="col">{{$product->title}}</td>
                    <td  scope="col">{{$product->categories}}</td>
                    <td  scope="col">{{$product->author}}</td>
                    <td  scope="col">{{$product->publisher}}</td>
                    <td  scope="col">{{$product->year}}</td>
                    <td  scope="col">{{$product->stock}}</td>
                    <td scope="col">
                        <a href="" class="badge badge-info">Detail</a>
                        <a href="" class="badge badge-danger">Hapus</a>    
                    </td>    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection