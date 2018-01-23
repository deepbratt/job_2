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
					<form action="<?php echo base_url();?>edit_employeer/edit_employeer_edit" method="post" enctype="multipart/form-data" class="job-add-form">
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
                            <label for="name">First Name
                            </label>
                            <input id="name" type="text" class="form-control" name="f_name" value="<?php echo $normal_details->first_name;?>" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="name">Last Name
                            </label>
                            <input id="name" type="text" class="form-control" name="l_name" value="<?php echo $normal_details->first_name;?>" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="email">Email
                            </label>
                            <input id="email" type="text" class="form-control" name="email" value="<?php echo $normal_details->email;?>" required>
                          </div>
						    <div class="form-group col-md-12">
                            <label for="password">Postcode
                            </label>
                            <input id="password" type="text" class="form-control" value="<?php echo $normal_details->postcode;?>"  name="post_code" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="name">Phone Number
                            </label>
                            <input id="name" type="text" class="form-control" name="phone" value="<?php echo $normal_details->phone;?>" required>
                          </div>
						   

						     <div class="form-group col-md-6">
                            <label for="name">First Name
                            </label>
                            <input id="name" type="text" class="form-control" name="acc_fname" value="<?php echo $normal_details->account_first_name;?>" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="name">Last Name
                            </label>
                            <input id="name" type="text" class="form-control" name="acc_lname" value="<?php echo $normal_details->account_last_name;?>" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="name">Comapny Name
                            </label>
                            <input id="name" type="text" class="form-control" name="company_name" value="<?php echo $normal_details->comapny_name;?>" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="password">Address
                            </label>
							<textarea name="address" class="form-control" required><?php echo $normal_details->address;?></textarea>
                            
                          </div>
					
						
						<div class="form-group col-md-12">
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                              <!-- <i class="fa fa-user-md"></i>  -->Update
                            </button>
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
