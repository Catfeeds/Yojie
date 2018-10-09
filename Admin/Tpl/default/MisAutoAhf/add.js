/**
 * @Title: Config
 * @Package package_name
 * @Description: todo(动态表单_组件配置文件-生成添加页面专用JS)
 * @author 管理员
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2018-09-30 10:28:43
 * @version V1.0
*/
$(function(){
	initTableWNEW();
	checkidcard();
    var box = navTab.getCurrentPanel();
	var formname='MisAutoAhf';
	box = $('form[id^="'+formname+'"]',box)?$('form[id^="'+formname+'"]',box):box;
		
});/**
 * lookup带回时提醒删除原有表格内的数据
 * @param obj
 */
function lookupcheck(obj) {
    var lookupgroup = $(obj).attr('lookupgroup');
   if($('.dataTables_scrollBody table[distinguish="'+lookupgroup+'"]').length>0){
       var hrefa = $(obj).attr('href');
       var heraArray = hrefa.split(lookupgroup);
       heraArray[1] = "";
       hrefa = heraArray[0]+lookupgroup;
       var context = $('.dataTables_scrollBody table[distinguish="'+lookupgroup+'"]').find('.dataTables_empty').html();
       if(context == null){
           $(obj).attr('href',hrefa+"/lookupcheck/contextc");
       }else{
           $(obj).attr('href',hrefa);
       }
   }
}
/**
 * Created by benjamin on 17/4/26.
 */
/**
 * 获取各种值更新值
 * @param option
 * @returns {string}
 */
function valeditfunc(option){
    try {
        var result='';
        if(option.gtype&&option.gtype=='api'){
            $.ajax({
                url:option.url,
                type: option.stype,
                data: option.param,
                async:false,
                success: function(data){
                    try {
                        var res=eval("("+data+")");
                        console.log('res',res);
                        if(res.status==1){
                            result=res.data;
                            if(!isNaN(res.data)){
                                result=parseFloat(res.data);
                            }
                        }
                        return result;
                    }catch(err){
                        console.log(err.description);
                    }
                }
            });
        }else {
            $.ajax({
                url: 'valeditfunc',
                type: 'post',
                data: option,
                async: false,
                success: function (data) {
                    try {
                        var res = eval("(" + data + ")");
                        if (res.status == 1) {
                            result = res.data;
                            if (!isNaN(res.data)) {
                                result = parseFloat(res.data);
                            }
                        }
                        return result;
                    } catch (err) {
                        console.log(err.description);
                    }
                }
            });
        }
        return result;
    }catch(e){
        console.log(e.description);
    }
}
/**
 * 获取单选按钮值
 * @param radio
 * @returns {string}
 */
function getradioval(radio){
    var radios=$("input[name='"+radio+"']");
    var val='';
    if(radios.length>0){
        for(var i=0;i<radios.length;i++){
            if(radios[i].checked==true){
                val=radios[i].value;
                break;
            }
        }
    }
    return val;
}
//循环radio赋值
function redio_chk(objs,val){
    if(objs.length>0) {
        for (var i = 0; i < objs.length; i++) {
            if(objs.eq(i).val()==val){
                objs.eq(i).prop('checked', 'true');
            }
        }
    }
}
//循环checkbox赋值
function checkbox_chk(objs,vals){
    vals=vals.split(",");
    if(objs.length>0) {
        for (var i = 0; i < objs.length; i++) {
            if(vals.toString().indexOf(objs.eq(i).val().toString())>-1){
                objs.eq(i).prop('checked', 'true');
            }
        }
    }
}

//浮动框
function gLayerTips(con, th){
    layer.open({
        type: 4,
        tips: [2, '#3595CC'],
        content: [con, $(th).parent()] //数组第二项即吸附元素选择器或者DOM
    });
    $(".layui-layer-shade").remove();
    setTimeout(function(){layer.closeAll()},3000);
}