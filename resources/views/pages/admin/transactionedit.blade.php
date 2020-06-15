@extends('layouts.admin')

@section('title', 'Edit Status')
@section('content')
<div class="card my-2">
    <div class="card-body">
        <div class="container">
            <h2 class="my-3">Edit Status Pembayaran</h2>
            
            <form method="POST" action="/transaksi/{{$transaction->id}}" enctype="multipart/form-data">
                @csrf
                @method('patch')
    
                {{-- Kategori --}}
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status Pembayaran</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <select class="custom-select @error('status') is-invalid @enderror" id="status" name="status">
                            <option selected>pending</option>
                            <option value="gagal">gagal</option>
                            <option value="sukses">sukses</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ubah Status</button>
            <a href="/transaksi/{{$transaction->id}}" class="btn btn-outline-warning mx-2">Batal</a>
                
            </form>
            
        </div>
    </div>
  </div>

@endsection