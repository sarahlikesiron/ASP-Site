<?php
    $title = "Quaker Trails";
    $page = "hiking";
    $path = "./";
    
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>
    
    <!-- the header -->
    <div class="top">
        <h1>The Trails</h1>
        <img src="assets/images/creek12.jpg" alt="an image of one of the creeks in the park">
    </div>
    
    <!-- the trails, using only one color section -->
    <div class="camp1">
        <h2>Quaker Side</h2>
            <h3>Bear Springs</h3>
                <p>Length: 0.6 miles</p>
                <p>Difficulty: Easy</p>
            <h3>Three Sisters</h3>
                <p>Length: 2.2 miles</p>
                <p>Difficulty: More Difficult</p>
            <h3>Mt. Tuscarora</h3>
                <p>Length: 5.3 miles</p>
                <p>Difficulty: Most Difficult</p>
            <h3>Flagg</h3>
                <p>Length: 01.3 miles</p>
                <p>Difficulty: Easy</p>
            <h3>Bear Caves</h3>
                <p>Length: 2.3 miles</p>
                <p>Difficulty: More Difficult</p>
            <h3>Blacksnake Mountain</h3>
                <p>Length: 2.6 miles</p>
                <p>Difficulty: More Difficult</p><br>
        
        <a href="redhousetrails.php">(Red House trails)</a>
    </div>

<?php
    include($path.'assets/inc/footer.php');
?>