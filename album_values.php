<?php
$Title = $_POST["Title"];
$Album_id = $_POST["Album_id"];
$Release_date = $_POST["Release_date"];
$Author = $_POST["Author"];
$Lead_Single = $_POST["Lead_Single"];
$First_week_sales = $_POST["First_week_sales"];
$Genre = $_POST["Genre"];

echo "Title:". $Title;
echo "<br><br>";
echo "Album_id:". $Album_id;
echo "<br><br>";
echo "Release_date:". $Release_date;
echo "<br><br>";
echo "Author:". $Author;
echo "<br><br>";
echo "Lead_Single:". $Lead_Single;
echo "<br><br>";
echo "First_week_sales:". $First_week_sales;
echo "<br><br>";
echo "Genre:". $Genre;
echo "<br><br>";

$servername = "localhost";
$username = "marquis_uni_db2";
$password = "1234";
$dbname = "unidb2";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Album_Table (Title, Album_id, Release_date, Author, Lead_Single, First_week_sales, Genre)
                       VALUES ('$Title', '$Album_id', '$Release_date', '$Author', '$Lead_Single', $First_week_sales, '$Genre')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>











