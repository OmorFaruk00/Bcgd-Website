@extends('layouts.master')

@section('title', 'Activities')

@section('content')
<section class="page-bg">
    <div class="container">
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Our Activities</h1>
            <p class="page-desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Activities</button>         
          </div>        
      </div>
</section>

 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
    <div class="container mt-4" data-aos="fade-up">

     {{-- <h2 class="mb-4">Our Activities</h2> --}}

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="bx bxl-dribbble"></i></div>
                  <div class="">
                      <p class="servece-serial">01</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">SEO Marketing</a></h4>
            <p>Professionally cultivate one-to-one custo service with robust ideas dynam innovat are resource-leveling.</p>
            </div>
            <div class="p-4">
              <a href="#" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="bx bx-file"></i></div>
                  <div class="">
                      <p class="servece-serial">02</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">SEM Marketing</a></h4>
            <p>Holisticly predominate extensible testing nufactured products whereas parallel innovate empowered.</p>
            </div>
            <div class="p-4">
              <a href="#" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="bx bx-tachometer"></i></div>
                  <div class="">
                      <p class="servece-serial">03</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">Website Strategy</a></h4>
            <p>Dramatically engage top-line web service vis-a-vis cutting-edge delivera proactively envisioned multimedia.</p>
            </div>
            <div class="p-4">
              <a href="#" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="bx bx-world"></i></div>
                  <div class="">
                      <p class="servece-serial">04</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">Email Outreach</a></h4>
            <p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
            </div>
            <div class="p-4">
              <a href="#" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="bx bx-slideshow"></i></div>
                  <div class="">
                      <p class="servece-serial">05</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">Re-Targeting</a></h4>
            <p>Taking seamless key performance indicat offline to maximise the long tail keep eye on the ball while.</p>
            </div>
            <div class="p-4">
              <a href="#" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in"   data-aos-delay="100">
          <div class="icon-box">
              <div class="d-flex justify-content-between px-4 pt-4">
                  <div class="icon "><i class="bx bx-arch"></i></div>
                  <div class="">
                      <p class="servece-serial">06</p>
                  </div>                    
              </div>              
            <div class="px-4">
              <h4><a href="">Link Building</a></h4>
            <p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
            </div>
            <div class="p-4">
              <a href="#" class="service-read"> Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

       

      </div>

    </div>
  </section><!-- End Services Section -->
@endsection