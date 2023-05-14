<!-- FEEL FREE TO CHANGE ANYTHING HERE e.g. IMAGES, TEXT, OR LISTS 
TEMPLATE CREATED BY JARI DECANO
YOU DON'T HAVE TO FOLLOW THE EXACT FORMAT
YOU CAN INCREASE THE FONT SIZE TO MAKE THE PAGE MORE LOADED (hehe)
LINKED CSS FILE IS IN THE CSS FOLDER
-->
<!DOCTYPE html>
<html lang="en">

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
  <style type="text/css">
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

    .submit {
      transition: 0.3s;
    }

    .submit:hover {
      cursor: pointer;
      font-size: 120%;
      transition: 0.3s;
      border-color: gold;
    }
  </style>
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
  <div class="top">
    <!-- HEADER TEXT e.g. "Wanna know more about us?" or "Details for your flight" -->
    <h1>passenger<span> details.</span></h1>
  </div>
  <div class="content">
  <script>
  function duplicateForm() {
    var urlParams = new URLSearchParams(window.location.search);
    var num1 = parseInt(urlParams.get('apax'));
    var num2 = parseInt(urlParams.get('cpax'));
    var num3 = parseInt(urlParams.get('ipax'));
    var sum = num1 + num2 + num3;

    for (var i = 0; i < sum; i++) {
      var form = document.createElement('form');
      form.innerHTML = `
      <h2>Passenger ${i + 1}</h2><br>
      <label for="name${i}">Name:</label><br>
      <input type="text" id="name${i}" name="name${i}" required placeholder="Enter the passenger's name..."><br><br>
      
      <label for="dob${i}">Date of Birth:</label><br>
      <input type="date" id="dob${i}" name="dob${i}" required placeholder="Enter the passenger's date of birth..."><br><br>
      
      <label for="gender${i}">Gender:</label><br>
      <select id="gender${i}" name="gender${i}" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select><br><br>

      <label for="phone${i}">Phone Number:</label><br>
      <input type="tel" id="phone${i}" name="phone${i}" placeholder="Enter the passenger's phone number..."><br><br>
      
      <label for="email${i}">Email:</label><br>
      <input type="email" id="email${i}" name="email${i}" placeholder="Enter the passenger's e-mail..."><br><br>
      `;

      form.className = "tab";
      form.method = "POST";
      form.action = "PaymentForm.php";

      document.getElementById('formContainer').appendChild(form);
    }

    var submitContainer = document.createElement('div');
    submitContainer.style.textAlign = "center";

    var submitButton = document.createElement('input');
    submitButton.type = "submit";
    submitButton.value = "Submit All Forms";
    submitButton.className = "submit";

    submitContainer.appendChild(submitButton);

    document.getElementById('formContainer').appendChild(submitContainer);

    document.getElementsByClassName('tab')[0].style.display = "block";
  }

  window.addEventListener('DOMContentLoaded', function () {
    duplicateForm();
    document.getElementById("defaultOpen").click();
  });
</script>
    <center><h3>Fill out every form for every passenger. E-mail and phone number not required.</h3>
    </center>
    <div id="formContainer"></div>

    <div id="tabNavigation">
      <?php
      $num1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
      $num2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
      $num3 = isset($_GET['num3']) ? $_GET['num3'] : 0;
      $sum = $num1 + $num2 + $num3;

      for ($i = 1; $i <= $sum; $i++) {
        echo '<button class="tablink" onclick="openTab(event, \'Form' . $i . '\')">Form ' . $i . '</button>';
      }
      ?>
    </div>
  </div>
  <footer>
    <h4><em>"choose the better wings!"</em><br><a href="pp.php" class="footer">privacy
        policy</a>&emsp;&emsp;&emsp;&emsp;<a href="tos.php" class="footer">terms of
        service</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php#contact" class="footer">contact
        us</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php" class="footer">help and faq</a><br>&copy; Copyright 2023
      Salesian Airlines<h4>
  </footer>
</body>
<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $dbname = 'flightinfo';

  // Create a new PDO instance
  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Error: " . $e->getMessage());
  }

  // Prepare and execute the SQL query to insert the form data into the "booking" table
  try {
    $stmt = $pdo->prepare("INSERT INTO booking (Flight, fFrom, fTo, Departure, fReturn, aPax, cPax, iPax)
                           VALUES (:flight, :from, :to, :departure, :return, :apax, :cpax, :ipax)");

    $stmt->bindParam(':flight', $_GET['flight']);
    $stmt->bindParam(':from', $_GET['from']);
    $stmt->bindParam(':to', $_GET['to']);
    $stmt->bindParam(':departure', $_GET['departure']);
    $stmt->bindParam(':return', $_GET['return']);
    $stmt->bindParam(':apax', $_GET['apax']);
    $stmt->bindParam(':cpax', $_GET['cpax']);
    $stmt->bindParam(':ipax', $_GET['ipax']);

    $stmt->execute();

  } catch (PDOException $e) {
    die("Error: " . $e->getMessage());
  }
  
  ?>
</html>