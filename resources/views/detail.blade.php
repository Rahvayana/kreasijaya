@extends('layouts.frontend')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{$portfolio->title}}</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>{{$portfolio->title}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                @foreach (json_decode($portfolio->image) as $img)
                <div class="swiper-slide">
                    <img src="{{ env('BASE_IMAGE').$img}}" alt="">
                </div>
                @endforeach

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{$portfolio->kategori}}</li>
                <li><strong>Client</strong>: {{$portfolio->client}}</li>
                <li><strong>Project date</strong>: {{$portfolio->start}}</li>
                <li><strong>Project URL</strong>: <a href="#">{{$portfolio->url}}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{$portfolio->title}}</h2>
              <p style="text-align: justify;">
                {{$portfolio->description}}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection