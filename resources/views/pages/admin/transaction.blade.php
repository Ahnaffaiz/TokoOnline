<<<<<<< HEAD
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
=======
@extends('layouts.admin')

@section('title', 'Transaksi')
@section('content')
<div class="container">
  @if ($cart->isEmpty())
    <div class="text-center">
      <h1>:|</h1>
      <p>Cart kamu masih kosong.</p>
      <p><a href="{{ url('/catalogs') }}">Lihat semua produk <i class="fa fa-arrow-right"></i></a></p>
    </div>
  @else
    <table class="cart table table-hover table-condensed">
      <thead>
        <tr>
          <th style="width:50%">Produk</th>
          <th style="width:10%">Harga</th>
          <th style="width:8%">Jumlah</th>
          <th style="width:22%" class="text-center">Subtotal</th>
          <th style="width:10%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($cart->details() as $order)
        <tr>
          <td data-th="Produk">
            <div class="row">
              <div class="col-sm-2 hidden-xs"><img src="{{ $order['detail']['photo_path'] }}" alt="..." class="img-responsive"/></div>
              <div class="col-sm-10">
                <h4 class="nomargin">{{ $order['detail']['name'] }}</h4>
              </div>
            </div>
          </td>
          <td data-th="Harga">Rp{{ number_format($order['detail']['price']) }}</td>
          <td data-th="Jumlah">
            {!! Form::open(['url' => ['cart', $order['id']], 'method'=>'put', 'class' => 'form-inline' ]) !!}
            {!! Form::number('quantity', $order['quantity'], ['class'=>'form-control text-center']) !!}
          </td>
          <td data-th="Subtotal" class="text-center">Rp{{ number_format($order['subtotal'] ) }}</td>
          <td class="actions" data-th="">
            {!! Form::button('<i class="fa fa-refresh"></i>', array('type' => 'submit', 'class' => 'btn btn-info btn-sm')) !!}
            {!! Form::close() !!}

            {!! Form::open(['url' => ['cart', $order['id']], 'method'=>'delete', 'class' => 'form-inline']) !!}
            {!! Form::button('<i class="fa fa-trash-o"></i>', array('type' => 'submit', 'class' => 'btn btn-danger btn-sm js-submit-confirm', 'data-confirm-message' => 'Kamu akan menghapus ' . $order['detail']['name'] . ' dari cart.')) !!}
            {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr class="visible-xs">
          <td class="text-center"><strong>Total Rp{{ number_format($cart->totalPrice()) }}</strong></td>
        </tr>
        <tr>
          <td><a href="{{ url('/catalogs') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Belanja lagi</a></td>
          <td colspan="2" class="hidden-xs"></td>
          <td class="hidden-xs text-center"><strong>Total Rp{{ number_format($cart->totalPrice()) }}</strong></td>
          <td><a href="{{ url('/checkout/login') }}" class="btn btn-success btn-block">Pembayaran <i class="fa fa-angle-right"></i></a></td>
        </tr>
      </tfoot>
    </table>
  @endif

</div>
@endsection
>>>>>>> 5ecc2a62076c1f21815954dd77674e1ec2730d00
