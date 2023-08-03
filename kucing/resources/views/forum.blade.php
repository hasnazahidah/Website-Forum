@extends('index')

@section('main-forum')


<section id="services" class="services section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Forum</h2>
    </div>

    <!-- Forum List -->

    @foreach($posts as $postingan)


      <div class="card mb-2">
          <div class="card-body p-2 p-sm-3">
              <div class="media forum-item">
                  <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                  <div class="media-body">

                      <h6><a href="{{ url('blog/'.$postingan->id) }}" data-toggle="collapse" class="text-body">{{ $postingan->title }}</a></h6>


                      <p class="text-secondary">
                          {{ $description = substr($postingan->description, 0, 100) }}
                          <a href="{{ url('blog/'.$postingan->id) }}" data-toggle="collapse" class="text-body">....readmore</a>
                      </p>

                      <!-- <p class="text-muted"><a href="#" class="d-block"></a> posts</p> -->
                  </div>



              </div>

          </div>
      </div>
      @endforeach
    <!-- /Forum List -->

  </div> -->
</section><!-- End Forum Section -->

@stop
