<?php
$servername = "mysql";
$username = "root";
$password = "secret";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<br>
<?php
echo "ini belajar pertamaku";
echo "ini asik sekali";
echo "ini otomatis loh";
?>