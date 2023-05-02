@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-5 text-gray-800">Tambah Bahan Baku</h1>

        <!-- DataTales Example -->
        <form action="{{ route("owner.raw-product.store") }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Bahan Baku</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Deskripsi Bahan Baku</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <form method="POST" action="/proses-upload-gambar" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Bahan Baku</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </form>
            
            {{-- <div class="mb-3">
                <label for="unit" class="form-label">Satuan Bahan Baku</label>
                <select class="form-control" aria-label="Default select example" name="unit">
                    <option value="Kilogram">Kilogram</option>
                    <option value="Liter">Liter</option>
                    <option value="Ton">Ton</option>
                    <option value="Buah">Buah</option>
                    <option value="Pack">Pack</option>
                    <option value="Piece">Piece</option>
                </select>
            </div> --}}
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection
