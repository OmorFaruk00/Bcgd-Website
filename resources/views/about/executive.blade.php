@extends('/layouts.master')

@section('title', 'executive')

@section('content')
<section class="page-bg">
    <div class="container">
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title"> Executive Body</h1>
            <p class="page-desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Executive</button>         
          </div>        
      </div>
</section>

<section>
    <div class="container my-5">
        <h1 class="mb-3">Executive Person</h1>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" >
                        <div class="email-signature">
                            <div class="signature-img">
                                <img src="assets/img/team/team-1.jpg" alt="">
                            </div>
                            <div class="signature-details">
                                <h2 class="title">Steve Thomas</h2>
                                <span class="post">web developer</span>
                            </div>
                            <ul class="signature-content">
                                <li><span class="fa fa-mobile-alt"></span> 0987654321</li>
                                <li><span class="fa fa-map-marker-alt"></span> #2021, Lorem Ipsum</li>
                                <li><span class="fa fa-envelope"></span> mail@example.com</li>
                            </ul>
                            <ul class="icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <span class="signature-website">www.yourwebsite.com</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-left" data-aos-delay="100">
                        <div class="email-signature">
                            <div class="signature-img">
                                <img src="assets/img/team/team-2.jpg" alt="">
                            </div>
                            <div class="signature-details">
                                <h2 class="title">Steve Thomas</h2>
                                <span class="post">web developer</span>
                            </div>
                            <ul class="signature-content">
                                <li><span class="fa fa-mobile-alt"></span> 0987654321</li>
                                <li><span class="fa fa-map-marker-alt"></span> #2021, Lorem Ipsum</li>
                                <li><span class="fa fa-envelope"></span> mail@example.com</li>
                            </ul>
                            <ul class="icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <span class="signature-website">www.yourwebsite.com</span>
                        </div>
                    </div>
                    
                   
                </div>
                
              </div>
              <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" >
                        <div class="email-signature">
                            <div class="signature-img">
                                <img src="assets/img/team/team-3.jpg" alt="">
                            </div>
                            <div class="signature-details">
                                <h2 class="title">Steve Thomas</h2>
                                <span class="post">web developer</span>
                            </div>
                            <ul class="signature-content">
                                <li><span class="fa fa-mobile-alt"></span> 0987654321</li>
                                <li><span class="fa fa-map-marker-alt"></span> #2021, Lorem Ipsum</li>
                                <li><span class="fa fa-envelope"></span> mail@example.com</li>
                            </ul>
                            <ul class="icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <span class="signature-website">www.yourwebsite.com</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-left" data-aos-delay="100">
                        <div class="email-signature">
                            <div class="signature-img">
                                <img src="assets/img/team/team-4.jpg" alt="">
                            </div>
                            <div class="signature-details">
                                <h2 class="title">Steve Thomas</h2>
                                <span class="post">web developer</span>
                            </div>
                            <ul class="signature-content">
                                <li><span class="fa fa-mobile-alt"></span> 0987654321</li>
                                <li><span class="fa fa-map-marker-alt"></span> #2021, Lorem Ipsum</li>
                                <li><span class="fa fa-envelope"></span> mail@example.com</li>
                            </ul>
                            <ul class="icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <span class="signature-website">www.yourwebsite.com</span>
                        </div>
                    </div>
                    
                   
                </div>
                
              </div>
            </div>
            <div class="swiper-pagination mt-5"></div>
        </div>
    </div>
</section>
@endsection