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
  
  <!-- RENAME TEMPLATE.css TO YOUR ASSIGNED PAGE
  STYLESHEET IS LOCATED UNDER THE CSS FOLDER -->
  <link rel="stylesheet" href="css/TEMPLATE.css">
  
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
    <h1>our privacy <span>policy.</span></h1>
  </div>
  <div class="content">
    Privacy Policy <br><br>
---<br><br>
- This privacy statement explains how we will utilize the personal information you provide to us. It contains explanations of the different sorts of personal information we gather, how we gather it, what we do with it, and the people we might share it with. <br>
- We want to make sure you know how we treat the personal information we acquire about you when you interact with us and what you need to know about how we use and distribute that information. Also, you can learn about the responsibility we have to secure the information you've entrusted to us, as well as the rights and controls you have over it. <br>
<br>
What does this Privacy Policy Cover? <br>
<br>
The Personal Information about you that we obtain, use, or otherwise process in connection with your relationship with Salesian Airlines as a client or prospective customer is covered by this Privacy Policy. By &quot;Personal Information,&quot; we mean facts about you that could be used to identify you, such as your name and contact information, plans for future travel and purchases, and information about how you use our websites. We must gather Personal Information about our customers because we are an international airline. To provide the best possible air travel experience and to keep our customers and workers safe and secure, we must use and share this information. We also need to preserve the Personal Information you supply us with. To gain and keep your trust, we must treat your Personal Information carefully. No matter where in the world you use our products and services, we are committed to protecting your privacy. <br>
<br>
How Do We Collect Personal Information? <br>
<br>
Every time you use our services, we collect personal information about you (whether services are provided directly by us or by other companies or agents acting on our behalf). In order to gather your information and give you the travel experience, goods, and services you desire, we must communicate with other parts of our company as well as with other third parties. This could involve interactions with regard to reservations, shopping, parking, and other transactions, communications and marketing, membership services, applications for jobs, competitions, promotions, and surveys, as well as browsing our websites and using our apps. <br>
What Types of Personal Information do we collect and process? <br>
<br>
We gather and may handle Personal Information about you, your travel plans, how you use our services, as well as how you use our websites, call centers, and mobile applications (including details about the pages you view). This could include details you give us directly or details we've gathered from details you've given to other sources like Booking Information. <br>
<br>
What do we use your Personal Information for? <br>
<br>
We collect Personal Information about you so that we can provide you with the products and services you've ordered from us, safely and effectively. We might apply personal data to: <br>
<br>
-Verify your Contact Details and Identity <br>
-Communicate with you and process your requests <br>
-Respond and manage any inquiries, complaints, and incidents raised with us <br>
-Notify you of Flight Information and flight reminder alerts <br>
-Manage the safety and security of our customers <br>
<br>
Who do we share your Personal Information with? <br>
<br>
We frequently need to disclose your Personal Information with third parties in order to facilitate your travel plans, including other airlines and airport operators, customs and immigration officials, travel agents involved in planning your trip, and our customer loyalty partners. Additionally, we disclose your Personal Information to third parties who provide services to you or to us, such as marketing firms or businesses that offer help at airports. Salesian Airlines is not accountable for how third parties use your information when they have permission to do so for their own purposes, so you should see their privacy policies for more details. Only when we have your consent will we enable third parties outside Salesian Airlines to send you marketing materials. We do not sell Personal Information to third parties.<br>

  </div>
  <footer>
    <h4><em>"choose the better wings!"</em><br><a href="pp.php" class="footer">privacy policy</a>&emsp;&emsp;&emsp;&emsp;<a href="tos.php" class="footer">terms of service</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php#contact" class="footer">contact us</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php" class="footer">help and faq</a><br>&copy; Copyright 2023 Salesian Airlines<h4>
  </footer>
  </body>
</html>