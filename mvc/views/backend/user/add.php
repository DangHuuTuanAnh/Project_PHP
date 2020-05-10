<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once'views/backend/include/header.php'; 
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản Lý Người Dùng</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Quản Lý Người Dùng</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Thêm Mới Người Dùng</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <form id="quickForm" action="index.php?mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">
              <div class="card card-primary">
                <div class="card-header">
                  <!-- <h3 class="card-title">General</h3> -->

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <div class="form-group">
                      <label for="inputName">Name</label>
                      <input type="text" id="inputName" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                      <label for="inputClientCompany">Email</label>
                      <input type="text" id="inputClientCompany" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                      <label for="inputProjectLeader">Pass Word</label>
                      <input type="password" id="inputProjectLeader" class="form-control" name="password">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputProjectLeader">Creted At</label>
                      <input class="form-control" value="<?php echo date('Y-m-d  H:i:s') ?>" name="created_at">
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="card-footer">
                <div class="col-12">
                  <a href="index.php?mod=user&act=list" class="btn btn-secondary">Cancel</a>
                  <input type="submit" value="Create New User" class="btn btn-success float-right">
                </div>
              </div>
            </form>

            <!-- /.card-body -->
          </div>

        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require_once'views/backend/include/footer.php'; ?>
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