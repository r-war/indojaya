        <!--# content #-->
        <div class="content">

          <div class="page-title">
            <div class="title-overlay">
              <h1>{$oMod->getName()}</h1>
            </div>
            <img src="{#IMAGE_PATH#}/default-title-bg.jpg" class="img-fluid">
          </div>

          {if $page}
          <div class="container news-detail">
            <br><br>
            <div class="row">
              <div class="col-md-12">
                <div class="entry-content">
                  {$page->getDescription()}
                </div>
              </div>
            </div>
            <br><br>
          </div>
          {/if}

        </div>
        <!--# content #-->