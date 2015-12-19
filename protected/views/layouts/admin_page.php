<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : The Fences 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20100308
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>*** Admin Page ***</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="logo">
		<h1><a href="#">ADMIN TOKO ONLINE YIISHOP</a></h1>
	</div>
	 
	<!-- end #logo -->
	<div id="header">
		<div id="menu" style="float: right">
			<ul style="float: right">
				<?php if(isset(Yii::app()->user->username)){?>
				<li><a href="<?php echo $this->createUrl("admin/logout");?>">LOG OUT (<?php echo Yii::app()->user->username;?>)</a></li>
                                <?php } ?>
			</ul>	
		</div> 
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="main-content">
		<div id="content">
			
			
		  <div class="content-data">
					<!--content here-->
					<?php echo $content;?>
					<!--/content-->
		  </div>
		</div>
		<!-- end #content -->
		
		<!--sidebar-->
		<div id="sidebar">
			<ul>
				<li>
					<h2>MENU</h2>
					<ul>
						<li><a href="<?php echo $this->createUrl('product/admin');?>">Manage Product</a></li>
						<li><a href="<?php echo $this->createUrl('category/admin');?>">Manage Category</a></li>
						<li><a href="<?php echo $this->createUrl('manufacturer/admin');?>">Manage Manufacturer</a></li>
                                                <li><a href="<?php echo $this->createUrl('manageadmin/admin');?>">Manage Admin</a></li>
                                                <li><a href="<?php echo $this->createUrl('SupportTicket/admin');?>">Manage Support Ticket</a></li>
                                                <li><a href="<?php echo $this->createUrl('deal/admin');?>">Manage Deal</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!--/sidebar-->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	
	<!--footer-->
	<div id="footer">
		<p>Copyright (c) <?php echo date("Y");?> yiishop.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!--/footer -->
</body>
</html>