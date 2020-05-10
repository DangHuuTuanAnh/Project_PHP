<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once'views/backend/include/header.php'; 
?>

<div class="content-wrapper">
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
		</div>
	</section>
	<section class="content">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Cập Nhật Thông Tin</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fas fa-times"></i></button>
						</div>
					</div>
					<div class="card-body">
						<form action="index.php?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $category['id']; ?>">
							<div class="card card-primary">
								<div class="card-header">
									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
											<i class="fas fa-minus"></i></button>
										</div>
									</div>
									<div class="card-body" style="display: block;">
										<div class="form-group">
											<label for="inputName">Name</label>
											<input type="text" id="inputName" class="form-control" name="name" value="<?php echo $category['name'] ?>">
										</div>
										<div class="form-group">
											<label for="inputClientCompany">Slug</label>
											<input type="text" id="inputClientCompany" class="form-control" name="slug" value="<?php echo $category['slug'] ?>">
										</div>
										<div class="form-group">
											<label for="inputProjectLeader">Description</label>
											<input type="text" id="inputProjectLeader" class="form-control" name="description" value="<?php echo $category['description'] ?>">
										</div>
										<div class="form-group ">
											<label for="exampleInputFile">File input</label>
											<div class="input-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="exampleInputFile" name="thumbnail">
													<label class="custom-file-label" for="exampleInputFile">Choose file</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="inputProjectLeader">Creted At</label>
											<input class="form-control" id="inputProjectLeader" value="<?php echo date('Y-m-d  H:i:s') ?>" name="created_at">
										</div>
									</div>
									
								</div>
								<div class="card-footer">
									<div class="col-12">
										<a href="index.php?mod=category&act=list" class="btn btn-secondary">Cancel</a>
										<input type="submit" value="Update" class="btn btn-success float-right">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>

		<?php require_once'views/backend/include/footer.php'; ?>