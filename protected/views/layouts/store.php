<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Online DVD &amp; Toys store</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/form.css" />
	</head>
	<body>
		<div id="wrapper">
			<div id="inner">
				<div id="header">
					<h1><img src="<?php echo Yii::app() -> request -> baseUrl; ?>/images/head2.jpg" width="100%" height="63" alt="Online Movie Store" /></h1>
					<div id="nav">
						<a href="<?php echo $this->createUrl("/account");?>">your account</a> | <a href="<?php echo $this->createUrl("/cart");?>">view cart</a> | <a href="#">how to buy</a>
					</div>
					<!-- / nav -->
					<a href="#"><img src="<?php echo Yii::app() -> request -> baseUrl; ?>/images/ck_header.jpg" width="100%" height="145" alt="Online Movie Store" /></a>

				</div>
				<!-- / header -->
				<dl id="browse">
					<dt>
						Full Category Lists
					</dt>
					<?php
					/*ambil semua data kategori*/
					$model=Category::model()->findAll();
					/*foreach data kategori*/
					foreach ($model as $data):
					?>
					<dd>
						<?php 
							/*buat link produk berdasarkan kategori*/
							echo CHtml::link(
								/*untuk label link*/
								CHtml::encode($data -> category_name), 
								/*untuk url link*/
								array(
								   'product/category', 
								   'id' => $data -> category_id, 
								   'c' => $data -> category_name
								)); ?>
					</dd>
					<?php endforeach; ?>
					<dt>
						Search Your Favourite Movie
					</dt>
					<dd class="searchform">
						<form action="?" method="get">
							<div>
								<select name="cat">
									<option value="-" selected="selected">CATEGORIES</option>
									<option value="-">------------</option>
								</select>
							</div>
							<div>
								<input name="q" type="text" value="DVD TITLE" class="text" />
							</div>
							<div class="softright">
								<input type="image" src="images/btn_search.gif" />
							</div>
						</form>
					</dd>
				</dl>
				<div id="body">
					<!-- breadcrumbs-->
					<div style="margin-left: 5px;">
						<!--jika $breadcrumbs tersedia maka-->
						<?php if(isset($this->breadcrumbs)):?>
						<!--tampilkan breadcrumbs-->
						<?php $this -> widget('zii.widgets.CBreadcrumbs', array('links' => $this -> breadcrumbs, )); ?>
						<!--end if-->
						<?php endif ?>
					</div>
					<!-- /breadcrumbs -->

					<div class="inner">
						<!--content here-->
						<?php echo $content;?>
						<!--/content-->
						
						<!-- / inner -->
					</div>
				</div>
				<div style=" border:1px solid #CCC;background:white; margin-top:2px;   width:250px; float:right; margin-left:3px;">

					<div style="border: solid 3px #FFFFFF;">

						Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat

					</div>

				</div>
				<div style=" clear:right;border:1px solid #CCC;background:white; margin-top:2px;   width:250px; float:right; margin-left:3px;">
					<div style="border: solid 3px #FFFFFF; ">
						Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
					</div>

				</div>
				<br>
				<div style="clear:right;   margin-top:2px;   width:250px; float:right; margin-left:3px;">
					&nbsp;
				</div>
				<!-- / body -->
				<div class="clear"></div>
				<div id="footer" style="text-align: center;">
					<div class="fleft">
						<p>
							Copyright &copy; <?php echo date("Y"); ?>. yiishop.com
						</p>
					</div>
					<div class="fright">
						<p>
							More <a href="http://www.websitetemplatesonline.com" title="WTO - website templates and Flash templates">Free Web Templates</a> at WTO. All <a href="http://www.magentothemesworld.com" title="Best Magento Templates">premium Magento themes</a> at magentothemesworld.com!
						</p>
					</div><div class="fclear"></div>
				</div>
				<!-- / footer -->
			</div>
			<!-- / inner -->
		</div>
		<!-- / wrapper -->
	</body>
</html>