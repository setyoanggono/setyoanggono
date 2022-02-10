@extends('layouts.templates')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route ('akun') }}">Detail</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section>
        <section>
            <div class="container mt-3">
                <h1>Detail</h1>
                <table class="table table-borderless">
                    <tr>
                        <th width="20%">Name</th>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{{ $data->role }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $data->phone }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                      <th>Image</th>
                      <td> <img src="{{ asset('uploads/user/' . $data->image) }}" class="img-thumbnail w-50" alt="">
                      </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ url('/akun') }}" class="btn btn btn-warning text-white">
                              <i class="fas fa-arrow-left"></i>
                              Back
                            </a>
                            </td>
                    </tr>
               </table>
            </div>
          </div>
        </section>
        @endsection