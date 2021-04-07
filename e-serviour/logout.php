<?php
session_start();
include("conn.php");
$tablename=$_SESSION["username"];
echo($tablename);
$t="table1";
$_qryz = "UPDATE `users` SET `status` = 0 WHERE `username` = '".$tablename."'";
 if (mysqli_query($_conn, $_qryz)) {
    echo ("SUCESS");
     session_destroy();
     header('location:index.php');

}
else
{
   echo("no");
   echo(mysqli_connect_error($_conn));
}

?>