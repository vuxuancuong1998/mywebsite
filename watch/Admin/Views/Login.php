<!DOCTYPE html>
<html lang="vi">

<head>
  <base href="http://localhost/watchstore/Admin/Login"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="#" rel="icon">
  <title>ADMIN - WATCH</title>
  <link href="../public/css/css_admin/ruang-admin.min.css" rel="stylesheet" type="text/css">
  <link href="../public/css/css_admin/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../public/css/css_admin/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
 
  <style type="text/css">
    
    .login-form {
      width: 700px;

      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container">
<div class="login-form">
    <form action="./Login/checklogin" method="POST">
        <h2 class="text-center">Đăng nhập</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="username" required="required" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="Login">Đăng nhập</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox" name="rememberPwd">Remember me</label>
            
        </div>        
    </form>
</div>
</div>
  <script src="../public/js/JS_admin/jquery.min.js"></script>
  <script src="../public/js/JS_admin/bootstrap.bundle.min.js"></script>
  <script src="../public/js/JS_admin/jquery.easing.min.js"></script>
  <script src="../public/js/JS_admin/ruang-admin.min.js"></script>
</body>
</html>