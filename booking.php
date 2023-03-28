<?php 
// Connect to the database 
$servername = "localhost"; 
$username = "yourusername"; 
$password = "yourpassword"; 
$dbname = "yourdatabase"; 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connecƟon
if (!$conn) { 
die("ConnecƟon failed: " . mysqli_connect_error());
} 
// Get the data from the booking form 
$name = $_POST['name']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$date = $_POST['date']; 
$Ɵme = $_POST['Ɵme'];
$locaƟon = $_POST['locaƟon'];
$duraƟon = $_POST['duraƟon'];
// Insert the data into the bookings table 
$sql = "INSERT INTO bookings (name, email, phone, date, Ɵme, locaƟon, duraƟon) VALUES ('$name', 
'$email', '$phone', '$date', '$Ɵme', '$locaƟon', '$duraƟon')";
if (mysqli_query($conn, $sql)) { 
echo "Booking submiƩed successfully!";
} else { 
 echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
} 
mysqli_close($conn); 
?> 
