

    @extends("frontend.layouts.master")
@section('main-section')
    <section id="page-title"
        class="text-light green-initiative-hero community-growth-hero d-flex justify-content-center align-items-center" data-animate="fadeIn" data-animate-delay="500">
        <div class="container d-flex justify-content-center align-items-center flex-column">
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h2 class="community-growth-hero-title" style="text-align: center; color: white;">Pathway for community growth</h2>
                <p class="font-size-lg">Trees planted with Forest Nation.</p>
            </div>

            <a href="/add-new-directory" data-animate="fadeInUp" data-animate-delay="1500"><button class="btn__advertise px-5 py-3">ADD NEW
                    BUSINESS</button></a>
        </div>
    </section>





    <!-- end: Page title -->



    <!-- Recycling Section -->
    <section class="resycling my-4 bg-white py-5">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-5 col-md-12 col-sm-12 mt-3" data-animate="fadeInLeft" data-animate-delay="500">
                    <div class="img-container position-relative w-100 bg-primary">
                        <img src="{{ url('front/img/highlights/1280-279253-538798184.png') }}" class="img-responsive w-100"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 mt-3 mt-sm-0">
                    <h1 class=" line-height-l font-weight-600 text-left" data-animate="fadeInRight" data-animate-delay="500">Across the London Borough of Croydon
                    </h1>
                    <p class="text-dark  font-size-lg line-height-l text-left" align="justify" data-animate="fadeInRight" data-animate-delay="700">
                        The team at LGG Marketing are pleased to announce the launch of a borough wide residential magazine
                        across the entire Croydon Borough. The Green Guide magazine will be a unified publication of local
                        messages, community initiatives and a business directory. We want to connect residents with their
                        local market in order to establish a pathway for community growth.
                    </p>
                </div>

            </div>
        </div>
    </section>





    <div class="why__choose__greenguide">
        <div class="container">
            <h2 class="title" data-animate="fadeInDown" data-animate-delay="500">
                Advantages Of Woking To Gether <br>With GreenGuide Team
            </h2>
            <div class="row">
                <div class="col-lg-6 col-md-12 p-1 p-sm-3 ">
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="700">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-1.png') }}" alt="">
                        </div>
                        <div class="text">
                            The Green Guide Magazine is a one-stop-shop for design, print and distribution, giving residents
                            and businesses a single point of contact, reducing stress and giving you are more fluid, more
                            streamlined marketing process.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="900">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-2.png') }}" alt="">
                        </div>
                        <div class="text">
                            The Green Guide is a high-end quality printed magazine which has many useful features for
                            residents, thus it is designed to ensure that residents keep it.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1100">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-3.png') }}" alt="">
                        </div>
                        <div class="text">
                            It is usually the case that, when canvassing local houses, you will have to deal with complaints
                            pertaining to distribution, most of which have nothing to do with the brand or services offered.
                            When advertising in the Green Guide, however, this is not the case. In fact, residents will get
                            in touch with the Green Guide customer service team if they have any complaints with
                            distribution. Our friendly, professional customer service team will respond and resolve any
                            complaints that may arise.
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 p-1 p-sm-4">
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="700">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-5.png') }}" alt="">
                        </div>
                        <div class="text">
                            The Green Guide campaign can be accessed via the online portal system, where you can locate
                            daily reports, local distribution maps and other information pertaining to distribution that can
                            enable local residents to track and calculate responses.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="900">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-6.png') }}" alt="">
                        </div>
                        <div class="text">
                            As well as creating a listing in the Green Guide magazine, businesses will also be given a FREE
                            premium listing in the Green Guide online local directory. This will direct more traffic to you
                            and ensure your company’s position as a key player in the local area that is well-known to local
                            residents.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1100">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-7.png') }}" alt="">
                        </div>
                        <div class="text">
                            Although it differs on the volumes used, the Green Guide will be an excellent, cost-effective
                            addition to your marketing mix.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>













    <section class="hyperlinks d-flex justify-content-center m-0">
        <div class="container text-center m-0 ">
            <div class="grid-layout post-3-columns" data-item="post-item">
                <div class="post-item  " >
                    <a href="/businessdirectory" class="text-muted font-weight-600">
                        <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600" data-animate="fadeInUp" data-animate-delay="600">

                            Business Directory
                        </div>
                    </a>
                </div>

                <div class="post-item  " >
                    <a href="/advertise" class="text-muted font-weight-600">
                        <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600 " data-animate="fadeInUp" data-animate-delay="800">

                            <!-- <br> -->
                            Advertise
                        </div>
                    </a>
                </div>

                <div class="post-item  " >
                    <a href="/localevents" class="text-muted font-weight-600">
                        <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600" data-animate="fadeInUp" data-animate-delay="1000">

                            Local Events
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section>





    <div class="container-fluid d-flex justify-content-center flex-column my-3">
        <div class="row d-flex justify-content-center">
            <div class="content col-lg-12 d-flex justify-content-center">
                <div>
                    <ul class="grid grid-4-columns">
                        <li>
                            <a href="#"><img alt="" src="{{ url('front/img/clients/1.png') }}"></a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="{{ url('front/img/clients/2.png') }}"></a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="{{ url('front/img/clients/3.png') }}"></a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="{{ url('front/img/clients/4.png') }}"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    </section> -->
    <!-- end: CONTENT -->
    <!-- MAP -->
    <section class="no-padding">
        <!-- Google Map -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.241881356656!2d-0.050808684338578!3d51.61877817965347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761e8ae036c7b1%3A0x85f7847126c3629f!2sLocal%20Green%20Guide%20Ltd%20-%20LGG%20Marketing!5e0!3m2!1sen!2s!4v1639087067763!5m2!1sen!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!-- end: Google Map -->
    </section>
    <!-- end: MAP -->
@endsection

