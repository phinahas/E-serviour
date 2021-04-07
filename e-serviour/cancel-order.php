<?php
include("conn.php");
$id=$_GET["id"];
echo($id);
$_qry="DELETE FROM dashboard WHERE id = $id";
if (mysqli_query($_conn, $_qry)) {
    echo ("SUCESS");
    header("location:cart.php");
}

?>