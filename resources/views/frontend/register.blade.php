@extends("frontend.layouts.master")
@section('main-section')
    <section id="page-title" class="text-light" data-bg-parallax="{{ url('img/parallax/_5.jpg')}}">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li><a href="">Home</a> </li>
                    <li class="active">Register</li>
                </ul>
            </div>
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h1>Register</h1>
                <!-- <span>Simple page title with background parallax image</span> -->
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <section class="pt-5 pb-5">
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center min-vh-100">
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <h3>Register New Account</h3>

                    <p>Create an account by entering the information below. If you are a returning customer please login at
                        the top of the page.</p>
                    <form class="form-validate mt-5" method="POST" action="">
                        <div class="h5 mb-4">Account details</div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="username">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required=""
                                    value="" />

                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                    required="" value="" />

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="password" placeholder="Enter password"
                                        type="password" required="" />
                                    <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true"
                                            style="cursor: pointer;"></i></span>

                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password2">Confirm Password</label>
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="password2" placeholder="Enter password"
                                        type="password" required="" />
                                    <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true"
                                            style="cursor: pointer;"></i></span>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Company Name</label>
                                <input type="text" class="form-control" name="company_name"
                                    placeholder="Enter your Company Name" required=""
                                    value="" />

                            </div>
                            <div class="form-group col-md-6">
                                <label for="surname">Company Registration Number</label>
                                <input type="text" class="form-control" name="company_registration_no"
                                    placeholder="Enter your Company Registration Number" required=""
                                    value="" />

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="telephone">Phone</label>
                                <input class="form-control" type="tel" name="phone_no"
                                    placeholder="Enter your Phone number" required=""
                                    value="" />

                            </div>
                            <div class="form-group col-md-6">
                                <label for="telephone">Charity Number</label>
                                <input class="form-control" type="text" name="charity_no"
                                    placeholder="Enter your Charity number" required=""
                                    value="" />

                            </div>
                        </div>
                        <div class="h5 mb-4">Billing Address</div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="billing_address"
                                    placeholder="Enter your Billing Address" required=""
                                    value="" />

                            </div>
                        </div>
                        <button type="submit" class="btn m-t-30 mt-3">Submit</button>
                    </form>
                    <div class="mt-4"><small>Already have an acocunt?</small> <a href="login"
                            class="small fw-bold">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Section -->

@endsection
