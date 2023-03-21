<div class="content-page">
	<div class="content">
		<!-- Start Content-->
		<div class="container-fluid">
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<a type="button" href="<?=base_url('admin/Customermaster')?>" class="btn btn-success" style="float:right;" >Back</a>
							</ol>
						</div>
						<h4 class="page-title">Customer Master</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<form method="post" id="store-promas" action="<?php echo base_url() . 'admin/Customermaster/store'; ?>">
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3" style="display: inline-flex;">
											<div class="col-md-4" style="margin-right: 164px;">
												<label for="source" class="form-label">Source</label>
												<div class="select2" style="margin-bottom: 60px;">
													<select class="js-example-basic-single" name="source">
														<option value="">Nothing Selected</option>
														<?php foreach ($sourcemaster as $item){?>
															<option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
														<?php }
														?>
													</select>
												</div>
											</div>
											<div class="col-md-4" style="margin-right: 164px;">
												<label for="assigned" class="form-label">Assigned</label>
												<div class="select2" style="margin-bottom: 60px;">
													<select class="js-example-basic-single" name="assigned">
														<option value="">Nothing Selected</option>
														<option value="AL">Alabama</option>
														<option value="WY">Wyoming</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<label for="position" class="form-label">Position</label>
												<div class="select2" style="margin-bottom: 60px;">
													<select class="js-example-basic-single" name="position">
														<option value="">Nothing Selected</option>
														<option value="AL">Alabama</option>
														<option value="WY">Wyoming</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3" style="margin-top: -22px;">
											<label for="firstname" class="form-label">First Name</label>
											<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="lastname" class="form-label">Last Name</label>
											<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="phone" class="form-label">Phone</label>
											<input type="text" maxlength="14" class="form-control" name="phone" id="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Phone">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="company" class="form-label">Company Name</label>
											<input type="text" maxlength="14" class="form-control" name="company" id="company" placeholder="Enter Company Name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="email" class="form-label">Email</label>
											<input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="description" class="form-label">Description</label>
											<textarea class="form-control" name="description" id="description"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="text">
											<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div> <!-- end card-body -->
					</div> <!-- end card-->
				</div> <!-- end col -->
			</div>
			<!-- end row -->
		</div> <!-- container -->
	</div> <!-- content -->
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#firstname').bind('keyup blur', function () {
					var node = $(this);
					node.val(node.val().replace(/[^a-zA-Z ]/g, ''));
				}
		);
		$('#lastname').bind('keyup blur', function () {
					var node = $(this);
					node.val(node.val().replace(/[^a-zA-Z ]/g, ''));
				}
		);
	});
</script>
<script>
	$(document).ready(function() {
		$('.js-example-basic-single').select2({
			theme: "bootstrap"
		});
		$('.select2').css('width','22%');
	});
</script>
<style>
	.select2 .selection .select2-selection--single .select2-selection__rendered{
		line-height: 1.5rem;
	}
	.select2-container{
		position: absolute;
	}
</style>
