@extends('layouts.index')

@section('title', 'Detail Produk')
@section('content')
    <div class="container">
        <div class="card mx-5 my-5">
            <div class="card-body">
            <h1 class="card-title my-3 ">Checkout</h1> <br> <br>
            <div class="row">
                <div class="col-6">
                    <h3> Isi Keranjang </h3>
                    <div class="row">
                        <div class="col-4">
                            <img src="/images/{{$product->images}}" class="card-img-top" style="max-width: 700px; max-height: 700px;">
                        </div>
                        <div class="col-4">
                            {{$product->title}}
                        </div>
                    </div>
                </div>

                {{-- masukan alamat --}}
                <div class="col-6">
                    <form method="POST" action="/checkout/{{$product->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                    <div class="form-group row col-6">
                        <label for="address">Alamat Penerima</label>
                        <div>
                            <textarea type="text" class="form-control" id="address" placeholder="Tulis Alamat Penerima" rows="5" name="address" ></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="payment">Metode pembayaran :</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <select class="custom-select" id="payment" name="payment">
                                <option selected>BNI(8723818637)</option>
                                <option >BRI(87283784782)</option>
                                <option >BTN(989798989)</option>
                                <option >Ovoo (0987876)</option>
                                </select>
                                @error('categories')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Bayar</button>
                </form>
            </div>
        </div>
    </div>
                
                
            </div>
          </div>
    </div>


@endsection