<?php /* Smarty version Smarty-3.1.8, created on 2019-05-22 14:56:49
         compiled from "templates/www/default/DefaultModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13670958075ce3cf2a3123f0-50456168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f4fc71bd9983e02308eb3a85b501af6a52199d' => 
    array (
      0 => 'templates/www/default/DefaultModule.tpl',
      1 => 1558509339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13670958075ce3cf2a3123f0-50456168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3cf2ab8ff24_61271447',
  'variables' => 
  array (
    'aConfig' => 0,
    'banners' => 0,
    'key' => 0,
    'banner' => 0,
    'services' => 0,
    'service' => 0,
    'teams' => 0,
    'team' => 0,
    'socials' => 0,
    'social' => 0,
    'gallery' => 0,
    'category' => 0,
    'gall' => 0,
    'i' => 0,
    'testimonials' => 0,
    'testimonial' => 0,
    'clients' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3cf2ab8ff24_61271447')) {function content_5ce3cf2ab8ff24_61271447($_smarty_tpl) {?><!--# content #-->
<div class="content">
    

    <!--# home-content #-->
    <div class="home-content">
        <div class="container">
            <div class="entry-content">
                <?php echo $_smarty_tpl->tpl_vars['aConfig']->value['content_home'];?>

            </div>
        </div>
    </div>
    <!--# home-content #-->


    

</div>
<!--# content #-->

<!--Main Slider-->
<section class="no-padding no-transition slider" id="home">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="banner-main" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['banner']->key;
?>
                <li data-index="rs-0<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
">

                    <!-- MAIN IMAGE -->
                    <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value->getPictureUrl();?>
" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>

                    <div class="tp-caption tp-resizeme" id="slide-28-layer-1"
             
                        data-x="['49','49','40','49']"
                        data-y="['460','460','460','400']"
                        data-width="['700','500','500','350']"
                        data-height="['auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="opacity:0;s:300;e:Power2.easeInOut;"
                        data-transform_out="opacity:0;s:300;s:300;"
                        data-start="500"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 5;
                               min-width: 200px;
                               max-width: 500px;
                               white-space: normal;
                               font-size: 26px;
                               line-height: 32px;
                               font-weight: 400;">
                            <p class="text-capitalize alt-font text-blackish font-weight-800"><?php echo $_smarty_tpl->tpl_vars['banner']->value->getName();?>
</p>
                    </div>

                </li>

                <?php } ?>

            </ul>
            <div class="tp-static-layers" style="width:100%; height:100%; overflow:hidden">

                <!-- BEGIN STATIC LAYER -->
                <div class="tp-static-layer tp-caption tp-resizeme" data-startslide="0" data-endslide="99" 
                    data-frames='[{"delay": 500, "speed": 300, "from": "opacity: 0", "to": "opacity: 1"}, 
                                    {"delay": "wait", "speed": 300, "to": "opacity: 0"}]'  data-x="center"
                    data-y="center" data-hoffset="0" data-voffset="0" data-width="['auto']" data-height="['auto']">
                    <?php echo $_smarty_tpl->getSubTemplate ('core/feedback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <form method="post" class="contact" id="quotes">
                        <div class="contact-step-1">
                            <div class="form-inline">
                                <div class="form-group">
                                    <input type="text" name="website" placeholder="&#xf57d; Enter Your Website"
                                        class="form-control fontAwesome">
                                </div>
                                <a class="btn btn-blue" id="nextStep" onclick="goNextStep()">Get Your Free Quote</a>
                            </div>
                        </div>
                        <div class="contact-step-2">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" class="form-control">
                                <input type="text" name="email" placeholder="Email" class="form-control">
                                <input type="text" name="phone" placeholder="Phone" class="form-control">
                            </div>
                            <button name="quote" class="btn btn-green-blue">Quote</button>
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
    <div class="row"> 
        <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
$_smarty_tpl->tpl_vars['service']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['service']->key;
?>
            <div class="col-md-6 col-sm-6 no-padding">
                <div class="four-boxes center-block text-blackish text-center <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%3==1||$_smarty_tpl->tpl_vars['key']->value%3==1&&$_smarty_tpl->tpl_vars['key']->value!==1){?>bg-sky-blue text-white<?php }?> padding-140px-tb padding-30px-lr wow fadeIn">

                    <h3 class="text-capitalize font-weight-100 alt-font no-margin-bottom"><?php echo $_smarty_tpl->tpl_vars['service']->value->getName();?>
</h3>

                    <p
                        class="text-center margin-20px-lr text-medium width-70 text-medium-gray main-font margin-30px-top xs-margin-20px-top">
                        <?php echo $_smarty_tpl->tpl_vars['service']->value->getDescription();?>
</p>
                    <a href="#portfolio"
                        class="scroll btn btn-blackish font-weight-600 alt-font btn-rounded btn-large margin-20px-top">Browse
                        Work</a>

                </div>
            </div>
        <?php } ?>
    </div>
    
</section>
<!--  end of box section -->

<!-- start counters-->
<section id="counters" class="demo-banner">

    <div class="container">

        <div class="text-left counters-heading margin-80px-bottom xs-margin-50px-bottom">
            <h2 class="text-blackish alt-font font-weight-100 no-margin">Statistical Numbers</h2>

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
            <?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value){
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
            <div class="col-md-4 col-sm-6">

                <div class="item pointer">


                    <div class="team-box wow fadeInLeftBig team-ani" data-wow-delay="300ms">

                        <div class="team-img">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['team']->value->getPictureUrl();?>
" alt="img" />
                        </div>
                        <div class="team-content bg-sky-blue whitecolor">
                            <h3 class="text-white alt-font"><?php echo $_smarty_tpl->tpl_vars['team']->value->getName();?>
</h3>
                            <p class="margin-20px-bottom text-white alt-font"><?php echo $_smarty_tpl->tpl_vars['team']->value->getShortDescription();?>
</p>

                            <div class="progress-bars">
                                <div class="team-icons">
                                    <?php $_smarty_tpl->tpl_vars['socials'] = new Smarty_variable(json_decode($_smarty_tpl->tpl_vars['team']->value->getExtra(),1), null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['social'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['social']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['socials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['social']->key => $_smarty_tpl->tpl_vars['social']->value){
$_smarty_tpl->tpl_vars['social']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['social']->key;
?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['social']->value;?>
" target="_blank"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                            aria-hidden="true"></i></a>
                                    <?php } ?>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <?php } ?>
            
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
            <img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
feature-one.png" alt="image">
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

<!-- Portfolio Starts -->
<section id="portfolio">

    <div class="container">
        <div class="row">
            <div class="wow fadeIn text-center">
                <h2 class="text-blackish alt-font font-weight-100">Portofolio</h2>
            </div>
        </div>
        <div class="row">
            <div id="js-filters-mosaic-flat" class="text-center xs-no-margin-top cbp-l-filters-buttonCenter">
                <div data-filter="*" class="cbp-filter-item">
                    All
                    <div class="cbp-filter-counter"></div>

                </div>

                <span class="text-blue">/</span>

                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                <div data-filter=".<?php echo $_smarty_tpl->tpl_vars['category']->value->getCode();?>
" class="<?php if ($_smarty_tpl->tpl_vars['category']->value->getCode()=='website'){?>cbp-filter-item cbp-filter-item-active<?php }else{ ?>cbp-filter-item<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['category']->value->getName();?>

                    <div class="cbp-filter-counter"></div>
                </div>
                <span class="text-blue">/</span>
                <?php } ?>

            </div>
            <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">
                <?php  $_smarty_tpl->tpl_vars['gall'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gall']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gall']->key => $_smarty_tpl->tpl_vars['gall']->value){
$_smarty_tpl->tpl_vars['gall']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gall']->value->getPictures(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        <div class="cbp-item <?php echo $_smarty_tpl->tpl_vars['gall']->value->getCode();?>
">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['i']->value->getPictureUrl();?>
" alt="project">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value->getPictureUrl();?>
" class="cbp-lightbox">
                                                <div class="cbp-l-caption-title"><?php echo $_smarty_tpl->tpl_vars['i']->value->getName();?>
</div>
                                                <div class="line-bar">
                                                    <hr>
                                                </div>
                                                <p class="brand-graphic alt-font"><?php echo $_smarty_tpl->tpl_vars['i']->value->getDescription();?>
</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    <?php } ?>
                <?php } ?>
                
            </div>
            
        </div>
    </div>

</section>
<!-- Portfolio ends -->


<!-- clients testimonial-->
<section id="our-testimonial" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="alt-font font-weight-100 text-blackish">Happy Clients</h2>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="testimonial-slider" class="owl-carousel owl-theme">
                    <?php  $_smarty_tpl->tpl_vars['testimonial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonial']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['testimonials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->key => $_smarty_tpl->tpl_vars['testimonial']->value){
$_smarty_tpl->tpl_vars['testimonial']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['testimonial']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?>
                    <div class="item pointer">
                        <div class="testimonial-wrapp">
                            <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40"><?php echo $_smarty_tpl->tpl_vars['testimonial']->value->getDescription();?>
</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['testimonial']->value->getPictureUrl();?>
"></div>
                            <h6 class="text-blackish alt-font no-margin"><?php echo $_smarty_tpl->tpl_vars['testimonial']->value->getName();?>
</h6>
                            
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="item pointer">
                        <div class="testimonial-wrapp">
                            <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40"><?php echo $_smarty_tpl->tpl_vars['testimonial']->value->getDescription();?>
</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['testimonial']->value->getPictureUrl();?>
"></div>
                            <h6 class="text-blackish alt-font no-margin"><?php echo $_smarty_tpl->tpl_vars['testimonial']->value->getName();?>
</h6>
                            
                        </div>
                    </div>
                    <?php }?>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--ends of clients testimonial -->

<!--video Parallax-->
<section class="bg-video-parallax parallax padding">
    <div class="container text-center center-block">
        <div class="row wow fadeIn">
            <div class="col-sm-1 col-md-2"></div>
            <div class="col-sm-10 col-md-8">
                <h2 class="alt-font text-white">"If you work just for money, you'll never make it, but if you love what you're doing and you always put the customer first, success will be yours."<br> Ray Kroc</h2>

            </div>
            <div class="col-sm-1 col-md-2"></div>
        </div>
    </div>
</section>
<!--video Parallax Ends-->

<!-- Partners -->
<section id="logos">
    <div class="container">
        <h2 class="display-none">2</h2>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="partners-slider" class="owl-carousel owl-client">
                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                    <div class="item">
                        <div class="logo-item"> <img src="<?php echo $_smarty_tpl->tpl_vars['client']->value->getPictureUrl();?>
"></div>
                    </div>
                    <?php } ?>
                    
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
                        <img alt="" src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
blog-1.jpg" class="equalheight">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="split-box text-center center-block equalheight">
                        <div class="about-box">
                            <h3 class="text-capitalize alt-font text-blackish font-weight-300">
                                latest Blog post</h3>
                            
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
                                <input class="form-control" type="email_contact" placeholder="Email:" required id="email"
                                    name="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group ">
                                <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="tel">
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
                        <?php echo $_smarty_tpl->tpl_vars['aConfig']->value['home_address'];?>

                    </div>
                    <div class="col-md-6 col-sm-6 our-address margin-40px-top xs-margin-30px-top">
                        <p  class="alt-font text-blackish margin-20px-bottom xs-margin-10px-bottom text-medium font-weight-800">
                            Our Phone</p>
                        <?php echo $_smarty_tpl->tpl_vars['aConfig']->value['home_phone'];?>

                    </div>
                    <div class="col-md-6 col-sm-6 our-address margin-60px-top xs-margin-30px-top">
                        <p
                            class="alt-font text-blackish text-medium xs-margin-10px-bottom margin-20px-bottom font-weight-800">
                            Our Email</p>
                        <?php echo $_smarty_tpl->tpl_vars['aConfig']->value['home_email'];?>

                    </div>
                    <div class="col-md-6 col-sm-6 our-address margin-60px-top xs-margin-30px-top xs-margin-5px-bottom">
                        <p
                            class="alt-font text-blackish text-medium margin-20px-bottom xs-margin-10px-bottom font-weight-800 ">
                            Our Support</p>
                        <?php echo $_smarty_tpl->tpl_vars['aConfig']->value['home_support'];?>

                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
<!--ends Contact US -->

<!--Location Map here-->
<div >
    <?php echo $_smarty_tpl->tpl_vars['aConfig']->value['google_map'];?>

</div>
<!-- ends map --><?php }} ?>