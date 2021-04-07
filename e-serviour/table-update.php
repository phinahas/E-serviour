<?php
session_start();
include("conn.php");

if (isset($_SESSION["username"])) {
    if ($_SESSION['role'] == 1) {
        include("base.php");
        include("./headers/admin-header.php");
        $id = $_GET["id"];
        $_qry = "SELECT * FROM users WHERE uId = $id ";
        $_rslt = mysqli_query($_conn, $_qry);
        $tables = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);
        foreach($tables as $table):
?>
<form action="table-update-db.php " method="POST" enctype="multipart/form-data">
    <div class="form" style="border: 2px solid grey; width:450px; height:200px; border-radius:5%; padding-top:50px; padding-left:70px; margin-top:100px; margin-left:500px">
        <div class="form-group pt-3">
            <input type="text" placeholder="Table Name" name="tableName" <?php $name = $table['username']; echo " value= {$name}"; ?>>
            <input type="hidden"  name="id"  <?php $name = $table['uId'];echo " value= {$name}"; ?>>
        <div class="pt-3">
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        </div>        
    </div>
</form>

<?php
endforeach;
    } else {
        header("location:admin.php");
    }
} else {
    header("location:admin.php");
}
?>