<?php
if(isset($_POST['submit'])){
    
    require 'connection.php';

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $file_name = basename($_FILES["fileToUpload"]["name"]);


    $name = $_POST['product'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $cat_id = $_POST['cat_id'];
    // $photo = $_POST['img'];
    $status = 1;
    $d = date('Y-m-d');

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       $sql = "insert into tbl_product(name, price, qty, cat_id, img, status, created)
		values('$name', '$price', '$qty', '$cat_id', '$file_name', '$status', '$d')";

        if(mysqli_query($conn, $sql)){
            // echo "Insert Successfully";
            header('location:' . "add_products.php");
        }else{
            echo "Can not insert data to DataBase";
        }
        
    } else {
        echo "Sorry, there was an error uploading your file.";  
    }


    
}
?>