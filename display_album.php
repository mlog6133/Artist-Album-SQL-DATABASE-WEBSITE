<?php
$servername = "localhost";
$username = "marquis_uni_db2";
$password = "1234";
$dbname = "unidb2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//A selection query
$sql = "SELECT * FROM Album_Table";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  //start a form. Form is created here
  echo "<form action \"Admin.php\" method = \"POST\">";

  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_PrimaryKey = $row["album_id"];
    echo "<h2>$_PrimaryKey</h2>";
    //create a radio button input per row
    echo "<input type = \"radio\" name = \"albumRecords\" value = \"$_PrimaryKey\">";
    echo "<label>id: " . $row["album_id"]. " - Title: " . $row["title"]. "- Release Date: " . 
        $row["Release_Date"]. " - Author: ". $row["Author"] . " - Lead Single: " . $row["Lead_Single"] . " - First Week Sales: " . $row["First_Week_Sales"]
        .  " - Genre: " . $row["Genre"]. "</label><br><br>";

  }

  echo "<input type = \"submit\" value = \"Delete Record\" name = \"deleteSubmit\">";

  echo "<input type = \"submit\" value = \"Update Record\" name = \"updateSubmit\">";

  //end the form
  echo "</form>";
} else {
  echo "0 results";
}
$conn->close();
?>