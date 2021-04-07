<?php
session_start();
include("conn.php");
$tableName = $_POST['tableName'];
$time = $_POST['options'];
echo($tableName);
$_qry = "SELECT username,role,uId FROM users WHERE username='".$tableName."'";
$_rslt = mysqli_query($_conn, $_qry);
if(mysqli_num_rows($_rslt)>0)
{
    $row = mysqli_fetch_row($_rslt);
    echo("User present  ");
    $id=$row[2];
    $_SESSION["username"]=$tableName;
    $_SESSION["role"]=$row[1];
    $_SESSION["time"]=$time;
    $_SESSION["id"]=$id;
    echo($row[2]);
    echo("  -->  ");
    echo($id);
    echo($_SESSION["id"]);
    $_qry2 = "UPDATE users SET status=1 WHERE uId=$id";
     if (mysqli_query($_conn, $_qry2)) {
        echo ("SUCESS");
         header('location:index.php');
    }
    else
    {
        echo("No");
    }
    
}else{
    echo("user not present   ");
    
}








?>