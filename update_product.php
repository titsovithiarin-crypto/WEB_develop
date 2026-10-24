<?php

if(isset($_POST['submit'])){
    require 'connection.php';
    echo $_POST['id'];
    echo $_POST['product'];

    $id = $_POST['id'];
    $name = $_POST['product'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $cat_id = $_POST['cat_id'];
    // $img = $_POST['img'];

    $sql = "update tbl_product
                        set name = '$name',
                            price = '$price',
                            qty = '$qty',
                            cat_id = '$cat_id'
                            
                        where id = '$id'
    ";
    if ( mysqli_query ($conn, $sql)){
        // echo "Update Successfully....";
    header('location:'. 'product.php');
    }else{
        echo "Error Update";
    }
}
?>