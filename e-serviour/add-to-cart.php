<?php
session_start();
if (isset($_SESSION["username"])) {

    if ($_SESSION["role"] == 3) {
        include("./headers/user-header.php");
        include("base.php");
        include("conn.php");
        $tableId = $_SESSION["id"];
        $tableName=$_POST["tableName"];
        $quantity = $_POST["quantity"];
        $foodId=$_POST["foodId"];
        $cost=$_POST["cost"];
        $foodName=$_POST["foodName"];
        $totalCost=$cost*$quantity;
        $status=0;
        $_qry = "INSERT INTO dashboard(tableId, tableName, foodId, foodName, quantity, totalAmount,status) VALUES('" . $tableId. "', '".$tableName."' , '" . $foodId. "', '" . $foodName. "', '". $quantity."','". $totalCost."','". $status."') ";
        if (mysqli_query($_conn, $_qry))
            header('location:cart.php');
?>


<?php
    } else {
        header('location:user-login.php');
    }
} else {
    header('location:user-login.php');
}
?>