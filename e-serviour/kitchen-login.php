<?php
include("base.php") 

?>
<div style="width: 350px; height:300px; margin-top: 200px; margin-left: 500px; border: 2px solid brown; padding-top: 40px; padding-left:50px ;">
<form action="kitchen-login-db.php" method="POST" >
        <div class="form">
            <div class="form-group">
                <input type="text"  name="username" placeholder="USERNAME" style="height: 50px; border-style: groove; border-radius: 15%;">
            </div>
            <div class="form-group">
                <input type="password"  name="password" placeholder="PASSWORD " style="height: 50px; border-style: groove; border-radius: 15%;">
            </div>

            

            <div class="pt-2">
                <button type="submit" name="submit" class="btn btn-secondary">Login</button>
            </div>

        </div>
    </form>
</div>