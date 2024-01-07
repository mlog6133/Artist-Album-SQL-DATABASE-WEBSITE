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

        .search-results {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="div1">
        <h1 class="firstH1">Artist Inquiries</h1>
        <img class="musicNote" src="MusicReal.jpg" width="150px">
        <img class="myImage" src="Music2.jpg" width="150px">
    </div>
    <hr>
    <!--Slideshow for artist-->
<div class="slideshow-container" id="slideshow">

<h1><center>Albums Searchable</center></h1>
<hr>

<div class="slide fade">
    <h1><center>Formula Vol 2</center></h1>
    <center><img src="formula.jpeg"  width="250px"></center>
</div>
<div class="slide fade">
    <h1><center>Goodbye and Good Riddance</center></h1>
    <center><img src="999.gif"  width="250px"></center>
</div>


<div class="slide fade">
    <h1><center>Un Verano Sin Ti</center></h1>
    <center><img src="verano.gif" width="300px"></center>
</div>

<div class="slide fade">
    <h1><center>Views</center></h1>
    <center><img src="views.gif" width="250px"></center>
</div>

<div class="slide fade">
    <h1><center>Madvillainy</center></h1>
    <center><img src="madv.gif" width="250px"></center>
</div>

<div class="slide fade">
    <h1><center>Not A Moment Too Soon</center></h1>
    <center><img src="momenettoosoon.jpeg" width="250px"></center>
</div>

<div class="slide fade">
    <h1><center>Based On A True Story</center></h1>
    <center><img src="based.jpeg"  width="250px"></center>
</div>

<div class="slide fade">
    <h1><center>Goodbye Yellow Brick Road</center></h1>
    <center><img src="goodbye.gif" width="250px"></center>
</div>

<div class="slide fade">
    <h1><center>Tickets To My Downfall</center></h1>
    <center><img src="ticket.gif" width="250px"></center>
</div>

<div class="slide fade">
    <h1><center>Dangerously In Love</center></h1>
    <center><img src="love.gif"  width="250px"></center>
</div>

<div class="slide fade">
    <h1><center>Thriller</center></h1>
    <center><img src="thrill.gif" width="250px"></center>
</div>
<br>
   
</div>
<!--Div ends-->
    <!--Slideshow for artist-->
    <div class="slideshow-container" id="slideshow">
        <!-- Your existing slideshow content -->
        <!-- ... -->
    </div>
    <!--Div ends-->
    <button class="prev" onclick="plusSlides(-1)" style="float: left;">&#10094; Previous</button>
    <button class="next" onclick="plusSlides(1)" style="float: right;">Next &#10095;</button>
    <script src='script.js'></script>
    <hr><hr>
    <div class="navbar">
        <ul class="centered-list">
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="Artist.php">Artists</a></li>
            <li><a href="album.php" class="active">Albums</a></li>
            <li><a href="Admin.php">Admin</a></li>
        </ul>
    </div>
    <hr>

    <!-- Add this form in your HTML -->
    <form action="album.php" method="post">
        <div class="search-container">
            <h1><center>Search for albums here: </center></h1>
            <input type="text" class="search-box" name="search_album" placeholder="Search albums listed above..">
            <button class="search-button" type="submit">Search</button>
        </div>
    </form>

    <!-- Add this div to display search results -->
    <div class="search-results">
        <?php
        // Include database connection code here

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_album'])) {
            // Perform the album search
            $servername = "localhost"; // Replace with your MySQL server name
            $username = "marquis_uni_db2"; // Replace with your MySQL username
            $password = "1234"; // Replace with your MySQL password
            $dbname = "unidb2"; // Replace with your MySQL database name

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $search_album = $_POST['search_album'];
            $sql = "SELECT * FROM album_table WHERE title LIKE '%$search_album%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='album'>";
                    echo "<hr>";
                    echo "<p><strong>Title:</strong> " . $row["title"] . "</p>";
                    echo "<p><strong>Release Date:</strong> " . $row["Release_Date"] . "</p>";
                    echo "<p><strong>Author:</strong> " . $row["Author"] . "</p>";
                    echo "<p><strong>Lead Single:</strong> " . $row["Lead_Single"] . "</p>";
                    echo "<p><strong>First Week Sales:</strong> " . $row["First_Week_Sales"] . "</p>";
                    echo "<p><strong>Genre:</strong> " . $row["Genre"] . "</p>";
                    echo "<hr>";
                    echo "</div>";
                }
            } else {
                echo "No results found, please refer to the slideshow above for the albums in our database!";
            }
            $conn->close();
        }
        ?>
    </div>
</body>

</html>
