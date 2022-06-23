@extends('adminlte::page')

@section('content_header')
    <h1>Calender</h1>
@endsection

@section('content')
<div class="row">
  <div class="col-md-2">
    <div class="card card-lightblue">
      <div class="card-header">
        <h3 class="card-title"><b>SENIN</b></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <b>01</b>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-2">
    <div class="card card-purple">
      <div class="card-header">
        <h3 class="card-title"><b>SELASA</b></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <b>02</b>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-2">
    <div class="card card-fuchsia">
      <div class="card-header">
        <h3 class="card-title"><b>RABU</b></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <b>03</b>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-2">
    <div class="card card-pink">
      <div class="card-header">
        <h3 class="card-title"><b>KAMIS</b></h3>
      </div>
      <div class="card-body">
        <b>04</b>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-md-2">
    <div class="card card-maroon">
      <div class="card-header">
        <h3 class="card-title"><b>JUMAT</b></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <b>05</b>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-2">
    <div class="card card-lime">
      <div class="card-header">
        <h3 class="card-title"><b>SABTU</b></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <b>06</b>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-2">
    <div class="card card-olive">
      <div class="card-header">
        <h3 class="card-title"><b>MINGGU</b></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <b>07</b>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>


  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Month</h3>
        </div>
        <div class="card-body">
          <ul class="pagination pagination-month justify-content-center">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item active">
                <a class="page-link" href="#">
                    <p class="page-month">Jan</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">
                    <p class="page-month">Feb</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">
                    <p class="page-month">Mar</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">
                    <p class="page-month">Apr</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">
                    <p class="page-month">May</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">
                    <p class="page-month">Jun</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">
                    <p class="page-month">Jul</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">
                    <p class="page-month">Aug</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">
                    <p class="page-month">Sep</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">
                    <p class="page-month">Oct</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">
                    <p class="page-month">Nov</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">
                    <p class="page-month">Dec</p>
                    <p class="page-year">2022</p>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
  <!-- END TYPOGRAPHY -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection