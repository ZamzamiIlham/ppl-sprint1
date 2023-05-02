{{-- @extends('layouts.app')

@section('title')
Create Permission
@endsection
@section('content') --}}
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new Permission</h3>
        <div class="card-tools">
            <a href="" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See all Permission</a>
        </div>
    </div>
    <form method="POST" action="">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Permission Name</label>
                <input type="text" name="name"  id="name" class="form-control"  value="name" required placeholder="Permission Name">
            
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create Permission</button>
        </div>
    </form>
</div>
{{-- @endsection --}}