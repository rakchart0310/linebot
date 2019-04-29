<?php
    $host = 'us-cdbr-gcp-east-01.cleardb.net';
    $user = 'bdf042bff5b884';
    $pass = '60e8762c';
    $db = 'gcp_17f3cc6cc7edbba75cf8';
    $conn = new mysqli($host,$user,$pass,$db);
    mysqli_query($conn, "SET NAMES utf8");
?>
