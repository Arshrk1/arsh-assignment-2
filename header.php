

  </header>
  <header class="header">
   <div class="flex">

   <img src="logo.jpg" alt="Smoothie Bar Logo" width="200" height="150">

      <nav class="navbar">
         <a href="admin.php">add products</a>
         <a href="products.php">view products</a>
         <a href="forms.php">FOR REGISTER</a>
         <a href="aboutus.php">ABOUT US</a> 
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>