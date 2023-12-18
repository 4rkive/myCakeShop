<?php
// connect file
include('./include/connect.php'); // Corrected the path and removed extra slashes

// getting products
function getProducts(){
    global $con; // Using global keyword to access $con variable inside the function

    // condition to isset or not
    if (!isset($_GET['category'])){
            $select_query = "SELECT * FROM `products` ORDER BY RAND() LIMIT 0,6";
            $result_query = mysqli_query($con, $select_query);
    
        if ($result_query) {
            while ($row = mysqli_fetch_assoc($result_query)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
    
                echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                    <img src='./admin_area/productIMGs/$product_image1' class='card-img-top' alt='$product_description'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>Price: $product_price</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
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
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
    
                echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                    <img src='./admin_area/productIMGs/$product_image1' class='card-img-top' alt='$product_description'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
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
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
    
                echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                    <img src='./admin_area/productIMGs/$product_image1' class='card-img-top' alt='$product_description'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
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
function searchProducts() {
    global $con;

    if (isset($_GET['search_data_product'])) {
        $search_data_value = mysqli_real_escape_string($con, $_GET['search_data']);

        $search_query = "SELECT * FROM `products` WHERE product_keyword LIKE '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);

        if ($result_query) {
            if (mysqli_num_rows($result_query) > 0) {
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];

                    echo "<div class='col-md-4 mb-2'>
                            <div class='card'>
                                <img src='./admin_area/productIMGs/$product_image1' class='card-img-top' alt='$product_description'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text'>$product_description</p>
                                    <p class='card-text'>Price: $product_price</p>
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                                    <a href='#' class='btn btn-secondary'>View More</a>
                                </div>
                            </div>   
                        </div>";
                }
            } else {
                echo "<h2 class='text-center text-danger'>No results match. Product not Available!</h2>";
            }
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}

//get ip address
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  

// cart function
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $con;

        $get_ip_add = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];

        // Fix variable name typo
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add' AND product_id = $get_product_id";
        $result_query = mysqli_query($con, $select_query);

        // Use correct variable name
        $num_of_rows = mysqli_num_rows($result_query);

        if($num_of_rows > 0){
            echo "<script>alert('This item is already present inside the cart')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
        else {
            // Fix variable name typo
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ($get_product_id, '$get_ip_add', 0)";

            // Use correct variable name
            $result_query = mysqli_query($con, $insert_query);
            echo "<script>alert('Item is added to cart')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
    }
}

//function to get cart item numbers
function cart_item(){
    if(isset($_GET['add_to_cart'])){
        global $con;

        $get_ip_add = getIPAddress();

        // Fix variable name typo
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
        $result_query = mysqli_query($con, $select_query);

        $count_cart_items = mysqli_num_rows($result_query);
    }
    else {
        global $con;

        $get_ip_add = getIPAddress();

        // Fix variable name typo
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
        $result_query = mysqli_query($con, $select_query);

        $count_cart_items = mysqli_num_rows($result_query);
        }
        echo $count_cart_items;
    }

//total price function
function total_cart_price(){
    global $con;

    $get_ip_add = getIPAddress();
    $total_price = 0;

    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
    $result = mysqli_query ($con,$cart_query);
    while ($row = mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $select_products="SELECT * FROM `products` WHERE product_id='$product_id'";
        $result_products = mysqli_query ($con,$select_products);

        while ($row_product_price = mysqli_fetch_array($result_products)){
            $product_price = $row_product_price['product_price'];
            $total_price += $product_price;
        }
    }
    echo $total_price;
}
