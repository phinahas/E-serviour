<?php
session_start();
include("conn.php");
if (isset($_SESSION["username"])) {
    if ($_SESSION['role'] == 1) {
        include("./headers/admin-header.php");
        include("base.php");
        $_qry = "SELECT * FROM users WHERE role = 3 ";
        $_rslt = mysqli_query($_conn, $_qry);
        $tables = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);
        foreach($tables as $table):

?>
<div class="card float-left mt-4  ml-4   " style="width: 18rem;">
  <div class="card-body border border-info">
    <h5 class="card-title"><?php echo($table['username'])?></h5>
    <?php if($table["status"]==1){?>
    <h3>status:</h3><span>Ocupied</span><br>
    <a href="table-status.php?id=<?php echo $table['username'] ?>" class="btn btn-info">View More</a>
    <?php }elseif($table["status"]==-1)
    {?>
     <h3>status:</h3><span>Under Maintenance</span> <br>
     <button class="btn btn-info" disabled>View More</button>
    <?php }else {?>
        <h3>status:</h3><span>Unoccupied</span> <br>
       <button class="btn btn-info" disabled>View More</button>
    <?php }?>  
  </div>
</div>
      
<?php
endforeach;
    } else {
        header("location:admin-login.php");
    }
} else {
    header("location:admin-login.php");
}
?>