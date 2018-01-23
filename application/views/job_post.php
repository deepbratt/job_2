<!DOCTYPE html>
<html lang="en">
  <head prefix="og: http://ogp.me/ns#">
    <title>Job Listing | Job Post </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
  <?php
	 $this->load->view("common/meta_links");
?> 
	<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVEqoCsKgUMmAcDVX9OAwVMDewLI6yOAQ&sensor=false&libraries=places&language=en"></script>

<script>

 CKEDITOR.replace( 'editor' );
</script>
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
	background:url("<?php echo base_url();?>images/post-banner.jpg") no-repeat;
    border-bottom: solid 1px #f2f2f2;
    padding: 85px 0px;
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
	 $this->load->view("common/header.php");
?> 
    </div>
			 

    <div class="container results-container">
     
	
    <section style="padding-top:50px;">
      <div class="container">
        <div class="row"  style="background:#fff;">
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

      if($this->session->flashdata('log')){
    ?>
       <div class="alert alert-danger" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('log');?></strong> </div>
    <?php
      }
    ?>
          <div class="col-lg-10 col-lg-offset-1">
            <form id="job-main-form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>/job_post/submit_job" class="job-add-form">

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="title" style="font-size:12px;">Job Title <span style="color:red;" title="This field is required">*</span></label>
                  <input id="title" type="text" name="job_title" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="category" style="font-size:12px;">Job ad category <span style="color:red;" title="This field is required">*</span></label>
                  <select id="category" multiple="multiple" name="job_cat[]" placeholder="Choose category" class="form-control select2" required> 
                    <?php
                    foreach ($fetch_cat->result() as $job_cat) {
                    ?>
                     <option value="<?php echo $job_cat->category_id;?>"><?php echo $job_cat->category_name;?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
			  <div class="row">
                <div class="col-md-6 form-group">
                  <label for="location" style="font-size:12px;">Location <span style="color:red;" title="This field is required">*</span></label>
                  <input  type="text" name="location" id="cityz" placeholder="e.g. Rio de Janeiro" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="type" style="font-size:12px;">Type <span style="color:red;" title="This field is required">*</span></label>
                  <select id="type" placeholder="Choose job type" name="job_type" class="form-control select2" required>
                    <option value="Full Time">Full-time</option>
                    <option value="Part Time">Part-time</option>
                    <option value="Internship">Internship</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="post_type" style="font-size:12px;">Salary Details (optional)</label>
                  <select id="post_type" data-placeholder="Choose type of the post" name="salary" class="form-control select2">
                    <option style="background:#003A83;">$30k +</option>
                    <option style="background:#003A83;">$40k +</option>
          					<option style="background:#003A83;">$50k +</option>
          					<option style="background:#003A83;">$60k +</option>
          					<option style="background:#003A83;">$70k +</option>
          					<option style="background:#003A83;">$80k +</option>
          					<option style="background:#003A83;">$100k +</option>
          					<option style="background:#003A83;">$125k +</option>
          					<option style="background:#003A83;">$150k +</option>
                  </select>
                </div>
              </div>
			  <div class="row">
                <div class="col-md-12 form-group">
                  <label for="text" style="font-size:12px;">Job Description <span style="color:red;" title="This field is required">*</span></label>
				  <textarea class="form-control ckeditor" id="editor" placeholder="Share what you are thinking here..." name="description" required></textarea>
              </div>
              <div class="row">
                <div class="col-md-12">                           
                  <hr class="margin-bottom--big">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h4><strong style="font-weight:900;">Company Information</strong></h4>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-2"><label for="company_name" class="" style="font-size:12px;">Company name <span style="color:red;" title="This field is required">*</span></label></div>
                  <div class="col-md-8">
					  <input id="company_name" type="text" class="form-control" name="company_name" required>
					  <div class="checkbox ">
							<label>
							  <input type="checkbox" name="company_status" value="no" style="font-size:12px;">Keep company name confidential
							</label>
					  </div>
				  </div>
                </div>
              </div>
			  </br>
				
              <div class="row">
					<div class="form-group">
					  <div class="col-md-2"><label for="company_logo" style="font-size:12px;">Company Logo <span style="color:red;" title="This field is required">*</span></label></div>
					  <div class="col-md-8">
						<div class="form-group">
						  <input id="company_logo" type="file" class="form-control" name="image" required>
						</div>
						<div class="checkbox ">
							<label>
							  <input type="checkbox" name="logo_status" value="no" style="font-size:12px;">Use a company logo
							</label>
						</div>
					   </div>
					</div>

              </div>
			  </br>
			  <div class="row">
                <div class="form-group">
                  <div class="col-md-2"><label for="location" style="font-size:12px;">Contact Name <span style="color:red;" title="This field is required">*</span></label></div>
                  <div class="col-md-8"><input id="location" type="text" placeholder="name" name="contact_name" class="form-control" required></div>
                </div>
			  </div>
			  </br>
			  <div class="row">
                <div class="form-group">
                  <div class="col-md-2"><label for="type" style="font-size:12px;">Contact Number <span style="color:red;" title="This field is required">*</span></label></div>
				  <div class="col-md-8"><input id="location" type="text" placeholder="phone number" name="contact_number" class="form-control" required></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <hr>
                  <div class="checkbox text-center">
                    <label>
                      <input type="checkbox"> <u style="font-size:12px;">Company Information Displayed on Job Post <a href="#">Terms and conditions</a>.</u>
                    </label>
                  </div>
				  <p class="help-block text-small" style="font-size:12px;">If not ticked then all jobs to go thru our websites meaning whenever someone applies for the job it should go direct to the employer advertiser but not display his contact details to the person looking for work</p>
                </div>
              </div>
              <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12 text-center">
                  <hr>
                  <button type="submit" class="btn btn-success"> <i class="fa fa-magic">post job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
      
      <p style="margin-bottom:20px;"> </p>

        



    </div>
<?php
	 $this->load->view("common/footer");
?> 

<script>
      var input = document.getElementById('cityz');
      var autocomplete = new google.maps.places.Autocomplete(input);
 </script>
</html>
