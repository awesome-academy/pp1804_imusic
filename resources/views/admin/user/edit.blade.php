@extends('admin.master')

@section('title','Edit user')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit user info</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit user info
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                 <form action="{{ route('users.update', $user->id) }}" method="POST">

                      {{ csrf_field() }}
                      {{ method_field('PATCH') }}

                      <div class="form-group">
                        <label for="name">Edit name:</label>
                        <input type="text" class="form-control" id="name" name="username" value="{{ $user->name }}">
                      </div>

                      <div class="form-group">
                        <label for="email">Edit email address:</label>
                        <input type="email" class="form-control" id="email" name="email" value = "{{ $user->email }}">
                      </div>

                      <div class="form-group">
                        <label for="password">Edit password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                      </div>

                      <div class="form-group">
                        <label for="password">Confirm new password:</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                      </div>

                      <button type="submit" class="btn btn-default"><i class="fa fa-edit"></i>Edit</button>
                </form> 
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.container-fluid -->
@endsection

@section('footer')

@endsection
