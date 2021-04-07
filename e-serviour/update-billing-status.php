<?php
session_start();
        include("base.php");
        include("conn.php");
        $tablename = $_SESSION["username"];
        $_qry="UPDATE dashboard SET payment=2 WHERE tableName='$tablename' ";
if (mysqli_query($_conn, $_qry)) {
    
    header("location:online-payment.php");
}
else
{
    echo("sorry");
}
        
       
?>