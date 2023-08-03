@extends('anggota-template')

@section ('anggota-content-wrapper')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">
        {{ $title }}
        </h1>
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
  <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Category List</h3>


              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">


                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>

                  </div>

                </div>
                  <a class="btn btn-primary" href="{{url('categoryanggota/create')}}" > + Add Category <a>
                <!-- <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <a href="">Add Category</a>
                </button> -->

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($category_anggota_list as $categoryanggota)
                  <tr>

                    <td>{{ $categoryanggota->name }}</td>

                    <td><span class="tag tag-success">
                      <div class="btn-group">
                        <a class="btn btn-warning btn-sm" href="{{ url('/categoryanggota/'.$categoryanggota->id.'/edit') }}"> Edit <a>
                          <form method="post" action="{{ url('/categoryanggota/'.$categoryanggota->id )}}">
                            <input type="hidden" name="_method" value="DELETE" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                          </form>
                      </div>

                    </span></td>

                  </tr>
                  <tr>
                    @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</section>
<!-- /.content -->
@stop
