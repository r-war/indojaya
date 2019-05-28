{if $sAjax == 'form'}
	<form id="form" action="{$oMod->getPage($oMod->getModule(),'select='|@cat:$oTeam->getPrimaryKey())}" method="POST" enctype="multipart/form-data">
	<div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">{loc k=form} {$oMod->getName()}</h3>
	</div>
	<div class="modal-body">
	{include file="core/feedback.tpl" source=$oMod->getModule()}
		<div class="form-unit form-horizontal">
		   {*if !$oTeam->isNew()}
		    <div class="control-group">
		     <label class="control-label" for="code">{loc k=url}</label>
		     <div class="controls">
		     	<div class="input-prepend input-append">
					<span class="add-on">{$oMod->getBaseDomain()}{$oMod->getBasePage('Team',null,true)}/</span><input type="text" class="input-large" value="{$oTeam->getCode()}" name="oTeam-code" id="code" /><span class="add-on">.html</span>
				</div>
		     </div>
		   </div>
		   {/if*}
		   <div class="control-group">
		     <label class="control-label" for="index">Index</label>
		     <div class="controls">
		       <input type="text" name="oTeam-index" id="index" value="{$oTeam->getIndex()}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="name">{loc k=name}</label>
		     <div class="controls">
		       <input type="text" name="oTeam-name" id="name" value="{$oTeam->getName()}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="short_description">Position</label>
		     <div class="controls">
		       <input type="text" name="oTeam-short_description" id="short_description" value="{$oTeam->getShortDescription()}" class="span12"/>
		     </div>
		   </div>
		   {*
		   <div class="control-group">
		     <label class="control-label" for="subname">Sub-name</label>
		     <div class="controls">
		       <input type="text" name="oTeam-sub_name" id="subname" value="{$oTeam->getSubName()}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="price">Price</label>
		     <div class="controls">
		       <input type="text" name="oTeam-price" id="price" value="{$oTeam->getPrice()}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="info">Info</label>
		     <div class="controls">
		       <input type="text" name="oTeam-info" id="info" value="{$oTeam->getInfo()}" class="span12"/>
		     </div>
		   </div>
		   *}
		   <div class="control-group">
		     <label class="control-label" for="description">{loc k=description}</label>
		     <div class="controls">
		     <input type="hidden" id="fixDescription" value="1"/>
		       {fckeditor
					name=description
					value=$oTeam->getDescription()}
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="facebook">Facebook Link</label>
		     <div class="controls">
		       <input type="text" name="extra[facebook]" id="facebook" value="{$social->facebook}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="twitter">Twitter Link</label>
		     <div class="controls">
		       <input type="text" name="extra[twitter]" id="twitter" value="{$ocial->twitter}" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="linkedin">Linkedin Link</label>
		     <div class="controls">
		       <input type="text" name="extra[linkedin]" id="linkedin" value="{$social->linkedin}" class="span12"/>
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
			       <input type="text" name="namecn" id="name" value="{$oTeam->getName('jp')}" class="span12"/>
			     </div>
			   </div>
			   <div class="control-group">
			     <label class="control-label" for="description">{loc k=description}</label>
			     <div class="controls">
			     <input type="hidden" id="fixDescriptionCn" value="1"/>
			       {fckeditor
						name=descriptioncn
						value=$oTeam->getDescription('jp')
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
		       <span class="help-inline" style="margin-left: 50px"><a href="{$oTeam->getPictureUrl()}" target="_blank">{$oTeam->getPicture()}</a></span>
		     </div>
		   </div>
		   <div class="clearfix"></div>
		</div>
	</div>
	<div class="modal-footer">
		<input type="hidden" name="save" value="1"/>
		<input type="submit" value="{loc k=save}" class="btn btn-primary"/>
		{if !$oTeam->isNew()}<input name="delete" type="button" value="{loc k=delete}" class="btn btn-danger" onclick="doDelete('{$oTeam->getPrimaryKey()}','{val v=$oTeam->getName() parsequote=true}')"/>{/if}
		<a href="{$sUri}" class="btn">Close</a><br />
	</div>
	</form>
{/if}