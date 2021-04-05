<?php

    $mysqli = new mysqli('localhost', 'Your_db_user', 'Your_db_password', 'Your_db')
    or die(mysqli_error($mysqli));

    // select data from db
    $result = $mysqli->query("select * from location") or die($mysqli->error);


?>