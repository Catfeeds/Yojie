<?php if (!defined('THINK_PATH')) exit();?><script src="__TMPL__MisAutoLxn/add.js" type="text/javascript"></script><script src="__TMPL__MisAutoLxn/addExtend.js" type="text/javascript"></script><script src="__PUBLIC__/Js/layer/layer.js" type="text/javascript"></script>
<!-- 
普通表单：新增页面
author:nbmxkj
time:2015-09-06 18
 -->
<?php if(MisAutoLxn == 'MisAutoMjp'): ?><script type="text/javascript">
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
<?php $classNodeSettingArr =getModelClassByNodeSetting('MisAutoLxn','add');?>
<?php $appendPageContentArr =getBindTabsContent('MisAutoLxn',$vo,'add','',$main);?>
<?php $formautosetting = setFormControllAutoCreteAppend('MisAutoLxn' ,'add' ,$main , 'insert',$vo,A('MisAutoLxn')->rebuildSetting());?>
<?php echo ($appendPageContentArr[1]); ?>
<div class="page" <?php if(MisAutoLxn == 'MisAutoIbf'): ?>onmouseover="xifenvalch()"<?php endif; ?> >
	<div class="pageContent">
		<div class="pageFormContent applecloth anchorsToolBarParen" <?php if($_REQUEST['dialog']): ?>layoutH="40"<?php endif; if(!$_REQUEST['main'] or $_REQUEST['main'] == MODULE_NAME): ?>layoutH="40"<?php endif; ?>>
			<div <?php if(!$_REQUEST['dialog']): ?>class="new_version_page"<?php endif; ?>>
				<form id="MisAutoLxn_add"
					<?php echo ($appendPageContentArr[5]); ?> <?php echo ($formautosetting[3]); ?>  method="post" action="__APP__/MisAutoLxn/<?php echo ($formautosetting[2]); ?>/navTabId/__MODULE__<?php echo ($formautosetting[4]); ?>" class="pageForm required-validate"	 onsubmit="<?php if($formautosetting[5]): echo ($formautosetting[5]); else: echo ($appendPageContentArr[0]); endif; ?>">
					<a class='xyz_anchornavi_top' name='MisAutoLxn_add_top'></a> 
					<input type="hidden" name="callbackType" value="closeCurrent" />
					<?php echo W('HiddenInput',$vo);?> 
					<?php echo ($formautosetting[1]); ?>
					<?php if($_GET['viewtype'] != 'view'&& !$_GET['main'] ): ?><div class="new_version_page_header pageFormContent ">
						<span class="left tml-ml20 ">项目内容</span>
						<?php echo W('ShowRightToolBar',array('add','MisAutoLxn',$vo));?>
						<?php echo W('ShowAnchorNavi',array('MisAutoLxn', 'add',$main));?>
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
					<?php echo W('ShowOrderno',array(4,'mis_auto_oxqxg',$vo['orderno'],array('contentcls'=>'col_1_3 form_group_lay field_orderno', 'inputcls'=>'class="input_new "','title'=>$fields["orderno"],'isshow'=>1)));?>
												
						<!-- 文本框组件 -->
						<div class="col_1_3 form_group_lay field_auth" original="<?php echo ($vo['auth']); ?>" category="text" style="">
							<label class="label_new"><?php echo ($fields["auth"]); ?></label>
							<input  dropback="#dropback#"  type="text"  name="auth"  class=" input_new  " <?php if($vo['auth'] != ''): ?>value="<?php echo ($vo['auth']); ?>"<?php else: ?>value=""<?php endif; ?>  >
							<div class="display_none <?php echo ($classNodeSettingArr['auth']); ?>"><?php echo ($vo['auth']); ?></div>
						</div>					
						<!-- 下拉框组件 -->
						<div class="col_1_3 form_group_lay field_select13" original="<?php echo ($vo['select13']); ?>" category="select" style="">
							<label class="label_new"><?php echo ($fields["select13"]); ?></label>
							<?php echo W('ShowSelect', array( $vo['select13'], array( '', array( 'type'=>(''==''?'table':'selectlist'), array( 'key'=>'', 'readonly'=>'1', 'targevent'=>'', 'actionName'=>'MisAutoLxn', 'names'=>'select13', 'defaultcheckitem'=>'', 'defaultval'=>'', 'defaulttext'=>'', 'table'=>'', 'id'=>'', 'name'=>'' , 'conditions'=>'', 'parentid'=>'', 'mulit'=>'', 'isnextend'=>'', 'treeheight'=>'', 'treewidth'=>'', 'isedit'=>'1', 'showtype'=>'', 'defaultcheckitem'=>'' ) ) ) ) ) ;?>
						</div>
							
						<!-- 地图组件 -->

                        <div class="col_1_7 form_group_lay field_areainfomap7" original="<?php echo ($vo['areainfomap7']); ?>" category="areainfomap" style="">
                            <label class="label_new"><?php echo ($fields["areainfomap7"]); ?></label>
                            <?php echo W('ShowArea', array("0"=>$areainfoarry["areainfomap7"], "1"=>areainfomap7, "2"=>$fields[areainfomap7], "3"=>"", "5"=>"") );?>
                           
                            <div class="display_none <?php echo ($classNodeSettingArr['areainfomap7']); ?>">
                                <input type="hidden" name="areainfoMap[areainfomap7][province]" value="<?php echo ($areainfoMap['areainfomap7']['province']); ?>">
                                <input type="hidden" name="areainfoMap[areainfomap7][city]" value="<?php echo ($areainfoMap['areainfomap7']['city']); ?>">
                                <input type="hidden" name="areainfoMap[areainfomap7][area]" value="<?php echo ($areainfoMap['areainfomap7']['area']); ?>">
                                <input type="hidden" name="areainfoMap[areainfomap7][address]" value="<?php echo ($areainfoMap['areainfomap7']['address']); ?>">
                                <input type="hidden" name="areainfoMap[areainfomap7][lng]" value="<?php echo ($areainfoMap['areainfomap7']['lng']); ?>"/>
                                <input type="hidden" name="areainfoMap[areainfomap7][lat]" value="<?php echo ($areainfoMap['areainfomap7']['lat']); ?>"/>
                                <input type="hidden" name="areainfoMap[areainfomap7][formattedAddress]" value="<?php echo ($areainfoMap['areainfomap7']['detail']); ?>"/>
                            </div>
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