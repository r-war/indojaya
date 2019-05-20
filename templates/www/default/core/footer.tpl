       {*
        <!--# footer #-->
        <footer>
          <div class="container">
            <div class="row footer-links">
              <div class="col-lg-4">
                <h5>Recent Events / News</h5>
                {if $latest_news}
                <div class="footer-news">
                  {foreach $latest_news as $latest}
                  <div class="row">
                    <div class="col-md-3">
                      <img src="{$latest->getPictureUrl()}" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                      <a href="{$oMod->getBasePage('News',$latest->getUrl())}">{$latest->getName()}</a>
                      <span>{$latest->getDate('F d, Y')}</span>
                    </div>
                  </div>
                  {/foreach}
                </div>
                {/if}
              </div>
              <div class="col-lg-4">
                <h5>Quick Links</h5>
                {$interceptor->menu($oMod, 'quick-links')}
              </div>
              <div class="col-lg-4">
                <h5>Get In Touch</h5>
                <ul>
                  {if $aConfig.youtube_link != ''}
                  <li>
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="{$aConfig.youtube_link}">Visit our channel</a>
                  </li>
                  {/if}
                  {if $aConfig.facebook_link != ''}
                  <li>
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="{$aConfig.facebook_link}">Follow us on Facebook</a>
                  </li>
                  {/if}
                  {if $aConfig.twitter_link != ''}
                  <li>
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="{$aConfig.twitter_link}">Follow us on Twitter</a>
                  </li>
                  {/if}
                  {if $aConfig.instagram_link != ''}
                  <li>
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="{$aConfig.instagram_link}">Follow us on Instagram</a>
                  </li>
                  {/if}
                  {if $aConfig.linkedin_link != ''}
                  <li>
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="{$aConfig.linkedin_link}">Follow us on Linkedin</a>
                  </li>
                  {/if}
                  {if $aConfig.mail_link != ''}
                  <li>
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-at fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="{$aConfig.mail_link}">Have any question? Contact Us</a>
                  </li>
                  {/if}
                </ul>
              </div>
            </div>
          </div>
        </footer>
        <!--# footer #-->

        <!--# copyright #-->
        <div class="copyright">
          {$aConfig.copyright_en}
        </div>
        <!--# copyright #-->

      </div>
    </div>
    *}

    <!--Site Footer Here-->
    <footer id="site-footer" class="padding-80px-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <ul class="social-icons margin-5px-bottom no-padding wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-envelope-o"></i> </a> </li>
                    </ul>
                    <p class="copyrights wow fadeInUp no-margin" data-wow-delay="350ms"> &copy; 2018 Digione. made with love by <a href="#.">themesindustry</a> </p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer ends-->
    
    <script src="{#JS_PATH#}/jquery-2.2.3.js"></script>
    <script src="{#JS_PATH#}/bootstrap.min.js"></script>
    <script src="{#JS_PATH#}/jquery.appear.js"></script>
    <script src="{#JS_PATH#}/jquery.fancybox.min.js"></script>
    <script src="{#JS_PATH#}/owl.carousel.min.js"></script>
    <script src="{#JS_PATH#}/swiper.min.js"></script>
    <script src="{#JS_PATH#}/wow.js"></script>
    <script src="{#JS_PATH#}/isotop.js"></script>
    <script src="{#JS_PATH#}/packery.js"></script>
    <!-- morphtext -->
    <script src="{#JS_PATH#}/morphtext.js"></script>
    <!-- Cube Portfolio JS File -->
    <script src="{#JS_PATH#}/jquery.cubeportfolio.min.js"></script>
    <!-- Cube Portfolio Lity JS File -->
    <script src="{#JS_PATH#}/lity.js"></script>
    <script src="{#JS_PATH#}/parallaxie.js"></script>
    <!-- match height -->
    <script src="{#JS_PATH#}/matchheight.js"></script>





    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{#JS_PATH#}jquery.themepunch.tools.min.js"></script>
    <script src="{#JS_PATH#}jquery.themepunch.revolution.min.js"></script>


    <script src="{#JS_PATH#}/revolution.extension.actions.min.js"></script>
    <script src="{#JS_PATH#}/revolution.extension.carousel.min.js"></script>
    <script src="{#JS_PATH#}/revolution.extension.kenburn.min.js"></script>
    <script src="{#JS_PATH#}/revolution.extension.layeranimation.min.js"></script>
    <script src="{#JS_PATH#}/revolution.extension.migration.min.js"></script>
    <script src="{#JS_PATH#}/revolution.extension.navigation.min.js"></script>
    <script src="{#JS_PATH#}/revolution.extension.parallax.min.js"></script>
    <script src="{#JS_PATH#}/revolution.extension.slideanims.min.js"></script>
    <script src="{#JS_PATH#}/revolution.extension.video.min.js"></script>


    <!--Google Map Api-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv7LYRzyivt-k-4wMEENhy-cMR_KMO_8A"></script>


    <script src="{#JS_PATH#}/map.js"></script>
    <script src="{#JS_PATH#}/main.js"></script>

  </body>
</html>