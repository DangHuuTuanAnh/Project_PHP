<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once'views/backend/include/header.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- include libraries(jQuery, bootstrap) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
</head>
<body>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Bài Viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản Lý Bài Viết</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Thêm Mới Bài Viết</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <form action="index.php?mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <div class="card card-primary">
                  <div class="card-header">

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="card-body" style="display: block;">
                      <div class="form-group">
                        <label for="inputName">Title</label>
                        <input type="text" id="inputName" class="form-control" name="title" value="<?php echo $post['title'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="inputClientCompany">Description</label>
                        <input type="text" id="inputClientCompany" class="form-control" name="description" value="<?php echo $post['description'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Content</label>
                        <!-- <input type="text" class="form-control" id="" placeholder="" name="description"> -->
                        <textarea type="text" class="form-control" id="summernote" placeholder="" name="content"><?php echo $post['content'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Danh mục</label>
                        <select class="form-control" id="" placeholder="" name="category_id">
                          <?php foreach ($categories as $category) {?>
                            <option value="<?php echo $category['id'] ?>"<?php if ($category['id']==$post['category_id']) {
                              echo "selected";
                            } ?>><?php echo $category['name']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">User</label>
                        <select class="form-control" id="" placeholder="" name="user_id">
                          <?php foreach ($users as $user) {?>
                            <option value="<?php echo $user['id'] ?>"<?php if ($user['id']==$post['user_id']) {
                              echo "selected";
                            } ?>><?php echo $user['name']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group ">
                        <label for="exampleInputFile">Thumbnail</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="thumbnail">
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
                  <div class="card-footer">
                    <div class="col-12">
                      <a href="index.php?mod=post&act=list" class="btn btn-secondary">Cancel</a>
                      <input type="submit" value="Update" class="btn btn-success float-right">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>

      </div>
    </body>
    <script>
     $(document).ready(function() {
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        height: 250
      });
    });
  </script>
  </html>


  <?php require_once'views/backend/include/footer.php'; ?>
