<?php
session_start();
if (isset($_SESSION["username"])) {

    if ($_SESSION["role"] == 3) {
        include("./headers/user-header.php");
        include("base.php");
        include("conn.php");
        $tablename = $_SESSION["username"];
        $_qry = "SELECT * FROM dashboard WHERE status>=2 AND tableName= '$tablename' ";
        $_rslt = mysqli_query($_conn, $_qry);
        $detailes = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);
        $qry1 = "SELECT SUM(totalAmount) FROM dashboard WHERE tableName='$tablename' AND payment=2";
        $rslt1 = mysqli_query($_conn, $qry1);
        $row = mysqli_fetch_array($rslt1);
        $TotalAmount = $row[0];
?>

<table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Cost</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($detailes as $detail) :
                ?>

                    <tr>
                        <td><?php echo $detail['foodName'] ?></td>
                        <td><?php echo $detail['quantity'] ?></td>
                        <td><?php echo $detail['totalAmount'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<h1 style="margin-left: 1010px;"><?php  echo($TotalAmount) ?></h1>
<div class="text-center mt-5"> <a href="thankyou.php" class="btn btn-success  btn-lg">Pay</a></div>
<?php
    } else {
        header('location:user-login.php');
    }
} else {
    header('location:user-login.php');
}
?>