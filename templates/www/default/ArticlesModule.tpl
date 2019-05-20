        <!--# content #-->
        <div class="content">

          <div class="page-title">
            <div class="title-overlay">
              <h1>{$oMod->getName()}</h1>
            </div>
            <img src="{#IMAGE_PATH#}/default-title-bg.jpg" class="img-fluid">
          </div>

          {if $news}
          <div class="container news-detail">
            <br><br>
            <div class="row">
              <div class="col-md-12">
                <div class="entry-content">
                  <a href="{$oMod->getBasePage('Articles',$news->getUrl())}">
                    <div class="news-title">{$news->getName()}</div>
                    <div class="news-date">{$news->getDate('F d, Y')}</div>
                  </a>
                  <p class="text-center">
                    <img src="{$news->getPictureUrl()}" class="img-fluid">
                  </p>
                  {$news->getDescription()}
                </div>
              </div>
            </div>
            <br><br>
          </div>
          {else}
          <div class="container news-list">
          <br><br>
          {if count($news_list) > 0}
            {foreach $news_list as $data}
            <div class="row">
              <div class="col-md-5">
                <img src="{$data->getPictureUrl()}" class="img-fluid">
              </div>
              <div class="col-md-7">
                <div class="entry-content">
                  <a href="{$oMod->getBasePage('Articles',$data->getUrl())}">
                    <div class="news-title">{$data->getName()}</div>
                    <div class="news-date">{$data->getDate('F d, Y')}</div>
                  </a>
                  {$data->getDescription()|truncate:300}
                </div>
              </div>
            </div>
            <br>
            {/foreach}
          {else}
            <div class="text-center">
              No Article Found
            </div>
          {/if}
          <br>
          </div>
          {/if}

        </div>
        <!--# content #-->