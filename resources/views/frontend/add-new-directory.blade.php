@extends("frontend.layouts.master")
@section('main-section')



<section id="page-title" class="text-light" data-bg-parallax="{{ url('front/img/parallax/_5.jpg') }}">
    <div class="container">
        <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
            <ul>
                <li><a href="/">Home</a> </li>
                <li class="active">Business Directory</li>
            </ul>
        </div>
        <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
            <h1>Add New Directory</h1>
            <!-- <span>Simple page title with background parallax image</span> -->
        </div>
    </div>
</section>
<!-- end: Page title -->
<!-- Page Menu -->
<section>
    <div class="container">
        <form method="POST" class="form-validate" action="" enctype="multipart/form-data">
            <div class="text-center">
                <h4>Contact Information</h4>
            </div>
            <br>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Company Name</label>
                <div class="col-lg-5">
                    <input class="form-control" type="text" name="company_name" required="required" value="" />
                </div>
                <label for="example-text-input" class="col-lg-1 col-form-label">Email</label>
                <div class="col-lg-5">
                    <input class="form-control" type="email" name="contact_email" required="required" value=""/>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Contact Name</label>
                <div class="col-lg-5">
                    <input class="form-control" type="text" name="contact_name" required="required" value="" />
                </div>
                <label for="example-text-input" class="col-lg-1 col-form-label">Contact Number</label>
                <div class="col-lg-5">
                    <input class="form-control" type="text" name="contact_phone" required="required" value="" />
                </div>
            </div>
            <br>
            <hr>
            <div class="text-center">
                <h4>Basic Information</h4>
            </div>
            <br>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Category</label>
                <div class="col-lg-5">
                    <select class="form-select select2" name="category_id" id="category_id" required="required" >
                        <option value="">Select a Category of Business</option>

                    </select>
                </div>
                <label for="example-text-input" class="col-lg-1 col-form-label">Subcategory</label>
                <div class="col-lg-5">
                    <select class="form-select select2" name="subcategory_id" id="subcategory_id" required="required" >
                        <option value="">Select a Subcategory of Business</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Sub Subcategory</label>
                <div class="col-lg-5">
                    <select class="form-select select2" name="sub_subcategory_id" id="sub_subcategory_id">
                        <option value="">Select a Sub Subcategory of Business</option>
                    </select>
                </div>
                <label for="example-text-input" class="col-lg-1 col-form-label">Borough</label>
                <div class="col-lg-5">
                    <select class="form-select select2" name="borough" required="required">
                        <option value="">Select a Borough</option>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Logo</label>
                <div class="col-lg-11">
                    <input class="form-control" type="file" name="logo" accept="image/x-png,image/jpeg"/>
                </div>
            </div>
            <br>
            <hr>
            <div class="text-center">
                <h4>Social Media</h4>
            </div>
            <br>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Website</label>
                <div class="col-lg-5">
                    <input class="form-control" type="text" name="website" required="" />
                </div>
                <label for="example-text-input" class="col-lg-1 col-form-label">Facebook</label>
                <div class="col-lg-5">
                    <input class="form-control" type="text" name="facebook" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Instagram</label>
                <div class="col-lg-5">
                    <input class="form-control" type="text" name="instagram" required="" />
                </div>
                <label for="example-text-input" class="col-lg-1 col-form-label">Twitter</label>
                <div class="col-lg-5">
                    <input class="form-control" type="text" name="twitter" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Youtube</label>
                <div class="col-lg-5">
                    <input class="form-control" type="text" name="youtube" required="" />
                </div>
            </div>
            <br>
            <hr>
            <div class="text-center">
                <h4>Trading Hours</h4>
            </div>
            <br>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Monday</label>
                <div class="col-lg-3">
                    <input class="form-control" type="time" name="monday_open" required="" />
                </div>
                <div class="col-lg-2">
                    <input class="form-control" type="time" name="monday_close" required="" />
                </div>

                <label for="example-text-input" class="col-lg-1 col-form-label">Tuesday</label>
                <div class="col-lg-2">
                    <input class="form-control" type="time" name="tuesday_open" required="" />
                </div>

                <div class="col-lg-3">
                    <input class="form-control" type="time" name="tuesday_close" required="" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Wednesday</label>
                <div class="col-lg-3">
                    <input class="form-control" type="time" name="wednesday_open" required="" />
                </div>
                <div class="col-lg-2">
                    <input class="form-control" type="time" name="wednesday_close" required="" />
                </div>

                <label for="example-text-input" class="col-lg-1 col-form-label">Thursday</label>
                <div class="col-lg-2">
                    <input class="form-control" type="time" name="thursday_open" required="" />
                </div>

                <div class="col-lg-3">
                    <input class="form-control" type="time" name="thursday_close" required="" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Friday</label>
                <div class="col-lg-3">
                    <input class="form-control" type="time" name="friday_open" required="" />
                </div>
                <div class="col-lg-2">
                    <input class="form-control" type="time" name="friday_close" required="" />
                </div>

                <label for="example-text-input" class="col-lg-1 col-form-label">Saturday</label>
                <div class="col-lg-2">
                    <input class="form-control" type="time" name="saturday_open" required="" />
                </div>

                <div class="col-lg-3">
                    <input class="form-control" type="time" name="saturday_close" required="" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-lg-1 col-form-label">Sunday</label>
                <div class="col-lg-3">
                    <input class="form-control" type="time" name="sunday_open" required="" />
                </div>
                <div class="col-lg-2">
                    <input class="form-control" type="time" name="sunday_close" required="" />
                </div>

                <label for="example-text-input" class="col-lg-1 col-form-label">Bank Holiday</label>
                <div class="col-lg-2">
                    <input class="form-control" type="time" name="holiday_open" required="" />
                </div>

                <div class="col-lg-3">
                    <input class="form-control" type="time" name="holiday_close" required="" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                    <button class="btn btn-shadow btn-block" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>





@endsection





