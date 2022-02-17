@extends("frontend.layouts.master")
@section('main-section')








<section id="page-title" class="text-light green-initiative-hero d-flex justify-content-center align-items-center" data-bg-parallax="{{ url('front/img/plainting-tree.jpg')}}" data-animate="fadeIn" data-animate-delay="500">
    <div class="container d-flex justify-content-center align-items-center flex-column">
        <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
            <h2 class="green-initiative-hero-title"style="text-align: center; color: white;">We’re Doing Our Part To Care For The Earth</h2>
            <p class="font-size-lg">Trees planted with Forest Nation.</p>
        </div>
        <div class="row mt-5 w-100 d-flex justify-content-center">
            <div class="col-lg-4 col-md-6 me-0 me-sm-4 text-center p-t-20 p-b-20 my-2 transparent border border-2  border-white" data-animate="fadeInUp" data-animate-delay="1800">
                <p>MEDIA POSTED TO DATE</p>
                <h3 class="coloured-count counter" ><span data-from="102880000" data-to="102886671" data-speed="1000" data-refresh-interval="5000"></span></h3>
            </div>
            <div class="col-lg-4 col-md-6  text-center p-t-20 p-b-20 my-2 transparent border border-2  border-white" data-animate="fadeInUp" data-animate-delay="1800">
                <p>TOTAL TREES PLANTED TO DATE
                </p>
                <h3 class="coloured-count counter"><span data-from="100" data-to="13485" data-speed="1000" data-refresh-interval="2000"></span>
                </h3>
            </div>
        </div>
        <div class="text-center" data-animate="fadeInUp" data-animate-delay="2000">
            <p class="font-size-lg mt-8"> 1 tree replanted every 7535 pieces of media posted</p>
            <p class="font-size-lg"><b>Objective is to replant a tree every 10000 pieces of media posted</b></p>
        </div>
    </div>
</section>





<!-- end: Page title -->



<!-- Recycling Section -->
<section class="resycling my-4 bg-white py-5">
    <div class="container">
        <div class="row d-flex justify-content-between">
        <div class="col-lg-5 col-md-12 col-sm-12 mt-3" data-animate="fadeInLeft" data-animate-delay="800">
                <div class="img-container position-relative w-100 bg-primary">
                    <img src="{{ url('front/img/highlights/1280-279253-538798184.png')}}" class="img-responsive w-100" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 mt-3 mt-sm-0" data-animate="fadeInRight" data-animate-delay="800">
            <h1 class=" line-height-l font-weight-600 text-left">RECYCLING & ENVIRONMENT</h1>
            <p class="text-dark  font-size-lg line-height-l text-left" align="justify">
            At LGG Marketing we realize our global responsibility towards the environment and the impact we can make. We reduce our carbon footprint through our environmental and recycling policies.<br><br>
            LGG Marketing has put in place a system for supporting various reforestation programs named below. We replant trees on behalf of our clients, local councils and residents. This policy is to help replenish the trees which have been cut down to produce the media that’s been posted through our door to door leaflet distributions. The rate at which we replant trees is typically double the amount of trees used to create the media we post. This is to ensure we leave for our children, the same if not more than what was left for us.
        </p>
            </div>

        </div>
    </div>
</section>




<section class="resycling-importance d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(36,94,27,0.8),rgba(36,94,27,.8)),url({{ url('front/img/recycling-and-envoinament.jpg')}}); background-repeat: no-repeat background-size: cover; background-position: center center; background-attachment: fixed;">
    <div class="container d-flex justify-content-center align-items-center flex-column ">
        <div class="heaging mb-5" data-animate="fadeInDown" data-animate-delay="800">
            <p class="font-size-lg line-height-l fw-600 text-warning">
                IMPORTANCE OF
            </p>
            <h2 class="display-4 font-weight-600 text-white">RECYCLING & ENVIRONMENT</h2>
        </div>

        <p class="text-white font-size-lg line-height-l text-left w-100" align="justify" data-animate="fadeInDown" data-animate-delay="900">
            We at LGG Marketing understand our corporate responsibility on the importance of recycling because if done incorrectly it has a negative impact on our natural environment (OUR HOME). From our inception and for the duration of our company model, we will continue to play our part, along with other like minded organisations and on behalf of our clients, local councils and local residents to ensure we offset as much of our carbon footprint as possible. We will help keep the public informed of the latest recycling innovations known at the time.<br><br>
            Recycling reduces the need for raw materials so that the rainforests can be preserved. Landfill sites are filling up fast and it is about time we began to look at alternative solutions. Making products from raw materials costs a lot more than if they were made from recycled products. As recycling reduces the need for raw materials and also uses much less energy it enables us to preserve our natural resources for future generations.
        </p>

    </div>
</section>





<section>
    <div class="container">
        <div class="row d-flex justify-content-between">

            <div class="col-lg-6 col-md-12 col-sm-12 mt-3 mt-sm-0">
            <h1 class=" line-height-l font-weight-600 text-left" data-animate="fadeInUp" data-animate-delay="800">REFORESTATION AND ENVIRONMENT POLICY</h1>
            <p class="text-dark font-size-lg line-height-l text-justify" align="justify" data-animate="fadeInUp" data-animate-delay="1000">
        We at LGG Marketing have decided to offset our carbon footprint and that of our clients, local councils and local residents by supporting as well as PARTICIPATING in various reforestation programs.<br><br> At present we support and work with The Woodland Trust in the UK as well as Green Pop and The Eden Projects worldwide. Please click on any of their labels below to find out more about what they do as well as to help contribute towards the reforestation programs yourself. It’s easier to help and do you part for the environment than you may think.
        </p>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-5" data-animate="fadeInRight" data-animate-delay="1200">
                <div class="img-container position-relative w-100 bg-primary">
                    <img src="{{ url('front/img/highlights/3.png')}}" class="img-responsive w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</section>







<section class="resycling-importance d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(36,94,27,0.8),rgba(36,94,27,.8)),url({{ url('front/img/carbon-footprint.jpg')}}); background-repeat: no-repeat background-size: cover; background-position: center center; background-attachment: fixed;">
    <div class="container d-flex justify-content-center align-items-center flex-column text-start">
        <div class="heaging mb-5" data-animate="fadeInDown" data-animate-delay="800">
            <h2 class="display-4 font-weight-600 text-white"> CARBON OFFSET </h2>
        </div>

        <p class="text-white font-size-lg line-height-l" align="justify" data-animate="fadeInUp" data-animate-delay="900">
        The global target or scientific consensus at present is to aim to reduce our combined carbon emissions by 80 % by 2050. This reduction will avoid a temperature rise of more than 2 degrees Celsius, the smallest of offsetting activities will eventually prove to be important.<br><br> Carbon offsetting is a process of delivering/raising finance for essential renewable energy, forestry and resource conservation projects which generate reductions in greenhouse gas emissions. In order to ensure this finance delivers genuine results, the projects which are supported must be high quality and “additional” – (i.e they will not come to fruition without the need for carbon offsetting).<br><br> All potential carbon offsetting projects must follow a comprehensive set of validation procedures to demonstrate that they are generating emission reductions and they are also monitored on a regular basis by independent third parties that don’t have a vested interest otherwise.
        </p>

    </div>
</section>




<section>
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-6 col-md-12 col-sm-12 mt-5" data-animate="fadeInLeft" data-animate-delay="500">
                <div class="img-container position-relative w-100 bg-primary" >
                    <img src="{{ url('front/img/hero/4.png')}}" class="img-responsive w-100" alt="">

                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mt-sm-0" >
                <h2 data-animate="fadeInDown" data-animate-delay="500">ECO FRIENDLY</h2>
                <p class="font-size-lg text-muted text-justify " align="justify" data-animate="fadeInUp" data-animate-delay="600"> At LGG Marketing we believe in being eco-friendly and have branded ourselves in healthy, rich, replenishing GREEN. As such we constantly engage in eco-friendly habits on a day to day basis such as using programmable thermostats so we only use heating or cooling when the premises is occupied as well as using recycled paper for internal printing. Please watch this space as we shall begin to list eco-friendly habits for all i.e both for residents as well as businesses to look at and see which you can apply to your day to day</p>
            </div>
        </div>
    </div>
</section>






<section class="bg-light mt-5 py-4">
    <div class="container text-center">
        <h2 class="text-success" data-animate="fadeInUp" data-animate-delay="500">
            OUR GREEN PARTNERS
        </h2>
        <p class="text-dark font-size-lg line-height-l" data-animate="fadeInUp" data-animate-delay="500">
            Woodland Trust, Green Pop & Eden Reforestation
        </p>

    </div>
</section>
<div class="container d-flex justify-content-center" data-animate="fadeInUp" data-animate-delay="600">
<div class="row m-t-10 d-flex justify-content-center w-100">
    <div class="col-1"></div>
    <div class="col-lg-3 d-flex justify-content-center col-sm-12 ">
        <div class="img-container d-flex justify-content-center position-relative w-100">
            <img width="150" src="{{ url('front/img/Woodland-Trust-Logo-150x150.jpg')}}" alt="">

        </div>
    </div>
    <div class="col-lg-3 d-flex justify-content-center col-sm-12 ">
        <div class="img-container d-flex justify-content-center position-relative w-100">
            <img width="150" src="{{ url('front/img/green-pop-logo-150x150.jpg')}}" alt="">

        </div>
    </div>
    <div class="col-lg-3 d-flex justify-content-center col-sm-12 ">
        <div class="img-container d-flex justify-content-center position-relative w-100">
            <img width="150" src="{{ url('front/img/edenproject-150x150.png')}}" alt="">

        </div>
    </div>
</div>
</div>

<!-- Content -->
<!-- <section>
    <div class="container">
        <!--Default counters-->
        <div class="row d-flex justify-content-center w-100">
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="icon-box effect center clean">
                    <div class="icon w-100">
                        <p class="py-4">Trees Planted</p>
                    </div>
                    <div class="counter">
                        <span data-from="45754" data-to="457543" data-speed="1000" data-refresh-interval="5000"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="icon-box effect center clean">
                    <div class="icon w-100">
                        <p class="py-4">Tons of CO2 Absorbed Yearly</p>
                    </div>
                    <div class="counter">

                        <span data-speed="1000" data-refresh-interval="5000" data-to="500" data-from="0" data-seperator="true">
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="icon-box effect center clean">
                    <div class="icon w-100">
                        <p class="py-4">Tons of Oxygen created Yearly</p>
                    </div>
                    <div class="counter"> <span data-speed="1000" data-refresh-interval="5000" data-to="1500" data-from="0" data-seperator="true"></span> </div>
                </div>
            </div>
        </div>
        <!--End: Default counters-->
        <div class="row d-flex justify-content-center align-content-center">
            <div class="container px-0 px-md-10">
                <p class="text-muted px-0 px-md-5 text-center">
                    <p align="justify">Although we believe that the Green Guide is a more convenient, efficient and cost-effective way of communicating with local residents and keeping brand names alive, we are not saying that it will completely stop local leaflet distributions. Over the last 7 years, Local Green Guide Ltd/LGG Marketing has been operating as a leaflet design, print and distribution company throughout the country. Our dedicated management has been working in the distribution industry for more than 3 decades and works collaboratively with various local authorities, communication companies and well-known national brands</p>

                </p>
            </div>
        </div>
    </div>



    <section class="hyperlinks d-flex justify-content-center m-0">
    <div class="container text-center m-0 ">
        <div class="grid-layout post-3-columns" data-item="post-item">
            <div class="post-item  ">
                <a href="/businessdirectory" class="text-muted font-weight-600">
                    <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600">

                        Business Directory
                    </div>
                </a>
            </div>

            <div class="post-item  ">
                <a href="/advertise" class="text-muted font-weight-600">
                    <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600 ">

                        <!-- <br> -->
                    Advertise
                    </div>
                </a>
            </div>

            <div class="post-item  ">
                <a href="/localevents" class="text-muted font-weight-600">
                    <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600">

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
                            <a href="#"><img alt="" src="{{ url('front/img/clients/1.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="{{ url('front/img/clients/2.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="{{ url('front/img/clients/3.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="{{ url('front/img/clients/4.png')}}"></a>
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.241881356656!2d-0.050808684338578!3d51.61877817965347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761e8ae036c7b1%3A0x85f7847126c3629f!2sLocal%20Green%20Guide%20Ltd%20-%20LGG%20Marketing!5e0!3m2!1sen!2s!4v1639087067763!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!-- end: Google Map -->
</section>
<!-- end: MAP -->








@endsection





