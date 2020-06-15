@extends('layouts.index')

@section('title, TokoKita')
@section('content')
   <!-- jumbotron -->
   <div class="jumbotron" style="margin-top: -80px; height: 768px; background: linear-gradient(241.33deg, #C4F1FF 1.09%, #D7F0FF 58.95%, #F7F5EC 110.81%);">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="container text-start mt-5">
                    <h1 class="display-4 mt-3">Investasi Terbesar, membawa dampak yang besar pula </h1>
                    <h1 class=""></h1>
                    <a class="btn button-primary btn-lg mt-5" href="#" role="button">Get Stated</a>
                </div>
            </div>
            <div class="col-6">
                <div class="container">
                <img src="{{url('backend/img/ilustration.svg')}}" alt="" style="width: 537px; height: 427px;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end of jumbotron -->

<!-- categories -->

<div class="card container" style="margin-top: -130px; height: 180px; width: auto; box-shadow: 10px 10px 80px rgba(0, 0, 0, 0.25);
border-radius: 16px;">
    <div class="card-body mx-2">
        <div class="row">
            <div class="col-3">
                <div class="row mt-4">
                    <div class="col-4">
                    <img src="{{url('backend/img/icon/ic_novel.svg')}}" alt="" style="width: 70px; height: 70px;">
                    </div>
                    <div class="col-6">
                        <h4>Novel</h4>
                        <p>120 Buku</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row mt-4">
                    <div class="col-4">
                    <img src="{{url('backend/img/icon/ic_fotografi.svg')}}" alt="" style="width: 70px; height: 70px;">
                    </div>
                    <div class="col-6">
                        <h4>Fotografi</h4>
                        <p>290 Buku</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row mt-4">
                    <div class="col-4">
                    <img src="{{url('backend/img/icon/ic_biografi.svg')}}" alt="" style="width: 70px; height: 70px;">
                    </div>
                    <div class="col-6">
                        <h4>Biografi</h4>
                        <p>220 Buku</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row mt-4">
                    <div class="col-4">
                    <img src="{{url('backend/img/icon/ic_ilmiah.svg')}}" alt="" style="width: 70px; height: 70px;">
                    </div>
                    <div class="col-6">
                        <h4>Ilmiah</h4>
                        <p>1300 Buku</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center mt-3">
                    <a href="">
                        Semua Kategori
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
<!-- end of categories -->

<!-- produk -->
<div class="row  my-5">
    <div class="col-12 text-center">
        <h1 class="display-4">Produk</h1>
    </div>
    <div class="container my-5">
        <div class="row">

          @foreach ($products as $product)
            <div class="col-3 card-group my-3">
                <div class="card">
                <img src="/images/{{$product->images}}" class="card-img-top" style="height: 259px; object-fit: cover;">
                    <div class="card-body">
                    <h4 class="card-title">{{$product->title}}</h4>
                        <p class="card-text text-harga">Rp. {{$product->price}}</p>
                        <a href="/{{$product->id}}" class="btn btn-block button-blue ">Beli</a>
                        <a href="#" class="btn btn-block button-primary ">Whatsapp</a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
    {{-- <div class="col-12 text-center">
        <a href="" class="btn button-outline-primary">Lihat Semua</a>
    </div> --}}
</div>

<!-- end of produk -->

@endsection