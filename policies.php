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
    <h3>Policies</h3>
</section>

<section class="policies">
      <h4>Our Freshness Policy</h4>
      <p>
         At Floresset Flower shop, we stand by our commitment to delivering all orders promptly and in pristine condition. Should your order arrive incomplete or with any items missing, we guarantee a swift resolution. Simply reach out to us with the necessary proof of the incomplete delivery, and we'll promptly arrange for a replacement at no extra cost to you. Your satisfaction is our priority.
      </p>

      <h4>Delivery Guarantee</h4>
      <p>
         Here at Floresset Flower Shop, we make every effort to deliver punctually and in perfect condition. Floresset Flower Shop will not be responsible for late or non-deliveries under the following conditions:
      </p>
      <ol>
         <li>Recipient is not present at the provided delivery address and time given an hour of leeway.</li>
         <li>Incorrect provided address.</li>
         <li>Unavailability or no such person given the address of the recipient.</li>
         <li>No available valid contact information was given for us to make another attempt to contact the recipient to finish the transaction successfully.</li>
      </ol>

      <h4>Redirection of Delivery</h4>
      <p>
         For a request of attempt or redirection of order; a surcharge of P350.00 would be applied. We strictly don’t allow cancellation of orders as goods are perishable.
      </p>
      <h4>Holiday Delivery</h4>
      <p>
         As known that Holidays are busy times, early arrangement of orders and reservation during busy times are advised as we would have a cut off of service along the notice of a shorten time of service. Delivery would be then be cut to half day as we also care for our delivery service providers. Delivery would only be allowed from 8:00 AM till 3:00 PM unless further notice from Floresset Flower shop released an advisory. Delivery during this time would be incremented by P100.00.
      </p>

      <h4>Cancellation Of Order</h4>
      <p>
         <strong>Customer:</strong> As mentioned earlier, our policy does not permit the cancellation of orders. However, a cancellation request can be accommodated only if Floresset Flower Shop receives notice no later than 24 hours after the order has been placed, through our provided contact channels. <br>
         <strong>Floresset Flower Shop:</strong> As flowers are perishable goods with limited availability, Floresset Flower Shop reserves the right to cancel orders in the event of insufficient stock. Should a customer experience such a situation, we guarantee a 100% refund of the payment upon contact and arrangement.
      </p>

      <h4>Our Refund & Exchange Policy</h4>
      <p>
         If unsatisfied with the flower/gift provided by Floresset Flower Shop with us at fault we would 100% happily refund given the evidence and arrangement of contract, along with the product returned in its original condition. Occasionally, given the uncontrollable circumstances of that causes your order to be delivered late and provided that we failed to inform you regarding this matter, a maximum of 25% of the value of order would be refunded, Given that it is late for more than 45 minutes of the messaged estimated time of arrival of delivery. Defects are and can be replaced if and only if Floresset Flower Shop is at fault. Product would be happily replaced with no extra charge. For further questions and inquiries, you may contact us through our social media and other contact information found at the ABOUT section of our webpage. All return and refunds are discussed through our contacts and would have varying duration of transaction, with at most 1 month.
      </p>

      <h4>Complaint Resolution Procedures</h4>
      <p>
         Any Complaint received will be acknowledged within not more than 24 hrs. And would be investigated and responded as soon as possible.
      </p>

      <h4>Our Substitution Policy</h4>
      <p>
         Our products and services are subject to availability. Our substitution policy is based on 2 simple criteria: <br>
         <strong>1. Timed Delivery:</strong> Substitution may be necessary to ensure your order arrives on time. Specific container, soil, loam, and more. Our Florist would substitute a similar element or equal or greater value, given that Floresset Flower Shop informs and consults you prior to the substitution. <br>
         <strong>2. Provided at Possible Best Quality:</strong> We only use the best resources available; substitution may be arranged depending on the seasonal availability given the customer is informed and consulted prior substitution with special attention to the element to be substituted.
      </p>

      <h4>Our Security & Privacy Policy</h4>
      <p>
         Under the oath of law Republic Act No. 10173, also known as the Data Privacy Act of 2012 (DPA), Floresset Flower Shop aims to protect personal data in information and communications systems. Secure Shopping: Safe transactions and protection of your privacy have and will always be one of our top priorities. Floresset Flower Shop uses a variety of payment methods for flexible forms of transactions of your payments. You will be provided money transfer details for a specific mode of payment. We do not keep your private and confidential information.
      </p>

      <h4>Privacy Policy Pledge</h4>
      <p>
         Floresset Flower Shop is committed to delivering top-notch products and exceptional customer service at all times. To achieve this, we collect your personal information during registration to better understand your preferences and enhance your overall experience with our services. All data collected by Floresset Flower Shop is obtained through lawful and transparent means, with the explicit acknowledgment and consent of our customers. Your information is gathered solely through voluntary input when using our service. We are committed to safeguarding the protection, professionalism, and confidentiality of our customers' data.
      </p>

      <h4>Your Consent to Our Policy</h4>
      <p>
         By utilizing this website, you agree to the collection and utilization of information by us. Should any changes occur to our privacy policies, we will promptly update them on this page to ensure you are informed about what information we collect and how we utilize it.
      </p>

      <h4>Unsolicited Email</h4>
      <p>
         Floresset Flower Shop only sends emails to customers & Registered Members. Registered Members will receive emails on promotions only if they have consented through sent email.
      </p>

   </section>


   <?php @include 'footer.php'; ?>

   </body>
</html>