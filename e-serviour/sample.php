<div class="kitchen" style="margin-left: 350px; height: 110px; border: 2px solid green; border-radius: 50px;">
                <img src="public\images\kitchen.png" alt="" style="height: 100px; width: 100px;">
              
            </div>
            <div class="table" style="margin-left: 350px;">
                <img src="public\images\table.png" alt="" style="height: 100px; width: 100px;">
              
            </div>
            <div class="bill" style="margin-right: 100px;">
                <img src="public\images\bill-status.png" alt="" style="height: 100px; width: 100px;">
               

            </div>










            <?php if ($food["status"] == 0) { echo("ha0:    ");  echo($food["status"]) ?>
                                <th scope="row">
                                    <div style="width: 20px; height: 20px;background-color: green; border-radius: 50%;"></div>
                                </th>
                            <?php } elseif ($food["status"] == 1) { echo($food["status"]) ?>
                                <th scope="row">
                                    <div style="width: 20px; height: 20px;background-color: green; border-radius: 50%;"></div>
                                </th>
                            <?php } elseif ($food["status"] == 2) {echo("ha2:    "); echo($food["status"]) ?>
                                <th scope="row">
                                    <div style="width: 20px; height:20px; background-color: green; border-radius: 50%;"></div>
                                </th>
                                <?php } elseif ($food["status"] == 3) {  echo($food["status"]) ?>
                                <th scope="row">
                                    <div style="width: 20px; height: 20px;background-color: green; border-radius: 50%;"></div>
                                </th>
                            <?php } ?>