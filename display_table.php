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
$sql = "SELECT * FROM Artist_Table";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  //start a form. Form is created here
  echo "<form action \"www.vsu.edu\" method = \"POST\">";

  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_PrimaryKey = $row["artist_id"];
    echo "<h2>$_PrimaryKey</h2>";
    //create a radio button input per row
    echo "<input type = \"radio\" name = \"artistRecords\" value = \"$_PrimaryKey\">";
    echo "<label>id: " . $row["artist_id"]. " - DOB: " . $row["DOB"]. "- Number of Albums: " . 
        $row["number_of_albums"]. " - Name: ". $row["Name"] . " - Most Popular Album: " . $row["Most_popular_album"] . " - Height: " . $row["Height"]
        .  " - Gender: " . $row["Gender"]. " - Grammys: " . $row["Grammys"]. "</label><br><br>";

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