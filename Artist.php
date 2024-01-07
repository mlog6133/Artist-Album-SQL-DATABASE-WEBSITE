<!DOCTYPE html>
<html>

<head>
    <title>Artist Inquiries</title>
    <link rel="stylesheet" href="Homepage.css">
    <style>
         .search-container {
            text-align: center;
            margin-top: 50px;
        }

        .search-box {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="div1">
        <h1 class="firstH1">Artist Inquiries</h1>
        <img class="musicNote" src="guy.gif" width="200px">
        <img class="myImage" src="guy.gif" width="200px">
    </div>
    <hr>
    <div class="navbar">
        <ul class="centered-list">
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="artist.php" class="active">Artists</a></li>
            <li><a href="Album.php">Albums</a></li>
            <li><a href="Admin.php">Admin</a></li>
        </ul>
    </div>

    <?php
    // Define variables and set to empty values
    $nameErr = "";
    $name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

<div class="search-container">
    <h2>Search for Artist in Database</h2>
    <p><span class="error">**Must be artist in database**</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["artist.php"]);?>">
        <input type="text" class="search-box" name="name" value="<?php echo $name;?>" placeholder="Search for artist..">
        <button class="search-button" type="submit" name="submit">Search</button>
    </form>
</div>



    <!-- Add this form in your HTML -->
    <form action="artist.php" method="post">
        <div class="search-results">
            <?php
            
            // Include database connection code here

            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr)) {
                // Perform the artist search
                $servername = "localhost"; 
                $username = "marquis_uni_db2"; 
                $password = "1234"; 
                $dbname = "unidb2"; 

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM artist_table WHERE Name LIKE '%$name%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<h2>Artist Info:</h2>";
                        echo "<div class='artist'>";
                        echo "<hr>";
                        echo "<p><strong>Name:</strong> " . $row["Name"] . "</p>";
                        echo "<p><strong>DOB:</strong> " . $row["DOB"] . "</p>";
                        echo "<p><strong>Number of Albums:</strong> " . $row["number_of_albums"] . "</p>";
                        echo "<p><strong>Most Popular Album:</strong> " . $row["Most_popular_album"] . "</p>";
                        echo "<p><strong>Height (in inches):</strong> " . $row["Height"] . "</p>";
                        echo "<p><strong>Gender:</strong> " . $row["Gender"] . "</p>";
                        echo "<p><strong>Grammys:</strong> " . $row["Grammys"] . "</p>";
                        echo "<hr>";
                        echo "</div>";
                    }
                } else {
                    echo "No results found. Please use artist found in the database, refer to Homepage for artists!";
                }
                $conn->close();
            }
            ?>
        </div>
    </form>
</body>

</html>
