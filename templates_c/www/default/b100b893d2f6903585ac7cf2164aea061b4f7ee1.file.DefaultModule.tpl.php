<?php /* Smarty version Smarty-3.1.8, created on 2019-05-20 16:03:11
         compiled from "templates/www/default\DefaultModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285425cdd0c26de0e96-04893764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b100b893d2f6903585ac7cf2164aea061b4f7ee1' => 
    array (
      0 => 'templates/www/default\\DefaultModule.tpl',
      1 => 1558342989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285425cdd0c26de0e96-04893764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cdd0c26e36da5_18996947',
  'variables' => 
  array (
    'aConfig' => 0,
    'testimonials' => 0,
    'testimonial' => 0,
    'banners' => 0,
    'key' => 0,
    'banner' => 0,
    'services' => 0,
    'service' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdd0c26e36da5_18996947')) {function content_5cdd0c26e36da5_18996947($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\modifier.truncate.php';
?>
    <!--# content #-->
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


      <?php if (count($_smarty_tpl->tpl_vars['testimonials']->value)>0){?>
      <!--# testimonial #-->
      <section id="testimonial">
        <div class="container">
          <div class="row">
            <div class="offset-md-1 col-md-10">
              <h3>what our clients say</h3>

                <div class="swiper-container" id="testimonial-slider">
                  <div class="swiper-wrapper">
                  <?php  $_smarty_tpl->tpl_vars['testimonial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['testimonials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->key => $_smarty_tpl->tpl_vars['testimonial']->value){
$_smarty_tpl->tpl_vars['testimonial']->_loop = true;
?>
                    <div class="swiper-slide">

                      <div class="testimonial-item">
                        <div class="testimonial-image">
                          <img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
avatar.png" class="img-fluid">
                        </div>
                        <div class="testimonial-text">
                          <blockquote><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['testimonial']->value->getDescription(),120);?>
</blockquote>
                          <span class="author">- <?php echo $_smarty_tpl->tpl_vars['testimonial']->value->getName();?>
</span>
                        </div>
                      </div>

                    </div>
                  <?php } ?>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </section>
      <!--# testimonial #-->
      <?php }?>

    </div>
    <!--# content #-->

    <!--Main Slider-->
    <section class="no-padding no-transition slider"  id="home">
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
" >

                        <!-- MAIN IMAGE -->
                        <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value->getPictureUrl();?>
" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>

                    </li>

                    <?php } ?>

                </ul>
                <div class="tp-static-layers" style="width:100%; height:100%; overflow:hidden">
 
                  <!-- BEGIN STATIC LAYER -->
                  <div class="tp-static-layer tp-caption tp-resizeme" 
               
                      data-startslide="0" 
                      data-endslide="99"
                      
                      data-frames='[{"delay": 500, "speed": 300, "from": "opacity: 0", "to": "opacity: 1"}, 
                                    {"delay": "wait", "speed": 300, "to": "opacity: 0"}]' 
                      
                      data-x="center" 
                      data-y="center" 
                      data-hoffset="0" 
                      data-voffset="0" 
                      data-width="['auto']"
                      data-height="['auto']"
               
                  >
                    <form method="post" class="contact">
                      <div class="contact-step-1">
                      <div class="form-inline">
                        <div class="form-group">
                          <input type="text" name="website" placeholder="&#xf57d; Enter Your Website" class="form-control fontAwesome" >
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
          <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
          <div class="swiper-slide textarea">
            <div class="row text-center">
              <div class="col-md-12">
                <div class="icon-holder"><i class="fa fa-3x fa-user"></i></div>
                <h4><?php echo $_smarty_tpl->tpl_vars['service']->value->getName();?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['service']->value->getDescription();?>

              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
     </div>
     
    </section>
    <!--  end of box section -->
    
    <!-- team section -->
    <section class="bg-extreme-light-gray" id="team">

        <div class="container">

            <div class="row text-center team-text">

                <h2 class="text-blackish alt-font font-weight-300">Creative Team</h2>
                <p class="xs-margin-20px-lr xs-no-margin-bottom margin-80px-bottom text-medium text-center text-medium-gray">Sebagai team profesional muda, kami bekerja dengan mengoptimalkan konsep dan content terbaik yang dibalut rapi dengan teknologi yang canggih. </p>

            </div>


            <div class="row xs-margin-50px-top">
                <div class="col-md-4 col-sm-6">

                    <div class="item pointer">


                        <div class="team-box wow fadeInLeftBig team-ani" data-wow-delay="300ms">

                            <div class="team-img">
                                <img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
team-2.jpg" alt="img" />
                            </div>
                                                 <div class="team-content bg-sky-blue whitecolor">
                                <h3 class="text-white alt-font">Mike Walkin.</h3>
                                <p class="margin-20px-bottom text-white alt-font">CEO, DigiOne Company</p>

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


                <div class="col-md-4 col-sm-6">

                    <div class="item pointer">
                        <div class="team-box wow fadeInUp team-ani" data-wow-delay="300ms">
                            <div class="team-img">
                                <img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
team-3.jpg" alt="img" />
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
                                <img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
team-1.jpg" alt="img" />
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

            </div>
        </div>


    </section>
    <!-- ends team-->

    <!-- start features -->
    <section id="features" class="position-relative">


        <div class="row text-center margin-80px-bottom features-small">
            <h2 class="alt-font text-blackish font-weight-200">DigiOne Is Creative</h2>
            <p class="main-font font-weight-100 text-medium-gray text-medium xs-margin-20px-lr">Hardworkers Dreamer</p>
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
                            <div class="feature-details"> <h6 class="alt-font font-weight-400 text-blackish margin-10px-bottom">Creative Imaginer</h6>
                        <p class="alt-font font-weight-100">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p></div>
                        </div>

                    </div>

                    <div class="row feature-hover wow fadeInLeft">
                        <div class="col-lg-2">
                            <div class="feature-icon center-block margin-20px-top">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="feature-details"> <h6 class="alt-font font-weight-400 text-blackish margin-10px-bottom">Passionate dreamer</h6>
                                <p class="alt-font font-weight-100">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p></div>
                        </div>

                    </div>

                    <div class="row feature-hover wow fadeInLeft">
                        <div class="col-lg-2">
                            <div class="feature-icon center-block margin-20px-top">
                                <i class="fa fa-language" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="feature-details"> <h6 class="alt-font font-weight-400 text-blackish margin-10px-bottom">Full services oriented</h6>
                                <p class="alt-font font-weight-100 no-margin">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p></div>
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
                    <h2 class="alt-font"><i class="fa fa-quote-left vertical-align-super"></i>If being creative make my dream come true, so everybody has to be creative
<i class="fa fa-quote-right vertical-align-sub"></i></h2>
                    <p class="text-capitalize alt-font no-margin">- ex-desperated person -</p>
                </div>
                <div class="col-sm-1 col-md-2"></div>
            </div>
        </div>
    </section>
    <!--Parallax Ends-->
    

    <!-- clients testimonial-->
    <section id="our-testimonial" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms">
                        <h2 class="alt-font font-weight-100 text-blackish">Happy Clients</h2>
                        <div class="client-text">
                        <p class="main-font margin-80px-bottom xs-margin-25px-bottom">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit.
                            Vestibulum auctor nunc vitae diam eleifend,in maximus metus sollicitudin. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="testimonial-slider" class="owl-carousel owl-theme">
                        <div class="item pointer">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
testimonial-1.jpg"></div>
                                <h6 class="text-blackish alt-font no-margin">David Raleway</h6>
                                <p class="main-font text-medium xs-no-margin-bottom">Businessman</p>
                            </div>
                        </div>
                        <div class="item pointer">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
testimonial-2.jpg"></div>
                                <h6 class="text-blackish alt-font no-margin">Kate maraasia</h6>
                                <p class="main-font text-medium xs-no-margin-bottom">Businessman</p>
                            </div>
                        </div>
                        <div class="item pointer">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>

                                </div>
                                <div class="testimonial-photo"><img alt="" src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
testimonial-3.jpg"></div>
                                <h6 class="text-blackish alt-font no-margin">Sam Billings</h6>
                                <p class="main-font text-medium xs-no-margin-bottom">Businessman</p>
                            </div>
                        </div>
                        <div class="item pointer">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
testimonial-1.jpg"></div>
                                <h6 class="text-blackish alt-font no-margin">David raleway</h6>
                                <p class="main-font text-medium xs-no-margin-bottom">Businessman</p>
                            </div>
                        </div>
                        <div class="item pointer">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
testimonial-2.jpg"></div>
                                <h6 class="text-blackish alt-font no-margin">Kate marasian</h6>
                                <p class="main-font text-medium xs-no-margin-bottom">Businessman</p>
                            </div>
                        </div>
                        <div class="item pointer">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
testimonial-3.jpg"></div>
                                <h6 class="alt-font text-blackish no-margin">Doe Raleway</h6>
                                <p class="main-font text-medium xs-no-margin-bottom">Businessman</p>
                            </div>
                        </div>
                        <div class="item pointer">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
testimonial-1.jpg"></div>
                                <h6 class="text-blackish alt-font no-margin">Shamoun Raleway</h6>
                                <p class="main-font text-medium xs-no-margin-bottom">Businessman</p>
                            </div>
                        </div>
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
                        
                        <div class="item">
                            <div class="logo-item"><img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
client.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
client.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
client.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
client.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
client.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
client.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
client.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
client.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img src="<?php echo $_smarty_tpl->getConfigVariable('IMAGE_PATH');?>
client.png"></div>
                        </div>
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
                                <p class="margin-70px-lr xs-no-margin text-medium-gray text-medium main-font">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. vel tristique risus faucibus.</p>
                                <a href="#." class="btn btn-blue btn-rounded btn-large margin-20px-top">Learn More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end blog -->

    <!-- Contact US -->
    <section id="contactus" >
        <div class="container">
            <div class="row ">
                <div class="contact-text">
                <h2 class="alt-font font-weight-100 text-blackish margin-10px-left">Let's Get In Touch</h2>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom">
                    <form class="getin_form wow fadeInUp padding-15px-right sm-no-padding xs-no-padding" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row margin-40px-top">

                            <div class="col-sm-12" id="result"></div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="First Name:" required id="first_name" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Last Name:" required id="last_name" name="last_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email:" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group ">
                                    <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group ">
                                    <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-green-blue btn-rounded form-btn btn-large xs-margin-20px-bottom margin-20px-top" id="submit_btn">SUBMIT REQUEST</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 col-sm-12 wow fadeInDown" data-wow-delay="350ms">
                    <div class="row small-size margin-10px-top xs-no-margin">
                        <div class="col-md-6 col-sm-6 our-address margin-40px-top xs-margin-20px-top">
                            <p class="alt-font text-blackish margin-20px-bottom xs-margin-10px-bottom text-medium font-weight-800">Our Address</p>
                            <p class="no-margin">123 Stree New York City , United States Of America. </p>
                            <a class="pickus margin-10px-top" href="#." data-text="Get Directions">Get Directions</a>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address margin-40px-top xs-margin-30px-top">
                            <p class="alt-font text-blackish margin-20px-bottom xs-margin-10px-bottom text-medium font-weight-800">Our Phone</p>
                            <p class="no-margin">Office Telephone : 001 01085379709 <span class="block">
                         Mobile : 001 63165370895
                      </span> </p>
                            <a class="pickus margin-10px-top" href="#." data-text="Call Us">Call Us</a>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address margin-60px-top xs-margin-30px-top">
                            <p class="alt-font text-blackish text-medium xs-margin-10px-bottom margin-20px-bottom font-weight-800">Our Email</p>
                            <p class="no-margin">Main Email : admin@website.com <span class="block">Inquiries : email@website.com</span> </p>
                            <a class="pickus margin-10px-top" href="#." data-text="Send a Message">Send a Message</a>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address margin-60px-top xs-margin-30px-top xs-margin-5px-bottom">
                            <p class="alt-font text-blackish text-medium margin-20px-bottom xs-margin-10px-bottom font-weight-800 ">Our Support</p>
                            <p class="no-margin">Main Support : info@website.com <span class="display-block">Sales : support@website</span> </p>
                            <a class="pickus margin-10px-top" href="#." data-text="Open a Ticket">Open a Ticket</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </section>
    <!--ends Contact US -->

    <!--Location Map here-->
    <div id="map-container"></div>
    <!-- ends map -->

<?php }} ?>