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
              <li class="breadcrumb-item"><a href="/create">User</a></li>
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
                <h1>Add New User</h1>
                <div class="col-lg-5">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                        @csrf
                        <div class="form-group">
                                <label for="name">Enter Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter Name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="form-group">
                          <label for="password">Enter Role</label>
                          <select name="role" id="" class="form-control">
                            <option value="superadmin">Super Admin</option>
                            <option value="admin">Admin</option>
                            <option value="accounting">Accounting</option>
                            <option value="it">IT</option>
                            <option value="mitra">Mitra</option>
                          </select>                        
                        </div>
                        <div class="form-group">
                          <label for="phone">Enter Phone</label>
                          <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Enter Phone">
                          @error('phone')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                  </div>
                      <div class="form-group">
                                <label for="email">Enter Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter Email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                              </div>
                        <div class="form-group">
                          <label for="password">Enter Password</label>
                          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Enter Password">
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
                          <button type="submit" class="btn btn-primary create-confirm">Confirm</button>
                         </div>
                    </form>   
                </div>
            </div>
          </div>
        </section>
        @endsection

        @section('script')
        <script>
          $('.create-confirm').on('click', function (event) {
              event.preventDefault();
              const url = $(this).attr('href');
              swal({
                  title: 'Are you sure?',
                  text: 'This record and it`s details will be permanantly deleted!',
                  icon: 'warning',
                  buttons: ["Cancel", "Yes!"],
              }).then(function(value) {
                  if (value) {
                      window.location.href = url;
                  }
              });
          });    
        @endsection