<!DOCTYPE html>
<head>
<title>Artist Inquiries</title>
<link rel="stylesheet" href="Homepage.css">
</head>
<body>


<!--First Div for header-->
<div class="div1">

<h1 class="firstH1">Artist Inquiries</h1>
<img class="musicNote" src="notesgif.gif" width="150px">
<img class="myImage" src="notesgif.gif" width="150px">
</div>
<hr>
<!--Div Ends-->



<!--Second Div for nav Bar-->
<div class="navbar">
    <ul class="centered-list">
        <li><a class = "active">Home</a></li>
        <li><a href="Artist.php">Artists</a></li>
        <li><a href="Album.php">Albums</a></li>
        <li><a href="Admin.php">Admin</a></li>
    </ul>
</div>
<hr>
<!--Div Ends-->


<!--Div for project description-->
<div class="info">
<h1>About the project</h1>
<p style="font-size: larger;">Here we at Artist Inquiries we aim to assist you in your quest
    to research facts about some of your favorite artists. We've carefully implemented
    various techniques to ensure the info you desire is at your fingertips.
</p>
</div>
<hr>
<!--Div Ends-->


<!--Slideshow for artist-->
<div class="slideshow-container" id="slideshow">

    <h1><center>Artists in our database</center></h1>
    <hr>

    <div class="slide fade">
        <h1><center>Drake (Aubrey Graham)</center></h1>
        <center><img src="drake.webp" alt="Drake (Aubrey Graham)" width="250px"></center>
    </div>

    <div class="slide fade">
        <h1><center>Juice WRLD (Jarad Higgins)</center></h1>
        <center><img src="juice1.gif"  width="350px"></center>
    </div>

    <div class="slide fade">
        <h1><center>MF DOOM (Daniel Dumile)</center></h1>
        <center><img src="mfdoom.jpeg" alt="MF DOOM (Daniel Dumile)" width="250px"></center>
    </div>
    
    <div class="slide fade">
        <h1><center>Romeo Santos (Anthony Santos)</center></h1>
        <center><img src="romeo.webp" alt="Romeo Santos (Anthony Santos)" width="250px"></center>
    </div>

    <div class="slide fade">
        <h1><center>Bad Bunny (Benito Ocasio)</center></h1>
        <center><img src="badbunny.jpeg" alt="Bad Bunny (Bentio Ocasio)" width="250px"></center>
    </div>

    <div class="slide fade">
        <h1><center>Tim McGraw (Samuel McGraw)</center></h1>
        <center><img src="tim.jpeg" alt="Tim McGraw (Samuel McGraw)" width="250px"></center>
    </div>

    <div class="slide fade">
        <h1><center>Blake Shelton</center></h1>
        <center><img src="blake.webp" alt="Blake Shelton" width="250px"></center>
    </div>

    <div class="slide fade">
        <h1><center>Elton John (Elton H. John)</center></h1>
        <center><img src="elton.jpeg" alt="Elton John (Elton H. John)" width="250px"></center>
    </div>

    <div class="slide fade">
        <h1><center>Machine Gun Kelly(Colson Baker)</center></h1>
        <center><img src="mgk.webp" alt="Machine Gun Kelly(Colson Baker)" width="250px"></center>
    </div>

    <div class="slide fade">
        <h1><center>Beyonce Knowles-Carter</center></h1>
        <center><img src="beyonce.jpeg" alt="Beyonce Knowles-Carter" width="250px"></center>
    </div>

    <div class="slide fade">
        <h1><center>Michael Jackson</center></h1>
        <center><img src="mj.jpeg" alt="Michael Jackson" width="250px"></center>
    </div>

       
</div>
<!--Div ends-->


<!--JavaScript for NEXT and PREVIOUS-->
<button class="prev" onclick="plusSlides(-1)" style="float: left;">&#10094; Previous</button>
<button class="next" onclick="plusSlides(1)" style="float: right;">Next &#10095;</button>         

<hr>


<script src="script.js"></script>

<hr>

<!--Footer Page-->
<div id="slideshow">
<footer>
    <h1><center>Project Motivation: </center></h1>
    <p><center>Creating this website allowed us to share our artistic journey with the world, 
        providing a platform where our creations can be appreciated and understood. 
        It's an opportunity to establish a personal connection with art enthusiasts and potential collaborators, 
        while also maintaining control over how our work is presented and shared.</center></p>
  </footer>
</div>
<!--Div ends-->


</body>
</html>