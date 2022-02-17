@extends("frontend.layouts.master")

@push('home-css')
    <link rel="stylesheet" href="{{ url('front/css/home.css') }}">
@endpush

@section('main-section')




    <div class="bg-video-wrap" data-animate="fadeIn" data-animate-delay="500">
        <video src="{{ url('/front/video/pexels-workout.mp4') }}" loop muted autoplay>
        </video>
        <div class="video-bg-overlay" >
            <div class="hero-images-section" >
                <div class="row p-0 m-0" data-animate="fadeInUp" data-animate-delay="700">
                    <div class="col-lg-6 col-md-12 p-0 m-0">
                        <div class="row  p-1 m-0">
                            <div class="col-6 p-1 ps-0 pt-0 pb-0  m-0">
                                <div class="hero-image-small">
                                    <img src="{{ url('front/img/hero/1.png') }}" alt="">
                                    <div class="text">
                                        Pathway for
                                        community growth
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 p-0 p-0 m-0">
                                <div class="hero-image-small">
                                    <img src="{{ url('front/img/hero/2.png') }}" alt="">
                                    <div class="text">
                                        Produced and
                                        distributed by LGG
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1 pt-0 m-0">
                            <div class="col-6 p-1 ps-0 pt-0 pb-0 m-0">
                                <div class="hero-image-small">
                                    <img src="{{ url('front/img/hero/3.png') }}" alt="">
                                    <div class="text">
                                        Borough wide quarterly
                                        residential magazine
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 p-0 m-0">
                                <div class="hero-image-small">
                                    <img src="{{ url('front/img/hero/4.png') }}" alt="">
                                    <div class="text">
                                        Less waste more trees
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 p-0  mt-1">
                        <div class="hero-image-main">
                            <img src="{{ url('front/img/hero/5.png') }}" alt="">
                            <div class="text">
                                Your Local Market
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









        <!-- CAROUSEL -->
        <section class="background-colored">
            <div class="container">
                <div class="text-medium text-light" data-animate="fadeInDown" data-animate-delay="600">Magazine Highlights</div>
                <div class="grid-articles carousel post-carousel m-b-20" data-dots="false" >
                    <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                        <a href="#" class="post-image"><img alt="" src="{{ url('front/img/highlights/1.png')}}"></a>
                        <div class="post-entry-overlay">
                            <div class="post-entry-meta">
                                <div class="post-entry-meta-category">
                                    <span class="badge bg-danger">NEWS</span>
                                </div>
                                <div class="post-entry-meta-title">
                                    <h2><a href="#">Free Events Listing Online</a></h2>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                        <a href="#" class="post-image"><img alt="" src="{{ url('front/img/highlights/2.png')}}"></a>
                        <div class="post-entry-overlay">
                            <div class="post-entry-meta">
                                <div class="post-entry-meta-category">
                                    <span class="badge bg-danger">LIFESTYLE</span>
                                </div>
                                <div class="post-entry-meta-title">
                                    <h2><a href="#">Free Electronic Version magzine!</a></h2>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                        <a href="#" class="post-image"><img alt="" src="{{ url('front/img/highlights/3.png')}}"></a>
                        <div class="post-entry-overlay">
                            <div class="post-entry-meta">
                                <div class="post-entry-meta-category">
                                    <span class="badge bg-danger">LIFESTYLE</span>
                                </div>
                                <div class="post-entry-meta-title">
                                    <h2><a href="#">Available to Downlaod</a></h2>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                        <a href="#" class="post-image"><img alt="" src="{{ url('front/img/highlights/4.png')}}"></a>
                        <div class="post-entry-overlay">
                            <div class="post-entry-meta">
                                <div class="post-entry-meta-category">
                                    <span class="badge bg-danger">World</span>
                                </div>
                                <div class="post-entry-meta-title">
                                    <h2><a href="#">Free Business Listing</a></h2>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                        <a href="#" class="post-image"><img alt="" src="{{ url('front/img/highlights/1.png')}}"></a>
                        <div class="post-entry-overlay">
                            <div class="post-entry-meta">
                                <div class="post-entry-meta-category">
                                    <span class="badge bg-danger">World</span>
                                </div>
                                <div class="post-entry-meta-title">
                                    <h2><a href="#">Free directory Listing</a></h2>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                        <a href="#" class="post-image"><img alt="" src="{{ url('front/img/highlights/2.png')}}"></a>
                        <div class="post-entry-overlay">
                            <div class="post-entry-meta">
                                <div class="post-entry-meta-category">
                                    <span class="badge bg-danger">World</span>
                                </div>
                                <div class="post-entry-meta-title">
                                    <h2><a href="#">Green Guide</a></h2>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                        <a href="#" class="post-image"><img alt="" src="{{ url('front/img/highlights/3.png')}}"></a>
                        <div class="post-entry-overlay">
                            <div class="post-entry-meta">
                                <div class="post-entry-meta-category">
                                    <span class="badge bg-danger">World</span>
                                </div>
                                <div class="post-entry-meta-title">
                                    <h2><a href="#">The most happiest time of the day!</a></h2>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="text-light text-end">
                    <a class="read-more" href="#">
                        All stories in Highlights <i class="fa fa-long-arrow-alt-right"></i></a></div>
            </div>
        </section>
        <!-- end: CAROUSEL -->






         <!-- CATEGORIES -->
         <section class="p-t-0 p-b-40 mt-5">
            <div class="container mt-4">

                <div class="row">
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
                        <div class="highlight-image">
                            <img src="{{ url('front/img/highlights/1.png')}}" alt="">
                            <div class="highlight-title">
                                Spotlights
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/1.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">I’m really excited to read and show my grandparents the article written about me in the Green Guide</a>

                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/4.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">I look forward to reading the spotlight on me and my company, we have worked for months on this production and I’m excited to get the word out</a>

                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/3.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#"> I want to be an ambassador for young females to try and expand their skills in professions that are male dominated</a>

                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/2.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">I’ve been a chef for 10 years and this is the first time my skills are being broadcasted to the general public</a>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
                        <div class="highlight-image">
                            <img src="{{ url('front/img/highlights/2.png')}}" alt="">
                            <div class="highlight-title">
                                Companies
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/2.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">We have used LGG to post leaflets for years when we were approached about advertising in the magazine it seems a logical next step to expand our marketing approach</a>

                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/1.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">Seems like a great marketing option to increase product recognition to a large volume of customers, we have a discount code to track enquires from the magazine</a>

                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/3.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">We want to advertise in Green Guide to let local residents know that we have franchises across UK, it’s a great gift for friends and family</a>

                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/4.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">We offer Green Guide as a marketing avenue to our clients who what brand awareness to a large volume of consumers</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
                        <div class="highlight-image">
                            <img src="{{ url('front/img/highlights/3.png')}}" alt="">
                            <div class="highlight-title">
                                LGG Team
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/4.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">I’ve been a distributor for LGG for three years and I enjoy walking and seeing different parts of London</a>

                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/3.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">I started as a leaflet distributor and know I get to work within the recruitment department for Green Guide</a>

                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/1.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">As a supervisor I get to interact with different clients and local residents on a daily basis</a>

                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{ url('front/img/highlights/2.png')}}">
                                <div class="post-thumbnail-content">
                                    <a href="#">I love to talk to residents and local people, I hope I’m a great representation of LGG for customers</a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: CATEGORIES -->






        <!-- CALL TO ACTION -->
        <div class="call-to-action call-to-action-colored background-colored m-b-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10" data-animate="fadeInUp" data-animate-delay="600">
                        <h3>Business Directory</h3>
                        <p>A local magazine enables you to communicate directly to potential customers in the local area..</p>
                    </div>
                    <div class="col-lg-2"> <a href="/businessdirectory" class="btn btn-light btn-outline">View Directory</a> </div>
                </div>
            </div>
        </div>
        <!-- END: CALL TO ACTION -->


@endsection
