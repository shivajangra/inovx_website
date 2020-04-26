@extends('layouts.web')

@section('content')
<!-- Start Bottom Header -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>Your Dreams Our Efforts, Share Your Idea And We Share Our Team.</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Your Dreams</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->

<!-- Start contact Area -->
<div class="contact-area area-padding">
    <div class="container">
        <div class="row">
            <div class="contact-inner">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <h3 class="h-blue text-center">Join Our Team</h3>
              </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-mobile"></i>
                            <p>
                                Call : +91 8222999949<br>
                                <span>Monday-Friday (10am-18pm)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                                Email : info.inovx@gmail.com<br>
                                <span>Web: www.inovx.in</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Location : Gurugram<br>
                                <span>Q 271/ Sector 48</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-12 mt-4">
                 <div class="contact-images">
                     <img src="{{ asset('img/project/2.jpg')}}" alt="">
                 </div>
            </div>
            <!-- Start Left contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <div class="row">
                        <form id="joinTeamForm" method="POST" action="join_team" class="contact-form">
                           @csrf
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" class="form-control" name="name" placeholder="Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="mobile form-control" id="mobile" name="mobile" placeholder="Mobile" required data-error="Please enter your mobile">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="email form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" id="service" name="our_service" placeholder="Service" required data-error="Please select your service">
                                @foreach($services as $value)
                                    <option value="{{$value}}">{{$value}}</option>
                                  @endforeach
                              </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="workdomain" class="form-control" name="work_domain" placeholder="Working Domain" required data-error="Please enter your working domain">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="experience" class="form-control" name="experience" maxlength="2" placeholder="Experience" required data-error="Please enter your experience">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea id="message" rows="7" placeholder="Massage" name="message" class="form-control" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" class="add-btn contact-btn">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Left contact -->
        </div>
    </div>
</div>
<!-- End Contact Area -->
@endsection
