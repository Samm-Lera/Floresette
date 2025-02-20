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
   <title>Delivery</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>Delivery</h3>
</section>

<section class="delivery-info">
    <h4>Postal Codes & Delivery Charges</h4>
    <p>Please take note FREE* delivery only applies within METRO MANILA.</p>
    <p>For other areas outside Metro Manila please contact our customer service via chat/message, call, or email.</p>
    <p>We also accept deliveries nationwide for our gift boxes, food hampers, & dried flower bouquets only.</p>

    <h4>Delivery Policy</h4>
    <p>Here at Floresset Flower Shop, we make every effort to deliver punctually and in perfect condition.</p>
    <p>Floresset Flower Shop will not be responsible for late or non-deliveries under the following conditions:</p>
    <p>1. Recipient is not present at the provided delivery address and time given an hour of leeway.</p>
    <p>2. Incorrect provided address.</p>
    <p>3. Unavailability or no such person given the address of the recipient.</p>
    <p>4. No available valid contact information was given for us to make another attempt to contact the recipient to finish the transaction successfully.</p>

</section>



   <?php @include 'footer.php'; ?>

   </body>
</html>