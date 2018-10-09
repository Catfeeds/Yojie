<?php if (!defined('THINK_PATH')) exit();?><script src="__TMPL__MisAutoBkt/add.js" type="text/javascript"></script><script src="__TMPL__MisAutoBkt/addExtend.js" type="text/javascript"></script><script src="__PUBLIC__/Js/layer/layer.js" type="text/javascript"></script>
<!-- 
普通表单：新增页面
author:nbmxkj
time:2015-09-06 18
 -->
<?php if(MisAutoBkt == 'MisAutoMjp'): ?><script type="text/javascript">
        //多个细分品类值时带回保存处理
        function xifenvalch()	{
            var xifen = $('.field_xifenpinlei #xifenval').val();
            var xfstr = new Array();
            $("select[name='quickxifenpinlei']").find("option").each(function(){
                var arr = xifen.split(',');
                for(var i = 0;i <= arr.length;i++){
                    if(arr[i] == $(this).text()){
                        xfstr[i] = $(this).val();
                    }
                }
                return xfstr;
            });
            var xifenstr = xfstr.join(",");
            $('.field_xifenpinlei #xinfenno').val(xifenstr);
        }
	</script><?php endif; ?>
<?php $classNodeSettingArr =getModelClassByNodeSetting('MisAutoBkt','add');?>
<?php $appendPageContentArr =getBindTabsContent('MisAutoBkt',$vo,'add','',$main);?>
<?php $formautosetting = setFormControllAutoCreteAppend('MisAutoBkt' ,'add' ,$main , 'insert',$vo,A('MisAutoBkt')->rebuildSetting());?>
<?php echo ($appendPageContentArr[1]); ?>
<div class="page" <?php if(MisAutoBkt == 'MisAutoIbf'): ?>onmouseover="xifenvalch()"<?php endif; ?> >
	<div class="pageContent">
		<div class="pageFormContent applecloth anchorsToolBarParen" <?php if($_REQUEST['dialog']): ?>layoutH="40"<?php endif; if(!$_REQUEST['main'] or $_REQUEST['main'] == MODULE_NAME): ?>layoutH="40"<?php endif; ?>>
			<div <?php if(!$_REQUEST['dialog']): ?>class="new_version_page"<?php endif; ?>>
				<form id="MisAutoBkt_add"
					<?php echo ($appendPageContentArr[5]); ?> <?php echo ($formautosetting[3]); ?>  method="post" action="__APP__/MisAutoBkt/<?php echo ($formautosetting[2]); ?>/navTabId/__MODULE__<?php echo ($formautosetting[4]); ?>" class="pageForm required-validate"	 onsubmit="<?php if($formautosetting[5]): echo ($formautosetting[5]); else: echo ($appendPageContentArr[0]); endif; ?>">
					<a class='xyz_anchornavi_top' name='MisAutoBkt_add_top'></a> 
					<input type="hidden" name="callbackType" value="closeCurrent" />
					<?php echo W('HiddenInput',$vo);?> 
					<?php echo ($formautosetting[1]); ?>
					<?php if($_GET['viewtype'] != 'view'&& !$_GET['main'] ): ?><div class="new_version_page_header pageFormContent ">
						<span class="left tml-ml20 ">地址测试</span>
						<?php echo W('ShowRightToolBar',array('add','MisAutoBkt',$vo));?>
						<?php echo W('ShowAnchorNavi',array('MisAutoBkt', 'add',$main));?>
						<?php echo ($formautosetting[0]); ?>
					</div><?php endif; ?>
					<div class="new_version_page_content">
					
													
						<!-- 文本框组件 -->
						<div class="col_1_3 form_group_lay field_projectid" original="<?php echo ($vo['projectid']); ?>" category="text" style="">
							<label class="label_new"><?php echo ($fields["projectid"]); ?></label>
							<input  dropback="#dropback#"  type="text"  name="projectid"  class=" input_new  " <?php if($vo['projectid'] != ''): ?>value="<?php echo ($vo['projectid']); ?>"<?php else: ?>value=""<?php endif; ?>  >
							<div class="display_none <?php echo ($classNodeSettingArr['projectid']); ?>"><?php echo ($vo['projectid']); ?></div>
						</div>							
						<!-- 文本框组件 -->
						<div class="col_1_3 form_group_lay field_createid" original="<?php echo ($vo['createid']); ?>" category="text" style="">
							<label class="label_new"><?php echo ($fields["createid"]); ?></label>
							<input  dropback="#dropback#"  type="text"  name="createid"  class=" input_new  " <?php if($vo['createid'] != ''): ?>value="<?php echo ($vo['createid']); ?>"<?php else: ?>value=""<?php endif; ?>  >
							<div class="display_none <?php echo ($classNodeSettingArr['createid']); ?>"><?php echo ($vo['createid']); ?></div>
						</div>							
						<!-- 文本框组件 -->
						<div class="col_1_3 form_group_lay field_createtime" original="<?php echo ($vo['createtime']); ?>" category="text" style="">
							<label class="label_new"><?php echo ($fields["createtime"]); ?></label>
							<input  dropback="#dropback#"  type="text"  name="createtime"  class=" input_new  " <?php if($vo['createtime'] != ''): ?>value="<?php echo ($vo['createtime']); ?>"<?php else: ?>value=""<?php endif; ?>  >
							<div class="display_none <?php echo ($classNodeSettingArr['createtime']); ?>"><?php echo ($vo['createtime']); ?></div>
						</div>
					<?php echo W('ShowOrderno',array(4,'mis_auto_sauku',$vo['orderno'],array('contentcls'=>'col_1_3 form_group_lay field_orderno', 'inputcls'=>'class="input_new "','title'=>$fields["orderno"],'isshow'=>1)));?>
												
						<!-- 文本框组件 -->
						<div class="col_1_3 form_group_lay field_testmanger" original="<?php echo ($vo['testmanger']); ?>" category="text" style="">
							<label class="label_new"><?php echo ($fields["testmanger"]); ?></label>
							<input  dropback="#dropback#"  type="text"  name="testmanger"  class=" input_new  " <?php if($vo['testmanger'] != ''): ?>value="<?php echo ($vo['testmanger']); ?>"<?php else: ?>value=""<?php endif; ?>  >
							<div class="display_none <?php echo ($classNodeSettingArr['testmanger']); ?>"><?php echo ($vo['testmanger']); ?></div>
						</div>							
						<!-- 文本框组件 -->
						<div class="col_1_3 form_group_lay field_teseproject" original="<?php echo ($vo['teseproject']); ?>" category="text" style="">
							<label class="label_new"><?php echo ($fields["teseproject"]); ?></label>
							<input  dropback="#dropback#"  type="text"  name="teseproject"  class=" input_new  " <?php if($vo['teseproject'] != ''): ?>value="<?php echo ($vo['teseproject']); ?>"<?php else: ?>value=""<?php endif; ?>  >
							<div class="display_none <?php echo ($classNodeSettingArr['teseproject']); ?>"><?php echo ($vo['teseproject']); ?></div>
						</div>	
						<!-- 地址组件 -->

						<div class="col_1_7 form_group_lay field_areainfo11" original="<?php echo ($vo['areainfo11']); ?>" category="areainfo" class="map_input">
                            <label class="label_new"><?php echo ($fields["areainfo11"]); ?></label>
                            <div  class="tml-input-map">
                                <input type="text" name="areainfo[areainfo11][detail]"  class="text_address input_new" />
                                <a href="javascript:;" class="icon_elm icon-map-marker js-inputCheckMap" style="color:#3290f4;"></a>
                            </div>
                            <div class="display_none <?php echo ($classNodeSettingArr['areainfo11']); ?>">
                                <input type="hidden" name="areainfo[areainfo11][province]">
                                <input type="hidden" name="areainfo[areainfo11][city]">
                                <input type="hidden" name="areainfo[areainfo11][area]">
                                <input type="hidden" name="areainfo[areainfo11][address]">
                                <input type="hidden" name="areainfo[areainfo11][lng]"/>
                                <input type="hidden" name="areainfo[areainfo11][lat]"/>
                            </div>
						</div>
					
						<!-- 查找带回组件 -->
						<div class="col_1_3 form_group_lay field_lookup7" original="<?php echo ($vo['lookup7']); ?>" category="lookup" style="">
							<label class="label_new">
								<?php echo ($fields["lookup7"]); ?>
							</label>
							<?php echo W('Lookup',array('1',$vo,'87','1','','#ganshe#'));?>
							<div class="display_none <?php echo ($classNodeSettingArr['lookup7']); ?>"><?php echo W('Lookup',array('1',$vo,'87','1',1));?></div>
						</div>
						
						<?php if(!$appendPageContentArr[4]): echo W('ShowAction',array('data'=>$vo)); endif; ?>
					</div>
				</form>
				<div class="clear"></div>
				<?php echo ($appendPageContentArr[2]); ?>
				<?php echo ($appendPageContentArr[3]); ?>
			</div>
		</div>
	</div>
</div>