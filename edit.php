<?php
require '../ct275_bt/connect.php';

    $id = $_GET['id'];

   $sql_brand = "SELECT * FROM brand";
   $query_brand = mysqli_query($conn, $sql_brand);

   $sql_up = "SELECT * FROM products where prd_id = $id";
   $query_up = mysqli_query($conn, $sql_up);
   $row_up = mysqli_fetch_assoc($query_up);

   if(isset($_POST['sbm'])){
       $prd_name = $_POST['prd_name'];

        if($_FILES['image']['name']==''){
            $image = $row_up['image'];
        }else{
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'images/'.$image);
        }
       
       $price = $_POST['price'];
       $quantity = $_POST['quantity'];
       $description = $_POST['description'];
       $brand_id = $_POST['brand_id'];

       $sql = "UPDATE products SET prd_name = '$prd_name', image = '$image', price = $price, quantity = $quantity, description = '$description', brand_id = $brand_id WHERE prd_id = $id"; 
       $query = mysqli_query($conn, $sql);

       header('location: product_list.php');
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

      <link rel="stylesheet" href="css/bootstrap.min.css">
   </head>
   <body>
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
                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Trang Chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.php">Giới Thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Sản Phẩm <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">Nike</a></li>
                              <li><a href="#">Adidas</a></li>
                              <li><a href="#">Vans</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"> <i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        
                        <!-- <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                          
                           </button>
                        </form> -->
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">
                <form class="bg-light p-4 my-3" action="" method="post" enctype="multipart/form-data">
                    <h2 class="py-3 text-center">SỬA SẢN PHẨM</h2>
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="prd_name" class="form-control" require value="<?php echo $row_up['prd_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="image" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="">Giá sản phẩm</label>
                        <input type="number" name="price" class="form-control" require value="<?php echo $row_up['price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="number" name="quantity" class="form-control" require value="<?php echo $row_up['quantity']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input type="text" name="description" class="form-control" require value="<?php echo $row_up['description']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Thương hiệu</label>
                        <select name="brand_id" class="form-control" require>
                            <?php
                                while($row_brand = mysqli_fetch_assoc($query_brand)){?>
                                    <option value="<?php echo $row_brand['brand_id']; ?>"><?php echo $row_brand['brand_name']; ?></option>
                                <?php } ?>
                            
                        </select>
                    </div>
                    
                    <button name="sbm" class="btn btn-success" type="sumit">Lưu lại</button>
                </form>
            </div>
        </div>
    </div>

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
                        <p><strong>mota:</strong> shoesshop@gmail.com</p>
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
                                    <input type="mota" placeholder="mota" name="mota" />
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