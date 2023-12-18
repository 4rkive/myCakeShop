<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid bg-light">
        <h1 class="text-center fw-bold">User Log In</h1>
        <h3 class="text-center fs-8">Log in to continue.</h3>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-6 col-xl-4 my-3 col-md-6">
                <form action="client_login.php" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-2">
                        <label for="client_username" class="form-label fw-bold">Username</label>
                        <input type="text" id="client_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="client_username" />
                    </div>
                    <div class="form-outline mb-2">
                        <label for="client_password" class="form-label fw-bold">Password</label>
                        <input type="password" id="client_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="client_pass1" />
                    </div>
                    <div class="form-outline mb-2">
                        <label for="client_confirmpass" class="form-label fw-bold">Confirm Password</label>
                        <input type="password" id="client_confirmpass" class="form-control" placeholder="Confirm your password" autocomplete="off" required="required" name="client_pass2" />
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Register" class="btn btn-info fw-bold" name="client_login">
                        <p>Don't have an account? <a href="client_register.php" class="text-danger fw-bold">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>