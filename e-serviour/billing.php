<?php
session_start();
if (isset($_SESSION["username"])) {

    if ($_SESSION["role"] == 3) {
        include("./headers/user-header.php");
        include("base.php");
        include("conn.php");
        $tablename = $_SESSION["username"];
        $qry = "SELECT COUNT(foodName) FROM dashboard WHERE tableName='$tablename'";
        $rslt = mysqli_query($_conn, $qry);
        $row = mysqli_fetch_array($rslt);
        $TotalCountOfItems = $row[0];
        // echo($row[0]);

        $qry1 = "SELECT COUNT(foodName) FROM dashboard WHERE tableName='$tablename' AND status=2 ";
        $rslt1 = mysqli_query($_conn, $qry1);
        $row1 = mysqli_fetch_array($rslt1);
        $TotalCountOfBilledItems = $row1[0];
        // echo($row1[0])
?>


        <?php

        if ($TotalCountOfItems != $TotalCountOfBilledItems) {
        ?>

            <h1 class="text-center mt-5">Payment processing</h1>

        <?php } else { ?>


            <div  style="width: 350px; height:300px; border: 2px solid grey; margin-top: 150px; margin-left: 200px; padding-top: 100px; padding-left: 100px;">
                <a href="update-billing-status.php" style="text-decoration: none;">
                    <h1 class="text-cente">Online</h1>
                </a>
            </div>

            <div  style="width: 350px; height:300px; border: 2px solid grey; margin-top:-300px;  margin-left: 900px; padding-top: 100px; padding-left: 100px;">
                <a href="offline-payment.php" style="text-decoration: none;">
                    <h1 class="text-cente">Offline</h1>
                </a>
            </div>



        <?php } ?>



<?php
    } else {
        header('location:user-login.php');
    }
} else {
    header('location:user-login.php');
}
?>