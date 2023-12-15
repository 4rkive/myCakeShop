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
                    <a class="nav-link active" href="display.php">Products</a>
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

          <!-- carousel item -->
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./IMGs/ccake1.1.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
            <img src="./IMGs/ccake1.2.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Another example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
            <img src="./IMGs/ccake1.3.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>One More Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse Gallery</a></p>
                    </div>
                </div>
            </div>
            </div>
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <!--container-marketing-->
        <div class="container marketing">
        <!-- Three columns of text below the carousel -->
            <div class="row justify-content-center mt-5">
            <div class="col-lg-3">
                <svg class="bd-placeholder-img rounded-circle" width="250" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                <h2 class="fw-normal">Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <svg class="bd-placeholder-img rounded-circle" width="250" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                <h2 class="fw-normal">Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <svg class="bd-placeholder-img rounded-circle" width="250" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                <h2 class="fw-normal">Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
            </div>
        </div>
        <!--lastchild-->
        <?php include("./include/footer.php")?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>