{if $sAjax == 'form'}

	<form id="form" action="{$oMod->getPage($oMod->getModule(),'select='|@cat:$oGalleryPicture->getPrimaryKey())}" method="POST" enctype="multipart/form-data">

	<div class="modal-header">

	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

	    <h3 id="myModalLabel">{loc k=form} {$oMod->getName()}</h3>

	</div>

	<div class="modal-body">

	{include file="core/feedback.tpl" source=$oMod->getModule()}

		<div class="form-unit form-horizontal">

		  <div class="control-group">

		     <label class="control-label">{loc k=index}

				<a href="#" data-toggle="tooltip" title="" data-original-title="{loc k=index_desc}" class="help"><i class="icon-question-sign"></i></a>

	     	</label>

		     <div class="controls">

		       <input type="text" name="oGalleryPicture-index" value="{$oGalleryPicture->getIndex()}" id="index"/>

		     </div>

		   </div>

		   <div class="control-group">

		     <label class="control-label">{loc k=picture}</label>

		     <div class="controls">

		       <input type="file" class="" name="picture" id="picture"/>

		       <span class="help-inline" style="margin-left: 50px"><a href="{$oGalleryPicture->getPictureUrl()}" target="_blank">{$oGalleryPicture->getPicture()}</a></span>

		     </div>

		   </div>

		   <div class="control-group">

		     <label class="control-label">&nbsp;</label>

		     <div class="controls">

		       <span class="help-inline">

					Recommended Image size is 950 x 580 pixel

		       	</span>

		     </div>

		   </div>

		   <div class="control-group">

		     <label class="control-label">{loc k=name}</label>

		     <div class="controls">

		       <input type="text" class="span12" name="oGalleryPicture-name" id="name" value="{$oGalleryPicture->getName()}" />

		     </div>

		   </div>

		   <div class="control-group">

		     <label class="control-label">Description</label>

		     <div class="controls">

		       <input type="text" class="span12" name="oGalleryPicture-description" id="name" value="{$oGalleryPicture->getDescription()}" />

		     </div>

		   </div>

		   <div class="clearfix"></div>

		</div>

	</div>

	<div class="modal-footer">

		<input type="hidden" name="save" value="1"/>

		<input type="submit" value="{loc k=save}" class="btn btn-primary"/>

		{if !$oGalleryPicture->isNew()}<input name="delete" type="button" value="{loc k=delete}" class="btn btn-danger" onclick="doDelete('{$oGalleryPicture->getPrimaryKey()}','{val v=$oGalleryPicture->getPicture() parsequote=true}')"/>{/if}

		<a href="{$sUri}" class="btn">Close</a>

	</div>

	</form>

{/if}