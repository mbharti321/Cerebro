<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Home-Cerebro Kids!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>
	<div class="container">
	<!-- Content here -->  	
		<div class="index_background">
			<div class="container h-100  justify-content-center">
				<div class=" my-auto">
					<h1 class="display-2">Hello, Welcome to Cerebro Kids!!</h1>
					<h1>Login Successful.</h1>
					<form action="register.php">
						<button>Back to Login Page </button>
					</form>	
				</div>
				
			</div>
		</div>
		
	</div>
	
</body>

</html>