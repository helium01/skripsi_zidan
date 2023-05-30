@extends('admin.layout.core')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <form method="post" action="/faqs">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Pertanyaan</label>
    <input type="text" name="pertanyaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Pertanyaan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">jawaban</label>
    <textarea name="jawaban" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection