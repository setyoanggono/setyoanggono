@extends('layouts.templates')
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('gallery') }}">Gallery</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div>
          @foreach ($users as $item)
          <img src="{{ asset('uploads/user/' . $item->image) }}" id="img" data-toggle="modal" data-target="#exampleModal" class="img-thumbnail images" style="max-height:200px;margin:5px" alt="">
          @endforeach
        </div>
        </div>
        <tr>
            
            <td>
                <a href="{{ url('/akun') }}" class="btn btn btn-warning text-white">
                <i class="fas fa-arrow-left mr-10"></i>
                Back
                </a>
                </td>
         </tr>
       </div>
    </div>
  @endsection

  

  