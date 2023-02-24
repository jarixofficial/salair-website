<!-- FEEL FREE TO CHANGE ANYTHING HERE e.g. IMAGES, TEXT, OR LISTS 
TEMPLATE CREATED BY JARI DECANO
YOU DON'T HAVE TO FOLLOW THE EXACT FORMAT
YOU CAN INCREASE THE FONT SIZE TO MAKE THE PAGE MORE LOADED (hehe)
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
  
  <!-- RENAME TEMPLATE.css TO YOUR ASSIGNED PAGE
  STYLESHEET IS LOCATED UNDER THE CSS FOLDER -->
  <link rel="stylesheet" href="css/faq.css">
  
  <link rel="icon" href="img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;400&display=swap" rel="stylesheet">
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
    <h1>questions you might <span>ask</span></h1>
  </div>
  <div class="content">
    <!-- INSERT CONTENT HERE -->
    <div>
      <img src="https://images.cdn.centreforaviation.com/stories/new_image_database/airports/mactan_cebu/mactan_cebu_airport.jpg" class="img2">
    </div>
    <div class="li">
    <p><h2 id="faq"><span><bold>● Where do you fly to?</bold></span></h2></p>
    <h3>Salesian Airlines offers flights to destinations only in the Philippines, including:</h3><br>
      <ul class="list">
        <h3>
        <li>Manila (Main Hub)</li>
        <li>Cebu (Secondary Hub)</li>
        <li>Clark (Secondary Hub)</li>
        <li>Davao (Secondary Hub)</li>
        <li>Bacolod</li>
        <li>Bohol</li>
        <li>Boracay</li>
        <li>Cagayan de Oro</li>
        <li>Coron</li>
        <li>Dumaguete</li>
        <li>Iloilo</li>
        <li>Pagudpud</li>
        <li>Puerto Princesa</li>
        <li>Siargao</li>
        <li>Siquijor</li>
        <li>...and more</li>
        </h3>
      </ul>
    </div><br>
    <hr><br>
    <h2><span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;● What payment methods does this airline accept?</span></h2>
    <h3><div>
      <img src="https://play-lh.googleusercontent.com/QNP0Aj2hyumAmYiWVAsJtY2LLTQnzHxdW7-DpwFUFNkPJjgRxi-BXg7A4yI6tgYKMeU" class="img3">
    </div><br>Customers of Salesian Airlines Philippines have the convenience of paying for their purchases through a variety of payment methods, including credit and debit cards, PayPal, as well as local e-wallets such as GCash or PayMaya.</h3><br><br><hr><br><h2><span>● What are the booking options available? </span></h2><br><h3>Salesian Airlines Philippines offers two booking options for customers: one-way and round-trip. During the booking process, customers can select their preferred destination, travel dates, number of passengers, flight class, and seating preferences. One-way bookings are for flights to a destination without a return trip, while round-trip bookings include both departure and return flights.<br></h3><br><br><br><br><hr><br>
      <h2><span>● What travel documents do I need to carry while boarding a flight? </span></h2><br><h3>You typically require a valid passport or government-issued ID along with your flight itinerary and any necessary visas or travel documents.<br></h3><br><hr><br>
        <h2><div>
      <img src="https://media.istockphoto.com/id/1177664322/vector/blue-flat-checkmark-icon.jpg?s=612x612&w=0&k=20&c=Y9YC-xqGF7iCa-TyGjgS1FmPPhY9U34cKzwmO2asNP4=" class="img2">
    </div><span>● What are the booking options available? </span></h2><br><h3>Salesian Airlines Philippines offers two booking options for customers: one-way and round-trip. During the booking process, customers can select their preferred destination, travel dates, number of passengers, flight class, and seating preferences. One-way bookings are for flights to a destination without a return trip, while round-trip bookings include both departure and return flights.<br></h3>
           <br><hr><br>
        <h2><span>● What is the airline's protocol if my flight is delayed or cancelled?
 </span></h2> <br><h3>If your flight is ever delayed or cancelled, Salesian Airlines will provide you with information and assistance, such as rebooking on another flight or offering compensation if required.<br></h3><br><hr><br>
  <h2><span>● How do I check if I successfully booked my fight?
 </span></h2><br><h3>Once the user has made a flight reservation, they will be directed to the confirmation page, which displays a notification confirming that the flight has been successfully booked and paid for. In addition, a summary of the flight details will also be shown, and an email will be sent out to you.<br></h3><Br><hr>
        </h3><br>
  <h2><span>● Where can we contact the developers?
 </span></h2><br><h3>In case your question wasn't answered or you're currently experiencing some issues with our website, you can reach out to us via the following contact details:<br><br><b>Email: customercare@salesianairlines.com<br>
Phone: +63 895 250 9245<br></h3><Br><hr> <h2><br>For further updates and promotions, you can follow us on our social media platforms: <img src="https://static.vecteezy.com/system/resources/thumbnails/003/775/686/small/facebook-instagram-and-twitter-icons-editorial-icons-set-free-vector.jpg" class="img3"></h2>
<br><h3 id="contact"><b>
  Facebook: SalesianAirlinesPH<br>
Instagram: @SalesianAirlinesph<br>
Twitter: @SalesianAirlinesph<br></h3><Br><br><br>
  </div>
  <footer>
    <h4><em>"choose the better wings!"</em><br><a href="pp.php" class="footer">privacy policy</a>&emsp;&emsp;&emsp;&emsp;<a href="tos.php" class="footer">terms of service</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php#contact" class="footer">contact us</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php" class="footer">help and faq</a><br>&copy; Copyright 2023 Salesian Airlines<h4>
  </footer>
  </body>
</html>