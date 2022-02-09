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
              <li class="breadcrumb-item"><a href="/akun">User Account</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section>
     <div class="container mt-3">
         <div class="row">
             <div class="col-lg-8">
                 <h1>User Registration</h1>
                 <a href="{{ url('create') }}" class="btn btn-success mt-3">Add New</a>
            </div>

            <div class="col-lg-8 mt-3 text-center">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Telp</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($user as $item)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->role }}</td>
                          <td>{{ $item->phone }}</td>
                          <td>{{ $item->email }}</td>
                          <td>
                            <button class="btn btn btn-primary btn-sm mr-1"><a href="{{ route('detail',$item->id) }}"><i class="fas fa-eye text-white"></i></a></button>

                            <button class="btn btn btn-warning btn-sm"><a href="{{ route('akun.show',$item->id) }}"><i class="fas fa-pencil-alt text-white"></i></a></button>

                            <button class="btn btn btn-danger btn-sm ml-1 button"><a href="{{ route('akun.delete',$item->id) }}" class="delete-confirm"><i class="fas fa-trash-alt text-white"></i></a></button>
                          </td>
                        </tr>
                    @endforeach
              </section>

              @endsection

              @section('script')
              <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
              <script>
                $('.delete-confirm').on('click', function (event) {
                    event.preventDefault();
                    const url = $(this).attr('href');
                    swal({
                        title: 'Are you sure?',
                        text: 'This record and it`s details will be permanently deleted!',
                        icon: 'warning',
                        buttons: ["Cancel", "Yes!"],
                    }).then(function(value) {
                        if (value) {
                            window.location.href = url;
                        }
                    });
                }); 
              </script>    
              @endsection