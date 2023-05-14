<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Form</title>


	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

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
			font-family: 'Montserrat', sans-serif;
			height: 100vh;
			margin: -20px 0 50px;
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
			color: #FFFFFF;
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
			background-color: transparent;
			border-color: #FFFFFF;
			cursor: pointer;
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
			min-height: 850px;

		}

		.form-container {
			position: absolute;
			top: 0;
			height: 100%;
			transition: all 0.6s ease-in-out;
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
		}


		.Emoney-container {
			left: 0;
			width: 50%;
			z-index: 2;
		}

		.CreditDebit-container {
			right: 0;
			width: 50%;
			z-index: 1;
			opacity: 1;
			padding-top: 60px;
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
		}

		.overlay {
			background-color: #FFD700;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 0 0;
			position: relative;
			color: #fff;
			left: -100%;
			height: 100%;
			width: 200%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
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
		}

		.overlay-left {

			transform: translateX(-20%);
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

		}
	</style>
</head>

<body>



	<div class="container" id="container">
		<div class="form-container CreditDebit-container">
			<form action="#">
				<h1>Credit/Debit Card</h1><br>
				<div class="social-container">
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
				<span>Fill this Information</span>
				Name
				<input type="text" placeholder="Please enter your Name" />
				Card Number
				<input type="text" placeholder=" Please enter your Card Number" />
				CVV
				<input type="text" placeholder="Please enter the CVV" />
				Expiration
				<input type="text" placeholder="Please enter the Expiration" />
				Address
				<input type="text" placeholder="Please enter your Address" />
				Address 2
				<input type="text" placeholder="Optional" />
				Zip Code
				<input type="text" placeholder="Please enter your zip code" />
				<br><input type="submit" name="submit" class="submit">
			</form>
		</div>
		<div class="form-container EMoney-container">
			<form action="#">
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
				<input type="text" placeholder="Please enter your Name" />
				Password:
				<input type="text" placeholder="Please enter your Password" />
				Phone Number:
				<input type="text" placeholder="Please enter your Number" />
				First Address:
				<input type="text" placeholder="Please enter your First Address" />
				Second Address:
				<input type="text" placeholder="Optional" />
				Zip Code:
				<input type="text" placeholder="Please enter your zip code" />
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

</html>