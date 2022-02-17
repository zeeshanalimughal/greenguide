@extends("frontend.layouts.master")
@section('main-section')


<section id="page-title" class="text-light" data-bg-parallax="{{ url('front/img/parallax/_5.jpg')}}">
            <div class="container">
                <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                    <ul>
                        <li><a href="/">Home</a> </li>
                        <li class="active">Login</li>
                    </ul>
                </div>
                <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                    <h1>Login</h1>
                    <!-- <span>Simple page title with background parallax image</span> -->
                </div>
            </div>
        </section>
        <!-- end: Page title -->
<section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 no-padding" style="background: transparent url({{ url('front/img/login-bg.jpg')}}) no-repeat scroll center top / cover; height:470px;">
            </div>
            <div class="col-md-6">
                <div class="p-40 p-t-60 p-xs-20">
                    <h3>Sign up or Login</h3>

                    <form  action="/account" class="form-validate">
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input placeholder="Email" name="email" class="form-control" type="text" required="" />

                        </div>
                        <div class="form-group m-b-5">
                            <label class="sr-only">Password</label>
                            <input placeholder="Password" class="form-control" name="password" type="password" required="" />

                        </div>
                        <div class="form-group form-inline text-start m-b-10 ">
                            <a class="right" href="/forgot-password">
                                <p><small>Lost your Password?</small></p>
                            </a>
                        </div>
                        <div class="text-start form-group">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                    <p class="text-start">Don't have an account yet? <a href="/register">Register New
                            Account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection





