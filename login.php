<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form { margin: 0px 10px; }

h2 {
  margin-top: 2px;
  margin-bottom: 2px;
}

.container { max-width: 360px; }
.image{
    
	
    
}
.divider {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 5px;
}

.divider hr {
  margin: 7px 0px;
  width: 35%;
}

.left { float: left; }

.right { float: right; }

</style>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="image" >
    <img src="logo.jpg" alt="" srcset="">
</div>
    <div class="container  mt-4" >
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body mt-4">
					<form method="POST" action="login.php" >
					<?php include('errors.php'); ?>
						<div class="form-group">
							<h2>Sign in</h2>
						</div>
						<div class="form-group">
							<strong>Email or Username</strong>
							<input id="signinEmail" type="text" maxlength="50" class="form-control" name="username">
						</div>
						<div class="form-group">
							<strong>Password</strong>
							<span class="right"><a href="#">Forgot your password?</a></span>
							<input id="signinPassword" type="password" maxlength="25" class="form-control" name="password">
						</div>
						<div class="form-group" style="padding-top: 12px;">
							<button id="signinSubmit" type="submit" class="btn btn-success btn-block" name="login_user">Sign in</button>
						</div>
						<div class="form-group divider">
							<hr class="left"><small>New to site?</small><hr class="right">
						</div>
						<p class="form-group"><a href="register.php" class="btn btn-info btn-block">Create an account</a></p>
						<p class="form-group">By signing in you are agreeing to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>