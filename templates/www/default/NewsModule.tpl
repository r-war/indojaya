        {if $news}
          <section class="blog-header no-padding-bottom blog-page-padding-top bg-blog-right">
              <div class="container">
                      <div class="font-style-1-outer">
                      <h3 class="alt-font font-weight-100 text-white text-center">{$news->getName()}</h3>
                  </div>
              </div>
          </section>
          <div class="row">
            <!-- start post item -->
            <div class="col-md-6 col-sm-6 col-xs-12 blog-post-content padding-30px-tb margin-30px-bottom bg-white xs-margin-30px-bottom xs-text-center">
                <div class="blog-image">
                  <a href="#"><img src="{$news->getPictureUrl()}" alt="" data-no-retina=""></a>
                </div>
                <div class="blog-text border-all display-inline-block width-100">
                    <div class="content padding-30px-top">
                        <div class="text-medium-gray text-small margin-10px-bottom text-capitalizealt-font font-weight-400">
                          <span>Posted on {$news->getDate('F d, Y')}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                          {*<span><a href="#." class="text-medium-gray ">Branding</a></span>*}
                        </div>
                        <a href="#" class="text-blackish text-capitalize alt-font text-heading-small font-weight-600 margin-15px-bottom display-block">{$news->getName()}</a>
                        <p class="no-margin">{$news->getDescription()|truncate:300}</p>
                    </div>
                </div>
            </div>
          </div>
        {else}
          <section class="blog-header no-padding-bottom blog-page-padding-top bg-blog-right">
              <div class="container">
                      <div class="font-style-1-outer">
                      <h3 class="alt-font font-weight-100 text-white text-center">Latest Blogs</h3>
                  </div>
              </div>
          </section>
          <div class="row">
            <!-- start post item -->
            {if count($news_list) > 0}
            {foreach $news_list as $data}
            <div class="col-md-6 col-sm-6 col-xs-12 blog-post-content padding-30px-tb margin-30px-bottom bg-white xs-margin-30px-bottom xs-text-center">
                <div class="blog-image">
                  <a href="#"><img src="{$data->getPictureUrl()}" alt="" data-no-retina=""></a>
                </div>
                <div class="blog-text border-all display-inline-block width-100">
                    <div class="content padding-30px-top">
                        <div class="text-medium-gray text-small margin-10px-bottom text-capitalizealt-font font-weight-400">
                          <span>Posted on {$data->getDate('F d, Y')}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                          {*<span><a href="#." class="text-medium-gray ">Branding</a></span>*}
                        </div>
                        <a href="{$data->getUrl()}" class="text-blackish text-capitalize alt-font text-heading-small font-weight-600 margin-15px-bottom display-block">{$data->getName()}</a>
                        <p class="no-margin">{$data->getDescription()|truncate:300}</p>
                    </div>
                </div>
            </div>
            {/foreach}
            {/if}
          </div>
        {/if}