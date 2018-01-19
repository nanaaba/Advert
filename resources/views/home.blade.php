@extends('layouts.master')

@section('content')

<!-- heading-news-section2
                        ================================================== -->
<section class="heading-news2">

    <div class="container">

        <div class="ticker-news-box">
            <span class="breaking-news">breaking news</span>
            <ul id="js-news">
                <li class="news-item"><span class="time-news">11:36 pm</span>  <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a> Donec odio. Quisque volutpat mattis eros... </li>
                <li class="news-item"><span class="time-news">12:40 pm</span>  <a href="#">Dëshmitarja Abrashi: E kam parë Oliverin në turmë,</a> ndërsa neve na shpëtoi “çika Mille” </li>
                <li class="news-item"><span class="time-news">11:36 pm</span>  <a href="#">Franca do të bashkëpunojë me Kosovën në fushën e shëndetësisë. </a></li>
                <li class="news-item"><span class="time-news">01:00 am</span>  <a href="#">DioGuardi, kështu e mbrojti Kosovën në Washington, </a> para serbit Vejvoda </li>
            </ul>
        </div>

        <div class="iso-call heading-news-box">
            <div class="image-slider snd-size">
                <span class="top-stories">TOP ADS</span>
                <ul class="bxslider">

                    <li>
                        <div class="news-post image-post">

                            <img src="{{ asset('upload/news-posts/h1.jpg')}}"   alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="world.html"></a>
                                    <h2><a href="single-post.html">
                                        </a>
                                    </h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                        <li><i class="fa fa-eye"></i>872</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>

            <div class="news-post image-post default-size">
                <img src="{{ asset('upload/news-posts/h3.jpg')}}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <h2><a href="single-post.html">Lorem ipsum dolor sit amet, consectetuer</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('upload/news-posts/h4.jpg')}}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <h2><a href="single-post.html">Nullam malesuada erat ut turpis.</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
                        </ul>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('upload/news-posts/h5.jpg')}}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <h2><a href="single-post.html">Donec odio. </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('upload/news-posts/h6.jpg')}}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post fashion" href="fashion.html">fashion</a>
                        <h2><a href="single-post.html">Quisque volutpat mattis </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                    </div>
                </div>
            </div>
            <div class="news-post image-post">
                <img src="{{ asset('upload/news-posts/h3.png')}}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post fashion" href="fashion.html">Milk</a>
                        <h2><a href="single-post.html"></a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End heading-news-section -->
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <!-- block content -->
                <div class="block-content">

                    <!-- grid box -->

                    <!-- End grid box -->

                    <!-- google addsense -->
                    <div class="advertisement">
                        <div class="desktop-advert">
                            <span>Coca Cola</span>
                            <img src="{{ asset('upload/news-posts/banner.jpg')}}" alt="">
                        </div>

                    </div>
                    <!-- End google addsense -->

                    <!-- grid-box -->
                    <div class="grid-box">

                        <div class="title-section">
                            <h1><span class="world">News in Video</span></h1>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="news-post video-post">
                                    <img alt="" src="{{ asset('upload/news-posts/a.jpg')}}">
                                    <a href="https://www.youtube.com/watch?v=ILoKhF6oq34" class="video-link">
                                        <i class="fa fa-play-circle-o"></i></a>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news-post video-post">
                                    <img alt="" src="{{ asset('upload/news-posts/b.jpg')}}">
                                    <a href="https://www.youtube.com/watch?v=ILoKhF6oq34" class="video-link">
                                        <i class="fa fa-play-circle-o"></i></a>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news-post video-post">
                                    <img alt="" src="{{ asset('upload/news-posts/c.jpg')}}">
                                    <a href="https://www.youtube.com/watch?v=ILoKhF6oq34" class="video-link">
                                        <i class="fa fa-play-circle-o"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="news-post video-post">
                                    <img alt="" src="{{ asset('upload/news-posts/d.jpg')}}">
                                    <a href="https://www.youtube.com/watch?v=ILoKhF6oq34" class="video-link">
                                        <i class="fa fa-play-circle-o"></i></a>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news-post video-post">
                                    <img alt="" src="{{ asset('upload/news-posts/e.jpg')}}">
                                    <a href="https://www.youtube.com/watch?v=ILoKhF6oq34" class="video-link">
                                        <i class="fa fa-play-circle-o"></i></a>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news-post video-post">
                                    <img alt="" src="{{ asset('upload/news-posts/h5.jpg')}}">
                                    <a href="https://www.youtube.com/watch?v=ILoKhF6oq34" class="video-link">
                                        <i class="fa fa-play-circle-o"></i></a>

                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- End grid-box -->


                    <!-- google addsense -->
                    <div class="advertisement">
                        <div class="desktop-advert">
                            <span>Advertisement</span>
                            <img src="{{ asset('upload/news-posts/a.gif')}}" alt="">
                        </div>
                        <div class="tablet-advert">
                            <span>Advertisement</span>
                            <img src="{{ asset('upload/addsense/468x60-white.jpg')}}" alt="">
                        </div>
                        <div class="mobile-advert">
                            <span>Advertisement</span>
                            <img src="{{ asset('upload/addsense/300x250.jpg')}}" alt="">
                        </div>
                    </div>
                    <!-- End google addsense -->


                </div>
                <!-- End block content -->

            </div>

            <div class="col-sm-4">

                <!-- sidebar -->
                <div class="sidebar">



                    <div class="widget features-slide-widget">
                        <div class="title-section">
                            <h1><span>ADS</span></h1>
                        </div>
                        <div class="news-post image-post2">
                            <div class="post-gallery">
                                <img src="{{ asset('upload/news-posts/2.jpg')}}" alt="">
                                <div class="hover-box">
                                    <div class="inner-hover">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="image-post-slider">
                                                    <ul class="bxslider">
                                                        <li>
                                                            <div class="news-post image-post2">
                                                                <div class="post-gallery">
                                                                    <img src="{{ asset('upload/news-posts/2.jpg')}}" alt="">
                                                                    <div class="hover-box">
                                                                        <div class="inner-hover">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                 
                                                  </ul>
                                                </div>-->
                    </div>


                    <!--                    <div class="widget subscribe-widget">
                                            <form class="subscribe-form">
                                                <h1>Subscribe to RSS Feeds</h1>
                                                <input type="text" name="sumbscribe" id="subscribe" placeholder="Email"/>
                                                <button id="submit-subscribe">
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                                <p>Get all latest content delivered to your email a few times a month.</p>
                                            </form>
                                        </div>-->


                    <div class="advertisement">
                        <div class="desktop-advert">
                            <span>Advertisement</span>
                            <img src="{{ asset('upload/news-posts/3.jpg')}}" alt="">
                        </div>
                        <div class="tablet-advert">
                            <span>Advertisement</span>
                            <img src="{{ asset('upload/news-posts/3.jpg')}}" alt="">
                        </div>
                        <div class="mobile-advert">
                            <span>Advertisement</span>
                            <img src="{{ asset('upload/news-posts/3.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
                <!-- End sidebar -->

            </div>

        </div>

    </div>
</section>
<div class="list-line-posts">
    <div class="container">

        <div class="owl-wrapper">
            <div class="owl-carousel" data-num="4">

                <div class="item list-post">
                    <img src="{{ asset('upload/news-posts/mtn.jpg')}}" alt="">
                    <div class="post-content">
                        <a href="food.html">Promo</a>

                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </div>

                <div class="item list-post">
                    <img src="{{ asset('upload/news-posts/tigo.jpg')}}" alt="">
                    <div class="post-content">
                        <a href="food.html">Promo</a>

                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </div>
                <div class="item list-post">
                    <img src="{{ asset('upload/news-posts/vodafone.jpg')}}" alt="">
                    <div class="post-content">
                        <a href="food.html">Promo</a>

                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </div><div class="item list-post">
                    <img src="{{ asset('upload/news-posts/airtel.jpg')}}" alt="">
                    <div class="post-content">
                        <a href="food.html">Promo</a>

                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </div><div class="item list-post">
                    <img src="{{ asset('upload/news-posts/tigo.jpg')}}" alt="">
                    <div class="post-content">
                        <a href="food.html">Promo</a>

                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End list line posts section -->

<!-- heading-news-section
        ================================================== -->
<section class="heading-news3">

    <div class="heading-news-box">

        <div class="owl-wrapper">
            <div class="owl-carousel" data-num="4">

                <div class="item">
                    <div class="news-post image-post2">
                        <div class="post-gallery">
                            <img src="{{ asset('upload/news-posts/10.jpg')}}" alt="">

                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="news-post image-post2">
                        <div class="post-gallery">
                            <img src="{{ asset('upload/news-posts/11.jpg')}}" alt="">

                        </div>
                    </div>
                </div> <div class="item">
                    <div class="news-post image-post2">
                        <div class="post-gallery">
                            <img src="{{ asset('upload/news-posts/12.jpg')}}" alt="">

                        </div>
                    </div>
                </div> <div class="item">
                    <div class="news-post image-post2">
                        <div class="post-gallery">
                            <img src="{{ asset('upload/news-posts/15.jpg')}}" alt="">

                        </div>
                    </div>
                </div> 
                
                <div class="item">
                    <div class="news-post image-post2">
                        <div class="post-gallery">
                            <img src="{{ asset('upload/news-posts/12.jpg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- End heading-news-section -->


@endsection
