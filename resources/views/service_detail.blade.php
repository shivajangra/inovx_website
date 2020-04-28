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
                        <h3>Service Domains</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Domain</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- End services Area -->
<div class="single-services-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="page-head-left">
                   <!-- strat single area -->
                    <div class="single-page-head">
                        <div class="left-menu">
                          <ul>
                              <li class="{{$id == 'software-development' ? 'active':''}}"><a href="/service-detail/software-development">Software Development</a></li>
                              <li class="{{$id == 'ai-development' ? 'active':''}}"><a href="/service-detail/ai-development">AI Development</a></li>
                              <li class="{{$id == 'data-analytics' ? 'active':''}}"><a href="/service-detail/data-analytics">Data Analytics</a></li>
                              <li class="{{$id == 'internet-of-things' ? 'active':''}}"><a href="/service-detail/internet-of-things">Internet Of Things (IoT)</a></li>
                              <li class="{{$id == 'blockchain-technology' ? 'active':''}}"><a href="/service-detail/blockchain-technology">BlockChain Technology</a></li>
                              <li class="{{$id == 'digital-platform' ? 'active':''}}"><a href="/service-detail/digital-platform">Digital Platform</a></li>
                          </ul>
                        </div>
                    </div>
                    <!-- strat single area -->
                    <div class="single-page-head">
                        <div class="download-btn">
                            <div class="about-btn">
                                <a href="#" class="down-btn">Download Brochure <i class="fa fa-file-pdf-o"></i></a>
                                <!-- <a href="#" class="down-btn apli">Download Application <i class="fa fa-file-word-o"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- strat single area -->
                    <div class="single-page-head">
                        <div class="clients-testi">
                            <div class="single-review text-center">
                                <div class="review-img ">
                                    <img src="{{asset('img/blog/avater2.png')}}" alt="">
                                </div>
                                <div class="review-text">
                                    <p>Our strategic management expertise is at the core of everything we do. We help you make the critical, interdependent decisions necessary to succeed in today’s complex and uncertain world.</p>
                                    <h4>Inovx Team</h4>
                                    <span class="guest-rev">AI - Software - Data</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single area -->
                </div>
            </div>
            <!-- End left sidebar -->
            <!-- Start service page -->
            <div class="col-md-8 col-sm-8 col-xs-12">

              @if($id == 'software-development')
              <div class="row">
                  <!-- single-well start-->
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-well mar-well">
                          <a href="#">
                              <h3>Software Development</h3>
                          </a>
                          <p>Software Development Offers a range of Web, Mobile, and Desktop Applications and products, which can be used “As-Is” or can be customized to meet the exact needs of businesses of every size.</p>
                      </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-page mar-well">
                          <div class="page-img elec-page">
                              <img src="{{asset('img/service/software.png')}}" alt="">
                          </div>
                      </div>
                  </div>
                  <!-- End single page -->
              </div>
              <!-- end Row -->
              @elseif($id == 'ai-development')
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-well mar-well">
                        <a href="#">
                            <h3>AI Development</h3>
                        </a>
                        <p>AI Development opportunity to reinvent your business strategies by integrating AI services, a library of modules to enable accelerated AI features development for your business. Spanning across both the web and mobile applications, Artificial Intelligence will make your business smarter on every corner.</p>
                    </div>
                </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-well mar-well">
                          <a href="#">
                              <h4>AI install business management system</h4>
                          </a>
                          <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="single-page">
                          <div class="page-img elec-page">
                              <img src="{{asset('img/service/software-development.jpg')}}" alt="">
                          </div>
                      </div>
                  </div>
                  <!-- End single page -->
                  <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="single-well last-content">
                          <a href="#">
                              <h4>Industry autocate system</h4>
                          </a>
                          <p>When replacing a multi-lined selection of text</p>
                          <ul class="marker-list">
                              <li>Words is roughly being maintained</li>
                              <li>Letters or begins with a capital letter</li>
                              <li>Previous casing is maintained</li>
                              <li>Maintains the amount of lines</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- end Row -->
              @elseif($id == 'data-analytics')
               <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-well mar-well">
                            <a href="#">
                                <h3>Data Analytics</h3>
                            </a>
                            <p>Data Analytics Data science, big data analysis, business intelligence solutions and enterprise search consulting services that enable organizations to utilize the potential of data and insights for taking key business decisions.</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-page mar-well">
                            <div class="page-img elec-page">
                                <img src="{{asset('img/service/s1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- End single page -->
                </div>
                <!-- end Row -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-well mar-well">
                            <a href="#">
                                <h4>What kind of business you have could investment</h4>
                            </a>
                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
                        </div>
                    </div>
                    <!-- End single page -->
                </div>
                <!-- end Row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-well mar-well">
                            <a href="#">
                                <h4>Data science solution</h4>
                            </a>
                            <p>When replacing a multi-lined selection of text</p>
                            <ul class="marker-list">
                                <li>Words is roughly being maintained</li>
                                <li>Letters or begins with a capital letter</li>
                                <li>Previous casing is maintained</li>
                                <li>Maintains the amount of lines</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-page mar-well">
                            <div class="page-img elec-page">
                                <img src="{{asset('img/service/s2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
              @elseif($id == 'internet-of-things')
              <div class="row">
                  <!-- single-well start-->
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-well mar-well">
                          <a href="#">
                              <h3>Internet Of Things (IoT)</h3>
                          </a>
                          <p>IoT Provide IoT solution according to Industry need, manage your product with proper monitoring of the environment data on your mobile app and system dashboard.</p>
                      </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-page mar-well">
                          <div class="page-img elec-page">
                              <img src="{{asset('img/service/iot.jpg')}}" alt="">
                          </div>
                      </div>
                  </div>
                  <!-- End single page -->
              </div>
              @elseif($id == 'blockchain-technology')
              <div class="row">
                  <!-- single-well start-->
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-well mar-well">
                          <a href="#">
                              <h3>BlockChain Technology</h3>
                          </a>
                          <p>Secure and user-friendly solutions to meet desired use-case requirement across sectors and industries with the help of our expert team by leveraging Blockchain technology.</p>
                      </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-page mar-well">
                          <div class="page-img elec-page">
                              <img src="{{asset('img/service/blockchain1.png')}}" alt="">
                          </div>
                      </div>
                  </div>
                  <!-- End single page -->
              </div>
              @elseif($id == 'digital-platform')
              <div class="row">
                  <!-- single-well start-->
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-well mar-well">
                          <a href="#">
                              <h3>Digital Platform</h3>
                          </a>
                          <p>Sustainable Result Focussed Online Marketing Campaigns With years of experience in developing business marketing web applications and mobile apps and integrating with them popular cloud solutions.</p>
                      </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-page mar-well">
                          <div class="page-img elec-page">
                              <img src="{{asset('img/service/digital.png')}}" alt="">
                          </div>
                      </div>
                  </div>
                  <!-- End single page -->
              </div>
              @endif
            </div>
        </div>
    </div>
</div>
<!-- Start Footer bottom Area -->
@endsection
