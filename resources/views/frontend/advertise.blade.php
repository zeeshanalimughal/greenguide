@extends("frontend.layouts.master")
@section('main-section')
    <div class="fixed__advertise__link">
        <a href="/advert-design-book">Advertise with us</a>
    </div>




    <div class="advertise__hero" data-animate="fadeIn" data-animate-delay="500">
        <h1 class="title" data-animate="fadeInDown" data-animate-delay="1000">
            Green Guide magazine
        </h1>
        <h3 class="subtitle" data-animate="fadeInDown" data-animate-delay="1100">
            Discover the potential of exceptional advertising
        </h3>
        <a href="/advert-design-book" data-animate="fadeInUp" data-animate-delay="1200"><button class="btn__advertise">Advertise Now</button></a>
    </div>







    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 pe-5">
                    <h1 class="job-section-two-title"  data-animate="fadeInDown" data-animate-delay="800">
                        Connecting Local Residents & Business
                    </h1>


                    <div class="job-desc"  data-animate="fadeInLeft" data-animate-delay="900">
                        <div class="text-left">
                            <ul>
                                <li class="mb-3">This magazine focuses on residents and aims to provide them with
                                    important information and messages. Ultimately, the goal is to enhance the readership of
                                    the magazine.</li>

                                <li class="mb-3">A local magazine enables you to communicate directly to potential
                                    customers in the local area.</li>

                                <li class="mb-3">Although the internet is packed full of marketing noise, which we
                                    generally filter, a magazine only has a few advertisements per page. Thus, when
                                    advertising in a magazine, exposure increases substantially.</li>

                                <li class="mb-3">As the advertisement is placed inside a trusted and reliable
                                    local magazine, which provides important sources of local information, readers are
                                    likely to display higher levels of trust.</li>

                                <li class="mb-3">In printed magazines, your adverts can reach new audiences,
                                    particularly local residents who do not regularly access online content.
                                    oHigh exposure rate with the magazine being posted by our own experienced distribution
                                    teams to ~156,000 households.</li>

                                <li class="mb-3">User friendly magazine will have an index page that has the
                                    company names listed with the associated page number, contents page that outlines the
                                    categories within the issue and colour co-ordinated, easy to use tabs which will enable
                                    readers to identify content quickly.</li>

                                <li class="mb-3">Build a pathway for companies to reach new audiences within their
                                    local market.
                                    Low cost marketing approach with various advert sizes for any budget.</li>
                            </ul>

                        </div>
                        <div class="text-left" data-animate="fadeInUp" data-animate-delay="700"><a
                                href="http://greenguide.atwebpages.com/advertise/advertise_book_now"
                                class="h-100 btn btn-success btn-shadow btn-rounded rounded-circle btn-iconed text-center py-2 py-sm-3 px-4 mt-4">Book
                                Now!</a></div>
                    </div>


                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="job-image-container advertise-side-image position-relative w-100">
                        <img src="{{ url('front/img/business-strategy.png') }}" class="img-1 img-responsive w-100" alt=""  data-animate="fadeInRight" data-animate-delay="900">
                        <div class="inner-image"  data-animate="fadeInUp" data-animate-delay="1100">
                            <img src="{{ url('front/img/1520103821627.jpg') }}" class="image" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <div class="add__slider__section my-5 d-flex justify-content-center">
        <div class="container">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad1.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Advertising</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-2.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Advertising</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-3.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Advertising</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-4.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Advertising</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-5.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Advertising</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-6.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Advertising</h3>
                        </div>
                    </div>
                    {{-- <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{url('front/img/advertisements/ad-7.jpg')}}"
                                alt="">
                        </div>
                        <div class="detail">
                            <h3>Crystal Davidson</h3>
                        </div>
                    </div> --}}
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <!--     <div class="swiper-button-prev"></div> -->
                <!--     <div class="swiper-button-next"></div> -->

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>








    <div class="business__about__section d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12"  data-animate="fadeInLeft" data-animate-delay="500">
                    <div class="image">
                        <img src="{{url('front/img/TL-Portfolio-graphic.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 mt-4"  data-animate="fadeInRight" data-animate-delay="500">
                    <div class="title">
                        Pathway for community growth
                    </div>
                    <div class="description" text-align="justify">
                        <div class="text-left">
                            <ul>
                                <li class="mb-1 text-dark">The Green Guide Magazine is a one-stop-shop for design, print and
                                    distribution, giving residents and businesses a single point of contact, reducing stress
                                    and giving you are more fluid, more streamlined marketing process.</li>

                                <li class="mb-1 text-dark">The Green Guide is a high-end quality printed magazine which has
                                    many useful features for residents, thus it is designed to ensure that residents keep
                                    it. </li>

                                <li class="mb-1 text-dark">It is usually the case that, when canvassing local houses, you
                                    will have to deal with complaints pertaining to distribution, most of which have nothing
                                    to do with the brand or services offered. When advertising in the Green Guide, however,
                                    this is not the case. In fact, residents will get in touch with the Green Guide customer
                                    service team if they have any complaints with distribution. Our friendly, professional
                                    customer service team will respond and resolve any complaints that may arise.</li>

                                <li class="mb-1 text-dark">The Green Guide campaign can be accessed via the online portal
                                    system, where you can locate daily reports, local distribution maps and other
                                    information pertaining to distribution that can enable local residents to track and
                                    calculate responses.</li>

                                <li class="mb-1 text-dark">As well as creating a listing in the Green Guide magazine,
                                    businesses will also be given a FREE premium listing in the Green Guide online local
                                    directory. This will direct more traffic to you and ensure your company’s position as a
                                    key player in the local area that is well-known to local residents.</li>

                                <li class="mb-1 text-dark">Although it differs on the volumes used, the Green Guide will be
                                    an excellent, cost-effective addition to your marketing mix.</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <div class="advertise__prices my-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="title"  data-animate="fadeInDown" data-animate-delay="500">Our Services</div>
            <p class="desc" data-animate="fadeInUp" data-animate-delay="600">Although the internet is packed full of marketing noise, which we generally filter, a
                magazine only has a few advertisements per page. Thus, when advertising in a magazine, exposure increases
                substantially.</p>

            <div class="pen">
                <div class="stage">
                    <div class="element" data-animate="fadeInDown" data-animate-delay="500" style="background: url('{{ url('front/img/advertisements/ad-2.jpg') }}') 45% 0 no-repeat;
                background-size: cover;"></div>
                    <div class="element" data-animate="fadeInUp" data-animate-delay="600" style="background: url('{{ url('front/img/advertisements/ad-3.jpg') }}') 45% 0 no-repeat;
                background-size: cover;"></div>
                    <div class="element" data-animate="fadeInDown" data-animate-delay="700" style="background: url('{{ url('front/img/advertisements/ad-4.jpg') }}') 45% 0 no-repeat;
                background-size: cover;"></div>
                    <div class="element" data-animate="fadeInUp" data-animate-delay="800" style="background: url('{{ url('front/img/advertisements/ad-5.jpg') }}') 45% 0 no-repeat;
                background-size: cover;"></div>

                </div>
                <div class="stage mt-2">
                    <div class="element" data-animate="fadeInUp" data-animate-delay="900" style="background: url('{{ url('front/img/advertisements/ad-6.jpg') }}') 45% 0 no-repeat;
                background-size: cover;"></div>
                    <div class="element" data-animate="fadeInDown" data-animate-delay="1000" style="background: url('{{ url('front/img/advertisements/ad-7.jpg') }}') 45% 0 no-repeat;
                background-size: cover;"></div>
                    <div class="element" data-animate="fadeInUp" data-animate-delay="1100" style="background: url('{{ url('front/img/advertisements/ad1.jpg') }}') 45% 0 no-repeat;
                background-size: cover;"></div>
                    <div class="element" data-animate="fadeInDown" data-animate-delay="1200" style="background: url('{{ url('front/img/advertisements/ad-2.jpg') }}') 45% 0 no-repeat;
                background-size: cover;"></div>

                </div>
            </div>
        </div>
    </div>











    <div class="why__choose__greenguide benifits__of__adds">
        <div class="container">
            <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
                Benefits of Green Guide
            </h1>
            <div class="row">
                <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="800">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-1.png') }}" alt="">
                        </div>
                        <div class="text">
                            Low cost marketing approach with various advert sizes for any budget.

                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="900">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-2.png') }}" alt="">
                        </div>
                        <div class="text">
                            High exposure rate with the magazine being posted by our own experienced distribution teams to
                            ~156,000 households.

                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1000">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-3.png') }}" alt="">
                        </div>
                        <div class="text">
                            Your advert will be displayed within a high-quality publication.

                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1100">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-4.png') }}" alt="">
                        </div>
                        <div class="text">
                            User friendly magazine will enable the reader to locate your advert in a quick, hassle free
                            manner.

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-1 p-sm-4">
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1200">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-5.png') }}" alt="">
                        </div>
                        <div class="text">
                            When an advert is secured within our magazine your business will receive a premium online
                            listing within our business directory.

                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1300">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-6.png') }}" alt="">
                        </div>
                        <div class="text">
                            Online access which will include, downloadable magazines, business directory and events
                            calendar.

                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1400">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-7.png') }}" alt="">
                        </div>
                        <div class="text">
                            Provide important information and messages to enhance readership of the magazine. Forth Block

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="priceing__section d-flex justify-centent-center align-items-center" data-animate="fadeIn" data-animate-delay="500">
        <div class="container-fluid mt-5">
            <h1 class="title m-b-50" data-animate="fadeInDown" data-animate-delay="700">
                Advert Prices
            </h1>
            <p class="desc m-b-100" data-animate="fadeInDown" data-animate-delay="900">
                In printed magazines, your adverts can reach new audiences, particularly local residents who do not<br>
                regularly access online content.
            </p>
            <div class="row pricing-table">
                <div class="col" data-animate="fadeInDown" data-animate-delay="1000">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">A6</p>
                            <div class="plan-price"><sup>£</sup>475<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1100">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">A5</p>
                            <div class="plan-price"><sup>£</sup>800<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1200">
                    <div class="plan featured">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">A4</p>
                            <div class="plan-price"><sup>£</sup>1500<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-primary" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1300">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">Double Spread </p>
                            <div class="plan-price"><sup>£</sup>2800<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1400">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">Voucher</p>
                            <div class="plan-price"><sup>£</sup>180<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1500">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">Premium Pages (A4) </p>
                            <div class="plan-price"><sup>£</sup>1800<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="book__now d-flex justify-content-center align-items-center my-5">
        <div class="container text-center">
            <h1 data-animate="fadeInDown" data-animate-delay="500">Booking Form

            </h1>
            <h4 data-animate="fadeInDown" data-animate-delay="600"> In printed magazines, your adverts can reach new audiences, particularly local residents who do not
                regularly access online content.
            </h4>
            <div class="text-center" data-animate="fadeInUp" data-animate-delay="700"><a
                    href="/advert-design-book"
                    class="h-100 btn btn-success btn-shadow btn-rounded rounded-circle btn-iconed text-center py-2 py-sm-3 px-4 mt-4">Book
                    Now!</a>
            </div>
        </div>
    </div>


    <script src="{{ url('front/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>

    <script>
        $(document).on("scroll", function() {
            if ($(document).scrollTop() > 100) {
                setTimeout(() => {
                    $(".fixed__advertise__link").addClass("active")
                }, 400);
            }else{
                setTimeout(() => {
                    $(".fixed__advertise__link").removeClass("active")
                }, 400);
            }
        });
        $('.element').each(function() {
            $(this).mouseover(function() {
                $(this).addClass('active');
                $('.stage').children('.element').not('.active').addClass('inactive');
            });
            $(this).mouseleave(function() {
                $(this).removeClass('active');
                $('.stage').children('.element').not('.active').removeClass('inactive');
            });
        });
        var swiper = new Swiper(".swiper-container", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            autoplay: {
                delay: 5000,
            },
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 350,
                modifier: 1,
                slideShadows: true
            },
            pagination: {
                el: ".swiper-pagination"
            }
        });
    </script>
@endsection
