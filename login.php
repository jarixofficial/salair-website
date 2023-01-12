<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <style>
    body{
      background-image: url('img/bg-1.jpg');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      height: 100%;
      transition: background-image 0.5s ease-in-out;
    }
  </style>
    <script>
      const images = ['img/bg-1.jpg', 'img/bg-2.jpg', 'img/bg-3.jpg', 'img/bg-4.jpg', 'img/bg-5.jpg', 'img/bg-6.jpg'];
      let currentIndex = 0;
      setInterval(function() {
        document.body.style.backgroundImage = `url(${images[currentIndex]})`;
        currentIndex = (currentIndex + 1) % images.length;
      }, 5000);
    </script>
</head>
<body>
<nav>
	<div class="logo">
		<img src="img/logowhite.svg" alt="Logo">
	</div>
	<div class="logocol">
		<a href="index.php"><img src="img/logocolor.svg" alt="Logo Colored" class="logocolor"></a>
	</div>
		<ul>
			<li><a href="#flightdetails">book a flight</a></li>
			<li><a href="#manage">manage</a></li>
			<li><a href="#travelinfo">travel info</a></li>
			<li><a href="#about">about us</a></li>
			<li><a href="login.php">login</a></li>
		</ul>
		<div class="menu">
			<img src="img/icons/menu.svg">
			</div>
  </nav>
	<h1 class="intro">Flying again?&nbsp;<img src="img/icons/plane.svg" class="plane"></h1>
	<div class="form">
		<h1>Log In</h1>
		<h4>to enjoy a flight once again</h4>
		<br>
		<form method="POST" action="welcome.php">
			<label>E-Mail: </label><br>
			<input type="email" name="email" placeholder="Enter your email..." required><br><br>
			<label>Password: </label><br>
			<input type="password" name="password" placeholder="Enter your password..." required><br><br>
			<input type="submit" name="submit" class="submit">
		</form>
		<p class="new">New User? <a href="signup.php">Create an account</a></p>
	</div>
</body>
</html>