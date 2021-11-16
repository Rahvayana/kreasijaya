@extends('layouts.frontend')
 <!-- ======= Hero Section ======= -->
@section('content')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>A Different Kind Of Company. A Different Kind Of Result.</h1>
          <h2>Kreasijaya makes it easy to create a website, blog, or online store. Find customizable templates, domains, and easy-to-use tools for any of your problem.</h2>
          <div><a href="#contact" class="btn-get-started scrollto">Get Started</a></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="/assets/img/hero.svg" class="img-fluid" alt="" width="546">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>What we have achieved so far</h3>
          <p>Clients Smart Choice, Full Hard Worker Dreamteam and Project Built To Perfection.</p>
        </div>

        <div class="row counters position-relative">

          <div class="col-lg-4 col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
            <p style="font-weight: bold;">Clients</p>
          </div>

          <div class="col-lg-4 col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p style="font-weight: bold;">Projects</p>
          </div>

          <div class="col-lg-4 col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p style="font-weight: bold;">Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="/assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="/assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="/assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="/assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="/assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="/assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="/assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="/assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>We make sure everything is perfect easy to use, easy to understand. describe to us and we will convert your thought into something wonderfull.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-chat-dots" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Talk the Problem</a></h4>
              <p class="description">First of all, we can discuss your problem you can tell us what is your goal, how to solve the problem.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-journal-bookmark" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Make the Plan</a></h4>
              <p class="description">Secondly, we will talk about the plan how to solve your problem and how to achieve your goal.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Tell the Deadline</a></h4>
              <p class="description">Then tell us how long this project will take, you can tell your goal and we will confirm it.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-credit-card-2-front" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Discuss Payment</a></h4>
              <p class="description">For the payment you can pay fixed price or using hourly, you can pay half from total payment</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bell" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Tell Revision</a></h4>
              <p class="description">Tell the revision you have that missed from your goal, we can discuss before we send the project.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi- file-play" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Send the Project</a></h4>
              <p class="description">We will send the project after every step completed and after you agree of course.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($categories as $category)
              <li data-filter=".{{$category->name}}">{{$category->name}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          @foreach ($portfolios as $portfolio)
          <a href="{{ route('detail', $portfolio->id) }}">
            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolio->kategori}}">
              <div class="portfolio-wrap">
                <img src="https://dashboard.kreasijaya.com/images/portfolio/{{json_decode($portfolio->image)[0]}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$portfolio->title}}</h4>
                  <p>{{$portfolio->kategori}}</p>
                  <div class="portfolio-links">
                    <a href="https://dashboard.kreasijaya.com/images/portfolio/{{json_decode($portfolio->image)[0]}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="{{ route('detail', str_replace(' ','-',strtolower($portfolio->title))) }}" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </a>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="section-title">
      <h2>Testimonials</h2>
    </div>
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">
        
        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/1.JPG" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/2.JPG" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/3.JPG" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/4.JPG" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/assets/img/testimonials/5.JPG" alt="">
              </div>
            </div>
            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="/assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="/assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Team Section -->

    <!-- ======= Gallery Section ======= -->
    {{-- <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/assets/img/gallery/gallery-1.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="/assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/assets/img/gallery/gallery-2.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/assets/img/gallery/gallery-3.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/assets/img/gallery/gallery-4.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/assets/img/gallery/gallery-5.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="/assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/assets/img/gallery/gallery-6.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="/assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/assets/img/gallery/gallery-7.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="/assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/assets/img/gallery/gallery-8.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="/assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>If you interested using our services you can email us using form below. or you can visit our office in this map below.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Perumahan Zamrud No. 134 Dapur Lamongan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>admin@kreasijaya.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 85156987123</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form" id="contact">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection