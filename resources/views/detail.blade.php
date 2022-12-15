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
          </div>

        </div>
        <div class="row">
          <div class="col-md-12">
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
    <section>
      <div class="container">
        <h3 class="text-center">Mungkin Anda Tertarik</h3>
        <div class="row">
          @foreach ($portfolios as $portfolio)
          <div class="col-md-4">
          <div class="card">
            <img src="https://dashboard.kreasijaya.com/images/portfolio/{{json_decode($portfolio->image)[0]}}" style="width: 100%" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">{{$portfolio->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$portfolio->kategori}}</h6>
              <a href="{{ route('detail', str_replace(' ','-',strtolower($portfolio->title))) }}" class="btn btn-outline-primary">Add to Cart</a>
            </div>
          </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection