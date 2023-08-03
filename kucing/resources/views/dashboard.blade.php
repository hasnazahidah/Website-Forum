@extends('admin-template')

@section ('content-wrapper')
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
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>Category/Tags</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Forum Topics</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Artikel</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- Inner main -->
    <div class="inner-main">
        <!-- Inner main header -->
        <div class="inner-main-header">
            <a class="nav-link nav-icon rounded-circle nav-link-faded mr-3 d-md-none" href="#" data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a>
            <select class="custom-select custom-select-sm w-auto mr-1">
              @foreach($category as $category)
                <option selected="">Category</option>
                <option value="1">{{ $category->name }}</option>

                @endforeach
            </select>
        </div>
        <!-- /Inner main header -->

        <!-- Inner main body -->

        <!-- Forum List -->

        @foreach($posts as $postingan)


          <div class="card mb-2">
              <div class="card-body p-2 p-sm-3">
                  <div class="media forum-item">
                      <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                      <div class="media-body">

                          <h6><a href="{{ url('moreadmin/'.$postingan->id) }}" data-toggle="collapse" class="text-body">{{ $postingan->title }}</a></h6>


                          <p class="text-secondary">
                              {{ $description = substr($postingan->description, 0, 100) }}
                              <a href="{{ url('moreadmin/'.$postingan->id) }}" data-toggle="collapse" class="text-body">....readmore</a>
                          </p>

                          <!-- <p class="text-muted"><a href="#" class="d-block"></a> posts</p> -->
                      </div>



                  </div>

              </div>
          </div>
          @endforeach
        <!-- /Forum List -->



        <!-- /Inner main body -->
    </div>
    <!-- /Inner main -->
  </div>


  </div>


</section>
<!-- /.content -->
@stop
