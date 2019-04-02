
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Bulk SMS Online">
		<meta name="keyword" content="explore, sms, bulk, bangladesh, school, college, attendance">
		<link rel="shortcut icon" href="img/favicon.png">
		<title>এক্সপ্লোর ভর্তি ব্যবস্থাপনা সিস্টেম</title>
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url();?>assets/back/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/css/jquery.dataTables.css">
		<!-- font icon -->
		<link href="<?php echo base_url();?>assets/back/css/elegant-icons-style.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/back/css/font-awesome.min.css" rel="stylesheet" />
		<!-- Custome -->
		<link href="<?php echo base_url();?>assets/back/css/style.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/back/css/style-responsive.css" rel="stylesheet" />
	</head>
	<body>
		<!-- container section start -->
		<section id="container" class="">
			<header class="header dark-bg">
				<div class="toggle-nav">
					<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
				</div>
				<!--logo start-->
				<a href="<?php echo base_url();?>dashboard" class="logo">এক্সপ্লোর  <span class="lite">ভর্তি ব্যবস্থাপনা সিস্টেম</span></a>
				<!--logo end-->
				<div class="top-nav notification-row">
					<!-- notificatoin dropdown start-->
					<ul class="nav pull-right top-menu">
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="username"><?php echo $this->session->user_organization_head;?></span>
								<b class="caret"></b><span class="profile-ava">
									<img alt="" height="30px" width='30px' src="<?php echo base_url();?>uploads/user/<?php echo $this->session->user_image;?>">
								</span>
							</a>
							<ul class="dropdown-menu extended logout">
								<div class="log-arrow-up"></div>
								<li class="eborder-top">
									<a href="<?php echo base_url();?>profile"><i class="icon_profile"></i> প্রোফাইল</a>
								</li>
								
								<li>
									<a href="<?php echo base_url();?>logout"><i class="icon_key_alt"></i> লগ আউট</a>
								</li>
							</ul>
						</li>
						<!-- user login dropdown end -->
					</ul>
					<!-- notificatoin dropdown end-->
				</div>
			</header>