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
								<a type="button" href="<?= base_url('admin/Customermaster') ?>" class="btn btn-success" style="float:right;">Back</a>
							</ol>
						</div>
						<h4 class="page-title">Customer Master</h4>
					</div>
				</div>
			</div>

			<!-- end page title -->

			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-4">
									<div class="nav nav-pills flex-column navtab-bg nav-pills-tab text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										<a class="nav-link py-2" id="customer-tab" data-bs-toggle="pill" href="#customer" role="tab" aria-controls="customer" aria-selected="false">
											<i class="mdi mdi-account-circle d-block font-24"></i>
											Customer Master
										</a>
										<a class="nav-link mt-2 py-2" id="customer-contacts-tab" data-bs-toggle="pill" href="#customer-contacts" role="tab" aria-controls="customer-contacts" aria-selected="false">
											<i class="mdi mdi-contacts d-block font-24"></i>
											Contact</a>
										<a class="nav-link mt-2 py-2" id="customer-notes-tab" data-bs-toggle="pill" href="#customer-notes" role="tab" aria-controls="customer-notes" aria-selected="false">
											<i class="mdi mdi-note d-block font-24"></i>
											Note</a>
									</div>


								</div> <!-- end col-->
								<div class="col-lg-8">
									<div class="tab-content p-3">
										<div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
											<div>
												<h4 class="header-title">Customer Information</h4>

												<!-- <p class="sub-header">Fill the form below in order to
                                                                send you the order's invoice.</p> -->
												<form method="post" id="store-promas" action="<?php echo base_url() . 'admin/Customermaster/update/'.$customer->id; ?>">

													<div class="row">
														<div class="col-md-4">
															<label class="form-label">Source<span class="text-danger">*</span></label>
															<select data-toggle="select2" class="form-control select2" name="source_id" data-width="100%">
															<option value=''>Select Source</option>
																<?php foreach ($source as $sou) { ?>
																		<option value="<?= $sou['id'] ?>" <?= ($sou['id'] == $customer->source_id)?'selected':'' ?>><?= $sou['name'] ?></option>
																<?php } ?>
															</select>
															<span style="color: red;"><?= form_error('source_id') ?></span>

														</div>
														<div class="col-md-4">
															<div class="mb-3">
																<label class="form-label">Assigned<span class="text-danger">*</span></label>
																<select data-toggle="select2" title="Assigned" class="form-control select2" name="assigned_id" data-width="100%">
																	<option value=''>Select Assigned</option>
																	<?php foreach ($staff as $sta) { ?>
																		<option value="<?= $sta['id'] ?>" <?= ($sta['id'] == $customer->assigned_id)?'selected':'' ?>><?= $sta['first_name'] ?>  <?= $sta['last_name'] ?></option>
																	<?php }
																	?>
																</select>
																
																
																<!-- <select class="js-example-basic-single" name="assigned_id">
																	<option value="">Nothing Selected</option>
																	<?php foreach ($sourcemaster as $item){?>
																		<option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
																	<?php }
																	?>
								
																</select> -->
																<span style="color: red;"><?= form_error('assigned_id') ?></span>

															</div>
														</div>
														<div class="col-md-4">
															<div class="mb-3">
																<label class="form-label">Position<span class="text-danger">*</span></label>
																<select data-toggle="select2" title="Position" class="form-control select2" name="position_id" data-width="100%">
																<option value=''>Select Position</option>
																	<?php foreach ($position as $pos) { ?>
																		<option value="<?= $pos['id'] ?>" <?= ($pos['id'] == $customer->position_id)?'selected':'' ?>><?= $pos['name'] ?></option>
																	<?php }
																	?>
																</select>
																<span style="color: red;"><?= form_error('position_id') ?></span>

															</div>
														</div> <!-- end row -->
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="mb-3">
																<label for="billing-first-name" class="form-label">First Name<span class="text-danger">*</span></label>
																<input class="form-control" type="text" placeholder="Enter your first name" name="first_name" id="billing-first-name" value="<?= $customer->first_name ?>" />
															</div>
															<span style="color: red;"><?= form_error('first_name') ?></span>

														</div>
														<div class="col-md-6">
															<div class="mb-3">
																<label for="billing-last-name" class="form-label">Last Name<span class="text-danger">*</span></label>
																<input class="form-control" type="text" placeholder="Enter your last name" name="last_name" id="billing-last-name" value="<?= $customer->last_name ?>" />
															</div>
															<span style="color: red;"><?= form_error('last_name') ?></span>

														</div>
													</div> <!-- end row -->
													<div class="row">

														<div class="col-md-6">
															<div class="mb-3">
																<label for="billing-phone" class="form-label">Phone <span class="text-danger">*</span></label>
																<input class="form-control" type="text" name="phone" placeholder="(xx) xxx xxxx xxx" id="billing-phone" value="<?= $customer->phone ?>" />
															</div>
															<span style="color: red;"><?= form_error('phone') ?></span>

														</div>
														<div class="col-md-6">
															<div class="mb-3">
																<label for="billing-email-address" class="form-label">Email Address <span class="text-danger">*</span></label>
																<input class="form-control" type="email" name="email" placeholder="Enter your email" id="billing-email-address" value="<?= $customer->email ?>" />
															</div>
															<span style="color: red;"><?= form_error('email') ?></span>

														</div>
													</div> <!-- end row -->
													<div class="row">
														<div class="col-12">
															<div class="mb-3">
																<label for="company" class="form-label">Company Name</label>
																<input type="text" maxlength="14" class="form-control" name="company_name" id="company" placeholder="Enter Company Name" value="<?= $customer->company_name ?>">
															</div>
															<!-- <span style="color: red;"><?= form_error('company_name') ?></span> -->

														</div>
													</div> <!-- end row -->


													<div class="row">
														<div class="col-12">
															<div class="mb-3">
																<label for="description" class="form-label">Description<span class="text-danger">*</span></label>
																<textarea class="form-control" name="description" id="description"><?= $customer->description ?></textarea>
															</div>
															<span style="color: red;"><?= form_error('description') ?></span>

														</div>
													</div> <!-- end row -->
													<div class="mb-3">
														<label for="city_status" class="form-label">Status</label>
														<select class="form-select" name="status" id="city_status">
															<option selected="">Select Status</option>
															<option value="1" <?= ($customer->status == 1)?'selected':'' ?>>Active</option>
															<option value="0" <?= ($customer->status == 0)?'selected':'' ?>>Inactive</option>
														</select>
														<span style="color: red;"><?= form_error('status') ?></span>

													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="text">
																<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
										<div class="tab-pane fade" id="customer-contacts" role="tabpanel" aria-labelledby="customer-contacts-tab">
											<div>
												<h4 class="header-title">Contact</h4>

												<!-- <p class="sub-header">Fill the form below in order to
													send you the order's invoice.</p> -->

												<form method="post" id="store-promas" action="<?php echo base_url() . 'admin/Customermaster/store_contact'; ?>">
													<input type="hidden" name="customer_id" value="<?= $customer->id ?>">
													<div class="row">
														<div class="col-md-6">
															<div class="mb-3">
																<label for="billing-first-name" class="form-label">First Name</label>
																<input class="form-control" type="text" placeholder="Enter your first name" name="first_name" id="billing-first-name" />
															</div>
														</div>
														<div class="col-md-6">
															<div class="mb-3">
																<label for="billing-last-name" class="form-label">Last Name</label>
																<input class="form-control" type="text" placeholder="Enter your last name" name="last_name" id="billing-last-name" />
															</div>
														</div>
													</div> <!-- end row -->
													<div class="row">
														<div class="col-md-6">
															<div class="mb-3">
																<label class="form-label">Position</label>
																<select data-toggle="select2" title="Position" class="form-control select2" name="position_id" data-width="100%">
																	<option>Select Position</option>
																	<?php foreach ($position as $pos) { ?>
																		<option value="<?= $pos['id'] ?>" <?= ($pos['id'] == $customer->position_id)?'selected':'' ?>><?= $pos['name'] ?></option>
																	<?php }
																	?>
																</select>
															</div>
														</div>
														<div class="col-md-6">
															<div class="mb-3">
																<label for="company" class="form-label">Company Name</label>
																<input type="text" maxlength="14" class="form-control" name="company_name" id="company" placeholder="Enter Company Name">
															</div>
														</div>
													</div> <!-- end row -->
													<div class="row">
														<div class="col-md-6">
															<div class="mb-3">
																<label for="billing-email-address" class="form-label">Email Address <span class="text-danger"></span></label>
																<input class="form-control" type="email" name="email" placeholder="Enter your email" id="billing-email-address" />
															</div>
														</div>
														<div class="col-md-6">
															<div class="mb-3">
																<label for="billing-phone" class="form-label">Phone <span class="text-danger">*</span></label>
																<input class="form-control" type="text" name="phone" placeholder="(xx) xxx xxxx xxx" id="billing-phone" />
															</div>
														</div>
													</div> <!-- end row -->



													<div class="row">
														<div class="col-12">
															<div class="mb-3">
																<label for="description" class="form-label">Description</label>
																<textarea class="form-control" name="description" id="description"></textarea>
															</div>
														</div>
													</div> <!-- end row -->
													<div class="mb-3">
														<label for="city_status" class="form-label">Status</label>
														<select class="form-select" name="status" id="city_status">
															<option selected="">Select Status</option>
															<option value="1" selected>Active</option>
															<option value="0">Inactive</option>
														</select>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="text">
																<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
															</div>
														</div>
													</div>
												</form>
												<!-- end row-->
												<div class="row my-4">
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

																<div class="table-responsive">
																	<table class="table table-centered table-nowrap table-striped" id="conact_formmaster_datatable">
																		<thead>
																			<tr>
																				<th>#</th>
																				<th>Name</th>
																				<th>Position</th>
																				<th>Company Name</th>
																				<th>Email</th>
																				<th>Phone</th>
																				<th>Status</th>
																				<th style="width: 85px;">Action</th>
																			</tr>
																		</thead>	
																		<tbody>
																			<?php $i=0; foreach($contacts as $contact){ $i++; ?>
																			<tr>
																				<td><?= $i ?></td>
																				<td><?= $contact['first_name'].' '.$contact['last_name'] ?></td>
																				<td><?= $contact['position_id'] ?></td>
																				<td><?= $contact['company_name'] ?></td>
																				<td><?= $contact['email'] ?></td>
																				<td><?= $contact['phone'] ?></td>
																				<td><?= $contact['status'] ?></td>
																				<td>
																					<a href="<?= base_url('admin/customermaster/edit_contact/' .$contact['id']); ?>" class="action-icon edit-btn"><i class="mdi mdi-square-edit-outline"></i></a>
																					<a href="<?= base_url('admin/customermaster/delete_contact/' .$contact['id']); ?>" class="action-icon delete-btn"> <i class="mdi mdi-delete"></i></a>
																				</td>
																			</tr>
																			<?php } ?>
																		</tbody>						
																	</table>
																</div>
															</div> <!-- end card-body-->
														</div> <!-- end card-->
													</div> <!-- end col -->
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="customer-notes" role="tabpanel" aria-labelledby="customer-notes-tab">
											<div>
											<h4 class="header-title">Note</h4>

											<form method="post" id="store-promas" action="<?php echo base_url() . 'admin/Customermaster/store'; ?>">

												<div class="row">


													<div class="row">
														<div class="col-12">
															<div class="mb-3">
																<label for="description" class="form-label">Description</label>
																<textarea class="form-control" name="description" id="description"></textarea>
															</div>
														</div>
													</div> <!-- end row -->
													<div class="mb-3">
														<label for="city_status" class="form-label">Status</label>
														<select class="form-select" name="status" id="city_status">
															<option selected="">Select Status</option>
															<option value="1" selected>Active</option>
															<option value="0">Inactive</option>
														</select>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="text">
																<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
															</div>
														</div>
													</div>
											</form>
												<div class="content-page">
													<div class="container-fluid">
														<!-- start page title -->
														<div class="row">
															<div class="col-12">
																<div class="page-title-box">
																	<div class="page-title-right">
																		<ol class="breadcrumb m-0">
																			<a href="<?= base_url('admin/Customermaster/add') ?>" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> Add New</a>
																		</ol>
																	</div>
																	<h4 class="page-title">Note Master</h4>
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

																		<div class="table-responsive">
																			<table class="table table-centered table-nowrap table-striped" id="formmaster_datatable">
																				<thead>
																					<tr>
																						<th>#</th>
																						<th>Name</th>
																						<th>Category</th>
																						<th>Phone</th>
																						<th>Company</th>
																						<th>Email</th>
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
													

												</div>
											</div>
										</div>
									</div> <!-- end col-->
								</div> <!-- end row-->

							</div>
						</div>
					</div>
				</div>
				<!-- end row -->

			</div> <!-- container -->
		</div> <!-- content -->
	</div>
<script>
	$(document).ready(function() {
		$('.js-example-basic-single').select2({
			theme: "bootstrap"
		});
	});
	$(function(){
		var hash = window.location.hash;
		hash && $('ul.nav a[href="' + hash + '"]').tab('show');
		
		var triggerTabList = [].slice.call(document.querySelectorAll('#v-pills-tab a'))
			triggerTabList.forEach(function (triggerEl) {
			var tabTrigger = new bootstrap.Tab(triggerEl)

			triggerEl.addEventListener('click', function (event) {
				event.preventDefault()
				tabTrigger.show()
			})
		});
		var triggerFirstTabEl = document.querySelector('#v-pills-tab a:first-child')
		bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab

		var triggerEl = document.querySelector('#v-pills-tab a[href="'+hash+'"]')
		bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
	});
</script>
