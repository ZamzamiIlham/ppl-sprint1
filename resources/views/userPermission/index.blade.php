@extends('layouts.app')

@section('title')
Permissions
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Permission Table</h3>

        <div class="card-tools">
            <a href="" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create new permission</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date Posted</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @forelse ($permissions as $permission) --}}
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>created_at</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit Permission</a>
                        </td>
                    </tr>
                {{-- @empty
                    <tr>No Result Found</tr>
                @endforelse --}}
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection