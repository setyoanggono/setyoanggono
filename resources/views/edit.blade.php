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
              <li class="breadcrumb-item"><a href="/edit">Edit User</a></li>
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
                <h1>Edit User</h1>
                <div class="col-lg-5">
                    <form action="{{ url('/update/'.$data->id) }}" method="POST" enctype="multipart/form-data" class="mt-3">
                        @csrf
                        <div class="form-group">
                                <label for="name">Enter Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $data->name }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="form-group">
                          <label for="role">Enter Role</label>
                          <select name="role" id="#" class="form-control">
                            <option value="superadmin" {{ $data->role == 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                            <option value="admin" {{ $data->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="accounting" {{ $data->role == 'accounting' ? 'selected' : '' }}>Accounting</option>
                            <option value="it" {{ $data->role == 'it' ? 'selected' : '' }}>IT</option>
                            <option value="mitra" {{ $data->role == 'mitra' ? 'selected' : '' }}>Mitra</option>
                          </select>                        
                        </div>
                        <div class="form-group">
                          <label for="phone">Enter Phone</label>
                          <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $data->phone }}">
                          @error('phone')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                  </div>
                      <div class="form-group">
                                <label for="email">Enter Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $data->email }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="password">Enter Password</label>
                                <input type="text" name="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                              </div>
                              <div class="mb-3">
                                <label for="image" class="form-label">Upload Picture</label>
                                <input class="form-control" type="file" id="image" name="image">
                              </div>
                          <div class="d-flex justify-content-between">
                            <a href="{{ url('/akun') }}" class="btn btn btn-warning text-white">
                              <i class="fas fa-arrow-left"></i>
                              Back
                            </a>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                      </form>   
                </div>
            </div>
          </div>
        </section>
        @endsection

       