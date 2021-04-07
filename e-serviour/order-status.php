<?php
session_start();
if (isset($_SESSION["username"])) {

    if ($_SESSION["role"] == 3) {
        include("./headers/user-header.php");
        include("base.php");
        include("conn.php");
        $tablename = $_SESSION["username"];
        $_qry = "SELECT * FROM dashboard WHERE status!=-1 AND tableName = '$tablename' ";
        $_rslt = mysqli_query($_conn, $_qry);
        $foods = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);

?>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Cart</th>
                        <th scope="col">Kitchen</th>
                        <th scope="col">On table</th>
                        <th scope="col">Bill</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($foods as $food) :
                    ?>
                        <tr>
                            <th scope="row"><?php echo ($food["foodName"]); ?></th>
                            
                                <th scope="row">
                                  <?php if ($food["status"] == 0) {  ?>
                                    <div style="width: 20px; height: 20px;background-color: green; border-radius: 50%;"></div>
                                    <?php }?>
                                </th>
                                 
                            
                                <th scope="row">
                                <?php if ($food["status"] == 1) {  ?>
                                    <div style="width: 20px; height: 20px;background-color: green; border-radius: 50%;"></div>
                                    <?php }?>
                                </th>

                                <th scope="row">
                                <?php if ($food["status"] == 2) {  ?>
                                    <div style="width: 20px; height:20px; background-color: green; border-radius: 50%;"></div>
                                    <?php }?>
                                </th>
                               
                                <th scope="row">
                                <?php if ($food["status"] >= 2) {  ?>
                                    <div style="width: 20px; height: 20px;background-color: green; border-radius: 50%;"></div>
                                    <?php }?>
                                </th>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
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
