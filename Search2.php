<?php
    require('Connect_DB.php');
    $sql_text = "SELECT * from newtable where id = '1'";
    $query = mysqli_query($conn,$sql_text);
    while($objresult = mysqli_fetch_assoc($query))
    {
        echo $objresult['type']."<br>";
    }
?>
