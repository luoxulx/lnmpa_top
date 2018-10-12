@extends('frontend.app')
@section('content')
<div class="content-wrapper oh" style="min-height: 800px;">

    <!-- Hero Slider -->
    {{--<section class="section-wrap nopadding">--}}
        {{--<div class="container">--}}
            {{--<div class="entry-slider">--}}
                {{--<div class="flexslider" id="flexslider-hero">--}}
                    {{--<ul class="slides clearfix">--}}
                        {{--<li>--}}
                            {{--<img src="img/hero_slide_1.jpg" alt="">--}}
                            {{--<div class="hero-holder">--}}
                                {{--<a href="#" class="entry-category">Lifestyle</a>--}}
                                {{--<h2 class="hero-heading white uppercase"><a href="blog-single">palm springs getaway</a></h2>--}}
                                {{--<a href="#" class="btn btn-md btn-white">Read More</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<img src="img/hero_slide_2.jpg" alt="">--}}
                            {{--<div class="hero-holder">--}}
                                {{--<a href="#" class="entry-category">Travel</a>--}}
                                {{--<h2 class="hero-heading white uppercase"><a href="blog-single">10 carry-on packing tips</a></h2>--}}
                                {{--<a href="#" class="btn btn-md btn-white">Read More</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<img src="img/hero_slide_3.jpg" alt="">--}}
                            {{--<div class="hero-holder">--}}
                                {{--<a href="#" class="entry-category">Fashion</a>--}}
                                {{--<h2 class="hero-heading white uppercase"><a href="blog-single">denim on denim during spring</a></h2>--}}
                                {{--<a href="#" class="btn btn-md btn-white">Read More</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div> <!-- end slider -->--}}
        {{--</div>--}}
    {{--</section> <!-- end hero slider -->--}}

    <!-- Content -->
    {{--<section class="content blog-standard pt-mdm-50">--}}
        {{--<div class="container relative">--}}
            {{--<div class="row">--}}

                {{--<!-- post content -->--}}
                {{--<div class="col-md-9 post-content mb-50">--}}

                    {{--<!-- list posts -->--}}
                    {{--<div class="row items-list">--}}

                        {{--<article class="entry-item clearfix">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="entry-img">--}}
                                    {{--<a href="blog-single.html">--}}
                                        {{--<img src="img/post_1.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-7">--}}
                                {{--<div class="entry-header">--}}
                                    {{--<a href="#" class="entry-category">Lifestyle</a>--}}
                                    {{--<h2 class="entry-title">--}}
                                        {{--<a href="blog-single.html">missing the Bahamas</a>--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                                {{--<div class="entry-wrap">--}}
                                    {{--<div class="entry">--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulput ate cursus a sit amet mauris. Morbi accumsan ipsum velit. Namec elit tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae...--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry-meta-wrap clearfix">--}}
                                            {{--<ul class="entry-meta">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">August 30, 2016</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-comments">--}}
                                                    {{--<a href="blog-single.html">2 Comments</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}

                        {{--<article class="entry-item clearfix">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="entry-img">--}}
                                    {{--<a href="blog-single.html">--}}
                                        {{--<img src="img/post_2.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-7">--}}
                                {{--<div class="entry-header">--}}
                                    {{--<a href="#" class="entry-category">Travel</a>--}}
                                    {{--<h2 class="entry-title">--}}
                                        {{--<a href="blog-single.html">revolve in mexico</a>--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                                {{--<div class="entry-wrap">--}}
                                    {{--<div class="entry">--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulput ate cursus a sit amet mauris. Morbi accumsan ipsum velit. Namec elit tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae...--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry-meta-wrap clearfix">--}}
                                            {{--<ul class="entry-meta">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">August 30, 2016</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-comments">--}}
                                                    {{--<a href="blog-single.html">2 Comments</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}

                        {{--<article class="entry-item clearfix">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="entry-img">--}}
                                    {{--<a href="blog-single.html">--}}
                                        {{--<img src="img/post_3.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-7">--}}
                                {{--<div class="entry-header">--}}
                                    {{--<a href="#" class="entry-category">Travel</a>--}}
                                    {{--<h2 class="entry-title">--}}
                                        {{--<a href="blog-single.html">exploring Redwood</a>--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                                {{--<div class="entry-wrap">--}}
                                    {{--<div class="entry">--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulput ate cursus a sit amet mauris. Morbi accumsan ipsum velit. Namec elit tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae...--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry-meta-wrap clearfix">--}}
                                            {{--<ul class="entry-meta">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">August 30, 2016</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-comments">--}}
                                                    {{--<a href="blog-single.html">2 Comments</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}

                        {{--<article class="entry-item clearfix">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="entry-img">--}}
                                    {{--<a href="blog-single.html">--}}
                                        {{--<img src="img/post_4.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-7">--}}
                                {{--<div class="entry-header">--}}
                                    {{--<a href="#" class="entry-category">Lifestyle</a>--}}
                                    {{--<h2 class="entry-title">--}}
                                        {{--<a href="blog-single.html">Spring Inspiration</a>--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                                {{--<div class="entry-wrap">--}}
                                    {{--<div class="entry">--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulput ate cursus a sit amet mauris. Morbi accumsan ipsum velit. Namec elit tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae...--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry-meta-wrap clearfix">--}}
                                            {{--<ul class="entry-meta">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">August 30, 2016</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-comments">--}}
                                                    {{--<a href="blog-single.html">2 Comments</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}

                        {{--<article class="entry-item clearfix">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="entry-img">--}}
                                    {{--<a href="blog-single.html">--}}
                                        {{--<img src="img/post_6.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-7">--}}
                                {{--<div class="entry-header">--}}
                                    {{--<a href="#" class="entry-category">travel</a>--}}
                                    {{--<h2 class="entry-title">--}}
                                        {{--<a href="blog-single.html">Trip in Brazil</a>--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                                {{--<div class="entry-wrap">--}}
                                    {{--<div class="entry">--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulput ate cursus a sit amet mauris. Morbi accumsan ipsum velit. Namec elit tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae...--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry-meta-wrap clearfix">--}}
                                            {{--<ul class="entry-meta">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">August 30, 2016</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-comments">--}}
                                                    {{--<a href="blog-single.html">2 Comments</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}

                        {{--<article class="entry-item clearfix">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="entry-img">--}}
                                    {{--<a href="blog-single.html">--}}
                                        {{--<img src="img/post_7.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-7">--}}
                                {{--<div class="entry-header">--}}
                                    {{--<a href="#" class="entry-category">travel</a>--}}
                                    {{--<h2 class="entry-title">--}}
                                        {{--<a href="blog-single.html">Happy Lifetime</a>--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                                {{--<div class="entry-wrap">--}}
                                    {{--<div class="entry">--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulput ate cursus a sit amet mauris. Morbi accumsan ipsum velit. Namec elit tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae...--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry-meta-wrap clearfix">--}}
                                            {{--<ul class="entry-meta">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">August 30, 2016</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-comments">--}}
                                                    {{--<a href="blog-single.html">2 Comments</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}

                        {{--<article class="entry-item clearfix">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="entry-img">--}}
                                    {{--<a href="blog-single.html">--}}
                                        {{--<img src="img/post_8.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-7">--}}
                                {{--<div class="entry-header">--}}
                                    {{--<a href="#" class="entry-category">Fashion</a>--}}
                                    {{--<h2 class="entry-title">--}}
                                        {{--<a href="blog-single.html">Palm springs getaway</a>--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                                {{--<div class="entry-wrap">--}}
                                    {{--<div class="entry">--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulput ate cursus a sit amet mauris. Morbi accumsan ipsum velit. Namec elit tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae...--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry-meta-wrap clearfix">--}}
                                            {{--<ul class="entry-meta">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">August 30, 2016</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-comments">--}}
                                                    {{--<a href="blog-single.html">2 Comments</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}

                        {{--<article class="entry-item clearfix">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="entry-img">--}}
                                    {{--<a href="blog-single.html">--}}
                                        {{--<img src="img/post_9.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-7">--}}
                                {{--<div class="entry-header">--}}
                                    {{--<a href="#" class="entry-category">Travel</a>--}}
                                    {{--<h2 class="entry-title">--}}
                                        {{--<a href="blog-single.html">10 carry-on packing tips</a>--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                                {{--<div class="entry-wrap">--}}
                                    {{--<div class="entry">--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulput ate cursus a sit amet mauris. Morbi accumsan ipsum velit. Namec elit tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae...--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry-meta-wrap clearfix">--}}
                                            {{--<ul class="entry-meta">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">August 30, 2016</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-comments">--}}
                                                    {{--<a href="blog-single.html">2 Comments</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}

                        {{--<article class="entry-item clearfix">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="entry-img">--}}
                                    {{--<a href="blog-single.html">--}}
                                        {{--<img src="img/post_10.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-7">--}}
                                {{--<div class="entry-header">--}}
                                    {{--<a href="#" class="entry-category">Fashion</a>--}}
                                    {{--<h2 class="entry-title">--}}
                                        {{--<a href="blog-single.html">Denim on denim during spring</a>--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                                {{--<div class="entry-wrap">--}}
                                    {{--<div class="entry">--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulput ate cursus a sit amet mauris. Morbi accumsan ipsum velit. Namec elit tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae...--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry-meta-wrap clearfix">--}}
                                            {{--<ul class="entry-meta">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">August 30, 2016</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="entry-comments">--}}
                                                    {{--<a href="blog-single.html">2 Comments</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}

                    {{--</div> <!-- end list posts -->--}}


                    {{--<div class="row mt-20">--}}
                        {{--<div class="col-md-12 text-center">--}}
                            {{--<a href="#" class="btn btn-md btn-stroke" id="load-more">Load More</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--</div> <!-- end col -->--}}

                {{--<!-- Sidebar -->--}}
                {{--<aside class="col-md-3 sidebar">--}}

                    {{--<div class="widget about-blog text-center">--}}
                        {{--<div class="heading-lines">--}}
                            {{--<h3 class="widget-title heading">About Me</h3>--}}
                        {{--</div>--}}
                        {{--<img src="img/about_me.jpg" alt="">--}}
                        {{--<p class="mb-20 mt-30">A personal diary of wanderlust and an overflowing wardrobe. Live with passion.</p>--}}
                        {{--<img src="img/signature.png" alt="">--}}
                    {{--</div>--}}

                    {{--<!-- Newsletter -->--}}
                    {{--<div class="widget newsletter">--}}
                        {{--<div class="heading-lines">--}}
                            {{--<h3 class="widget-title heading">Newsletter</h3>--}}
                        {{--</div>--}}
                        {{--<form class="relative newsletter-form">--}}
                            {{--<input type="email" placeholder="Your email address">--}}
                        {{--</form>--}}
                        {{--<input type="submit" value="Subscribe" id="submit-button" class="btn btn-lg btn-color">--}}
                    {{--</div>--}}

                    {{--<!-- Instagram Feed Grid -->--}}
                    {{--<div class="widget instagram">--}}
                        {{--<div class="heading-lines">--}}
                            {{--<h3 class="widget-title heading">Instagram</h3>--}}
                        {{--</div>--}}
                        {{--<ul id="instafeed-grid"></ul>--}}
                    {{--</div>--}}

                    {{--<!-- Categories -->--}}
                    {{--<div class="widget categories">--}}
                        {{--<div class="heading-lines">--}}
                            {{--<h3 class="widget-title heading">Categories</h3>--}}
                        {{--</div>--}}
                        {{--<ul class="list-dividers">--}}
                            {{--<li>--}}
                                {{--<a href="#">Lifestyle</a><span>(8)</span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Travel</a><span>(14)</span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Beauty</a><span>(5)</span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Music</a><span>(3)</span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Food</a><span>(7)</span>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                    {{--<!-- Ad banner -->--}}
                    {{--<div class="widget custom-ad-banner">--}}
                        {{--<a href="#">--}}
                            {{--<img src="img/banner.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<!-- Recent Posts -->--}}
                    {{--<div class="widget recent-posts">--}}
                        {{--<div class="heading-lines">--}}
                            {{--<h3 class="widget-title heading">Recent Posts</h3>--}}
                        {{--</div>--}}
                        {{--<div class="entry-list w-thumbs">--}}
                            {{--<ul class="posts-list list-dividers">--}}
                                {{--<li class="entry-li">--}}
                                    {{--<article class="post-small clearfix">--}}
                                        {{--<div class="entry-img">--}}
                                            {{--<a href="blog-single.html">--}}
                                                {{--<img src="img/recent_1.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry">--}}
                                            {{--<h3 class="entry-title"><a href="magazine-single-article.html">Best Beaches in Sydney</a></h3>--}}
                                            {{--<ul class="entry-meta list-inline">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">19 Mar, 2016</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</article>--}}
                                {{--</li>--}}
                                {{--<li class="entry-li">--}}
                                    {{--<article class="post-small clearfix">--}}
                                        {{--<div class="entry-img">--}}
                                            {{--<a href="blog-single.html">--}}
                                                {{--<img src="img/recent_2.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry">--}}
                                            {{--<h3 class="entry-title"><a href="magazine-single-article.html">First Summer Ice Cream</a></h3>--}}
                                            {{--<ul class="entry-meta list-inline">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">16 Mar, 2016</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</article>--}}
                                {{--</li>--}}
                                {{--<li class="entry-li">--}}
                                    {{--<article class="post-small clearfix">--}}
                                        {{--<div class="entry-img">--}}
                                            {{--<a href="blog-single.html">--}}
                                                {{--<img src="img/recent_3.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry">--}}
                                            {{--<h3 class="entry-title"><a href="magazine-single-article.html">Best Hat for Travel</a></h3>--}}
                                            {{--<ul class="entry-meta list-inline">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">16 Mar, 2016</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</article>--}}
                                {{--</li>--}}
                                {{--<li class="entry-li">--}}
                                    {{--<article class="post-small clearfix">--}}
                                        {{--<div class="entry-img">--}}
                                            {{--<a href="blog-single.html">--}}
                                                {{--<img src="img/recent_4.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="entry">--}}
                                            {{--<h3 class="entry-title"><a href="magazine-single-article.html">New Look is Arrived</a></h3>--}}
                                            {{--<ul class="entry-meta list-inline">--}}
                                                {{--<li class="entry-date">--}}
                                                    {{--<a href="#">16 Mar, 2016</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</article>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Latest Tweets -->--}}
                    {{--<div class="widget categories">--}}
                        {{--<div class="heading-lines">--}}
                            {{--<h3 class="widget-title heading">Latest Tweets</h3>--}}
                        {{--</div>--}}
                        {{--<div class="twitter-slider text-center">--}}
                            {{--<i class="fa fa-twitter twitter-icon"></i>--}}
                            {{--<a href="https://twitter.com/deothemes">@deothemes</a>--}}
                            {{--<div id="tweets"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</aside> <!-- end sidebar -->--}}

            {{--</div> <!-- end row -->--}}
        {{--</div> <!-- end container -->--}}
    {{--</section> <!-- end content -->--}}


    <!-- Instagram Feed -->
    {{--<div class="instagram-feed text-center">--}}
        {{--<h3 class="heading uppercase">Instagram</h3>--}}
        {{--<h5 class="heading uppercase mb-30">follow @soho</h5>--}}
        {{--<ul id="instafeed-row"></ul>--}}
    {{--</div>--}}

    <!--
    <div class="widget-social">
        <div class="social-icons text-center">
            <a href="#">
                <i class="fa fa-instagram"></i>
                <span>instagram</span>
            </a>
            <a href="#">
                <i class="fa fa-facebook"></i>
                <span>facebook</span>
            </a>
            <a href="#">
                <i class="fa fa-twitter"></i>
                <span>twitter</span>
            </a>
            <a href="#">
                <i class="fa fa-pinterest-p"></i>
                <span>pinterest</span>
            </a>
            <a href="#">
                <i class="fa fa-rss"></i>
                <span>rss</span>
            </a>
        </div>
    </div>
    -->

    <!-- Footer Type-1 -->
    <footer class="footer footer-type-1 bg-dark">
        <div class="bottom-footer">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 copyright text-center">
                <span>
                  © {{ date('Y') }} DeoTrendy • Made by <a href="http://deothemes.com">DeoThemes</a>
                </span>
                    </div>

                </div>
            </div>
        </div>
    </footer> <!-- end footer -->


    <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

</div> <!-- end content wrapper -->
@endsection
