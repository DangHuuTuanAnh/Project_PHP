<?php require_once'views/backend/include/header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<a href="index.php?mod=post&act=list" class="nav-link">
						<i style="font-size: 40px!important;width: 70px;
						float: left;" class="nav-icon fas fa-arrow-circle-left"></i>
					</a>
					<h1><?php echo $post['title']; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Chi Tiết Bài Viết</li>
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
				<h1 class="card-title"><b><?php echo $post['description']; ?></b></h1>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fas fa-times"></i></button>
						</div>
					</div>
					<div class="card-body">
						<?php echo htmlspecialchars_decode($post['content']); ?>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<p><b>Tác Giả: </b><?php echo $post['user']['name']; ?></p>
						<p><b>Chuyên Mục: </b><?php echo $post['category']['name']; ?></p>
						<p><b>Ngày Tạo: </b><?php echo $post['created_at']; ?></p>
					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<?php require_once'views/backend/include/footer.php'; ?>