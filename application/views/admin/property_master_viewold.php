	<!-- ============================================================== -->
	<!-- Start Page Content here -->
	<!-- ============================================================== -->
	<!--Add Modal -->
	<div class="modal fade" id="propertymaster-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-light">
					<h4 class="modal-title" id="myCenterModalLabel">Add New </h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<div class="modal-body p-4">
					<form method="post" id="store-promas" action="<?php echo base_url() . 'admin/propertymaster/store'; ?>">

						<div class="mb-3">
							<label for="property_master" class="form-label">Select Master</label>
							<select class="form-select" name="pro_master_id" id="property_master">
								<option value="">Select Master</option>
								<?php
								foreach ($master as $mas) { ?>

									<option value="<?= $mas['id'] ?>"><?= $mas['name'] ?></option>
								<?php }
								?>
							</select>
							<!-- <?= form_error('property_category_id')  ?> -->
						</div>
						<!-- <div class="mb-3">
							<label for="property_category" class="form-label">Select Category</label>
							<select class="form-select" name="pro_category_id" id="property_category">
							<option value="">Select Category</option>
								<?php
								foreach ($category as $cat) { ?>
									
									<option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
								<?php }
								?>
							</select>
						<?= form_error('property_category_id')  ?> 
						</div>
						<div class="mb-3">
							<label for="property_subcategory" class="form-label">Select Sub Category</label>
							<select class="form-select" name="pro_subcategory_id" id="property_subcategory">
							<option value="">Select Sub Category</option>
								<?php
								foreach ($subcategory as $scat) { ?>
									
									<option value="<?= $scat['id'] ?>"><?= $scat['name'] ?></option>
								<?php }
								?>
							</select>
							 <?= form_error('property_category_id')  ?> 
						</div> -->
						<div class="mb-3">
							<label for="property_category" class="form-label">Select Category</label>
							<select class="form-select" name="pro_category_id" id="property_category">
								<option value="">Select Category</option>
								<?php foreach ($category as $cat) { ?>
									<option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="mb-3">
							<label for="property_subcategory" class="form-label">Select Sub Category</label>
							<select class="form-select" name="pro_subcategory_id" id="property_subcategory">
								<option value="">Select Sub Category</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="promas_status" class="form-label">Status</label>
							<select class="form-select" name="status" id="promas_status">
								<option selected="">Select Status</option>
								<option value="1" selected>Active</option>
								<option value="0">Inactive</option>
							</select>
							<!-- <?= form_error('status')  ?> -->
						</div>

						<div class="text-end">
							<button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
						</div>
					</form>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!-- Edit Modal -->
	<!-- <div class="modal fade" id="propertymasteredit-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-light">
					<h4 class="modal-title" id="myCenterModalLabel2">Edit Sub Category</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<div class="modal-body p-4">
					<form method="post" id="update_propertymaster" action="#">
						<input type="hidden" name="id" id="edit_promas_id" />


						<div class="mb-3">
							<label for="propertymaster_master" class="form-label">Select Master</label>
							<select class="form-select" name="pro_category_id" id="propertymaster_master">
								<?php
								foreach ($category as $cat) { ?>
									<option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
								<?php }
								?>
							</select>
						</div>
						<div class="mb-3">
							<label for="propertymaster_category" class="form-label">Select Category</label>
							<select class="form-select" name="pro_category_id" id="propertymaster_category">
								<?php
								foreach ($category as $cat) { ?>
									<option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
								<?php }
								?>
							</select>
						</div>
						<div class="mb-3">
							<label for="propertymaster_subcategory" class="form-label">Select Sub Category</label>
							<select class="form-select" name="pro_subcategory_id" id="propertymaster_subcategory">
								<?php
								foreach ($category as $cat) { ?>
									<option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
								<?php }
								?>
							</select>
						</div>
						<div class="mb-3">
							<label for="propertymaster_status" class="form-label">Status</label>
							<select class="form-select" name="status" id="propertymaster_status">
								<option selected="">Select Status</option>
								<option value="1" selected>Active</option>
								<option value="0">Inactive</option>
							</select>
						</div>
						<div class="text-end">
							<button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> -->
	<!-- /.modal -->
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
									<!-- <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
									<li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li> -->
									<button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#propertymaster-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>

								</ol>
							</div>
							<h4 class="page-title">Property Master</h4>
						</div>
					</div>
				</div>
				<!-- end page title -->


				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-12">
										<?php if ($this->session->flashdata('success')) { ?>
											<div class="alert alert-success" role="alert">
												<?php
												echo $this->session->flashdata('success');
												?>
											</div>
										<?php } ?>
										<?php if ($this->session->flashdata('error')) { ?>
											<div class="alert alert-danger" role="alert">
												<?php
												echo $this->session->flashdata('error');
												?>
											</div>
										<?php } ?>
									</div>
								</div>
								<div class="row mb-2">
									<!-- <div class="col-sm-8">
										<button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#propertymaster-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>
									</div> -->
									<div class="col-sm-4">
										<div class="text-sm-end mt-2 mt-sm-0">
											<!-- <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
											<button type="button" class="btn btn-light mb-2 me-1">Import</button>
											<button type="button" class="btn btn-light mb-2">Export</button> -->
										</div>
									</div><!-- end col-->
								</div>

								<div class="table-responsive">
									<table class="table table-centered table-nowrap table-striped" id="promaster_datatable">
										<thead>
											<tr>

												<th>#</th>
												<th>Master </th>
												<th>Category</th>
												<th>Sub Category </th>
												<th>Create Date</th>
												<th>Status</th>
												<th style="width: 85px;">Action</th>
											</tr>
										</thead>
									</table>
								</div>



							</div> <!-- end card-body-->
						</div> <!-- end card-->
					</div> <!-- end col -->
				</div>
				<!-- end row -->

			</div> <!-- container -->

		</div> <!-- content -->
	</div>
	<script>

		$(document).ready(function() {
			$('#property_category').change(function() {
				var categoryId = $(this).val();
				if (categoryId != '') {
					$.ajax({
						url: '<?php echo base_url() . "admin/propertymaster/getSubcategoryByCategory"; ?>',
						type: 'post',
						data: {
							property_category_id: categoryId
						},
						dataType: 'json',
						success: function(response) {
							var len = response.length;
							// debugger;
							$("#property_subcategory").empty();
							for (var i = 0; i < len; i++) {
								var id = response[i]['id'];
								var name = response[i]['name'];
								$("#property_subcategory").append("<option value='" + id + "'>" + name + "</option>");
							}
						}
					});
				} else {
					$("#property_subcategory").empty();
				}
			});
		});
		var table = $('#promaster_datatable').DataTable({
			responsive: true,
			ajax: "<?php echo base_url('admin/Propertymaster/all'); ?>",
			"columnDefs": [{
				"targets": 4,
				"createdCell": function(td, cellData, rowData, row, col) {
					if (rowData[4] == '1') {

						$(td).html('<span class="badge bg-soft-success text-success">Active</span>');
					} else if (rowData[4] == '0') {
						$(td).html('<span class="badge bg-soft-danger text-danger">Inactive</span>');
					}
				}
			}, ]
		});

		$(document).on('click', ".edit-btn", function() {
			var id = $(this).attr('data-id');
			$.ajax({
				url: '<?php echo base_url() ?>admin/Propertymaster/edit/' + id,
				type: "POST",
				dataType: "json",
				success: function(data) {
					$("#propertymasteredit-modal #edit_promas_id").val(data.id);
					$('#propertymasteredit-modal #propertymaster_master').val(data.pro_master_id);
					$('#propertymasteredit-modal #propertymaster_category').val(data.pro_category_id);
					$('#propertymasteredit-modal #propertymaster_subcategory').val(data.pro_subcategory_id);
					$("#propertymasteredit-modal #propertymaster_status").val(data.status);
				}
			});
		});
		$("#update_propertymaster").submit(function(o) {
			o.preventDefault();
			var id = $('#edit_promas_id').val();
			$.ajax({
				url: '<?php echo base_url() ?>admin/propertymaster/update/' + id,
				type: "POST",
				data: $(this).serialize(),
				dataType: "json",
				success: function(response) {
					$('#propertymasteredit-modal').modal('hide');
					success_message('', response.message);
					table.ajax.reload(null, false);
				}
			});
		});
		// $.validator.addMethod('requiredselect', function(value,ele,pram){
		// 	return value !='';
		// },'Please Select Property');

		$('#store-promas').validate({
			rules: {
				property_category_id: "required",
				name: "required",
				status: "required"
			},
			message: {
				name: "Please Enter Name"
			}
		});
		$(document).on('click', ".delete-btn", function(e) {
			e.preventDefault();
			var url = e.currentTarget.getAttribute('href');
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((response) => {
				if (response.isConfirmed) {
					window.location.href = url;
				}
			})
		});
	</script>
