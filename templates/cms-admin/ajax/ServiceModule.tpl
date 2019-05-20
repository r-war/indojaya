{if $sAjax == 'form'}
	<form id="form" action="{$oMod->getPage($oMod->getModule(),'select='|@cat:$oService->getPrimaryKey())}" method="POST" enctype="multipart/form-data">
	<div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">{loc k=form} {$oMod->getName()}</h3>
	</div>
	<div class="modal-body">
	{include file="core/feedback.tpl" source=$oMod->getModule()}
		<div class="form-unit form-horizontal">
		   {*if !$oService->isNew()}
		    <div class="control-group">
		     <label class="control-label" for="code">{loc k=url}</label>
		     <div class="controls">
		     	<div class="input-prepend input-append">
					<span class="add-on">{$oMod->getBaseDomain()}{$oMod->getBasePage('Service',null,true)}/</span><input type="text" class="input-large" value="{$oService->getCode()}" name="oService-code" id="code" /><span class="add-on">.html</span>
				</div>
		     </div>
		   </div>
		   {/if*}
		   <div class="control-group">
		     <label class="control-label" for="index">Index</label>
		     <div class="controls">
		       <input type="text" name="oService-index" id="index" value="{$oService->getIndex()}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="name">{loc k=name}</label>
		     <div class="controls">
		       <input type="text" name="oService-name" id="name" value="{$oService->getName()}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="short_description">Icon</label>
		     <div class="controls">
		       <input type="text" name="oService-short_description" id="short_description" value="{$oService->getShortDescription()}" class="span12"/>
		     </div>
		   </div>
		   {*
		   <div class="control-group">
		     <label class="control-label" for="subname">Sub-name</label>
		     <div class="controls">
		       <input type="text" name="oService-sub_name" id="subname" value="{$oService->getSubName()}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="price">Price</label>
		     <div class="controls">
		       <input type="text" name="oService-price" id="price" value="{$oService->getPrice()}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="info">Info</label>
		     <div class="controls">
		       <input type="text" name="oService-info" id="info" value="{$oService->getInfo()}" class="span12"/>
		     </div>
		   </div>
		   *}
		   <div class="control-group">
		     <label class="control-label" for="description">{loc k=description}</label>
		     <div class="controls">
		     <input type="hidden" id="fixDescription" value="1"/>
		       {fckeditor
					name=description
					value=$oService->getDescription()}
		     </div>
		   </div>
		   {*
			   <div class="control-group">
			     <label class="control-label" for="name"></label>
			     <div class="controls">
			       <b>Japanese</b>
			     </div>
			   </div>
			   <div class="control-group">
			     <label class="control-label" for="name">{loc k=name}</label>
			     <div class="controls">
			       <input type="text" name="namecn" id="name" value="{$oService->getName('jp')}" class="span12"/>
			     </div>
			   </div>
			   <div class="control-group">
			     <label class="control-label" for="description">{loc k=description}</label>
			     <div class="controls">
			     <input type="hidden" id="fixDescriptionCn" value="1"/>
			       {fckeditor
						name=descriptioncn
						value=$oService->getDescription('jp')
					}
			     </div>
			   </div>
		   *}
		   <div class="control-group">
		     <label class="control-label">{loc k=picture}
		     	<a href="#" data-toggle="tooltip" title="" data-original-title="Make sure size is fitted enough within the area used on this image (970px x 200px)" class="help"><i class="icon-question-sign"></i></a>
		     </label>
		     <div class="controls">
		       <input type="file" class="" name="picture" id="picture"/>
		       <span class="help-inline" style="margin-left: 50px"><a href="{$oService->getPictureUrl()}" target="_blank">{$oService->getPicture()}</a></span>
		     </div>
		   </div>
		   <div class="clearfix"></div>
		</div>
	</div>
	<div class="modal-footer">
		<input type="hidden" name="save" value="1"/>
		<input type="submit" value="{loc k=save}" class="btn btn-primary"/>
		{if !$oService->isNew()}<input name="delete" type="button" value="{loc k=delete}" class="btn btn-danger" onclick="doDelete('{$oService->getPrimaryKey()}','{val v=$oService->getName() parsequote=true}')"/>{/if}
		<a href="{$sUri}" class="btn">Close</a><br />
	</div>
	</form>
{/if}