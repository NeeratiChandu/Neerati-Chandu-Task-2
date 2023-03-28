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
// Select all the bookings from the bookings table 
$sql = "SELECT * FROM bookings"; 
$result = mysqli_query($conn, $sql); 
if (mysqli_num_rows($result) > 0) { 
 // Output data of each row 
 while($row = mysqli_fetch_assoc($result)) { 
 echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Phone:$row["phone"]. 
. " - Date: " $row["date”]. " - Time: " . $row["Ɵme"]." - LocaƟon: " . $row["locaƟon"].
 " - DuraƟon: " . $row["duraƟon"]. "<br>";
} 
} else { 
echo "No bookings found."; 
} 
mysqli_close($conn); 
?> 
