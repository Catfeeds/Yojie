<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">
// 当前变量 type 名称不可修改，它是做为全局变量存在的，其作用为设置默认选中项
var type = '<?php echo ($type); ?>';
<!--
$(function(){
    //为左侧栏目导航点击后修改选中状态@nbmxkj 20141009 1629
    nbm_getfouce();
	
});
//-->
</script>
<div class="pageContent">
	<?php if(!$_REQUEST['projectid'] && !$_REQUEST['projectworkid']): echo W("ShowToLevelMenu");?>
	<div class="treeleft" layoutH="40">
		<div class="work_statement"><?php echo ($nodeltitle); ?></div> 
        <!--<div class="edit_work_lay">-->
            <!--<a class="edit_work_btn" target="navTab" rel="__MODULE__add" title="<?php echo ($nodeltitle); ?>_新增" href="__URL__/add">新建 <span class="icon-pencil"></span></a>-->
        <!--</div> -->
        <!--<div class="tml_divider"></div>-->
        <div class="tml_bar_nav">
            <ul class="bar_nav">
                <li class="" rel="1"><a href="__URL__/index/type/1/remindMap/<?php echo ($_REQUEST['remindMap']); ?>" rel="__MODULE__indexview" target="ajax">我的单据</a></li>	<!-- 我创建的单据 -->
                <li class="" rel="2"><a href="__URL__/index/type/2/remindMap/<?php echo ($_REQUEST['remindMap']); ?>" rel="__MODULE__indexview" target="ajax" style="text-align:left;text-indent: 66px"><img src="__PUBLIC__/Images/dian1.png" height="20px">待启动</a></li>					<!-- 我浏览权限中数据待启动的数据 -->
                <li class="" rel="3"><a href="__URL__/index/type/3/remindMap/<?php echo ($_REQUEST['remindMap']); ?>" rel="__MODULE__indexview" target="ajax" style="text-align:left;text-indent: 66px"><img src="__PUBLIC__/Images/dian1.png" height="20px">审核中</a></li>					<!-- 我浏览权限中审核中的数据 -->
                <li class="" rel="4"><a href="__URL__/index/type/4/remindMap/<?php echo ($_REQUEST['remindMap']); ?>" rel="__MODULE__indexview" target="ajax" style="text-align:left;text-indent: 66px"><img src="__PUBLIC__/Images/dian1.png" height="20px">审核完毕</a></li>					<!-- 我浏览权限中审核完毕的数据 -->
                <li class="" rel="5"><a href="__URL__/index/type/5/remindMap/<?php echo ($_REQUEST['remindMap']); ?>" rel="__MODULE__indexview" target="ajax" style="text-align:left;text-indent: 66px"><img src="__PUBLIC__/Images/dian1.png" height="20px">未批准</a></li>					<!-- 我浏览权限中未批准的数据 -->
            </ul>
        </div>
        <!--<div class="tml_divider"></div>-->
        <!--<div class="tml_bar_nav">-->
            <!--<ul class="bar_nav">-->
                <!--<li class="" rel="7"><a href="__URL__/waitAudit/type/7/remindMap/<?php echo ($_REQUEST['remindMap']); ?>" rel="__MODULE__indexview" target="ajax" >待审核</a></li>	            &lt;!&ndash; 待我审核的单据 &ndash;&gt;-->
                <!--<li class=""><a href="__URL__/index/type/1/remindMap/<?php echo ($_REQUEST['remindMap']); ?>" rel="__MODULE__indexview" target="ajax">待执行</a></li>				&lt;!&ndash; 待我执行的单据 &ndash;&gt;-->
                <!--<li class=""><a href="__URL__/index/type/1/remindMap/<?php echo ($_REQUEST['remindMap']); ?>" rel="__MODULE__indexview" target="ajax">待查阅</a></li>			    &lt;!&ndash; 待我查阅的单据 &ndash;&gt;-->
            <!--</ul>-->
        <!--</div>-->
        <!--<div class="tml_divider"></div>-->
        <!--<div class="tml_bar_nav">-->
            <!--<ul class="bar_nav">-->
                <!--<li class="" rel="8"><a href="__URL__/alreadyAudit/type/8" rel="__MODULE__indexview" target="ajax" >审核记录</a></li>	        &lt;!&ndash; 我审核过的单据列表 &ndash;&gt;-->
                <!--<li class=""><a href="__URL__/index/type/1" rel="__MODULE__indexview" target="ajax">执行记录</a></li>		    &lt;!&ndash; 我执行过的单据列表 &ndash;&gt;-->
                <!--&lt;!&ndash; <li class=""><a href="__URL__/index/type/1" rel="__MODULE__indexview" target="ajax">统计查询</a></li> &ndash;&gt;-->
            <!--</ul>-->
        <!--</div>-->
	</div><?php endif; ?>
	<div id="__MODULE__indexview" class="unitBox treeright">
		<?php if($type > 6): else: endif; ?>
	</div>
</div>