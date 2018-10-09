/**
 * @Title: Config
 * @Package package_name
 * @Description: todo(动态表单_组件配置文件-生成添加页面专用JS)
 * @author 管理员
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2018-09-29 16:14:30
 * @version V1.0
*/

$(function(){
	initTableWNEW();
	checkidcard();
    var box = navTab.getCurrentPanel();
	var formname='MisAutoLxn';
	box = $('form[id^="'+formname+'"]',box)?$('form[id^="'+formname+'"]',box):box;
});