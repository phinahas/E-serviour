<?php
session_start();
if (isset($_SESSION["username"])) {

    if ($_SESSION["role"] == 3) {
        include("./headers/user-header.php");
        include("base.php");
        include("conn.php");
        $tablename = $_SESSION["username"];
        $_qry = "SELECT * FROM dashboard WHERE status!=-1 AND tableName= '$tablename' ";
        $_rslt = mysqli_query($_conn, $_qry);
        $foods = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);
        ?>
<table class="table mt-4 ml-5">
            <thead>
                <tr>

                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Cancel</th>
                    <th scope="col">Order</th>

                </tr>
            </thead>
            <?php
            foreach ($foods as $food) :
            ?>
                <tbody>

                    <tr>

                        <td><?php echo $food['foodName'] ?></td>
                        <td><?php echo $food['quantity'] ?></td>
                        <td><?php echo $food['totalAmount'] ?></td>
                        <?php if($food['status']==0){?>
                            <td><a href="cancel-order.php?id=<?php echo $food['id'] ?>" class="btn btn-outline-danger">Cancel</a></td>
                            <td><a href="order-item.php?id=<?php echo $food['id'] ?>" class="btn btn-outline-success">Order</a></td>
                        <?php }else{?>
                            <td><button class="btn btn-outline-danger" disabled>Cancel</button></td>
                            <td><a href="order-status.php" class="btn btn-outline-success">View</a></td>
                        <?php } ?>
                    </tr>

                </tbody>
            <?php
            endforeach
            ?>
        </table>        
<?php
    } else {
        header('location:user-login.php');
    }
} else {
    header('location:user-login.php');
}
?>