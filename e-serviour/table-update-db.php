<?php
session_start();
include("conn.php");
$username=$_POST["tableName"];
$_id=$_POST["id"];
echo($_id);

$_qry = "UPDATE `users` SET `username` = '" .$username." ' WHERE `uId` = $_id ";
if (mysqli_query($_conn, $_qry)) {
echo("ok");
header("location:admin-settings.php");
}





?>