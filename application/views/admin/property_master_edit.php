			<!-- ============================================================== -->
			<!-- Start Page Content here -->
			<!-- ============================================================== -->



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

										<form method="post" action="<?php echo base_url('admin/Propertymaster/update/' . $property->id); ?>">

											<input type="hidden" name="id" id="edit_propertymaster_id" />
											<div class="row">
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="masters" class="form-label">Select Master</label>
														<select class="form-select" name="pro_master_id" id="masters">
															<option value="">Select Master</option>
															<?php foreach ($master as $mas) : ?>

																<option value="<?php echo $mas['id']; ?>" <?= ($property->pro_master_id == $mas['id']) ? 'selected' : '' ?>><?php echo $mas['name']; ?></option>
															<?php endforeach; ?>
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
															<?php foreach ($category as $cat) : ?>

																<option value="<?php echo $cat['id']; ?>" <?= ($property->pro_category_id == $cat['id']) ? 'selected' : '' ?>><?php echo $cat['name']; ?></option>
															<?php endforeach; ?>
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
															<?php foreach ($subcategory as $scat) : ?>

																<option value="<?php echo $scat['id']; ?>" <?= ($property->pro_subcategory_id == $scat['id']) ? 'selected' : '' ?>><?php echo $scat['name']; ?></option>
															<?php endforeach; ?>


														</select>
														<span style="color: red;"><?= form_error('pro_subcategory_id') ?></span>
													</div>

												</div>

											</div>

											<div class="row">
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="form_status" class="form-label">Status</label>
														<select class="form-select" name="status" id="form_status">
															<option selected="">Select Status</option>
															<option value="1" <?= ($property->status == 1) ? 'selected' : '' ?>>Active</option>
															<option value="0" <?= ($property->status == 0) ? 'selected' : '' ?>>Inactive</option>
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
										</form>
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
				});


		

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
			</script>

