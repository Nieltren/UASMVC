@extends('layout')

@section('content')
<div class="banner">
    Add New Product
</div>

<div class="wrapper">
    <form style="padding-top: 2rem;" action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <input name="jenis_produk" value="{{ $product->jenis_produk }}" placeholder="Jenis Produk">
        </div>
        <div>
            <input name="deskripsi" value="{{ $product->deskripsi }}" placeholder="Deskripsi">
        </div>
        <div>
            <input type="file" name="gambar" placeholder="image">
            <img src="/images/{{ $product->gambar }}" width="300px">
        </div>
        <button style="background-color: #9a32b3; color: white; font-weight: bold; padding-inline: 2rem;" type="submit" class="btn">Save</button>
        <a href="/" style="background-color: red; color: white; font-weight: bold; padding-inline: 2rem;" class="btn">Back</a>
    </form>
</div>
@endsection