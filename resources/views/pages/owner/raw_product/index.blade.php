@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Bahan Baku</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Bahan Baku</h6>
            </div>
            <div class="card-header py-3">
                <a href="{{ route("owner.raw-product.create") }}"><button class="btn btn-success">+ Tambah Data Bahan Baku</button></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($raw_products as $raw_product)
                            <tr>
                                <td>{{ $raw_product->RawProduct->name }}</td>
                                <td>{{ $raw_product_owner->description }}</td>
                                <td>{{ $raw_product_owner->image }}</td>
                                <td class="d-flex">
                                    <a href="{{ route("owner.raw-product.edit", $raw_product->id) }}">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                    <form method="POST" action="{{ route("owner.raw-product.destroy", $raw_product->id) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $raw_products->links() }}

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
