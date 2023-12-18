<!--connect file-->
<?php
include('include/connect.php');
include('function/common_function.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet 'n Delices-cart details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        .cart_img{
            width: 70px;
            height: 60px;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--firstchild-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <img src="./IMGs/cakeLogo.png" alt="" class="logo">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="index.php">Explore</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Customization</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="cart.php"><i class="fas fa-shopping-cart"></i><sup><?php cart_item(); ?></sup></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!--calling cart function-->
          <?php
          cart();
          ?>

          <!--secondchild-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-center">
              <li class="nav-item text-center">
                <p class="nav-link text-light" href="#">Welcome, Guest!</p>
              </li>
            </ul>
            </div>
          </nav>

          <!--thirdchild-->
          <div class="bg-light">
            <h3 class="text-center fs-5 fw-bold">Hidden Store</h3>
            <p class="text-center fs-6 fw-light">“If I get reincarnated… I wanna become a clam.”</p>
          </div>

          <!-- fourt child-table -->
          <div class="container">
            <div class="row">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Product image</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                            <th colspan="2">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- php code to display dynamic data -->
                            <?php
                             global $con;

                             $get_ip_add = getIPAddress();
                             $total_price = 0;
                             
                             $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
                             $result = mysqli_query($con, $cart_query);
                             
                             while ($row = mysqli_fetch_array($result)) {
                                 $product_id = $row['product_id'];
                                 $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
                                 $result_products = mysqli_query($con, $select_products);
                             
                                 while ($row_product_price = mysqli_fetch_array($result_products)) {
                                     $product_price = $row_product_price['product_price']; // Retrieve the product price directly
                                     $price_table = $row_product_price['product_price'];
                                     $product_title = $row_product_price['product_title'];
                                     $product_image1 = $row_product_price['product_image1'];
                                     $total_price += $product_values; // Add the product price directly to the total
                             ?>
                           <tr>
                            <td><?php echo $product_title?></td>
                            <td><img src="./IMGs/<?php echo $product_image1?>" alt="" class="cart_img"></td>
                            <td><input type="text" name=" " id="" class="form-input w=50"></td>
                            <td><?php echo $price_table?></td> 
                            <td><input type="checkbox"></td>
                            <td>
                               <button class="bg-info px-3 py-2 border-0 mx-3">Update</button>
                               <button class="bg-info px-3 py-2 border-0 mx-3">Remove</button>
                           </td>
                        </tr>
                    </tr> 
                    <?php
                    }
               }
                             ?>
                    </tbody>
                  </table>
                  <!-- subtotal -->
            <div class="d-flex mb-5">
                 <h4 class="px-3">Subtotal: <strong class="price-info"><?php echo $price_table?></strong></h4>
                 <a href="index.php"><button class="bg-info px-3 py-2 border-0 mx-3">Continue shopping</button></a>
                 <a href="#"><button class="bg-secondary p-3 py-2 border-0 text-light">Checkout</button></a>
            </div>
        </div>
    </div>
    <!-- lastcild --> 
    <?php
    include("./include/footer.php")
    ?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>