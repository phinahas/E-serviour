<?php
session_start();
include("conn.php");

if (isset($_SESSION["username"])) {
    if ($_SESSION['role'] == 1) {
        include("base.php");
        include("./headers/admin-header.php");
        $_qry = "SELECT * FROM users WHERE role = 3 AND status !=1 ";
        $_rslt = mysqli_query($_conn, $_qry);
        $tables = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);
?>
        <div class="card mt-3 pt-2">
            <div class="card-header ">
                <h1>Settings</h1>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Table Name</th>
                            <th scope="col">Disable</th>
                            <th scope="col">Update</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tables as $table) :
                        ?>
                            <tr>
                                <th scope="row"><?php echo ($table["username"]); ?></th>
                                <?php if ($table["status"] == 0) {

                                ?>
                                    <td><a href="table-disable.php?id=<?php echo $table['uId']?>" class="btn btn-warning">Disable</a></td>
                                    <td><a href="#" ><button class="btn btn-success" disabled>Update</button></a></td>
                                    
                                <?php
                                } else {
                                ?>
                                    <td><a href="table-enable.php?id=<?php echo $table['uId']?>" class="btn btn-primary">Enable</a></td>
                                    <td><a href="table-update.php?id=<?php echo $table['uId']?>" class="btn btn-success">Update</a></td>
                                <?php
                                }
                                ?>
                               
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
<?php
    } else {
        header("location:admin.php");
    }
} else {
    header("location:admin.php");
}
?>