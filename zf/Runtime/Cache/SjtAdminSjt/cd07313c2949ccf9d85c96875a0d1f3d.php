<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/Style/default.css" />
<script type="text/javascript" src="/Public/SjtAdminSjt/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/SjtAdminSjt/Style/menu.js"></script>
<title><?php echo C("WEB_NAME");?>管理后台</title>
<dl id="header">
<div class="webname"><?php echo C("WEB_NAME");?>-管理中心</div>
	<dd>
		
	  <li><a href="http://<?php echo C("WEB_URL");?>/" target="_blank">首页</a>&nbsp;|&nbsp;</li>
		<li><a href="/SjtAdminSjt_Sjtadminsjt_tuichu.html" target="_self">退出</a>&nbsp;|&nbsp;</li>
        <li><a href="/SjtAdminSjt_System_xgmm.html" onClick="go_cmdurl('修改密码',this)" target="content3" title="修改密码">修改密码</a>&nbsp;|&nbsp;</li>
	</dd>
</dl>
<div id="contents">
	<div class="left">
		
		<div class="menu_top"></div>
		<div class="menu" id="TabPage3">
			<ul id="TabPage2">
				<li id="left_tab1" class="Selected" onClick="javascript:border_left('TabPage2','left_tab1');" title="系统">系统</li>
				<li id="left_tab2" onClick="javascript:border_left('TabPage2','left_tab2');" title="商户">商户</li>		
				<li id="left_tab3" onClick="javascript:border_left('TabPage2','left_tab3');" title="通道">通道</li>
				<li id="left_tab7" onClick="javascript:border_left('TabPage2','left_tab7');" title="网关">网关</li>
				<li id="left_tab4" onClick="javascript:border_left('TabPage2','left_tab4');" title="订单">订单</li>
				<li id="left_tab5" onClick="javascript:border_left('TabPage2','left_tab5');" title="提款">提款</li>
			</ul>
			<div id="left_menu_cnt">
				<ul id="dleft_tab1">
					<li id="now11" class="Selected"><a href="/SjtAdminSjt_System_czfl.html" onClick="go_cmdurl('充值费率',this);" target="content3" title="充值费率">充值费率</a></li>
					<li id="now12"><a href="/SjtAdminSjt_System_txfl_t_1.html" onClick="go_cmdurl('T+1',this);" target="content3" title="提现费率">提款费率（T+1）</a></li>
                    <li id="now12"><a href="/SjtAdminSjt_System_txfl_t_0.html" onClick="go_cmdurl('T+0',this);" target="content3" title="提现费率">提款费率（T+0）</a></li>
					<li id="now12"><a href="SjtAdminSjt_System_Diaodan.html" onClick="go_cmdurl('扣单设置',this);" target="content3" title="扣单设置">掉单设置</a></li>	
                    <li id="now12">--------------------------------------</li>					
				    <li id="now12"><a href="SjtAdminSjt_News_add_type_0.html" onClick="go_cmdurl('新增动态',this);" target="content3" title="新增动态">新增动态</a></li>	
                     <li id="now12"><a href="SjtAdminSjt_News_newslist_type_0.html" onClick="go_cmdurl('编辑动态',this);" target="content3" title="编辑动态">编辑动态</a></li>
                      <li id="now12">--------------------------------------</li>		
                     <li id="now12"><a href="SjtAdminSjt_News_add_type_1.html" onClick="go_cmdurl('新增新闻',this);" target="content3" title="新增新闻">新增新闻</a></li>	
                     <li id="now12"><a href="SjtAdminSjt_News_newslist_type_1.html" onClick="go_cmdurl('编辑新闻',this);" target="content3" title="编辑新闻">编辑新闻</a></li>	
                      <li id="now12">--------------------------------------</li>	
                     <li id="now12"><a href="SjtAdminSjt_News_add_type_2.html" onClick="go_cmdurl('新增公告',this);" target="content3" title="新增公告">新增公告</a></li>	
                     <li id="now12"><a href="SjtAdminSjt_News_newslist_type_2.html" onClick="go_cmdurl('编辑公告',this);" target="content3" title="编辑公告">编辑公告</a></li>		
                      <li id="now12">--------------------------------------</li>	
                     <li id="now12"><a href="SjtAdminSjt_News_add_type_3.html" onClick="go_cmdurl('新增常见问题',this);" target="content3" title="新增常见问题">新增常见问题</a></li>	
                     <li id="now12"><a href="SjtAdminSjt_News_newslist_type_3.html" onClick="go_cmdurl('编辑常见问题',this);" target="content3" title="编辑常见问题">编辑常见问题</a></li>					
				</ul>
				<ul id="dleft_tab2" style="display:none;">
					<li id="now11" class="Selected"><a href="/SjtAdminSjt_ShangHu_listuser.html" onClick="go_cmdurl('商户/代理商',this);" target="content3" title="商户/代理商">商户/代理商</a></li>
					<li id="now12"><a href="/SjtAdminSjt_ShangHu_listuserwjh.html" onClick="go_cmdurl('未激活',this);" target="content3" title="未激活">未激活</a></li>
                    <li id="now12"><a href="/SjtAdminSjt_ShangHu_zjbdjl.html" onClick="go_cmdurl('资金变动记录',this);" target="content3" title="资金变动记录">资金变动记录</a></li>
				</ul>
				<ul id="dleft_tab3" style="display:none;">
					<li id="now36"><a href="/SjtAdminSjt_Tongdao_Index_apiname_alipay.html" onClick="go_cmdurl('支付宝',this)" target="content3" title="支付宝">支付宝</a></li>
					<li id="now36"><a href="/SjtAdminSjt_Tongdao_Index_apiname_alipaywap.html" onClick="go_cmdurl('支付宝wap',this)" target="content3" title="支付宝wap">支付宝wap</a></li>
                    <li id="now35"><a href="/SjtAdminSjt_Tongdao_Index_apiname_qqbao.html" onClick="go_cmdurl('QQ钱包',this)" target="content3" title="QQ钱包">QQ钱包</a></li>
                    <li id="now35"><a href="/SjtAdminSjt_Tongdao_Index_apiname_qqbaowap.html" onClick="go_cmdurl('QQ钱包wap',this)" target="content3" title="QQ钱包wap">QQ钱包wap</a></li>
                    <li id="now39"><a href="/SjtAdminSjt_Tongdao_Index_apiname_wxdemo.html" onClick="go_cmdurl('微信',this)" target="content3" title="微信">微信</a></li>
                    <li id="now39"><a href="/SjtAdminSjt_Tongdao_Index_apiname_wftwxwap.html" onClick="go_cmdurl('微信wap',this)" target="content3" title="微信wap">微信wap</a></li>
					 <li id="now30"><a href="/SjtAdminSjt_Tongdao_Index_apiname_yibao.html" onClick="go_cmdurl('易宝',this)" target="content3" title="易宝">易宝</a></li>
					 <li id="now31"><a href="/SjtAdminSjt_Tongdao_Index_apiname_huanxunips.html" onClick="go_cmdurl('环迅IPS',this)" target="content3" title="环迅IPS">环迅IPS</a></li>
				 
					 
				</ul>
				<ul id="dleft_tab4" style="display:none;">
					<li id="now41"><a href="/SjtAdminSjt_Jilu_wyjl.html" onClick="go_cmdurl('网银交易记录',this)" target="content3" title="网银交易记录">网银交易记录</a></li>
					<li id="now42"><a href="/SjtAdminSjt_Jilu_gamejl.html" onClick="go_cmdurl('点卡交易记录',this)" target="content3" title="点卡交易记录">点卡交易记录</a></li>
                    <li id="now42"><a href="/SjtAdminSjt_Jilu_ptzzjl.html" onClick="go_cmdurl('平台转账记录',this)" target="content3" title="平台转账记录">平台转账记录</a></li>
                    <li id="now42"><a href="/SjtAdminSjt_Jilu_ddjl.html" onClick="go_cmdurl('掉单记录',this)" target="content3" title="掉单记录">掉单记录</a></li>
                     <li id="now42"><a href="/SjtAdminSjt_Jilu_zjjejl.html" onClick="go_cmdurl('增减金额记录',this)" target="content3" title="增减金额记录">增减金额记录</a></li>
                    <li id="now42"><a href="/SjtAdminSjt_Jilu_Tongji.html" onClick="go_cmdurl('交易统计',this)" target="content3" title="交易统计">交易统计</a></li>
                <li id="now42"><a href="/SjtAdminSjt_Jilu_XTongji.html" onClick="go_cmdurl('新交易统计',this)" target="content3" title="新交易统计">新交易统计</a></li>     
					
				</ul>
				<ul id="dleft_tab5" style="display:none;">
					<li id="now51"><a href="/SjtAdminSjt_Tikuan_tksz.html" onClick="go_cmdurl('提款设置',this)" target="content3" title="提款设置">提款设置</a></li>
					<li id="now52"><a href="/SjtAdminSjt_Tikuan_tkjl_T_1.html?sq_date=<?php echo ($sq_date); ?>&sq_date_js=<?php echo ($sq_date); ?>" onClick="go_cmdurl('提款记录（T+1）',this)" target="content3" title="提款记录">提款记录（T+1）</a></li>
					<li id="now53"><a href="/SjtAdminSjt_Tikuan_tkjl_T_0.html?sq_date=<?php echo ($sq_date); ?>&sq_date_js=<?php echo ($sq_date); ?>" onClick="go_cmdurl('提款记录（T+0）',this)" target="content3" title="提款记录">提款记录（T+0）</a></li>
                    <li id="now53"><a href="/SjtAdminSjt_Tikuan_wttkjl_T_1.html?sq_date=<?php echo ($sq_date); ?>&sq_date_js=<?php echo ($sq_date); ?>" onClick="go_cmdurl('委托提款记录（T+1）',this)" target="content3" title="委托提款记录（T+0）">委托提款记录（T+1）</a></li>
                    <li id="now53"><a href="/SjtAdminSjt_Tikuan_wttkjl_T_0.html?sq_date=<?php echo ($sq_date); ?>&sq_date_js=<?php echo ($sq_date); ?>" onClick="go_cmdurl('委托提款记录（T+0）',this)" target="content3" title="委托提款记录（T+0）">委托提款记录（T+0）</a></li>
				</ul>
				<ul id="dleft_tab7" style="display:none;">
				<li id="now55"><a href="/SjtAdminSjt_Wangguan_wgbank.html" onClick="go_cmdurl('网银切换',this)" target="content3" title="网银切换">网银切换</a></li>
					<li id="now56"><a href="/SjtAdminSjt_Wangguan_wggame.html" onClick="go_cmdurl('点卡切换',this)" target="content3" title="点卡切换">点卡切换</a></li>
			  </ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="menu_end"></div>
	</div>
	<div class="right">
	   <ul id="TabPage1">
			<li id="Tab1" class="Selected" onClick="javascript:switchTab('TabPage1','Tab1');" title="首页">用户</li>
			<li id="Tab2" onClick="javascript:switchTab('TabPage1','Tab2');">待审核商户</li> 
			<li id="Tab3" onClick="javascript:switchTab('TabPage1','Tab3');"><span id="dnow99" style="display:block; font-size:12px; font-weight:normal;">公吿</span></li>
	   </ul>
		<div id="cnt">
		  <div id="dTab1" class="Box">
		  <iframe src="SjtAdminSjt_ShangHu_listuser.html" name="content1" frameborder="0" scrolling="auto"></iframe>
		  </div>
			<div id="dTab2" class="HackBox Box">
			<iframe src="SjtAdminSjt_ShangHu_listuserwjh.html" name="content2" frameborder="0" scrolling="auto"></iframe>
			</div> 
			<div id="dTab3" class="HackBox Box">
			<iframe src="SjtAdminSjt_News_newslist_type_2.html" name="content3" id="content3" frameborder="0" scrolling="auto"></iframe>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="admin-foot">
<p>
copyright <?php echo C("WEB_NAME");?> all rights reserved 2016 知宇信息科技提供技术支持
</p>
</div>
</body>
</html>