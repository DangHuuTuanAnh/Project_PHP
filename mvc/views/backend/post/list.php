<?php require_once'views/backend/include/header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Quản Lý Bài Viết</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
						<li class="breadcrumb-item active">Quản Lý Bài Viết</li>
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
				<h3 class="card-title">Danh Sách Bài Viết</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fas fa-times"></i></button>
						</div>
					</div>
					<div class="card-body">
						<?php
						if (isset($_COOKIE["success"])) {?>
							<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<!-- <h5><i class="icon fas fa-check"></i> Alert!</h5> -->
								<?php echo $_COOKIE["success"]; ?>
							</div>
						<?php }?>
						<div class="card-body p-0">
							<table class="table table-striped projects">
								<thead>
									<tr>
										<th style="width: 1%">
											ID
										</th>
										<th style="width: 20%">
											Title
										</th>
										<th style="width: 3%">
											Thumbnail
										</th>
										<!-- <th style="width: 8%" class="text-center">
											Thumbnail
										</th> -->
										<th style="width: 20%">
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php 
										foreach ($posts as $post) {?>
											<td><?php echo $post['id']; ?></td>
											<td style="width: 200px;"><?php echo $post['title']; ?></td>
											<!-- <td style="width: 690px;"><?php echo $post['description']; ?></td> -->
											<td>
												<img src="<?php echo $post['thumbnail']; ?>" width="100px" height="100px">
												<!-- <?php echo $post['thumbnail']; ?> -->
											</td>
											<td class="project-actions text-right">
												<a class="btn btn-primary btn-sm" href="index.php?mod=post&act=detail&id=<?php echo $post['id'] ?>">
													<i class="fas fa-folder">
													</i>
													View
												</a>
												<a class="btn btn-info btn-sm" href="index.php?mod=post&act=edit&id=<?php echo $post['id'] ?>">
													<i class="fas fa-pencil-alt">
													</i>
													Edit
												</a>
												<a class="btn btn-danger btn-sm" href="index.php?mod=post&act=destroy&id=<?php echo $post['id'] ?>">
													<i class="fas fa-trash">
													</i>
													Delete
												</a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						Footer
					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<?php require_once'views/backend/include/footer.php'; ?>