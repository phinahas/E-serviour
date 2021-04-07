<?php
include("base.php") 

?>
<div style="width: 350px; height:300px; margin-top: 200px; margin-left: 500px; border: 2px solid brown; padding-top: 40px; padding-left:50px ;">
<form action="user-login-db.php" method="POST" >
        <div class="form">
            <div class="form-group">
                <input type="text" value="table" name="tableName" style="height: 50px; border-style: groove; border-radius: 15%;">
            </div>

            <div class="btn-group btn-group-toggle pt-3" data-toggle="buttons">
            <label class="btn btn-outline-info ">
                <input type="radio" name="options" value="1" checked> Breakfast
            </label>
            <label class="btn btn-outline-info">
                <input type="radio" name="options" value="2"> Lunch
            </label>
            <label class="btn btn-outline-info">
                <input type="radio" name="options" value="3"> Dinner
            </label>
        </div>

            <div class="pt-2">
                <button type="submit" name="submit" class="btn btn-secondary">Login</button>
            </div>

        </div>
    </form>
</div>