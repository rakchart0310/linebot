<?php
    require('Connect_DB.php');
    $sql_text = "SELECT * FROM newtable WHERE Keyword LIKE '%a%'";
    $query = mysqli_query($conn,$sql_text);
    while($objresult = mysqli_fetch_assoc($query))
    {
        echo $objresult['Answer']."<br>";
    }
?>
