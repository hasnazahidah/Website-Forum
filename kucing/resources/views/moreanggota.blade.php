@extends('anggota-template')

@section('anggota-content-wrapper')


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

            <h2><b>{{ $postanggota->title }}</b></h2>
            <p>
            {{ $postanggota->description }}
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
  <!-- text input -->
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter ..." value="{{ old('name') }}">
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
  <!-- textarea -->


<div class="row">
<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>

</main><!-- End #main -->


@stop
