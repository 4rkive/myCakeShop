
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!--firstchild-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="../IMGs/cakeLogo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">Welcome, Guest!</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!--secondchild-->
        <div class="bg-secondary">
            <h4 class="text-center p-2 text-light">Product Management</h4>
          </div>

          <!--thirdchild-->
          <div class="row">
            <div class="col-md-12 bg-light p-1 d-flex align-center">
                <div class="px-5">
                    <a href=""><img src="../IMGs/adminImage.jpg" alt="" class="admin_image"></a>
                    <p class="text-dark text-center">Admin Name</p>
                </div>
                <div class="text-center align-center m-auto">
                    <a href="insert_products.php" class="btn btn-primary my-2" role="button">Insert Products</a>
                    <a href="index.php?view_products" class="btn btn-primary my-2" role="button">View Products</a>
                    <a href="index.php?insert_category" class="btn btn-primary my-2" role="button">Insert Categories</a>
                    <a href="#" class="btn btn-primary my-2" role="button">View Categories</a>
                    <a href="#" class="btn btn-primary my-2" role="button">All orders</a>
                    <a href="#" class="btn btn-primary my-2" role="button">All Payments</a>
                    <a href="#" class="btn btn-primary my-2" role="button">List Users</a>
                </div>
                <div class="text-center align-left m-auto">
                            <a href="#" class="btn btn-secondary my-2" role="button">Logout</a>
                        </div>
            </div>
          </div>

          <!--fourthchild-->
          <div class="container m-auto align-center">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['view_products'])){
                include('view_products.php');
            }
            ?>
          </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>