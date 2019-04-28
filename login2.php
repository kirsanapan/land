<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="sss.css" rel="stylesheet" >
<!------ Include the above in your HEAD tag ---------->

<div class="login-box">
<form name="form1" method="post" action="check_login.php">
		<div class="panel panel-default">
			<div class="panel-heading"><b>Sign in</b> <span class="glyphicon glyphicon-pencil pull-right" aria-hidden="true"></span></div>
			<div class="panel-body">
				<div class="form-group has-primary has-feedback">
					<label class="control-label" for="txtUsername">Login <span class="regForm text-danger">*</span></label>
					<input type="text" class="form-control" name="txtUsername" id="txtUsername" aria-describedby="login" required>
					<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
				</div>
				<div class="form-group has-primary has-feedback">
					<label class="control-label" for="txtPassword">Password <span class="regForm text-danger">*</span></label>
					<input type="password" class="form-control" name="txtPassword" id="txtPassword" aria-describedby="password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
				</div>
			</div>
			<div class="panel-footer">
				<input type="submit" class="btn btn-success" id="goToChat" value="Sign in" />
				<a href="<?php echo URL;?>/registration" class="btn btn-warning pull-right"onClick="window.location.href='register.php'">Registration</a>
			</div>
		</div>
	</form>
</div>
<div class="text-center">
<a href="#">Require password?</a>
</div>