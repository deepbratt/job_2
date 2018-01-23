<!DOCTYPE html>
<html lang="en">
  <head prefix="og: http://ogp.me/ns#">
    <title>Job Listing | Home </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <?php
		$this->load->view("common/meta_links");
	?>
	<style>
	.work-timee{
	color: #fff !important;
    background-color: #5cc069;
    font-size: 13px;
    display: inline-block;
    border-radius: 3px;
    margin-top: 32px;
    padding: 2px 5px !important;
	}
	.simple_bannenr{
	background-color: #f8f8f8;
    border-top: solid 1px #f2f2f2;
    border-bottom: solid 1px #f2f2f2;
    padding: 20px 0px;
    width: 100%;
	}
	</style>
  </head>
  <body>
    <div id="adbanner-container" class="adbanner-container-display">
      <div id="header-adbanner">
      </div>
    </div>
    <div id="header-container">
       <?php
		$this->load->view("common/header");
	?>
    </div>
			       
    <div class="container results-container">

                
				<main id="maincontent">
                    <section class="resume" style="padding-top:50px !important;">
                        <?php
      if($this->session->flashdata('success')){
    ?>
       <div class="alert alert-success" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
    <?php
      }
      if($this->session->flashdata('failed')){
    ?>
       <div class="alert alert-danger" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
    <?php
      }
    ?>
                        <div class="container">
                            <div class="row" >
                                <div class="col-md-8">
                                    <div class="panel-body" style="border:1px solid #e1e1e1;">
                                        <div class="col-md-2 p-l">
                                            <div class="block" style="float:left;margin-left:-10px;">
                                                <img src="<?php echo base_url();?>uploads/<?php echo $fetch_job->company_logo;?>" alt="" class="img-responsive" style="margin-top: -7px;height: 112px;">
                                            </div>
                                        </div>
                                        <div class="col-md-10" style="margin-top:8px;">
                                            <div class="job_title" style="font-weight:900;">
                                            <?php echo ucfirst($fetch_job->job_title);?>
                                            <a href="#" class="col-md-12" style="color:#1c4972;padding-top:10px;padding-bottom:10px;float:left;margin-left:-10px;">
                                                <?php 
                                                $resultstr = array();
                                                foreach ($fetch_cat as $cat_details) {
                                                    $resultstr[]  =  $cat_details->category_name;
                                                }
                                                echo implode(" , ",$resultstr);
                                                ?>
                                            </a>
                                            </div> 
                                            <div class="col-md-3 p-l">
                                            <div class="packege" style="float:left;margin-left:-10px;">
                                                <span class="glyphicon glyphicon-education" style=""></span> <?php echo ucfirst($fetch_job->type);?>
                                            </div>
                                            </div>
                                            <div class="col-md-4 p-l" style="margin-left: 30px;">
                                               <div class="packege">
                                                <span class="glyphicon glyphicon-usd" style=""></span>
                                                <?php echo $fetch_job->salary_details;?>
                                            </div> 
                                            </div>
                                            <div class="col-md-3 p-l">
                                                 <div class="packege">
                                                <span class="glyphicon glyphicon-time" style=""></span>
                                                <?php
                                                $post_date = $fetch_job->date;
                                                $now = time();
                                                $ago_date = $now - $post_date;

                                                $yo =  date('d',$ago_date) ;
                                                echo(int)$yo. ' Days ago';
                                                ?>
                                            </div>
                                            </div>
                                           
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="page-heading"></div>
                                        <div class="page-heading">
                                            <h2 style="font-size:16px;font-weight:900;">Job Description</h2>
                                            <?php echo ucfirst($fetch_job->job_description);?>
                                        </div>
                                    </div>
                                </div>
								
                                <div class="col-md-4">
									<?php
									if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
										$userdata = $this->session->userdata['logged_in'];
										$user_type = $userdata['user_type'];
									}
									
									if($user_id == NULL){
									?>
									<div class="panel-body" style="border:1px solid #e1e1e1;">
                                        <a class="btn btn-primary" id="primary_button" href="<?php echo base_url();?>login" style="margin-left:75px;">Login For Apply</a>
                                    </div>
									<?php
										}

										if($user_id != $fetch_job->company_id && $user_id != ''){
											if($statuszz =='apply')
											{
										?>
											<div class="panel-body" style="border:1px solid #e1e1e1;">
												<a class="btn btn-primary" id="primary_button" onclick="show_box();" style="margin-left:75px;">Apply For This Job</a>
												<form id="apply_form" style="display:none;" action="<?php echo base_url();?>job_details/send_message" method="post" enctype="multipart/form-data">
													<p></p>
													<div class="form-group">
														<textarea  type="text" class="form-control" name="message" placeholder="Reason For Delete This Job"></textarea>
														<input type="hidden" name="job_id" value="<?php echo $fetch_job->job_id;?>">
													</div>
													<button class="btn btn-primary" type="submit" style="margin-left:75px;text-align:center;">Apply Here</button>
												</form>
											</div>
										<?php
											}else{
										?>
											<div class="panel-body" style="border:1px solid #e1e1e1;">
												<a class="btn btn-primary" id="primary_button"  style="text-align:center;margin-left:75px;">Already Applied</a>
											</div>
									 <?php
										}
										}else{
											if($user_id != NULL){
									?>
									
									<div class="panel-body" style="border:1px solid #e1e1e1;">
                                        <a class="btn btn-primary" id="primary_button" onclick="show_box();" style="background:red;border:1px solid red;margin-left:75px;">Delete This Job</a>
                                        <form id="apply_form" style="display:none;" action="<?php echo base_url();?>job_details/delete_job" method="post" enctype="multipart/form-data">
                                            <p></p>
                                            <div class="form-group">
                                                <textarea  type="text" class="form-control" name="message" placeholder="Reason For Delete This Job"></textarea>
												<input type="hidden" name="job_id" value="<?php echo $fetch_job->job_id;?>">
                                            </div>
                                            <button class="btn btn-primary" type="submit" style="background:red;border:1px solid red;margin-left:75px;">Delete This Job</button>
                                        </form>
                                    </div>
										<?php

											}
										}
									
										?>
                                    <div class="panel-body" style="border:1px solid #e1e1e1;margin-top:18px;">
                                        <div class="job_title block1" style="font-weight:900;width:100% !important;padding:0px !important;">
										<span style="color:black;">
                                            Company Profile
										</span>
										<?php
											if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
												$userdata = $this->session->userdata['logged_in'];
												$user_id = $userdata['user_id'];
												$comapny_id = $fetch_job->company_id;
												if($user_id == $comapny_id)
												{
													$link = "employeer_dashboard";
												}
												else
												{
													$link = "employeer_dashboard/$comapny_id";
												}
										}
										else
										{
												$comapny_id = $fetch_job->company_id;
												$link = "employeer_dashboard/$comapny_id";
										}
										?>
                                            <a href="<?php echo base_url();?><?php echo $link;?>" style="color:#1c4972;float:left;margin-left:-10px;font-size:12px;" class="col-md-12"><?php echo (($fetch_job->name_status == 'yes')?$fetch_job->company_name:'Company Name Hidden');?></a>
                                        </div> 
										 <div class="clearfix"></div>
                                        <div class="contact_details">
											
                                            <span style="color:black;padding-bottom:10px;font-size:12px;">
                                                <span style="color:#1c4972">Address:-</span> 
                                                <?php echo ucfirst($fetch_job->location);?>
                                            </span></br>

                                            <span style="color:black;padding-bottom:10px;font-size:12px;">
                                                <span style="color:#1c4972">Phone:-</span> 
                                                <?php echo ucfirst($fetch_job->contact_number);?>
                                            </span></br>

                                            <span style="color:black;padding-bottom:10px;font-size:12px;">
                                                <span style="color:#1c4972">Person:-</span> 
                                                <?php echo ucfirst($fetch_job->contact_name);?>
                                            </span></br>
                                        </div>
                                    </div>
				
								
									
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-md-8">
                                    <!-- <p>Share On :</p>
                                    <div class="social_button col-md-4 text-center p-l">
                                        <a href="https://www.facebook.com/" class="btn btn-primary" target="blank"><i class="fa fa-facebook"></i> Login with Faceboook</a>
                                    </div>
                                    <div class="social_button col-md-4  p-l p-r text-center">
                                        <a href="https://twitter.com" class="btn btn-primary" target="blank"><i class="fa fa-twitter"></i> Login with Faceboook</a>
                                    </div>
                                    <div class="social_button col-md-4 text-center p-r">
                                        <a href="https://mail.google.com/" class="btn btn-primary" target="blank"><i class="fa fa-google-plus"></i> Login with Faceboook</a>
                                    </div> -->

                                </div>
                            </div>
							     <div class="clearfix"></div>
                                    <div class="page-heading col-md-12" style="background:#f8f8f8;color:#fff;border:1px solid #f8f8f8;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
									<?php
										
										if($user_id == $fetch_job->company_id)
										{
									?>
                                       <h2 style="color:black;">Applicant For This Job</h2>
									<?php
										}
										else
										{
									 ?>
									  <h2 style="color:black;">Similar Jobs</h2>
									 <?php
										}
									 ?>
                                    </div>
                                    <div class="table-bg" style="border:1px solid #e1e1e1;border-top:0px;">
                                        <table class="table" style="margin-bottom:0px;">
                                            <tbody>
                                                <?php
												//print_r($get_applicant_details);
												if($user_id == $fetch_job->company_id)
												{
													$get_row = count($get_applicant_details);
													  if($get_row > 1)
														{
														    foreach($get_applicant_details as $fetch_applicant) {
																$skills = explode(",",$fetch_applicant->skills);
																$resume_uploaded_date = date("M d Y",$fetch_applicant->date_posted);
																$pic = $fetch_applicant->profile_picture;
												?>
											
												 <div class="page_listing candidate" style="border:1px  solid #e1e1e1 !important;">
													  <div class="sorting_content col-md-7" style=" padding: 25px 15px 15px;overflow: hidden;">
														<div class="tab-image" style="float: left;text-align: center;margin-right: 20px;">
														  <img src="<?php echo base_url();?>uploads/<?php echo $fetch_applicant->profile_picture;?>" alt="" style="height:100px;" class="img-responsive">
														</div>
														<div class="overflow" style="overflow:hidden;">
														  <div class="text-shorting" style="font-size: 16px;color: #333;line-height: 30px;font-weight: 500;margin: 0px;">
															<a href="<?php echo base_url();?>applicant_dashboard/<?php echo $fetch_applicant->user_id;?>">
															  <h1 style="font-size: 16px;color: #237fa5;line-height: 35px;font-weight: 700;margin-top:-10px;">
																<u><?php echo ucfirst($fetch_applicant->first_name);?> <?php echo ucfirst($fetch_applicant->last_name);?></u>
															  </h1>
															</a>
															<ul class="unstyled" style="margin-top:-25px;padding: 0px;">
															  <li style="display: inline-block;padding: 0 50px 0 0;color: #7d7d7d;font-size: 13px;"> 
																<?php 
																  $addr = ucfirst($fetch_applicant->address);
																  if($addr != NULL){
																	echo $addr;
																  }else{
																	echo "Address not provided";
																  }
																?>
																  
															  </li>
															</ul>

															<ul class="" style="margin-top:-15px;padding: 0px;list-style: none;">
															  <?php
																if(count($skills) > 5){
																	$count_skillz = 5;
																}else{
																	$count_skillz = count($skills);
																}
																for($i=0; $i<$count_skillz ; $i++){
															  ?>
															  <li style='float:left;background:#fafafa;border:1px solid #CCC;padding:3px 10px;margin:5px;font-size: 12px;'> <?php echo $skills[$i];?></li>
															  <?php
																}
															  ?>
															</ul>
															<p>
															</p>
														  </div>
														</div>
													  </div>


													  <div class="sorting_content col-md-5" style="padding: 25px 15px 15px;overflow: hidden;">
														<!--<p style="font-size: 12px;"> 
															<a href='' class="btn btn-warning" >Shortlist</a>
															<a href='' class="btn btn-default" >Compare</a>
															<a href='' class="btn btn-primary" >Details</a>
														</p>-->
														<div class="col-md-3 ">
														  <p style="font-size: 12px;font-weight:bold;">Job Title:</p>
														  <p style="font-size: 12px;font-weight:bold;">Salary:</p>
														  <p style="font-size: 12px;font-weight:bold;">Relocation:</p>
														  <p style="font-size: 12px;font-weight:bold;">Company:</p>
														</div>

														<div class="col-md-9"> 
														  <p style="font-size: 12px;"> <?php echo $fetch_applicant->job_title;?> </p>
														  <p style="font-size: 12px;"> $<?php echo $fetch_applicant->max_salary;?> </p>
														  <p style="font-size: 12px;"> <?php echo $fetch_applicant->relocate;?> </p>
														  <p style="font-size: 12px;"> <?php echo $fetch_applicant->company_name;?> </p>
														</div>
													  </div>
													</div>
											<?php
											 }
												}
												else
													{
											?>
											  <tr>
                                                    <td class="col-md-6" align="center">
                                                        No Application Have Been Submitted!
                                                    </td>
                                                </tr>
											<?php
												}
												}
											else
											{
                                                $get_row = count($similar_job);
                                                if($get_row > 0)
                                                {
                                                    foreach ($similar_job as $fetch_similar) {
                                                        # code...
                                                    }
                                                ?>
												       <div class="job new " id="77913552">
														  <div class="row">
															  <div class="card-body col-md-12">
																<div class="col-md-2">
																  <a href="<?php echo base_url();?>job_details/<?php echo $fetch_similar->job_id;?>" title="<?php echo (($fetch_similar->name_status == 'yes')?'Company Name Hidden':$fetch_similar->company_name);?>"><img src="<?php echo base_url();?>uploads/<?php echo $fetch_similar->company_logo;?>" title="<?php echo (($fetch_similar->name_status == 'yes')?'Company Name Hidden':$fetch_similar->company_name);?>" style="width:100%;margin-top:25px;"></a>
																</div>
																<div class="col-md-10" style="">
																<h2 class="card-title" style=""><a href="<?php echo base_url();?>job_details/<?php echo $fetch_similar->job_id;?>" style="color:black !important;" title="<?php echo (($fetch_similar->name_status == 'yes')?'Company Name Hidden':$fetch_similar->company_name);?>"><?php echo ucfirst($fetch_similar->job_title);?></a></h2>
																<p class="card-text " style=""> Posted on <?php echo date("M , d Y",$fetch_similar->date);?> , <b><?php echo ucfirst($fetch_similar->location);?></b></p>
																<p class="card-text"><?php echo substr($fetch_similar->job_description,0,220);?>...</p>
																</div>
															  </div>
														  </div>
														</div>
                                                <?php
                                                }
                                                else{
                                                ?>
                                                <tr>
                                                    <td class="col-md-6" align="center">
                                                        No Similar Job found!
                                                    </td>
                                                </tr>
                                                <?php
                                                }
											}
                                                ?>
												
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                    </section>
                </main>


    </div>
  <?php
		$this->load->view("common/footer");
	?>
    <script>
        function show_box() {
            $("#primary_button").hide();
            $("#apply_form").show();
        }
    </script>
</html>
