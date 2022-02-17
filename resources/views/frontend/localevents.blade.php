@extends("frontend.layouts.master")
@section('main-section')
    <div class="local__events__hero" data-animate="fadeIn" data-animate-delay="500">
        <div class="container w-100 ">
            <div class="row w-100">
                <div class="col-lg-8 col-md-12">
                    <h1 class="title mb-5" data-animate="fadeInDown" data-animate-delay="1200">
                        <span>Now This Is</span> <br>Your Time
                    </h1>
                    <div class="m-t-60" data-animate="fadeInUp" data-animate-delay="1300">
                        <a href="#events" class="btn__event" >
                            Find your next event
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search__events my-5">
        <div class="container d-flex align-center flex-wrap">
            <h1>Popular in</h1>
            <input type="text" value="UK">
        </div>
    </div>



    <div class="filter__events mb-5">
        <div class="container">
            <nav class="grid-filter gf-outline" data-layout="#portfolio">
                <ul>
                    <li class="active"><a href="#" data-category="*">All</a></li>
                    <li class=""><a href="#" data-category=".ct-branding">Online</a></li>
                    <li><a href="#" data-category=".ct-photography">Today</a></li>
                    <li><a href="#" data-category=".ct-marketing">This weekend</a></li>
                    <li><a href="#" data-category=".ct-media">This month</a></li>
                    <li><a href="#" data-category=".ct-webdesign">Next month</a></li>
                </ul>
                <div class="grid-active-title">Branding</div>
            </nav>
        </div>
    </div>











    <div class="events__section" id="events">
        <div class="container">

            <h2 class="events__title">
                Events in UK</h2>
            </h2>
            <div id="blog" class="grid-layout post-3-columns m-b-30 grid-loaded" data-item="post-item"
                style="margin: 0px -20px -20px 0px; position: relative; height: 1635.37px;">





                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/1.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/2.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/3.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/4.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/5.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/6.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/7.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->





                <div class="grid-loader"></div>
            </div>
        </div>
    </div>



















    <div class="events__section">
        <div class="container">

            <h2 class="events__title">
                More events</h2>
            </h2>
            <div id="blog" class="grid-layout post-3-columns m-b-30 grid-loaded" data-item="post-item"
                style="margin: 0px -20px -20px 0px; position: relative; height: 1635.37px;">





                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/8.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/9.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/10.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/11.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->









                <!-- Post item-->
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <a href="#">
                        <div class="post-item-wrap">
                            <div class="post-image" style="width:100%; height:180px;position: relative;">
                                <img alt=""
                                    style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                    class="img-responsive" src="{{ url('front/img/events/12.jpg') }}">

                            </div>
                            <div class="post-item-description ">
                                <h2><a href="#">Add few events which are UK Croydon based
                                    </a></h2>
                                <h5 class="post-meta-date text-danger font-weight-600"><i class="fa fa-calendar-o"></i>Sun,
                                    Feb 27, 10:30</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end: Post item-->











                <div class="grid-loader"></div>
            </div>
        </div>
    </div>



    <div class="see__more__btn mb-5">
        <div class="container d-flex justify-content-center">
            <button type="button" class="btn btn-sucess btn-roundeded btn-reveal btn-lg"><span>See More</span><i class="icon-chevron-down"></i></button>
        </div>
    </div>
@endsection
