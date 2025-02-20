<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product Care & Tips</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>Product Care & Tips</h3>
</section>

<section class="product-care">
    <h4>Product Care</h4>
    <p>Fresh flowers</p>
    <p>Below are some tips on how you can make these flora last longer:</p>
    <p>1. Carefully unbox/unwrap the protective packaging and liner</p>
    <p>2. Cut the stem at a 45-degree angle with running water; this would allow your flower to last longer</p>
    <p>3. Strip the excess stems of the flower</p>
    <p>4. If the water starts to change in color, change it.</p>
    <p>5. Monitor your flower's environment. Keep out direct sunlight to avoid fast withering.</p>
    <p>The substances employed for flower preservation are non-toxic, non-corrosive, non-carcinogenic, non-explosive, and non-reactive to chemicals. All colorants and solutions adhere to food, medical, or textile grade standards, mitigating any potential health or environmental risks.</p>
</section>


   <?php @include 'footer.php'; ?>

   </body>
</html>