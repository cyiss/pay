<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<element>
	<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport"
				content="width=device-width, initial-scale=1">
					<title><?php echo C("WEB_NAME");?>-商户中心</title>
			<link rel="stylesheet" type="text/css"
				href="public/css/bootstrap.min.css?v=1483669556" />
			<link rel="stylesheet" type="text/css"
				href="public/css/metisMenu.min.css?v=1483669556" />
			<link rel="stylesheet" type="text/css"
				href="public/css/dataTables.bootstrap.css?v=1483669556" />
			<link rel="stylesheet" type="text/css"
				href="public/css/sb-admin-2.css" />
						<link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css?v=1483670719" rel="stylesheet">
	<style type="text/css">
	td{
	font-size: 14px
	}
	</style>
	<script type="text/javascript"
	src="public/js/jquery.min.js?v=1483670095">
	</script>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#menu div").addClass("menu_bg_y");
	$("#menu div:eq(4)").addClass("menu_bg");

	$("#menu_x > div > div:eq(2)").css("background-image","url(/Public/User/images/menumenu.gif)");
	$("#menu_x > div > div:eq(2) a").css("color","#F60");

	$("#zfyminput").click(function(e) {
        mypayurlname = $("#mypayurlname").val();
		if(mypayurlname == ""){
			alert("二级地址名称不能为空！");
			return false;
		}else{
			//////////////////////////////////////////////////////////////////////
			$.ajax({
			  type:'POST',
			  url:'/User_Index_addskym.html',
			  data:"mypayurlname="+mypayurlname,
			  dataType:'text',
			  success:function(str){
				   if(str == "1"){
					   alert("名称已存在，请选择其它名称");
					   $("#mypayurlname").focus();
					   }else{
						   if(str == "2"){
							   alert("二级地址名称不能为空！");
							   $("#mypayurlname").focus();
							   }else{
								   if(str == "3"){
									   alert("修改成功！");
									   location.href = location.href;
									   }else{
									   alert("修改失败！");
									   }
								   }
						   }
				  },
			  error:function(){
				  alert("处理失败！");
				  }
			  });
			/////////////////////////////////////////////////////////////////////
		}
    });
});
</script>
		</head>
		<body style="margin-top: -20px">
			<div id="wrapper"><!-- Navigation -->
				<nav class="navbar navbar-default navbar-static-top"
					role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle"
							data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">
								Toggle navigation
							</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/User"><?php echo C("WEB_NAME");?></a>
					</div><!-- /.navbar-header -->
					<ul class="nav navbar-top-links navbar-right"><!-- /.dropdown -->
						<li class="dropdown">
							<a class="dropdown-toggle"
								data-toggle="dropdown" href="#">
								<?php echo ($_SESSION['UserName']); ?>
								<i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<a href="/User_Index_aqxx.html">
										<i class="fa fa-user fa-fw"></i>
										安全设置
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a
										href="/User_Index_ExitLogin.html">
										<i
											class="fa fa-sign-out fa-fw">
										</i>
										退出登录
									</a>
								</li>
							</ul><!-- /.dropdown-user -->
						</li><!-- /.dropdown -->
					</ul><!-- /.navbar-top-links -->
                                             <div class="navbar-default sidebar"  role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li> <a href="/User"> <i class="fa fa-dashboard fa-fw"> </i> 首页 </a> </li>
      <li> <a href="#"> <i class="fa fa-bar-chart-o fa-fw"> </i> 交易管理 <span class="fa arrow"></span> </a>
        <ul class="nav nav-second-level">
         <li><a href="User_Index_wyjyjl.html"> 交易记录 </a> </li>
         <li><a href="User_Index_jltj.html"> 记录统计 </a> </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
      <li> <a href="#"> <i class="fa fa-rmb fa-fw"></i> 财务管理 <span class="fa arrow"></span> </a>
        <ul class="nav nav-second-level">
         <li><a href="User_Index_tkyh_banktype_0.html"> 银行设置 </a> </li>
         <li><a href="User_Index_tktx.html"> 申请提现 </a> </li>
         <li><a href="User_Index_tkjl.html"> 提现记录 </a> </li>
         <li><a href="User_Index_zdjsb.html"> 自动提款记录 </a> </li>
         <li><a href="User_Index_zjbdjl.html"> 资金记录 </a> </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
	  <li>
	  <?php switch($_SESSION['UserType']): case "5": ?><li>  <a href="#"> <i class="fa fa-user fa-fw"></i> 分润管理 <span class="fa arrow"></span> </a>
        <ul class="nav nav-second-level">
   <li><a href="/User_Index_tjyg.html"> 分润管理 </a> </li>
  
	</ul>
        <!-- /.nav-second-level -->
      </li><?php break;?>
    <?php default: endswitch;?>
	  </li>
      <li>
      <a href="#"> <i class="fa fa-user fa-fw"></i> 用户管理 <span class="fa arrow"></span> </a>
      <ul class="nav nav-second-level">
       <li><a href="User_Index_shjk.html"> 接口信息 </a> </li>
       <li><a href="User_Index_shtd.html"> 通道信息 </a> </li>
        <li><a href="User_Index_skym.html">收款主页</a>
        </li>
       <li><a href="User_Index_sjtgg.html"> 平台公告 </a> </li>
      </ul>
      <!-- /.nav-second-level -->
      </li>
      <li> <a href="#"> <i class="fa fa-cogs fa-fw"></i> 系统管理 <span class="fa arrow"></span> </a>
        <ul class="nav nav-second-level">
         <li><a href="/User_Index_dllist.html"> 登录记录 </a> </li>
         <li><a href="/User_Index_aqxx.html"> 安全设置 </a> </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
    </ul>
  </div>
  <!-- /.sidebar-collapse -->
</div>

                                             <!-- /.navbar-static-side -->
				</nav>
				<div id="page-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header">
								收款主页
								</h1>
						</div><!-- /.col-lg-12 -->
					</div>

					<div class="row">
						<div class="panel panel-default">
							<div class="panel-body">
</div>


   <table class="table table-striped table-bordered table-hover text-center">


							<div class="col-lg-12">
								<div class="alert alert-info"
									role="alert">
									<strong>
										可以生成收款链接发给朋友进行收款，常用于个人站点。
									</strong>
								</div>
							</div>

								 
								<div class="form-group-separator"></div>

<div>
<?php if($if == 0): ?><div>
请输入支付页面二级地址名称：<span style="color:#999; font-size:30px;">http://<?php echo ($web_url); ?>/</span>
<input type="text" class="input_text" name="mypayurlname" id="mypayurlname" style="width:200px;" value="" style="vertical-align:middle; color:#06F" />
    &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="form-group-separator"></div>
								<input type="submit" class="btn btn-primary "id="zfyminput" value="提交" />
						             </div>

 <?php else: ?>
  <div class="jbxx" style="height:50px;clear:both;line-height:50px;">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;此地址支持电脑手机端访问,可使用网银、支付宝、微信、QQ钱包、财付通，进行在线收款。
    </div>
  <div class="jbxx" style="height:50px;clear:both;line-height:50px;">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;支付地址：<a href="<?php echo ($weburl); ?>" target="_blank"><?php echo ($weburl); ?></a>
    </div><?php endif; ?>
</div>






           </table>
    </div>

     <div class="jbxx" style="text-align:center; color:#F00; ">
     <?php echo ($page); ?>
    </div>
					</div>
				</div>

				<script type="text/javascript"
					src="public/js/bootstrap.min.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/metisMenu.min.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/jquery.dataTables.min.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/dataTables.bootstrap.min.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/sb-admin-2.js?v=1483670095">
				</script>
				<script type="text/javascript"
					src="public/js/wyjyjl.js?v=1483670095">
				</script>
		</body>
	</html>
</element>