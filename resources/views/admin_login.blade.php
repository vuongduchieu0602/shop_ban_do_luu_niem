<!DOCTYPE html>
<?php
  if(isset($_POST['submit'])){
     $name;
     $captcha;
     if(isset($_POST['name'])){
        $name = $_POST['name'];
     }
     if(isset($_POST['g-recaptcha-response'])){
        $captcha = $_POST['g-recaptcha-response'];
     }
     if(!$captcha){
        echo '<h2>Hay xac nhan CAPTCHA</h2>';
     }else{
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret6LerqT8bAAAAAPfBFrNa_aPYJfRqWLXWNgKvEY-G&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success == false){
           echo '<h2>SPAM!</h2>';
        }else{
           echo '<h2>'.$name.' Khong phai robot :)</h2>';
        }
     }
  }
?>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">

<div class="w3layouts-main">
	<h2>Đăng nhập</h2>
	<?php
		$message = Session::get('message');
		if($message)
		{
			echo '<span class="text-alert">'.$message.'</span>';
			Session::put('message',null);
		}
	?>
		<form action="{{URL::to('/admin-dashboard')}}" method="post">
			{{ csrf_field() }}
			<input type="text" class="ggg" name="admin_email" placeholder="Nhập email" required="">
			<input type="password" class="ggg" name="admin_password" placeholder="Nhập password" required="">
			<span><input type="checkbox" />Ghi nhớ đăng nhập</span>
			<h6><a href="#">Quên mật khẩu ?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập" name="login">
				<div class="g-recaptcha" data-sitekey="6LerqT8bAAAAAGD-y1loiLLebTT9r7FibXU4TWfa"></div>
		</form>
		<p>Bạn chưa có tài khoản ?<a href="registration.html">Tạo tài khoản</a></p>
		<br>
		<a class="circle facebook" href=" {{URL::to('/login-facebook')}} ">
			<i class="fa fa-facebook-square fa-2x"></i>
		</a>
		<a class="circle twitter" href="#">
			<i class="fa fa-twitter-square fa-2x"></i>
		</a>
		<a class="circle google" href="{{URL::to('/login-google')}}">
			<i class="fa fa-google-plus-official fa-2x"></i>
		</a>
</div>
</div>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{('public/backend/js/jquery.scrollTo.js')}}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
	window.onload = function() {
	  var recaptcha = document.forms["contactForm"]["g-recaptcha-response"];
	  recaptcha.required = true;
	  recaptcha.oninvalid = function(e) {
	
		alert("Please complete the captcha");
	   }
	}
</script>
</body>
</html>
