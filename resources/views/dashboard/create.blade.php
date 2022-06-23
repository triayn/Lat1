@extends('adminlte::page')

@section('content_header')
    <h1>Profile</h1>
@endsection

@section('content')
<div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-info">
        <h3 class="widget-user-username">Jeyano Lathi Sea</h3>
        <h5 class="widget-user-desc">Founder & CEO</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle elevation-2" src="{{ asset('') }}assets/dist/img/user1-128x128.jpg" alt="User Avatar">
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">Jeyano@gmail.com</h5>
              <span class="description-text">EMAIL</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">Address</h5>
              <span class="description-text">Sit B Sret</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">02</h5>
              <span class="description-text">USER</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-info">
        <h3 class="widget-user-username">Kamajiya Freya</h3>
        <h5 class="widget-user-desc">Manager</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle elevation-2" src="{{ asset('') }}assets/dist/img/user3-128x128.jpg" alt="User Avatar">
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">Kamajiya@gmail.com</h5>
              <span class="description-text">EMAIL</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">Address</h5>
              <span class="description-text">Zeen C Sret</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">01</h5>
              <span class="description-text">USER</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
@endsection