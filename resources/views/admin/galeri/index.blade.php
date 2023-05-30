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
              <li class="breadcrumb-item active">FAQ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <a class="btn btn-primary ml-4" href="/faqs/create" role="button">Tambahkan Data</a>
    <section class="content mt-4">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">pertanyaan</th>
      <th scope="col">jawaban</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($faqs as $index=>$fa)
    <tr>
      <th scope="row">{{$index+1}}</th>
      <td>{{$fa->pertanyaan}}</td>
      <td>{{$fa->jawaban}}</td>
      <td>
    <a class="btn btn-info ml-4" href="/faqs/{{$fa->id}}/edit" role="button">Edit Data</a>
    <a class="btn btn-danger ml-4" href="/faqs/{{$fa->id}}/delete" data-method="delete">Hapus Data</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
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