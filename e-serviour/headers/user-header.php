<?php
?>
<nav class="navbar navbar-expand-lg  bg-info" style="height: 100px;" >
  <a style="color: white; text-decoration:none ;" href="index.php"><?php echo($_SESSION["username"]) ?></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " style="color: white; padding-left:100px" href="index.php"><img src="public\images\home.png" alt="" srcset="" style="height: 50px; width:100px"></a>
      </li>
      <li class="nav-item">
      <a class="nav-link " style="color: white; padding-left:100px" href="cart.php"><img src="public\images\cart.png" alt="" srcset="" style="height: 50px; width:100px"></a>
      </li>
      
      <li class="nav-item">
      <a class="nav-link " style="color: white; padding-left:100px" href="billing.php"><img src="public\images\bill.png" alt="" srcset="" style="height: 50px; width:100px"></a>
      </li>

      <li class="nav-item">
      <a class="nav-link " style="color: white; padding-left:100px" href="#"><img src="public\images\track.png" alt="" srcset="" style="height: 50px; width:100px"></a>
      </li>

      <a href="logout.php"> logout</a>
    </ul>
    
  </div>
</nav>