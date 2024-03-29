<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
   <!--Add Modal -->
   <div class="modal fade" id="propertytype-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel">Add New </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body p-4">
					<form method="post" id="store-protype" action="<?php echo base_url() . 'admin/propertytype/protype_store'; ?>">

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name">
								<?= form_error('name')  ?>
                            </div> 
							<div class="mb-3">
								<label for="property_status" class="form-label">Status</label>
								<select class="form-select" name="status" id="property_status">
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
	<div class="modal fade" id="propertyedit-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel2">Edit Property</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body p-4">
					<form method="post" id="update_propertytype" action="#">
							<input type="hidden" name="id" id="edit_pro_id" />
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter full name">
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
								<li class="breadcrumb-item active">Property Type</li>
							</ol>
						</div>
						<h4 class="page-title">Property Type</h4>
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
								<div class="col-sm-8">
									<button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#propertytype-modal"><i class="mdi mdi-plus-circle me-1"></i> Add Property</button>
								</div>
								<div class="col-sm-4">
									<div class="text-sm-end mt-2 mt-sm-0">
										<!-- <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
										<button type="button" class="btn btn-light mb-2 me-1">Import</button>
										<button type="button" class="btn btn-light mb-2">Export</button> -->
									</div>
								</div><!-- end col-->
							</div>

							<div class="table-responsive">
								<table class="table table-centered table-nowrap table-striped" id="products-datatable">
									<thead>
										<tr>
											
											<th>#</th>
											<th>Property Name</th>
											<th>Create Date</th>
											<th>Status</th>
											<th style="width: 85px;">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$i = 0;
										if (!empty($properties)) {
											foreach ($properties as $pro) { 
											$i++;?>
										<tr>
											<td>
												<?php echo $i ?>
											</td>
											<td>
												<?php echo $pro['name'] ?>
											</td>
											
											<td>
												<?php echo date('d M Y h:i:s a',strtotime($pro['created_date'])); ?>
											</td>
											
											<td>
												<?php  if($pro['status']==1){ ?>
													<span class="badge bg-soft-success text-success">
														Active
													</span>
												<?php }else{ ?>
													<span class="badge bg-soft-danger text-danger">
														Inactive
													</span>
												<?php } ?>
												
											</td>

											<td>
												<a href="<?= base_url('admin/propertytype/edit/' .$pro['id']) ?>" class="action-icon edit-btn" data-id="<?= $pro['id'] ?>" data-bs-toggle="modal" data-bs-target="#propertyedit-modal"><i class="mdi mdi-square-edit-outline text-success"></i></a>
												<a href="<?= base_url('admin/propertytype/delete/' .$pro['id']) ?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
											</td>
										</tr>
									
										
										<?php
										}
										}else{ ?>
											<tr>
												<td colspan="3">Records not found</td>
											</tr>
										<?php
										} ?>
									</tbody>
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
	$(".edit-btn").click(function(){
		var id = $(this).attr('data-id');		
		$.ajax({
			url: '<?php echo base_url() ?>admin/Propertytype/edit/' + id,
			type: "POST",
			dataType: "JSON",
			success: function(data) {
				$("#propertyedit-modal #edit_pro_id").val(data.id);
				$('#propertyedit-modal #name').val(data.name);
				$("#propertyedit-modal #property_status").val(data.status);
			}
		});
	});
	$("#update_propertytype").submit(function(o){
		o.preventDefault();
		var id = $('#edit_pro_id').val();
		$.ajax({
			url: '<?php echo base_url() ?>admin/Propertytype/update/' + id,
			type: "POST",
			data: $(this).serialize(),
			dataType: "json",
			success: function(response) {
				$('.btn-close').trigger('click');
				success_message('',response.message);
			}
		});
	});
</script>
