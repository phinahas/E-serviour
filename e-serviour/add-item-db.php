<?php
include("conn.php");
$_itemName = $_POST["itemName"];
$_amount = $_POST["amount"];
$_quantity = $_POST["quantity"];
$_status = $_POST["options"];
echo ("hi");

if(isset($_POST['upload'])) {
    echo ("iside if");
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileEroor = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileEroor == 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileActualDestination = 'public/images/uploaded/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileActualDestination);
                $_qry = "INSERT INTO foods(itemName, amount, quantity, status, image) VALUES('" . $_itemName . "','" . $_amount . "','" . $_quantity . "','" . $_status . "','" . $fileActualDestination . "') ";


                if (mysqli_query($_conn, $_qry)) {
                    echo ("SUCESS");
?>
                    <html>
                    <br>
                    <a href="login.php">INSERT AGAIN</a><br>
                    <a href="delete.php">DELETE DATA</a><br>
                    <a href="print.php"> PRINT DATA</a><br>

                    </html>
<?php


                } else {
                    header('location:index.php');
                }
            } else {
                echo "size doesnt fit";
            }
        } else {
            echo "something went wrong";
        }
    } else {
        echo "you cannot upload this files";
    }
}
else
{
    echo("exitddddddddddd");
}
?>