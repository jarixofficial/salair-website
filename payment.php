<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Salesian Airlines</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/login.css">
	<!-- RENAME TEMPLATE.css TO YOUR ASSIGNED PAGE
	STYLESHEET IS LOCATED UNDER THE CSS FOLDER -->
	<link rel="stylesheet" href="css/TEMPLATE.css">

	<link rel="icon" href="img/favicon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;400&display=swap" rel="stylesheet">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@100;400&display=swap');

		select {
			border: 0;
			border-bottom: 2px solid;
			width: 35%;
			transition: 0.3s;
		}

		select:hover {
			border-color: gold;
		}

		select:focus {
			outline: none;
			border: 0;
			border-bottom: 2px solid;
			transition: 0.3s;
			border-color: gold;
		}

		* {
			box-sizing: border-box;
		}

		body {
			background: #f6f5f7;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			height: 100vh;
			margin: -20px 0 50px;
			font-family: 'Kanit', sans-serif;
		}

		h1 {
			font-weight: bold;
			margin: 0;
		}

		h2 {
			text-align: center;
		}

		p {
			font-size: 14px;
			font-weight: 100;
			line-height: 20px;
			letter-spacing: 0.5px;
			margin: 20px 0 30px;
		}

		span {
			font-size: 12px;
		}

		a {
			color: #333;
			font-size: 14px;
			text-decoration: none;
			margin: 15px 0;
		}

		button {
			border-radius: 20px;
			border: 1px solid black;
			background-color: black;
			color: #FF qFFFF;
			font-size: 12px;
			font-weight: bold;
			padding: 12px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
			transition: transform 80ms ease-in;
		}

		button:active {
			transform: scale(0.95);
		}

		button:focus {
			outline: none;
		}

		button.ghost {
			background-color: black;
			border-color: black;
			cursor: pointer;
			color: white;
		}

		form {
			background-color: #FFFFFF;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 50px;
			height: 100%;
			text-align: center;

		}


		.container {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
				0 10px 10px rgba(0, 0, 0, 0.22);
			position: relative;
			overflow: hidden;
			width: 768px;
			max-width: 100%;
			min-height: 750px;
			border: 2px;
			border-color: black;

			margin-top: 120px;

		}

		.form-container {
			position: absolute;
			top: 0;
			height: 100%;
			transition: all 0.6s ease-in-out;
			border: 2px;
			border-color: black;

		}

		.form-container form {
			background-color: #fff;
			display: flex;
			flex-direction: column;
			padding: 0 50px;
			height: 100%;
			justify-content: center;
			align-items: center;
			text-align: center;
			border: 2px;
			border-color: black;
		}


		.Emoney-container {
			left: 0;
			width: 50%;
			z-index: 2;
			border: 2px;
			border-color: black;
		}

		.CreditDebit-container {
			right: 0;
			width: 50%;
			z-index: 1;
			opacity: 1;
			padding-top: 60px;
			border: 2px;
			border-color: black;
		}

		.overlay-container {
			position: absolute;
			top: 0;
			left: 50%;
			width: 50%;
			height: 100%;
			overflow: hidden;
			transition: transform 0.6s ease-in-out;
			z-index: 100;
			border: 2px;
			border-color: black;
		}

		.overlay {

			background-color: #f39f86;
			background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 0 0;
			position: relative;
			color: black;
			left: -100%;
			height: 100%;
			width: 200%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
			border: 2px;
			border-color: black;
		}

		.overlay-panel {
			position: absolute;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 40px;
			text-align: center;
			top: 0;
			height: 100%;
			width: 50%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
		}

		.overlay-right {
			right: 0;
			transform: translateX(0);
			border: 2px;
			border-color: black;
		}

		.overlay-left {

			transform: translateX(-20%);
			border: 2px;
			border-color: black;
		}



		/*PANG ANIMATION */
		.container.right-panel-active .overlay-container {
			transform: translateX(-100%);
		}





		.container.right-panel-active .overlay {
			transform: translateX(50%);

		}

		.container.right-panel-active .overlay-left {
			transform: translateX(0);

		}

		.container.right-panel-active .overlay-right {
			transform: translateX(20%);

		}


		input[type="text"] {
			width: 300px;
			border: 0;
			border-bottom: 2px solid;
			width: 90%;
			transition: 0.3s;
		}


		input[type="text"]:hover {
			border-color: gold;
		}

		input[type="text"]:focus {
			outline: none;
			border: 0;
			border-bottom: 2px solid;
			transition: 0.3s;
			border-color: gold;
		}

		input[type="submit"] {
			outline: none;
			border: 0;
			border-bottom: 2px solid;
			transition: 0.3s;
			border-color: gold;
		}

		input[type="submit"]:hover {

			cursor: pointer;
			font-size: 120%;
			transition: 0.3s;
			border-color: gold;
		}
	</style>
	<style>
		body {
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
		setInterval(function () {
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
			<li><a href="index.php#flightdetails">book a flight</a></li>
			<li><a href="travelinfo.php">travel info</a></li>
			<li><a href="aboutus.php">about us</a></li>
			<li><a href="login.php">login</a></li>
		</ul>
		<div class="help">
			<a href="faq.php"><img src="img/icons/help.svg"></a>
		</div>
	</nav>

	<div>
		<div class="container" id="container">
			<div class="form-container CreditDebit-container">
				<form method="POST" action="confirmcc.php">

					<div class="social-container">
						<h1>Credit/Debit Card</h1><br>

						<label for="Option">Pick your Payment</label>
						<select id="Payment" name="Payment">
							<option value="BDO">BDO</option>
							<option value="BPI">BPI</option>
							<option value="HSBC">HSBC</option>
							<option value="Security Bank">Security Bank</option>
							<option value="AUB">Asia United Bank</option>
							<option value="Metro">MetroBank</option>
							<option value="UCPB">UCPB</option>
							<option value="CITI">Citi Bank</option>
							<option value="PNB">PNB</option>
							<option value="Commerce">Bank of Commerce</option>
							<option value="American Express">American Express</option>
						</select>
					</div>


					<br>
					<span>Fill this Information</span><br>
					Name: <input type="text" name="name" placeholder="Please enter your Name" required><br>
					Card Number: <input type="text" name="cardNumber" placeholder="Please enter your Card Number" required><br>
					CVV: <input type="text" name="cvv" placeholder="Please enter the CVV" required><br>
					Expiration: <input type="text" name="expiration" placeholder="Please enter the Expiration" required><br>
					Address: <input type="text" name="address" placeholder="Please enter your Address" required><br>
					Address 2: <input type="text" name="address2" placeholder="Optional"><br>
					Zip Code: <input type="text" name="zipCode" placeholder="Please enter your zip code" required><br>
					<br>
					<input type="submit" name="submit" class="submit">
				</form>
			</div>



			<div class="form-container EMoney-container">
				<form action="confirmem.php" method="POST">
					<h1>E-Money</h1><br>

					<div class="social-container">
						<label for="Option">Pick your Payment</label>
						<select id="Payment" name="Payment">
							<option value="Gcash">Gcash</option>
							<option value="PayMaya">PayMaya</option>
							<option value="PayPal">PayPal</option>

						</select>
					</div>
					<br>


					<span>Fill this Information</span>
					Name:
					<input type="text" name="name" placeholder="Please enter your Name" required><br>
					Password:
					<input type="password" name="pass" placeholder="Please enter your Password" required><br>
					Phone Number/E-mail:
					<input type="text" name="phonemail" placeholder="Please enter your Number/Email" required><br>
					First Address:
					<input type="text" name="address" placeholder="Please enter your First Address" required><br>
					Second Address:
					<input type="text" name="address2" placeholder="Optional"><br>
					Zip Code:
					<input type="text" name="zipCode" placeholder="Please enter your zip code" required><br>
					<br><input type="submit" name="submit" class="submit">
				</form>


			</div>


			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Payment Option</h1>
						<p>Do you not have your Credit/Debit card? You can switch to use your E-Money</p>
						<button class="ghost" id="Switch2">Switch Now?</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1> Payment Option</h1>
						<p> Do you not have E-money available? You can switch to use your Credit/Debit Card</p>
						<button class="ghost" id="Switch1">Switch Now?</button>
					</div>
				</div>
			</div>
		</div>


		<script type="text/javascript">

			const emoneyButton = document.getElementById('Switch1');
			const creditButton = document.getElementById('Switch2');
			const container = document.getElementById('container');

			emoneyButton.addEventListener('click', () => {
				container.classList.add("right-panel-active");
			});

			creditButton.addEventListener('click', () => {
				container.classList.remove("right-panel-active");
			});
		</script>
</body>
<footer>
	<h4><em>"choose the better wings!"</em><br><a href="pp.php" class="footer">privacy
			policy</a>&emsp;&emsp;&emsp;&emsp;<a href="tos.php" class="footer">terms of
			service</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php#contact" class="footer">contact
			us</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php" class="footer">help and faq</a><br>&copy; Copyright 2023
		Salesian Airlines<h4>
</footer>

</html>