<?php require_once'views/backend/include/header.php'; ?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<a href="index.php?mod=category&act=list" class="nav-link">
						<i style="font-size: 40px!important;width: 70px;
						float: left;" class="nav-icon fas fa-arrow-circle-left"></i>
					</a>
					<h1>Chi Tiết Chuyên Mục</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Chi Tiết Chuyên Mục</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="card">
			<div class="card-header">
				
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fas fa-times"></i></button>
						</div>
					</div>
					<div class="card-body">
						<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
							<div class="card bg-light">
								<div class="card-header text-muted border-bottom-0">
									Tên Chuyên Mục:
								</div>
								<div class="card-body pt-0">
									<div class="row">
										<div class="col-7">
											<h2 class="lead"><b><?php echo $category['name']; ?></b></h2>
											<p class="text-muted text-sm"><b>Mô Tả: </b> <?php echo $category['description']; ?> </p>
											<ul class="ml-4 mb-0 fa-ul text-muted">
												<li class="small"><span class="fa-li"><i class="fas fa-link"></i></span> Slug: <?php echo $category['slug']; ?></li>
												<li class="small"><span class="fa-li"><i class="fas fa-table"></i></span> Ngày Tạo: <?php echo $category['created_at']; ?></li>
											</ul>
										</div>
										<div class="col-5 text-center">
											<img src="<?php echo $category['thumbnail']; ?>" alt="" class="img-circle img-fluid">
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<?php require_once'views/backend/include/footer.php'; ?>