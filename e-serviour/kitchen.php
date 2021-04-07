<?php
session_start();
if (isset($_SESSION["username"])) {
    if ($_SESSION['role'] == 2) {
        include("./headers/kitchen-header.php");
        include("conn.php");
        include("base.php");
        $_qry = "SELECT * FROM foods";
        $_rslt = mysqli_query($_conn, $_qry);
        $foods = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);
?>

        <table class="table mt-4 ml-5">
            <thead>
                <tr>

                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <?php
            foreach ($foods as $food) :
            ?>
                <tbody>

                    <tr>

                        <td><?php echo $food['itemName'] ?></td>
                        <td><?php echo $food['quantity'] ?></td>
                        <td><a href="update-item.php?id=<?php echo $food['id'] ?>" class="btn btn-success">Update</a></td>
                        <td><a href="#" class="btn btn-danger">Remove</a></td>
                    </tr>

                </tbody>
            <?php
            endforeach
            ?>
        </table>
<?php  } else {
        header("location:kitchen-login.php");
    }
} else {
    header("location:kitchen-login.php");
}
?>