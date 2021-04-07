<?php
session_start();
if (isset($_SESSION["username"])) {

    if ($_SESSION["role"] == 2) {
        include("./headers/user-header.php");
        include("base.php");
        include("conn.php");
        $_qry = "SELECT * FROM dashboard where status =1";
        $_rslt = mysqli_query($_conn, $_qry);
        $orders = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);
?>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Table No</th>
                        <th scope="col">Item</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Deliver</th>
                    </tr>
                </thead>
                <?php
                foreach ($orders as $order) :
                ?>
                    <tbody>
                        <tr>
                            <td> <?php echo$order['tableName'] ?></td>
                            <td> <?php echo$order['foodName'] ?></td>
                            <td> <?php echo$order['quantity'] ?></td>
                            <td> <a href="deliver-order.php?id=<?php echo $order['id'] ?>" class="btn btn-success">Deliver</a></td>

                        </tr>
                    </tbody>
                <?php
                endforeach
                ?>
            </table>
        </div>





<?php

    } else {
        header('location:user-login.php');
    }
} else {
    header('location:user-login.php');
}
?>