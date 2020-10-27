<?php
	//include '..\opencv\include\connection.php';
	if (!empty($_SESSION["admin"])) 
	{
		header("location: home.php");
	}
	
?>
<html>
<head>
	
	<title>ALPRS</title> 
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="..\opencv\css\bootstrap.min.css">
	<link rel="stylesheet" href="..\opencv\css\style.css">
	 <!-- <link rel="stylesheet" href="..\opencv\css1\font\fontawesome.min.css"> -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="..\opencv\css\jquery.min.js"></script>
	<script src="..\opencv\css\popper.min.js"></script>
	<script src="..\opencv\css\bootstrap.min.js"></script>
<style>

</style>
</head>

<body>
	<?php
		if (isset($_POST["Btnlogin"])) 
		{
			$err="";
			$Email = $_POST["Uname"];
			$Password = $_POST["Pwd"];

			if ($Email == "admin@gmail.com" AND $Password == "admin")
			{	 
				$_SESSION["admin"]=$Email;
				header("location: home.php"); 
			}	
			else
			{
				$err="<p style='color:red;'>E-mail or Password incorrect!!!</p>";
			}
		}
	?>
	<div class="jumbotron" style="min-height: 750px">
	<div class="container" style="padding:150px;">
		<div align="center">
			<div class="card" style="max-width: 550px;">
				<div class="card-header bg-warning">
					<h2><B>ADMIN LOGIN</B></h2>
				</div>
				
				<form action="" method="POST">
					<div class="card-body">
						<?php if (!empty($err)) {
							echo "$err";
						} ?>
						<div class="row">
							<div class="col-lg-2" align="left">
								<label><b>Username:</b></label>
							</div>
							<div class="col-lg-10">		
								<input type="email" class="form-control" name="Uname" placeholder="Enter Username..." value="<?php if(isset($Email)){ echo "$Email"; } ?>">
							</div>
						</div>	
						<br>
						<div class="row">
							<div class="col-lg-2" align="left">
								<label><b>Password:</b></label>
							</div>
							<div class="col-lg-10">		
								<input type="password" class="form-control" name="Pwd" placeholder="Enter Password...">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-12" align="center">
								<button type="sumbit" name="Btnlogin" class="btn btn-warning">Login</button>
							</div>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
	</div>
</body>
</html>