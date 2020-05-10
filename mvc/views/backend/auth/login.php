<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đăng Nhập | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/backend/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: url('public/backend/dist/img/background/1.jpg'); ">
  <div class="login-box">
  <!-- <div class="login-logo">
    <a href="public/backend/index2.html"><b><h1 >Đăng Ký</h1></b></a>
  </div> -->
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><h2 style="color: #17a2b8; text-align: center;">LOGIN</h2></p>

      <form method="POST" action="/Project/mvc/index.php?mod=auth&act=login" id="quickForm">

        <div  class="input-group mb-3 form-group">
          <input type="email" class="form-control" placeholder="Email" name="email" id="exampleInputEmail1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div  class="input-group mb-3 form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" id="exampleInputPassword1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        </div>
        <div class="social-auth-links text-center mb-3">
          <a href="#" class="btn btn-block btn-primary">
            <button type="submit" class="btn btn-primary btn-block" name="btn_submit">Sign In</button>
          </a>
          <a href="index.php?mod=home&act=index" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Back
          </a>
        </div>
      </form>


      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="index.php?mod=auth&act=register" class="text-center">Register a new membership</a>
      </p>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="public/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/backend/dist/js/adminlte.min.js"></script>
<!-- Bootstrap 4 -->
<!-- jquery-validation -->
<script src="public/backend/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="public/backend/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="public/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/backend/dist/js/demo.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    // $.validator.setDefaults({
    //   submitHandler: function () {
    //     alert( "Đăng nhập thành công!" );
    //   }
    // });
    $('#quickForm').validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 3
        },
        terms: {
          required: true
        },
      },
      messages: {
        email: {
          required: "Vui lòng nhập email!",
          email: "Sai định dạng email!"
        },
        password: {
          required: "Vui lòng nhập mật khẩu!",
          minlength: "Vui lòng nhập ít nhất 3 kí tự!"
        },
        
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
</body>
</html>
