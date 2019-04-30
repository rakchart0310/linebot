<?php
    require('connect_db.php');

    $office = $_POST["office"];
    $keyword = $_POST["keyword"];
    /*$office = 'j091';
    $keyword = '00';*/
    $sql_text = "SELECT * FROM dwdm WHERE type = '$office' AND (type LIKE '%$keyword%' OR ประเภท LIKE '%$keyword%')";
    $query = mysqli_query($conn,$sql_text);
    $data_return = array();
    while($obj = mysqli_fetch_assoc($query))
    {
       array_push($data_return,$obj);
    }
    echo json_encode($data_return);
?>
