		<!-- Start Page Content here -->
		<!-- ============================================================== -->
		<!--Add Modal -->
		<div class="modal fade" id="question-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header bg-light">
						<h4 class="modal-title" id="myCenterModalLabel">Add New </h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
					</div>
					<div class="modal-body p-4">
						<form method="post" id="store-question" action="<?php echo base_url() . 'admin/questionmaster/store'; ?>">
							<div class="mb-3">
								<label for="question" class="form-label">Question</label>
								<textarea type="text" class="form-control" name="question" id="question" placeholder="Enter question"></textarea>
								<!-- <?= form_error('name')  ?> -->
							</div>
							<div class="mb-3">
								<label for="question_answer" class="form-label">Q&A Input type</label>
								<select class="form-select" name="question_answer_inputtype" id="question_answer">
									<option selected="">Select Q&A Input type</option>
									<option value="Textbox">Textbox</option>
									<option value="Dropdown">Dropdown</option>
									<option value="Checkbox">Checkbox</option>
									<option value="Radio">Radio</option>
									<option value="Date">Date</option>
									<option value="Textarea">Textarea</option>
									<option value="File">File</option>
									<option value="Number">Number</option>
								</select>
							</div>

							<div class="mb-3">
								<label for="source_type" class="form-label">Source Type</label>
								<select class="form-select" name="source_id" id="source_type">
									<option selected="">Select Source</option>
									<?php
									foreach ($sourcecategory as $soucat) { ?>
										<option value="<?= $soucat['id'] ?>"><?= $soucat['name'] ?></option>
									<?php }
									?>
								</select>
							</div>
							<div class="mb-3">
								<label for="question_status" class="form-label">Status</label>
								<select class="form-select" name="status" id="question_status">
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
		<div class="modal fade" id="questionedit-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header bg-light">
						<h4 class="modal-title" id="myCenterModalLabel2">Edit Question</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
					</div>
					<div class="modal-body p-4">
						<form method="post" id="update_question" action="#">
							<input type="hidden" name="id" id="edit_question_id" />


							<div class="mb-3">
								<label for="question" class="form-label">Question</label>
								<textarea type="text" class="form-control" name="question" id="question" placeholder="Enter  question"></textarea>

								<!-- <?= form_error('name')  ?> -->
							</div>

							<div class="mb-3">
								<label for="question_answer" class="form-label">Q&A Input type</label>
								<select class="form-select" name="question_answer_inputtype" id="question_answer">
									<option>Select Q&A Input type</option>
									<option value="Textbox">Textbox</option>
									<option value="Dropdown">Dropdown</option>
									<option value="Checkbox">Checkbox</option>
									<option value="Radio">Radio</option>
									<option value="Date">Date</option>
									<option value="Textarea">Textarea</option>
									<option value="File">File</option>
									<option value="Number">Number</option>
								</select>
							</div>

							<div class="mb-3">
								<label for="source_type" class="form-label">Source Type</label>
								<select class="form-select" name="source_id" id="source_type">
								<option>Select Source</option>
									<?php
									foreach ($sourcecategory as $soucat) { ?>
										<option value="<?= $soucat['id'] ?>"><?= $soucat['name'] ?></option>
									<?php }
									?>
								</select>
							</div>

							<div class="mb-3">
								<label for="question_status" class="form-label">Status</label>
								<select class="form-select" name="status" id="question_status">
									<option>Select Status</option>
									<option value="1" selected>Active</option>
									<option value="0">Inactive</option>
								</select>
							</div>
							<div class="text-end">
								<button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
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
										<button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#question-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>

									</ol>
								</div>
								<h4 class="page-title">Question Master</h4>
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
										<button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#propertysubcategory-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>
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
										<table class="table table-centered table-nowrap table-striped" id="question_datatable">
											<thead>
												<tr>

													<th>#</th>
													<th>Question</th>
													<th>Q&A Input type</th>
													<th>Source type</th>
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
			var table = $('#question_datatable').DataTable({
				responsive: true,
				ajax: "<?php echo base_url('admin/Questionmaster/all'); ?>",
				"columnDefs": [{
					"targets": 5,
					"createdCell": function(td, cellData, rowData, row, col) {
						if (rowData[5] == '1') {

							$(td).html('<span class="badge bg-soft-success text-success">Active</span>');
						} else if (rowData[5] == '0') {
							$(td).html('<span class="badge bg-soft-danger text-danger">Inactive</span>');
						}
					}
				}, ]
			});

			$(document).on('click', ".edit-btn", function() {
				var id = $(this).attr('data-id');
				$.ajax({
					url: '<?php echo base_url() ?>admin/Questionmaster/edit/' + id,
					type: "POST",
					dataType: "json",
					success: function(data) {
						$("#questionedit-modal #edit_question_id").val(data.id);
						$('#questionedit-modal #question').val(data.question);
						$('#questionedit-modal #question_answer').val(data.question_answer_inputtype);
						$("#questionedit-modal #question_status").val(data.status);

						// Show/hide the Source Type dropdown based on the selected Q&A Input Type
						$('#questionedit-modal #question_answer').trigger('change');
						
						$('#questionedit-modal #source_type').val(data.source_id);

					}
				});
			});
			$("#update_question").submit(function(o) {
				o.preventDefault();
				var id = $('#edit_question_id').val();
				$.ajax({
					url: '<?php echo base_url() ?>admin/Questionmaster/update/' + id,
					type: "POST",
					data: $(this).serialize(),
					dataType: "json",
					success: function(response) {
						$('#questionedit-modal').modal('hide');
						success_message('', response.message);
						table.ajax.reload(null, false);
					}
				});
			});
			// $.validator.addMethod('requiredselect', function(value,ele,pram){
			// 	return value !='';
			// },'Please Select Property');

			$('#store-question').validate({
				rules: {
					question: "required",
					question_answer_inputtype: "required",
					status: "required"
				},
				message: {
					question: "Please Enter Question"
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
			$(document).ready(function() {
				// Hide the Source Type dropdown by default
				$('#question-modal #source_type').parent().hide();
				// Show/hide the Source Type dropdown based on the selected Q&A Input Type
				$('#question-modal #question_answer').on('change', function() {
					var selectedValue = $(this).val();
					if (selectedValue === 'Dropdown' || selectedValue === 'Checkbox' || selectedValue === 'Radio') {
						$('#question-modal #source_type').parent().show();
					} else {
						$('#question-modal #source_type').parent().hide();
					}
				});

				// Hide the Source Type dropdown by default
				$('#questionedit-modal #source_type').parent().hide();
				// Show/hide the Source Type dropdown based on the selected Q&A Input Type
				$('#questionedit-modal #question_answer').on('change', function() {
					var selectedValue = $(this).val();
					if (selectedValue === 'Dropdown' || selectedValue === 'Checkbox' || selectedValue === 'Radio') {
						$('#questionedit-modal #source_type').parent().show();
					} else {
						$('#questionedit-modal #source_type').parent().hide();
					}
				});
			});
		</script>
