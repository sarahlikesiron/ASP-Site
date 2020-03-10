<?php
    $title = "The Park";
    $page = "park";
    $path = "./";

    // header and nav bar
    include($path.'assets/inc/header.php');

    include($path.'assets/inc/nav.php');
?>
    
    <!-- the header -->
    <div class="top">
            <h1>The Park</h1>
            <img src="assets/images/wetland3.jpg" alt="wetlands">
    </div>
    
    <div class="wrapper">
        
        <!-- use different divs to lay out different color block sections, linking to other pages -->
        <div class="camp2">
            <h2>General Park Information</h2><br>
            <p>Allegany State Park features over 300 cabins, over 300 campsites and 4 separate group camps.  There are 3 different lakes throughout the park, each man-made and offering a variety of things to do.  There are over 18 hiking trails in the park, totaling over 70 miles of trails, with the Finger Lakes Trail crossing through the park.  Both sides of the park have their own store and museum, as well as various points of interest and adventure.  ASP offers a whole range of activites for everyone to enjoy, with each side having its own charm and spirit.</p><br>
            <figure>
                <img src="assets/images/map.JPG" alt="map">
                <figcaption>A map of the park, showing hiking and cabin trails.</figcaption>
            </figure>
        </div>
        
        <div class="camp3">
            <div id="r">
                <h2>Red House Side</h2><br>
                <p>The Red House side features Red House dam, which forms Red House Lake.  At the lake, there is swimming at the beach, boat and bike rentals, and a beach and playground.  There is a paved bike path that goes around the lake, as well as through other parts of this side.  The Administration building houses a gift shop, a natural history museum, rental offices, the park police, and the park restaurant, as well as the remnants of the zoo and ski jumps.  On the Red House side there are 144 cabins, of which most are winterized, 125 campsites, and group camps, allowing for a range of places to stay.  Some notable things to do on this side are Tunder Rocks, the new Wetland Observation area, the Butterfly Meadows, and the countless hiking trails found on this side.  <a href="redhouse.php">Learn more about the activities.</a></p>

                <h3>Art Roscoe Area</h3><br>
                <p>The Art Roscoe section of the Red House side features a network of cross-country skiing trails, for all levels of skiers, which can be hiked or mountain biked during the off season.  Near the trail section, there is a warming hut that doubles as a rental area, as well as a cabin trail aimed at allowing people who want to ski to stay close.  The Summit Fire Tower and Stone Observation Towers are also notable features of this area, both dating back to early years of the park.  <a href="artroscoe.php">Learn more about the activities here.</a></p>
            </div>
            <br>
        
            <div id="l">
                <h2>Quaker Side</h2><br>
                <p>The Quaker side features 2 different lakes, Quaker Lake and Science Lake, as well as numerous hiking trails.  Quaker Lake has a beach and offers kayak rentals, as well as featuring a boat put in spot and a fishing dock.  There is also an ampitheater, where events happen pretty regularly during the summer months and a general store and a museum.  There are over 230 cabins on this side, with only 30 winterized, and a series of Cottages, as well as 189 cottages.  <a href="quaker.php">Learn more about the activities offered.</a></p>
            </div>
        </div>        
    </div>

<?php
    include($path.'assets/inc/footer.php');
?>