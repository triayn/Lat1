@extends('adminlte::page')

@section('content_header')
    <h1>Multi One</h1>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quisioner</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputNumber">Id</label>
                <input type="number" class="form-control" id="exampleInputNumber" placeholder="Enter Id">
              </div>
              <div class="form-grup">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="exampleInputDate">Tanggal</label>
                <input type="date" class="form-control" id="exampleInputDate" placeholder="Entri Date">
              </div>
              {{-- <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div> --}}
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="menu" class="btn btn-primary">Back</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
@endsection