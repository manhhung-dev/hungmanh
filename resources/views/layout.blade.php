<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Thể Thao</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="public/frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/frontend/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/frontend/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/frontend/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="public/frontend/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0343405551</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> shopthethao@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('trang-chu')}}"><img width="400px" height="100px" src="{{URL::to('public/frontend/images/home/shopthethao.png')}}" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							
								<li><a href="#"><i class="fa fa-star"></i> Yêu Thích</a></li>
								<?php
									$customer_id=Session::get('customer_id');
									$shipping_id=SessIon::get('shipping_id');
									if($customer_id!=null && $shipping_id==null){
								?>
									<li><a href="{{URL::to('checkout')}}"><i class="fa fa-crosshairs"></i> Thanh Toán</a></li>	
									<?php									
									}elseif($customer_id!=null &&$shipping_id!=null){
									?>
									<li><a href="{{URL::to('payment')}}"><i class="fa fa-crosshairs"></i> Thanh Toán</a></li>
								<?php
									}else{
									?>
									<li><a href="{{URL::to('login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh Toán</a></li>
								<?php
									}
								?>
								
								<li><a href="{{URL::to('show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a></li>
								<?php
									$customer_id=Session::get('customer_id');
									if($customer_id!=null){
								?>
									<li><a href="{{URL::to('logout-checkout')}}"><i class="fa fa-lock"></i> Đăng Xuất</a></li>		
									<?php									
									}else{
									?>
									<li><a href="{{URL::to('login-checkout')}}"><i class="fa fa-lock"></i> Đăng Nhập</a></li>
								<?php
									}
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('trang-chu')}}" class="active">Trang Chủ</a></li>
								<li class="dropdown"><a href="{{URL::to('trang-chu')}}">Sản Phẩm<i ></i></a>
                                   
                                </li> 
								
								<li><a href="{{URL::to('show-cart')}}">Giỏ Hàng</a></li>
								<li><a href="contact-us.html">Liên Hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
					<form action="{{URL::to('search')}}" method="post">
						{{csrf_field()}}
						<div class="search_box pull-right">
							<input type="text" name="keywords_submit" placeholder="Tìm Kiếm Sản Phẩm"/>
							<input type="submit" style="margin-top:0 ;color:white" name="search_items" class="btn btn-info btn-primary" value="Tìm Kiếm">
						</div>
					</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<!-- <li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li> -->
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>THETHAO </span>SHOP</h1>
									<h2>Thời Trang - Phong Cách - Chất Lượng</h2>
									<p>Shop Đồ Thể Thao</p>
									<button type="button" class="btn btn-default get"><a style="color:white; text-decoration:none" href="{{URL::to('/')}}">Mua Ngay</a></button>
								</div>
								<div class="col-sm-6">
									<img src="{{URL::to('public/frontend/images/home/tải xuống.jpg')}}" width="95%" height="90%" class="girl img-responsive" alt="" />
									
								</div>
							</div>
						
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh Mục Sản Phẩm</h2>
						
						
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach ($category as $key =>$cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="{{URL::to('danh-muc-san-pham/'.$cate->category_id)}}">
											{{$cate->category_name}}
										</a>
									</h4>
								</div>
							</div>
						@endforeach
						</div><!--/category-products-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row-sm-8">
					<div class="col-sm-8">
						<div class="companyinfo">
							<h2><span>TheThao</span> SHOP</h2>
							<p>Shop Đồ thể thao</p>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch Vụ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Trợ Giúp</a></li>
								<li><a href="#">Liên Hệ</a></li>
								<li><a href="#">Tình Trạng Đơn Hàng</a></li>
								<li><a href="#">Đổi Địa Chỉ</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>THETHAO Shop</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Nhập Email Của Bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nhập email để luôn cập nhật các chương trình mới nhất của chúng tôi</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<!-- <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p> -->
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>