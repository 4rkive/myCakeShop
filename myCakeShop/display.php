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
    <title>Sweet 'n Delices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="display.php">Products</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i><sup>1</sup></a>
                  </li>
                </ul>
                <div class="d-flex justify-content-center">
                  <div class="d-flex align-items-center">
                    <a href="" class="btn btn-dark px-3 me-1" data-mdb-ripple-init>Login</a>
                    <a href="" class="btn btn-dark me-3" data-mdb-ripple-init>Sign up for free</a>
                    <a href="" class="btn btn-dark px-3 me-1" data-mdb-ripple-init role="button"><i class="fab fa-github"></i></a>
                  </div>
                </div>
                <form class="d-flex" role="search" action="searchProduct.php" method="GET">
                  <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search" name="search_data">
                  <input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
                </form>
              </div>
            </div>
          </nav>

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

          <!--fourthchild-->
          <div class="row">
            <!--sidenavbar-->
          <div class="col-md-2 mb-3 p-0 bg-danger ">
            <ul class="navbar-nav text-center m-auto">
              <!-- categories to be dsplayed -->
              <li class="nav-item text-bg-secondary">
                <a href="#" class="nav-link">
                  <h6>Categories</h6></a>
              </li>
            <?php getCategories();?>
            </ul>
              </div>
            <div class="col-md-9">
                 <!--products-->
                 <div class="row">
                  <!-- fetching products-->
                  <?php
                  // calling function
                  getProducts();
                  get_uniqueCategories();
                  ?>
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