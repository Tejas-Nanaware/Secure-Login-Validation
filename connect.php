<?php
    require "config.php";
    $connection = mysqli_connect(db_server, db_username, db_password, db_database) or die("Could not connect to the database".mysqli_connect_error());
?>