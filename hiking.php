<?php
    $title = "Hiking";
    $page = "hiking";
    $path = "./";

    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>
    
    <!-- the header -->
    <div class="top">
            <h1>Hiking</h1>
            <img src="assets/images/bridgehike2.jpg" alt="wetlands">
    </div>
    
    <!-- the basic hiking information, linking the trails pages -->
    <div class="wrapper">
        <div class="camp1">
            <h2>Overview</h2><br>
            <p>ASP offers a range of difficulty of hikes, from the short and easy Red Jacked loop, to the long and unforgiving North Country Trail section that crosses through the park, there is something for any skill level.</p><br>
            
            <h3>The Allegany 18 Challenge</h3><br>
            <p>The Allegany 18 Challenge is a challenge created by the park to hope to get people hiking the trails again.  Basically, you sign up and pay $20 for the materials (and waterbottle once you're done) and then hike all of the original 18 trails, getting a rubbing from each trail.  The 18 trails chosen mark the original 18 trails that existed within the park, totaling 70 miles long.  The trails range from easy and short, to difficult, to very long and are broken up into the 3 main park sections.  The trails can be hiked in any order, some are actually better to hike when it is not summer because of the way that they work.  <a href="redhousetrails.php">Find out more about the Red House trails here.</a> OR <a href="quakertrails.php">Find out more about the Quaker trails here.</a></p><br>
            
            <h3>Safety</h3>
            <p>When hiking in the park, be sure to follow general hiking principles and guides, including:</p>
            <ol>
                <li>Let someone know where you are going and your plan.</li>
                <li>Pack enough water to stay hydrated and bring snacks.</li>
                <li>Practice "Leave No Trace".</li>
                <li>Bring a trail map and a compass.</li>
                <li>Don't rely on your cellphone, they do not receive signal in most of the park.</li>
                <li>Be aware of the plants and animals that could pose a hazard.</li>
                <li>Wear appropriate clothing and footware.  Plan for the weather.</li>
                
            </ol>
            
        </div>
    </div>

<?php
    include($path.'assets/inc/footer.php');
?>