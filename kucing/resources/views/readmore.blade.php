@extends('frontend')

@section('Content')


<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Postingan Details</h2>
        {{$postingan->updated_at->format('l j F Y')}}

      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('imageUploaded/'.$postingan->image) }}" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>


        <div class="portfolio-description">

          <h2><b>{{ $postingan->title }}</b></h2>
          <p>
            {{ $postingan->description }}
          </p>
        </div>

        <div class="form-group">
          <label>Reply</label>
          <textarea class="form-control" name="description"  rows="5" placeholder="Enter ..."></textarea>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    


    </div>

  </div>
</section><!-- End Portfolio Details Section -->
<!-- text input -->


</main><!-- End #main -->


@stop
