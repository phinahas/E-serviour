<?php
session_start();
if (isset($_SESSION["username"])) {
    if ($_SESSION['role'] == 1) {
        include("base.php");
        include("./headers/admin-header.php");
        ?>
        <form action="add-table-db.php " method="POST" enctype="multipart/form-data">
    <div class="form" style="border: 2px solid grey; width:450px; height:200px; border-radius:5%; padding-top:50px; padding-left:70px; margin-top:100px; margin-left:500px">
        <div class="form-group pt-3">
            <input type="text" placeholder="Table Name" name="tableName" value="table">
     
        <div class="pt-3">
        <button type="submit" name="create" class="btn btn-primary">Create</button>
        </div>
        
    </div>


</form>
<?php
    }
    else{
        header("location:admin.php");
    }
}
else
{
    header("location:admin.php");
}
?>