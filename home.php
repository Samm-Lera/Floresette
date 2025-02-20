<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if ($_SESSION['user_id'] === '19') {
   // If the user type is 'guest', display the message
   $message[] = 'Welcome Guest! Create an account to enjoy "Regitered Customer" Discounts ';
}

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_wishlist'])){

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   
   $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_wishlist_numbers) > 0){
       $message[] = 'already added to wishlist';
   }elseif(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart';
   }else{
       mysqli_query($conn, "INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')") or die('query failed');
       $message[] = 'product added to wishlist';
   }

}

if(isset($_POST['add_to_cart'])){

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart';
   }else{

       $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

       if(mysqli_num_rows($check_wishlist_numbers) > 0){
           mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
       }

       mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
       $message[] = 'product added to cart';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Montserrat:wght@300;500;600;800;900&family=Open+Sans:wght@300&family=Poppins&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>New Collections!</h3>
      <p>Florresset: Your blooming haven. Exceptional blooms, personalized service, unforgettable moments. Explore now!</p>
      <h3 style="font-size:medium;">Free Shipping Within Metro Manila!</h3>
      <a href="about.php" class="btn">Discover More</a>
   </div>

</section>


<section class="home-slide" id="home-slide">

   <div class="swiper mySwiper container-slide">

      <div class="swiper-wrapper wrapper-slide">

         <div class="swiper-slide slide">
            <div class="all-content">
               <span>Special Bloom Box Series</span>
               <h3>Isla Bloom Box</h3>
               <p>Experience the magic of nature with Isla Bloom Box. Our exquisite floral arrangements are meticulously crafted to bring beauty and joy to every moment. Each Isla Bloom Box is a masterpiece of color and fragrance, carefully curated to captivate the senses and evoke emotions. Whether you're celebrating a special occasion or simply brightening someone's day, our stunning arrangements will leave a lasting impression. Explore our collection and discover the perfect expression of love, gratitude, or admiration with Isla Bloom Box.</p>
               <a href="shop.php" class="slide-btn">Shop Now</a>
            </div>
            <div class="picture-slide">
               <img src="images/Isla2.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="all-content">
               <span>Special Botanical Bliss Series</span>
               <h3>Helia Bouquet</h3>
               <p>Introducing Helia Bouquet, where elegance meets nature's finest blooms. Our carefully curated bouquets are crafted to elevate any occasion, infusing it with charm and grace. Each Helia Bouquet is a symphony of colors and textures, meticulously arranged to convey your heartfelt sentiments with every petal. Whether you're expressing love, appreciation, or congratulations, our exquisite bouquets are the perfect gesture. Let Helia Bouquet be your partner in creating unforgettable moments, one bloom at a time.</p>
               <a href="shop.php" class="slide-btn">Shop Now</a>
            </div>
            <div class="picture-slide">
               <img src="images/Helia2.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="all-content">
               <span>Special Celestial Flower Series</span>
               <h3>Lovely Lillian</h3>
               <p>Step into a world of floral enchantment with Lovely Lillian. Our enchanting bouquets are designed to delight the senses and ignite the soul. Each Lovely Lillian arrangement is a masterpiece of elegance and grace, featuring a harmonious blend of nature's most exquisite blooms. From the delicate petals to the intoxicating fragrances, our bouquets are a celebration of beauty and love. Whether you're marking a special occasion or simply spreading joy, let Lovely Lillian be your messenger of heartfelt emotions. Embrace the magic of flowers and create unforgettable memories with Lovely Lillian.</p>
               <a href="shop.php" class="slide-btn">Shop Now</a>
            </div>
            <div class="picture-slide">
               <img src="images/Lovely2.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="all-content">
               <span>Special Floral Elegance Series</span>
               <h3>Cappucino Rose Fresh Flower</h3>
               <p>LImmerse yourself in the exquisite beauty of Cappuccino Rose Fresh Flowers. With its captivating blend of rich coffee tones and delicate rose petals, each bouquet is a work of art, meticulously crafted to elevate any occasion. Perfect for expressing admiration, romance, or gratitude, our Cappuccino Rose Fresh Flowers add a touch of sophistication and charm to every moment. Elevate your floral experience with the unparalleled beauty of Cappuccino Rose Fresh Flowers.</p>
               <a href="shop.php" class="slide-btn">Shop Now</a>
            </div>
            <div class="picture-slide">
               <img src="images/cappucinoflower.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="all-content">
               <span>For Her Series </span>
               <h3>Gerbera Galore</h3>
               <p>Embrace the vibrant beauty of Gerbera Galore, the favorite selection this coming February 14th. With a burst of colors and cheerful petals, each bouquet is a celebration of love and joy. Meticulously curated to enchant and captivate, Gerbera Galore adds a touch of warmth and happiness to any occasion. Whether you're expressing affection, admiration, or simply spreading smiles, our Gerbera Galore bouquets are the perfect choice. Elevate your Valentine's Day celebration with the radiant beauty of Gerbera Galore.</p>
               <a href="shop.php" class="slide-btn">Shop Now</a>
            </div>
            <div class="picture-slide">
               <img src="images/gerbera.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="all-content">
               <span>Harmony in Celeberation Bundles</span>
               <h3>Chrome Bubble Ballon, Valerie R</h3>
               <p>Elevate your celebrations with the Chrome Bubble Balloon, a perfect addition for occasions like birthdays. Infuse your events with an extra touch of elegance and charm with the Chrome Bubble Balloon. Featuring a sleek metallic sheen and a delightful round shape, it effortlessly adds a touch of glamour to any setting. Whether you're marking a milestone or simply celebrating life's everyday moments, the Chrome Bubble Balloon is sure to dazzle and delight. Make your next birthday celebration truly unforgettable with the exquisite allure of the Chrome Bubble Balloon, Valerie R.</p>
               <a href="shop.php" class="slide-btn">Shop Now</a>
            </div>
            <div class="picture-slide">
               <img src="images/Chrome.png" alt="">
            </div>
         </div>
      </div>

      <div class="swiper-pagination"></div>
   </div>

</section>

<section class="products">

   <h1 class="title">Florresset Newest Products!</h1>

   <div class="box-container">

      <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE stock > 1 ORDER BY date_and_time DESC LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
              $stock = $fetch_products['stock'];
      ?>
      <form action="" method="POST" class="box">
         <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <div class="price">₱<?php echo $fetch_products['price']; ?>.00</div>
         <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
         <div class="name"><?php echo $fetch_products['name']; ?></div>
         <input type="number" name="product_quantity" value="1" min="0" class="qty">
         <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
         <div class="name" style="font-size: medium;">In Stock: <?php echo $fetch_products['stock']; ?> pcs</div>         <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
         <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>

   </div>

   <div class="more-btn">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Feel free to reach out. We're here to help and provide assistance!</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>




<?php @include 'footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>