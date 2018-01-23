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
	.job_title{
	color: #333;
    font-size: 20px;
    line-height: 33px;
    font-weight: 500;
	}
	.job_search{
	padding-top: 0px;
    padding-bottom: 25px;
	}
	.borderfull-width {
    border: solid 1px #e1e1e1;
    position: relative;
    overflow: hidden;
    top: 15px;
    margin-bottom: 35px;
	}
	.page-heading {
    padding-bottom: 20px;
	}
    overflow: hidden;
	.page-heading {
    padding-bottom: 20px;
    overflow: hidden;
	}
	.category{
	overflow:hidden;
	}
	.col-md-11 {
    width: 91.66666667%;
	}
	.col-md-1 {
    width:  8.33333333%;
	}
	.p-r {
    padding-right: 0px !important;

	}
	.p-l {
    padding-left: 0px !important;
	}
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
	background:url('images/SB-O-WritingJobDescriptions-Hero-1.jpg') no-repeat left top/cover;
    border-bottom: solid 1px #f2f2f2;
    padding: 55px 0px;
    width: 100%;
	}
	.page_listing {
    border: solid 1px #e1e1e1;
    overflow: hidden;
    border-bottom: 0px;
	.candidate .sorting_content:hover {
    border: solid 1px #017583;
	}
	.sorting_content {
    padding: 25px 15px 15px;
    overflow: hidden;
	}
	.candidate .sorting_content {
    border: solid 1px transparent;
    border-bottom: solid 1px #e1e1e1;
	}
	.text-shorting h1 {

	}
	.overflow {
   
	}
	ul.unstyled {

	}
	.contact_details span {
    display: block;
    padding-bottom: 8px;
    font-size: 13px;
    color: #7d7d7d;
    }
   .filter p, .bottom_text p {
    padding-top: 3px;
    color: #7d7d7d;
    font-size: 13px;
    }
   .p-l {
   
   }
	.bottom_text {
	overflow: hidden;
	}
	.mn-shdcmmn {
    box-shadow: 0px 0px 3px #bfbfbf;
    background: #fff;
    margin-bottom: 30px;
}


	</style>
	<style>

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
      <p style="margin-bottom:20px;"> </p>

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
      <div class="row job-results-row" style="margin-bottom:40px;">
        <div class="col-sm-12 reset-to-row equal-height">
			
		 
	<div class="col-md-3">
  <div class="mn-shdcmmn" id="u_info">
    <div id="ProfileVisibility_dom">
      <div data-reactroot="" class="mn-shdcmmn">
        <div class="userinfo_block">
       
          <div class="uimg hidden-sm hidden-xs">
            <a href="#" rel="tooltip" data-toggle="modal" data-original-title="" title="">
              <img src="<?php echo base_url();?>uploads/<?php echo $user_details->profile_picture;?>">
            </a>
          </div>
          <div class="u_name hidden-sm hidden-xs" id="f_n">
            <!-- react-text: 8 --><?php echo ucfirst($user_details->first_name);?>
            <!-- /react-text -->
            <!-- react-text: 9 --> 
            <!-- /react-text -->
            <!-- react-text: 10 --><?php echo ucfirst($user_details->last_name);?>
            <!-- /react-text -->
          </div>
          <div class="u_name small visible-sm visible-xs">
            <!-- react-text: 12 --><?php echo ucfirst($user_details->first_name);?>
            <!-- /react-text -->
            <!-- react-text: 13 --> 
            <!-- /react-text -->
            <!-- react-text: 14 --><?php echo ucfirst($user_details->last_name);?>
            <!-- /react-text -->
            <!-- react-text: 15 --> 
            <!-- /react-text -->
          </div>
          <div class="uotherdetails"> <?php echo $user_details->address;?>
          </div>
        </div>
        <div class="usr_cntd">
          <div class="cntd_item mob">
            <!-- react-text: 19 --> <?php echo $user_details->phone;?>
            <!-- /react-text -->
    
          </div>
          <div class="cntd_item email">
        <?php echo $user_details->email;?>

          </div>
        </div>
        <div class="hidden-sm hidden-xs">
    
          <a href="<?php echo base_url();?>edit_setting/fetch_setting/" id="u_resume" class="usr_pfcopt" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit">
            <!-- react-text: 39 -->Settings
            <!-- /react-text -->
            <div class="btn btn-link edit_btn">
            </div>
          </a>
          <a href="<?php echo base_url();?>post_resume/fetch_data/" id="edit_u_skills" class="usr_pfcopt" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit">
            <!-- react-text: 42 --> Edit Profile
            <!-- /react-text -->
            <div class="btn btn-link edit_btn">
            </div>
          </a>
 
     
          <a href="<?php echo base_url();?>change_password/" id="edit_u_odt" class="usr_pfcopt" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit">
            <!-- react-text: 57 --> Change Password
            <!-- /react-text -->
            <div class="btn btn-link edit_btn">
            </div>
          </a>
          <div class="u_lastup">Last Updated:  2nd May 2014
          </div>
        </div>
        <div class="modal fade" id="update_info" tabindex="-1" role="dialog" aria-labelledby="update info modal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" id="closeInfoPopupBtn" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x
                  </span>
                </button>
                <h4 class="modal-title" id="update_infoLabel" style="text-align: center;">Add/Edit Profile Photo
                </h4>
              </div>
              <iframe id="ifr" class="col-sm-12 mrgnbtm nopadding" src="http://my.monsterindia.com/seeker_images_upload_new.html?p=viewresume&amp;uid=52443995&amp;imgpath=http://media.monsterindia.com/monster_2012/boy_100x100.jpg " width="100%" height="440" scrolling="no" frameborder="0">
              </iframe>
            </div>
          </div>
        </div>
        <div class="modal fade" id="mob_verify" tabindex="-1" role="dialog" aria-labelledby="mobile verification popup">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" id="mobVerifyClose" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    <button type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">X
                      </span>
                    </button>
                  </span>
                </button>
                <h4 class="modal-title medit_title" id="mveri_boxlabel">Mobile Verification
                </h4>
                <h4 class="modal-title medit_title collapse" id="medit_boxlabel">Update Mobile Number
                </h4>
              </div>
              <div class="alert alert-success" style="display: none;">
              </div>
              <div class="modal-body text-center mobile_edit_pop" id="mveri_box">
                <div class="t28 mrgnbtm">You have not verified your
                </div>
                <div class="t20 mrgnbtm">
                  <!-- react-text: 82 -->Mobile Number 
                  <!-- /react-text -->
                  <span class="orange">91-8981695676
                  </span>
                </div>
                <div class="medit_txt mrgnbtm">
                  <!-- react-text: 85 -->To edit mobile number 
                  <!-- /react-text -->
                  <a href="#mobEdit" class="green mob_modal_trigger" data-mid="medit_box">Click Here
                  </a>
                </div>
                <div class="otp mrgnbtm">
                  <!-- react-text: 88 -->Send me an OTP on my mobile number: "
                  <!-- /react-text -->
                  <span class="black">91-8981695676
                  </span>
                  <!-- react-text: 90 -->"
                  <!-- /react-text -->
                </div>
                <a href="#" class="btn otp_btn mrgnbtm open_secondpop" id="gen_otp">Generate OTP
                </a>
                <div class="or_wrap mrgnbtm">
                  <div class="or_text">Or
                  </div>
                </div>
                <form>
                  <div class="vcodewrap">
                    <input type="text" class="form-control" placeholder="Enter Verification Code" id="verifycode">
                    <p class="help-block text-left">We have sent you the OTP verification code via SMS
                    </p>
                    <input type="button" class="btn save_btn" value="Verify Now" id="ver_now">
                  </div>
                </form>
              </div>
              <div class="modal-body text-center collapse mobile_edit_pop" id="medit_box">
                <div class="t28 mrgnbtm">Mobile Number
                </div>
                <form>
                  <div class="form-group mx275 clearfix">
                    <input type="text" class="form-control req" placeholder="ISD" maxlength="3" value="" style="width: 60px; float: left; margin-right: 15px;">
                    <input type="text" class="form-control req" placeholder="Enter Mobile Number" maxlength="16" value="91-8981695676" style="width: 196px; float: left;">
                  </div>
                  <div class="text-center">
                    <input type="button" class="btn save_btn mob_modal_trigger" data-mid="mveri_box" value="Submit" maxlength="16">
                    <a href="#" type="button" class="btn cancel_btn" data-dismiss="modal" aria-label="cancel">Cancel
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="email_verify" tabindex="-1" role="dialog" aria-labelledby="email verify popup">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x
                  </span>
                </button>
                <h4 class="modal-title" id="email_verifyLabel">Verify E-mail Address
                </h4>
              </div>
              <div class="modal-body">
                <div class="alert alert-info nopadd" role="alert" style="display: none;">
                  <!-- react-text: 117 -->
                  <!-- /react-text -->
                  <span class="f500">himadrimajumder8@gmail.com.
                  </span>
                </div>
                <div class="t20">Instructions
                </div>
                <div class="tsmall mrgnbtm">To verify your E-mail address:
                </div>
                <ul class="list_check">
                  <li>Click on 'Verify Email' to get the verification link in your inbox.
                  </li>
                  <li>Go to your inbox and to verify your E-mail address, click on the link in the verification E-mail. If you do not find the verification mail in your inbox, please check your spam folder.
                  </li>
                  <li>Confirming your E-mail address ensures you continue receiving all communications and job alerts from Monster.com
                  </li>
                  <li>Verifying your E-mail address confirms that you are the owner of your account on Monster.com
                  </li>
                </ul>
                <div class="tsmall mrgnbtm">Adding Secondary E-mail:
                </div>
                <ul class="list_check">
                  <li>Primary E-mail address cannot be changed.
                  </li>
                  <li>You can add a max. of 1 secondary E-mail address.
                  </li>
                </ul>
                <div class="t20 mrgnbtm">A verified E-mail address:
                </div>
                <ul class="list_check">
                  <li>Establishes that you own your account on Monster.
                  </li>
                  <li>Enhances the integrity of your profile.
                  </li>
                  <li>Ensure more communications &amp; jobs as Employers prefer connecting with a verified E-mail address.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="myChangeemail" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x
                </button>
                <h4 class="modal-title">Change E-mail Address
                </h4>
              </div>
              <div class="modal-body">
                <div class="alert alert-success" style="display: none;">
                </div>
                <h5 style="position: relative;">
                  <!-- react-text: 144 -->Primary Address
                  <!-- /react-text -->
                  <div class="cntd_status">
                    <div class="pull-left vrfd">
                      <span>Verified
                      </span>
                    </div>
                  </div>
                </h5>
                <div>
                  <p href="#">himadrimajumder8@gmail.com
                  </p>
                  <br>
                </div>
                <h5>Secondary Address 
                </h5>
                <p style="display: none;">
                  <!-- react-text: 153 -->   |  
                  <!-- /react-text -->
                  <a href="#"> Edit 
                  </a>
                  <!-- react-text: 155 -->   |   
                  <!-- /react-text -->
                  <a href="#">Verify Email
                  </a>
                  <!-- react-text: 157 -->   |   
                  <!-- /react-text -->
                  <a href="#">Remove 
                  </a>
                </p>
                <div class="vcodewrap" style="display: none;">
                  <input type="text" id="sec_email" class="form-control" placeholder="Edit Secondary Email" value="">
                  <input type="button" class="btn save_btn" value="Update">
                </div>
                <div class="vcodewrap" style="display: block;">
                  <input type="text" class="form-control" placeholder="New Secondary Email">
                  <input type="button" class="btn save_btn" value="Add">
                </div>
                <br>
                <div>
                  <div class="orange">
                    <strong>Instructions:
                    </strong>
                  </div>
                  <br>
                  <div>
                    <strong>To verify your E-mail address:
                    </strong>
                    <ul>
                      <li>Click on 'Verify Email' to get the verification link in your inbox.
                      </li>
                      <li>Go to your inbox and to verify your E-mail address, click on the link in the verification E-mail. If you do not find the verification mail in your inbox, please check your spam folder.
                      </li>
                      <li>Confirming your E-mail address ensures you continue receiving all communications and job alerts from Monster.com .
                      </li>
                      <li>Verifying your E-mail address confirms that you are the owner of your account on Monster.com .
                      </li>
                    </ul>
                  </div>
                  <div>
                    <strong>Adding Secondary E-mail:
                    </strong>
                    <ul>
                      <li>Primary E-mail address cannot be changed.
                      </li>
                      <li>You can add a max. of 1 secondary E-mail address.
                      </li>
                    </ul>
                  </div>
                  <div>
                    <strong>A verified E-mail address: 
                    </strong>
                  </div>
                  <div>
                    <ul>
                      <li>Establishes that you own your account on Monster.
                      </li>
                      <li>Enhances the integrity of your profile.
                      </li>
                      <li>Ensure more communications &amp; jobs as Employers prefer connecting wth a verified E-mail address.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="u_lastup">Last updated:  2nd May 2014</div>-->
  </div>

</div>
<div class="col-md-9">
  <div class="mn-shdcmmn" id="u_resume">
    <div id="react_resumes">
      <div data-reactroot="" class="mn-shdcmmn" id="u_resume">
        <div class="resume_mainwrap active" id="resumeTop">
          <div class="job_optmob visible-xs" data-id="res0">
            <span>
            </span>
            <!-- react-text: 5 --> 
            <!-- /react-text -->
            <span class="cross">
            </span>
            <!-- react-text: 7 --> 
            <!-- /react-text -->
            <span>
            </span>
            <!-- react-text: 9 --> 
            <!-- /react-text -->
          </div>
          <div class="resume_h clearfix">
            <!-- react-text: 11 --> 
            <!-- /react-text -->
            <span>Resume Title:
            </span>
            <div class="r_txt">resume of <?php echo ucfirst($user_details->first_name);?> <?php echo ucfirst($user_details->last_name);?>
            </div>
          </div>
          <div class="res_opts" id="res0">
            <div class="row">
              <div class="col-sm-4">
                <div class="res_oh">
                  <div class="res_ohh">Resume File : 
                  </div>
                  <a href="<?php echo base_url();?>uploads/<?php echo $user_details->resume_file;?>" class="res_ohlnk"><?php echo $user_details->resume_file;?>
                  </a>
                  <!-- react-text: 20 --> 
                  <!-- /react-text -->
                </div>
              </div>
              <div class="col-sm-8 clearfix">
                <div class="pull-right rop_ico_block">
                  <!-- react-text: 23 --> 
                  <!-- /react-text -->
                 
                  <!-- react-text: 25 --> 
                  <!-- /react-text -->
               
                  <!-- react-text: 29 --> 
                  <!-- /react-text -->
                  
                  <div class="pull-left rop_stbox">
                    <a href="#edit_resume" class="rop_ico ico2 pull-left" data-toggle="modal">
                    <!-- react-text: 27 -->Edit
                    <!-- /react-text -->
                    <!-- react-text: 28 --> Resume
                    <!-- /react-text -->
                  </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="otherresume">
        </div>
        <div class="rop_morebtns text-right">
          <div class="">
          </div>
 
        </div>
        <div class="modal fade" id="preview_resume" tabindex="-1" role="dialog" aria-labelledby="preview resume popup">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    <button type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">X
                      </span>
                    </button>
                  </span>
                </button>
                <h4 class="modal-title" id="preview_resumeLabel">Preview Resume
                </h4>
              </div>
              <div class="modal-body text-center">
                <img src="http://media.monsterindia.com/seeker_2014/seeker_responsive/images/mn-loading.gif">
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="edit_resume" tabindex="-1" role="dialog" aria-labelledby="edit resume popup">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_edit_resume_popup">
                  <span aria-hidden="true">
                    <button type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">X
                      </span>
                    </button>
                  </span>
                </button>
                <h4 class="modal-title" id="edit_resumeLabel">Update Your Resume
                </h4>
              </div>
              <div class="modal-body text-center">
                
             
                <form action ="<?php echo base_url();?>dashboard/edit_resume_file" enctype="multipart/form-data" class="job-add-form" name="ResumeUploadForm" id="ResumeUploadForm" method="POST">
                  <div class="mrgnbtm">
                    <span class="btn btn_purple btn-file mrgnlft">
                      <!-- react-text: 80 -->Choose File
                      <!-- /react-text -->
                      <input type="file" id="wordresume" name="resume_file">
                    </span>
                    <span class="orange_lnk">
                    </span>
                  </div>
                  <div class="mrgnbtm formatsupport">Supported Formats: DOC, DOCX, TXT, PDF, RTF &amp; Max. File size: 2MB
                  </div>
                  <div class="or_wrap mrgnbtm">
                    <div class="or_text">Or
                    </div>
                  </div>
                  <div class="text-center">
                    <input type="submit" class="btn save_btn" value="Submit">
                    <a href="#" type="button" class="btn cancel_btn" data-dismiss="modal" aria-label="cancel">Cancel
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="delete_resume" tabindex="-1" role="dialog" aria-labelledby="delete resume modal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    <button type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">X
                      </span>
                    </button>
                  </span>
                </button>
                <h4 class="modal-title" id="delete_resumeLabel">Delete Resume
                </h4>
              </div>
              <div class="modal-body">
                <div class="mrgnbtm">
                  <div class="alert alert-danger" role="alert">Are you sure you want to delete this resume?
                  </div>
                </div>
                <form action="view_resume.html" method="POST">
                  <div class="text-center">
                    <input type="hidden" name="action" value="DELETE">
                    <input type="hidden" name="resumeid" value="">
                    <input type="submit" class="btn save_btn" value="Delete">
                    <a href="#" type="button" class="btn cancel_btn" data-dismiss="modal" aria-label="cancel">Cancel
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="make_hidden" tabindex="-1" role="dialog" aria-labelledby="make resume hidden popup">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    <button type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">X
                      </span>
                    </button>
                  </span>
                </button>
                <h4 class="modal-title" id="make_hiddenLabel">Hide From Employers
                </h4>
              </div>
              <div class="modal-body text-center">
                <div class="t16 mrgnbtm20">
                  <!-- react-text: 123 -->You have chosen to make your resume non-searchable.
                  <!-- /react-text -->
                  <br>
                  <!-- react-text: 125 -->Are you sure about this?
                  <!-- /react-text -->
                </div>
                <div class="mrgnbtm20">
                  <!-- react-text: 127 -->New employers search the resume database every single day.
                  <!-- /react-text -->
                  <br>
                  <!-- react-text: 129 -->The right opportunity might be just around the corner.
                  <!-- /react-text -->
                </div>
                <div class="label_purple mrgnbtm20">If you still want to make your resume "hidden", please help us understand why.
                </div>
                <form action="make_not_searchable.html" method="POST" name="myform">
                  <input type="hidden" name="resumeid" value="51362055">
                  <div class="visible-inline makehiddenopwrap text-left">
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="checkbox checkbox-inline custom">
                          <!-- react-text: 137 --> 
                          <!-- /react-text -->
                          <input type="checkbox" id="h_op1" value="1" name="CheckBox0">
                          <label for="h_op1"> Write or copy/paste your resume
                          </label>
                          <!-- react-text: 140 --> 
                          <!-- /react-text -->
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox checkbox-inline custom">
                          <!-- react-text: 143 --> 
                          <!-- /react-text -->
                          <input type="checkbox" id="h_op2" value="2" name="CheckBox1">
                          <label for="h_op2"> I got a job using another method
                          </label>
                          <!-- react-text: 146 --> 
                          <!-- /react-text -->
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox checkbox-inline custom">
                          <!-- react-text: 149 --> 
                          <!-- /react-text -->
                          <input type="checkbox" id="h_op3" value="3" name="CheckBox2">
                          <label for="h_op3"> I get too many emails from the Company
                          </label>
                          <!-- react-text: 152 --> 
                          <!-- /react-text -->
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox checkbox-inline custom">
                          <!-- react-text: 155 --> 
                          <!-- /react-text -->
                          <input type="checkbox" id="h_op4" value="4" name="CheckBox3">
                          <label for="h_op4"> Emails I get from Monster are not relevant to me
                          </label>
                          <!-- react-text: 158 --> 
                          <!-- /react-text -->
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox checkbox-inline custom">
                          <!-- react-text: 161 --> 
                          <!-- /react-text -->
                          <input type="checkbox" id="h_op5" value="5" name="CheckBox4">
                          <label for="h_op5"> I'm concerned about the credibility of job postings on the internet
                          </label>
                          <!-- react-text: 164 --> 
                          <!-- /react-text -->
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox checkbox-inline custom">
                          <!-- react-text: 167 --> 
                          <!-- /react-text -->
                          <input type="checkbox" id="h_op6" value="6" name="CheckBox5">
                          <label for="h_op6"> I didn't realize that my resume was searchable
                          </label>
                          <!-- react-text: 170 --> 
                          <!-- /react-text -->
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox checkbox-inline custom">
                          <!-- react-text: 173 --> 
                          <!-- /react-text -->
                          <input type="checkbox" id="h_op7" value="7" name="CheckBox6">
                          <label for="h_op7">  Didn't intend to make my resume searchable
                          </label>
                          <!-- react-text: 176 --> 
                          <!-- /react-text -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <input type="submit" class="btn save_btn" value="Hide My Resume" name="nsrch">
                    <a href="#" type="button" class="btn cancel_btn" data-dismiss="modal" aria-label="cancel">Cancel
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="activate_resume" tabindex="-1" role="dialog" aria-labelledby="make active modal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    <button type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">X
                      </span>
                    </button>
                  </span>
                </button>
                <h4 class="modal-title" id="make_active_resumeLabel">Activating resume...
                </h4>
              </div>
              <div class="modal-body">
                <div class="mrgnbtm">
                  <div class="alert alert-success" role="alert">Please wait.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="it_skills_static2" class="mn-shdcmmn">
    <!--ID changed from original as it was conflicting with React and edit section was getting hidden-->
    <div id="skills_react">
      <div data-reactroot="">
      <div class="mn_phead ico1">Skills
    </div>
		<?php
			$skills =  explode(",",$user_details->skills);
			foreach($skills As $key)
			{
		?>
			<div class="mn_skillitem">
			  <div class="mnp_wrapinnr">
				<div class="row">
				  <div class="col-xs-8 col-sm-6">
					<div class="mn_skillh"><?php echo $key;?>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		<?php
			}
		?>
      </div>
    </div> 
  </div>


  <div class="mn-shdcmmn" id="u_edu">
    <div class="mn_phead ico4">Education
    </div>
    <div id="high_edu_static">
      <div data-reactroot="" id="edu_static">
        <div class="mn_skillitem">
          <div class="mnp_wrapinnr">
            <div class="row">
              <div class="col-xs-9">
                <div class="row">
                  <div class="col-md-5">
                    <div class="mn_hc">
                      <!-- react-text: 9 --><?php echo $user_details->education;?>
                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div> 
  </div>

  <div class="mn-shdcmmn" id="u_odt">
    <div id="react_other_details">
      <div data-reactroot="">
        <div class="mn_phead ico6">
          <!-- react-text: 3 -->Personal Info
          <!-- /react-text -->
         
        </div>
        <div class="mnp_wrapinnr" id="oth_d_static">
          <div>
            <div class="pdall15">
              <div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="mn_hc"><?php echo $user_details->first_name;?>
                </div>
                <div class="mn_htxt">First Name
                </div>
              </div>
              <div class="col-md-3">
                <div class="mn_hc"><?php echo $user_details->last_name;?>
                </div>
                <div class="mn_htxt">Last Name
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="mn_hc"><?php echo $user_details->relocate;?>
                </div>
                <div class="mn_htxt">Relocate
                </div>
              </div>
              <div class="col-md-5">
                <div class="mn_hc"><?php echo $user_details->travel_distance;?>km
                </div>
                <div class="mn_htxt">Travel Distance
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="mn_hc"><?php echo number_format($user_details->max_salary);?>$
                </div>
                <div class="mn_htxt">Desired Salary
                </div>
              </div>
              <div class="col-md-3">
                <div class="mn_hc"><?php echo $user_details->education;?>
                </div>
                <div class="mn_htxt">Education
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

      </div>
    </div>
	</div>
  <?php
    $this->load->view("common/footer");
  ?>
  <script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $('.nav-tabs a').on('shown.bs.tab', function(event){
        var x = $(event.target).text();         // active tab
        var y = $(event.relatedTarget).text();  // previous tab
        $(".act span").text(x);
        $(".prev span").text(y);
    });
});
</script>
</html>
