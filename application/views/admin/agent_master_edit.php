<!-- contact add -->
<div class="modal fade" id="agent-contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h4 class="modal-title" id="myCenterModalLabel">Add Contacts</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-4">
				<form method="post" id="store-contact" action="<?php echo base_url() . 'admin/Agentmaster/store_contact'; ?>">
					<input type="hidden" name="agent_id" value="<?= $agent->id ?>">
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
									<option value="">Select Position</option>
									<?php foreach ($position as $pos) { ?>
										<option value="<?= $pos['id'] ?>"><?= $pos['name'] ?></option>
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
								<label for="billing-phone" class="form-label">Mobile <span class="text-danger">*</span></label>
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
						<div class="col-lg-12">
							<div class="text-end">
								<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
								<button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="edit-agent-contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h4 class="modal-title" id="myCenterModalLabel">Edit Contacts</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-4">
				<form method="post" id="update-contact" action="<?php echo base_url() . 'admin/Agentmaster/update_contact'; ?>">
					<input type="hidden" name="agent_id" value="<?= $agent->id ?>">
					<input type="hidden" name="contact_id" id="contact_id">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="billing-first-name" class="form-label">First Name</label>
								<input class="form-control" type="text" placeholder="Enter your first name" name="first_name" id="first_name" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="billing-last-name" class="form-label">Last Name</label>
								<input class="form-control" type="text" placeholder="Enter your last name" name="last_name" id="last_name" />
							</div>
						</div>
					</div> <!-- end row -->
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Position</label>
								<select data-toggle="select2" title="Position" class="form-control select2" name="position_id" id="position_id" data-width="100%">
									<option>Select Position</option>
									<?php foreach ($position as $pos) { ?>
										<option value="<?= $pos['id'] ?>"><?= $pos['name'] ?></option>
									<?php }
									?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="company" class="form-label">Company Name</label>
								<input type="text" maxlength="14" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name">
							</div>
						</div>
					</div> <!-- end row -->
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="billing-email-address" class="form-label">Email Address <span class="text-danger"></span></label>
								<input class="form-control" type="email" name="email" placeholder="Enter your email" id="email" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="billing-phone" class="form-label">Mobile <span class="text-danger">*</span></label>
								<input class="form-control" type="text" name="phone" placeholder="(xx) xxx xxxx xxx" id="phone" />
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
						<label for="contact_status" class="form-label">Status</label>
						<select class="form-select" name="status" id="contact_status">
							<option selected="">Select Status</option>
							<option value="1" selected>Active</option>
							<option value="0">Inactive</option>
						</select>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="text-end">
								<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
								<button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>




<!-- Specialistfor add -->
<div class="modal fade" id="agent-specialistfor-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h4 class="modal-title" id="myCenterModalLabel">Add Specialist</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-4">
				<form method="post" id="store-specialistfor" action="<?php echo base_url() . 'admin/Agentmaster/store_specialistfor'; ?>">
					<input type="hidden" name="agent_id" value="<?= $agent->id ?>">
					<div class="row">

						<div class="mb-3">
							<label for="pro_category_id" class="form-label">Select Category</label>
							<select class="form-select" name="pro_category_id" id="pro_category_id">
								<option value="">Select Category</option>
								<?php foreach ($category as $cat) { ?>
									<option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
								<?php } ?>
							</select>
							<span style="color: red;"><?= form_error('pro_category_id') ?></span>

						</div>
					</div>

					<div class="row">

						<div class="mb-3">
							<label for="pro_subcategory_id" class="form-label">Select Sub Category</label>
							<select class="form-select" name="pro_subcategory_id" id="pro_subcategory_id">
								<option value="">Select Sub Category</option>
							</select>
							<span style="color: red;"><?= form_error('pro_subcategory_id') ?></span>

						</div>

					</div>
					<div class="mb-3">
						<label for="city_status" class="form-label">Status</label>
						<select class="form-select" name="status" id="specialistfor_status">
							<option selected="">Select Status</option>
							<option value="1" selected>Active</option>
							<option value="0">Inactive</option>
						</select>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="text-end">
								<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
								<button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="edit-agent-specialistfor-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h4 class="modal-title" id="myCenterModalLabel">Edit Specialist For</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-4">
				<form method="post" id="update-specialistfor" action="<?php echo base_url() . 'admin/Agentmaster/update_specialistfor'; ?>">
					<input type="hidden" name="agent_id" value="<?= $agent->id ?>">
					<input type="hidden" name="specialistfor_id" id="specialistfor_id">
					<div class="row">
						<div class="mb-3">
							<label for="pro_category_id" class="form-label">Select Category</label>
							<select class="form-select" name="pro_category_id" id="pro_category_id">
								<option value="">Select Category</option>
								<?php foreach ($category as $cat) { ?>
									<option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
								<?php } ?>
							</select>
							<span style="color: red;"><?= form_error('pro_category_id') ?></span>

						</div>
					</div>

					<div class="row">

						<div class="mb-3">
							<label for="pro_subcategory_id" class="form-label">Select Sub Category</label>
							<select class="form-select" name="pro_subcategory_id" id="pro_subcategory_id">
								<option value="">Select Sub Category</option>
							</select>
							<span style="color: red;"><?= form_error('pro_subcategory_id') ?></span>

						</div>

					</div>
					<div class="mb-3">
						<label for="contact_status" class="form-label">Status</label>
						<select class="form-select" name="status" id="contact_status">
							<option selected="">Select Status</option>
							<option value="1" selected>Active</option>
							<option value="0">Inactive</option>
						</select>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="text-end">
								<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
								<button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>











<!-- Specialistarea add -->
<div class="modal fade" id="agent-specialistarea-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h4 class="modal-title" id="myCenterModalLabel">Add</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-4">
				<form method="post" id="store-specialistarea" action="<?php echo base_url() . 'admin/Agentmaster/store_specialistarea'; ?>">
					<input type="hidden" name="agent_id" value="<?= $agent->id ?>">
					<div class="row">
						<div class="mb-3">
							<label for="state_id" class="form-label">Select State</label>
							<select class="form-select" name="state_id" id="state_id">
								<option value="">Select State</option>
								<?php foreach ($states as $sta) { ?>
									<option value="<?= $sta['id'] ?>"><?= $sta['name'] ?></option>
								<?php } ?>
							</select>
							<span style="color: red;"><?= form_error('state_id') ?></span>


						</div>
					</div>

					<div class="row">

						<div class="mb-3">
							<label for="city_id" class="form-label">Select City</label>
							<select class="form-select" name="city_id" id="city_id">
								<option value="">Select City</option>
							</select>
							<span style="color: red;"><?= form_error('city_id') ?></span>

						</div>

					</div>
					<div class="row">

						<div class="mb-3">
							<label for="area_id" class="form-label">Select Area</label>
							<select class="form-select" name="area_id" id="area_id">
								<option value="">Select Area</option>
							</select>
							<span style="color: red;"><?= form_error('area_id') ?></span>

						</div>

					</div>
					<div class="mb-3">
						<label for="city_status" class="form-label">Status</label>
						<select class="form-select" name="status" id="specialistarea_status">
							<option selected="">Select Status</option>
							<option value="1" selected>Active</option>
							<option value="0">Inactive</option>
						</select>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="text-end">
								<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
								<button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="edit-agent-specialistarea-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h4 class="modal-title" id="myCenterModalLabel">Edit Specialist For</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-4">
				<form method="post" id="update-specialistarea" action="<?php echo base_url() . 'admin/Agentmaster/update_specialistarea'; ?>">
					<input type="hidden" name="agent_id" value="<?= $agent->id ?>">
					<input type="hidden" name="specialistarea_id" id="specialistarea_id">
					<div class="row">
						<div class="mb-3">
							<label for="state_id" class="form-label">Select State</label>
							<select class="form-select" name="state_id" id="state_id">
								<option value="">Select State</option>
								<?php foreach ($states as $sta) { ?>
									<option value="<?= $sta['id'] ?>"><?= $sta['name'] ?></option>
								<?php } ?>
							</select>
							<span style="color: red;"><?= form_error('state_id') ?></span>


						</div>
					</div>

					<div class="row">

						<div class="mb-3">
							<label for="city_id" class="form-label">Select City</label>
							<select class="form-select" name="city_id" id="city_id">
								<option value="">Select City</option>
							</select>
							<span style="color: red;"><?= form_error('city_id') ?></span>

						</div>

					</div>
					<div class="row">

						<div class="mb-3">
							<label for="area_id" class="form-label">Select Area</label>
							<select class="form-select" name="area_id" id="area_id">
								<option value="">Select Area</option>
							</select>
							<span style="color: red;"><?= form_error('area_id') ?></span>

						</div>

					</div>
					<div class="mb-3">
						<label for="city_status" class="form-label">Status</label>
						<select class="form-select" name="status" id="specialistarea_status">
							<option selected="">Select Status</option>
							<option value="1" selected>Active</option>
							<option value="0">Inactive</option>
						</select>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="text-end">
								<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
								<button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>








<!-- notes add -->
<div class="content-page">
	<div class="modal fade" id="agent-notes-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-light">
					<h4 class="modal-title" id="myCenterModalLabel">Add Notes</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-4">
					<form method="post" id="store-notes" action="<?php echo base_url() . 'admin/Agentmaster/store_note'; ?>">
						<input type="hidden" name="agent_id" value="<?= $agent->id ?>">

						<div class="row">
							<div class="col-12">
								<div class="mb-3">
									<label for="name" class="form-label">Note</label>
									<textarea class="form-control" name="name" id="name"></textarea>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="city_status" class="form-label">Status</label>
							<select class="form-select" name="status" id="city_status">
								<option selected="">Select Status</option>
								<option value="1" selected>Active</option>
								<option value="0">Inactive</option>
							</select>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="text-end">
									<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
									<button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>
	<div class="modal fade" id="edit-agent-notes-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-light">
					<h4 class="modal-title" id="myCenterModalLabel">Edit Notes</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-4">
					<form method="post" id="update-note" action="<?php echo base_url() . 'admin/Agentmaster/update_note'; ?>">
						<input type="hidden" name="agent_id" value="<?= $agent->id ?>">
						<input type="hidden" name="note_id" id="note_id">
						<div class="row">
							<div class="col-12">
								<div class="mb-3">
									<label for="name" class="form-label">Note</label>
									<textarea class="form-control" name="name" id="name"></textarea>
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label for="note_status" class="form-label">Status</label>
							<select class="form-select" name="status" id="note_status">
								<option selected="">Select Status</option>
								<option value="1" selected>Active</option>
								<option value="0">Inactive</option>
							</select>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="text-end">
									<button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
									<button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>
	<div class="content">
		<!-- Start Content-->
		<div class="container-fluid">
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<a type="button" href="<?= base_url('admin/Agentmaster') ?>" class="btn btn-success" style="float:right;">Back</a>
							</ol>

						</div>

						<h4 class="page-title">Channel Partner</h4>
						<div class="row">
							<div class="col-md-4">

								<!-- <p class="mt-2 mb-1 text-muted">Name</p> -->
								<!-- <div class="d-flex align-items-start">
									<i class="mdi mdi-account font-18 text-success me-1"></i>
									<div class="w-100">
										<h5 class="mt-1 font-size-10">
											<?= $agent->first_name . ' ' . $agent->last_name  ?>
										</h5>
									</div>
									<i class="mdi mdi-phone font-18 text-success me-1"></i>
									<div class="w-100">
										<h5 class="mt-1 font-size-10">
										<?= $agent->phone ?></h5>
									</div>
								</div>
								 -->

								<!-- end col -->
							</div>
						</div>
					</div>
				</div>

				<!-- end page title -->

				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-4">
										<!-- start due date -->
										<p class="mt-2 mb-1 text-muted">Name</p>
										<div class="d-flex align-items-start">
											<i class="mdi mdi-account font-18 text-success me-1"></i>
											<div class="w-100">
												<h5 class="mt-1 font-size-14">
													<?= $agent->first_name . ' ' . $agent->last_name . ' ' . (($agent->nick_name == "") ? '' : '(' . $agent->nick_name . ')') ?>

												</h5>
											</div>
										</div>
										<!-- end due date -->
									</div>
									<div class="col-md-4">
										<!-- start due date -->
										<p class="mt-2 mb-1 text-muted">Mobile</p>
										<div class="d-flex align-items-start">
											<i class="mdi mdi-phone font-18 text-success me-1"></i>
											<div class="w-100">
												<h5 class="mt-1 font-size-14">
													<?= $agent->phone ?>
												</h5>
											</div>
										</div>
										<!-- end due date -->
									</div>
									<!-- end col -->

									<div class="col-md-4">
										<!-- start due date -->
										<p class="mt-2 mb-1 text-muted">Email</p>
										<div class="d-flex align-items-start">
											<i class="mdi mdi-gmail font-18 text-success me-1"></i>
											<div class="w-100">
												<h5 class="mt-1 font-size-14">
													<?= $agent->email ?>
												</h5>
											</div>
										</div>
										<!-- end due date -->
									</div>
									<div class="col-md-4">
										<!-- start due date -->
										<p class="mt-2 mb-1 text-muted">Company</p>
										<div class="d-flex align-items-start">
											<i class="mdi mdi-office-building font-18 text-success me-1"></i>
											<div class="w-100">
												<h5 class="mt-1 font-size-14">
													<?= $agent->company_name ?>
												</h5>
											</div>
										</div>
										<!-- end due date -->
									</div>
									<div class="col-md-4">
										<!-- start due date -->
										<p class="mt-2 mb-1 text-muted">Source</p>
										<div class="d-flex align-items-start">
											<i class="mdi mdi-newspaper font-18 text-success me-1"></i>
											<div class="w-100">
												<h5 class="mt-1 font-size-14">
													<?= $source_data->name ?>
												</h5>
											</div>
										</div>
										<!-- end due date -->
									</div>
									<div class="col-md-4">
										<!-- start due date -->
										<p class="mt-2 mb-1 text-muted">Position</p>
										<div class="d-flex align-items-start">
											<i class="mdi mdi-badge-account font-18 text-success me-1"></i>
											<div class="w-100">
												<h5 class="mt-1 font-size-14">
													<?= $position_data->name ?>
												</h5>
											</div>
										</div>
										<!-- end due date -->
									</div>
									<div class="col-md-4">
										<!-- start due date -->
										<p class="mt-2 mb-1 text-muted">Team Name</p>
										<div class="d-flex align-items-start">
											<i class="mdi mdi-account-group font-18 text-success me-1"></i>
											<div class="w-100">
												<h5 class="mt-1 font-size-14">
													<?= ($staff_data != null) ? $staff_data->first_name . ' ' . $staff_data->last_name : ' - ' ?>



												</h5>
											</div>
										</div>
										<!-- end due date -->
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-4">
										<div class="nav nav-pills flex-column navtab-bg nav-pills-tab text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link py-2" id="agent-tab" data-bs-toggle="pill" href="#agent" role="tab" aria-controls="agent" aria-selected="false">
												<i class="mdi mdi-account-circle d-block font-24"></i>
												Channel Partner
											</a>
											<a class="nav-link mt-2 py-2" id="agent-contacts-tab" data-bs-toggle="pill" href="#agent-contacts" role="tab" aria-controls="agent-contacts" aria-selected="false">
												<i class="mdi mdi-contacts d-block font-24"></i>
												Contact</a>
											<a class="nav-link mt-2 py-2" id="agent-notes-tab" data-bs-toggle="pill" href="#agent-notes" role="tab" aria-controls="agent-notes" aria-selected="false">
												<i class="mdi mdi-note d-block font-24"></i>
												Note
											</a>
											<a class="nav-link mt-2 py-2" id="agent-property-tab" data-bs-toggle="pill" href="#agent-property" role="tab" aria-controls="agent-property" aria-selected="false">
												<i class="mdi mdi-office-building d-block font-24"></i>
												Property
											</a>
											<a class="nav-link mt-2 py-2" id="agent-specialist-for-tab" data-bs-toggle="pill" href="#agent-specialist-for" role="tab" aria-controls="agent-specialist-for" aria-selected="false">
												<i class="mdi mdi-office-building d-block font-24"></i>
												Specialist For
											</a>
											<a class="nav-link mt-2 py-2" id="agent-specialist-area-tab" data-bs-toggle="pill" href="#agent-specialist-area" role="tab" aria-controls="agent-specialist-area" aria-selected="false">
												<i class="mdi mdi-office-building d-block font-24"></i>
												Specialist Area
											</a>
										</div>


									</div> <!-- end col-->
									<div class="col-lg-8">
										<div class="tab-content p-3">
											<div class="tab-pane fade" id="agent" role="tabpanel" aria-labelledby="agent-tab">

												<!-- <div class="row">
													<div class="col-md-4">
													
														<div class="d-flex align-items-start">
															<i class="mdi mdi-account font-18 text-success me-1"></i>
															<div class="w-100">
																<h5 class="mt-1 font-size-12">
																	<?= $agent->first_name . ' ' . $agent->last_name ?>
																</h5>
															</div>
														</div>
														
													</div>
													<div class="col-md-4">
													
														<div class="d-flex align-items-start">
															<i class="mdi mdi-phone font-18 text-success me-1"></i>
															<div class="w-100">
																<h5 class="mt-1 font-size-12">
																	<?= $agent->phone ?>
																</h5>
															</div>
														</div>
														
													</div>
													
										    	</div> -->
												<div>
													<h4 class="header-title">Channel Partner Information</h4><br>

													<!-- <p class="sub-header">Fill the form below in order to
                                                                send you the order's invoice.</p> -->
													<form method="post" id="store-promas" action="<?php echo base_url() . 'admin/Agentmaster/update/' . $agent->id; ?>">


														<div class="row">
															<div class="col-md-4">
																<label class="form-label">Inquiry Source<span class="text-danger">*</span></label>
																<select data-toggle="select2" class="form-control select2" name="source_id" data-width="100%">
																	<option value=''>Select Source</option>
																	<?php foreach ($source as $sou) { ?>
																		<option value="<?= $sou['id'] ?>" <?= ($sou['id'] == $agent->source_id) ? 'selected' : '' ?>><?= $sou['name'] ?></option>
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
																			<option value="<?= $sta['id'] ?>" <?= ($sta['id'] == $agent->assigned_id) ? 'selected' : '' ?>><?= $sta['first_name'] ?> <?= $sta['last_name'] ?></option>
																		<?php }
																		?>
																	</select>


																	<!-- <select class="js-example-basic-single" name="assigned_id">
																	<option value="">Nothing Selected</option>
																	<?php foreach ($sourcemaster as $item) { ?>
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
																			<option value="<?= $pos['id'] ?>" <?= ($pos['id'] == $agent->position_id) ? 'selected' : '' ?>><?= $pos['name'] ?></option>
																		<?php }
																		?>
																	</select>
																	<span style="color: red;"><?= form_error('position_id') ?></span>

																</div>
															</div> <!-- end row -->
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="mb-3">
																	<label for="billing-first-name" class="form-label">First Name<span class="text-danger">*</span></label>
																	<input class="form-control" type="text" placeholder="Enter your first name" name="first_name" id="billing-first-name" value="<?= $agent->first_name ?>" />
																</div>
																<span style="color: red;"><?= form_error('first_name') ?></span>

															</div>
															<div class="col-md-4">
																<div class="mb-3">
																	<label for="billing-last-name" class="form-label">Last Name<span class="text-danger">*</span></label>
																	<input class="form-control" type="text" placeholder="Enter your last name" name="last_name" id="billing-last-name" value="<?= $agent->last_name ?>" />
																</div>
																<span style="color: red;"><?= form_error('last_name') ?></span>

															</div>
															<div class="col-md-4">
																<div class="mb-3">
																	<label for="billing-nick-name" class="form-label">Nick Name<span class="text-danger">*</span></label>
																	<input class="form-control" type="text" placeholder="Enter your Nick name" name="nick_name" id="billing-nick-name" value="<?= $agent->nick_name ?>" />
																</div>
																<!-- <span style="color: red;"><?= form_error('nick_name') ?></span> -->

															</div>
														</div> <!-- end row -->
														<div class="row">

															<div class="col-md-6">
																<div class="mb-3">
																	<label for="billing-phone" class="form-label">Mobile <span class="text-danger">*</span></label>
																	<input class="form-control" type="text" name="phone" placeholder="(xx) xxx xxxx xxx" id="billing-phone" value="<?= $agent->phone ?>" />
																</div>
																<span style="color: red;"><?= form_error('phone') ?></span>

															</div>
															<div class="col-md-6">
																<div class="mb-3">
																	<label for="billing-email-address" class="form-label">Email Address <span class="text-danger">*</span></label>
																	<input class="form-control" type="email" name="email" placeholder="Enter your email" id="billing-email-address" value="<?= $agent->email ?>" />
																</div>
																<span style="color: red;"><?= form_error('email') ?></span>

															</div>
														</div> <!-- end row -->
														<div class="row">
															<div class="col-12">
																<div class="mb-3">
																	<label for="company" class="form-label">Company Name</label>
																	<input type="text" maxlength="14" class="form-control" name="company_name" id="company" placeholder="Enter Company Name" value="<?= $agent->company_name ?>">
																</div>
																<!-- <span style="color: red;"><?= form_error('company_name') ?></span> -->

															</div>
														</div> <!-- end row -->


														<div class="row">
															<div class="col-12">
																<div class="mb-3">
																	<label for="description" class="form-label">Description<span class="text-danger">*</span></label>
																	<textarea class="form-control" name="description" id="description"><?= $agent->description ?></textarea>
																</div>
																<span style="color: red;"><?= form_error('description') ?></span>

															</div>
														</div> <!-- end row -->
														<div class="mb-3">
															<label for="city_status" class="form-label">Status</label>
															<select class="form-select" name="status" id="city_status">
																<option selected="">Select Status</option>
																<option value="1" <?= ($agent->status == 1) ? 'selected' : '' ?>>Active</option>
																<option value="0" <?= ($agent->status == 0) ? 'selected' : '' ?>>Inactive</option>
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
											<div class="tab-pane fade" id="agent-contacts" role="tabpanel" aria-labelledby="agent-contacts-tab">
												<div>
													<div class="row justify-content-between mb-2">
														<div class="col-auto">
															<h4 class="header-title">Contact</h4>
														</div>
														<div class="col-sm-6">
															<div class="text-sm-end">
																<button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#agent-contact-modal">Add Contact</button>
															</div>
														</div>
													</div>
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
																		<table class="table table-centered table-nowrap table-striped dt-responsive nowrap" style="width:100%" id="agent_contact_datatable">
																			<thead>
																				<tr>
																					<th>#</th>
																					<th>Name</th>
																					<th>Position</th>
																					<th>Company Name</th>
																					<th>Email</th>
																					<th>Mobile</th>
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
												</div>
											</div>
											<div class="tab-pane fade" id="agent-notes" role="tabpanel" aria-labelledby="agent-notes-tab">
												<div>
													<div class="row justify-content-between mb-2">
														<div class="col-auto">
															<h4 class="header-title">Note</h4>
														</div>
														<div class="col-sm-6">
															<div class="text-sm-end">
																<button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#agent-notes-modal">Add Note</button>
															</div>
														</div>
													</div>
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
																		<table class="table table-centered table-nowrap table-striped dt-responsive nowrap" style="width:100%" id="agent_notes_datatable">
																			<thead>
																				<tr>
																					<th>#</th>
																					<th>Note</th>
																					<th>Crate</th>
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
												</div>
											</div>
											<div class="tab-pane fade" id="agent-property" role="tabpanel" aria-labelledby="agent-property-tab">
												<div>
													<div class="row justify-content-between mb-2">
														<div class="col-auto">
															<h4 class="header-title">Property</h4>
														</div>
														<div class="col-sm-6">
															<div class="text-sm-end">
																<!-- <a href="<?= base_url('admin/Agentmaster/add') ?>" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> Add New</a> -->

																<a href="<?= base_url('admin/Propertymaster/add') ?>?agent_id=<?= $agent->id ?>&page=edit" class="btn btn-danger waves-effect waves-light mb-2">Add Property</a>
															</div>

														</div>
													</div>
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
																		<table class="table table-centered table-nowrap table-striped dt-responsive nowrap" style="width:100%" id="agent_property_datatable">
																			<thead>
																				<tr>
																					<th></th>
																					<th>#</th>
																					<th>Master Name</th>
																					<th>Category</th>
																					<th>Sub Category</th>
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
												</div>
											</div>
											<div class="tab-pane fade" id="agent-specialist-for" role="tabpanel" aria-labelledby="agent-specialist-for-tab">
												<div>
													<div class="row justify-content-between mb-2">
														<div class="col-auto">
															<h4 class="header-title">Specialist For</h4>
														</div>
														<div class="col-sm-6">
															<div class="text-sm-end">
																<button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#agent-specialistfor-modal">Add New</button>
															</div>
														</div>
													</div>
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
																		<table class="table table-centered table-nowrap table-striped dt-responsive nowrap" style="width:100%" id="agent_specialistfor_datatable">
																			<thead>
																				<tr>
																					
																					<th>#</th>
																					<th>Category</th>
																					<th>Sub Category</th>
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
												</div>
											</div>
											<div class="tab-pane fade" id="agent-specialist-area" role="tabpanel" aria-labelledby="agent-specialist-area-tab">
												<div>
													<div class="row justify-content-between mb-2">
														<div class="col-auto">
															<h4 class="header-title">Specialist For</h4>
														</div>
														<div class="col-sm-6">
															<div class="text-sm-end">
																<button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#agent-specialistarea-modal">Add New</button>
															</div>
														</div>
													</div>
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
																		<table class="table table-centered table-nowrap table-striped dt-responsive nowrap" style="width:100%" id="agent_specialistarea_datatable">
																			<thead>
																				<tr>
																					<th>#</th>
																					<th>State</th>
																					<th>City</th>
																					<th>Area</th>
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
			$(function() {
				var hash = window.location.hash;
				hash && $('ul.nav a[href="' + hash + '"]').tab('show');

				var triggerTabList = [].slice.call(document.querySelectorAll('#v-pills-tab a'))
				triggerTabList.forEach(function(triggerEl) {
					var tabTrigger = new bootstrap.Tab(triggerEl)

					triggerEl.addEventListener('click', function(event) {
						event.preventDefault()
						tabTrigger.show()
					})
				});
				var triggerFirstTabEl = document.querySelector('#v-pills-tab a:first-child')
				bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab

				var triggerEl = document.querySelector('#v-pills-tab a[href="' + hash + '"]')
				bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

			});

			//all contact
			var contact_table = $('#agent_contact_datatable').DataTable({
				responsive: true,
				ajax: "<?php echo base_url('admin/Agentmaster/all_contact/' . $agent->id); ?>",
				columnDefs: [{
						responsivePriority: 1,
						targets: 0
					},
					{
						responsivePriority: 2,
						targets: 1
					},
					{
						responsivePriority: 3,
						targets: 6
					},
				
					{
						"targets": 6,
						"createdCell": function(td, cellData, rowData, row, col) {
							if (rowData[6] == '1') {
								$(td).html('<span class="badge bg-soft-success text-success">Active</span>');
							} else if (rowData[6] == '0') {
								$(td).html('<span class="badge bg-soft-danger text-danger">Inactive</span>');
							}
						}
					},
				]
			});
			//add contact 
			$("#store-contact").validate({
				rules: {
					first_name: "required",
					last_name: "required",
					position_id: "required",
					// company_name: "required",
					email: "required",
					phone: "required",
					description: "required",
					status: "required"
				},
				submitHandler: function(form, e) {
					e.preventDefault();
					var url = $(form).attr("action");
					$.ajax({
						url: url,
						type: "POST",
						data: $(form).serialize(),
						dataType: "json",
						success: function(response) {
							$('.btn-close').trigger('click');
							$("#store-contact").trigger("reset");
							success_message('', response.message);
							contact_table.ajax.reload(null, false);
						}
					});
				}
			});
			//edit contact
			$(document).on('click', "#agent_contact_datatable_wrapper .edit-btn", function() {
				var id = $(this).attr('data-id');
				$.ajax({
					url: '<?php echo base_url() ?>admin/Agentmaster/edit_contact/' + id,
					type: "POST",
					dataType: "json",
					success: function(data) {
						$("#edit-agent-contact-modal #contact_id").val(data.id);
						$('#edit-agent-contact-modal #first_name').val(data.first_name);
						$('#edit-agent-contact-modal #last_name').val(data.last_name);
						$('#edit-agent-contact-modal #position_id').val(data.position_id).trigger('change');
						$('#edit-agent-contact-modal #company_name').val(data.company_name);
						$('#edit-agent-contact-modal #email').val(data.email);
						$('#edit-agent-contact-modal #phone').val(data.phone);
						$('#edit-agent-contact-modal #description').val(data.description);
						$("#edit-agent-contact-modal #contact_status").val(data.status);
					}
				});
			});
			//update contact
			$("#update-contact").validate({
				rules: {
					first_name: "required",
					last_name: "required",
					position_id: "required",
					// company_name: "required",
					email: "required",
					phone: "required",
					description: "required",
					status: "required"
				},
				submitHandler: function(form, e) {
					e.preventDefault();
					var url = $(form).attr("action");
					var id = $('#edit-agent-contact-modal #contact_id').val();
					$.ajax({
						url: url + '/' + id,
						type: "POST",
						data: $(form).serialize(),
						dataType: "json",
						success: function(response) {
							$('.btn-close').trigger('click');
							success_message('', response.message);
							contact_table.ajax.reload(null, false);
						}
					});
				}
			});
			//all Notes
			var note_table = $('#agent_notes_datatable').DataTable({
				responsive: true,
				ajax: "<?php echo base_url('admin/Agentmaster/all_note/' . $agent->id); ?>",
				"columnDefs": [{
						responsivePriority: 1,
						targets: 0
					},
					{
						responsivePriority: 2,
						targets: 1
					},
					{
						responsivePriority: 3,
						targets: 3
					},
					{
						responsivePriority: 4,
						targets: 4
					},
					{
						"targets": 3,
						"createdCell": function(td, cellData, rowData, row, col) {
							if (rowData[3] == '1') {
								$(td).html('<span class="badge bg-soft-success text-success">Active</span>');
							} else if (rowData[3] == '0') {
								$(td).html('<span class="badge bg-soft-danger text-danger">Inactive</span>');
							}
						}
					},
				]
			});
			//add Notes 
			$("#store-notes").validate({
				rules: {
					name: "required",

					status: "required"
				},
				submitHandler: function(form, e) {
					e.preventDefault();
					var url = $(form).attr("action");
					$.ajax({
						url: url,
						type: "POST",
						data: $(form).serialize(),
						dataType: "json",
						success: function(response) {
							$('.btn-close').trigger('click');
							$("#store-notes").trigger("reset");
							success_message('', response.message);
							note_table.ajax.reload(null, false);
						}
					});
				}
			});
			//edit Notes
			$(document).on('click', "#agent_notes_datatable_wrapper .edit-btn", function() {
				var id = $(this).attr('data-id');
				$.ajax({
					url: '<?php echo base_url() ?>admin/Agentmaster/edit_note/' + id,
					type: "POST",
					dataType: "json",
					success: function(data) {
						$("#edit-agent-notes-modal #note_id").val(data.id);
						$('#edit-agent-notes-modal #name').val(data.name);
						$("#edit-agent-notes-modal #contact_status").val(data.status);
					}
				});
			});
			//update Notes
			$("#update-note").validate({
				rules: {
					name: "required",
					status: "required"
				},
				submitHandler: function(form, e) {
					e.preventDefault();
					var url = $(form).attr("action");
					var id = $('#edit-agent-notes-modal #note_id').val();
					$.ajax({
						url: url + '/' + id,
						type: "POST",
						data: $(form).serialize(),
						dataType: "json",
						success: function(response) {
							$('.btn-close').trigger('click');
							success_message('', response.message);
							contact_table.ajax.reload(null, false);
						}
					});
				}
			});

			//all specialistfor property
			$(document).on('change','#store-specialistfor #pro_category_id',function() {
				var categoryId = $(this).val();
				if (categoryId != '') {
					$.ajax({
						url: '<?php echo base_url() . "admin/Agentmaster/getSubcategoryByCategory"; ?>',
						type: 'post',
						data: {
							property_category_id: categoryId
						},
						dataType: 'json',
						success: function(response) {
							var len = response.length;
							$("#store-specialistfor #pro_subcategory_id").empty();
							for (var i = 0; i < len; i++) {
								var id = response[i]['id'];
								var name = response[i]['name'];
								$("#store-specialistfor #pro_subcategory_id").append("<option value='" + id + "'>" + name + "</option>");
							}
						}
					});
				} else {
					$("#store-specialistfor #pro_subcategory_id").empty();
				}
			});
			$(document).ready(function() {
				$('#edit-agent-specialistfor-modal #pro_category_id').change(function() {
					var categoryId = $(this).val();
					if (categoryId != '') {
						$.ajax({
							url: '<?php echo base_url() . "admin/Agentmaster/getSubcategoryByCategory"; ?>',
							type: 'post',
							data: {
								property_category_id: categoryId
							},
							dataType: 'json',
							success: function(response) {
								var len = response.length;
								$("#edit-agent-specialistfor-modal #pro_subcategory_id").empty();
								for (var i = 0; i < len; i++) {
									var id = response[i]['id'];
									var name = response[i]['name'];
									$("#edit-agent-specialistfor-modal #pro_subcategory_id").append("<option value='" + id + "'>" + name + "</option>");
								}
							}
						});
					} else {
						$("#edit-agent-specialistfor-modal #pro_subcategory_id").empty();
					}
				});
			});
			//all specialist for
			var specialistfor_table = $('#agent_specialistfor_datatable').DataTable({
				responsive: true,
				ajax: "<?php echo base_url('admin/Agentmaster/all_specialistfor/' . $agent->id); ?>",
				"columnDefs": [{
						responsivePriority: 1,
						targets: 0
					},
					{
						responsivePriority: 2,
						targets: 1
					},
					{
						responsivePriority: 2,
						targets: 2
					},
					{
						responsivePriority: 3,
						targets: 4
					},
					{
						responsivePriority: 4,
						targets: 5
					},
					{
						"targets": 4,
						"createdCell": function(td, cellData, rowData, row, col) {
							if (rowData[4] == '1') {
								$(td).html('<span class="badge bg-soft-success text-success">Active</span>');
							} else if (rowData[4] == '0') {
								$(td).html('<span class="badge bg-soft-danger text-danger">Inactive</span>');
							}
						}
					},
				]
			});
			//add specialist for
			$("#store-specialistfor").validate({
				rules: {
					// first_name: "required",
					// last_name: "required",

					status: "required"
				},
				submitHandler: function(form, e) {
					e.preventDefault();
					var url = $(form).attr("action");
					$.ajax({
						url: url,
						type: "POST",
						data: $(form).serialize(),
						dataType: "json",
						success: function(response) {
							$('.btn-close').trigger('click');
							$("#store-specialistfor").trigger("reset");
							success_message('', response.message);
							specialistfor_table.ajax.reload(null, false);
						}
					});
				}
			});
			$(document).ready(function() {
				//edit specialist for
				$(document).on('click', "#agent_specialistfor_datatable .edit-btn", function() {
					var id = $(this).attr('data-id');
					$.ajax({
						url: '<?php echo base_url() ?>admin/Agentmaster/edit_specialistfor/' + id,
						type: "POST",
						dataType: "json",
						success: function(data) {
							$("#edit-agent-specialistfor-modal #specialistfor_id").val(data.id);
							$('#edit-agent-specialistfor-modal #pro_category_id').val(data.pro_category_id).trigger('change');	
							setTimeout(function () {
								$('#edit-agent-specialistfor-modal #pro_subcategory_id').val(data.pro_subcategory_id);						
							},250);
							$("#edit-agent-specialistfor-modal #specialistfor_status").val(data.status);
						}
					});
				});
			});
			//update specialist for
			$("#update-specialistfor").validate({
				rules: {
					
					status: "required"
				},
				submitHandler: function(form, e) {
					e.preventDefault();
					var url = $(form).attr("action");
					var id = $('#edit-agent-specialistfor-modal #specialistfor_id').val();
					$.ajax({
						url: url + '/' + id,
						type: "POST",
						data: $(form).serialize(),
						dataType: "json",
						success: function(response) {
							$('.btn-close').trigger('click');
							success_message('', response.message);
							specialistfor_table.ajax.reload(null, false);
						}
					});
				}
			});

			//all specialist Area
			//on state change fetch city
			$(document).on('change','#agent-specialistarea-modal #state_id',function() {
				var state_id = $(this).val();
				if (state_id != '') {
					$.ajax({
						url: '<?php echo base_url() . "admin/Agentmaster/getCityByState"; ?>',
						type: 'post',
						data: {
							state_id: state_id
						},
						dataType: 'json',
						success: function(response) {
							var len = response.length;
							$("#store-specialistarea #city_id").empty();
							$("#store-specialistarea #city_id").append("<option value=''>Select City</option>");
							for (var i = 0; i < len; i++) {
								var id = response[i]['id'];
								var name = response[i]['name'];
								$("#store-specialistarea #city_id").append("<option value='" + id + "'>" + name + "</option>");
							}
						}
					});
				} else {
					$("#store-specialistarea #city_id").empty();
				}
			});
			$(document).ready(function() {
				$('#edit-agent-specialistarea-modal #state_id').change(function() {
					debugger;
					var state_id = $(this).val();
					if (state_id != '') {
						$.ajax({
							url: '<?php echo base_url() . "admin/Agentmaster/getCityByState"; ?>',
							type: 'post',
							data: {
								state_id: state_id
							},
							dataType: 'json',
							success: function(response) {
								var len = response.length;
								$("#edit-agent-specialistarea-modal #city_id").empty();
								$("#store-specialistarea #city_id").append("<option value=''>Select City</option>");
								for (var i = 0; i < len; i++) {
									var id = response[i]['id'];
									var name = response[i]['name'];
									$("#edit-agent-specialistarea-modal #city_id").append("<option value='" + id + "'>" + name + "</option>");
								}
							}
						});
					} else {
						$("#edit-agent-specialistarea-modal #city_id").empty();
					}
				});
			});
			//on city change fetch area
			$(document).on('change','#agent-specialistarea-modal #city_id',function() {
				var city_id = $(this).val();
				if (city_id != '') {
					$.ajax({
						url: '<?php echo base_url() . "admin/Agentmaster/getAreaByCity"; ?>',
						type: 'post',
						data: {
							city_id: city_id
						},
						dataType: 'json',
						success: function(response) {
							var len = response.length;
							$("#store-specialistarea #area_id").empty();
							$("#store-specialistarea #area_id").append("<option value=''>Select Area</option>");
							for (var i = 0; i < len; i++) {
								var id = response[i]['id'];
								var name = response[i]['name'];
								$("#store-specialistarea #area_id").append("<option value='" + id + "'>" + name + "</option>");
							}
						}
					});
				} else {
					$("#store-specialistarea #area_id").empty();
				}
			});
			$(document).ready(function() {
				$('#edit-agent-specialistarea-modal #city_id').change(function() {
					debugger;
					var city_id = $(this).val();
					if (city_id != '') {
						$.ajax({
							url: '<?php echo base_url() . "admin/Agentmaster/getAreaByCity"; ?>',
							type: 'post',
							data: {
								city_id: city_id
							},
							dataType: 'json',
							success: function(response) {
								var len = response.length;
								$("#edit-agent-specialistarea-modal #area_id").empty();
								$("#edit-agent-specialistarea-modal #area_id").append("<option value=''>Select Area</option>");
								for (var i = 0; i < len; i++) {
									var id = response[i]['id'];
									var name = response[i]['name'];
									$("#edit-agent-specialistarea-modal #area_id").append("<option value='" + id + "'>" + name + "</option>");
								}
							}
						});
					} else {
						$("#edit-agent-specialistarea-modal #area_id").empty();
					}
				});
			});
			var specialistarea_table = $('#agent_specialistarea_datatable').DataTable({
				responsive: true,
				ajax: "<?php echo base_url('admin/Agentmaster/all_specialistarea/' . $agent->id); ?>",
				"columnDefs": [{
						responsivePriority: 1,
						targets: 0
					},
					{
						responsivePriority: 2,
						targets: 1
					},
					{
						responsivePriority: 3,
						targets: 2
					},
					{
						responsivePriority: 3,
						targets: 3
					},
					{
						responsivePriority: 2,
						targets: 5
					},
					{
						responsivePriority: 2,
						targets: 6
					},
					{
						"targets": 5,
						"createdCell": function(td, cellData, rowData, row, col) {
							if (rowData[5] == '1') {
								$(td).html('<span class="badge bg-soft-success text-success">Active</span>');
							} else if (rowData[5] == '0') {
								$(td).html('<span class="badge bg-soft-danger text-danger">Inactive</span>');
							}
						}
					},
				]
			});
			//add specialist Area
			$("#store-specialistarea").validate({
				rules: {
					// first_name: "required",
					// last_name: "required",

					status: "required"
				},
				submitHandler: function(form, e) {
					e.preventDefault();
					var url = $(form).attr("action");
					$.ajax({
						url: url,
						type: "POST",
						data: $(form).serialize(),
						dataType: "json",
						success: function(response) {
							$('.btn-close').trigger('click');
							$("#store-specialistarea").trigger("reset");
							success_message('', response.message);
							specialistarea_table.ajax.reload(null, false);
						}
					});
				}
			});
			$(document).ready(function() {
				//edit specialist Area
				$(document).on('click', "#agent_specialistarea_datatable .edit-btn", function() {
					var id = $(this).attr('data-id');
					$.ajax({
						url: '<?php echo base_url() ?>admin/Agentmaster/edit_specialistarea/' + id,
						type: "POST",
						dataType: "json",
						success: function(data) {
							$("#edit-agent-specialistarea-modal #specialistarea_id").val(data.id);
							$('#edit-agent-specialistarea-modal #state_id').val(data.state_id).trigger('change');
							setTimeout(function () {
								$('#edit-agent-specialistarea-modal #city_id').val(data.city_id).trigger('change');		
								setTimeout(function () {
									$('#edit-agent-specialistarea-modal #area_id').val(data.area_id).trigger('change');		
								},250);	
							},250);										
							$("#edit-agent-specialistarea-modal #specialistarea_status").val(data.status);
						}
					});
				});
			});
			//update specialist Area
			$("#update-specialistarea").validate({
				rules: {
					
					status: "required"
				},
				submitHandler: function(form, e) {
					e.preventDefault();
					var url = $(form).attr("action");
					var id = $('#edit-agent-specialistarea-modal #specialistarea_id').val();
					$.ajax({
						url: url + '/' + id,
						type: "POST",
						data: $(form).serialize(),
						dataType: "json",
						success: function(response) {
							$('.btn-close').trigger('click');
							success_message('', response.message);
							specialistarea_table.ajax.reload(null, false);
						}
					});
				}
			});



			//all property
			var property_table = $('#agent_property_datatable').DataTable({
				responsive: true,
				ajax: "<?php echo base_url('admin/Agentmaster/all_property/' . $agent->id . '/edit'); ?>",
				columnDefs: [{
						target: 0,
						visible: false,
					},
					{
						responsivePriority: 1,
						targets: 1
					},
					{
						responsivePriority: 2,
						targets: 2
					},
					{
						responsivePriority: 3,
						targets: 6
					},
					{
						responsivePriority: 4,
						targets: 7
					},
					{
						"targets": 6,
						"createdCell": function(td, cellData, rowData, row, col) {
							$(td).html('<div class="form-check form-switch"><input class="form-check-input property_status" data-proid="' + rowData[0] + '" name="property_status" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault" ' + ((rowData[6] == '1') ? "checked" : "") + ' ></div>');
						}



					},
				]
			});
			$(document).ready(function() {
				$("#agent-contacts-tab").on('click', function() {
					contact_table.ajax.reload(null, false);
				});
				$("#agent-notes-tab").on('click', function() {
					note_table.ajax.reload(null, false);
				});
				$("#agent-property-tab").on('click', function() {
					property_table.ajax.reload(null, false);
				});
				$("#agent-specialist-for-tab").on('click', function() {
					specialistfor_table.ajax.reload(null, false);
				});
				$("#agent-specialist-area-tab").on('click', function() {
					specialistarea_table.ajax.reload(null, false);
				});

				var hash = window.location.hash;
				$(hash + "-tab").trigger('click');
			});

			$('input[name=inquiry_type]').click(function() {
				if (this.id == "agent") {
					$("#agent_div").show('slow');
				} else {
					$("#agent_div").hide('slow');
				}

			});
			$('input[name=inquiry_type]').trigger('click');

			//on switch change status
			$(document).on('change', '.property_status', function() {
				var id = $(this).attr('data-proid');
				var url = '<?php echo base_url() ?>admin/Propertymaster/update_status';
				var status = ($(this).prop('checked')) ? 1 : 0;

				$.ajax({
					url: url + '/' + id + '/' + status,
					type: "POST",
					dataType: "json",
					success: function(response) {
						$('.btn-close').trigger('click');
						success_message('', response.message);
						contact_table.ajax.reload(null, false);
					}
				});
			});
		</script>
