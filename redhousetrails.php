<?php
    $title = "Red House Trails";
    $page = "hiking";
    $path = "./";
    
    // include the header and the nav bar
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>
    
    <!-- the header -->
    <div class="top">
        <h1>The Trails</h1>
        <img src="assets/images/creek12.jpg" alt="an image of one of the creeks in the park">
    </div>
     
    <!-- use one background for the hikes in one section and another background for the other -->
    <div class="camp2">
        <br>
        <h2>Red House Side</h2>
            <h3>Red Jacket</h3>
                <p>Length: 0.5 miles</p>
                <p>Difficulty: Easy</p>
            <h3>Conservation</h3>
                <p>Length: 4.7 miles</p>
                <p>Difficulty: Most Difficult</p>
            <h3>North Country</h3>
                <p>Length: 21 miles</p>
                <p>Difficulty: Most Difficult</p>
            <h3>Osgood</h3>
                <p>Length: 2.5 miles</p>
                <p>Difficulty: Most Difficult</p>
            <h3>Beehunter</h3>
                <p>Length: 6.5 miles</p>
                <p>Difficulty: Most Difficult</p>
            <h3>Eastwood Meadows</h3>
                <p>Length: 2.4 miles</p>
                <p>Difficulty: More Difficult</p>
        
    </div>
    
    <div class="camp3">
        <br>
        <h2>Art Roscoe</h2>
            <h3>Patterson</h3>
                <p>Length: 2.9 miles</p>
                <p>Difficulty: More Difficult</p>
            <h3>Ridge Run</h3>
                <p>Length: 4.9 miles</p>
                <p>Difficulty: More Difficult</p>
            <h3>Sweetwater</h3>
                <p>Length: 2.4 miles</p>
                <p>Difficulty: Easy</p>
            <h3>Snowsnake</h3>
                <p>Length: 4.2 miles</p>
                <p>Difficulty: Most Difficult</p>
            <h3>Christian Hollow</h3>
                <p>Length: 1.7 miles</p>
                <p>Difficulty: More Difficult</p>
            <h3>Leonard Run</h3>
                <p>Length: 2.9 miles</p>
                <p>Difficulty: More Difficult</p>
        <br>
        <a href="quakertrails.php">(Quaker trails)</a>
    </div>

<?php
    include($path.'assets/inc/footer.php');
?>