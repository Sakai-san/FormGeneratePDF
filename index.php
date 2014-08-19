<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en-US"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
	    <!-- Title
		================================================== -->
		<title>Generation PDF</title>
	    <!-- Title / End -->
	    
	    <!-- Meta
		================================================== -->
		<meta name="description" content="">
	    <meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel='stylesheet' id='bootstrap-style-css'  href='css/bootstrap.css' type='text/css' media='all' />

	    <!-- Typekit service -->
    	<script type="text/javascript" src="//use.typekit.net/sqi6gts.js"></script>
    	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    	<style type="text/css">
    		body{
				font-family:proxima-nova;
    		}
    	</style>

	</head>
	<body>
		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
					<form id="applicationForm" class="form-horizontal">
						<span class="glyphicon glyphicon-comment" data-toggle="tooltip" data-placement="left" title="Please answer each question clearly and completely. Read carefully and follow all directions. Please tick appropriate boxes."></span>

						<div id="accordion" class="panel-group">

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												Position you are applying for
											</a>
										</h4>
									</div><!-- .panel-heading -->

									<div id="collapseOne" class="panel-collapse collapse in">
						      			<div class="panel-body">
											<div class="form-group unuelement-input">
												<label for="positionRef" class="col-sm-2 control-label">Vacancy number</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="positionRef">
												</div>
											</div>
											<div class="form-group unuelement-input">
												<label for="positionTitle" class="col-sm-2 control-label">Position title</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="positionTitle">
												</div>
											</div>
										</div> <!-- .panel-body -->
									</div> <!-- panel-collapse collapse -->

								</div><!-- .panel .panel-default -->


								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												Personal data
											</a>
										</h4>
									</div><!-- .panel-heading -->

									<div id="collapseTwo" class="panel-collapse collapse">
						      			<div class="panel-body">

											<div class="form-group unuelement-input">
												<label for="familyName" class="col-sm-2 control-label">Family name</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="familyName">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="firstName" class="col-sm-2 control-label">First name</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="firstName">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="maidenName" class="col-sm-2 control-label">Maiden name</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="maidenName">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-radio">
												<label for="sexMale" class="col-sm-2 control-label">Sex</label>
												<div class="col-sm-10">
													<label class="radio-inline">
														<input type="radio" name="sex" id="sexMale" value="male"> Male
													</label>
													<label class="radio-inline">
								  						<input type="radio" name="sex" id="sexFemale" value="female"> Female
													</label>
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="birthDate" class="col-sm-2 control-label">Date of birth</label>
												<div class="col-sm-10">
													<input type="text" placeholder="dd/mm/yyyy" class="form-control" id="birthDate">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="birthPlace" class="col-sm-2 control-label">Place of birth</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="birthPlace">
												</div>
											</div><!-- .form-group -->			
											<div class="form-group unuelement-input">
												<label for="nationalityBirth" class="col-sm-2 control-label">Nationality at birth</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="nationalityBirth">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="nationalityPresent" class="col-sm-2 control-label">Present nationality (ies) if differs</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="nationalityPresent">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="permanentAddress" class="col-sm-2 control-label">Permanent address</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="permanentAddress">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input" >
												<label for="telPermanentAddress" class="col-sm-2 control-label">Tel. no. (permanent address)</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="telPermanentAddress">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="presentAddress" class="col-sm-2 control-label">Present address (if differs)</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="presentAddress">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="telPresentAddress" class="col-sm-2 control-label">Tel. no. (present address)</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="telPresentAddress">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="officeTel" class="col-sm-2 control-label">Office tel. no.</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="officeTel">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="officeFax" class="col-sm-2 control-label">Office fax no.</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="officeFax">
												</div>
											</div><!-- .form-group -->					
											<div class="form-group unuelement-input">
												<label for="contactEmail" class="col-sm-2 control-label">Contact e-mail address</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="contactEmail">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-input">
												<label for="maritalStatus" class="col-sm-2 control-label">Marital status</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="maritalStatus">
												</div>
											</div><!-- .form-group -->
											<div class="form-group unuelement-table">
												<label for="dependentFirstName_1" class="col-sm-2 control-label">Person fully upon you dependent</label>
												<div class="col-sm-10 table-responsive">
												  <input id="visibilityCounterDependent" class="form-control visibilityCounter" style="display:none;" value="1"></input>
												  <table class="table">
												    <thead>
											          <tr>
											            <th>First name</th>
											            <th>Last name</th>
														<th>Date of birth</th>
											            <th>Relationship</th>
											          </tr>
											        </thead>
											        <tbody>
											        	<?php
														$counter = $i= 0;
														$max = 15;?>

														<?php while($i < $max): ?>
															<?php if( $i != 0 ) : ?>
																<tr style="display:none;">
															<?php else : ?>
																<tr>
															<?php endif; ?>
																<td><input id="dependentFirstName_<?php echo ${i} +1; ?>" type="text" class="form-control"></td>
																<td><input id="dependentLastName_<?php echo ${i} +1; ?>" type="text" class="form-control"></td>
																<td><input id="dependentBirthDate_<?php echo ${i} +1; ?>" type="text" placeholder="dd/mm/yyyy" class="form-control"></td>
																<td><input id="dependentRelationship_<?php echo ${i} +1; ?>" type="text" class="form-control"></td>
															</tr>
															<?php $i++; ?>
														<?php endwhile; ?>
													</tbody>
												  </table>
												  <div class="tableButton" style="margin-top:-20px;margin-left:8px;position:relative;">
													<button class="addTableEntry">
														<span class="glyphicon glyphicon-plus"></span>
													</button>
													<button class="removeTableEntry">
														<span class="glyphicon glyphicon-minus"></span>
													</button>
												  </div>
												</div><!-- table-responsive -->
											</div><!-- .form-group -->


										</div> <!-- panel-body -->
									</div> <!-- panel-collapse collapse -->
								</div><!-- .panel .panel-default -->





								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
												Questions
											</a>
										</h4>
									</div><!-- .panel-heading -->

									<div id="collapseFour" class="panel-collapse collapse">
						      			<div class="panel-body">
												<div class="unuelement-question question col-sm-11" style="padding-bottom:5px;border-bottom:1.2px solid #ddd;">
													<p>Entry into United Nations University (UNU) service might entail assignment and travel to any area of the world in which United Nations University might have responsibilities. Have you any disabilities or other restrictions which might limit your prospective field of work or your ability to engage in travel?</p>
													<label class="radio-inline">
														<input class="radioToggle" type="radio" name="travelRestriction" value="yes"> Yes
													</label>
													<label class="radio-inline">
								  						<input class="radioToggle" type="radio" name="travelRestriction" value="no" checked> No
													</label>
													<div class="toggleQuestion" style="display:none;" >
														<p>Please describe:</p>
														<textarea class="form-control"></textarea>
													</div>
												</div><!-- .question -->

												<div class="unuelement-question question col-sm-11" style="margin-top:15px;padding-bottom:5px;border-bottom:1.2px solid #ddd;">
													<p>Are you currently, or have you previously been, employed by the United Nations or a Common System agency?</p>
													<label class="radio-inline">
														<input class="radioToggle" type="radio" name="unEmployed" value="yes"> Yes
													</label>
													<label class="radio-inline">
								  						<input class="radioToggle" type="radio" name="unEmployed" value="no" checked> No
													</label>
													<div class="toggleQuestion" style="display:none;">
														<p>Please state name of agency and your Index Number (Staff Identity No.):</p>
														<input type="text" class="form-control"/>	
													</div>
												</div><!-- .question -->

												<div class="unuelement-question question col-sm-11" style="margin-top:15px;padding-bottom:5px;border-bottom:1.2px solid #ddd;">
													<p>Have you taken up legal permanent residence status in any country other than that of your nationality?</p>
													<label class="radio-inline">
														<input class="radioToggle" type="radio" name="residence" value="yes"> Yes
													</label>
													<label class="radio-inline">
								  						<input class="radioToggle" type="radio" name="residence" value="no" checked> No
													</label>
													<div class="toggleQuestion" style="display:none;">
														<p>Which country (ies):</p>
														<input type="text" class="form-control"/>	
													</div>
												</div><!-- .question -->


												<div class="unuelement-question question col-sm-11" style="margin-top:15px;padding-bottom:5px;border-bottom:1.2px solid #ddd;">
													<p>Have you taken any steps towards changing your present nationality?</p>
													<label class="radio-inline">
														<input class="radioToggle" type="radio" name="changeNationality" value="yes"> Yes
													</label>
													<label class="radio-inline">
								  						<input class="radioToggle" type="radio" name="changeNationality" value="no" checked> No
													</label>
													<div class="toggleQuestion" style="display:none;">
														<p>Explain fully:</p>
														<textarea class="form-control"></textarea>
													</div>
												</div><!-- .question -->


												<div class="unuelement-question question col-sm-11" style="margin-top:15px;padding-bottom:5px;border-bottom:1.2px solid #ddd;">
													<p>Do you have a dependent spouse and/or relatives currently employed by the United Nations or a Common System agency?</p>
													<label class="radio-inline">
														<input class="radioToggle" type="radio" name="relativeEmployed" value="yes"> Yes
													</label>
													<label class="radio-inline">
								  						<input class="radioToggle" type="radio" name="relativeEmployed" value="no" checked> No
													</label>
													<div class="toggleQuestion" style="display:none;">
														<div class="table-responsive">
														  <table class="table">
														    <thead>
													          <tr>
													            <th>Name</th>
													            <th>Relationship</th>
																<th>Name of International Organization</th>
													          </tr>
													        </thead>
													        <tbody>
																<tr>
																	<td><input type="text" class="form-control"></td>
																	<td><input type="text" class="form-control"></td>
																	<td><input type="text" class="form-control"></td>
																</tr>
															</tbody>
														  </table>
														  <div class="tableButton" style="margin-top:-20px;margin-left:8px;position:relative;">
															<button class="addTableEntry">
																<span class="glyphicon glyphicon-plus"></span>
															</button>
															<button class="removeTableEntry">
																<span class="glyphicon glyphicon-minus"></span>
															</button>
														  </div>
														</div><!-- table-responsive -->
													</div><!-- toggleQuestion -->
												</div><!-- .question -->


												<div class="unuelement-question question col-sm-11" style="margin-top:15px;padding-bottom:5px;">
													<p>Have you previously submitted an application for employment and/or undergone any tests with UNU?</p>
													<label class="radio-inline">
														<input class="radioToggle" type="radio" name="previousApplication" value="yes"> Yes
													</label>
													<label class="radio-inline">
								  						<input class="radioToggle" type="radio" name="previousApplication" value="no" checked> No
													</label>
													<div class="toggleQuestion" style="display:none;">
														<p>When:</p>
														<textarea class="form-control"></textarea>
													</div>
												</div><!-- .question -->

										</div> <!-- panel-body -->
									</div> <!-- panel-collapse collapse -->					
								</div><!-- .panel .panel-default -->




						<?php /*

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
												Skills
											</a>
										</h4>
									</div><!-- .panel-heading -->

									<div id="collapseFive" class="panel-collapse collapse">
						      			<div class="panel-body">

											<div class="form-group unuelement-table">
												<label for="contactEmail" class="col-sm-2 control-label">Language</label>
												<div class="col-sm-10 table-responsive">
													<table class="table">
													    <thead>
												          <tr>
												            <th>Language</th>
												            <th>Writting and reading level</th>
															<th>Speaking level</th>
												            <th>Remark, certificate</th>
												          </tr>
												        </thead>
												        <tbody>
															<tr>
																<td><input type="text" class="form-control"></td>
																<td><input type="text" class="form-control"></td>
																<td><input type="text" class="form-control"></td>
																<td><input type="text" class="form-control"></td>
															</tr>
														</tbody>
													  </table>
											  		<div class="tableButton" style="margin-top:-20px;margin-left:8px;position:relative;">
														<button class="addTableEntry">
															<span class="glyphicon glyphicon-plus"></span>
														</button>
														<button class="removeTableEntry">
															<span class="glyphicon glyphicon-minus"></span>
														</button>
													</div>														
												</div><!-- .table-responsive -->
											</div><!-- .form-group -->
											<div class="form-group unuelement-input" style="margin-top:20px;">
												<label for="softwareSkills" class="col-sm-2 control-label">Software you are proficient with</label>
												<div class="col-sm-10">
													<textarea rows="2" class="form-control" id="softwareSkills"></textarea>
												</div>
											</div><!-- .form-group -->

										</div> <!-- panel-body -->
									</div> <!-- panel-collapse collapse -->					
								</div><!-- .panel .panel-default -->



								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
												Education
											</a>
										</h4>
									</div><!-- .panel-heading -->

									<div id="collapseSix" class="panel-collapse collapse">
						      			<div class="panel-body">
											<div class="form-group unuelement-table">
												<div class="table-responsive">
												  <table class="table">
												    <thead>
											          <tr>
											            <th>University (name, place and country)</th>
											            <th>From</th>
														<th>To</th>
											            <th>Degrees and distinctions</th>
											            <th>Main course of study</th>
											          </tr>
											        </thead>
											        <tbody>
														<tr>
															<td><input type="text" class="form-control"></td>
															<td><input type="text" placeholder="yyyy" size="2" maxlength="4" class="form-control"></td>
															<td><input type="text" placeholder="yyyy" size="2" maxlength="4" class="form-control"></td>
															<td><input type="text" class="form-control"></td>
															<td><input type="text" class="form-control"></td>
														</tr>
													</tbody>
												  </table>
												  <div class="tableButton" style="margin-top:-20px;margin-left:8px;position:relative;">
													<button class="addTableEntry">
														<span class="glyphicon glyphicon-plus"></span>
													</button>
													<button class="removeTableEntry">
														<span class="glyphicon glyphicon-minus"></span>
													</button>
												  </div>
												</div><!-- table-responsive -->
											</div><!-- .form-group -->

										</div> <!-- panel-body -->
									</div> <!-- panel-collapse collapse -->					
								</div><!-- .panel .panel-default -->
						*/ ?>



								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
												Employment record
											</a>
										</h4>
									</div><!-- .panel-heading -->

									<div id="collapseSeven" class="panel-collapse collapse">
										<div class="panel-body">
										<span class="glyphicon glyphicon-comment" data-toggle="tooltip" data-placement="left" title="Starting with your present employment, list in reverse order every position you have held. Include service in the armed forces."></span>


											<div id="accordionJobs" class="panel-group"> <!-- all records -->
												<input id="visibilityCounterEmployment" class="form-control visibilityCounter" style="display:none;" value="1"></input>

											<?php
												$counter = $i= 0;
												$max = 10;?>
												<?php while($i < $max): ?>
													<?php if( $i != 0 ) : ?>
														<div class="panel panel-default unuelement-job" style="display:none;"><!-- one particular job-->
													<?php else : ?>
														<div class="panel panel-default unuelement-job">
													<?php endif; ?>
															<div class="panel-heading">
																<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordionJobs" href="#job_<?php echo ${i} +1;?>">Record <?php echo ($i+1) ?></a>
																</h4>
															</div><!-- .panel-heading -->

															<div id="job_<?php echo ${i} +1;?>" class="panel-collapse collapse in">
													      		<div class="panel-body">
																	<div class="form-group">
																		<label for="jobFrom_<?php echo ${i} +1;?>" class="col-sm-2 control-label">From</label>
																		<div class="col-sm-10">
																			<input type="text" placeholder="mm/yyyy" class="form-control" id="jobFrom_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->
																	<div class="form-group">
																		<label for="jobTo_<?php echo ${i} +1; ?>" class="col-sm-2 control-label">To</label>
																		<div class="col-sm-10">
																			<input type="text" placeholder="mm/yyyy" class="form-control" id="jobTo_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->
																	<div class="form-group">
																		<label for="salaryStart_<?php echo ${i} +1;?>" class="col-sm-2 control-label">Starting salary (year)</label>
																		<div class="col-sm-10">
																			<input type="text" class="form-control" id="salaryStart_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->
																	<div class="form-group">
																		<label for="salaryFinal_<?php echo ${i} +1;?>" class="col-sm-2 control-label">Final salary (year)</label>
																		<div class="col-sm-10">
																			<input type="text" class="form-control" id="salaryFinal_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->
																	<div class="form-group">
																		<label for="jobTitle_<?php echo ${i} +1;?>" class="col-sm-2 control-label">Exact title of your post</label>
																		<div class="col-sm-10">
																			<input type="text" class="form-control" id="jobTitle_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->
																	<div class="form-group">
																		<label for="jobEmployer_<?php echo ${i} +1;?>" class="col-sm-2 control-label">Employer name and address</label>
																		<div class="col-sm-10">
																			<input type="text" class="form-control" id="jobEmployer_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->
																	<div class="form-group">
																		<label for="jobEmployerBusiness_<?php echo ${i} +1;?>" class="col-sm-2 control-label">Type of business</label>
																		<div class="col-sm-10">
																			<input type="text" class="form-control" id="jobEmployerBusiness_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->
																	<div class="form-group">
																		<label for="jobSupervisor_<?php echo ${i} +1;?>" class="col-sm-2 control-label">Name of supervisor</label>
																		<div class="col-sm-10">
																			<input type="text" class="form-control" id="jobSupervisor_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->
																	<div class="form-group">
																		<label for="jobSupervised_<?php echo ${i} +1;?>" class="col-sm-2 control-label">No. and type of employees supervised</label>
																		<div class="col-sm-10">
																			<input type="text" class="form-control" id="jobSupervised_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->							
																	<div class="form-group">
																		<label for="jobDuties_<?php echo ${i} +1;?>" class="col-sm-2 control-label">Duties and achievements</label>
																		<div class="col-sm-10">
																			<textarea rows="4" class="form-control" id="jobDuties_<?php echo ${i} +1;?>"></textarea>
																		</div>
																	</div><!-- .form-group -->
																	<div class="form-group">
																		<label for="jobDeparture_<?php echo ${i} +1;?>" class="col-sm-2 control-label">Reason for leaving</label>
																		<div class="col-sm-10">
																			<input type="text" class="form-control" id="jobDeparture_<?php echo ${i} +1;?>">
																		</div>
																	</div><!-- .form-group -->
																</div> <!-- .panel-body-->

															</div> <!-- .panel-collapse -->								
														</div><!-- .panel-default -->
													<?php $i++; ?>
												<?php endwhile; ?>

											</div><!-- .panel-group -->
											<div>
												<button id="addJobEntry">
													<span class="glyphicon glyphicon-plus"></span>
												</button>
												<button id="removeJobEntry">
													<span class="glyphicon glyphicon-minus"></span>
												</button>
											</div>
										</div> <!-- panel-body -->


									</div> <!-- panel-collapse collapse -->
								</div><!-- .panel .panel-default -->









								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseHeight">
												References
											</a>
										</h4>
									</div><!-- .panel-heading -->

									<div id="collapseHeight" class="panel-collapse collapse">
										<div class="panel-body">
										<span class="glyphicon glyphicon-comment" data-toggle="tooltip" data-placement="left" title="List three persons, not related to you, who are familiar with your character and qualifications. Do not repeat the names of supervisors already listed under the EMPLOYMENT section, above."></span>


											<div class="form-group unuelement-table">
												<div class="table-responsive">
												  <table class="table">
												    <thead>
											          <tr>
											            <th>Title and full name</th>
											            <th>Postal address and contact email</th>
											            <th>Profession</th>
											          </tr>
											        </thead>
											        <tbody>
														<tr>
															<td><input type="text" class="form-control"></td>
															<td><input type="text" class="form-control"></td>
															<td><input type="text" class="form-control"></td>
														</tr>
													</tbody>
												  </table>
												  <div class="tableButton" style="margin-top:-20px;margin-left:8px;position:relative;">
													<button class="addTableEntry" >
														<span class="glyphicon glyphicon-plus"></span>
													</button>
													<button class="removeTableEntry" >
														<span class="glyphicon glyphicon-minus"></span>
													</button>
												  </div>
												</div><!-- table-responsive-->
											</div><!-- .form-group -->

										</div> <!-- panel-body -->
									</div> <!-- panel-collapse collapse -->

								</div><!-- .panel .panel-default -->






								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
												Misc
											</a>
										</h4>
									</div><!-- .panel-heading -->

									<div id="collapseNine" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="form-group unuelement-input col-sm-11" style="margin-left:3px;">
												<label style="font-weight:normal;font-style:normal;color:#5f6f81;font-size:14px;">Please provide any other relevant details in support of your application – especially as to how you meet the selection criteria for this particular position.</label>
												<div>
													<textarea rows="5" class="form-control"></textarea>
												</div>
											</div>
										</div> <!-- panel-body -->
									</div> <!-- panel-collapse collapse -->

								</div><!-- .panel .panel-default -->


								<!-- div class="form-group" style="margin-top:40px;">
						    		<div class="col-sm-offset-2 col-sm-10">
						      			<button type="submit" class="btn btn-primary">Generate PDF</button>
						    		</div>
						  		</div -->

							<button id="pdfGenerate" style="margin-top: 10px;"class="button btn btn-primary">Generate pdf</button>
							<button style="margin-top: 10px;"class="button btn btn-primary" data-phoenix-action="save">Save</button>
							<button style="margin-top: 10px;"class="button btn btn-primary" data-phoenix-action="remove">Delete data</button>
						</div>
					</form>
				</div>
        	</div>
        </div>
		<script src='js/jquery-min.js'></script>
		<script src="js/jspdf.debug.js"></script>
		<script src="js/personalHistoryForm.js"></script>
		<script src="js/document.js"></script>
	</body>
</html>