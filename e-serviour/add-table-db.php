<?php
session_start();
include("conn.php");
$username=$_POST["tableName"];
$role=3;
$status=-1;
echo($username);
$_qry = "INSERT INTO users(username, role, status) VALUES('" . $username. "','" . $role. "','". $status."') ";
if (mysqli_query($_conn, $_qry)) {
echo("ok");
header("location:admin.php");
}

?>