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
      .panel.with-nav-tabs .panel-heading{
        padding: 5px 5px 0 5px;
      }
      .panel.with-nav-tabs .nav-tabs{
        border-bottom: none;
      }
      .panel.with-nav-tabs .nav-justified{
        margin-bottom: -1px;
      }
      /********************************************************************/
      /*** PANEL DEFAULT ***/
      .with-nav-tabs.panel-default .nav-tabs > li > a,
      .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
        color: #777;
      }
      .with-nav-tabs.panel-default .nav-tabs > .open > a,
      .with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
      .with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
      .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
        color: #777;
        background-color: #ddd;
        border-color: transparent;
      }
      .with-nav-tabs.panel-default .nav-tabs > li.active > a,
      .with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
      .with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
        color: #555;
        background-color: #fff;
        border-color: #ddd;
        border-bottom-color: transparent;
      }
      .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
        background-color: #f5f5f5;
        border-color: #ddd;
      }
      .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
        color: #777;
      }
      .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
      .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
        background-color: #ddd;
      }
      .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
      .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
      .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
        color: #fff;
        background-color: #555;
      }
      /********************************************************************/
      /*** PANEL PRIMARY ***/
      .with-nav-tabs.panel-primary .nav-tabs > li > a,
      .with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
        color: #fff;
      }
      .with-nav-tabs.panel-primary .nav-tabs > .open > a,
      .with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
      .with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
      .with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
        color: #fff;
        background-color: #3071a9;
        border-color: transparent;
      }
      .with-nav-tabs.panel-primary .nav-tabs > li.active > a,
      .with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
      .with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
        color: #428bca;
        background-color: #fff;
        border-color: #428bca;
        border-bottom-color: transparent;
      }
      .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
        background-color: #428bca;
        border-color: #3071a9;
      }
      .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
        color: #fff;
      }
      .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
      .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
        background-color: #3071a9;
      }
      .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
      .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
      .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
        background-color: #4a9fe9;
      }
      /********************************************************************/
      /*** PANEL SUCCESS ***/
      .with-nav-tabs.panel-success .nav-tabs > li > a,
      .with-nav-tabs.panel-success .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-success .nav-tabs > li > a:focus {
        color: #3c763d;
      }
      .with-nav-tabs.panel-success .nav-tabs > .open > a,
      .with-nav-tabs.panel-success .nav-tabs > .open > a:hover,
      .with-nav-tabs.panel-success .nav-tabs > .open > a:focus,
      .with-nav-tabs.panel-success .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-success .nav-tabs > li > a:focus {
        color: #3c763d;
        background-color: #d6e9c6;
        border-color: transparent;
      }
      .with-nav-tabs.panel-success .nav-tabs > li.active > a,
      .with-nav-tabs.panel-success .nav-tabs > li.active > a:hover,
      .with-nav-tabs.panel-success .nav-tabs > li.active > a:focus {
        color: #3c763d;
        background-color: #fff;
        border-color: #d6e9c6;
        border-bottom-color: transparent;
      }
      .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu {
        background-color: #dff0d8;
        border-color: #d6e9c6;
      }
      .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a {
        color: #3c763d;
      }
      .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
      .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
        background-color: #d6e9c6;
      }
      .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a,
      .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
      .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
        color: #fff;
        background-color: #3c763d;
      }
      /********************************************************************/
      /*** PANEL INFO ***/
      .with-nav-tabs.panel-info .nav-tabs > li > a,
      .with-nav-tabs.panel-info .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-info .nav-tabs > li > a:focus {
        color: #31708f;
      }
      .with-nav-tabs.panel-info .nav-tabs > .open > a,
      .with-nav-tabs.panel-info .nav-tabs > .open > a:hover,
      .with-nav-tabs.panel-info .nav-tabs > .open > a:focus,
      .with-nav-tabs.panel-info .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-info .nav-tabs > li > a:focus {
        color: #31708f;
        background-color: #bce8f1;
        border-color: transparent;
      }
      .with-nav-tabs.panel-info .nav-tabs > li.active > a,
      .with-nav-tabs.panel-info .nav-tabs > li.active > a:hover,
      .with-nav-tabs.panel-info .nav-tabs > li.active > a:focus {
        color: #31708f;
        background-color: #fff;
        border-color: #bce8f1;
        border-bottom-color: transparent;
      }
      .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu {
        background-color: #d9edf7;
        border-color: #bce8f1;
      }
      .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a {
        color: #31708f;
      }
      .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
      .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
        background-color: #bce8f1;
      }
      .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a,
      .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
      .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
        color: #fff;
        background-color: #31708f;
      }
      /********************************************************************/
      /*** PANEL WARNING ***/
      .with-nav-tabs.panel-warning .nav-tabs > li > a,
      .with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
        color: #8a6d3b;
      }
      .with-nav-tabs.panel-warning .nav-tabs > .open > a,
      .with-nav-tabs.panel-warning .nav-tabs > .open > a:hover,
      .with-nav-tabs.panel-warning .nav-tabs > .open > a:focus,
      .with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
        color: #8a6d3b;
        background-color: #faebcc;
        border-color: transparent;
      }
      .with-nav-tabs.panel-warning .nav-tabs > li.active > a,
      .with-nav-tabs.panel-warning .nav-tabs > li.active > a:hover,
      .with-nav-tabs.panel-warning .nav-tabs > li.active > a:focus {
        color: #8a6d3b;
        background-color: #fff;
        border-color: #faebcc;
        border-bottom-color: transparent;
      }
      .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu {
        background-color: #fcf8e3;
        border-color: #faebcc;
      }
      .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a {
        color: #8a6d3b;
      }
      .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
      .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
        background-color: #faebcc;
      }
      .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a,
      .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
      .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
        color: #fff;
        background-color: #8a6d3b;
      }
      /********************************************************************/
      /*** PANEL DANGER ***/
      .with-nav-tabs.panel-danger .nav-tabs > li > a,
      .with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
        color: #a94442;
      }
      .with-nav-tabs.panel-danger .nav-tabs > .open > a,
      .with-nav-tabs.panel-danger .nav-tabs > .open > a:hover,
      .with-nav-tabs.panel-danger .nav-tabs > .open > a:focus,
      .with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
      .with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
        color: #a94442;
        background-color: #ebccd1;
        border-color: transparent;
      }
      .with-nav-tabs.panel-danger .nav-tabs > li.active > a,
      .with-nav-tabs.panel-danger .nav-tabs > li.active > a:hover,
      .with-nav-tabs.panel-danger .nav-tabs > li.active > a:focus {
        color: #a94442;
        background-color: #fff;
        border-color: #ebccd1;
        border-bottom-color: transparent;
      }
      .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu {
        background-color: #f2dede;
        /* bg color */
        border-color: #ebccd1;
        /* border color */
      }
      .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a {
        color: #a94442;
        /* normal text color */  
      }
      .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
      .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
        background-color: #ebccd1;
        /* hover bg color */
      }
      .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a,
      .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
      .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
        color: #fff;
        /* active text color */
        background-color: #a94442;
        /* active bg color */
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
		<?php
		
			if($this->session->flashdata('failed')){
		?>
			<div class="alert alert-danger" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
		<?php
			}
		if($this->session->flashdata('password_failed')){
		?>
			<div class="alert alert-danger" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('password_failed');?></strong> </div>
		<?php
		}
		if($this->session->flashdata('email_failed')){
		?>
		<div class="alert alert-danger" style="margin-top:10px;text-align:center;"> <strong><?php echo $this->session->flashdata('email_failed');?></strong> </div>
		<?php
		}
		?>
      <!--<div class="row">
<div class="col-sm-12">
<ol class="breadcrumb small">
<li>
<a href="#" style="color:black;">Jobs
</a>
<span class="separator">
</span>
</li>
<li>
<a href="#" style="color:black;">IT
</a>
<span class="separator">
</span>
</li>
<li style="color:black;">PHP Developer
</li>
</ol>
</div>
</div>-->
      <p style="margin-bottom:20px;"> 
      </p>
      <section style="padding-top:10px !important;">
        <div class="container">
          <div class="row" >
            <div class="col-md-12">
                  <div class="panel with-nav-tabs panel-primary" style="border:1px solid #428bca;margin:0px !important;padding:0px !important;">
                    <div class="panel-heading" style="background:#428bca;margin:0px !important;padding:0px !important;border:none;border:1px solid #428bca;">
                      <ul class="nav nav-tabs" style="margin:0px !important;padding:0px !important;border:none;">
                        <li class="active col-md-6" style="margin:0px !important;padding:0px !important;">
                          <a href="#tab1primary" style="border:none;text-align:center;" data-toggle="tab">REGISTER AS A EMPLOYEE
                          </a>
                        </li>
                        <li class="col-md-6" style="margin:0px !important;padding:0px !important;">
                          <a href="#tab2primary" style="border:none;text-align:center;" data-toggle="tab">REGISTER AS A EMPLOYER
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="panel-body"  style="background:#fafafa;">
                      <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
						<form action="<?php echo base_url();?>register/add_employee" method="post">
                          <div class="form-group col-md-6">
                            <label for="name">First Name
                            </label>
                            <input id="name" type="text" name="f_name" class="form-control" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="name">Last Name
                            </label>
                            <input id="name" type="text" name="l_name" class="form-control" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="email">Email
                            </label>
                            <input id="email" type="text" name="email" class="form-control" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="name">Phone Number
                            </label>
                            <input id="name" type="text" name="phone" class="form-control" required>
                          </div>
						 
                          <div class="form-group col-md-6">
                            <label for="name">Postcode
                            </label>
                            <input id="name" type="text" name="postcode" class="form-control" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="password">Password
                            </label>
                            <input id="password" type="password" name="password" class="form-control" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="password">Re Enter Password
                            </label>
                            <input id="password" type="password" name="con_password" class="form-control" required>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <hr>
                              <div class="checkbox text-center">
                                <label>
                                  <input type="checkbox" required>By registering you agree to ResumeBroswe.com privacy policy 
                                  <a href="#" style="color:blue;">Terms and conditions
                                  </a>.
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                              <!-- <i class="fa fa-user-md"></i>  -->Signup
                            </button>
                          </div>
						  </form>
                        </div>
                        <div class="tab-pane fade" id="tab2primary">
						<form action="<?php echo base_url();?>register/add_employeer" method="post">
                          <div class="form-group col-md-6">
                            <label for="name">First Name
                            </label>
                            <input id="name" type="text" class="form-control" name="f_name" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="name">Last Name
                            </label>
                            <input id="name" type="text" class="form-control" name="l_name" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="email">Email
                            </label>
                            <input id="email" type="text" class="form-control" name="email" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="name">Phone Number
                            </label>
                            <input id="name" type="text" class="form-control" name="phone" required>
                          </div>
						   <p>ACCOUNT PERSON</p>

						     <div class="form-group col-md-6">
                            <label for="name">First Name
                            </label>
                            <input id="name" type="text" class="form-control" name="acc_fname" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="name">Last Name
                            </label>
                            <input id="name" type="text" class="form-control" name="acc_lname" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="name">Comapny Name
                            </label>
                            <input id="name" type="text" class="form-control" name="company_name" required>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="password">Address
                            </label>
							<textarea name="address" class="form-control" required></textarea>
                            
                          </div>
						     <div class="form-group col-md-6">
                            <label for="password">Password
                            </label>
                            <input id="password" type="password" name="password" class="form-control" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="password">Re Enter Password
                            </label>
                            <input id="password" type="password" name="con_password" class="form-control" required>
                          </div>
						  <div class="form-group col-md-6">
                            <label for="password">Postcode
                            </label>
                            <input id="password" type="password" class="form-control" name="post_code" required>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <hr>
                              <div class="checkbox text-center">
                                <label>
                                  <input type="checkbox" required>By registering you agree to ResumeBroswe.com privacy policy 
                                  <a href="#" style="color:blue;">Terms and conditions
                                  </a>.
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                              <!-- <i class="fa fa-user-md"></i>  -->Signup
                            </button>
                          </div>
						  </form>
                        </div>
                      </div>
                    </div>
                  </div>
               
             
            </div>
            <!-- <div class="col-md-6">
<div class="box">
<h3 class="heading">Login</h3>
<p class="lead">Already our customer?</p>
<p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
<hr>
<form action="client-dashboard.html" method="post">
<div class="form-group">
<label for="email">Email</label>
</div>
<input id="email" type="text" class="form-control">
</form>
<div class="form-group">
<label for="password">Password</label>
<input id="password" type="password" class="form-control">
</div>
<div class="text-center">
<button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
</div>
</div>
</div> -->
          </div>
        </div>
      </section>
    </div>
    <?php
		$this->load->view("common/footer");
	?> 
    </html>
