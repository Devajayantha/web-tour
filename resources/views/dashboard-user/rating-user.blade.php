<!DOCTYPE html>
<html>
<head>
	
	<title>DASHBOARD - Cek Booking</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" href="{{asset('img/logo.png')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
	<link rel="stylesheet" href="{{asset('css/star-rating.css')}}">      
	<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard-user.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
</head>
<body>
	<div class="sidebar" id="sidebar">
		<div class="logo">
			<p class="simple-text">DASHBOARD</p>
		</div>

		<ul class="nav-item">
			<li>
				<a href="/home-user">
					<i class="fas fa-shopping-cart"></i>
					<span>Booking</span>
				</a>
			</li>
			<li>
				<a  href="/payment-user">
					<i class="fa fa-print"></i>
					<span>Payment</span>
				</a>
            </li>
			<li>
                <a href="/rating-user" class="selected">
                    <i class="far fa-comments"></i>
                    <span>Message</span>
                </a>
            </li>			
		</ul>
	</div>


	<!-- HEADER -->
	<div class="nav-header" id="nav-header">
		<ul class="nav-menu">
			<li id="navToggle" class="navToggle">
				<a href="#" id="navToggle">
					<span class="fa fa-bars"></span>
				</a>
			</li>
			<li class="font-judul">
				<a href="#">	
					<span>Booking</span>
				</a>
			</li>
			<li class="logout">
				<a href="/">	
					<i class="fas fa-sign-out-alt"></i>
					<span>Log Out</span>
				</a>
			</li>
		</ul>
	</div>

	<!-- ISI --> 
	<div class="content" id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<h4 class="tittle">News Booking Payment</h4>
						<p class="category">Dashboard Payment</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card card-modif">
						<h4 class="tittle">News Booking Payment</h4>
						<p class="category">Find Your ID. Get Apload proof of payment and Waiting for checking about your payment</p>
						<form action="" method="post">
							<input id="rating-input" type="text" title=""/>
							<button id="btn-rating-input" type="button" class="btn btn-primary">Toggle Disable</button>							
						</form>

					</div>
				</div>
			</div>
		</div>
	</div> 
  </div>
  <script>
	$(document).ready(function(){
		var $inp = $('#rating-input');

		$inp.rating({
			min: 0,
			max: 5,
			step: 1,
			size: 'lg',
			showClear: false
		});

		$('#btn-rating-input').on('click', function () {
			$inp.rating('refresh', {
				showClear: true,
				disabled: !$inp.attr('disabled')
			});
		});
	});
</script>
	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/star-rating.js')}}"></script>
	<script src="{{asset('js/rating-stars.js')}}"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/dashboard-user.js')}}"></script>
	
	
    
</body>
</html>