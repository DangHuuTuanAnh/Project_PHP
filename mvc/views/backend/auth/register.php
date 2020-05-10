<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đăng Ký | Registration Page</title>
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
<body class="hold-transition register-page" style="background-image: url('public/backend/dist/img/background/1.jpg'); ">
  <div class="register-box">
  <!-- <div class="register-logo">
    <a href="public/backend/index2.html"><b>Admin</b>LTE</a>
  </div> -->

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><h2 style="color: #17a2b8; text-align: center;">REGISTER</h2></p>

      <form method="POST" action="/Project/mvc/index.php?mod=auth&act=register" id="quickForm">
        <div class="input-group mb-3 ">
          <input type="text" class="form-control" placeholder="Full name" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="repassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

        </div>
        <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </a>
          <a href="index.php?mod=home&act=index" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>Back
          </a>
        </div>
      </form>

      <a href="/Project/mvc/index.php?mod=auth&act=login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="public/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/backend/dist/js/adminlte.min.js"></script>
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
        name: {
          required: true,
          // email: true,
        },
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 3
        },
        repassword: {
          required: true,
          minlength: 3
        },
        terms: {
          required: true
        },
      },
      messages: {
        name:{
          required:"Vui lòng nhập họ tên!",
        },
        email: {
          required: "Vui lòng nhập email!",
          email: "Sai định dạng email!"
        },
        password: {
          required: "Vui lòng nhập mật khẩu!",
          minlength: "Vui lòng nhập ít nhất 3 kí tự!"
        },
        repassword: {
          required: "Vui lòng nhập lại mật khẩu!",
          minlength: "Vui lòng nhập ít nhất 3 kí tự!"
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.input-group').append(error);
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
