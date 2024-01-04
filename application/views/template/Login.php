<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>HRIS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	 <link rel="stylesheet" href="../res/css/bootstrap.min.css">

	<style type="text/css">
		.login_div{
		    display: inline-block;
		    position: relative;
		    border: 0.5px Solid gray;
		    width: 400px;
		    height: 320px;
		    padding: 10px 10px 10px 10px;
		    border-radius: 10px;
		}
	
		body{
    		font-family: MONOSPACE;
		}
		.header_div{

		}
		.btnLogin_div .submit{
			margin: 0px 0px 10px 80px;
		    position: absolute;
		    width: 100px;
		}
		.btnLogin_div p{
			margin: 15px 0px 0px 0px;
		    display: flex;
		    font-size: 12px;
		}
		.btnLogin_div h6{
			display: flex;
		    position: absolute;
    		margin: -16px 0px 0px 150px;
		    font-size: 14px;
		    font-weight: 800;
		    text-decoration: none;
		}
		h1{
			font-weight: 800;
    		font-family: fantasy;
		}
	</style>
</head>
	<body>
		<div id="container" style="text-align: center;position: relative; padding: 320px 0px 340px 0px;">
			<form action="<?php echo base_url('login/userLogin');?>" name="logForm" id="logForm" class="form-signin" method="post" role="form">
				<div class="login_div">
					<div class="header_div">
						<h1>Human Resource Integrated System</h1>
					</div>
					<div class="form-floating mb-3">
					  <input type="text" class="form-control" id="floatingInput"name="txtusername" placeholder="Username">
					  <label for="floatingInput">Username</label>
					</div>
					<div class="form-floating">
					  <input type="password" class="form-control" name="txtpassword" id="floatingPassword" placeholder="Password">
					  <label for="floatingPassword">Password</label>
					</div>
					<div class="btnLogin_div">
						<input type="submit" class="btn btn-outline-dark submit" value="Login" name="submit" />
						<p>Don't have an account?</p> <h6><a href="#"> Register </a></h6>
					</div>
				</div>
			</form>
		</div>

	</body>

	<footer>
		<script type="text/javascript" src="../res/js/bootstrap.min.js"></script>
	</footer>
</html>
