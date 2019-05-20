        <!--# content #-->
        <div class="content">

          <div class="page-title">
            <div class="title-overlay">
              <h1>{$oMod->getName()}</h1>
            </div>
            <img src="{#IMAGE_PATH#}/default-title-bg.jpg" class="img-fluid">
          </div>

          <div class="container news-list">
          <br><br>
          {if count($testimonials) > 0}
            {foreach $testimonials as $data}
            <div class="row">
              <div class="col-md-12">
                <div class="entry-content">
                  {$data->getDescription()}
                  <div class="news-title text-right" style="font-size: 16px">- {$data->getName()}</div>
                </div>
              </div>
            </div>
            <br>
            {/foreach}
          {else}
            <div class="text-center">
              No Testimonial Found
            </div>
          {/if}
          <br>
          </div>

        </div>
        <!--# content #-->