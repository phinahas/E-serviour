<?php
session_start();
if (isset($_SESSION["username"])) {

    if ($_SESSION["role"] == 3) {
        include("./headers/user-header.php");
        include("base.php");
        include("conn.php");
        $tablename = $_SESSION["username"];
        $_qry = "UPDATE dashboard SET payment=3 WHERE tableName='$tablename' ";
        if (mysqli_query($_conn, $_qry)) {

           
        } else {
            echo ("sorry");
        }

?>


        <div class="text-center mt-4">
            <p>
                <h2>Walk to counter.</h2>
                <h4>Thankyou.Visit Again</h4>
                <a href="logout.php" class="btn btn-primary"> Logout</a>
            </p>
        </div>

<?php
    } else {
        header('location:user-login.php');
    }
} else {
    header('location:user-login.php');
}
?>