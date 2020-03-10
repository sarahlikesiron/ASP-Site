<?php

// page information
    $title = "Comments";
    $page = "comments";
    $path = "./";

// connect to the database
include "../../../240dbConn.php";

if ($conn) {
    
    // if adding a new comment
    if (!empty($_GET['name']) & !empty($_GET['comments'])) {
        
        // sanitize the input (using filter_var and sanitize_string)
        $name = filter_var($_GET['name'], FILTER_SANITIZE_STRING);
        $comment = filter_var($_GET['comments'], FILTER_SANITIZE_STRING);

        // once connected and sanitized, add the input to the table in database
        // prepare the query
        $stmt = $conn -> prepare("INSERT INTO siteComments (name,comment) VALUES (?,?)");

        // bind paramaters
        $stmt -> bind_param("ss",$name,$comment);

        // execute the query
        $stmt -> execute();

        // close
        $stmt -> close();
        
    }

    // get the content out of the table, adding a new comment or not
    $res = $conn -> query("SELECT * FROM siteComments");
    $records = array();
    if ($res) {
        while($row = $res -> FETCH_ASSOC()) {
            $records[] = $row;
        }
    }
}

?>

<!-- this one is different so i did not make it the generic header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Comments</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script>
        function validateForm() {
            var name = document.forms['commentForm']['name'].value;
            var comment = document.forms['commentForm']['comments'].value;
            if (name == "") {
                alert("Name must be filled out");
                return false;
            } else if (comment == "") {
                alert("Comment must be filled out");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <!-- the nav bar -->
    <?php
        include($path.'assets/inc/nav.php');
    ?>
    
    <!-- comments form -->
    <div class="comments">
        <form action="comments.php" onsubmit="return validateForm();" name="commentForm" method="GET">
            <div>
                <label>Name:</label>
                <input id="name" type="text" name="name" size="30"><br><br>
            </div>
            <div>
                <label>Comments:</label>
                <textarea id="comments" name="comments" rows="3" cols="30"></textarea>
            </div>
            <div class="clearSubmit">
                <input type="reset" value="Reset Form">
                <input type="submit" name="Submit" value="Submit">
            </div>
        </form>
        
        <!-- section to print out all of the existing comments -->
        <table>
            <?php
                foreach ($records as $thisRow) {
                    echo "<tr><td>".$thisRow['name'].":</td><td>".$thisRow['comment']."</td></tr>";
                }
            ?>
        </table>
        
    </div>
    
    <script src="assets/js/script.js"></script>
<?php
    include($path.'assets/inc/footer.php');
?>