<?php if (!defined('THINK_PATH')) exit();?><script src="__TMPL__MisAutoAhf/add.js" type="text/javascript"></script><script src="__TMPL__MisAutoAhf/addExtend.js" type="text/javascript"></script><script src="__PUBLIC__/Js/layer/layer.js" type="text/javascript"></script>
<!-- 
普通表单：新增页面
author:nbmxkj
time:2015-09-06 18
 -->
<?php if(MisAutoAhf == 'MisAutoMjp'): ?><script type="text/javascript">
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
<?php $classNodeSettingArr =getModelClassByNodeSetting('MisAutoAhf','add');?>
<?php $appendPageContentArr =getBindTabsContent('MisAutoAhf',$vo,'add','',$main);?>
<?php $formautosetting = setFormControllAutoCreteAppend('MisAutoAhf' ,'add' ,$main , 'insert',$vo,A('MisAutoAhf')->rebuildSetting());?>
<?php echo ($appendPageContentArr[1]); ?>
<div class="page" <?php if(MisAutoAhf == 'MisAutoIbf'): ?>onmouseover="xifenvalch()"<?php endif; ?> >
	<div class="pageContent">
		<div class="pageFormContent applecloth anchorsToolBarParen" <?php if($_REQUEST['dialog']): ?>layoutH="40"<?php endif; if(!$_REQUEST['main'] or $_REQUEST['main'] == MODULE_NAME): ?>layoutH="40"<?php endif; ?>>
			<div <?php if(!$_REQUEST['dialog']): ?>class="new_version_page"<?php endif; ?>>
				<form id="MisAutoAhf_add"
					<?php echo ($appendPageContentArr[5]); ?> <?php echo ($formautosetting[3]); ?>  method="post" action="__APP__/MisAutoAhf/<?php echo ($formautosetting[2]); ?>/navTabId/__MODULE__<?php echo ($formautosetting[4]); ?>" class="pageForm required-validate"	 onsubmit="<?php if($formautosetting[5]): echo ($formautosetting[5]); else: echo ($appendPageContentArr[0]); endif; ?>">
					<a class='xyz_anchornavi_top' name='MisAutoAhf_add_top'></a> 
					<input type="hidden" name="callbackType" value="closeCurrent" />
					<?php echo W('HiddenInput',$vo);?> 
					<?php echo ($formautosetting[1]); ?>
					<?php if($_GET['viewtype'] != 'view'&& !$_GET['main'] ): ?><div class="new_version_page_header pageFormContent ">
						<span class="left tml-ml20 ">地址测试</span>
						<?php echo W('ShowRightToolBar',array('add','MisAutoAhf',$vo));?>
						<?php echo W('ShowAnchorNavi',array('MisAutoAhf', 'add',$main));?>
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
						<div class="col_1_3 form_group_lay field_createtime" original="<?php echo ($vo['createtime']); ?>" category="text" style="">
							<label class="label_new"><?php echo ($fields["createtime"]); ?></label>
							<input  dropback="#dropback#"  type="text"  name="createtime"  class=" input_new  " <?php if($vo['createtime'] != ''): ?>value="<?php echo ($vo['createtime']); ?>"<?php else: ?>value=""<?php endif; ?>  >
							<div class="display_none <?php echo ($classNodeSettingArr['createtime']); ?>"><?php echo ($vo['createtime']); ?></div>
						</div>
					<?php echo W('ShowOrderno',array(4,'mis_auto_pzfuk',$vo['orderno'],array('contentcls'=>'col_1_3 form_group_lay field_orderno', 'inputcls'=>'class="input_new "','title'=>$fields["orderno"],'isshow'=>1)));?>
												
						<!-- 文本框组件 -->
						<div class="col_1_3 form_group_lay field_testman" original="<?php echo ($vo['testman']); ?>" category="text" style="">
							<label class="label_new"><?php echo ($fields["testman"]); ?></label>
							<input  dropback="#dropback#"  type="text"  name="testman"  class=" input_new  " <?php if($vo['testman'] != ''): ?>value="<?php echo ($vo['testman']); ?>"<?php else: ?>value=""<?php endif; ?>  >
							<div class="display_none <?php echo ($classNodeSettingArr['testman']); ?>"><?php echo ($vo['testman']); ?></div>
						</div>	
						<!-- 地图组件 -->

                        <div class="col_1_7 form_group_lay field_areainfomap4" original="<?php echo ($vo['areainfomap4']); ?>" category="areainfomap" style="">
                            <label class="label_new"><?php echo ($fields["areainfomap4"]); ?></label>
                            <?php echo W('ShowArea', array("0"=>$areainfoarry["areainfomap4"], "1"=>areainfomap4, "2"=>$fields[areainfomap4], "3"=>"", "5"=>"") );?>

                            <div class="display_none <?php echo ($classNodeSettingArr['areainfomap4']); ?>">
                                <input type="hidden" name="areainfo[areainfomap4][province]" value="<?php echo ($areainfo['areainfomap4']['province']); ?>">
                                <input type="hidden" name="areainfo[areainfomap4][city]" value="<?php echo ($areainfo['areainfomap4']['city']); ?>">
                                <input type="hidden" name="areainfo[areainfomap4][area]" value="<?php echo ($areainfo['areainfomap4']['area']); ?>">
                                <input type="hidden" name="areainfo[areainfomap4][address]" value="<?php echo ($areainfo['areainfomap4']['address']); ?>">
                                <input type="hidden" name="areainfo[areainfomap4][lng]" value="<?php echo ($areainfo['areainfomap4']['lng']); ?>"/>
                                <input type="hidden" name="areainfo[areainfomap4][lat]" value="<?php echo ($areainfo['areainfomap4']['lat']); ?>"/>
                                <input type="hidden" name="areainfo[areainfomap4][formattedAddress]" value="<?php echo ($areainfoMap['areainfomap4']['detail']); ?>"/>
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