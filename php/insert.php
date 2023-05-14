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

// Prepare and execute the SQL query to insert the form data into the "booking" table
try {
    $stmt = $pdo->prepare("INSERT INTO booking (Flight, fFrom, fTo, Departure, fReturn, aPax, cPax, iPax)
                           VALUES (:flight, :from, :to, :departure, :return, :apax, :cpax, :ipax)");

    $stmt->bindParam(':flight', $_POST['flight']);
    $stmt->bindParam(':from', $_POST['from']);
    $stmt->bindParam(':to', $_POST['to']);
    $stmt->bindParam(':departure', $_POST['departure']);
    $stmt->bindParam(':return', $_POST['return']);
    $stmt->bindParam(':apax', $_POST['apax']);
    $stmt->bindParam(':cpax', $_POST['cpax']);
    $stmt->bindParam(':ipax', $_POST['ipax']);

    $stmt->execute();

    echo "Form data inserted successfully into the booking table.";
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>