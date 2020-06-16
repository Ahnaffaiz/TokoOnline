@extends('layouts.index')

@section('title', 'Detail Produk')
@section('content')
    <div class="text-center my-5">
        <img src="/backend/img/success.svg" alt="" style="width: 500px;height:500px">
        <h1 class="display 4">Pembayaran sukses</h1>
        <p>Silahkan tranfer sejumlah harga pada rekening yang dipilih</p>
        <a class="btn button-blue my-3" href="{{url('/')}}">Kembali ke home</a>
    </div>

@endsection