<nav id="topnav" class="topnav">
    <a <?php echo (isset($page) && $page == 'home') ? 'class="active"' : '' ?> href="<?php echo $path; ?>index.php">ASP</a>
    <a <?php echo (isset($page) && $page == 'park') ? 'class="active"' : '' ?> href="<?php echo $path; ?>thepark.php">The Park</a>
    <a <?php echo (isset($page) && $page == 'history') ? 'class="active"' : '' ?> href="<?php echo $path; ?>history.php">History</a>
    <a <?php echo (isset($page) && $page == 'camping') ? 'class="active"' : '' ?> href="<?php echo $path; ?>camping.php">Camping</a>
    <a <?php echo (isset($page) && $page == 'hiking') ? 'class="active"' : '' ?> href="<?php echo $path; ?>hiking.php">Hiking</a>
    <a <?php echo (isset($page) && $page == 'comments') ? 'class="active"' : '' ?> href="<?php echo $path; ?>comments.php">Comments</a>
    <a <?php echo (isset($page) && $page == 'grading') ? 'class="active"' : '' ?> href="<?php echo $path; ?>grading.php">About</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="turnHamb();">&#9776;</a>
</nav>