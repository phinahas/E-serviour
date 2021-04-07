<?php
include("conn.php");
$_id = $_POST["id"];
$_itemName = $_POST["itemName"];
$_amount = $_POST["amount"];
$_quantity = $_POST["quantity"];
$_status = $_POST["options"];


if (isset($_POST['update'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileEroor = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    echo ($fileName);
    if ($fileName) {
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png');
        if (in_array($fileActualExt, $allowed)) {
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg', 'jpeg', 'png');
            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
            $fileActualDestination = 'public/images/uploaded/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileActualDestination);
            $_qry = "UPDATE `foods`
                SET `itemName` = '$_itemName', `amount`= '$_amount', `quantity` = '$_quantity', `status` = '$_status', `image` = '$fileActualDestination'
                WHERE `id` = $_id";

            if (mysqli_query($_conn, $_qry)) {
                echo ("SUCESS");
            }
        }
         else {
            $_qry = "UPDATE `foods`
            SET `itemName` = '$_itemName', `amount`= '$_amount', `quantity` = '$_quantity', `status` = '$_status'
            WHERE `id` = $_id";
             if (mysqli_query($_conn, $_qry)) {
                echo ("SUCESS");
            }

        }
    }
     else {
        $_qry = "UPDATE `foods`
        SET `itemName` = '$_itemName', `amount`= '$_amount', `quantity` = '$_quantity', `status` = '$_status'
        WHERE `id` = $_id";
         if (mysqli_query($_conn, $_qry)) {
            echo ("SUCESS");
        }

    }
}
header("location:kitchen.php");
?>