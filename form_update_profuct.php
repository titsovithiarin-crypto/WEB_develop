
<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tbl_product WHERE id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM tbl_category";
$result_cat = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f0f7f2;
        }

        .vigor {
            max-width: 450px;
            border-radius: 20px;
            box-shadow: 0 5px 20px #d5e5d8;
        }
    </style>
</head>

<body>

<div class="vigor container bg-white mx-auto mt-5 p-4">

    <h2 class="text-success text-center fw-bold mb-1">
        Update Product
    </h2>

    <p class="text-secondary text-center mb-4">
        Make your changes below
    </p>

    <form action="update_product.php" method="post"
          enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label class="form-label">Product Name</label>
        <input class="form-control mb-3" type="text" name="product"
               value="<?php echo $product['name']; ?>" required>

        <label class="form-label">Price ($)</label>
        <input class="form-control mb-3" type="number" step="0.01"
               name="price" value="<?php echo $product['price']; ?>" required>

        <label class="form-label">Quantity</label>
        <input class="form-control mb-3" type="number" name="qty"
               value="<?php echo $product['qty']; ?>" required>

        <label class="form-label">Category</label>
        <select name="cat_id" class="form-select mb-3" required>
            <option value="">Choose category</option>

            <?php
            while ($row = mysqli_fetch_assoc($result_cat)) {
                echo '<option value="'.$row['id'].'" '
                    . ($row['id'] == $product['cat_id'] ? 'selected' : '')
                    . '>'.$row['name'].'</option>';
            }
            ?>
        </select>

        <label class="form-label">Product Image</label>
        <input class="form-control mb-4" type="file" name="img">

        <button type="submit" name="submit"
                class="btn btn-success w-100 rounded-pill">
            Update Product
        </button>

        <a href="product_list.php"
           class="btn btn-light w-100 rounded-pill mt-2">
            Cancel
        </a>

    </form>

</div>

</body>
</html>
