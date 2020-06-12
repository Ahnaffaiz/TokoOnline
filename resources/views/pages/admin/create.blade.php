    @extends('layouts.admin')

    @section('title', 'Tambah Produk')
    @section('content')
    <div class="card my-2">
        <div class="card-body">
            <div class="container">
                <h2 class="my-3">Tambah Produk</h2>
                
                <form method="POST" action="/produk">
                    @csrf
                    {{-- judul --}}
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="masukkan nama produk">
                            @error('title')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
        
                    {{-- Harga --}}
                    <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-auto">
                        <label class="sr-only" for="price">Harga</label>
                        <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Masukkan harga produk">
                        @error('price')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror    
                    </div>
                        
                    </div>
                    </div>
        
                    {{-- Kategori --}}
                    <div class="form-group row">
                        <label for="categories" class="col-sm-2 col-form-label">kategori</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <select class="custom-select @error('categories') is-invalid @enderror" id="categories" name="categories">
                                <option value="novel" selected>Novel</option>
                                <option value="Biografi">Biografi</option>
                                <option value="Ilmiah">Ilmiah</option>
                                <option value="Agama">Agama</option>
                                <option value="Komik">komik</option>
                                <option value="Ensiklopedi">Ensiklopedi</option>
                                <option value="Antologi">Antologi</option>
                                <option value="Dongeng">Dongeng</option>
                                <option value="Fotografi">Fotografi</option>
                                @error('categories')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    
        
                    {{-- author --}}
                    <div class="form-group row">
                        <label for="author" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                        <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="masukkan nama penulis">
                        @error('author')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        </div>
                    </div>
        
                    {{-- publisher --}}
                    <div class="form-group row">
                        <label for="publisher" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" id="publisher" placeholder="masukkan nama penerbit">
                        @error('publisher')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        </div>
                    </div>
        
                    {{-- year --}}
                    <div class="form-group row">
                        <label for="year" class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="masukkan tahun terbit"/>
                            @error('year')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>
        
                        {{-- stok --}}
                    <div class="form-group row">
                        <label for="stock" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" id="stock" placeholder="Masukkan jumlah stok">
                            @error('stock')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
        
                    {{-- detail --}}
                    <div class="form-group row">
                        <label for="details" class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control @error('details') is-invalid @enderror" id="publisher" placeholder="Tulis Deskripsi Produk" rows="5" name="details"></textarea>
                            @error('details')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- gambar --}}
                    {{-- <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Images</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="images" placeholder="Uplaod image" rows="5" name="images"></textarea>
                        </div>
                    </div> --}}

                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    <a href="" class="btn btn-outline-warning mx-2">Batal</a>
                    
                </form>
                
            </div>
        </div>
      </div>
    
    @endsection