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
  <link rel="stylesheet" href="css/index.css">
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
  </div><br><br><br><br><br><br>
  <h1 class="top">flight booked! enjoy your flight :)</h1>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <footer>
    <h4><em>"choose the better wings!"</em><br><a href="pp.php" class="footer">privacy
        policy</a>&emsp;&emsp;&emsp;&emsp;<a href="tos.php" class="footer">terms of
        service</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php#contact" class="footer">contact
        us</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php" class="footer">help and faq</a><br>&copy; Copyright 2023
      Salesian Airlines<h4>
  </footer>
</body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "flightinfo";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (isset($_POST["submit"])) {

  $payment = $_POST['Payment'];
  $name = $_POST['name'];
  $password = $_POST['pass'];
  $phonemail = $_POST['phonemail'];
  $adr1 = $_POST['address'];
  $adr2 = $_POST['address2'];
  $zip = $_POST['zipCode'];

  $sql = "INSERT INTO paymentem (Payment, Name, Password, PhonEmail, Address, Address2, ZipCode) VALUES ('$payment','$name', '$password', '$phonemail', '$adr1','$adr2', '$zip');";
  $run = mysqli_query($conn, $sql) or die(mysqli_error());

  if ($run) {
  } else {
    echo "Form not Submitted";
  }
}
mysqli_close($conn);
?>

</html>