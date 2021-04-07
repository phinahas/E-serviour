<?php
session_start();
include("conn.php");
$username = $_POST['username'];
$password = $_POST['password'];
$_qry = "SELECT username,role FROM users WHERE username='".$username."' AND password='".$password."' ";
$_rslt = mysqli_query($_conn, $_qry);
if(mysqli_num_rows($_rslt)>0)
{
    $row = mysqli_fetch_row($_rslt);
    echo("User present");
    $_SESSION["username"]=$username;
    $_SESSION["role"]=$row[1];
    header('location:kitchen.php');
}else{
    echo("user not present   ");
    
}








?>