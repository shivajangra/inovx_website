@extends('layouts.web')

@section('content')
<!-- Start Slider Area -->
<div class="intro-area intro-home">
    <div class="bg-wrapper">
      <img src="{{ asset('img/background/bg.jpg')}}" alt="">
    </div>
<div class="intro-content">
<div class="slider-content">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="slide-all-text">
            <!-- layer 1 -->
                            <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                                <h2 class="title2">We work in close partnership with you, <span class="color">Supporting
decisions and helping deliver your strategic goals</span> </h2>
                            </div>
                            <div class="layer-2 wow fadeInUp" data-wow-delay="0.5s">
                                <p>Understanding your market is the key to staying ahead
 we offer bespoke analysis and intelligence with a
unique insight into current and future trends.</p>
                            </div>
                            <!-- <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                                <a href="#" class="ready-btn" >Get In Touch</a>
                            </div> -->
        </div>
      </div>
      <div class="col-md-6 col-sm-6 hidden-xs">
        <div class="slide-images-inner wow fadeInUp" data-wow-delay="0.5s">
                            <div class="slide-images">
                                <img src="{{ asset('img/slider/s1.png')}}" alt="">
                            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- End Slider Area -->
<!-- Start Brand Area -->
<!-- <div class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-content">
                    <img src="{{ asset('img/about/ab.png')}}" alt="">
                </div>
            </div>
           <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-text">
                    <h3>About our <span class="color">Machine Learning</span> software firm.</h3>
        <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create. maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                    <ul class="hidden-sm">
                        <li><a href="#">Innovation idea latest business tecnology</a></li>
                        <li><a href="#">Digital content marketing online clients plateform</a></li>
                        <li><a href="#">Safe secure services for you online email account</a></li>
                        <li><a href="#">Innovation idea latest business tecnology</a></li>
                    </ul>
                    <a class="ab-btn" href="about.html">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Banner Area -->
<!-- Service area start -->
<div class="service-area bg-color area-padding">
    <div class="container">
       <div class="row">
         <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
     <div class="section-headline text-center">
       <h3>Our Expertise</h3>
       <p>We can help you monitor competitor activity and
stay on top of emerging technologies and trends</p>
     </div>
   </div>
 </div>
  <div class="all-service">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service text-service">
                        <div class="service-img">
                            <img src="{{ asset('img/service/w5.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h4><a href="/service-detail/software-development">Software Development</a></h4>
                            <p>Offers a range of Web, Mobile, and Desktop Applications and products, which can be used “As-Is” or can be customized to meet the exact needs of businesses of every size.</p>
                        </div>
                    </div>
                </div>
                <!-- single-service end-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('img/service/w2.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h4><a href="/service-detail/ai-development">AI development</a></h4>
                            <p>Opportunity to reinvent your business strategies by integrating AI services, a library of modules to enable accelerated AI features development for your business.</p>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service text-service">
                        <div class="service-img">
                            <img src="{{ asset('img/service/w1.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h4><a href="/service-detail/data-analytics">Data Analytics</a></h4>
                            <p>Data science, big data analysis, business intelligence solutions and enterprise search consulting services that enable organizations to utilize the potential of data.</p>
                        </div>
                    </div>
                </div>
                <!-- single-service end-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-service">
                    <div class="service-img">
                      <img src="{{ asset('img/service/w4.png')}}" alt="">
                    </div>
                    <div class="service-content">
                      <h4><a href="/service-detail/internet-of-things">Internet of Things (IoT)</a></h4>
                      <p>Provide IoT solution according to Industry need, manage your product with proper monitoring of the environment data on your mobile app and system dashboard.</p>
                    </div>
                  </div>
                </div>
                <!-- single-service end-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service text-service">
                        <div class="service-img">
                            <img src="{{ asset('img/service/s6.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h4><a href="/service-detail/blockchain-technology">BlockChain Technology</a></h4>
                           <p>Secure and user-friendly solutions to meet desired use-case requirement across sectors and industries with the help of our expert team by leveraging Blockchain technology.</p>
                        </div>
                    </div>
                </div>
                <!-- single-service end-->
               <div class="col-md-4 col-sm-6 col-xs-12">
                   <div class="single-service">
                       <div class="service-img">
                           <img src="{{ asset('img/service/w3.png')}}" alt="">
                       </div>
                       <div class="service-content">
                           <h4><a href="/service-detail/digital-platform">Digital Platform</a></h4>
                          <p>Sustainable Result Focussed Online Marketing Campaigns With years of experience in developing business marketing applications.</p>
                       </div>
                   </div>
               </div>
               <!-- single-service end-->
  </div>
        </div>
    </div>
</div>
<!-- Service area End -->
<!-- Start Challange Area -->
<div class="tab-area fix area-padding">
    <div class="container">
        <div class="row">
  <!-- End single page -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="tab-menu">
       <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="active">
            <a href="#p-view-1" role="tab" data-toggle="tab">
                  <span class="cha-icon"><i class="flaticon-017-automation"></i></span>
                <span class="cha-title">Research & solution</span>
            </a>
        </li>
        <li>
            <a href="#p-view-2" role="tab" data-toggle="tab">
                  <span class="cha-icon"><i class="flaticon-036-chip"></i></span>
                <span class="cha-title">Design & strategy</span>
            </a>
        </li>
        <li>
              <a href="#p-view-3" role="tab" data-toggle="tab">
                  <span class="cha-icon"><i class="flaticon-016-ai"></i></span>
                <span class="cha-title">Artificial intelligence</span>
            </a>
        </li>
        <li>
              <a href="#p-view-4" role="tab" data-toggle="tab">
                 <span class="cha-icon"><i class="flaticon-091-ai"></i></span>
                <span class="cha-title">Cloud deployment</span>
            </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="tab-content">
      <div class="tab-pane active" id="p-view-1" >
        <div class="tab-inner">
          <div class="single-machine row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tabe-img">
                                        <img src="{{ asset('img/service/research.png')}}" alt="">
                                    </div>
            </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="machine-text">
                                        <h3>AI and Digital Data platform solutions</h3>
                                        <p>Our strategic management expertise is at the core of everything we do. We help you make the critical, interdependent decisions necessary to succeed in today’s complex and uncertain world.</p>
                                        <ul>
                                            <li><a href="#">Innovation idea latest business technology</a></li>
                                            <li><a href="#">Digital content marketing online clients plateform</a></li>
                                            <li><a href="#">Innovation idea latest business tecnology</a></li>
                                        </ul>
                                    </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="p-view-2">
        <div class="tab-inner">
          <div class="single-machine row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tabe-img">
                                        <img src="{{ asset('img/service/s2.png')}}" alt="">
                                    </div>
            </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="machine-text">
                                        <h3>Design and development use latest technology</h3>
                                        <p>Fact-based decision making is becoming a reality as data intelligence is required by everyone, from rank and file employees in the organization to those in an extended enterprise including suppliers, partners and customers. Add this to your organizational stack to</p>
                                        <ul>
                                            <li><a href="#">Build performance intelligence</a></li>
                                            <li><a href="#">Build next generation data monetization models</a></li>
                                            <li><a href="#">Move forward towards an intelligent future</a></li>
                                        </ul>
                                    </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="p-view-3">
        <div class="tab-inner">
          <div class="single-machine row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tabe-img">
                                        <img src="{{ asset('img/service/s3.png')}}" alt="">
                                    </div>
            </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="machine-text">
                                        <h3>Artificial intelligence</h3>
                                        <p>Artificial Intelligence industry is an amazingly fast emerging technology being the most widely used. The whole idea has been to improve and develop software’s and machines. This combines the power of memorization and generalization</p>
                                        <ul>
                                            <li><a href="#">Acquiring, designing process, and analysing images </a></li>
                                            <li><a href="#">Algorithm development and system design</a></li>
                                            <li><a href="#">Natural Language Processing, Speech recognition and so on.</a></li>
                                        </ul>
                                    </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="p-view-4">
        <div class="tab-inner">
          <div class="single-machine row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tabe-img">
                                        <img src="{{ asset('img/service/s4.png')}}" alt="">
                                    </div>
            </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="machine-text">
                                        <h3>machine learning platform used cloud deployment</h3>
                                        <p>A cloud deployment model is a specific configuration of environment parameters such as the accessibility and proprietorship of the deployment infrastructure and storage size. It means that deployment types vary depending on who controls the infrastructure and where it resides.</p>
                                        <ul>
                                            <li><a href="#">For Hosting, Running PaaS / SaaS & Big Data.</a></li>
                                            <li><a href="#">Perfect cloud Provisioning.</a></li>
                                            <li><a href="#">Full cloud Api Integration and automation.</a></li>
                                        </ul>
                                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end column -->
</div>
<!-- end Row -->
    </div>
</div>
<!-- End Tab end -->

<!-- Start project Area -->
<div class="project-area area-padding">
    <div class="container">
        <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12 ">
    <div class="section-headline text-center">
      <h3>Our successful goal</h3>
      <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
    </div>
  </div>
</div>
        <div class="row">
            <div class="project-carousel">
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#">
                                <img src="{{ asset('img/project/1.jpg')}}" alt="" />
                            </a>
                            <div class="add-actions text-center">
                                <a class="venobox" data-gall="myGallery" href="{{ asset('img/project/1.jpg')}}">
                                    <i class="port-icon ti-zoom-in"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-dec">
                            <h4>Data collection</h4>
                            <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- single-awesome-project start -->
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#">
                                <img src="{{ asset('img/project/2.jpg')}}" alt="" />
                            </a>
                            <div class="add-actions text-center">
                                <a class="venobox" data-gall="myGallery" href="{{ asset('img/project/2.jpg')}}">
                                    <i class="port-icon ti-zoom-in"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-dec">
                            <h4>Models development</h4>
                            <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- single-awesome-project start -->
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#">
                                <img src="{{ asset('img/project/3.jpg')}}" alt="" />
                            </a>
                            <div class="add-actions text-center">
                                <a class="venobox" data-gall="myGallery" href="{{ asset('img/project/3.jpg')}}">
                                    <i class="port-icon ti-zoom-in"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-dec">
                            <h4>Service deployment</h4>
                            <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- single-awesome-project start -->
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#">
                                <img src="{{ asset('img/project/4.jpg')}}" alt="" />
                            </a>
                            <div class="add-actions text-center">
                                <a class="venobox" data-gall="myGallery" href="{{ asset('img/project/4.jpg')}}">
                                    <i class="port-icon ti-zoom-in"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-dec">
                            <h4>Environment project</h4>
                            <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- single-awesome-project start -->
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#">
                                <img src="{{ asset('img/project/5.jpg')}}" alt="" />
                            </a>
                            <div class="add-actions text-center">
                                <a class="venobox" data-gall="myGallery" href="{{ asset('img/project/5.jpg')}}">
                                    <i class="port-icon ti-zoom-in"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-dec">
                            <h4>Design solution</h4>
                            <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                </div>
            </div>
        </div>
    </div>
    <!-- End main content -->
</div>
<!-- End project Area -->
<!-- Start testimonials Area -->
<div class="reviews-area bg-color fix area-padding">
    <div class="container">
        <div class="row">
            <div class="reviews-top">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="testimonial-inner">
                        <div class="review-head">
                            <h3>Our customer say <span class="color"> about our company</span> work</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy. The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy</p>
                            <a class="reviews-btn" href="review.html">More reviews</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="reviews-content">
                        <!-- start testimonial carousel -->
                        <div class="testimonial-carousel item-indicator">
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                    </div>
                                    <div class="testi-img ">
                                        <img src="{{ asset('img/review/1.jpg')}}" alt="">
                                        <div class="guest-details">
                                            <h4>Hamilton</h4>
                                            <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                    </div>
                                    <div class="testi-img ">
                                        <img src="{{ asset('img/review/2.jpg')}}" alt="">
                                        <div class="guest-details">
                                            <h4>Angel lima</h4>
                                            <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                    </div>
                                    <div class="testi-img ">
                                        <img src="{{ asset('img/review/3.jpg')}}" alt="">
                                        <div class="guest-details">
                                            <h4>Arthur Doil</h4>
                                            <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                    </div>
                                    <div class="testi-img ">
                                        <img src="{{ asset('img/review/4.jpg')}}" alt="">
                                        <div class="guest-details">
                                            <h4>Gabriel Hank</h4>
                                            <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End testimonials end -->

@endsection
