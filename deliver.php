<?php

@include 'config.php';

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update product</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
    
<?php @include 'admin_header.php'; ?>

<section class="heading">
    <h3>Step 3. Tracking</h3>
</section>

<section class="add-products">

   <form action="" method="POST" enctype="multipart/form-data">
      <h3>New Products</h3>
      <input type="file" accept="image/jpg, image/jpeg, image/png" required class="box" name="image">
      <input type="text" class="box" required placeholder="Tracking_" name="name">
      <input type="number" class="box" required placeholder="Number of Stocks" name="stock">
      <input type="number" min="1" class="box" required placeholder="Product Price" name="price">
      <input type="submit" value="add product" name="add_product" class="btn">

   </form>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>