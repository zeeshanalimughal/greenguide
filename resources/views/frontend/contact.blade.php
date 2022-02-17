@extends("frontend.layouts.master")
@section('main-section')
<div class="fixed__advertise__link" >
    <a href="/advert-design-book">Advertise with us</a>
</div>



<div class="contact__us__hero" data-animate="fadeIn" data-animate-delay="500">
    <div class="row w-100">
        <div class="col-lg-5 col-md-12">
            <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
                We’d Love to Hear From You…
            </h1>
            <a href="#contact__title" ><button class="btn__advertise" data-animate="fadeInUp" data-animate-delay="800">Contact Us</button></a>

            </div>
        </div>
</div>




<section>
    <div class="container-fluid px-3 px-sm-10">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase contact__title" id="contact__title" data-animate="fadeInDown" data-animate-delay="600">Get In Touch</h3>
                <p class="text-justify" align="justify" data-animate="fadeInUp" data-animate-delay="700">Typically, it is believed that it takes around 3 seconds to grab a person’s attention with a leaflet design. Thus, it is important that the leaflet contains individualized, personal messages. Subsequently, the resident will decide to either keep or discard the leaflet. The Green Guide is a high-end quality printed magazine with has many useful features for residents, thus it is designed to ensure that residents keep it. Residents are less likely to discard the leaflet if it looks appealing and will keep it for future reference as it brings convenience into their everyday lives.</p>
                <div class="m-t-30" data-animate="fadeInUp" data-animate-delay="900">
                    <form class="widget-contact-form" action="include/contact-form-attachment.php" role="form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" required="" name="widget-contact-form-email" class="form-control email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Your Subject</label>
                                <input type="text" name="widget-contact-form-subject" class="form-control" placeholder="Subject...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control " placeholder="Enter your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message">Attachment file<small>*</small></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                            <input type="file" aria-required="true" name="widget-contact-form-attachment" class="form-control required">
                        </div>
                        <!--   <div class="form-group">
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                            <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                        </div> -->
                        <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </form>
                </div>
                <div class="social-icons m-t-30 social-icons-colored">
                    <ul>
                        <li class="social-facebook" data-animate="fadeInUp" data-animate-delay="800"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-twitter" data-animate="fadeInUp" data-animate-delay="900"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-google" data-animate="fadeInUp" data-animate-delay="1000"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="social-pinterest" data-animate="fadeInUp" data-animate-delay="1100"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="social-vimeo" data-animate="fadeInUp" data-animate-delay="1200"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                        <li class="social-linkedin" data-animate="fadeInUp" data-animate-delay="1300"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" data-animate="fadeInRight" data-animate-delay="900">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.241881356656!2d-0.050808684338578!3d51.61877817965347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761e8ae036c7b1%3A0x85f7847126c3629f!2sLocal%20Green%20Guide%20Ltd%20-%20LGG%20Marketing!5e0!3m2!1sen!2s!4v1639087067763!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
        </div>
    </div>
</section>














<div class="our__team__section py-5 team4">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-md-7 text-center">
          <h3 class="mb-3" data-animate="fadeInDown" data-animate-delay="600">Experienced & Professional Team</h3>
          <h6 class="subtitle desc" data-animate="fadeInUp" data-animate-delay="700">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
        </div>
      </div>
      <div class="row">
        <!-- column  -->
        <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="900">
          <!-- Row -->
          <div class="row">
            <div class="col-md-12 d-flex justify-content-center" >
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-12 text-center">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Mike Reed</h5>
                <h6 class="subtitle mb-3">Managing Director</h6>
                <p class="text-white">You can relay on our amazing features list and also our customer services will be great experience.</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
        <!-- column  -->
        <!-- column  -->
        <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="1100">
          <!-- Row -->
          <div class="row">
            <div class="col-md-12 d-flex justify-content-center" >
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-12 text-center">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Mike Reed</h5>
                <h6 class="subtitle mb-3">Managing Director</h6>
                <p class="text-white">You can relay on our amazing features list and also our customer services will be great experience.</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
        <!-- column  -->
        <!-- column  -->
        <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="1300">
          <!-- Row -->
          <div class="row">
            <div class="col-md-12 d-flex justify-content-center" >
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-12 text-center">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Mike Reed</h5>
                <h6 class="subtitle mb-3">Managing Director</h6>
                <p class="text-white">You can relay on our amazing features list and also our customer services will be great experience.</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
        <!-- column  -->
        <!-- column  -->
        <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="1500">
          <!-- Row -->
          <div class="row">
            <div class="col-md-12 d-flex justify-content-center" >
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-12 text-center">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Mike Reed</h5>
                <h6 class="subtitle mb-3">Managing Director</h6>
                <p class="text-white">You can relay on our amazing features list and also our customer services will be great experience.</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
      </div>
    </div>
  </div>







  <div class="container-fluid partnership__section d-flex justify-content-center flex-column">
      <h1 class="title text-center" data-animate="fadeInUp" data-animate-delay="600">Media Partnerships</h1>
     <div class="container">
        <h4 class="desc text-center" data-animate="fadeInUp" data-animate-delay="700">
            We love to support local events and have been chosen to be media partners for many of the best local festivals and events. The best partnerships include advertising, competitions, editorial, online and engagement at events.
          </h4>
     </div>
    <div class="row d-flex justify-content-center" data-animate="fadeInUp" data-animate-delay="800">
        <div class="content col-lg-12 d-flex justify-content-center">
            <div>
                <ul class="grid grid-4-columns">
                    <li>
                        <a href="#"><img alt="" src="{{url('front/img/clients/1.png')}}"></a>
                    </li>
                    <li>
                        <a href="#"><img alt="" src="{{url('front/img/clients/2.png')}}"></a>
                    </li>
                    <li>
                        <a href="#"><img alt="" src="{{url('front/img/clients/3.png')}}"></a>
                    </li>
                    <li>
                        <a href="#"><img alt="" src="{{url('front/img/clients/4.png')}}"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>






<section class="background-colored text-center p-t-80  p-b-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5" data-animate="fadeInUp" data-animate-delay="700">
                <div class="widget widget-newsletter">
                    <form class="widget-subscribe-form" action="include/subscribe-form.php" role="form" method="post" novalidate="novalidate">
                        <h3 class="text-light">Subscribe to our Newsletter</h3>
                        <div class="input-group mb-0">
                            <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>

                            <input type="email" required="" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                            <button type="submit" id="widget-subscribe-submit-button" class="btn btn-light">Subscribe</button>

                        </div>
                        <small class="text-light">Stay informed on our latest news!</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>









<script>
    $(document).on("scroll", function() {
        if ($(document).scrollTop() > 100) {
            setTimeout(() => {
                $(".fixed__advertise__link").addClass("active")
            }, 400);
        } else {
            setTimeout(() => {
                $(".fixed__advertise__link").removeClass("active")
            }, 400);
        }
    });
</script>

@endsection





