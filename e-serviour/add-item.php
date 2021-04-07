<?php
include("base.php");
?>
<form action="add-item-db.php " method="POST" enctype="multipart/form-data">
    <div class="form" style="border: 2px solid grey; width:450px; height:500px; border-radius:5%; padding-top:50px; padding-left:70px; margin-top:100px; margin-left:500px">
        <div class="form-group pt-3">
            <input type="text" placeholder="Item Name" name="itemName">

        </div>
        <div class="form-group pt-3">
            <input type="text" placeholder="Amount" name="amount">
        </div>
        <div class="form-group pt-3 ">
            <input type="text" placeholder="Quantity" name="quantity">
        </div>

        <div class="btn-group btn-group-toggle pt-3" data-toggle="buttons">
            <label class="btn btn-outline-info ">
                <input type="radio" name="options" value="1"> Breakfast
            </label>
            <label class="btn btn-outline-info">
                <input type="radio" name="options" value="2"> Lunch
            </label>
            <label class="btn btn-outline-info">
                <input type="radio" name="options" value="3"> Dinner
            </label>
            <label class="btn btn-outline-info">
                <input type="radio" name="options" value="4"> All Day
            </label>
        </div>

        <div class="form-group pt-3">
            <label>Image</label>
            <input type="file" class="form-control-file" name="file">
        </div>
        <div class="pt-3">
        <button type="submit" name="upload" class="btn btn-primary">Submit</button>
        </div>
        
    </div>


</form>

</div>