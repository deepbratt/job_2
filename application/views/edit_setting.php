<!DOCTYPE html>
<html lang="en">
  <head prefix="og: http://ogp.me/ns#">
    <title>Job Listing | Submit Resume </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <?php
      $this->load->view("common/meta_links");
    ?>
    <script type="text/javascript" src="ckeditor/ckeditor.js">

    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVEqoCsKgUMmAcDVX9OAwVMDewLI6yOAQ&sensor=false&libraries=places&language=en"></script>
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
          <div class="row"   style="background:#fff;">
            <div class="col-lg-10 col-lg-offset-1">
			<?php
		
	?>
				<form action="<?php echo base_url();?>edit_setting/edit_employee" method="post" enctype="multipart/form-data" class="job-add-form">

						<div class="col-md-2" >
							<label for="location" style="font-size:12px;">Current Picture 
							</label>
							<img src="<?php echo base_url();?>uploads/<?php echo $normal_details->profile_picture;?>" style="height:70px;width:70px;margin-left:10px;">
						  </div>
						  <div class="col-md-10 form-group">
							<label for="location" style="font-size:12px;">Update Profile Pic 
							</label>
							<input type="file" name="profile_pic" class="form-control" style="margin-top:10px;">
						  </div>
                          <div class="form-group col-md-12">
                            <label for="name" style="font-size:12px;">First Name
                            </label>
                            <input id="name" type="text" name="f_name" value="<?php echo $normal_details->first_name;?>" class="form-control" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="name" style="font-size:12px;">Last Name
                            </label>
                            <input id="name" type="text" name="l_name" value="<?php echo $normal_details->last_name;?>" class="form-control" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="email" style="font-size:12px;">Email
                            </label>
                            <input id="email" type="text" name="email" value="<?php echo $normal_details->email;?>" class="form-control" required>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="name" style="font-size:12px;">Phone Number
                            </label>
                            <input id="name" type="text" name="phone" value="<?php echo $normal_details->phone;?>" class="form-control" required>
                          </div>
						 
                          <div class="form-group col-md-6">
                            <label for="name" style="font-size:12px;">Postcode
                            </label>
                            <input id="name" type="text" name="postcode" value="<?php echo $normal_details->postcode;?>" class="form-control" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="password" style="font-size:12px;">Address
                            </label>
                            <textarea name="address" id="cityz" class="form-control"><?php echo $normal_details->address;?></textarea>
                          </div>
						 
						
                     
                          <div class="row">
                            <div class="col-md-12">
                              <hr>
                           
                            </div>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                              <!-- <i class="fa fa-user-md"></i>  -->Update
                            </button>
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

<script>
      var input = document.getElementById('cityz');
      var autocomplete = new google.maps.places.Autocomplete(input);
 </script>

</html>
