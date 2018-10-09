<?php if (!defined('THINK_PATH')) exit();?><script>
    $(function(){
        //为左侧栏目导航点击后修改选中状态@nbmxkj 20141009 1629
        nbm_getfouce();
    });
</script>
<div class="pageContent">
    <div class="treeleft">
        <div class="collapse" layoutH="0">
            <div class="toggleCollapse">
                <div></div>
            </div>
        </div>
        <div class="close" layoutH="40">
            <div class="work_statement">单位设置</div>
            <div class="edit_work_lay"><a class="edit_work_btn" href="__URL__/add"  target="dialog" width="720" height="500"  mask="true"  rel="__MODULE__add"  title="新增">新增 <span class="icon-pencil"></span></a></div>
            <div class="tml_divider"></div>
            <div class="tml_bar_nav">
                <ul class="bar_nav">
                 <li class="active"><a href="__URL__/index/jump/jump" target="ajax" rel="MisSystemUnitindexview">全部单位设置</a></li>
                   <?php if(is_array($MisSaleClientTypeList)): $i = 0; $__LIST__ = $MisSaleClientTypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$MisSaleClientTypeVo): $mod = ($i % 2 );++$i;?><li><a href="__URL__/index/danweileixing/<?php echo ($MisSaleClientTypeVo["id"]); ?>/jump/jump" target="ajax" rel="MisSystemUnitindexview"><?php echo ($MisSaleClientTypeVo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <!--<ul id="misSalesCustomerTree" class="ztree" layoutH="43"></ul>-->
        </div>
    </div>
    <div id="MisSystemUnitindexview" class="unitBox treeright">
        <div class="pageContent">
		<form id="pagerForm" action="__URL__/index/type/1" method="post">
				<input type="hidden" name="pageNum" value="1"/>
				<input type="hidden" name="orderField" value="<?php echo ($order); ?>" />
				<input type="hidden" name="orderDirection" value="<?php echo ($sort); ?>"/>
		</form>
		<div class="panelBar">
				<ul class="toolBar">
								<?php if(is_array($toolbarextension)): $i = 0; $__LIST__ = $toolbarextension;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$toolb): $mod = ($i % 2 );++$i; if($_SESSION["a"] == 1 or $toolb['ifcheck'] == 0 or ($toolb['ifcheck'] == 1 and !empty($toolb['permisname']) and $_SESSION[$toolb['permisname']])): ?><li><?php echo ($toolb['html']); ?></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</ul>
							<form rel="pagerForm" onsubmit="return  divSearch(this, '__MODULE__indexview')" action="__URL__/index/type/1" method="post">
								<input type="hidden" name="danweileixing"  value="<?php echo ($danweileixing); ?>"/>
								
								<input type="hidden" name="jump"  value="jump"/>
								<div class="searchBar">
									<table class="searchContent">
										<tr>
											
<td class="tml_select_option_left">
    <select class="combox" name="quicksearchby" onchange="quickSearchChange(this,'__MODULE__')">
        <?php if(is_array($quickSearchList)): $i = 0; $__LIST__ = $quickSearchList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qsl): $mod = ($i % 2 );++$i;?><option value="<?php echo ($qsl['quickname']); ?>" <?php if(($quicksearchby) == $qsl['quickname']): ?>selected<?php endif; ?> ><?php echo ($qsl['showname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <input type="hidden" name="type" value="<?php echo ($type); ?>" />
    <input type="hidden" name="remindMap" value="<?php echo ($remindMap); ?>"/>
    <?php echo W('HiddenInput');?>
</td>
<td class="tml_select_option_center">
	<?php if(is_array($quickSearchList)): $i = 0; $__LIST__ = $quickSearchList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qsl): $mod = ($i % 2 );++$i; if($qsl['quickname'] == $quicksearchby): ?><div class="__MODULE__<?php echo ($qsl['quickname']); ?> __MODULE__quickSearch">
				<?php echo ($qsl['html']); ?>
			</div>
		<?php else: ?>
			<div class="__MODULE__<?php echo ($qsl['quickname']); ?> __MODULE__quickSearch" style="display:none;">
				<?php echo ($qsl['html']); ?>
			</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</td>
<td  class="tml_select_option_right">
	<button class="xySearch" type="submit"><span class="icon-search"></span></button>
</td>
<td>
	<a class="xyAdvancedSearch" href="__APP__/Search/advancedsearch/model/<?php echo ($ename); ?>/searchbyinc/<?php echo ($searchbyinc); ?>" rel="__MODULE__advancedsearch" width="700"  height="500" target="dialog" mask="true">高级检索</a>
</td>
<td>
	<a class="xyAdvancedSearch" href="__URL__/lookupUserSetField/model/<?php echo ($ename); ?>" rel="__MODULE__userSetField" width="700" height="500" target="dialog" mask="true" title="列表设置">设置</a>
</td>
<td><button class="xyOutput" type="button" onclick="exportBysearch(this.form,'__URL__/index','__URL__/exportBysearchHtml');">导出</button></td>
										</tr>
									</table>
								</div>
							</form>
						</div>
						<table class="table" width="100%" layoutH="146">
							<thead ename="<?php echo ($ename); ?>">
								<tr>
									<th width="26">序号</th>
									<?php if(is_array($detailList)): $i = 0; $__LIST__ = $detailList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo[shows] == 1): ?><th <?php if($vo[widths]): ?>width="<?php echo ($vo[widths]); ?>"<?php endif; if($vo[sorts]): ?>rel="__MODULE__indexview" orderField="<?php echo ($vo[sortname]); ?>" class="<?php echo ($sort); ?>"<?php endif; ?>><?php echo ($vo[showname]); ?></th><?php endif; ?>	<!--类型--><?php endforeach; endif; else: echo "" ;endif; ?>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($list)): $key2 = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key2 % 2 );++$key2;?><tr target="sid_node" rel="<?php echo ($vo['id']); ?>"  data-tool='<?php echo ($vo[classarr]); ?>'>
		<td class="tml-first-td"><?php echo ($numPerPage*($currentPage-1)+$key+1); ?></td>
		<?php if(is_array($detailList)): $i = 0; $__LIST__ = $detailList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if($vo1[shows] == 1): ?><td width="<?php echo ($vo1[widths]); ?>">
					<?php if(count($vo1['func']) > 0): if(is_array($vo1["func"])): $i = 0; $__LIST__ = $vo1["func"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nam): $mod = ($i % 2 );++$i; if(!empty($vo1['extention_html_start'][$key])): echo ($vo1['extention_html_start'][$key]); endif; ?>
								<?php echo getConfigFunction($vo[$vo1['name']],$nam,$vo1['funcdata'][$key],$list[$key2-1]);?>
							<?php if(!empty($vo1['extention_html_end'][$key])): echo ($vo1['extention_html_end'][$key]); endif; endforeach; endif; else: echo "" ;endif; ?>
					<?php else: ?>
						<?php echo ($vo[$vo1['name']]); endif; ?>
				</td><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
						<div class="panelBar panelPageBar">
							<div class="pages">
								<span>共<?php echo ($totalCount); ?>条</span>
							</div>
							<div class="pagination" rel="__MODULE__indexview" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
						</div>
					</div>
    </div>
</div>