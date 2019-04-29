<?php
    require('Connect_DB.php');
    $sql_text = "SELECT * from dwdm where type = 'ILA'";
    $query = mysqli_query($conn,$sql_text);
    while($objresult = mysqli_fetch_assoc($query))
    {
        echo $objresult['สถานะ']."<br>";
    }
?>
