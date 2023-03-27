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
								<!-- <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#masters-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button> -->

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
							<form method="post" id="store-promas" action="<?php echo base_url() . 'admin/propertymaster/store'; ?>">
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="property_master" class="form-label">Select Master</label>
											<select class="form-select select2" name="pro_master_id" id="property_master">
												<option value="">Select Master</option>
												<?php
												foreach ($master as $mas) { ?>

													<option value="<?= $mas['id'] ?>"><?= $mas['name'] ?></option>
												<?php }
												?>
											</select>
										
											<span style="color: red;"><?= form_error('pro_master_id') ?></span>
										</div>

									</div>

								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="property_category" class="form-label">Select Category</label>
											<select class="form-select" name="pro_category_id" id="property_category">
												<option value="">Select Category</option>
												<?php foreach ($category as $cat) { ?>
													<option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
												<?php } ?>
											</select>
											<span style="color: red;"><?= form_error('pro_category_id') ?></span>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="property_subcategory" class="form-label">Select Sub Category</label>
											<select class="form-select" name="pro_subcategory_id" id="property_subcategory">
												<option value="">Select Sub Category</option>
											</select>
											<span style="color: red;"><?= form_error('pro_subcategory_id') ?></span>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="text">
											<a id="fetch_question" class="btn btn-info waves-effect waves-light">Fetch Questions</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12" id="form_genrator">
									
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="form_status" class="form-label">Status</label>
											<select class="form-select" name="status" id="form_status">
												<option selected="">Select Status</option>
												<option value="1" selected>Active</option>
												<option value="0">Inactive</option>
											</select>
											<span style="color: red;"><?= form_error('status') ?></span>
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
							</from>
							
						</div> <!-- end card-body -->
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
		$('#fetch_question').click(function(){		
			var master_id = $('#property_master').val();
			var category_id = $('#property_category').val();
			var subcategory_id = $('#property_subcategory').val();
			if(master_id == ''){
				error_message('','Please Select Master');
			}
			else if(category_id == ''){
				error_message('','Please Select Category');
			}
			else if(subcategory_id == ''){
				error_message('','Please Select Subcategory');
			}
			//alert(master_id + ' '+category_id+' ' + subcategory_id);
			$.ajax({ 
				// type: 'POST',
				url: '<?php echo base_url('admin/Propertymaster/get_questions'); ?>',
				type: 'POST',
				data:{master_id: master_id, category_id: category_id, subcategory_id: subcategory_id},				
				dataType: 'json',
				success: function(data) {
					debugger;
					if(data.success == true){						
						$('#form_genrator').html(data.html);
						Dropzone.discover();
						form_init();
					}
				}
			});
		});
	});
</script>
