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
													<div class="text">
														<a id="fetch_question" class="btn btn-info waves-effect waves-light">Fetch Questions</a>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12" id="form_genrator">
													<div class="card">
														<div class="card-body">
															<div id="progressbarwizard">																
															<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
																<?php
																	$i=0;
																	foreach($phases as $phase){
																	echo '<li class="nav-item">
																			<a href="#tab-'.$phase['id'].'" data-bs-toggle="tab" data-toggle="tab" class="nav-link '.(($i==0)?'active':'').' rounded-0 pt-2 pb-2">
																				<span class="d-none d-sm-inline">'.$phase['name'].'</span>
																			</a>
																			</li>';
																	$i++;
																	}
																?>
															</ul>
															<div class="tab-content b-0 mb-0 pt-0">
																<div id="bar" class="progress mb-3" style="height: 7px;">
																	<div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
																	</div>
																	<?php
																		$i=0;
																		foreach($phases as $phase){
																			$data['questions'] = $this->promast->fetchQuestions($property->id,$phase['id']); ?>
																			<div class="tab-pane <?= (($i==0)?'active':'') ?>" id="tab-<?= $phase['id']?>">
																				<input type="hidden" name="phase_ids[]" value="<?= $phase['id']?>">
																				<div class="row">
																					<div class="col-12">
																						<?php
																						if(!empty($data['questions'])){
																							foreach($data['questions'] as $que){
																								$answers=json_decode($que['answers'],true);
																								$answer_ids=json_decode($que['answer_ids'],true);
																								$que['question_answer_inputtype']=$answers['answer_type'];
																								?>
																								<div class="row mb-3">
																									<label class="col-md-3 col-form-label" for="userName1"><?= $que['question']?></label>
																									<input type="hidden" name="question_<?= $phase['id']?>[]" value="<?= $que['question']?>">
																									<input type="hidden" name="question_id_<?= $phase['id']?>[]" value="<?= $que['question_id']?>">
																									<input type="hidden" name="answer_type_<?= $phase['id']?>_<?= $que['question_id']?>" value="<?= $que['question_answer_inputtype'] ?>">
																									<div class="col-md-9">
																										<?php
																										//'print_r($answers['options']);
																										foreach($answers['options'] as $option){ ?>
																											<input type="hidden" name="answer_options_<?= $phase['id']?>_<?= $que['question_id']?>[]" value="<?= array_keys($option)[0] ?>">
																											<?php }
																										foreach($answer_ids['options'] as $option){ ?>
																											<input type="hidden" name="answer_option_ids_<?= $phase['id']?>_<?= $que['question_id']?>[]" value="<?= array_keys($option)[0] ?>">
																										<?php }
																										if($que['question_answer_inputtype']=='Textbox'){ ?>
																											<input type="text" name="answer_<?= $phase['id']?>_<?= $que['question_id']?>" class="form-control" id="userName1" name="userName1" value="<?= array_keys($answers['options'][0])[0] ?>">
																										<?php }elseif($que['question_answer_inputtype']=='Dropdown'){ ?>
																											<select class="form-select" name="answer_<?= $phase['id']?>_<?= $que['question_id']?>">
																												<option>Select Option</option>
																												<?php $i=0;
																												foreach($answers['options'] as $option){ ?>
																													<option value="<?= array_keys($answer_ids['options'][$i])[0] ?>" <?= ((array_values($answer_ids['options'][$i])[0] == 1)?'selected':'') ?>><?= array_keys($option)[0] ?></option>
																												<?php $i++;
																												} ?>													
																											</select>
																										<?php }elseif($que['question_answer_inputtype']=='Checkbox'){ 
																											$i=0;
																											foreach($answers['options'] as $option){ ?>
																												<div class="form-check form-check-inline">
																													<input class="form-check-input" type="checkbox" id="userName1" name="answer_<?= $phase['id']?>_<?= $que['question_id']?>[]" value="<?= array_keys($answer_ids['options'][$i])[0] ?>" <?= ((array_values($answer_ids['options'][$i])[0] == 1)?'checked':'') ?>>
																													<label class="form-check-label" for="userName1"><?= array_keys($option)[0] ?></label><br>
																												</div>
																											<?php $i++; }
																										}elseif($que['question_answer_inputtype']=='Radio'){
																											$i=0;
																											foreach($answers['options'] as $option){ ?>
																												<div class="form-check form-check-inline">
																													<input class="form-check-input" type="radio" id="userName1" name="answer_<?= $phase['id']?>_<?= $que['question_id']?>" value="<?= array_keys($answer_ids['options'][$i])[0] ?>" <?= ((array_values($answer_ids['options'][$i])[0] == 1)?'checked':'') ?>>
																													<label class="form-check-label" for="userName1"><?= array_keys($option)[0] ?></label><br>
																												</div>
																											<?php $i++; }
																										}
																										elseif($que['question_answer_inputtype']=='Date'){ ?>
																											<input type="date" class="form-control" id="userName1" name="answer_<?= $phase['id']?>_<?= $que['question_id']?>" value="<?= array_keys($answers['options'][0])[0] ?>">
																										<?php }
																										elseif($que['question_answer_inputtype']=='Textarea'){ ?>
																											<textarea class="form-control" id="userName1" name="answer_<?= $phase['id']?>_<?= $que['question_id'] ?>"><?= ($answers['options'])?array_keys($answers['options'][0])[0]:'' ?></textarea>
																										<?php }
																										elseif($que['question_answer_inputtype']=='File'){ ?>
																											<input type="file" class="form-control" id="userName1"  name="answer_<?= $phase['id']?>_<?= $que['question_id']?>" value="<?= array_keys($answers['options'][0])[0] ?>">
																											<!-- <?php if(!empty($artist['artist']->press_kit)){ ?>
																												<a href="<?= base_url().'assets/images/'.$phase['id']->press_kit ?>" class="px-1 py-0 mb-4 color-pink-dark" target="_blank"><b>View File</b></a>
																											<?php } ?> -->
																										<?php }
																										elseif($que['question_answer_inputtype']=='Number'){ ?>
																											<input type="number" class="form-control" id="userName1"  name="answer_<?= $phase['id']?>_<?= $que['question_id']?>" value="<?= array_keys($answers['options'][0])[0] ?>">                                                                                       
																										<?php } ?>

																									</div>
																								</div>
																							<?php }
																						}else{ ?>
																								<p class="text-center">No Questions</p>
																						<?php } ?>
																					</div> 
																				</div> 
																			</div>
																		<?php $i++;
																		}
																		?>
																		<ul class="list-inline mb-0 wizard">
																			<li class="previous list-inline-item">
																				<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
																			</li>
																			<li class="next list-inline-item float-end">
																				<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
																			</li>
																		</ul>
																</div> 
															</div> 
														</div> 
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
					}
				}
			});
		});
	});




	// $('#store-promas').validate({
	// 	rules: {
	// 		property_category_id: "required",
	// 		name: "required",
	// 		status: "required"
	// 	},
	// 	message: {
	// 		name: "Please Enter Name"
	// 	}
	// });
</script>
