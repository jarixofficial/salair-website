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
      <li><a href="login.php">log out</a></li>
    </ul>
    <div class="help">
      <a href="faq.php"><img src="img/icons/help.svg"></a>
    </div>
  </nav>
  </div>
  <div class="top">
    <h1>choose the <span>better wings!</span></h1>
  </div>
  <div class="book" id="flightdetails">
    <style type="text/css">
      span {
        color: gold;
      }

      .register-photo {
        display: inline-flex;
        border: 5px solid;
        border-radius: 40px;
        border-color: white;
        margin: 20px;
        border: grey solid 1px;
        margin-left: 30px;
        transition: 0.3s;
      }

      .register-photo:hover {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        margin-top: 1%;
        transition: 0.3s;
      }

      .register-photo .form-container {
        display: table;
        height: 400px;
        width: 1200px;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        text-align: left;
        background-image: url(img/whereto.png);
        background-size: 1600px;
        background-position: left;
        background-repeat: no-repeat;
        border-radius: 40px;
      }

      form {
        display: table-cell;
        height: 500px;
        width: 500px;
        background-color: white;
        color: black;
        border-radius: 0px 40px 40px 0px;
        padding-top: 2%;
        padding-bottom: 1%;
      }

      .form-group {
        font-size: 16px;
      }

      .where {
        color: white;
        text-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        font-size: 48px;
        margin-top: -50px;
      }

      input {
        border: 0;
        border-bottom: 2px solid;
        width: 90%;
        transition: 0.3s;
      }

      input:hover {
        border-color: gold;
      }

      input:focus {
        outline: none;
        border: 0;
        border-bottom: 2px solid;
        transition: 0.3s;
        border-color: gold;
      }

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

      label,
      input {
        margin-left: 5%;
      }

      .radio {
        margin-left: -39%;
      }

      .typeflight {
        margin-left: -43%;
      }

      li {
        color: black;
      }
    </style>
    <h1 class="where">now, where <span>to?</span></h1>
    <div class="register-photo">
      <div class="form-container">
        <div class="register-photo"></div>
        <form action="passengerdetails.php" method="GET" onsubmit="return validateForm()">
          <h2 class="text-center" style="font-size: 50px; text-align: center;">Fly with us!</h2>
          <h4 style="text-align: center;">are you excited for another flight?</h4><br>
          <h2>
            <div class="form-group">
              <input type="radio" id="oneway" name="flight" value="One-way" class="radio">
              <label for="oneway" class="typeflight">One-way</label>
              <input type="radio" id="roundtrip" name="flight" value="Round-trip" class="radio"
                style="margin-left: -12%;">
              <label for="roundtrip" class="typeflight">Round-trip</label><br>
            </div>
            <div class="form-group">
              <label for="from">From:</label>
              <select id="from" name="from" class="input">
                <option value="Bacolod">Bacolod</option>
                <option value="Bohol">Bohol</option>
                <option value="Boracay">Boracay</option>
                <option value="Butuan">Butuan</option>
                <option value="Cagayan">Cagayan de Oro</option>
                <option value="Calbayog">Calbayog</option>
                <option value="Camiguin">Camiguin</option>
                <option value="Cebu ">Cebu</option>
                <option value="Clark">Clark</option>
                <option value="Coron">Coron</option>
                <option value="Cotabato">Cotabato</option>
                <option value="Davao">Davao</option>
                <option value="Dipolog">Dipolog</option>
                <option value="Dumaguete">Dumaguete</option>
                <option value="Santos">General Santos</option>
                <option value="Iloilo">Iloilo</option>
                <option value="Kalibo">Kalibo</option>
                <option value="Laoag">Laoag</option>
                <option value="Legazpi">Legazpi</option>
                <option value="Manila">Manila</option>
                <option value="Masbate">Masbate</option>
                <option value="Naga">Naga</option>
                <option value="Ozamiz">Ozamiz</option>
                <option value="Pagadian">Pagadian</option>
                <option value="Pagudpud">Pagudpud</option>
                <option value="Puerto">Puerto Princesa</option>
                <option value="Roxas">Roxas</option>
                <option value="SanJose">San Jose</option>
                <option value="Siargao">Siargao</option>
                <option value="Siquijor">Siquijor</option>
                <option value="Surigao">Surigao</option>
                <option value="Tacloban">Tacloban</option>
                <option value="TawiTawi">Tawi-Tawi</option>
                <option value="Tuguegarao">Tuguegarao</option>
                <option value="Virac">Virac</option>
                <option value="Zamboanga">Zamboanga</option>
              </select>
              <label for="to">To:</label>
              <select id="to" name="to" class="input">
                <option value="Bacolod">Bacolod</option>
                <option value="Bohol">Bohol</option>
                <option value="Boracay">Boracay</option>
                <option value="Butuan">Butuan</option>
                <option value="Cagayan">Cagayan de Oro</option>
                <option value="Calbayog">Calbayog</option>
                <option value="Camiguin">Camiguin</option>
                <option value="Cebu ">Cebu</option>
                <option value="Clark">Clark</option>
                <option value="Coron">Coron</option>
                <option value="Cotabato">Cotabato</option>
                <option value="Davao">Davao</option>
                <option value="Dipolog">Dipolog</option>
                <option value="Dumaguete">Dumaguete</option>
                <option value="Santos">General Santos</option>
                <option value="Iloilo">Iloilo</option>
                <option value="Kalibo">Kalibo</option>
                <option value="Laoag">Laoag</option>
                <option value="Legazpi">Legazpi</option>
                <option value="Manila">Manila</option>
                <option value="Masbate">Masbate</option>
                <option value="Naga">Naga</option>
                <option value="Ozamiz">Ozamiz</option>
                <option value="Pagadian">Pagadian</option>
                <option value="Pagudpud">Pagudpud</option>
                <option value="Puerto">Puerto Princesa</option>
                <option value="Roxas">Roxas</option>
                <option value="SanJose">San Jose</option>
                <option value="Siargao">Siargao</option>
                <option value="Siquijor">Siquijor</option>
                <option value="Surigao">Surigao</option>
                <option value="Tacloban">Tacloban</option>
                <option value="TawiTawi">Tawi-Tawi</option>
                <option value="Tuguegarao">Tuguegarao</option>
                <option value="Virac">Virac</option>
                <option value="Zamboanga">Zamboanga</option>
              </select>
            </div>
            <div class="form-group">
              <label for="departure">Departure:</label><br>
              <input type="date" id="departure" name="departure" class="input"><br>
              <label for="return">Return:</label><br>
              <input type="date" id="return" name="return" class="input"><br>
            </div>
            <div class="form-group">
              <label for="apax">Adults:</label><br>
              <input type="number" id="apax" name="apax" min="1" max="20" class="input"
                placeholder="Ages 12 and above..." required><br>
              <label for="cpax">Children:</label><br>
              <input type="number" id="cpax" name="cpax" min="0" max="20" class="input" placeholder="Ages 3-11..."
                required><br>
              <label for="ipax">Infants:</label><br>
              <input type="number" id="ipax" name="ipax" min="0" max="20" class="input"
                placeholder="Ages 2 and below..." required><br><br>
              <script>
                function validateForm() {
                  var number1 = parseInt(document.getElementById("apax").value);
                  var number2 = parseInt(document.getElementById("cpax").value);
                  var number3 = parseInt(document.getElementById("ipax").value);

                  if (number1 + number2 + number3 === 0) {
                    alert("At least one field must have a non-zero value.");
                    return false;
                  } else if (number1 + number2 + number3 > 20) {
                    alert("The number of total passengers cannot exceed 20.");
                    return false;
                  }

                  var date1 = new Date(document.getElementById("departure").value);
                  var date2 = new Date(document.getElementById("return").value);

                  var currentDate = new Date();
                  currentDate.setHours(0, 0, 0, 0); // Set current date to the beginning of the day

                  if (date1 < currentDate) {
                    alert("Departure must be in the future.");
                    return false;
                  } else if (date2 <= date1) {
                    alert("Your return date must be ahead of your departure.");
                    return false;
                  }

                  var from = document.getElementById("from").value;
                  var to = document.getElementById("to").value;

                  if (from === to) {
                    alert("From and to destinations cannot be the same.");
                    return false;
                  }

                  return true;
                };
              </script>


            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="submit">
              <p id="result"></p>
              </input>
          </h2>
      </div>
      </h2>
      </form>
    </div>
  </div>
  </div>
  <br><br><br><br><br>
  <div class="content" style="color: black;">
    <h1><span>A new airline option for you and your family</span></h1>
    <hr><br>
    <div>
      <img src="img/family.jpg" class="img1">
    </div>
    <!-- INSERT CONTENT HERE -->
    <h2>Welcome to Salesian Airlines!
      <br><br>
      Fly with the spirit and pride of the Filipino spirit, and the spirituality and integrity of the Salesian
      mission.<br><br>
      Here at Salesian Airlines, we are dedicated to serving the best for our passengers, regardless of the background.
      Our main values are about empowering transparency and integrity, while keeping the satisfaction of our passengers
      well above the ceiling, along with sustaining the beauty of our environment with our methods.
    </h2><br><br>
    <div>
      <img src="img/relief.jpg" class="img2">
    </div>
    <h2><span>From Missionaries to the Filipino Population</span><br></h2>
    <h3>
      Starting out as an air transport service for Salesian Missionaries to spread the Salesian love of Don Bosco to
      several places here in the Philippines, Salesian Airlines has moved up to commit to serving the Filipino people by
      providing sky services for those who requires so. <br><br> Yet, we still keep our roots by continuing our
      missionary branch of Salesian Airlines, the Salesian Airlines Missionary Fleet (SAMF).<br><br>
      <br>
    </h3>
    <h1><span>Explore the Philippines with our industry-standard aircrafts</span></h1>
    <hr><br>
    <h2 style="text-align: center;">Perhaps you wanna go to...</h2>
    <div class="gallery-image">
      <div class="img-box">
        <img src="img/boracay.jpg" alt="" />
        <div class="transparent-box">
          <div class="caption">
            <p>The White Beaches of Boracay?</p>
            <p class="opacity-low">Aklan</p>
          </div>
        </div>
      </div>
      <div class="img-box">
        <img src="img/elnido.jpg" alt="" />
        <div class="transparent-box">
          <div class="caption">
            <p>The View of El Nido?</p>
            <p class="opacity-low">Palawan</p>
          </div>
        </div>
      </div>
      <div class="img-box">
        <img src="img/bohol.jpg" alt="" />
        <div class="transparent-box">
          <div class="caption">
            <p>The Chocolate Hills of Bohol?</p>
            <p class="opacity-low">Bohol</p>
          </div>
        </div>
      </div>
      <div class="img-box">
        <img src="img/iloilo.jpg" alt="" />
        <div class="transparent-box">
          <div class="caption">
            <p>The Villanueva Building in Iloilo City?</p>
            <p class="opacity-low">Iloilo</p>
          </div>
        </div>
      </div>
      <div class="img-box">
        <img src="img/siquijor.jpg" alt="" />
        <div class="transparent-box">
          <div class="caption">
            <p>The Waters of Lugnason Falls?</p>
            <p class="opacity-low">Siquijor</p>
          </div>
        </div>
      </div>
      <div class="img-box">
        <img src="img/ambasing.jpg" alt="" />
        <div class="transparent-box">
          <div class="caption">
            <p>The Terraces of Ambasing, Sagada?</p>
            <p class="opacity-low">Mountain Province</p>
          </div>
        </div>
      </div>
      <div class="img-box">
        <img src="img/vigan.jpg" alt="" />
        <div class="transparent-box">
          <div class="caption">
            <p>The Historical Buildings of Vigan?</p>
            <p class="opacity-low">Ilocus Sur</p>
          </div>
        </div>
      </div>
      <div class="img-box">
        <img src="img/davao.jpg" alt="" />
        <div class="transparent-box">
          <div class="caption">
            <p>The Resorts of Davao City?</p>
            <p class="opacity-low">Davao</p>
          </div>
        </div>
      </div>
    </div>
    <style type="text/css">
      .heading {
        text-align: center;
        font-size: 2.0em;
        letter-spacing: 1px;
        padding: 40px;
        color: white;
      }

      .gallery-image {
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      .gallery-image img {
        height: 250px;
        width: 350px;
        transform: scale(1.0);
        transition: transform 0.4s ease;
      }

      .img-box {
        box-sizing: content-box;
        margin: 10px;
        height: 250px;
        width: 350px;
        overflow: hidden;
        display: inline-block;
        color: white;
        position: relative;
        background-color: white;
        border-radius: 20px;
        border: black solid 3px;
      }

      .caption {
        position: absolute;
        bottom: 5px;
        left: 20px;
        opacity: 0.0;
        transition: transform 0.3s ease, opacity 0.3s ease;
      }

      .transparent-box {
        height: 250px;
        width: 350px;
        background-color: rgba(0, 0, 0, 0);
        position: absolute;
        top: 0;
        left: 0;
        transition: background-color 0.3s ease;
      }

      .img-box:hover img {
        transform: scale(1.1);
      }

      .img-box:hover .transparent-box {
        background-color: rgba(0, 0, 0, 0.5);
      }

      .img-box:hover .caption {
        transform: translateY(-20px);
        opacity: 1.0;
      }

      .img-box:hover {
        cursor: pointer;
      }

      .caption>p:nth-child(2) {
        font-size: 0.8em;
      }

      .opacity-low {
        opacity: 0.5;
      }
    </style>
    </section>
    <div>
      <img src="img/airbus.png" class="img3">
    </div>
    <h2><span>Going NEO: Salesian Airlines' Commitment to Sustainability</span></h2>
    <h2>At Salesian Airlines, we're committed to minimizing our environmental impact. As part of this ongoing effort,
      we're proud to announce that we're upgrading our fleet by introducing the new A320neo family of aircraft from
      Airbus. These fuel-efficient planes will replace our older models, enabling us to reduce our carbon footprint
      further while continuing to provide safe and comfortable air travel for our customers.<br><span>Current Commercial
        Fleet (2023)</span></h2>
    <div class="list">
      <ul>
        <h2>
          <li>Airbus A319neo</li>
          <li>Airbus A320neo</li>
          <li>Airbus A321neo</li>
        </h2>
      </ul>
    </div>
    <div>
      <img src="img/cessna.png" class="img4">
    </div>
    <h2><span>Keeping the Salesian Mission Alive</span></h2>
    <h2>At Salesian Airlines, we're proud of our roots as a missionary airliner that provided vital air transport for
      missionary flights, humanitarian missions, and disaster relief operations. As we expand our commercial services,
      we remain committed to upholding this legacy by maintaining our original fleet from SDB Flights. This fleet now
      includes our two new Gulfstream G400 private jets, which are designed for high-speed flights to deliver urgent
      assistance to those in need. With this addition to our fleet, we're reaffirming our dedication to upholding the
      Salesian mission of leading young people to Christ and helping out those in need with the true Bayanihan spirit of
      the Filipinos.<br><span>Current Missionary Fleet (2023)</span></h2>
    <div class="list">
      <ul>
        <h2>
          <li>Cessna 172 Skyhawk</li>
          <li>Cessna 208 Caravan</li>
          <li>Gulfstream G400</li>
        </h2>
      </ul>
    </div><br>
    <div class="final">
      <div class="infinal"><br>
        <h1>So what are you waiting for? Book a flight now!</h1><a href="index.php#flightdetails"><button
            class="cta">Let's choose the better wings!</button></a><br><br>
      </div>
    </div><br><br><br>
  </div>
  <footer>
    <h4><em>"choose the better wings!"</em><br><a href="pp.php" class="footer">privacy
        policy</a>&emsp;&emsp;&emsp;&emsp;<a href="tos.php" class="footer">terms of
        service</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php#contact" class="footer">contact
        us</a>&emsp;&emsp;&emsp;&emsp;<a href="faq.php" class="footer">help and faq</a><br>&copy; Copyright 2023
      Salesian Airlines<h4>
  </footer>
</body>

</html>