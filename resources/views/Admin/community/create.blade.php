@extends('Admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Comunitty</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <div class="card card-primary card-outline">
            <div class="card-title">
                <h4>Create Community</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Community Name :</label>
                        <input type="text" name="" id="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input type="file" name="" id="" class="form-control" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection