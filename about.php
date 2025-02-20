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
   <title>about</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
</section>

<section class="about" id="about">

    <h1 class="about-main"> WHY CHOOSE US?</h1>

    <div class="row">

        <div class="image-about">
            <img src="images/freshflowers.png" alt="">
        </div>

        <div class="about-content">
            <h3>Fresh And Best Flower in the market</h3>
            <p>Indulge in the epitome of floral luxury with our exclusive collection of Exquisite Blossoms. As purveyors of the freshest and finest blooms in the market, we invite you to experience the unparalleled beauty and sophistication that only our flowers can deliver.</p>
            <p>Each stem in our collection is meticulously selected from the most prestigious growers, ensuring unparalleled freshness and longevity. From the delicate petals of the classic rose to the vibrant hues of exotic orchids, our selection boasts a diverse array of floral treasures, curated to elevate any occasion</p>
            <div class="icons-container">
                <div class="icon">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Faster and Free Delivery</span>
                </div>
                <div class="icon">
                    <i class="fas fa-peso-sign"></i>
                    <span>Budget Saver</span>
                </div>
                <div class="icon">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Service</span>
                </div>
            </div>
        </div>
    </div>
    

</section>

<section class="about" id="about">

    <h1 class="about-main">WHERE ARE WE LOCATED?</h1>

    <div class="row">

        <div class="image-about">
            <img src="images/pin.png" alt="">
        </div>

        <div class="about-content">
            <h3>Discover Floral Magic the Beauty Blossoms in Mandaluyong</h3>
            <p>Located in the vibrant heart of Mandaluyong City, at 622 Nueve de Pebrero St., lies Florresset Flower Shop, a haven for floral enthusiasts and connoisseurs alike. Nestled amidst the bustling streets and dynamic energy of the city, our boutique shop beckons with its enchanting display of exquisite blooms and lush greenery</p>
            <p>Conveniently situated in the bustling district of Mandaluyong City, our shop is easily accessible from all corners of the metropolis. Whether you're a local resident or a visitor exploring the diverse offerings of the city, Florresset Flower Shop is a must-visit destination for those seeking to indulge in the beauty of nature's finest creations.</p>
            <div class="icons-container">
                <div class="icon">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Faster and Free Delivery</span>
                </div>
                <div class="icon">
                    <i class="fas fa-peso-sign"></i>
                    <span>Budget Saver</span>
                </div>
                <div class="icon">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Service</span>
                </div>
            </div>
        </div>
    </div>
    

</section>

<section class="about" id="about">

    <h1 class="about-main">How we started</h1>

    <div class="row">

        <div class="image-about">
            <img src="images/starts.jpg" alt="">
        </div>

        <div class="about-content">
            <h3>The Florresset Flower Shop Journey</h3>
            <p>Florresset Flower Shop traces its roots back to a humble beginning in Mandaluyong City, where it blossomed from a small space within the founder's own home. With a passion for flowers and a knack for floral design, the founder began creating beautiful arrangements right from their own living room, serving friends, family, and local neighbors.</p>
            <p>Driven by a deep love for floristry and a desire to share the joy of flowers with others, the founder saw potential beyond the confines of their home. Recognizing the growing demand for their creations, the decision was made to expand operations and establish a dedicated flower shop.

Thus, Florresset Flower Shop was born, with Mandaluyong City as its nurturing ground. From its modest beginnings, the shop quickly gained popularity among locals, known for its exquisite arrangements and personalized service.</p>
            <div class="icons-container">
                <div class="icon">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Faster and Free Delivery</span>
                </div>
                <div class="icon">
                    <i class="fas fa-peso-sign"></i>
                    <span>Budget Saver</span>
                </div>
                <div class="icon">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Service</span>
                </div>
            </div>
        </div>
    </div>
    

</section>


<section class="heading">
    <h3>Customer's Reviews</h3>
</section>

<section class="reviews" id="reviews">

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/resizedclient1.png" alt="">
                    <div class="user-info">
                        <h3>Angelo Ian Calzar</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Florresset Flower Shop exceeded my expectations in every way. The bouquet I ordered was elegant and sophisticated, and it arrived right on time. Their commitment to quality and customer satisfaction is evident in every aspect of their service. I'm a loyal customer for life!</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/resizedclient2.jpg" alt="">
                    <div class="user-info">
                        <h3>Dann Ruswelle Sison</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Florresset Flower Shop never disappoints! I've ordered from them multiple times, and each time, the arrangements are stunning. The attention to detail and the freshness of the flowers always impress me. Plus, their customer service is top-notch. Highly recommend!.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/resizedclient3.jpg" alt="">
                    <div class="user-info">
                        <h3>Sammuel Lera</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Wow! The bouquet I received from Florresset Flower Shop was absolutely gorgeous. The colors, the arrangement—everything was perfect. It's clear that they put a lot of care and thought into their creations. I'll definitely be returning for more!.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/resizedclient4.jpg" alt="">
                    <div class="user-info">
                        <h3>Philip Niko Alvarado</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>I'm always amazed by the creativity and artistry of Florresset Flower Shop. Their arrangements are like works of art, and they never fail to impress. The flowers are fresh, the designs are unique, and the service is exceptional. 10/10!.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/resizedclient5.jpg" alt="">
                    <div class="user-info">
                        <h3>Philip Jhindog</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Florresset Flower Shop helped make my special occasion truly unforgettable. The bouquet they crafted for me was breathtaking and received so many compliments. Their attention to detail and dedication to customer satisfaction are unmatched. Highly recommended!</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-6.png" alt="">
                    <div class="user-info">
                        <h3>Jiyaa Meng</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>I couldn't be happier with the flowers I ordered from Florresset Flower Shop. They brought so much joy to both myself and the recipient. The ordering process was easy, the delivery was prompt, and the flowers were simply stunning. I'll definitely be a repeat customer!</p>
            </div>


        </div>
    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>