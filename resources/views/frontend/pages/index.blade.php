@extends('frontend.layouts.base')
@section('main-content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Welcome to Mpower Services</h1>
          <h2>We are team of talented professional</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-stack-line"></i></div>
            <h4 class="title"><a href="">Our Mission</a></h4>
            <p class="description">{!! Str::limit($about->site_mission, 200) !!}</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-palette-line"></i></div>
            <h4 class="title"><a href="">Our Vision</a></h4>
            <p class="description">{!! Str::limit($about->site_vision, 200) !!}</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href="">Why Choose Us</a></h4>
            <p class="description">{!! Str::limit($about->site_why_us, 200) !!}</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
        </div>

        <div class="row content">
            <p>{{ $about->site_description }}</p>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row">
        @foreach($clients as $client)
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="{{ asset(imagePath($client->client_logo, 'clients')) }}" class="img-fluid" alt="">
          </div>
        @endforeach
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Services</h2>
        </div>
        <div class="row">
            @foreach($services as $service)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch p-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <h4><a href="">{{ $service->service_name }}</a></h4>
              <p>{!! Str::limit($service->service_description, 400) !!}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Sevices Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Teams</h2>
        </div>
        <div class="row">
            @foreach($teams as $team)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset(imagePath($team->image, 'teams')) }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="{{ $team->twitter }}"><i class="bi bi-twitter"></i></a>
                  <a href="{{ $team->facebook }}"><i class="bi bi-facebook"></i></a>
                  <a href="{{ $team->instagram }}"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $team->name }}</h4>
                <span>Contact : <strong>{{ $team->contact }}</strong></span>
              </div>
            </div>
          </div>
            @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Please feel free to contact with us if you have any further questions.</p>
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
                <p>{{ $about->address }}</p>
                <p>{{ $about->address_one }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto: {{$about->email_one}}"> {{ $about->email_one }} </a></p>
                <p><a href="mailto: {{$about->email_two}}"> {{ $about->email_two }} </a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><a href="tel: {{ $about->contact_number_one }}">{{ $about->contact_number_one }}</a></p>
                <p><a href="tel: {{ $about->contact_number_two }}">{{ $about->contact_number_two }}</a></p>
                <p><a href="tel: {{ $about->contact_number_three }}">{{ $about->contact_number_three }}</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row gy-2 gx-md-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group col-12">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group col-12">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3 col-12">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center col-12"><button type="submit">Send Message</button></div>
              </div>
            </form>

          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
