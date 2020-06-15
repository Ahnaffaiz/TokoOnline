@extends('layouts.admin')

@section('title', 'Transaksi')
@section('content')
<div class="container">
    <table class="table table-striped table-bordered" id="table_product">
        
        {{-- @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Buku</strong> Berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif --}}

        <thead class="bg-primary text-white" >
            <tr>
                {{-- <td scope="col">Sampul</td> --}}
                <th scope="col">No</th>
                <th scope="col">Id Transaksi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Metode Pembayaran</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td scope="col">{{$loop->iteration}}</td>
                <td  scope="col">{{$transaction->id}}</td>
                <td  scope="col">{{$transaction->date_transaction}}</td>
                <td  scope="col">{{$transaction->payment}}</td>
                <td  scope="col">{{$transaction->status}}</td>
                <td scope="col">
                <a href="/transaksi/{{$transaction->id}}" class="badge badge-info">Ubah Status</a>
                </td>    
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection