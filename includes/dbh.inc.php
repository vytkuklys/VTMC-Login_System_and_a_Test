<?php

    $host = "localhost";
    $dbusername = "root";
    $password = "";
    $dbName = "sql_quiz";

    $connect = mysqli_connect($host, $dbusername, $password, $dbName) or die("Connection failed: ".mysqli_connect_errno());

