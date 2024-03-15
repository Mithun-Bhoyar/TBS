<?php

session_start();
// require_once("includes/config.php");
$conn=mysqli_connect("localhost","root","1100","login");
$msg='';
if(isset($_POST['login'])){
	
	$time=time()-60;
	$ip_address=getIpAddr();
	$check_login_row=mysqli_fetch_assoc(mysqli_query($conn,"select count(*) as total_count from attempts where try_time>$time and ip_address='$ip_address'"));
	$total_attempts=$check_login_row['total_count'];
	if($total_attempts==3){
		$msg="too many failed attempts";
	}
	else{
		
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$sql="select*from users where email='".$email."' and password='".$password."'";
	$res=mysqli_query($conn,$sql);
//print_r($res);
	if(mysqli_num_rows($res)){
		$msg="login successfully";
		
		if($msg=="login successfully"){
			mysqli_query($conn,"delete from attempts where ip_address='".$ip_address."'");
				//You need to redirect
				header("Location: frontpage.php");
				exit();
			}
	}
	else{
		$total_attempts++;
		$remaining_attempts=3-$total_attempts;
		if($remaining_attempts==0){
			$msg="too many failed attempts try after 60 sec";
		}
		else{
			$msg="Please Enter Valid Login Details<br>".$remaining_attempts."remaining attempts";
		}

		$try_time=time();
		mysqli_query($conn,"insert into attempts(ip_address,try_time) values('$ip_address','$try_time')");
		
	}
	}

}

function getIpAddr(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
       $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
       $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
       $ipAddr=$_SERVER['REMOTE_ADDR'];
    }
   return $ipAddr;
}



?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login form</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="email" class="login__input" placeholder="Email" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name=password class="login__input" placeholder="Password" required>
				</div>
				<button class="button login__submit"  name="login" value="login">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
				<div style="color: red; font-size:large">
				<br><?php echo $msg?>
				</div>				
			</form>
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
				
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>







<!-- partial:index.partial.html -->
<div class="flower">
	<div class="f-wrapper">
		<div class="flower__line"></div>
		<div class="f">
			<div class="flower__leaf flower__leaf--1"></div>
			<div class="flower__leaf flower__leaf--2"></div>
			<div class="flower__leaf flower__leaf--3"></div>
			<div class="flower__leaf flower__leaf--4"></div>
			<div class="flower__leaf flower__leaf--5"></div>
			<div class="flower__leaf flower__leaf--6"></div>
			<div class="flower__leaf flower__leaf--7"></div>
			<div class="flower__leaf flower__leaf--8 flower__fall-down--yellow"></div>
		</div>
	</div>

	<div class="f-wrapper f-wrapper--2">
		<div class="flower__line"></div>
		<div class="f">
			<div class="flower__leaf flower__leaf--1"></div>
			<div class="flower__leaf flower__leaf--2"></div>
			<div class="flower__leaf flower__leaf--3"></div>
			<div class="flower__leaf flower__leaf--4"></div>
			<div class="flower__leaf flower__leaf--5"></div>
			<div class="flower__leaf flower__leaf--6"></div>
			<div class="flower__leaf flower__leaf--7"></div>
			<div class="flower__leaf flower__leaf--8 flower__fall-down--pink"></div>
		</div>
	</div>

	<div class="f-wrapper f-wrapper--3">
		<div class="flower__line"></div>
		<div class="f">
			<div class="flower__leaf flower__leaf--1"></div>
			<div class="flower__leaf flower__leaf--2"></div>
			<div class="flower__leaf flower__leaf--3"></div>
			<div class="flower__leaf flower__leaf--4"></div>
			<div class="flower__leaf flower__leaf--5"></div>
			<div class="flower__leaf flower__leaf--6"></div>
			<div class="flower__leaf flower__leaf--7"></div>
			<div class="flower__leaf flower__leaf--8 flower__fall-down--purple"></div>
		</div>
	</div>
	<div class="flower__glass"></div>
</div>
<!-- partial -->
<!-- partial -->
  
</body>
</html>
