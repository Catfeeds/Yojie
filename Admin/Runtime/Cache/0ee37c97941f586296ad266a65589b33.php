<?php if (!defined('THINK_PATH')) exit();?><script src="__TMPL__MisSystemUnit/edit.js" type="text/javascript"></script>
	<div class="pageContent">
		<form method="post" action="__APP__/MisSystemUnit/update/navTabId/__MODULE__" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
			<input type="hidden" name="callbackType" value="closeCurrent" />
			<?php echo W('HiddenInput',$vo);?>
			<input type="hidden" name="id" value="<?php echo ($vo['id']); ?>" />
			<input type="hidden" name="masid" value="<?php echo ($vo['id']); ?>" />
			<div class="pageFormContent new_version_page_content" layoutH="58">
				<?php echo W('ShowOrderno',array(4,'mis_system_unit',$vo['orderno'],array('contentcls'=>'col_1_3 form_group_lay field_orderno', 'inputcls'=>'class="input_new " ','title'=>$fields["orderno"])));?>
				<!-- select组件 start -->
				<div class="col_1_3 form_group_lay field_danweileixing" >
					<label class="label_new"><?php echo ($fields["danweileixing"]); ?>:</label>
					<select    name="danweileixing"  class="    select2 select_elm"><?php echo getControllbyHtml('table',array('type'=>'select','table'=>'mis_system_unit_type','id'=>'id','name'=>'name','conditions'=>'','selected'=>$vo['danweileixing']));?>
					</select>
				</div>
				<!-- select组件 end -->
				<!-- text组件 start -->
				<div class="col_1_3 form_group_lay field_danweimingchen" >
					<label class="label_new"><?php echo ($fields["danweimingchen"]); ?>:</label>
					<input   type="text"  name="danweimingchen" class="required input_new  input_new  " value="<?php echo ($vo['danweimingchen']); ?>">
				</div>
				<!-- text组件 end -->
				<!-- text组件 start -->
				<div class="col_1_3 form_group_lay field_danweidaima" >
					<label class="label_new"><?php echo ($fields["danweidaima"]); ?>:</label>
					<input   type="text"  name="danweidaima" class="required input_new  input_new  " value="<?php echo ($vo['danweidaima']); ?>">
				</div>
				<!-- text组件 end -->
				<!-- select组件 start -->
				<div class="col_1_3 form_group_lay field_isbase" >
					<label class="label_new"><?php echo ($fields["isbase"]); ?>:</label>
					<select   name="isbase"  class="    select2 select_elm"><?php echo getControllbyHtml('selectlist',array('type'=>'select','key'=>'YesOrNo','conditions'=>'','selected'=>$vo['isbase']));?>
					</select>
				</div>
				<div class="col_1_3 form_group_lay field_danweizhuangtai" >
					<label class="label_new"><?php echo ($fields["danweizhuangtai"]); ?>:</label>
					<select    name="danweizhuangtai"  class="    select2 select_elm"><?php echo getControllbyHtml('selectlist',array('type'=>'select','key'=>'unittype','conditions'=>'','selected'=>$vo['danweizhuangtai']));?>
					</select>
				</div>
							<!-- text组件 end -->
		<div class="clear"></div>
			</div>
			<?php echo W('ShowAction',array('data'=>$vo));?>
		</form>
	</div>