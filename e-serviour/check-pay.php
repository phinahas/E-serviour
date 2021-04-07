<?php
include("conn.php");
$id = $_GET["id"];
echo ($id);
$_qry = "UPDATE dashboard SET payment=-1,status=-1 WHERE tableName='$id' ";
if (mysqli_query($_conn, $_qry)) {
    $_qryz = "UPDATE users SET status = 0 WHERE username = '$id' ";
    if (mysqli_query($_conn, $_qryz)) {
        echo ("SUCESS");
        session_destroy();
    }
    header("location:admin.php");
} else {
    echo ("sorry");
}
