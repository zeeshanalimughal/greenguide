@extends("frontend.layouts.master")
@section('main-section')
    <div class="business__directory__hero" data-animate="fadeIn" data-animate-delay="500">
        <div class="container">
            <div class="col-lg-6 col-md-12">
                <h1 data-animate="fadeInUp" data-animate-delay="1000">Connecting Local Residents & Business</h1>
                <form action="" class="p-0 m-0 business__hero__form">
                    <div class="input" data-animate="fadeInUp" data-animate-delay="1200">
                        <i class="fas fa-city"></i>
                        <input type="text" placeholder="what are you looking for">
                    </div>
                    <div class="input" data-animate="fadeInUp" data-animate-delay="1200">
                        <i class="fas fa-location-arrow"></i>
                        <select>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <button class="button__search" data-animate="fadeInUp" data-animate-delay="1300">
                        <i class="fas fa-search"></i>
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>





    <div class="business__categories__section d-flex justify-content-center">
        <div class="container d-flex justify-content-center align-items-center flex-column">
            <div class="title" data-animate="fadeInDown" data-animate-delay="800">
                BUSINESS CATEGORIES
            </div>
            <div class="description" data-animate="fadeInDown" data-animate-delay="900">
                We have thousands of businesses registered on the 118 business directory and growing every day.
            </div>
            <div class="categories">
                <a href="#">
                    <div class="category" data-animate="fadeInUp" data-animate-delay="1000">
                        <div class="icon">
                            <i data-v-1dbe9610="" class="fas fa-building"></i>
                        </div>
                        <div class="category__title">ESTATE AGENTS</div>
                    </div>
                </a>
                <a href="#">
                    <div class="category" data-animate="fadeInUp" data-animate-delay="1100">
                        <div class="icon">
                            <i data-v-1dbe9610="" class="fas fa-luggage-cart"></i>
                        </div>
                        <div class="category__title">TRAVEL</div>
                    </div>
                </a>
                <a href="#">
                    <div class="category" data-animate="fadeInUp" data-animate-delay="1200">
                        <div class="icon">
                            <i data-v-1dbe9610="" class="fas fa-spa"></i>
                        </div>
                        <div class="category__title">BEAUTY & SPA</div>
                    </div>
                </a>
                <a href="#">
                    <div class="category" data-animate="fadeInUp" data-animate-delay="1300">
                        <div class="icon">
                            <i data-v-1dbe9610="" class="fas fa-glass-cheers"></i>
                        </div>
                        <div class="category__title">NIGHT CLIBS</div>
                    </div>
                </a>
                <a href="#">
                    <div class="category" data-animate="fadeInUp" data-animate-delay="1400">
                        <div class="icon">
                            <i data-v-1dbe9610="" class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="category__title">SHOPPING</div>
                    </div>
                </a>
                <a href="#">
                    <div class="category" data-animate="fadeInUp" data-animate-delay="1500">
                        <div class="icon">
                            <i data-v-1dbe9610="" class="fas fa-cocktail"></i>
                        </div>
                        <div class="category__title">FOOD & DRINKS</div>
                    </div>
                </a>
            </div>
        </div>
    </div>



    <div class="business__about__section d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12" data-animate="fadeInLeft" data-animate-delay="1000">
                    <div class="image">
                        <img src="{{ url('front/img/business-directory-img1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-4" data-animate="fadeInRight" data-animate-delay="1500">
                    <div class="title">
                        Across the London Borough of Croydon
                    </div>
                    <div class="description" text-align="justify">
                        The team at LGG Marketing are pleased to announce the launch of a borough wide residential magazine
                        across the entire Croydon Borough. The Green Guide magazine will be a unified publication of local
                        messages, community initiatives and a business directory. We want to connect residents with their
                        local market in order to establish a pathway for community growth.
                    </div>
                  <a href="/add-new-directory" class="text-white">
                    <button type="button" class="btn btn-success text-white btn-roundeded btn-outline btn-reveal m-t-20"><span>Add your business</span><i class="fa fa-plus"></i></button>
                  </a>
                </div>
            </div>
        </div>
    </div>





    <div class="why__choose__greenguide">
        <div class="container">
            <h1 class="title" data-animate="fadeInDown" data-animate-delay="800">
                Why Choose GreenGuide?
            </h1>
            <div class="row">
                <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1000">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-1.png') }}" alt="">
                        </div>
                        <div class="text">
                            This magazine focuses on residents and aims to provide them with important information and messages. Ultimately, the goal is to enhance the readership of the magazine.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1100">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-2.png') }}" alt="">
                        </div>
                        <div class="text">
                            A local magazine enables you to communicate directly to potential customers in the local area.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1200">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-3.png') }}" alt="">
                        </div>
                        <div class="text">
                            Although the internet is packed full of marketing noise, which we generally filter, a magazine only has a few advertisements per page. Thus, when advertising in a magazine, exposure increases substantially.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1300">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-4.png') }}" alt="">
                        </div>
                        <div class="text">
                            As the advertisement is placed inside a trusted and reliable local magazine, which provides important sources of local information, readers are likely to display higher levels of trust. oIn printed magazines, your adverts can reach new audiences, particularly local residents who do not regularly access online content.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-1 p-sm-4">
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1000">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-5.png') }}" alt="">
                        </div>
                        <div class="text" >
                            High exposure rate with the magazine being posted by our own experienced distribution teams to ~156,000 households.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1100">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-6.png') }}" alt="">
                        </div>
                        <div class="text">
                            User friendly magazine will have an index page that has the company names listed with the associated page number, contents page that outlines the categories within the issue and colour co-ordinated, easy to use tabs which will enable readers to identify content quickly.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1200">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-7.png') }}" alt="">
                        </div>
                        <div class="text">
                            Build a pathway for companies to reach new audiences within their local market.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1300">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-8.png') }}" alt="">
                        </div>
                        <div class="text">
                            Low cost marketing approach with various advert sizes for any budget.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="business__about__section py-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 mt-4 mb-0">
                    <div class="title" data-animate="fadeInDown" data-animate-delay="1000">
                        GET IN TOUCH
                    </div>
                    <div class="description mb-5" text-align="justify" data-animate="fadeInDown" data-animate-delay="1000">
                        Have a general enquiry or looking to sign up with 118 business directory?

                    </div>
                    <div class="description" text-align="justify">
                        <form class="widget-contact-form" data-success-message-delay="40000" novalidate="" action="include/contact-form.php" role="form" method="post" data-animate="fadeInLeft" data-animate-delay="1200">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" required="" class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" required="" class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="widget-contact-form-subject" required="" class="form-control required" placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" required="" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <button class="btn btn-success" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                    <div class="image" data-animate="fadeInRight" data-animate-delay="1200">
                        <img src="{{ url('front/img/contact-us.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="redirect__links">
        <div class="container"></div>
    </div> --}}

@endsection
