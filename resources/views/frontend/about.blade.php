@extends("frontend.layouts.master")
@section('main-section')




<section id="page-title" class="text-light" data-bg-parallax="{{ url('front/uploads/images/pages_1_35_5.jpg')}}">
    <div class="container">
        <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
            <ul>
                <li><a href="/">Home</a> </li>
                <li class="active">The Company</li>
            </ul>
        </div>
        <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
            <h1>The Company</h1>
            <!-- <span>Simple page title with background parallax image</span> -->
        </div>
    </div>
</section>
<!-- end: Page title -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2>THE COMPANY</h2>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6"><p align="justify">Over the last 7 years, Local Green Guide Ltd/LGG Marketing has been operating as a leaflet design, print and distribution company throughout the country. Our dedicated management has been working in the distribution industry for more than 3 decades and works collaboratively with various local authorities, communication companies and well-known national brands. We have a reputation for providing a reliable, transparent and professional door to door distribution service. Our years of experience in the industry and our vast network of nationwide clients has afforded us the opportunity to accumulate and produce a high quality residential magazine</p>
                    </div>

                    <div class="col-lg-6"><p align="justify">We are excited to announce that 2022 will be the launch of our quarterly <b>residential magazine</b> that will be distributed across the entire <b>London Borough of Croydon</b>. We wanted to ensure all businesses had the opportunity to be apart of this new marketing avenue.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="box-fancy section-fullwidth text-light p-b-0">
    <div class="row">
        <div style="background-color:#4f9467" class="col-lg-4">
            <h1 class="text-lg text-uppercase">01.</h1>
            <p align="justify">Green Guide ethos statement 1 to be confirmed.</p>

        </div>

        <div style="background-color:#437c56" class="col-lg-4">
            <h1 class="text-lg text-uppercase">02.</h1>
            <p align="justify">Green Guide ethos statement 2 to be confirmed</p>

        </div>

        <div style="background-color:#335e41" class="col-lg-4">
            <h1 class="text-lg text-uppercase">03.</h1>
            <p align="justify">We are a Green Company and re-plant trees monthly on behalf of our clients who print and distribute with us as a socially responsible way of replenishing that which we use.</p>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="heading-text text-center">
            <h2>Collage of company images and distributors</h2>
            <p class="lead text-center">The most happiest time of the day!.</p>
        </div>
        <!-- Testimonials -->
        <div class="carousel arrows-visibile testimonial testimonial-single testimonial-left" data-items="1">

            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="{{ url('front/img/team/9.jpg')}}" alt="">
                <p>Green Guide Amgzine is by far the most amazing website out there! I literally could not be happier that I chose it!</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="{{ url('front/img/team/9.jpg')}}" alt="">
                <p>Green Guide Amgzine is by far the most amazing website out there! I literally could not be happier that I chose it</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="{{ url('front/img/team/9.jpg')}}" alt="">
                <p>Green Guide Amgzine is by far the most amazing website out there! I literally could not be happier that I chose it</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

        </div>
        <!-- end: Testimonials -->
    </div>
</section>





@endsection





