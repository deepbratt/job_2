<!DOCTYPE html>
<html lang="en">
  <head prefix="og: http://ogp.me/ns#">
    <title>Job Listing | Submit Resume </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <?php
      $this->load->view("common/meta_links");
    ?>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  	 <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>
    <script>
      CKEDITOR.replace('editor');
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
        background:url("<?php echo base_url();?>images/banner.jpg") no-repeat;
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
        $this->load->view("common/header");
      ?>
    </div>
    
    <div class="container" style="margin-top:10px;">
        <div class="row">
          <div class="col-md-12 text-center">
            <?php
              if($this->session->flashdata('success')){
            ?>
              <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
            <?php
              }
              if($this->session->flashdata('failed')){
            ?>
              <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
            <?php
              }
            ?>
          </div>
        </div>
    </div>

    <div class="container results-container">
      <section style="padding-top:50px;">
        <div class="container">
          <div class="row" style="background:#fff;">
            <div class="col-lg-10 col-lg-offset-1">
			
			 <form method="POST" action="<?php echo base_url();?>post_resume/edit_resume" enctype="multipart/form-data" class="job-add-form">

                <div class="row">
                  <div class="col-md-12">
				   <label for="location" style="font-size:12px;">Job Title</label>
                    <div class="form-group">
                      <input id="title" type="text" name="job_title" class="form-control" placeholder="your job title" value="<?php echo (($emp_details->job_title != '')?$emp_details->job_title:'');?>" required>
                    </div>
					<label for="location" style="font-size:12px;">Comapany Name</label>
                    <div class="form-group">
                      <input id="title" type="text" name="company_name" class="form-control" placeholder="Enter Company Name" value=" <?php echo (($emp_details->company_name != '')?$emp_details->company_name:'');?>" required>
                    </div>
                  </div>
                </div>

                <div class="row form-group ">
                    <div class="col-md-12">
                        <label for="location" style="font-size:12px;">Skills/Keywords</label>
                    </div>
                    <div class="col-md-12">
                        <div class="addsz">
                          <input id="location" type="text" name="skills[]" data-role="tagsinput"  placeholder="e.g. php developer , web design" class="form-control" value="<?php echo $emp_details->skills;?>" multiple="multiple" required>
                        </div>
                        <!--<p class="add_something btn-warning" style="margin-top:11px;" >Add Another Skills</p>-->
                        <a href="javascript:void(0);" style="float:right;margin-top:15px;" class="add_something btn-warning">
                            <span class="navbar-item-text-no-icon register-text" style="background:#ff9900;padding:10px 20px;border-radius: 7px !important;">Add More skills</span>
                        </a>
                    </div>
                </div>

                </br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="location" style="font-size:12px;">Start Date <span style="color:red;" title="This field is required">*</span></label>
                  <input id="datepicker"  class="form-control" name="start_date" value="<?php echo (($emp_details->start_date != '')?str_replace(",","/",date("Y,m,d",$emp_details->start_date)):'');?>" placeholder="15 January 2014" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="type" style="font-size:12px;">End Date <span style="color:red;" title="This field is required">*</span></label>
                  <input id="datepicker1" class="form-control" name="end_date" value="<?php echo (($emp_details->end_date != '')?str_replace(",","/",date("Y,m,d",$emp_details->end_date)):'');?>" placeholder="15 January 2014" required>
                </div>
              </div>
              </br>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="location" style="font-size:12px;">Education <span style="color:red;" title="This field is required">*</span></label>
                <input id="education" type="text" placeholder="e.g. BTECH , Computer science" class="form-control" value="<?php echo (($emp_details->education != '')?$emp_details->education:'');?>" name="education" required>
              </div>
            </div>
            </br>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="post_type" style="font-size:12px;">Maximum Salary <span style="color:red;" title="This field is required">*</span></label>
              <select id="post_type" name="max_salary" data-placeholder="Choose type of the post" class="form-control select2" required>
			  <option value="<?php echo (($emp_details->max_salary != '')?$emp_details->max_salary:'');?>" selected><?php echo (($emp_details->max_salary != '')?$emp_details->max_salary:'');?></option>
                <option  value="30000">$30,000 +</option>
                <option  value="40000">$40,000 +</option>
                <option  value="50000">$50,000 +</option>
                <option  value="60000">$60,000 +</option>
                <option  value="70000">$70,000 +</option>
                <option  value="80000">$80,000 +</option>
                <option  value="100000">$100,000 +</option>
                <option  value="125000">$125,000 +</option>
                <option  value="150000">$150,000 +</option>
                <option  value="180000">$180,000 +</option>
                <option  value="200000">$200,000 +</option>
              </select>
            </div>
          </div>
          </br>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="post_type" style="font-size:12px;">Willing to Travel <span style="color:red;" title="This field is required">*</span></label>
            <select id="post_type" name="travel_distance" data-placeholder="Choose type of the post" class="form-control select2" required>
			<option value="<?php echo (($emp_details->travel_distance != '')?$emp_details->travel_distance:'');?>" selected ><?php echo (($emp_details->travel_distance != '')?$emp_details->travel_distance:'');?></option>
              <option  value="5">5km</option>
              <option  value="10">10km</option>
              <option  value="15">15km</option>
              <option  value="20">20km</option>
              <option  value="25">25km</option>
              <option  value="30">30km</option>
              <option  value="40">40km</option>
              <option  value="50">50km</option>
              <option  value="60">60km</option>
              <option  value="70">70km</option>
              <option  value="100">100km</option>
              <option  value="120">120km</option>
            </select>
          </div>
        </div>
        </br>
      <div class="row">
        <div class="col-md-12">
          <label for="post_type" style="font-size:12px;">Relocate <span style="color:red;" title="This field is required">*</span>
          </label>
        </div>
        <div class="col-md-12 form-group checkbox">
          <label>
            <input type="radio" style="font-size:12px;" name="relocate" value="yes" <?php echo (($emp_details->relocate == 'yes')?'checked':'')?> required> Yes
          </label>
        </div>
        <div class="col-md-12 form-group checkbox">
          <label>
            <input type="radio" style="font-size:12px;" name="relocate" value="no" <?php echo (($emp_details->relocate == 'no')?'checked':'')?> required> No
          </label>
        </div>
        <div class="col-md-12 form-group checkbox">
          <label>
            <input type="radio" style="font-size:12px;" name="relocate" value="possibly" <?php echo (($emp_details->relocate == 'possibly')?'checked':'')?> required> Possibly
          </label>
        </div>
      </div>
      </br>
    <div class="row">
      <div class="col-md-6 form-group">
        <label for="location" style="font-size:12px;">Attached Resume <span style="color:red;" title="This field is required">*</span>
        </label>
		<span><?php echo $emp_details->resume_file;?></span>
        <input id="education" type="file" name="resume" class="form-control" required>
      </div>
      <div class="col-md-6 form-group">
        <label for="location" style="font-size:12px;">Attached Cover Letter
        </label>
		<span><?php echo $emp_details->cover_letter;?></span>
        <input type="file" name="cover_letter" class="form-control">
      </div>
    </div>
    </br>
  <div class="row">
    <div class="col-md-12 form-group">
      <label for="post_type" style="font-size:12px;">Privacy <span style="color:red;" title="This field is required">*</span>
      </label>
      <select id="post_type" data-placeholder="Choose type of the post" class="form-control select2" name="post_type" required>
	  <option  value="<?php echo $emp_details->post_type;?>"><?php echo $emp_details->post_type;?></option>
        <option   value="standard">Standard</option>
        <option   value="limited">Limited</option>
      </select>
    </div>
  </div>
  </br>

    <div class="row" style="margin-bottom:20px;">
      <div class="col-md-12 text-center">
        <hr>
        <button type="submit" class="btn btn-success"> 
          <i class="fa fa-magic">Load The Resume
        </button>
          </div>
      </div>
    </div>

  </form>
</div>
</div>
</section>
<p style="margin-bottom:20px;"> </p>
</div>
<?php
  $this->load->view("common/footer");
?>
    <script>
        $(document).ready(function() {
      var max_fields      = 10; //maximum input boxes allowed
      var wrapper         = $(".addsz"); //Fields wrapper
      var add_button      = $(".add_something"); //Add button ID
      
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
        
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
          x++; //text box increment
          $(wrapper).append("<div style='margin-top:10px;'><div class='col-md-11' style='padding:0px 0px 0px 0px;'><input id='location' name='skills[]'' type='text'  placeholder='e.g. php developer , web design' class='form-control '></div>&nbsp;<a href='#' class='remove_field btn red'><div class='col-md-1' style='padding:0px 0px 0px 0px;'><img src='<?php echo base_url();?>images/if_Remove_27874.png' style='height:20px;width:20px;margin-top:-10px;'></div></a></div>"); //add input box
        }
      });
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
      })
    });
      
    </script>


</html>
