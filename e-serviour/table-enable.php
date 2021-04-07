<?php
session_start();
include("conn.php");
$id = $_GET["id"];
echo($id);
$_qry = "UPDATE `users` SET `status` = 0 WHERE `uId` = $id";

if (mysqli_query($_conn, $_qry)) {
echo ("SUCESS");
header("location:admin-settings.php");
}


?>