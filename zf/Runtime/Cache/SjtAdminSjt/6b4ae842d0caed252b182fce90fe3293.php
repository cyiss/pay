<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript">
function clearNoNum(obj)
{
	//先把非数字的都替换掉，除了数字和.
	obj.value = obj.value.replace(/[^\d.]/g,"");
	//必须保证第一个为数字而不是.
	obj.value = obj.value.replace(/^\./g,"");
	//保证只有出现一个.而没有多个.
	obj.value = obj.value.replace(/\.{2,}/g,".");
	//保证.只出现一次，而不能出现两次以上
	obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
}
</script>
<style type="text/css">
#listuser{
	margin-top:10px;
	}
#listuser tr td{
	height:60px;
	text-align:left;
	padding-left:20px;
	}	
</style>
</head>

<body>
<form name="Form1" method="post" action="/SjtAdminSjt_Tikuan_tkszedit.html">
<div style="width:100%; margin:0px auto; margin-top:10px; text-align:center; height:auto; font-size:20px; font-weight:bold;">提款设置
</div>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
<table cellpadding="0" cellspacing="0" border="0" id="listuser">
<tr>
<td>
单笔提款最小金额：<input type="text" size="20" name="minmoney" value="<?php echo ($vo["minmoney"]); ?>" onkeyup="clearNoNum(this);">&nbsp;<span style="color:#F00">100的整数倍</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
单笔提款最大金额：<input type="text" size="20" name="maxmoney" value="<?php echo ($vo["maxmoney"]); ?>" onkeyup="clearNoNum(this);">&nbsp;<span style="color:#F00">100的整数倍</span>
</td>
</tr>
<tr>
<td>
每天提款上限金额：<input type="text" size="20" name="mtsxmoney" value="<?php echo ($vo["mtsxmoney"]); ?>" onkeyup="clearNoNum(this);">&nbsp;<span style="color:#F00">100的整数倍</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
每天提款次数：<input type="text" size="20" name="mttkcs" value="<?php echo ($vo["mttkcs"]); ?>" onkeyup="clearNoNum(this);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
提款提醒邮箱：<input type="text" size="40" name="Email" value="<?php echo ($vo["Email"]); ?>">
</td>
</tr>
<tr>
<td>
可添加委托提款银行最大个数：<input type="text" size="20" name="wtyh" value="<?php echo ($vo["wtyh"]); ?>" onkeyup="clearNoNum(this);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
提款状态设置：
<select name="tksz" id="tksz">
<option value="0">开启</option>
<option value="1">关闭</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

委托提款状态设置：
<select name="wttksz" id="wttksz">
<option value="0">开启</option>
<option value="1">关闭</option>
</select>

<script type="text/javascript">
$("#tksz").val('<?php echo ($vo["tksz"]); ?>');
$("#wttksz").val('<?php echo ($vo["wttksz"]); ?>');
</script>
</td>
</tr>
<tr>
<td>
开通T+0年费：<input type="text" size="20" name="tjlnf" value="<?php echo ($vo["tjlnf"]); ?>">&nbsp;&nbsp;&nbsp;&nbsp;
开通自动提款年费：<input type="text" size="20" name="zdtknf" value="<?php echo ($vo["zdtknf"]); ?>">&nbsp;&nbsp;&nbsp;&nbsp;
委托批量下发年费：<input type="text" size="20" name="wtplxfnf" value="<?php echo ($vo["wtplxfnf"]); ?>">
</td>
</tr>
</table><?php endforeach; endif; else: echo "" ;endif; ?>
<div style="width:100%; margin:0px auto; margin-top:10px; text-align:center; height:auto; font-size:20px; font-weight:bold;">
<input type="submit" value="确认修改">
</div>
</form>
</body>
</html>