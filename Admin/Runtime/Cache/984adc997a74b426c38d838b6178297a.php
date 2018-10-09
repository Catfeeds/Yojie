<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">
$(function(){
	var isscroll = '<?php echo ($isscroll); ?>';
	if(isscroll==1){
		$("div.marqueedata").kxbdMarquee({direction:"up",scrollDelay:"70"});
	}
	var $box=navTab.getCurrentPanel();
	$('.nbmaccordion' , $box).nbmaccordion();
});

</script>
<style>
.marqueedata{
    height: 200px;
    overflow: hidden;
    /*margin: 5px 0px;*/
}
</style>

<div class="page unitBox general_page">
	<div class="pageContent">
		<div class="general_tree_left treeleft">
			<!-- left accordion -->

            <!--  参数说明：* @parame spread 全关全开控制，默认0：全关 @parame selecter 打开指定项下标。默认-1， @parame open 展开的样式效果 @parame close 关闭样式效果 -->
			<div class="nbmaccordion"  data-option="close:icon-double-angle-down;open:icon-double-angle-up" layouth="40">
				<?php if(is_array($accessNode)): $i = 0; $__LIST__ = $accessNode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><div title="<?php echo ($v1["title"]); ?>">
							<ul>
								<?php if(is_array($v1['levelthree'])): $i = 0; $__LIST__ = $v1['levelthree'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><li>
										<?php if(($v2["name"] == 'dwsp001')): ?><a href="__APP__/MisWorkExecuting/index/jump/jump/md/MisWorkMonitoring/worktype/1/rel/MisWorkExecutingbox/tablename/MisAutoIbf/typeid/5/dsp/1" title="<?php echo ($v2["title"]); ?>" rel="<?php echo ($v2["name"]); ?>" target="navtab">
											<span>
												<?php echo ($v2["title"]); ?>
											</span>
											</a>
											<?php elseif(($v2["name"] == 'wysp002')): ?>
											<a href="__APP__/MisWorkExecuting/index/jump/jump/md/MisWorkMonitoring/worktype/2/rel/MisWorkExecutingbox/tablename/MisAutoIbf/typeid/5/dsp/1" title="<?php echo ($v2["title"]); ?>" rel="<?php echo ($v2["name"]); ?>" target="navtab">
											<span>
												<?php echo ($v2["title"]); ?>
											</span>
											</a>
											<?php elseif(($v2["name"] == 'MisAutoLux')): ?>
											<a href="__APP__/MisSalesMyProject/index/xiangmuleixing/98" title="<?php echo ($v2["title"]); ?>" rel="<?php echo ($v2["name"]); ?>" target="navtab">
											<span>
												<?php echo ($v2["title"]); ?>
											</span>
											</a>
											<?php elseif(($v2["name"] == 'MisAutoAcu')): ?>
											<a href="__APP__/MisSalesMyProject/index/xiangmuleixing/98" title="<?php echo ($v2["title"]); ?>" rel="<?php echo ($v2["name"]); ?>" target="navtab">
											<span>
												<?php echo ($v2["title"]); ?>
											</span>
											</a>
											<?php elseif(($v2["name"] == 'MisAutoXxz')): ?>
											<a href="__APP__/MisSalesMyProject/index/xiangmuleixing/99" title="<?php echo ($v2["title"]); ?>" rel="<?php echo ($v2["name"]); ?>" target="navtab">
											<span>
												<?php echo ($v2["title"]); ?>
											</span>
											</a>
											<?php else: ?>
											<a href="__APP__/<?php echo ($v2["name"]); ?>/index" title="<?php echo ($v2["title"]); ?>" rel="<?php echo ($v2["name"]); ?>" target="navtab">
											<span>
												<?php echo ($v2["title"]); ?>
											</span>
											</a><?php endif; ?>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!-- left end -->
		</div>

	<!-- ***************************************************** -->
			<div id="MisPerformanceTypeRelIndex" class="unitBox treeright">
				<div class="pageContent"   style="overflow: auto;" layoutH="40">
					<div class="xypanel xysystem clearfix" id="nvigateToindex">
						<ul  style="padding: 10px 0px 0px 10px">
							<?php if(is_array($pnnelhtmllist)): $i = 0; $__LIST__ = $pnnelhtmllist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pnnelhtmllistvo): $mod = ($i % 2 );++$i; echo ($pnnelhtmllistvo); endforeach; endif; else: echo "" ;endif; ?>
					        <?php if(is_array($runpannellist)): $i = 0; $__LIST__ = $runpannellist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$runpannellistvo): $mod = ($i % 2 );++$i; echo ($runpannellistvo); endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>

	<!-- end -->
	</div>
</div>