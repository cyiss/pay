<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo C("WEB_NAME");?>管理后台登录</title>
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript">
function check(){
	
	if($("#UserName").val() == ""){
		alert("用户名不能为空！");
		$("#UserName").focus();
		return false;
	}
	
	if($("#PassWord").val() == ""){
		alert("密码不能为空！");
		$("#PassWord").focus();
		return false;
	}
	
	
	/////////////////////////////////////////////////////////////////////
	$.ajax({
			type:'POST',
			url:"/SjtAdminSjt_Sjtadminsjt_denglu.html",
			data:"UserName="+ $("#UserName").val() + "&PassWord=" + $("#PassWord").val(),
			dataType:'text',
			success:function(data){
				if(data==1){
					alert("登录成功!");
					location.href = "/SjtAdminSjt";
				}else{
					
					alert("账号或密码错误！"+data);
					
					}
				///////////////////////////////////
				},
			error:function(str){
				//////////////////////////
				}	
			});
	////////////////////////////////////////////////////////////////////
	
	return false;
	
}
</script>
<style type="text/css">
body{
	width:100%;
	height:100%;
	margin:0px auto;
	}
#LoginContent{
	width:1000px;
	height:662px;
	margin:0px auto;
	background-image:url(/Public/SjtAdminSjt/images/login_background_images.jpg);
	position:relative;
	}	
#Login_div{
	width:430px;
	height:240px;
	position:absolute;
	/*border:1px solid #000;*/
	top:335px;
	left:280px;
	}	
.yhm{
	width:70%;
	height:50px;
	line-height:50px;
	/*border:1px solid #000;*/
	margin:0px auto;
	text-align:left;
	margin-top:30px;
	font-size:18px;
	color:#036;
	}	
.yhm input[type='text'], .yhm input[type='password']{
	width:220px;
	height:20px;
	font-size:16px;
	color:#069;
	font-weight:bold;
	border:1px solid #F5F5F5;
	}	
</style>
</head>

<body>
<form name="Form1" method="post" action="" onsubmit="return check()">
<div id="LoginContent">
     <div id="Login_div">
         <div class="yhm">用户名：<input type="text" name="UserName" id="UserName" /></div>
         <div class="yhm" style="margin-top:20px;">密&nbsp;码：<input type="password" name="PassWord" id="PassWord" /></div>
         <div class="yhm" style="margin-top:20px; width:70%; text-align:right;">
            <input type="image" src="/Public/SjtAdminSjt/images/dl.gif">&nbsp;&nbsp;&nbsp;&nbsp;<img src="/Public/SjtAdminSjt/images/cz.gif" onclick="javascript:document.Form1.reset();">
         </div>
     </div>
</div>
</form>

</body>
</html>