<?php
    // Connect to MySQL
    include("connect.php");

    // Prepare the SQL statement
      date_default_timezone_set('Asia/Kolkata');
     $dateS = date('m/d/Y h:i:s', time());
    echo $dateS;
    $SQL = "garbage_database.data (datetime,temperature,humidity,pressure) VALUES ('$dateS','".$_GET["temp"]."','".$_GET["hum"]."','".$_GET["pr"]."')";     

    // Execute SQL statement
    mysql_query($SQL);

    // Go to the review_data.php (optional)
    header("Location: dustbin1.php");
?>