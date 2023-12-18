<!--connect file-->
<?php
include('../include/connect.php');
include('../common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LxHhXDoPnlHW1Un9X6E6XdtMSeGUhaLyjzR+C7GLoWtf3I7xjvM4ne4VoswC6+rt30UngsRs7rw1itU0SUz2Fg==" crossorigin="anonymous" />

</head>
<body>
    <h3 class="text-center text-success">All Products</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info text-center">
            <tr>
                <th>Product ID</th>
                <th>Product Title</th>
                <th>Product Price</th>
                <th>Total Sold</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
            $get_products = "SELECT * FROM `products`";
            $result = mysqli_query($con, $get_products);
            $number = 0;

            while($row = mysqli_fetch_assoc($result)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $status = $row['status'];
                $number++;


                echo "<tr class='text-center'>
                <td>$number</td>
                <td>$product_title</td>
                <td><'img src = './productIMGs/$product_image1'></td>
                <td>$product_price/-</td>
                <td>0</td>
                <td>$status</td>
                <td><a href='' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td> 
            </tr>";
            }
            
    
            
            
            
            
            
            
            
            
            
            
            
            ?>
            <tr class="text-center">
                <td>1</td>
                <td>Scarlet Splendour</td>
                <td>Image</td>
                <td>444</td>
                <td>0</td>
                <td>true</td>
                <td><a href="" class="text-light"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="" class="text-light"><i class="fa-solid fa-pen-to-square"></i></a></td> 
            </tr>
        </tbody>
    </table>



















</body>
</html>