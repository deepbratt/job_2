<!DOCTYPE html>
<html lang="en">
  <head prefix="og: http://ogp.me/ns#">
    <title>Job Listing | Home 
    </title>
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
      .cont_advance{
          /*display: none;*/
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
      <p style="margin-bottom:20px;"> 
      </p>
      <div class="row job-results-row" style="margin-bottom:40px;">
        <div class="col-sm-12 reset-to-row equal-height">
	
    		<?php
    			$this->load->view("common/another_sidebar");
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
                  //print_r($resume_details);
                  foreach($resume_details as $data_val){
                      $skills = explode(",",$data_val->skills);
                      $resume_uploaded_date = date("M d Y",$data_val->date_posted);
                      $pic = $data_val->profile_picture;
                ?>
                <div class="page_listing candidate" style="border:1px  solid #e1e1e1;border-bottom:  1px solid #e1e1e1;">
                  <div class="sorting_content col-md-7" style=" padding: 25px 15px 15px;overflow: hidden;">
                    <div class="tab-image" style="float: left;text-align: center;margin-right: 20px;">
                      <img src="<?php echo base_url();?>uploads/<?php echo $data_val->profile_picture;?>" alt="" style="height:100px;" class="img-responsive">
                    </div>
                    <div class="overflow" style="overflow:hidden;">
                      <div class="text-shorting" style="font-size: 16px;color: #333;line-height: 30px;font-weight: 500;margin: 0px;">
                        <a href="<?php echo base_url();?>applicant_dashboard/<?php echo $data_val->user_id;?>">
                          <h1 style="font-size: 16px;color: #237fa5;line-height: 35px;font-weight: 700;margin-top:-10px;">
                            <u><?php echo ucfirst($data_val->first_name);?> <?php echo ucfirst($data_val->last_name);?></u>
                          </h1>
                        </a>
                        <ul class="unstyled" style="margin-top:-25px;padding: 0px;">
                          <li style="display: inline-block;padding: 0 50px 0 0;color: #7d7d7d;font-size: 13px;"> 
                            <?php 
                              $addr = ucfirst($data_val->address);
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
                      <p style="font-size: 12px;"> <?php echo $data_val->job_title;?> </p>
                      <p style="font-size: 12px;"> $<?php echo $data_val->max_salary;?> </p>
                      <p style="font-size: 12px;"> <?php echo $data_val->relocate;?> </p>
                      <p style="font-size: 12px;"> <?php echo $data_val->company_name;?> </p>
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
      var input = document.getElementById('cityz');
      var autocomplete = new google.maps.places.Autocomplete(input);

      function show_advance_fult(){
          $( ".cont_advance" ).slideToggle( "slow", function() {
            // Animation complete.
          });
      }
    </script>
    </html>
