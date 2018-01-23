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
        background:url('<?php echo base_url();?>images/employer-banner.jpg');
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
        .pagination ul{
            list-style: none !important;
        }
        .pagination ul li{
            float:left;
            list-style: none;
        }
        .anchor_class{
          background:#fafafa;border:1px solid #237fa5;color:#237fa5 !important;
        }


    </style>
    <style>
      .sidebar-text{
        font-size: 13px;
        color: #333;
        font-weight: 500;
      }
      .page-link{
        background:#fafafa !important;
        border:1px solid #237fa5 !important;
        color:#237fa5 !important;
        margin:3px !important;
        border-radius: 5px !important;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVEqoCsKgUMmAcDVX9OAwVMDewLI6yOAQ&sensor=false&libraries=places&language=en"></script>
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
        
      <div class="row job-results-row" style="margin-bottom:40px;">
        <div class="col-sm-12 reset-to-row equal-height">
         
		  <?php
			$this->load->view("common/left_sidebar");
		?>
          <div class="col-sm-9 job-results clearfix" style="background:none;">
            <div class="row">
              <div class="col-xs-12 job-results clearfix" style="background:none;">
                <div class="col-md-7 col-sm-7 p-l">
                  <div class="page-heading">
                    <p><?php echo $result_count;?></p>
                  </div>
                </div>  


                <div class="clearfix"></div>
                <?php
                  foreach ($job_details as $fetch_job) { 
                ?>
                <div class="job new " id="77913552">
                  <div class="row">
                      <div class="card-body col-md-12">
                        <div class="col-md-2">
                          <a href="<?php echo base_url();?>job_details/<?php echo $fetch_job->job_id;?>" title="<?php echo (($fetch_job->name_status == 'yes')?'Company Name Hidden':$fetch_job->company_name);?>"><img src="<?php echo base_url();?>uploads/<?php echo $fetch_job->company_logo;?>" title="<?php echo (($fetch_job->name_status == 'yes')?'Company Name Hidden':$fetch_job->company_name);?>" style="width:100%;margin-top:25px;"></a>
                        </div>
                        <div class="col-md-10" style="">
                        <h2 class="card-title" style=""><a href="<?php echo base_url();?>job_details/<?php echo $fetch_job->job_id;?>" style="color:black !important;" title="<?php echo (($fetch_job->name_status == 'yes')?'Company Name Hidden':$fetch_job->company_name);?>"><?php echo ucfirst($fetch_job->job_title);?></a></h2>
                        <p class="card-text " style=""> Posted on <?php echo date("M , d Y",$fetch_job->date);?> , <b><?php echo ucfirst($fetch_job->location);?></b></p>
                        <p class="card-text"><?php echo substr($fetch_job->job_description,0,220);?>...</p>
                        </div>
                      </div>
                  </div>
                </div>


                <?php
                }
                ?>    

        
                <div class="row" >
                  <div class="col-xs-12">
                    <div class="results-footer-links-container">
                      <?php echo $links;?>
                      <div id="mobileFilters">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12" id="desktopRelatedJobs">
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
  var input = document.getElementById('cityz');
  var autocomplete = new google.maps.places.Autocomplete(input);
  </script>
</html>
