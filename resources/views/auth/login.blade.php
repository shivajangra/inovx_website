@extends('layouts.app')

@section('content')
<div class="intro-area intro-area-3">
    <div class="bg-wrapper">
      <img src="{{asset('img/background/bg2.jpg')}}" alt="">
    </div>
<div class="intro-content">
<div class="slider-content">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <div class="slide-all-text">

              <form id="loginForm" method="POST" action="{{ route('login') }}" class="contact-form">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <input type="email" class="email form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}" autofocus required data-error="Please enter your username">
                      @error('email')
                      <div class="help-block with-errors"><strong>{{ $message }}</strong></div>
                      @enderror
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required data-error="Please enter your password">
                      @error('password')
                      <div class="help-block with-errors"><strong>{{ $message }}</strong></div>
                      @enderror
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <button type="submit" class="add-btn contact-btn">Sign In</button>
                      @if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      @endif
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                  </div>
              </form>

        </div>
      </div>
      <!-- <div class="col-md-6 col-sm-6 hidden-xs">
        <div class="slide-images-inner wow fadeInUp" data-wow-delay="0.5s">
                            <div class="slide-images">
                                <img src="{{asset('img/slider/s1.png')}}" alt="">
                            </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
</div>
</div>

@endsection
