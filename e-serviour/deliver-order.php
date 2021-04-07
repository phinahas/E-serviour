<?php
include("conn.php");
$id=$_GET['id'];
echo($id);
$_qry="UPDATE dashboard SET status=2,payment=1 WHERE id=$id";
if (mysqli_query($_conn, $_qry)) {
    echo ("SUCESS");
    header("location:view-orders-kitchen.php");
}

?>