<?php
include("base.php");
include("conn.php");
$id = $_GET['id'];
echo ($id);
$_qry = "SELECT * FROM foods WHERE id=$id";
$_rslt = mysqli_query($_conn, $_qry);
$foods = mysqli_fetch_all($_rslt, MYSQLI_ASSOC);
foreach ($foods as $food) :

?>
    <form action="update-item-db.php" method="POST" enctype="multipart/form-data">
        <div class="form" style="border: 2px solid grey; width:450px; height:500px; border-radius:5%; padding-top:50px; padding-left:70px; margin-top:100px; margin-left:500px">
            <div class="form-group pt-3">
                <input type="text" placeholder="Item Name" name="itemName" <?php $name = $food['itemName'];
                                                                            echo " value= {$name}"; ?>>

            </div>
            <div class="form-group pt-3">
                <input type="text" placeholder="Amount" name="amount" <?php $name = $food['amount'];
                                                                        echo " value= {$name}"; ?>>
            </div>
            <div class="form-group pt-3 ">
                <input type="text" placeholder="Quantity" name="quantity" <?php $name = $food['quantity'];
                                                                            echo " value= {$name}"; ?>>
            </div>

            <div class="btn-group btn-group-toggle pt-3" data-toggle="buttons">

                <?php if ($food['status'] == 1) { ?>
                    <label class="btn btn-outline-info ">
                        <input type="radio" name="options" value="1" checked="checked"> Breakfast
                    </label>
                <?php } else { ?>
                    <label class="btn btn-outline-info ">
                        <input type="radio" name="options" value="1"> Breakfast
                    </label>
                <?php } ?>
                <?php if ($food['status'] == 2) { ?>

                    <label class="btn btn-outline-info">
                        <input type="radio" name="options" value="2" checked="checked"> Lunch
                    </label>
                <?php } else { ?>
                    <label class="btn btn-outline-info">
                        <input type="radio" name="options" value="2" > Lunch
                    </label>
                <?php } ?>
                <?php if ($food['status'] == 3) { ?>
                <label class="btn btn-outline-info">
                    <input type="radio" name="options" value="3" checked="checked"> Dinner
                </label>
                <?php } else { ?>
                    <label class="btn btn-outline-info">
                    <input type="radio" name="options" value="3"> Dinner
                </label>
                <?php } ?>

                <?php if ($food['status'] == 4) { ?>
                <label class="btn btn-outline-info">
                    <input type="radio" name="options" value="4" checked="checked"> All Day
                </label>
           
            <?php } else { ?>
                <label class="btn btn-outline-info">
                    <input type="radio" name="options" value="4" > All Day
                </label>
                <?php } ?>
                </div>
                <input type="hidden"  name="id"  <?php $name = $food['id'];echo " value= {$name}"; ?>>
            <div class="form-group pt-3">
            <?php $imgLink=$food['image']; echo "<img src =$imgLink width=70px height=70px >" ?>
                <label >Image</label>
                <input type="file" class="form-control-file pt-3" name="file">
            </div>
            <div class="pt-2">
                <button type="submit" name="update" class="btn btn-primary">update</button>
            </div>

        </div>


    </form>

    </div>
<?php endforeach ?>