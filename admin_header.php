<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   
   <div class="flex">

      <a href="admin_page.php" class="logo">
         <img src="images/logo3.jpg"></a>

      <nav class="navbar">
         <a href="admin_page.php">Home</a>
         <a href="admin_payee.php">Payee</a>
         <a href="admin_products.php">Products</a>
         <a href="admin_products_customize.php">Customizer</a>
         <a href="admin_orders.php">Orders</a>
         <a href="admin_users.php">Users</a>
         <a href="admin_contacts.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      
      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         <div>New <a href="login.php">Login</a> | <a href="register.php">Register</a> </div>
      </div>

   </div>

</header>