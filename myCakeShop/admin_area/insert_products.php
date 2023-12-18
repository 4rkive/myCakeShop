<?php
include('../include/connect.php');

if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keyword = $_POST['product_keyword'];
    $category_id = $_POST['category_id'];
    $product_price = $_POST['product_price'];
    $product_status = "true";

    // Accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $temp_image1 = $_FILES['product_image1']['tmp_name'];

    // Checking empty condition
    if (empty($product_title) || empty($product_description) || empty($product_keyword) || empty($category_id) || empty($product_price) || empty($product_image1)) {
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./productIMGs/$product_image1"); {
            // Insert query
            $insert_products = "INSERT INTO `products` (product_title, product_description, product_keyword, category_id, product_image1, product_price, date, status) VALUES ('$product_title','$product_description','$product_keyword','$category_id','$product_image1','$product_price', NOW(), '$product_status')";
            $result_query = mysqli_query($con, $insert_products);

            if ($result_query) {
                echo "<script>alert('Successfully inserted the product')</script>";
            }
         }
        }
}
?>


    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container-fluid bg-light">
        <h3 class="text-center">Insert Products</h3>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-6 col-xl-4 my-3 col-md-6">
                <form action="insert_products.php" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-2">
                        <label for="product_title" class="form-label fw-bold">Product Title</label>
                        <input type="text" id="product_title" class="form-control" name="product_title" placeholder="Enter product name" autocomplete="off" required="required"/>
                    </div>
                    <div class="form-outline mb-2">
                        <label for="product_description" class="form-label fw-bold">Product Description</label>
                        <input type="text" id="product_description" class="form-control" name="product_description" placeholder="Enter product description" autocomplete="off" required="required"/>
                    </div>
                    <div class="form-outline mb-2">
                        <label for="product_keyword" class="form-label fw-bold">Product Keywords</label>
                        <input type="text" id="product_keyword" class="form-control" name="product_keyword" placeholder="Enter product keyword" autocomplete="off" required="required"/>
                    </div>
                    <!-- Category Select -->
                    <div class="form-outline mb-2">
                        <label for="category_id" class="form-label fw-bold">Select a Category</label>
                        <select name="category_id" id="category_id" class="form-select">
                        <option value="">Categories</option>
                            <?php
                            $select_query = "SELECT * FROM `categories`";
                            $result_query = mysqli_query($con, $select_query);

                            while ($row = mysqli_fetch_assoc($result_query)) {
                            $category_title = $row['category_title'];
                            $category_id = $row['category_id'];

                            echo "<option value='$category_id'>$category_title</option>"; // Assign $category_id as the option value
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-outline mb-2">
                        <label for="product_image1" class="form-label">Product Image</label>
                        <input type="file" id="product_image1" class="form-control" name="product_image1" placeholder="Enter product Image #1" autocomplete="off" required="required"/>
                    </div>
                    <div class="form-outline mb-2">
                        <label for="product_price" class="form-label fw-bold">Product Price</label>
                        <input type="text" id="product_price" class="form-control" name="product_price" placeholder="Enter product price" autocomplete="off" required="required"/>
                    </div>
                    <input type="submit" name="insert_product" class="btn btn-info px-4 mb-4" value="Insert Products"/>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>