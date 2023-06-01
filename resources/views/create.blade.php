@extends('layout')

@section('content')

<div class="banner">
    Add New Product
</div>

<div class="wrapper">
    <form style="padding-top: 2rem;" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <input name="jenis_produk" placeholder="Name">
        </div>
        <div>
            <input name="deskripsi" placeholder="Detail">
        </div>
        <div>
            <label style="color: #696969">Gambar</label>
            <input style="border: none;" type="file" accept="image/*" name="gambar" placeholder="image">
        </div>
        <button style="background-color: #9a32b3; color: white; font-weight: bold; padding-inline: 2rem;" type="submit" class="btn">Save</button>
        <a href="/" style="background-color: red; color: white; font-weight: bold; padding-inline: 2rem;" class="btn">Back</a>
    </form>
</div>

@endsection