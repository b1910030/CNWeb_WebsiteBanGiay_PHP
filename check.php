<?php
require '../ct275_bt/connect.php';

   $sql = "SELECT * FROM products inner join brand on products.brand_id = brand.brand_id";
   $query = mysqli_query($conn, $sql);
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

      <link rel="stylesheet" href="css/bootstrap.min.css">
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand logo" href="index1.php"><img width="80" src="images/keep-going.png" />Shoes.vn</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                           <a class="nav-link "  data-toggle="dropdown" href="login.php" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Đăng xuất <span class="caret"></span></a>
                        </li>
                        
                        <!-- <form class="form-inline">
                          
                        </form> -->
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         <div class="col-md-12">
               <div class="bg-light p-4 mr-3">
                  <h4 class="text-center">Đơn hàng của bạn đang chờ để xác nhận! <a style="text-decoration:none;" href="product.php">Tiếp tục mua hàng</a></h4>
               </div>
         </div>
      </div>
     
         <!-- end product section -->
      </div>
      <!-- footer start -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#" class="logo" style="text-decoration:none;"><img width="70" src="images/keep-going.png" alt="#" />Shoes.vn</a>
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
                           <li><a style="text-decoration:none;" href="#">Trang Chủ</a></li>
                           <li><a style="text-decoration:none;" href="#">Giới Thiệu</a></li>
                           <li><a style="text-decoration:none;" href="#">Sản Phẩm</a></li>
                           <li><a style="text-decoration:none;" href="#">Liên Hệ</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Tài Khoản</h3>
                        <ul>
                           <li><a style="text-decoration:none;" href="#">Tài Khoản</a></li>
                           <li><a style="text-decoration:none;" href="#">Đăng Ký</a></li>
                           <li><a style="text-decoration:none;" href="#">Đăng Nhập</a></li>
                           <li><a style="text-decoration:none;" href="#">Mua Hàng</a></li>
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
      <!-- <script src="js/bootstrap.js"></script> -->
      <!-- custom js -->
      <script src="js/custom.js"></script>
                              
      <script>
         function Del(name){
            return confirm("Bạn có chắc muốn xóa sản phẩm: " + name + "?");
         }
      </script>
   </body>
</html>