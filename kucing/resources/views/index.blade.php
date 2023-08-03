@extends('frontend')

@section('Content')

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
        <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
          <div class="content d-flex flex-column justify-content-center">
            <h3>Meowrachasite !</h3>
            <p>
              Merupakan forum khusus pecinta kucing di indonesia. Melalui forum kucing ini kamu dapat berinteraksi dan berdiskusi antara sesama pecinta kucing lainnya terkait permasalahan kucing yang kamu alami. Selain itu, kamu dapat memperoeh informasi melalui artikel yang tersedia pada website ini loh ^^
            </p>
            <div class="row">
              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Topics</strong></p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                 <p><strong>Anggota</strong></p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-clock"></i>
                  <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Article</strong></p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Category</strong></p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Category Section ======= -->
 <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Category</h2>
      </div>

      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Name</th>


            </tr>
          </thead>
          <tbody>
            @foreach($category as $category)
            <tr>
              <td>{{ $category->name }}</td>

            </tr>
            <tr>
              @endforeach

          </tbody>
        </table>
      </div> -->
  </section><!-- End Category Section -->


  <!-- ======= Forum Section ======= -->
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


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>

      </div>
<!--
      <div class="row"> -->

        <div class="col-lg-4 col-md-4">
          <div class="contact-about">
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>



          </div>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@stop
