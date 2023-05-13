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
  </div>
  <div class="top">
    <h1>choose the <span>better wings!</span></h1>
  </div>
  <div class="book" id="flightdetails">
      <style type="text/css">
  span{
    color:  gold;
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
.register-photo:hover{
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  margin-top: 1%;
  transition: 0.3s;
}
.register-photo .form-container {
display: table;
height: 400px;
width:1200px;
box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
text-align:  left;
background-image:  url(img/whereto.png);
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
.form-group{
  font-size: 16px;
}
.where{
  color: white;
  text-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  font-size: 48px;
  margin-top: -50px;
}
input{
  border: 0;
  border-bottom: 2px solid;
  width: 90%;
  transition: 0.3s;
}
input:hover{
  border-color: gold;
}
input:focus{
  outline: none;
  border: 0;
  border-bottom: 2px solid;
  transition: 0.3s;
  border-color: gold;
}
select{
  border: 0;
  border-bottom: 2px solid;
  width: 35%;
  transition: 0.3s;
}
select:hover{
  border-color: gold;
}
select:focus{
  outline: none;
  border: 0;
  border-bottom: 2px solid  ;
  transition: 0.3s;
  border-color: gold;
}
.submit{
  transition: 0.3s;
}
.submit:hover{
  cursor: pointer;
  font-size: 120%;
  transition: 0.3s;
  border-color: gold;
}
label, input{
  margin-left: 5%;
}
.radio{
  margin-left: -39%;
}
.typeflight{
  margin-left: -43%;
}

  </style>
  <h1 class="where">now, where <span>to?</span></h1>
  <div class="register-photo">
  <div class="form-container">
    <div class="register-photo"></div>
    <form action="insert.php" method="POST" onsubmit="return validateForm()">
      <h2 class="text-center" style="font-size: 50px; text-align: center;">Fly with us!</h2>
      <h4 style="text-align: center;">are you excited for another flight?</h4><br>
<h2>
        <div class="form-group">
      <input  type="radio" id="oneway" name="flight" value="One-way" class="radio">
      <label for="oneway" class="typeflight" >One-way</label>
      <input type="radio" id="roundtrip" name="flight" value="Round-trip" class="radio" style="margin-left: -12%;">
      <label for="roundtrip" class="typeflight">Round-trip</label><br>
</div>
<div class="form-group">
      <label for="from">From:</label>
        <select id="from" name="from" class="input">
          <option value="Manila">Manila</option>
          <option value="Clark">Clark</option>
          <option value="Cebu ">Cebu</option>
          <option value="Davao">Davao</option>
        </select>
      <label for="To" >To:</label>
        <select id="to" name="to" class="input">
          <option value="Manila">Manila</option>
          <option value="Clark">Clark</option>
          <option value="Cebu">Cebu</option>
          <option value="Davao">Davao</option>
        </select><br>
</div>
<div class="form-group">
      <label for="departure">Departure:</label><br>
        <input type="date" id="departure" name="departure" class="input"><br>
        <label for="return">Return:</label><br>
        <input type="date" id="return" name="return" class="input"><br>
</div>
<div class="form-group">
        <label for="apax">Adults:</label><br>
        <input type="number" id="apax" name="apax" min="1" max="20" class="input" placeholder="Ages 12 and above..."><br>
        <label for="cpax">Children:</label><br>
        <input type="number" id="cpax" name="cpax" min="0" max="20" class="input" placeholder="Ages 3-11..."><br>
        <label for="ipax">Infants:</label><br>
        <input type="number" id="ipax" name="ipax" min="0" max="20" class="input" placeholder="Ages 2 and below..."><br><br>
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

          return true; // Move the return true statement after the date validation code
        }
      </script>

</div>
<div class="form-group">
  <input  type="submit" name="submit" class="submit">
</input></h2>
</div>
</h2>
</form>
    </div></div></div>
<br><br><br><br><br>
      <div class="content" style="color: black;">
    <h1><span>A new airline option for you and your family</span></h1>
    <div>
      <img src="https://static.politico.com/24/98/96722fea47878956c9165f30ae58/https-delivery.gettyimages.com/downloads/1358309391" class="img1">
    </div>
    <!-- INSERT CONTENT HERE -->
    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac finibus nisi, pulvinar blandit nisi. Nullam sit amet consectetur dui, id laoreet nibh. Sed et massa dui. Etiam sit amet magna in neque interdum lobortis eget eu ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla rutrum venenatis urna in euismod. Vivamus rhoncus, ante vitae consequat fermentum, elit diam dignissim lorem, eget sodales magna nunc eget quam. Vivamus sit amet odio venenatis lorem aliquet aliquam. Vestibulum eu finibus quam, vitae eleifend elit. Maecenas sed viverra eros. Sed lacinia, justo id pellentesque fringilla, urna turpis elementum ex, sit amet mattis turpis nulla vel eros. Donec euismod elit id leo congue vulputate. Nulla vel arcu quis sapien vulputate varius ac nec nisi. Proin a iaculis lacus.
    <br><br>
    Vestibulum rhoncus urna ut porttitor dictum. Phasellus auctor porta metus, vel lacinia justo luctus ut. Donec consequat tortor odio, at pharetra ipsum ornare quis. Vestibulum lectus nunc, imperdiet sit amet felis id, elementum porta risus. Maecenas ornare arcu sit amet erat aliquam, eget pharetra urna pellentesque. Aenean placerat ex quis augue molestie, ac ornare augue blandit. Mauris nec erat nec massa luctus interdum.
    </h2><br>
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