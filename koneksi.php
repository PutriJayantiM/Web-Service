<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akademik";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT nim, nama, alamat,progdi FROM mahasiswa";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<mahasiswa>
<nim>".$row["nim"]."</nim>
<nama>".$row["nama"]."</nama>
<alamat>".$row["alamat"]."</alamat>
<progdi>".$row["progdi"]."</progdi>
</mahasiswa>"."</br>";
}
} else {
echo "0 results";
}
$conn->close();
?>