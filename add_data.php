<?php
    // Connect to MySQL
    include("../includes/dbconnect.php");

    // Prepare the SQL statement
    $SQL = "INSERT INTO parking_monitor.garage (sensor ,distance) VALUES ('".$_GET["serial"]."', '".$_GET["distance"]."')";     

    // Execute SQL statement
    mysql_query($SQL);

    // Go to the review_data.php (optional)
    header("Location: map.html");
?>
