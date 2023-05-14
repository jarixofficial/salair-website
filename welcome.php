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
  </div>
  <h1>welcome to <span>salesian airlines.</span> :)</h1>
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

// Prepare and execute the SQL query to insert the form data into the "login" table
try {
  $stmt = $pdo->prepare("INSERT INTO login (email, pass)
                           VALUES (:email, :password)");

  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':password', $_POST['password']);

  $stmt->execute();

  echo "Form data inserted successfully into the login table.";
} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
}
?>
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

// Prepare and execute the SQL query to insert the form data into the "signup" table
try {
  $stmt = $pdo->prepare("INSERT INTO signup (fname, lname, email, pass, cpass)
                           VALUES (:fname, :lname, :email, :password, :confirm_password)");

  $password = $_POST['password'];
  $confirmPassword = $_POST['confirm_password'];

  if ($password !== $confirmPassword) {
    die("Error: Password and confirm password do not match.");
  }

  $stmt->bindParam(':fname', $_POST['fname']);
  $stmt->bindParam(':lname', $_POST['lname']);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':confirm_password', $confirmPassword);

  $stmt->execute();

  echo "Form data inserted successfully into the signup table.";
} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
}
?>

</html>