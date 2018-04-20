@extends('layouts.apphome')

@section('title', 'HOME')

@section('content')

<body class="index">
    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
                <li data-target="#main-slide" data-slide-to="3"></li>
                <li data-target="#main-slide" data-slide-to="4"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="{{ asset('template/images/header-bg-1.jpg') }}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                            <span>Web Alumni <strong>STEI</strong></span>
                            </h1>
                            <p class="animated2">Website resmi alumni Sekolah Teknik Elektro dan Informatika<br>Institut Teknologi Bandung</p>	
                            <a href="#service" class="page-scroll btn btn-primary animated1">Read More</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                @if (count($homedata[0]) > 0)
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($homedata[0] as $post)
                        @if ($i < 3)
                            <div class="item overlay">
                                <img class="img-responsive-article" src="/storage/cover_images/{{$post->cover_image}}" alt="slider">
                                <div class="slider-content">
                                    <div class="col-md-12 text-center">
                                        <h1 class="animated1">
                                            <span>{{$post->title}}</span>
                                        </h1>
                                        {{-- <p class="animated2">Generate a flood of new business with the<br> power of a digital media platform</p> --}}
                                        <a href="/posts/{{$post->id}}" class="page-scroll btn btn-primary animated3">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @php
                                $i = $i + 1;
                            @endphp
                        @else
                            @break
                        @endif
                    @endforeach
                @endif
                
                <div class="item">
                    <img class="img-responsive" src="{{ asset('template/images/galaxy.jpg') }}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                                <span>View more <strong>Article</strong></span>
                            </h1>
                             <a class="animated3 slider btn btn-primary btn-min-block" href="/article">Click me</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Feature Section -->
        <section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h3>Greeting Speech</h3>
                            <br>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                            <br>
                            <br>
                            Yowinarto, Ketua Alumni STEI</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Our Services</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-users"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Meet new members</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-newspaper-o"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Tons of articles</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-comments"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Interaction with others</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    {{-- </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-plug"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Wordpress Plugin</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-joomla"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Joomla Template</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-cube"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Joomla Extension</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 --> --}}
                    
                </div><!-- /.row -->
            
            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->
    
    
    
    <!-- Start Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item">
                    <i class="fa fa-cloud-upload"></i>
                    <div class="timer" id="item1" data-to="991" data-speed="5000"></div>
                    <h5>Files uploaded</h5>                               
                    </div>
                </div>   --}}
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="counter-item">
                    <i class="fa fa-users"></i>
                    <div class="timer" id="item4" data-to="{{count($homedata[1])}}" data-speed="2500"></div>
                    <h5>Members</h5>                               
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="counter-item">
                    <i class="fa fa-newspaper-o"></i>
                    <div class="timer" id="item2" data-to="{{count($homedata[0])}}" data-speed="2500"></div>
                    <h5>Article</h5>                               
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="counter-item">
                    <i class="fa fa-comments"></i>
                    <div class="timer" id="item3" data-to="{{count($homedata[2])}}" data-speed="2500"></div>
                    <h5>Forum</h5>                               
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Section -->



    <!-- Start Team Member Section -->
    <section id="team" class="team-member-section">
        <div class="container">            
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h3>Our New Members</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div id="team-section">
                        <div class="our-team">
                            @if (count($homedata[1]) > 0)
                                @php
                                    $i = 0;
                                @endphp 
                                @foreach ($homedata[1] as $member)
                                    @if ($i < 5)
                                        <div class="team-member">
                                            <img src="/storage/profile_image/{{$member->profile_image}}" class="img-responsive" alt="">
                                            <div class="team-details">
                                                <h4>{{$member->name}}</h4>
                                                <p>Alumni of STEI</p>
                                                <ul>
                                                <li><a href="/members/{{$member->id}}"><i class="fa fa-user"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    @else   
                                        @break
                                    @endif
                                @endforeach
                            @endif                            
                            {{-- <div class="team-member">
                                <img src="{{ asset('template/images/team/manage-1.png') }}" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <p>Founder & Director</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team-member">
                                <img src="{{ asset('template/images/team/manage-2.png') }}" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <p>Founder & Director</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team-member">
                                <img src="{{ asset('template/images/team/manage-3.png') }}" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <p>Founder & Director</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>    

                            <div class="team-member">
                                <img src="{{ asset('template/images/team/manage-4.png') }}" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <p>Founder & Director</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team-member">
                                <img src="{{ asset('template/images/team/manage-1.png') }}" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <p>Founder & Director</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team-member">
                                <img src="{{ asset('template/images/team/manage-2.png') }}" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <p>Founder & Director</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Member Section -->
    
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact With Us</h3>
                        <h5 class="white-text lowercase"><strong>admin@admin.com</strong></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contact info</h4>
                        <ul>
                            <li><strong>E-mail :</strong> admin@admin.com</li>
                            <li><strong>Phone :</strong> +62-22-2502260</li>
                            <br>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="footer-contact-info">
                        <h4>Working Hours</h4>
                        <ul>
                            <li><strong>Mon-Fri :</strong> 8 am to 5 pm</li>
                            <li><strong>Sat-Sunday :</strong> Closed</li>
                            <br>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; 2018 <a href="https://themefisher.com/">ThemeFisher</a></span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12" style="text-align: right">
                        <span class="copyright">Developed by <strong>STEI-ITB</strong> © 2018</span>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>
@endsection
