<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">
                <form id="form_log" class="bg-light p-4 my-3" action="log.php" method="post">
                    <h2 class="py-3 text-center">ĐĂNG NHẬP</h2>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div> 
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div> 
                    
                    <input type="submit" class="btn btn-primary btn-block mt-4 form-control" name="btn-log" value="Đăng nhập"><br><br>
                    <p class="text-center">Bạn chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

