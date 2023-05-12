<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Passenger Details</title>
	<link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;400&display=swap" rel="stylesheet">
  <center>
<script>
    function duplicateForm() {
      var num = parseInt(document.getElementById('num').value);
      var formContainer = document.getElementById('formContainer');
      formContainer.innerHTML = ''; // Clear previous content
      
      for (var i = 0; i < num; i++) {
        var form = document.createElement('form');
        form.innerHTML = `
          <h2>Form ${i + 1}</h2>
          <label for="name${i}">Name:</label>
          <input type="text" id="name${i}" name="name[]" required><br><br>
          
          <label for="dob${i}">Date of Birth:</label>
          <input type="date" id="dob${i}" name="dob[]" required><br><br>
          
          <label for="gender${i}">Gender:</label>
          <select id="gender${i}" name="gender[]" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select><br><br>
          
          <label for="nationality${i}">Nationality:</label>
          <input type="text" id="nationality${i}" name="nationality[]" required><br><br>
          
          <label for="phone${i}">Phone Number:</label>
          <input type="tel" id="phone${i}" name="phone[]" required><br><br>
          
          <label for="email${i}">Email:</label>
          <input type="email" id="email${i}" name="email[]" required><br><br>
          
          <hr>
        `;
        
        formContainer.appendChild(form);
      }
    }
  </script>
</head>
<body>
  <h1>Passenger Details</h1>
  <label for="num">Enter the number of passengers:</label>
  <input type="number" id="num" name="num" min="1" max="20" required>
  <button onclick="duplicateForm()">Submit</button>
  
  <div id="formContainer"></div>

  <form action="process_form.php" method="POST"><br><br>
    <input type="submit" value="Submit Forms">
  </form>
</body>
</html>