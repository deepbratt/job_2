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
	background:url("<?php echo base_url();?>images/banner_bg.jpg") no-repeat;
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

    <div class="container results-container">
        <section>
          <div class="container">
            
            <div class="row">
      		    <div class="col-md-3"></div>
                   <div class="col-md-6">
                      <?php
                        if($this->session->flashdata('password_failed')){
                      ?>
                        <div class="alert alert-danger" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('password_failed');?></strong> </div>
                      <?php
                        }
                      ?>
                      <?php
                        if($this->session->flashdata('log')){
                      ?>
                        <div class="alert alert-danger" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('log');?></strong> </div>
                      <?php
                        }
                      ?>

                      <?php
                        if($this->session->flashdata('logouts')){
                      ?>
                        <div class="alert alert-success" style="margin-top:10px;text-align:center;">
                          <strong><?php echo $this->session->flashdata('logouts');?></strong> 
                        </div>
                      <?php
                        }
                      ?>

                      <div class="box" style="background:#fafafa;">
                        <form action="<?php echo base_url();?>Login/login_user" method="post">
                          <div class="form-group">
                               <label for="email">Email</label>
          					           <input id="email" type="email" class="form-control" name="email" required="true">
          				        </div>
          				        <div class="form-group" name="email" style="margin-top:10px;" required="true">
          					           <label for="password">Password</label></br>
          					           <input id="password" name="password" type="password" class="form-control">
          			          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary"><!-- <i class="fa fa-sign-in"> --></i> Log in</button>
                          </div>
          		          </form>
                      </div>
                  </div> 
      		        <div class="col-md-3"></div>
              </div>
          </div>
        </section>

    </div>
  <?php
		$this->load->view("common/footer");
	?> 
</html>
