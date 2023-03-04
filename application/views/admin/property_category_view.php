	<!-- ============================================================== -->
	<!-- Start Page Content here -->
	<!-- ============================================================== -->
	<!--Add Modal -->
	<div class="modal fade" id="propertycategory-modal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header bg-light">
							<h4 class="modal-title" id="myCenterModalLabel">Add New</h4>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
						</div>
						<div class="modal-body p-4">
						<form method="post" id="store-procat" action="<?php echo base_url() . 'admin/propertycategory/store'; ?>">

								<div class="mb-3">
									<label for="name" class="form-label">Name</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter Property name">
									<?= form_error('name')  ?>
								</div> 
								<div class="mb-3">
									<label for="procat_status" class="form-label">Status</label>
									<select class="form-select" name="status" id="procat_status">
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
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

		<!-- Edit Modal -->
		<div class="modal fade" id="procategoryedit-modal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header bg-light">
							<h4 class="modal-title" id="myCenterModalLabel2">Edit Property Category</h4>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
						</div>
						<div class="modal-body p-4">
						<form method="post" id="update_propertycategory" action="#">
								<input type="hidden" name="id" id="edit_procat_id" />
								<div class="mb-3">
									<label for="name" class="form-label">Name</label>
									<input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter Property name">
									<?= form_error('name')  ?>
								</div>
								<div class="mb-3">
									<label for="property_status" class="form-label">Status</label>
									<select class="form-select" name="status" id="property_status">
										<option selected="">Select Status</option>
										<option value="1">Active</option>
										<option value="0">Inactive</option>									
									</select>
								</div> 
								<div class="text-end">
									<button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
								</div>
							</form>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
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
									<button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#propertycategory-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>

								</ol>
							</div>
							<h4 class="page-title">Property Category</h4>
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
										<?php if($this->session->flashdata('success')){ ?>
										<div class="alert alert-success" role="alert">
											<?php 
												echo $this->session->flashdata('success');
											?>
										</div>
										<?php } ?>
										<?php if($this->session->flashdata('error')){ ?>
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
										<button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#propertycategory-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>
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
									<table class="table table-centered table-nowrap table-striped" id="procategory_datatable">
										<thead>
											<tr>
												
												<th>#</th>
												<th>Property Category Name</th>
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


	var table = $('#procategory_datatable').DataTable({
			responsive: true,
			ajax: "<?php echo base_url('admin/Propertycategory/all'); ?>",
			"columnDefs": [
				{
					"targets": 3,
					"createdCell": function(td, cellData, rowData, row, col) {
						if (rowData[3] == '1') {
							// $(td).css('background-color', 'green')
							$(td).html('<span class="badge bg-soft-success text-success">Active</span>');
						} else if (rowData[3] == '0') {
							$(td).html('<span class="badge bg-soft-danger text-danger">Inactive</span>');
						}
					}
				},
			]
		});

		$(document).on('click', ".edit-btn", function() {
			var id = $(this).attr('data-id');
			$.ajax({
				url: '<?php echo base_url() ?>admin/Propertycategory/edit/' + id,
				type: "POST",
				dataType: "json",
				success: function(data) {
					$("#procategoryedit-modal #edit_procat_id").val(data.id);
					$('#procategoryedit-modal #name').val(data.name);
					$("#procategoryedit-modal #property_status").val(data.status);
				}
			});
		});
		$("#update_propertycategory").submit(function(o){
			o.preventDefault();
			var id = $('#edit_procat_id').val();
			$.ajax({
				url: '<?php echo base_url() ?>admin/Propertycategory/update/' + id,
				type: "POST",
				data: $(this).serialize(),
				dataType: "json",
				success: function(response) {
					$('#procategoryedit-modal').modal('hide');		
					success_message('',response.message);
					table.ajax.reload(null,false);
				}
			});
			
		});
		$('#store-procat').validate({
			rules:{
				name:"required",
				status:"required"
			},message:{
				
			}
		});
		$(document).on('click', ".delete-btn", function(e) {
			e.preventDefault();
			var url=e.currentTarget.getAttribute('href');
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((response) => {
				if(response.isConfirmed)
				{
					window.location.href= url;
				}			
			})	
		});
	</script>
