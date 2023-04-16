<?php
require '../ct275_bt/connect.php';

   $sql = "SELECT * FROM products inner join brand on products.brand_id = brand.brand_id";
   $query = mysqli_query($conn, $sql);
   
   if(isset($_POST['add_to_cart'])){
      $prd_name = $_POST['prd_name'];
      $price = $_POST['price'];
      $image = $_POST['image'];
      $quantity = 1;

      $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE prd_name = '$prd_name'");
      if(mysqli_num_rows($select_cart) > 0){
         $message[] = 'Sản phẩm đã có trong giỏ hàng';
      }else{
         $insert_product = mysqli_query($conn, "INSERT INTO `cart`(prd_name, price, image, quantity) VALUES('$prd_name', '$price', '$image', '$quantity')");
         $message[] = 'Thêm vào giỏ hàng thành công';
      }
   }
?>


<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Trang Chủ</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />

      <link rel="stylesheet" href="css/index.css">
   </head>
   <body>
   <?php

   if(isset($message)){
      foreach($message as $message){
         echo '<div class="message"><span>'.$message.'</span></div>';
      };
   };

?>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand logo" href="index.php"><img width="80" src="images/keep-going.png" alt="#" />Shoes.vn</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                        <li class="nav-item ">
                           <a class="nav-link" href="index.php">Trang Chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.php">Giới Thiệu</a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="product.php">Sản Phẩm</a>

                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"> <i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="login.php"> <i class="fa fa-user" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="cart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         <!-- Sản phẩm -->
         <section class="product_section layout_padding">
            <div class="container">
               <div class="heading_container heading_center">
                  <h2>
                     Sản Phẩm
                  </h2>
               </div>
               <div class="row">
               <?php
      
                  $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                  if(mysqli_num_rows($select_products) > 0){
                     while($fetch_product = mysqli_fetch_assoc($select_products)){
               ?>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                     <form action="" method="post">
                        <div class="box">
                        <div class="img-box">
                           <img width="100px;" src="images/<?php echo $fetch_product['image']; ?>" alt="">
                        </div>
                           <h5><?php echo $fetch_product['prd_name']; ?></h5>
                           <div class="price">$<?php echo $fetch_product['price']; ?></div>
                           <input type="hidden" name="prd_name" value="<?php echo $fetch_product['prd_name']; ?>">
                           <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>">
                           <input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>">
                           <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                        </div>
                     </form>

                     </div>
                  </div>
                  <?php
                     };
                  };
                  ?>
               </div>
               <div class="btn-box">
                  <a href="">
                  Xem Thêm
                  </a>
               </div>
            </div>
         </section>
         <!-- end product section -->
      </div>
      <!-- footer start -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#" class="logo"><img width="70" src="images/keep-going.png" alt="#" />Shoes.vn</a>
                      </div>
                      <div class="information_f">
                        <p><strong>ĐỊA CHỈ:</strong> 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ</p>
                        <p><strong>ĐIỆN THOẠI:</strong> 0865999999</p>
                        <p><strong>EMAIL:</strong> shoesshop@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="#">Trang Chủ</a></li>
                           <li><a href="#">Giới Thiệu</a></li>
                           <li><a href="#">Sản Phẩm</a></li>
                           <li><a href="#">Liên Hệ</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Tài Khoản</h3>
                        <ul>
                           <li><a href="#">Tài Khoản</a></li>
                           <li><a href="#">Đăng Ký</a></li>
                           <li><a href="#">Đăng Nhập</a></li>
                           <li><a href="#">Mua Hàng</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Tin tức</h3>
                        <div class="information_f">
                          <p>Đăng ký nhận thông tin sớm nhất.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Email" name="email" />
                                    <input type="submit" value="Đăng Ký" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved<br>
         </p>
      </div>
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>