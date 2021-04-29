@extends('master')
@section('content')
<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
   @include('elements.header')
    <!-- Slider
    ============================================= -->
    @include('elements.slider')

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <section id="section-about" class="page-section">

                    <div class="container clearfix">

                        <div class="heading-block center">
                            <h2>We are <span>Magnetiism Tech</span></h2>
                            <span>One of the most Versatile Software Firm</span>
                        </div>

                        <div class="col_one_third nobottommargin">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{asset('assets/images/services/1.jpg')}}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-desc">
                                    <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col_one_third nobottommargin">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{asset('assets/images/services/2.jpg')}}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-desc">
                                    <h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
                                    <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col_one_third nobottommargin col_last">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{asset('assets/images/services/3.jpg')}}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-desc">
                                    <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                                    <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>
                    <div class="container clearfix">

                        <div class="clear bottommargin-lg"></div>

                        <div id="section-features" class="heading-block title-center page-section">
                            <h2>Features Overview</h2>
                            <span>Some of the Features that are gonna blow your mind off</span>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn">
                                    <a href="#"><img src="{{asset('assets/images/icons/features/responsive.png')}}" alt="Responsive Layout"></a>
                                </div>
                                <h3>Responsive Layout</h3>
                                <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn" data-delay="200">
                                    <a href="#"><img src="{{asset('assets/images/icons/features/retina.png')}}" alt="Retina Graphics"></a>
                    </div>
                    <h3>Retina Graphics</h3>
                    <p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
            </div>
        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn" data-delay="400">
                                    <a href="#"><img src="{{asset('assets/images/icons/features/performance.png')}}" alt="Powerful Performance"></a>
                                </div>
                                <h3>Powerful Performance</h3>
                                <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn" data-delay="600">
                                    <a href="#"><img src="{{asset('assets/images/icons/features/flag.png')}}" alt="Responsive Layout"></a>
                                </div>
                                <h3>Endless Possibilities</h3>
                                <p>You have complete easy control on each &amp; every element that provides endless customization possibilities.</p>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn" data-delay="800">
                                    <a href="#"><img src="{{asset('assets/images/icons/features/tick.png')}}" alt="Retina Graphics"></a>
                                </div>
                                <h3>Light &amp; Dark Scheme</h3>
                                <p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn" data-delay="1000">
                                    <a href="#"><img src="{{asset('assets/images/icons/features/tools.png')}}" alt="Powerful Performance"></a>
                                </div>
                                <h3>Customizable Fonts</h3>
                                <p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn" data-delay="1200">
                                    <a href="#"><img src="{{asset('assets/images/icons/features/map.png')}}" alt="Responsive Layout"></a>
                                </div>
                                <h3>Responsive Layout</h3>
                                <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn" data-delay="1400">
                                    <a href="#"><img src="{{asset('assets/images/icons/features/seo.png')}}" alt="Retina Graphics"></a>
                                </div>
                                <h3>Retina Graphics</h3>
                                <p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn" data-delay="1600">
                                    <a href="#"><img src="{{asset('assets/images/icons/features/support.png')}}" alt="Powerful Performance"></a>
                                </div>
                                <h3>Powerful Performance</h3>
                                <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="divider divider-short divider-center"><i class="icon-circle"></i></div>



                        <div class="clear"></div>

                    </div>


                </section>

                <section id="section-work" class="page-section topmargin-lg">

                    <div class="heading-block center">
                        <h2>Our Works</h2>
                        <span>Some of the Awesome Projects we've worked on.</span>
                    </div>

                    <div class="container clearfix center">

                        <!-- Portfolio Items
                        ============================================= -->
                        <div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

                            <article class="portfolio-item pf-media pf-icons">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{asset('assets/images/portfolio/4/1.jpg')}}" alt="Open Imagination">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{{asset('assets/images/portfolio/full/1.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-illustrations">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{asset('assets/images/portfolio/4/2.jpg')}}" alt="Locked Steel Gate">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{{asset('assets/images/portfolio/full/2.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                    <span><a href="#">Illustrations</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-graphics pf-uielements">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('assets/images/portfolio/4/3.jpg')}}" alt="Mac Sunglasses">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="https://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                    <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-icons pf-illustrations">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('assets/images/portfolio/4/3.jpg')}}" alt="Mac Sunglasses">
                                    </a>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="{{asset('assets/images/portfolio/full/4.jpg')}}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="{{asset('assets/images/portfolio/full/4-1.jpg')}}" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                                    <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-uielements pf-media">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{asset('assets/images/portfolio/4/5.jpg')}}" alt="Console Activity">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                    <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-graphics pf-illustrations">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('assets/images/portfolio/4/6.jpg')}}" alt="Mac Sunglasses">
                                    </a>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                                    <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-uielements pf-icons">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-video.html">
                                        <img src="{{asset('assets/images/portfolio/4/7.jpg')}}" alt="Backpack Contents">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                    <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-graphics">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{asset('assets/images/portfolio/4/8.jpg')}}" alt="Sunset Bulb Glow">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                    <span><a href="#">Graphics</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-illustrations pf-icons">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('assets/images/portfolio/4/9.jpg')}}" alt="Mac Sunglasses">
                                    </a>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="images/portfolio/full/9.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/portfolio/full/9-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/portfolio/full/9-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Bridge Side</a></h3>
                                    <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-graphics pf-media pf-uielements">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-video.html">
                                        <img src="{{asset('assets/images/portfolio/4/10.jpg')}}" alt="Study Table">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="https://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Study Table</a></h3>
                                    <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-media pf-icons">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{asset('assets/images/portfolio/4/11.jpg')}}" alt="Workspace Stuff">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="images/portfolio/full/11.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
                                    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-illustrations pf-graphics">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('assets/images/portfolio/4/12.jpg')}}" alt="Mac Sunglasses">
                                    </a>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="images/portfolio/full/12.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/portfolio/full/12-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.html">Fixed Aperture</a></h3>
                                    <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                                </div>
                            </article>

                        </div><!-- #portfolio end -->

                    </div>

                </section>



                <div class="line"></div>



                <div class="clear"></div>







                <div class="clear"></div>



                <div class="clear"></div>

            </div>

            <div class="clear"></div>

            <div class="section parallax dark nobottommargin nobottomborder" style="background-image: url('images/parallax/2.jpg');" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

                <div class="container clearfix">

                    <div class="heading-block center">
                        <h2>Canvas: We know you want it!</h2>
                        <span>Built with passion &amp; intuitiveness in mind. Canvas is a masterclass piece of work presented to you.</span>
                    </div>

                    <div style="position: relative; margin-bottom: -60px;" data-height-xl="415" data-height-lg="342" data-height-md="262" data-height-sm="160" data-height-xs="102">
                        <img src="{{asset('assets/images/services/chrome.png')}}" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" alt="Chrome">
                        <img src="{{asset('assets/images/services/ipad3.png')}}" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="300" alt="iPad">
                    </div>

                </div>

            </div>

            <div class="section notopborder topmargin-sm bottommargin-sm noborder nobg">

                <div class="container clearfix">

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-code"></i>
                        <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
                        <h5>Lines of Codes</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-magic"></i>
                        <div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
                        <h5>KBs of HTML Files</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-file-text"></i>
                        <div class="counter counter-lined"><span data-from="10" data-to="386" data-refresh-interval="25" data-speed="3500"></span>*</div>
                        <h5>No. of Templates</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-time"></i>
                        <div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
                        <h5>Hours of Coding</h5>
                    </div>

                </div>

            </div>

            <div class="section notopmargin noborder nobottommargin" >

                <div class="container clearfix">

                    <div class="heading-block center nobottommargin">
                        <h2>Our Awesome Works</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, earum!</span>
                    </div>

                </div>

            </div>

            <!-- Portfolio Items
            ============================================= -->
            <div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-notitle portfolio-full clearfix">

                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{asset('assets\images\Magnetism\Port\a.jpg')}}" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="{{asset('assets/images/portfolio/full/1.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Web Development</a></h3>
                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-illustrations">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{asset('assets\images\Magnetism\Port\ios.jpg')}}" alt="Locked Steel Gate">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="{{asset('assets/images/portfolio/full/2.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                        <span><a href="#">Illustrations</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-graphics pf-uielements">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{{asset('assets/images/portfolio/4/1.jpg')}}" alt="Mac Sunglasses">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="https://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                        <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-icons pf-illustrations">
                    <div class="portfolio-image">
                        <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('assets\images\Magnetism\Port\s1.jpg')}}" alt="Morning Dew"></a></div>
                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('assets\images\Magnetism\Port\s2.jpg')}}" alt="Morning Dew"></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-overlay" data-lightbox="gallery">
                            <a href="{{asset('assets/images/portfolio/full/3.jpg')}}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                            <a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                        <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-uielements pf-media">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{asset('assets\images\Magnetism\Port\web1.jpg')}}" alt="Console Activity">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="{{asset('assets/images/portfolio/full/5.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Console Activity</a></h3>
                        <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-graphics pf-illustrations">
                    <div class="portfolio-image">
                        <div class="fslider" data-arrows="false">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('assets\images\Magnetism\Port\ph.jpg')}}" alt="Shake It"></a></div>
                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('assets\images\Magnetism\Port\ph1.jpg')}}" alt="Shake It"></a></div>
                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('assets\images\Magnetism\Port\ph2.jpg')}}" alt="Shake It"></a></div>
                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('assets\images\Magnetism\Port\ph.jpg')}}" alt="Shake It"></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-overlay" data-lightbox="gallery">
                            <a href="{{asset('assets/images/portfolio/full/6.jpg')}}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                            <a href="{{asset('assets/images/portfolio/full/6-1.jpg')}}" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="{{asset('assets/images/portfolio/full/6-2.jpg')}}" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="{{asset('assets/images/portfolio/full/6-3.jpg')}}" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                        <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-uielements pf-icons">
                    <div class="portfolio-image">
                        <a href="portfolio-single-video.html">
                            <img src="{{asset('assets\images\Magnetism\Port\log.jpg')}}" alt="Backpack Contents">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                        <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-graphics">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{asset('assets/images/portfolio/4/8.jpg')}}" alt="Sunset Bulb Glow">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="{{asset('assets/images/portfolio/full/8.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                        <span><a href="#">Graphics</a></span>
                    </div>
                </article>

            </div>

            <!-- Portfolio Script
            ============================================= -->

            <div class="clear"></div>

            <a href="#" class="button button-full button-dark center tright bottommargin-lg">
                <div class="container clearfix">
                    We have more than 100+ predefined Portfolio Grid Layouts. <strong>See More</strong> <i class="icon-caret-right" style="top:4px;"></i>
                </div>
            </a>

            <div class="container clearfix">

                <div class="col_three_fifth topmargin-sm bottommargin">
                    <img data-animate="fadeInLeftBig" src="{{asset('assets/images/services/imac.png')}}" alt="Imac">
                </div>

                <div class="col_two_fifth topmargin-sm bottommargin-lg col_last">

                    <div class="heading-block topmargin">
                        <h2>Retina Device Ready.</h2>
                        <span>Fabulously Sharp &amp; Intuitive on your HD Devices.</span>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus deserunt, nobis quae eos provident quidem. Quaerat expedita dignissimos perferendis, nihil quo distinctio eius architecto reprehenderit maiores.</p>

                    <a href="#" class="button button-border button-rounded button-large noleftmargin topmargin-sm">Experience More</a>

                </div>

                <div class="line"></div>

            </div>

            <div class="container divcenter clearfix">

                <div class="heading-block center">
                    <h2>Canvas: We know you want it!</h2>
                    <span>Built with passion &amp; intuitiveness in mind. Canvas is a masterclass piece of work presented to you.</span>
                </div>

                <div style="position: relative;" data-height-xl="624" data-height-lg="518" data-height-md="397" data-height-sm="242" data-height-xs="154">
                    <img src="{{asset('assets/images/services/fbrowser.png')}}" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                    <img src="{{asset('assets/images/services/fmobile.png')}}" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">
                    <img src="{{asset('assets/images/services/fbrowser2.png')}}" style="position: absolute; top: 0; left: 0;" data-animate="fadeIn" data-delay="1200" alt="iPad">
                </div>
            </div>

            <div class="section dark notopmargin nobottommargin noborder" style="height: 500px; padding: 145px 0;">

                <div class="container clearfix">

                    <div class="slider-caption slider-caption-center" style="position: relative;">
                        <div data-animate="fadeInUp">
                            <h2 style="font-size: 42px;">Beautiful HTML5 Videos</h2>
                            <p class="d-none d-sm-block">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                            <a href="#" class="button button-border button-rounded button-white button-light button-large noleftmargin nobottommargin d-none d-md-inline-block" style="margin-top: 20px;">Show More</a>
                        </div>
                    </div>

                </div>

                <div class="video-wrap">
                    <video poster="{{asset('assets/images/videos/explore.jpg')}}" preload="none" loop autoplay muted>
                        <source src='images/videos/explore.mp4' type='video/mp4' />
                        <source src='images/videos/explore.webm' type='video/webm' />
                    </video>
                    <div class="video-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
                </div>

            </div>

            <div class="row bottommargin-lg align-items-stretch">

                <div class="col-lg-4 dark col-padding ohidden" style="background-color: #1abc9c;">
                    <div>
                        <h3 class="uppercase" style="font-weight: 600;">Why choose Us</h3>
                        <p style="line-height: 1.8;">Transform, agency working families thinkers who make change happen communities. Developing nations legal aid public sector our ambitions future aid The Elders economic security Rosa.</p>
                        <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
                        <i class="icon-bulb bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding ohidden" style="background-color: #34495e;">
                    <div>
                        <h3 class="uppercase" style="font-weight: 600;">Our Mission</h3>
                        <p style="line-height: 1.8;">Frontline respond, visionary collaborative cities advancement overcome injustice, UNHCR public-private partnerships cause. Giving, country educate rights-based approach; leverage disrupt solution.</p>
                        <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
                        <i class="icon-cog bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding ohidden" style="background-color: #e74c3c;">
                    <div>
                        <h3 class="uppercase" style="font-weight: 600;">What you get</h3>
                        <p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>
                        <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
                        <i class="icon-thumbs-up bgicon"></i>
                    </div>
                </div>

                <div class="clear"></div>

            </div>

            <div class="container clearfix">

                <div class="col_two_third nobottommargin">

                    <div class="fancy-title title-border">
                        <h4>Recent Posts</h4>
                    </div>

                    <div class="col_half nobottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('assets/images/magazine/thumb/11.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">Toyotas next minivan will let you shout at your kids without turning around</a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 10th Feb 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Medecins du Monde eradicate sustainability free expression contribution assessment expert humanitarian relief.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col_half col_last nobottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{asset('assets/images/magazine/thumb/14.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">UK government weighs Tesla's Model S for its ??5 million electric vehicle fleet</a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 10th Feb 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Urban public institutions life-saving women and children Rockefeller combat malaria honesty. Sustainability foster immunize treatment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                </div>

                <div class="col_one_third nobottommargin col_last">

                    <div class="fancy-title title-border">
                        <h4>Client Testimonials</h4>
                    </div>

                    <div class="fslider testimonial nopadding noborder noshadow" data-animation="slide" data-arrows="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{asset('assets/images/testimonials/3.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta">
                                            Steve Jobs
                                            <span>Apple Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta">
                                            Collis Ta'eed
                                            <span>Envato Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                        <div class="testi-meta">
                                            John Doe
                                            <span>XYZ Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="well topmargin ohidden">

                        <h4>Opening Hours</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit reprehenderit voluptates.</p>

                        <ul class="iconlist nobottommargin">
                            <li><i class="icon-time color"></i> <strong>Mondays-Fridays:</strong> 10AM to 7PM</li>
                            <li><i class="icon-time color"></i> <strong>Saturdays:</strong> 11AM to 3PM</li>
                            <li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> Closed</li>
                        </ul>

                        <i class="icon-time bgicon"></i>

                    </div>

                </div>

                <div class="clear"></div>

            </div>

            <div class="section nobottommargin">
                <div class="container clearfix">

                    <div class="heading-block center">
                        <h3>Subscribe to our <span>Newsletter</span></h3>
                    </div>

                    <div class="subscribe-widget">
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form2" action="include/subscribe.php" method="post" class="nobottommargin">
                            <div class="input-group input-group-lg divcenter" style="max-width:600px;">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-email2"></i></div>
                                </div>
                                <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">Subscribe Now</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>




        </div>
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="col_two_third nobottommargin">

                    <h4>Our Clients</h4>

                    <ul class="clients-grid grid-5 nobottommargin clearfix">
                        <li><a href="" data-animate="fadeIn"><img src="{{asset('assets/images/clients/21.png')}}" alt="Clients"></a></li>
                        <li><a href="" data-delay="100"><img src="{{asset('assets/images/clients/22.png')}}" alt="Clients"></a></li>
                        <li><a href="" data-animate="fadeIn" data-delay="200"><img src="{{asset('assets/images/clients/22.png')}}" alt="Clients"></a></li>
                        <li><a href="" data-animate="fadeIn" data-delay="300"><img src="{{asset('assets/images/clients/23.png')}}" alt="Clients"></a></li>
                        <li><a href="" data-animate="fadeIn" data-delay="400"><img src="{{asset('assets/images/clients/24.png')}}" alt="Clients"></a></li>
                        <li><a href="" data-animate="fadeIn" data-delay="500"><img src="{{asset('assets/images/clients/21.png')}}" alt="Clients"></a></li>
                        <li><a href="" data-animate="fadeIn" data-delay="600"><img src="{{asset('assets/images/clients/22.png')}}" alt="Clients"></a></li>
                        <li><a href="" data-animate="fadeIn" data-delay="700"><img src="{{asset('assets/images/clients/23.png')}}" alt="Clients"></a></li>
                        <li><a href="" data-animate="fadeIn" data-delay="800"><img src="{{asset('assets/images/clients/24.png')}}" alt="Clients"></a></li>
                        <li><a href="" data-animate="fadeIn" data-delay="900"><img src="{{asset('assets/images/clients/22.png')}}" alt="Clients"></a></li>
                    </ul>

                </div>

                <div class="col_one_third nobottommargin col_last">

                    <h4>What our Clients Say?</h4>

                    <div class="fslider testimonial" data-animation="slide" data-arrows="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{asset('assets/images/testimonials/3.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta">
                                            Steve Jobs
                                            <span>Apple Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{asset('assets/images/testimonials/3.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta">
                                            Collis Ta'eed
                                            <span>Envato Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{asset('assets/images/testimonials/1.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                        <div class="testi-meta">
                                            John Doe
                                            <span>XYZ Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

                            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget widget_links clearfix">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href="https://codex.wordpress.org/">Documentation</a></li>
                                <li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                <li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
                                <li><a href="https://wordpress.org/support/">Support Forums</a></li>
                                <li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
                                <li><a href="https://wordpress.org/news/">WordPress Blog</a></li>
                                <li><a href="https://planet.wordpress.org/">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix">
                            <h4>Recent Posts</h4>

                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-lg-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>

                            <div class="col-lg-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>

                        </div>

                    </div>

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-email2"></i></div>
                                </div>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-lg-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class="col-lg-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
@endsection

