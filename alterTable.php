<?php
/**
 * detect which button was clicked from previous php
 */

 //get value of the radio button input from previous script
 $artist_id = $_POST["artistRecords"];
 echo "<h2>$artist_id</h2>";
 //If delete button is clicked, then do the following
 
//  if (isset($_POST["deleteSubmit"])){
//     $servername = "localhost";
//     $username = "marquis_uni_db2";
//     $password = "1234";
//     $dbname = "unidb2";
    
//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // sql to delete a record
//     $sql = "DELETE FROM Artist_Table WHERE artist_id = '$artist_id'";

//     if ($conn->query($sql) === TRUE) {
//         echo "Record deleted successfully";
//     } else {
//         echo "Error deleting record: " . $conn->error;
//     }

//     include 'display_table.php';

//     //$conn->close();
//     }

//     //If delete button is clicked, then do the following
//  if (isset($_POST["updateSubmit"])){
//     echo "<h2>Enter new values for $artist_id</h2>";

//     /*Create a form for updating all values except for primary key */
//     echo "<form action = \"update.php\" method = \"post\">";
//     /**
//      * Create hidden value for primary key: snumber
//      * This value is important to carry on to next script so that we can
//      * execute the update query
//      */
//     echo "<input type=\"hidden\" name = \"artistRecord2\" value = \"$artist_id\">";

//     //Student name input
//     echo "<label>DOB: </label>";
//     echo "<input type = \"date\" name=\"DOB\">";
//     echo "<br>";
//     //entry date input
//     echo "<label>Number Of Albums: </label>";
//     echo "<input type = \"number\"  name=\"number_of_albums\">";
//     echo "<br>";
//     //GPA input
//     echo "<label>Name: </label>";
//     echo "<input type = \"text\"   name=\"Name\">";
//     echo "<br>";
//     //credits input
//     echo "<label>Most Popular Album : </label>";
//     echo "<input type = \"text\"  name=\"Most_popular_album\">";
//     echo "<br>";


//     echo "<label>Height (in inches) : </label>";
//     echo "<input type = \"number\"  name=\"Height\">";
//     echo "<br>";

//     echo "<label>Gender: </label>";
//     echo "<input type = \"text\"  name=\"Gender\">";
//     echo "<br>";

//     echo "<label>Grammys: </label>";
//     echo "<input type = \"number\"  name=\"Grammys\">";
//     echo "<br>";
//     //Submit
//     echo "<input type = \"submit\" value = \"update\">";
//  }
//  echo "hello";
 
?>