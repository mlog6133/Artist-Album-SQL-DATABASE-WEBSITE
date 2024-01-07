<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Inquiries</title>
    <link rel="stylesheet" href="Homepage.css">
    <style>
        .action-dropdown {
            display: none;
        }

        .action-buttons {
            display: none;
            flex-direction: row;
        }

        #additionFormContainer {
            display: none;
        }

        #submitContainer {
            display: none;
        }
    </style>
</head>

<body>

    <!-- First Div for header -->
    <div class="div1">
        <h1 class="firstH1">Artist Inquiries</h1>
        <img class="musicNote" src="notesgif.gif" width="150px">
        <img class="myImage" src="notesgif.gif" width="150px">
    </div>
    <hr>
    <!-- Div Ends -->

    <!-- Second Div for nav Bar -->
    <div class="navbar">
        <ul class="centered-list">
            <li><a class="Homepage.php">Home</a></li>
            <li><a href="Artist.php">Artists</a></li>
            <li><a href="Album.php">Albums</a></li>
            <li><a class="active">Admin</a></li>
        </ul>
    </div>
    <hr>
    <!-- Div Ends -->
    <div class="div1">
        <h3>Dropdown Menu</h3>
        <label for="category">Select a Category:</label>
        <select id="category" name="category" onchange="showActions()">
            <option value="default" selected disabled>Select an option</option>
            <option value="artist">Artist</option>
            <option value="album">Album</option>
        </select>

        <!-- Buttons for Artist Actions -->
        <div id="artistActions" class="action-buttons">
            <button type="button" onclick="showForm('add')">Add</button>
            <button type="button" onclick="showForm('display')">Display</button>
        </div>

        <!-- Buttons for Album Actions -->
        <div id="albumActions" class="action-buttons">
            <button type="button" onclick="showForm('add1')">Add</button>
            <button type="button" onclick="showForm('display1')">Display</button>
        </div>
        <hr>

        <!-- Container for the "AdditionForm" -->
        <div id="additionFormContainer">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($_POST['selectedAction'] === 'add' && $_POST['selectedCategory'] === 'artist') {
                    include('AdditionForm.php');
                }
            }
            ?>
        </div>

        <div id="displayFormContainer">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($_POST['selectedAction'] === 'display' && $_POST['selectedCategory'] === 'artist') {
                    include('display_table.php');
                }
            }
            ?>
        </div>
        <div id="updateFormContainer">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($_POST['selectedAction'] === 'add1' && $_POST['selectedCategory'] === 'album') {
                    include('update.php');
                }
            }
            ?>
        </div>
        <div id="updateFormContainer">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($_POST['selectedAction'] === 'display1' && $_POST['selectedCategory'] === 'album') {
                    include('update.php');
                }
            }
            ?>
        </div>
        <!-- Container for the submit button -->
        <div id="submitContainer">
            <form method="post" action="">
                <input type="hidden" id="selectedAction" name="selectedAction" value="">
                <input type="hidden" id="selectedCategory" name="selectedCategory" value="">
                <button type="submit" id="submitButton" name="submitAction">Submit Action</button>
            </form>
        </div>
    </div>

    <script>
        function showActions() {
            var categorySelect = document.getElementById("category");
            var artistActions = document.getElementById("artistActions");
            var albumActions = document.getElementById("albumActions");
            var additionFormContainer = document.getElementById("additionFormContainer");
            var submitContainer = document.getElementById("submitContainer");

            // Hide all action buttons, the form container, and the submit container
            artistActions.style.display = "none";
            albumActions.style.display = "none";
            additionFormContainer.style.display = "none";
            submitContainer.style.display = "none";

            // Show the selected action buttons
            if (categorySelect.value === "artist") {
                artistActions.style.display = "flex";
            } else if (categorySelect.value === "album") {
                albumActions.style.display = "flex";
            }
        }

        function showForm(action) {
            var additionFormContainer = document.getElementById("additionFormContainer");
            var submitContainer = document.getElementById("submitContainer");
            var selectedCategory = document.getElementById("category").value;

            // Show the form container, set the selected action and category
            additionFormContainer.style.display = "block";
            submitContainer.style.display = "block";
            document.getElementById("selectedAction").value = action;
            document.getElementById("selectedCategory").value = selectedCategory;
        }
    </script>


 <?php
 $Name = $_POST["name"];
 $artist_id = $_POST["artist_id"];
 $DOB = $_POST["DOB"];
 $number_of_albums = $_POST["number_of_albums"];
 $Most_popular_album = $_POST["most_popular_album"];
 $Height = $_POST["height"];
 $Gender = $_POST["gender"];
 $Grammys = $_POST["grammys"];
 
 
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
 
 $sql = "INSERT INTO Artist_Table (Name, artist_id, DOB, number_of_albums, Most_popular_album, Height, Gender, Grammys)
                         VALUES ('$Name', '$artist_id', '$DOB', $number_of_albums, '$Most_popular_album', $Height, '$Gender', $Grammys )";
 
 if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
 
 ?>


</body>

</html>