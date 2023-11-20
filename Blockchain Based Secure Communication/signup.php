<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/web3@1.5.3/dist/web3.min.js"></script>

    <script src="chatABI.js"></script>
	<script src="signup.js"></script>
</head>
<body>

	<section>


	<div class="login-box">

		<form id="signup" action="">

			<h2>Sign up</h2>

			<div class="input-box">
				<span class="icon"><ion-icon name="mail"></ion-icon></span>
				<input id="email" type="email" required  name="">
				<label>Email</label>
			</div>

			<div class="input-box">
				<span class="icon"><ion-icon name="person-outline"></ion-icon></span>
				<input id="username" type="text" required  name="">
				<label>Username</label>
			</div>

			<div class="input-box">
				<span class="icon"> <ion-icon name="lock-closed"></ion-icon> </span>
				<input id="password" type="password" required  name="">
				<label>Password</label>
			</div>

			
			<button type="submit">Signup</button>

			<div class="register-link">
				<p>Already have an account? <a href="login.html">Login</a> </p>
				
			</div>

			
		</form>
		
	</div>


	</section>


	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	
</body>
</html>