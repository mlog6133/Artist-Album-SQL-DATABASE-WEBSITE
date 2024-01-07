<?php
    $artist_id = $_POST["artistRecord2"];

    //Retrieve inputs from previous script
    $DOB = $_POST["DOB"];
    $number_of_albums = $_POST["number_of_albums"];
    $Name = $_POST["Name"];
    $Most_popular_album = $_POST["Most_popular_album"];
    $Height = $_POST["Height"];
    $Gender = $_POST["Gender"];
    $Grammys = $_POST["Grammys"];

    
    

    echo "<h2>Updating values for $artist_id </h2>";
    echo "<h3>Values: $DOB $number_of_albums $Name  $Most_popular_album $Height $Gender $Grammys</h3>";

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

    $sql = "UPDATE Artist_Table 
            SET DOB = '$DOB', number_of_albums = $number_of_albums, Name = '$Name', Most_popular_album = '$Most_popular_album', Height = $Height, Gender = '$Gender', Grammys = $Grammys
            WHERE artist_id='$artist_id'";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    include 'display_table.php';

    //$conn->close();
?>