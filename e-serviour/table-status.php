<?php
session_start();
include("conn.php");
if (isset($_SESSION["username"])) {
    if ($_SESSION['role'] == 1) {
        include("./headers/admin-header.php");
        include("base.php");
        $id = $_GET['id'];

        $_qry = "SELECT * FROM dashboard WHERE status>=2 AND tableName= '$id' ";
        $_rslt = mysqli_query($_conn, $_qry);
        $detailes = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);

        $_qry1 = "SELECT  payment FROM dashboard WHERE  tableName= '$id' ";
        $_rslt1 = mysqli_query($_conn, $_qry1);
        $payment=0;
        if (mysqli_num_rows($_rslt1) > 0) {
            $row = mysqli_fetch_row($_rslt1);
            $payment = $row[0];
            
        }
        $qry1 = "SELECT SUM(totalAmount) FROM dashboard WHERE tableName='$id' AND payment=3";
        $rslt1 = mysqli_query($_conn, $qry1);
        $row = mysqli_fetch_array($rslt1);
        $TotalAmount = $row[0];
        

?>
        <h1 class="display-4">Table No: <?php echo ($id); ?></h1>
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
        <?php

        if ($payment == 3) {
        ?>

            <div class=" text-center">
                <a href="check-pay.php?id=<?php echo $id  ?>" class=" text-center btn btn-outline-success btn-lg">Close Bill</a>
            </div>
        <?php } ?>



<?php

    } else {
        header("location:admin-login.php");
    }
} else {
    header("location:admin-login.php");
}
?>