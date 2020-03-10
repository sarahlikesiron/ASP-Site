<?php
    $title = "Allegany State Park";
    $page = "home";
    $path = "./";

    // nav and header
    include($path.'assets/inc/header.php');
    
    include($path.'assets/inc/nav.php');
?>

    <!-- the header, establishes parallax for this page -->
    <div class="parallax"></div>
    <a class="prev" onclick="changeImage(-1);">&#10094;</a>
    <a class="next" onclick="changeImage(1);">&#10095;</a>
    <div class="topindex">
        <h2>Allegany State Park</h2>
    </div>

    <!-- overall site content layout and links -->
    <div class="color3">
        <h3>Why Allegany State Park?</h3>
        <p>Allegany State Park (ASP), offers a whole variety of activies for anyone to enjoy.  Whether you like hiking, swimming, skiing, or just being one with nature, there is something for everyone to do.  Allegany is one of the largest parks located in Western New York, attracting people from all over the area due to its location and what it offers.  <a href="thepark.php">An overview of the park.</a></p>
    </div>

    <div class="color1">
        <div class="landicon">
            <h4><a href="camping.php">Camping</a></h4>
        </div>
        <div class="landicon">
            <h4><a href="hiking.php">Hiking</a></h4>
        </div>   
    </div>

    <div class="color2">
        <h3>History</h3>
        <p>ASP was created in 1921 and developed extensively throught eh 1930's and 1940's by the CCC and WPA.  <a href="history.php">Find out more here.</a></p>
    </div>
    
    <script src="assets/js/script.js"></script>

<?php
    include($path.'assets/inc/footer.php');
?>