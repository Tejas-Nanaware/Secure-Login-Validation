<?php
    require "config.php";
    $connection = mysqli_connect(server, username, password, database) or die("Could not connect to the database".mysqli_connect_error());
?>