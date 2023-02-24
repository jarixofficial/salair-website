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
    <h1>welcome to the <span>template page.</span></h1>
  </div>
  <div class="content">
    <h2><span>About Us</span></h2>
    <div>
      <img src="https://static.politico.com/24/98/96722fea47878956c9165f30ae58/https-delivery.gettyimages.com/downloads/1358309391" class="img1">
    </div>
    <!-- INSERT CONTENT HERE -->
    <h3>An airplane (American English), or aeroplane (Commonwealth English), informally plane, is a fixed-wing aircraft that is propelled forward by thrust from a jet engine, propeller, or rocket engine. Airplanes come in a variety of sizes, shapes, and wing configurations. The broad spectrum of uses for airplanes includes recreation, transportation of goods and people, military, and research. Worldwide, commercial aviation transports more than four billion passengers annually on airliners and transports more than 200 billion tonne-kilometers of cargo annually, which is less than 1% of the world's cargo movement. Most airplanes are flown by a pilot on board the aircraft, but some are designed to be remotely or computer-controlled such as drones.<br><br>
    The Wright brothers invented and flew the first airplane in 1903, recognized as "the first sustained and controlled heavier-than-air powered flight". They built on the works of George Cayley dating from 1799, when he set forth the concept of the modern airplane (and later built and flew models and successful passenger-carrying gliders) and the work of German pioneer of human aviation Otto Lilienthal, who, between 1867 and 1896, also studied heavier-than-air flight. Lilienthal's flight attempts in 1891 are seen as the beginning of human flight. Following its limited use in World War I, aircraft technology continued to develop. Airplanes had a presence in all the major battles of World War II. The first jet aircraft was the German Heinkel He 178 in 1939. The first jet airliner, the de Havilland Comet, was introduced in 1952. The Boeing 707, the first widely successful commercial jet, was in commercial service for more than 50 years, from 1958 to at least 2013.
    <h3><br>
    <hr><br>
    <div>
      <img src="https://airport-world.com/wp-content/uploads/2020/05/heathrow_17581964772373-2.jpg" class="img2">
    </div>
    <h2><span>Bullet List</span></h2>
    <div class="list">
      <ul>
        <h3>
        <li>Manila</li>
        <li>Clark</li>
        <li>Cebu</li>
        <li>Davao</li>
        <li>Palawan</li>
        <li>Boracay</li>
        <li>Iloilo</li>
        </h3>
      </ul>
    </div><br>
    <hr><br>
    <h2><span>More Text</span></h2>
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac finibus nisi, pulvinar blandit nisi. Nullam sit amet consectetur dui, id laoreet nibh. Sed et massa dui. Etiam sit amet magna in neque interdum lobortis eget eu ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla rutrum venenatis urna in euismod. Vivamus rhoncus, ante vitae consequat fermentum, elit diam dignissim lorem, eget sodales magna nunc eget quam. Vivamus sit amet odio venenatis lorem aliquet aliquam. Vestibulum eu finibus quam, vitae eleifend elit. Maecenas sed viverra eros. Sed lacinia, justo id pellentesque fringilla, urna turpis elementum ex, sit amet mattis turpis nulla vel eros. Donec euismod elit id leo congue vulputate. Nulla vel arcu quis sapien vulputate varius ac nec nisi. Proin a iaculis lacus.<br>
    <div>
      <img src="https://img.freepik.com/free-photo/tropical-beach_74190-188.jpg" class="img3">
    </div><br>Vestibulum rhoncus urna ut porttitor dictum. Phasellus auctor porta metus, vel lacinia justo luctus ut. Donec consequat tortor odio, at pharetra ipsum ornare quis. Vestibulum lectus nunc, imperdiet sit amet felis id, elementum porta risus. Maecenas ornare arcu sit amet erat aliquam, eget pharetra urna pellentesque. Aenean placerat ex quis augue molestie, ac ornare augue blandit. Mauris nec erat nec massa luctus interdum.<br><br>Praesent vitae imperdiet purus, vel accumsan eros. Etiam faucibus justo tincidunt, sodales nunc at, pharetra quam. Quisque pretium tellus vel lobortis finibus. Nullam quis condimentum magna, quis sodales velit. Nulla vitae libero et nisi ultrices aliquam sit amet ut ipsum. Mauris urna magna, aliquet ut ex vitae, imperdiet scelerisque sem. Sed tempus commodo maximus. In felis sapien, placerat nec lacus sit amet, ultricies tempor justo. Vestibulum sit amet ultrices neque. Fusce condimentum mauris ac tincidunt sollicitudin. Phasellus fringilla arcu quis ipsum tempor tincidunt. In aliquam metus nec velit volutpat bibendum. Fusce ut aliquam metus, ac consectetur neque. Praesent nulla velit, volutpat ac lacus at, pulvinar porttitor eros.<br><br>Proin et blandit risus. Nam placerat commodo ligula, at ultrices neque egestas at. Etiam ornare est id commodo eleifend. Morbi facilisis ultrices lacus, a ullamcorper velit. Morbi tempor, nisi vitae feugiat luctus, sem neque condimentum nisi, sit amet pulvinar nisi ante vitae odio. Sed arcu elit, mollis a cursus id, hendrerit et felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eget felis porta, tristique tellus eu, euismod lacus. Etiam at neque justo. Vivamus maximus bibendum justo sed condimentum.<br><br>Morbi venenatis elit suscipit libero iaculis vestibulum. Nullam rhoncus, quam fringilla maximus hendrerit, felis ligula molestie orci, sed aliquet lorem lorem at sem. Aenean elit turpis, feugiat in placerat sed, ultrices eu lacus. Vivamus ut feugiat arcu. Vivamus maximus sapien sit amet placerat fermentum. Sed lectus dui, tempus fermentum efficitur eu, congue vitae lacus. Donec pretium libero ac justo aliquam, non fringilla augue pretium. Maecenas euismod arcu dolor, ac luctus dui elementum nec. Etiam non metus vel odio pellentesque vestibulum sed ut mauris. Aenean luctus vitae magna ac ultricies. Donec in libero lobortis, luctus enim sed, pharetra mauris. Ut odio augue, scelerisque eget hendrerit ut, sollicitudin sed lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. In at ornare magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque eu velit tincidunt, consequat diam imperdiet, accumsan tellus.</h3>
  </div>
  <footer>
    <h4><em>"choose the better wings!"</em><br><a href="pp.php" class="footer">privacy policy</a>&emsp;&emsp;&emsp;&emsp;<a href="tos.php" class="footer">terms of service</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php#contact" class="footer">contact us</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php" class="footer">help and faq</a><br>&copy; Copyright 2023 Salesian Airlines<h4>
  </footer>
  </body>
</html>