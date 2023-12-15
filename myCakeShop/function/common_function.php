<?php
// connect file
include('./include/connect.php'); // Corrected the path and removed extra slashes

// getting products
function getProducts(){
    global $con; // Using global keyword to access $con variable inside the function

    // condition to isset or not
    if (!isset($_GET['category'])){
            $select_query = "SELECT * FROM `products` ORDER BY RAND() LIMIT 0,2";
            $result_query = mysqli_query($con, $select_query);
    
        if ($result_query) {
            while ($row = mysqli_fetch_assoc($result_query)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
    
                echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                    <img src='./admin_area/product_IMGs/$product_image' class='card-img-top' alt='$product_description'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-primary'>Add to cart</a>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                    </div>   
                </div>";
            }
        } else {
            echo "No products found."; // Display a message if no products are fetched
        }
    }
}

// getting all products
function get_allProducts(){
    global $con; // Using global keyword to access $con variable inside the function

    // condition to isset or not
    if (!isset($_GET['category'])){
            $select_query = "SELECT * FROM `products` ORDER BY RAND()";
            $result_query = mysqli_query($con, $select_query);
    
        if ($result_query) {
            while ($row = mysqli_fetch_assoc($result_query)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
    
                echo "<div class='col-md-3 mb-2'>
                    <div class='card'>
                    <img src='./admin_area/product_IMGs/$product_image' class='card-img-top' alt='$product_description'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-primary'>Add to cart</a>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                    </div>   
                </div>";
            }
        } else {
            echo "No products found."; // Display a message if no products are fetched
        }
    }
}

// getting unique categories
function get_uniqueCategories(){
    global $con; // Using global keyword to access $con variable inside the function

    // condition to isset or not
    if (isset($_GET['category'])){
        $category_id = $_GET['category'];
        $select_query = "SELECT * FROM `products` WHERE category_id = $category_id";
        $result_query = mysqli_query($con, $select_query);
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);

        if($num_of_rows == 0){
            echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
        }
    
        if ($result_query) {
            while ($row = mysqli_fetch_assoc($result_query)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
    
                echo "<div class='col-md-3 mb-2'>
                    <div class='card'>
                    <img src='./admin_area/product_IMGs/$product_image' class='card-img-top' alt='$product_description'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-primary'>Add to cart</a>
                        <a href='#' class='btn btn-secondary'>View More</a>
                    </div>
                    </div>   
                </div>";
            }
        } else {
            echo "No products found."; // Display a message if no products are fetched
        }
    }
}

//displaying categories in sidenav
function getCategories(){
    global $con;
    $select_categories = "SELECT * FROM `categories`";
              $result_categories = mysqli_query($con,$select_categories);


              while ($row_data = mysqli_fetch_assoc($result_categories)){
                $category_title = $row_data['category_title'];
                $category_id = $row_data['category_id'];
                echo "<li class='nav-item'>
                <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
               </li>";
              }
}

// searching products
function searchProducts(){
    global $con; // Using global keyword to access $con variable inside the function

    if(isset($_GET['search_data_product'])){
        $search_data_value = $_GET['search_data_product']; // Use correct $_GET variable name

        $search_query = "SELECT * FROM `products` WHERE product_keywords LIKE '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);
        
        if ($result_query) {
            if(mysqli_num_rows($result_query) > 0) {
                while ($row = mysqli_fetch_assoc($result_query)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image = $row['product_image'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
    
                    echo "<div class='col-md-3 mb-2'>
                        <div class='card'>
                        <img src='./admin_area/product_IMGs/$product_image' class='card-img-top' alt='$product_description'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <a href='#' class='btn btn-primary'>Add to cart</a>
                            <a href='#' class='btn btn-secondary'>View More</a>
                        </div>
                        </div>   
                    </div>";
                }
            }
        }
    }
}

?>