<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salesian Airlines</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
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

</html>
</head>

<body>
</body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "flightinfo";

$con = mysqli_connect($host, $user, $pass, $dbname);
$email = $_POST['email'];
$pass = $_POST['password'];

$email = stripcslashes($email);
$pass = stripcslashes($pass);
$email = mysqli_real_escape_string($con, $email);
$pass = mysqli_real_escape_string($con, $pass);

$sql = "select * from signup where email ='$email'and pass ='$pass'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
  include("indexlogged.php");
} else {
  echo "<br><br><br><br><br><h1 style='color: white; text-align: center;' class='top'>login <span>failed.</span></h1>";
}
?>

</html>