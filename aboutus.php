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
  <link rel="stylesheet" href="css/aboutus.css">

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
      <li><a href="#about">about us</a></li>
      <li><a href="login.php">login</a></li>
    </ul>
    <div class="help">
      <a href="faq.php"><img src="img/icons/help.svg"></a>
    </div>
  </nav>
  <div class="top">
    <!-- HEADER TEXT e.g. "Wanna know more about us?" or "Details for your flight" -->
    <h1>how did we <span>come to be?</span></h1>
  </div>
  <div class="content">
    <h2><span>Who We Are</span></h2>
    <hr><br>
    <!-- INSERT CONTENT HERE -->
    <h3 class="info">Salesian Airlines Philippines (SAL) is a domestic airline operating in the Philippines, serving
      popular destinations in the country. The airline’s main hub is in Manila, in Ninoy Aquino International Airport,
      with secondary hubs operating in Cebu, Clark, and Davao.</h3><br><br>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8424.22160316124!2d121.01131366945346!3d14.512071534728614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cec5d2bb4d77%3A0x8a24fa628a114411!2sNinoy%20Aquino%20International%20Airport!5e0!3m2!1sen!2sph!4v1677151799250!5m2!1sen!2sph"
      width="600" height="700" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
    <h3><span>Our Vision</span><br>We look forward to a future where Salesian Airlines emerges as the premier low-cost
      domestic airline in the Philippines, and as a common airline choice for Filipinos to book with as second-nature,
      providing a world-class travel experience that fosters the rich culture and traditions of the Filipino people, and
      outstanding customer service that honors core Salesian values and the teachings of the Catholic
      Church.<br><br><span>Our Mission</span><br>Our mission is to offer a travel experience that reflects the warmth,
      hospitality, and bayanihan spirit of the Filipino people, and to consider the teachings of Don Bosco and the
      Church in our services and customer interactions. We aim to connect people all over the Filipino archipelago with
      a safe and trustworthy environment in our aircrafts, regardless of their background or social status, to help them
      connect with loved ones, explore new places, and create lasting memories.<br><br>
      <span>Our Core Values</span>
      <div class="list">
        <ul>
          <h3>
            <li>Customer-First Service</li>
            <li>Responsibility and Accountability</li>
            <li>Transparency and Integrity</li>
            <li>Sustainability and Love for the Environment</li>
            <li>Empowerment of the Filipino Spirit</li>
            <li>Embodiment of the Salesian Mission and Courage</li>
          </h3>
        </ul>
      </div><br><br>
      <h2><span>Early Beginnings and Upbringing</span></h2>
      <hr><br>
      <div>
        <img src="https://www.rocketroute.com/wp-content/uploads/Cessna-208-Caravan-007-560x373.jpg" class="img1">
      </div>
      <h3>In 1989, Salesian Airlines was first founded by Salesian priests in the Philippines under the name, “SDB
        Flights”. We were originally established to aid in the transportation of Salesian missionaries in the
        Philippines. We started off by using propeller airplanes from Cessna, specifically their high capacity caravan
        model, which were donated by our sponsors. When Mt. Pinatubo erupted in 1991, we provided aid and relief to
        civilians and churches in need through physical donations like food and supplies and especially through air
        transportation. Throughout 1990-2009, we provided similar aid during times of disaster. We’ve also participated
        in a multitude of social action missions during this time period. In 2000, we started serving flights to other
        congregations and missionaries, charities, and relief organizations through a partnership program. Around
        2007-2009, we had plans and meetings of becoming a passenger airline which soon came into fruition.</h3><br><br>
      <h2><span>Expansion and Commercialization</span></h2>
      <hr><br>
      <h3>
        <div>
          <img
            src="https://media.cntraveler.com/photos/60b7fe1bf800cb39e468a967/3:2/w_3630,h_2420,c_limit/How%20Early%20Should%20You%20Arrive%20at%20the%20Airport_GettyImages-1059950920.jpg"
            class="img2">
        </div>
        We began expanding our service in 2009 as part of our 20th anniversary and we started offering small passenger
        flights. We were still using the same Cessna planes at the time and we were operating as a super low-cost
        carrier airline. Our last aid mission under the name “SDB Flights” was during the Typhoon Yolanda Relief
        Operation in 2013. The following year in 2014, we finally rebranded to “Salesian Airlines”. The same year, we
        had a massive boost in popularity and we were now recognized by the Civil Aviation Authority of the Philippines.
        We slowly started to expand to larger plane models, moving out of Cessna and becoming a customer of Airbus. We
        had a rapid increase in profit and popularity through 2016-2019 and we were recognized as a popular low-cost
        carrier airline and an alternative to other commercial airlines. Everything was running smoothly until in 2020, the COVID-19
        pandemic run rampant and we had to temporarily shut down our services.
      </h3><br><br>
      <h2><span>What's Next?</span></h2>
      <hr><br>
      <h3>
        <div>
          <img src="https://www.worldatlas.com/r/w1200/upload/fb/46/c6/shutterstock-311421530.jpg" class="img3">
        </div>
        As we are slowly starting to get our services back up, we are optimistic and hopeful for the future of our
        airline. We’ve had some discussions of expanding our service to other countries in east and southeast Asia
        somewhere down the line, and we hope that we will soon be able to connect people from around the world with the
        help of our airline company. It has always been in our interest to help people all over the world, and to help
        attain that vision, we’ve made our website. The internet has been growing at a rapid rate in recent time, so it
        is important that we make this website so we can keep up with our competition. We hope that you and many other
        people will enjoy our service and we hope that we will be able to make a positive impact on the world. As Don
        Bosco once said, Meliora Eligo! “Choose the better wings!”
      </h3><br><br>
  </div>
  <footer>
    <h4><em>"choose the better wings!"</em><br><a href="pp.php" class="footer">privacy
        policy</a>&emsp;&emsp;&emsp;&emsp;<a href="tos.php" class="footer">terms of
        service</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php#contact" class="footer">contact
        us</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php#" class="footer">help and faq</a><br>&copy; Copyright 2023
      Salesian Airlines<h4>
  </footer>
</body>

</html>