<?php
session_start();
if(isset($_SESSION["username"]))
{
  
  if($_SESSION["role"]==3)
  {
  include("./headers/user-header.php");
include("base.php");
include("conn.php");
$time = $_SESSION["time"];
$time2 =4;
$_qry = "SELECT * FROM foods where quantity>0 AND (status=4 OR status=$time)   ";
$_rslt = mysqli_query($_conn, $_qry);
$foods = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);

foreach ($foods as $food) :

?>
    <div class="card float-left mt-4  ml-4 pl-3 pt-3 bg-gradient-secondary " style="width: 18rem;">
    <?php $imgLink=$food['image']; echo "<img src =$imgLink width=250px height=200px >" ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $food['itemName'] ?></h5>
            <p class="card-text">Rs.<?php echo $food['amount'] ?></p>
            <form action="add-to-cart.php" method="POST">
                <label for="quantity">Quantity</label>
                <select name="quantity">
                    <?php
                    $qnty = $food['quantity'];
                    for ($x = 1; $x <= $qnty; $x++) {
                    ?>
                        <option <?php echo " value= {$x}"; ?>> <?php echo ($x) ?> </option>
                    <?php
                    }

                    ?>
                </select>
                <br>
                <br>
                <input type="hidden"  name="foodId" <?php $foodId=$food['id']; echo " value= {$foodId}"; ?>>
                <input type="hidden"  name="cost" <?php $cost=$food['amount']; echo " value= {$cost}"; ?>>
                <input type="hidden"  name="foodName" <?php $foodName=$food['itemName']; echo " value= {$foodName}"; ?>>
                <input type="hidden"  name="tableName" <?php $tableName=$_SESSION["username"]; echo " value= {$tableName}"; ?>>
                <input type="submit" value="Add to cart" class="btn btn-primary">
            </form>

        </div>
    </div>
<?php
endforeach;
?>
<?php
  }
  else{
    header('location:user-login.php');
  }
}
else{
   header('location:user-login.php');

}
?>