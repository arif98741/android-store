	<aside>
				<div id="sidebar" class="nav-collapse ">
					<!-- sidebar menu start-->
					<ul class="sidebar-menu">
						<li  >
							<a class="" href="<?php echo base_url();?>" target="1">
								<i class="fa fa-home"></i>
								<span style="color: yellow;">হোম পেইজ</span>
							</a>
						</li>
						<li >
							<a class="" href="<?php echo base_url();?>dashboard">
								<i class="fa fa-dashboard"></i>
								<span>ড্যাশবোর্ড</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="javascript:;" class="">
								<i class="fa fa-pencil"></i>
								<span>আবেদন সমূহ</span>
								<span class="menu-arrow arrow_carrot-right"></span>
							</a>
							<ul class="sub">
								<li><a class="" href="<?php echo base_url();?>application_withfee">ফি সহ আবেদন</a></li>
								<li><a class="" href="<?php echo base_url();?>application_withoutfee">ফি ছাড়া আবেদন </a></li>								
							</ul>
						</li>
					 <li  >
							<a class="" href="<?php echo base_url();?>fees_receive">
								<i class="fa fa-money"></i>
								<span >ফিস গ্রহন</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="javascript:;" class="">
								<i class="fa fa-th-large"></i>
								<span>ফলাফল</span>
								<span class="menu-arrow arrow_carrot-right"></span>
							</a>
							<ul class="sub">
								<li><a class="" href="#">ফলাফল ইপুট</a></li>
								<li><a class="" href="#">মেধাক্রম নির্ধারণ</a></li>
							</ul>
						</li>
						
						<li class="sub-menu">
							<a href="javascript:;" class="">
								<i class="fa fa-print"></i>
								<span>প্রতিবেদন</span>
								<span class="menu-arrow arrow_carrot-right"></span>
							</a>
							<ul class="sub">
								<li><a class="" href="<?php echo base_url();?>application_report"> আবেদন প্রতিবেদন</a></li>
								<li><a class="" href="<?php echo base_url();?>fees_report">ফিস প্রতিবেদন</a></li>
							</ul>
						</li>
					 	<li  class="sub-menu">
							<a href="javascript:;" class="">
								<i class="fa fa-cog"></i>
								<span>সেটিংস</span>
								<span class="menu-arrow arrow_carrot-right"></span>
							</a>
							<ul class="sub">
								<li><a class="" href="<?php echo base_url();?>switch_system">সিসেটম চালু-বন্ধ</a></li>
								<li><a class="" href="<?php echo base_url();?>switch_admit">প্রবেশপত্র বিতরণ </a></li>
								<!--
								<li><a class="" href="<?php echo base_url();?>apply_rule">আবেদনের নিয়মাবলী</a></li>-->
								<li><a class="" href="<?php echo base_url();?>pay_rule">নির্দেশনা</a></li>
								<li><a class="" href="<?php echo base_url();?>apply_fee">আবেদন ফি</a></li>
								
								<!--
								<li><a class="" href="<?php echo base_url();?>admit_rule">প্রবেশপত্র  নিয়মাবলী</a></li>
								<li><a class="" href="<?php //echo base_url();?>buy_sms">এসএমএস ক্রয় (0)</a></li>-->

							</ul>
						</li>

						<li  class="sub-menu"  onclick="window.location='<?php echo base_url();?>public_notice'">
							<a href="<?php echo base_url();?>public_notice" class="">
								<i class="fa fa-th-large"></i>
								<span onclick="window.location='<?php echo base_url();?>public_notice'">পাবলিক নোটিশ</span>
							</a>

						</li>

						
						<li  class="sub-menu">
							<a href="javascript:;" class="">
								<i class="fa fa-user"></i>
								<span>ইউজার</span>
								<span class="menu-arrow arrow_carrot-right"></span>
							</a>

							<ul class="sub">
								<li><a class="" href="<?php echo base_url();?>profile">প্রোফাইল</a></li>
								<li><a class="" href="<?php echo base_url();?>logout">লগ আউট</a></li>
							</ul>
						</li>




						<li  class="sub-menu">
							<a href="javascript:;" class="">
								<i class=""></i>
								<span style="font-size: 14px">হেল্প লাইন</span>
								01777615690
								
							</a>

						</li>

						
						
					</ul>
					<!-- sidebar menu end-->
				</div>
			</aside>