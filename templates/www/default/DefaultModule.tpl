<!--# content #-->
<div class="content">
    {*if count($banners) > 0}
    <!--# slider #-->
    <div class="swiper-container" id="home-slider">
        <div class="swiper-wrapper">
            {foreach $banners as $slider }
            <div class="swiper-slide">
                <a href="{$slider->getUrl()}" {if $slider->getNewTab()}target="_blank"{/if}>
                    <img src="{$slider->getPictureUrl()}">
                </a>
            </div>
            {/foreach}
        </div>
        <!--# slider pagination #-->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>
    <!--# slider #-->
    {/if*}

    <!--# home-content #-->
    <div class="home-content">
        <div class="container">
            <div class="entry-content">
                {$aConfig.content_home}
            </div>
        </div>
    </div>
    <!--# home-content #-->


    {*if count($testimonials) > 0}
    <!--# testimonial #-->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <h3>what our clients say</h3>

                    <div class="swiper-container" id="testimonial-slider">
                        <div class="swiper-wrapper">
                            {foreach $testimonials as $testimonial}
                            <div class="swiper-slide">

                                <div class="testimonial-item">
                                    <div class="testimonial-image">
                                        <img src="{#IMAGE_PATH#}avatar.png" class="img-fluid">
                                    </div>
                                    <div class="testimonial-text">
                                        <blockquote>{$testimonial->getDescription()|truncate:120}</blockquote>
                                        <span class="author">- {$testimonial->getName()}</span>
                                    </div>
                                </div>

                            </div>
                            {/foreach}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--# testimonial #-->
    {/if*}

</div>
<!--# content #-->

<!--Main Slider-->
<section class="no-padding no-transition slider" id="home">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="banner-main" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                {foreach $banners as $key=> $banner}
                <li data-index="rs-0{$key+1}">

                    <!-- MAIN IMAGE -->
                    <img src="{$banner->getPictureUrl()}" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>

                </li>

                {/foreach}

            </ul>
            <div class="tp-static-layers" style="width:100%; height:100%; overflow:hidden">

                <!-- BEGIN STATIC LAYER -->
                <div class="tp-static-layer tp-caption tp-resizeme" data-startslide="0" data-endslide="99" {literal}
                    data-frames='[{"delay": 500, "speed": 300, "from": "opacity: 0", "to": "opacity: 1"}, 
                                    {"delay": "wait", "speed": 300, "to": "opacity: 0"}]' {/literal} data-x="center"
                    data-y="center" data-hoffset="0" data-voffset="0" data-width="['auto']" data-height="['auto']">
                    <form method="post" class="contact">
                        <div class="contact-step-1">
                            <div class="form-inline">
                                <div class="form-group">
                                    <input type="text" name="website" placeholder="&#xf57d; Enter Your Website"
                                        class="form-control fontAwesome">
                                </div>
                                <a class="btn btn-blue" onclick="goNextStep()">Get Your Free Quote</a>
                            </div>
                        </div>
                        <div class="contact-step-2">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" class="form-control">
                                <input type="text" name="email" placeholder="Email" class="form-control">
                                <input type="text" name="phone" placeholder="Phone" class="form-control">
                            </div>
                            <button name="submit" class="btn btn-green-blue">Quote</button>
                        </div>
                    </form>

                </div>
                <!-- END STATIC LAYER -->

            </div>
            <!-- END STATIC LAYERS -->
        </div>
    </div>
</section>
<!--Main Slider ends -->

<!-- four boxes-->
<section class="no-padding" id="services">
    <div class="swiper-container container" id="services">
        <div class="swiper-wrapper">
            {foreach $services as $service}
            <div class="swiper-slide textarea">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="icon-holder"><i class="{$service->getShortDescription()}"></i></div>
                        <h4>{$service->getName()}</h4>
                        {$service->getDescription()}
                    </div>
                </div>
            </div>
            {/foreach}
        </div>
        <div class="swiper-pagination"></div>
    </div>
    {*
    <div class="row">
        <div class="col-md-6 col-sm-6 small-push-6 no-padding">
            <div class="four-boxes center-block text-blackish text-center padding-140px-tb wow fadeIn">

                <h3 class="text-capitalize font-weight-100 alt-font no-margin-bottom">WEBSITE & MOBILE DEVELOPMENT</h3>

                <p
                    class="text-center margin-20px-lr text-medium width-70 text-medium-gray main-font margin-30px-top xs-margin-20px-top">
                    Creative Design, UI & UX, Content Management System, Ecommerce, Web & Mobile Application, Hosting &
                    Email, Web Maintenance</p>
                <a href="#portfolio"
                    class="scroll btn btn-blackish font-weight-600 alt-font btn-rounded btn-large margin-20px-top">Browse
                    Work</a>

            </div>
        </div>

        <div class="col-md-6 col-sm-6  small-push-6 no-padding">
            <div class="four-boxes center-block text-white text-center bg-sky-blue padding-140px-tb wow fadeIn">

                <h3 class="text-capitalize font-weight-100 alt-font no-margin-bottom">SEARCH ENGINE OPTIMIZATION (SEO)
                </h3>

                <p
                    class="text-center margin-20px-lr text-medium main-font margin-30px-top xs-margin-20px-top width-70 ">
                    Hasil pencarian paling atas pada mesin pencari tanpa membayar apapun pada Google (BERGARANSI). Baik
                    pencarian secara local, nasional, and global.</p>
                <a href="#portfolio" class="scroll btn btn-white btn-rounded alt-font btn-large margin-20px-top">Print
                    Media</a>

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6 small-push-6 no-padding">
            <div class="four-boxes center-block text-white bg-green padding-140px-tb text-center wow fadeIn">

                <h3 class="text-capitalize font-weight-100 alt-font no-margin-bottom">DIGITAL ACTIVATION</h3>

                <p
                    class="text-center margin-20px-lr main-font text-medium margin-30px-top xs-margin-20px-top width-70 ">
                    Social Media Management, Social Media Campaign, Content Writing, Email Marketing</p>
                <a href="#contactus" class="scroll btn btn-white btn-rounded btn-large alt-font margin-20px-top">Hire Us
                    Now</a>

            </div>
        </div>

        <div class="col-md-6 col-sm-6 small-push-6 no-padding">
            <div class="four-boxes center-block text-blackish padding-140px-tb text-center wow fadeIn">

                <h3 class="text-capitalize font-weight-100 alt-font no-margin-bottom">GRAPHIC DESIGN</h3>

                <p
                    class="text-center margin-20px-lr main-font text-medium text-medium-gray width-70 xs-margin-20px-top margin-30px-top ">
                    Design untuk memaksimalkan brand identitas anda</p>
                <a href="#team" class="scroll btn btn-blackish btn-rounded btn-large alt-font margin-20px-top">Meet
                    Team</a>

            </div>
        </div>

    </div>
    *}
</section>
<!--  end of box section -->
{*
<!-- start counters-->
<section id="counters" class="demo-banner">

    <div class="container">

        <div class="text-left counters-heading margin-80px-bottom xs-margin-50px-bottom">
            <h2 class="text-blackish alt-font font-weight-100 no-margin">Statistical Numbers</h2>
            <p class="text-extra-dark-gray text-medium xs-margin-20px-top no-margin">Curabitur mollis bibendum luctus
                duis suscipit vitae dui se bibendum.</p>
        </div>


        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-center text-white serial-box  pointer center-block wow fadeInDown">
                            <i class="fa fa-smile-o text-xx-large" aria-hidden="true"></i>
                            <p class="font-weight-300 text-xx-large no-margin count">54</p>
                            <p class="no-margin">Happy clients</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center serial-box-1 text-white pointer center-block wow fadeInDown">
                            <i class="fa fa-bar-chart text-xx-large" aria-hidden="true"></i>
                            <p class="font-weight-300 text-xx-large no-margin count">125</p>
                            <p class="no-margin">Lines of Code</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center serial-box-2 text-white pointer center-block wow fadeInDown">
                            <i class="fa fa-trophy text-xx-large" aria-hidden="true"></i>
                            <p class="font-weight-300 text-xx-large no-margin count">956</p>
                            <p class="no-margin">Awards Received</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5"></div>
        </div>
    </div>

</section>
<!-- Ends counters -->
*}
<!-- team section -->
<section class="bg-extreme-light-gray" id="team">

    <div class="container">

        <div class="row text-center team-text">

            <h2 class="text-blackish alt-font font-weight-300">Creative Team</h2>
            <p
                class="xs-margin-20px-lr xs-no-margin-bottom margin-80px-bottom text-medium text-center text-medium-gray">
                Sebagai team profesional muda, kami bekerja dengan mengoptimalkan konsep dan content terbaik yang
                dibalut rapi dengan teknologi yang canggih. </p>

        </div>


        <div class="row xs-margin-50px-top">
            {foreach $teams as $team}
            <div class="col-md-4 col-sm-6">

                <div class="item pointer">


                    <div class="team-box wow fadeInLeftBig team-ani" data-wow-delay="300ms">

                        <div class="team-img">
                            <img src="{$team->getPictureUrl()}" alt="img" />
                        </div>
                        <div class="team-content bg-sky-blue whitecolor">
                            <h3 class="text-white alt-font">{$team->getName()}</h3>
                            <p class="margin-20px-bottom text-white alt-font">{$team->getShortDescription()}</p>

                            <div class="progress-bars">
                                <div class="team-icons">
                                    {assign var=socials value=$team->getExtra()|json_decode:1}
                                    {foreach $socials as $key=>$social}
                                    <a href="{$social}" target="_blank"><i class="fa fa-{$key}"
                                            aria-hidden="true"></i></a>
                                    {/foreach}
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            {/foreach}
            {*
            <div class="col-md-4 col-sm-6">

                <div class="item pointer">
                    <div class="team-box wow fadeInUp team-ani" data-wow-delay="300ms">
                        <div class="team-img">
                            <img src="{#IMAGE_PATH#}team-3.jpg" alt="img" />
                        </div>
                        <div class="team-content bg-blackish whitecolor">
                            <h3 class="text-white alt-font">Jhonny Walkin</h3>
                            <p class="margin-20px-bottom text-white alt-font">Designer, DigiOne company</p>

                            <div class="progress-bars">


                                <div class="team-icons">
                                    <i class="fa fa-facebook facbook-code" aria-hidden="true"></i>
                                    <i class="fa fa-twitter twitter-code" aria-hidden="true"></i>
                                    <i class="fa fa-vimeo viemo-code" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus google-plus-code" aria-hidden="true"></i>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-12">

                <div class="item pointer">
                    <div class="team-box wow fadeInUp team-ani" data-wow-delay="300ms">
                        <div class="team-img">
                            <img src="{#IMAGE_PATH#}team-1.jpg" alt="img" />
                        </div>
                        <div class="team-content bg-green whitecolor">
                            <h3 class="text-white alt-font">Teena Walkin</h3>
                            <p class="margin-20px-bottom text-white alt-font">Model, DigiOne Company</p>

                            <div class="progress-bars">


                                <div class="team-icons">
                                    <i class="fa fa-facebook facbook-code" aria-hidden="true"></i>
                                    <i class="fa fa-twitter twitter-code" aria-hidden="true"></i>
                                    <i class="fa fa-vimeo viemo-code" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus google-plus-code" aria-hidden="true"></i>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            *}
        </div>
    </div>


</section>
<!-- ends team-->

<!-- start features -->
<section id="features" class="position-relative">


    <div class="row text-center margin-80px-bottom features-small">
        <h2 class="alt-font text-blackish font-weight-200">Hardworkers Dreamer</h2>
    </div>

    <div class="position-relative">
        <div class="half-section-left md-display-none" aria-hidden="true">
            <img src="{#IMAGE_PATH#}feature-one.png" alt="image">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 float-right md-text-center md-float-none">

                    <div class="row feature-hover wow fadeInLeft">
                        <div class="col-lg-2">
                            <div class="feature-icon center-block margin-20px-top">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="feature-details margin-20px-top">
                                <h6 class="alt-font font-weight-400 text-blackish margin-10px-bottom">Creative Imaginer
                                </h6>
                            </div>
                        </div>

                    </div>

                    <div class="row feature-hover wow fadeInLeft">
                        <div class="col-lg-2">
                            <div class="feature-icon center-block margin-20px-top">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="feature-details margin-20px-top">
                                <h6 class="alt-font font-weight-400 text-blackish margin-10px-bottom ">Passionate dreamer
                                </h6>
                            </div>
                        </div>

                    </div>

                    <div class="row feature-hover wow fadeInLeft">
                        <div class="col-lg-2">
                            <div class="feature-icon center-block margin-20px-top">
                                <i class="fa fa-language" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="feature-details margin-20px-top">
                                <h6 class="alt-font font-weight-400 text-blackish margin-10px-bottom">Full services
                                    oriented</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end features -->

<!--Parallax-->
<section id="m-parallax" class="parallax-bg parallax padding">
    <div class="container text-center center-block">
        <div class="row wow fadeIn">
            <div class="col-sm-1 col-md-2"></div>
            <div class="col-sm-10 col-md-8">
                <h2 class="alt-font"><i class="fa fa-quote-left vertical-align-super"></i>If being creative make my
                    dream come true, so everybody has to be creative
                    <i class="fa fa-quote-right vertical-align-sub"></i></h2>
                <p class="text-capitalize alt-font no-margin">- ex-desperated person -</p>
            </div>
            <div class="col-sm-1 col-md-2"></div>
        </div>
    </div>
</section>
<!--Parallax Ends-->
{*
<!-- Portfolio Starts -->
<section id="portfolio">

    <div class="container">
        <div class="row">
            <div class="wow fadeIn text-center">
                <h2 class="text-blackish alt-font font-weight-100"> Creative Work</h2>
                <p class="main-font text-medium-gray margin-80px-bottom text-medium xs-margin-20px-lr">Curabitur mollis
                    bibendum luctus duis suscipit vitae dui se bibendum.</p>
            </div>
        </div>
        <div class="row">
            <div id="js-filters-mosaic-flat" class="text-center xs-no-margin-top cbp-l-filters-buttonCenter">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                    All
                    <div class="cbp-filter-counter"></div>

                </div>

                <span class="text-blue">/</span>


                <div data-filter=".print" class="cbp-filter-item">
                    Graphic Design
                    <div class="cbp-filter-counter"></div>
                </div>
                <span class="text-blue">/</span>
                <div data-filter=".web-design" class="cbp-filter-item">
                    Web design
                    <div class="cbp-filter-counter"></div>
                </div>
                <span class="text-blue">/</span>
                <div data-filter=".graphic" class="cbp-filter-item">
                    SEO
                    <div class="cbp-filter-counter"></div>
                </div>
                <span class="text-blue">/</span>
                <div data-filter=".motion" class="cbp-filter-item">
                    Marketing
                    <div class="cbp-filter-counter"></div>
                </div>
            </div>
            <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">
                <div class="cbp-item web-design graphic ">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{#IMAGE_PATH#}portfolio-1.jpg" alt="project">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="{#IMAGE_PATH#}portfolio-1.jpg" class="cbp-lightbox">
                                        <div class="cbp-l-caption-title">Aqua Branding</div>
                                        <div class="line-bar">
                                            <hr>
                                        </div>
                                        <p class="brand-graphic alt-font">Brand Graphic</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item print motion">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{#IMAGE_PATH#}portfolio-2.jpg" alt="project">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">

                                    <a href="{#IMAGE_PATH#}portfolio-2.jpg" class="cbp-lightbox">
                                        <div class="cbp-l-caption-title">Aqua Branding</div>
                                        <div class="line-bar">
                                            <hr>
                                        </div>
                                        <p class="brand-graphic alt-font">Brand Graphic</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item print motion">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{#IMAGE_PATH#}portfolio-3.jpg" alt="project">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">

                                    <a href="{#IMAGE_PATH#}portfolio-3.jpg" class="cbp-lightbox">
                                        <div class="cbp-l-caption-title">Aqua Branding</div>
                                        <div class="line-bar">
                                            <hr>
                                        </div>
                                        <p class="brand-graphic alt-font">Brand Graphic</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item motion graphic ">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{#IMAGE_PATH#}portfolio-4.jpg" alt="project">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">

                                    <a href="{#IMAGE_PATH#}portfolio-4.jpg" class="cbp-lightbox">
                                        <div class="cbp-l-caption-title">Aqua Branding</div>
                                        <div class="line-bar">
                                            <hr>
                                        </div>
                                        <p class="brand-graphic alt-font">Brand Graphic</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item web-design print ">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{#IMAGE_PATH#}portfolio-5.jpg" alt="project">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">

                                    <a href="{#IMAGE_PATH#}portfolio-5.jpg" class="cbp-lightbox">
                                        <div class="cbp-l-caption-title">Aqua Branding</div>
                                        <div class="line-bar">
                                            <hr>
                                        </div>
                                        <p class="brand-graphic alt-font">Brand Graphic</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item print motion ">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{#IMAGE_PATH#}portfolio-6.jpg" alt="project">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">

                                    <a href="{#IMAGE_PATH#}portfolio-7.jpg" class="cbp-lightbox">
                                        <div class="cbp-l-caption-title">Aqua Branding</div>
                                        <div class="line-bar">
                                            <hr>
                                        </div>
                                        <p class="brand-graphic alt-font">Brand Graphic</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item web-design print ">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{#IMAGE_PATH#}portfolio-8.jpg" alt="project">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">

                                    <a href="{#IMAGE_PATH#}portfolio-8.jpg" class="cbp-lightbox">
                                        <div class="cbp-l-caption-title">Aqua Branding</div>
                                        <div class="line-bar">
                                            <hr>
                                        </div>
                                        <p class="brand-graphic alt-font">Brand Graphic</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item print graphic ">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">

                            <img src="{#IMAGE_PATH#}portfolio-7.jpg" alt="project">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">

                                    <a href="{#IMAGE_PATH#}portfolio-1.jpg" class="cbp-lightbox">
                                        <div class="cbp-l-caption-title">Aqua Branding</div>
                                        <div class="line-bar">
                                            <hr>
                                        </div>
                                        <p class="brand-graphic alt-font">Brand Graphic</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="js-loadMore-mosaic-flat" class="cbp-l-loadMore-bgbutton">
                <a href="ajax-mosaic-flat/loadMore.html" class="cbp-l-loadMore-link no-transition" rel="nofollow">
                    <span class="cbp-l-loadMore-defaultText no-transition ">Load More</span>
                    <span class="cbp-l-loadMore-loadingText ">Loading...</span>
                    <span class="cbp-l-loadMore-noMoreLoading">Finish</span>
                </a>
            </div>
        </div>
    </div>

</section>
<!-- Portfolio ends -->
<!-- pricing section -->
<section class="bg-extreme-light-gray" id="packages">
    <div class="container">
        <h2 class="text-center font-weight-100 text-blackish alt-font">Flexible Packages</h2>
        <div class="margin-80px-bottom xs-margin-50px-bottom margin-20px-lr">
            <p class="text-center main-font price-text">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed
                suscipit.
                Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. </p>
        </div>
        <div class="row">
            <div class="col-sm-4 ">
                <div class="bg-white pricing-item pointer startup text-center wow fadeIn">
                    <h6 class="alt-font font-weight-500 text-blackish padding-40px-top">Startup</h6>
                    <p
                        class="main-font font-weight-100 text-medium margin-10px-lr xs-margin-10px-lr text-medium-gray text-small">
                        Click edit button to change this text, consectetur adipiscing elit.</p>
                    <div class="price-tag clearfix">
                        <span class="price">
                            <span class="sign text-medium-gray">$</span>
                            <span class="currency text-blackish text-extra-large">19</span>
                            <span class="month text-medium-gray">/ MON</span>
                        </span>
                    </div>

                    <p class="main-font font-weight-100 text-small text-medium-gray margin-15px-bottom">Full Access</p>
                    <p class="main-font font-weight-100 text-small text-medium-gray margin-15px-bottom">Unlimited
                        Bandwidth</p>
                    <p class="main-font font-weight-100 text-small text-medium-gray margin-15px-bottom">Email Accounts
                    </p>
                    <p class="main-font font-weight-100 text-small text-medium-gray margin-15px-bottom">4 Free Forks
                        Every Months</p>
                    <a href="#."
                        class="btn btn-blackish alt-font font-weight-100 btn-rounded btn-medium margin-20px-top margin-40px-bottom">Buy
                        Now</a>
                </div>
            </div>



            <div class="col-sm-4">
                <div class="bg-white pricing-item standard pointer text-center wow fadeIn">
                    <h6 class="alt-font font-weight-500 text-blackish padding-40px-top">Standard</h6>
                    <p
                        class="main-font font-weight-100 text-medium xs-margin-10px-lr margin-10px-lr text-medium-gray text-small">
                        Click edit button to change this text, consectetur adipiscing elit.</p>
                    <div class="price-tag clearfix">
                        <span class="price">
                            <span class="sign text-medium-gray">$</span>
                            <span class="currency text-blue text-extra-large">56</span>
                            <span class="month text-medium-gray">/ MON</span>
                        </span>
                    </div>
                    <p class="main-font font-weight-100 text-medium-gray text-small margin-15px-bottom">Full Access</p>
                    <p class="main-font font-weight-100 text-medium-gray text-small margin-15px-bottom">Unlimited
                        Bandwidth</p>
                    <p class="main-font font-weight-100 text-medium-gray text-small margin-15px-bottom">Email Accounts
                    </p>
                    <p class="main-font font-weight-100 text-medium-gray text-small margin-15px-bottom">4 Free Forks
                        Every Months</p>
                    <a href="#."
                        class="btn btn-blue alt-font font-weight-100 btn-rounded btn-medium margin-20px-top margin-40px-bottom">Buy
                        Now</a>
                </div>
            </div>


            <div class="col-sm-4">
                <div class=" bg-white pricing-item premium pointer text-center fadeIn">
                    <h6 class="alt-font font-weight-500 text-blackish padding-40px-top">Premium</h6>
                    <p
                        class="main-font font-weight-100 text-medium xs-margin-10px-lr margin-10px-lr text-medium-gray text-small">
                        Click edit button to change this text, consectetur adipiscing elit.</p>
                    <div class="price-tag clearfix">
                        <span class="price">
                            <span class="sign text-medium-gray">$</span>
                            <span class="currency text-green text-extra-large">89</span>
                            <span class="month text-medium-gray">/ MON</span>
                        </span>
                    </div>
                    <p class="main-font font-weight-100 text-medium-gray text-small margin-15px-bottom">Full Access</p>
                    <p class="main-font font-weight-100 text-medium-gray text-small margin-15px-bottom">Unlimited
                        Bandwidth</p>
                    <p class="main-font font-weight-100 text-medium-gray text-small margin-15px-bottom">Email Accounts
                    </p>
                    <p class="main-font font-weight-100 text-medium-gray text-small margin-15px-bottom">4 Free Forks
                        Every Months</p>
                    <a href="#."
                        class="btn btn-green alt-font font-weight-100 btn-rounded btn-medium margin-20px-top margin-40px-bottom">Buy
                        Now</a>
                </div>
            </div>
        </div>



    </div>
</section>
<!-- end of pricing -->
*}

<!-- clients testimonial-->
<section id="our-testimonial" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="alt-font font-weight-100 text-blackish">Happy Clients</h2>
                    {*
                    <div class="client-text">
                        <p class="main-font margin-80px-bottom xs-margin-25px-bottom">Curabitur mollis bibendum luctus.
                            Duis suscipit vitae dui sed suscipit.
                            Vestibulum auctor nunc vitae diam eleifend,in maximus metus sollicitudin. </p>
                    </div>
                    *}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="testimonial-slider" class="owl-carousel owl-theme">
                    {foreach $testimonials as $key=>$testimonial}
                    {if $key %2==0}
                    <div class="item pointer">
                        <div class="testimonial-wrapp">
                            <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40">{$testimonial->getDescription()}</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="{$testimonial->getPictureUrl()}"></div>
                            <h6 class="text-blackish alt-font no-margin">{$testimonial->getName()}</h6>
                            {*<p class="main-font text-medium xs-no-margin-bottom">Businessman</p>*}
                        </div>
                    </div>
                    {else}
                    <div class="item pointer">
                        <div class="testimonial-wrapp">
                            <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40">{$testimonial->getDescription()}</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="{#IMAGE_PATH#}testimonial-2.jpg"></div>
                            <h6 class="text-blackish alt-font no-margin">{$testimonial->getName()}</h6>
                            {*<p class="main-font text-medium xs-no-margin-bottom">Businessman</p>*}
                        </div>
                    </div>
                    {/if}
                    {/foreach}

                </div>
            </div>
        </div>
    </div>
</section>
<!--ends of clients testimonial -->


<!-- Partners -->
<section id="logos">
    <div class="container">
        <h2 class="display-none">2</h2>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="partners-slider" class="owl-carousel owl-client">
                    {foreach $clients as $client}
                    <div class="item">
                        <div class="logo-item"> <img src="{$client->getPictureUrl()}"></div>
                    </div>
                    {/foreach}
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Partners Ends-->

<!-- start blog -->
<section id="blog" class="no-padding bg-extreme-light-gray">
    <div class="half-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="about-image hover-effect">
                        <img alt="" src="{#IMAGE_PATH#}blog-1.jpg" class="equalheight">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="split-box text-center center-block equalheight">
                        <div class="about-box">
                            <h3 class="text-capitalize alt-font text-blackish font-weight-300">
                                latest Blog post</h3>
                            {*
                                <p class="margin-70px-lr xs-no-margin text-medium-gray text-medium main-font">Curabitur
                                mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc
                                vitae diam eleifend, in maximus metus sollicitudin. vel tristique risus faucibus.</p>
                            *}
                            <a href="/news" class="btn btn-blue btn-rounded btn-large margin-20px-top">Read our blog</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- end blog -->

<!-- Contact US -->
<section id="contactus">
    <div class="container">
        <div class="row ">
            <div class="contact-text">
                <h2 class="alt-font font-weight-100 text-blackish margin-10px-left">Let's Get In Touch</h2>
            </div>
            <div class="col-md-6 col-sm-12 margin_bottom">
                <form class="getin_form wow fadeInUp padding-15px-right sm-no-padding xs-no-padding"
                    data-wow-delay="400ms" onsubmit="return false;">
                    <div class="row margin-40px-top">

                        <div class="col-sm-12" id="result"></div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="First Name:" required
                                    id="first_name" name="first_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Last Name:" required id="last_name"
                                    name="last_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email:" required id="email"
                                    name="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group ">
                                <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group ">
                                <textarea class="form-control" placeholder="Message" id="message"
                                    name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit"
                                class="btn btn-green-blue btn-rounded form-btn btn-large xs-margin-20px-bottom margin-20px-top"
                                id="submit_btn">SUBMIT REQUEST</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6 col-sm-12 wow fadeInDown" data-wow-delay="350ms">
                <div class="row small-size margin-10px-top xs-no-margin">
                    <div class="col-md-6 col-sm-6 our-address margin-40px-top xs-margin-20px-top">
                        <p
                            class="alt-font text-blackish margin-20px-bottom xs-margin-10px-bottom text-medium font-weight-800">
                            Our Address</p>
                        {$aConfig.home_address}
                    </div>
                    <div class="col-md-6 col-sm-6 our-address margin-40px-top xs-margin-30px-top">
                        <p  class="alt-font text-blackish margin-20px-bottom xs-margin-10px-bottom text-medium font-weight-800">
                            Our Phone</p>
                        {$aConfig.home_phone}
                    </div>
                    <div class="col-md-6 col-sm-6 our-address margin-60px-top xs-margin-30px-top">
                        <p
                            class="alt-font text-blackish text-medium xs-margin-10px-bottom margin-20px-bottom font-weight-800">
                            Our Email</p>
                        {$aConfig.home_email}
                    </div>
                    <div class="col-md-6 col-sm-6 our-address margin-60px-top xs-margin-30px-top xs-margin-5px-bottom">
                        <p
                            class="alt-font text-blackish text-medium margin-20px-bottom xs-margin-10px-bottom font-weight-800 ">
                            Our Support</p>
                        {$aConfig.home_support}
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
<!--ends Contact US -->

<!--Location Map here-->
<div >
    {$aConfig.google_map}
</div>
<!-- ends map -->