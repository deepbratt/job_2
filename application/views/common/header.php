<?php
$page_name = $page_nm;
?>
<style>
.reg_etxt:hover{
	color:#003A83;
	font-weight:800;
}
.abc{
background:white;
}
</style>
<header class="master-row header-row" style="background:white;height:100px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-9">
                <div class="logo col-md-6">
                    <a title="#" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo-light.png" style="height:60px;"></a>
                </div>
            </div>
            <div class="col-xs-3" id="top-recruiter-links" style="margin-top:30px;float:right;">

                    <?php
                        if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
                            $userdata = $this->session->userdata['logged_in'];
                            $profile_picture = $userdata['profile_picture'];
                            $first_name = ucfirst($userdata['first_name']);
                            $last_name = ucfirst(substr($userdata['last_name'],0,1));
							
							if($userdata['user_type'] == 'employee')
							{
								$link = "dashboard";
							}
							else
							{
								$link = "employeer_dashboard";
							}

                    ?>
                        <a href="<?php echo base_url();?><?php echo $link;?>" style="color:black;padding:5px 10px;text-transform:capitalize  !important;border:1px solid black;float:right;border-radius: 7px !important;"><img src="<?php echo base_url();?>uploads/<?php echo $profile_picture;?>" style="height:30px;"> <?php echo $first_name;?> <?php echo $last_name;?>.</a>
                        <a href="<?php echo base_url();?>login/logout"style="color:black;padding:5px 10px;text-transform:capitalize  !important;float:right;margin-top:5px;"><img src="<?php echo base_url();?>images/if_logout_54231.png" style="height:18px;"> Logout </a>
                        
                    <?php
                        }else{
                    ?>
                        <a href="<?php echo base_url();?>register" style="color:black;padding:5px 10px;text-transform:capitalize  !important;border:1px solid black;float:right;border-radius: 7px !important;">REGISTER</a>
                        <a href="<?php echo base_url();?>login"style="color:black;padding:5px 10px;text-transform:capitalize  !important;float:right;"><img src="<?php echo base_url();?>images/if_102_111044.png" style="height:18px;"> LOGIN </a>
                    <?php
                        }

                    ?>
			</div>
		</div>
    </div>
</header>
<div class="master-row navigation" style="">
    <div id="navbar-mobile-recent-search-container" class="visible-xs col-xs-12">
        <div id="navbar-mobile-location-recent-search-container" class="recent-search">
        </div>
        <div id="navbar-mobile-keywords-recent-search-container" class="recent-search">
        </div>
    </div>
    <nav class="navbar navbar-default" >
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="reset-to-row">
                        <div class="navbar-header" id="navbar-header">
                            <button id="navbar-personalisation-toggle" type="button"
                                    data-target="#navbar-personalisation-links" data-toggle="collapse"
                                    data-tracking-toggle-open-event-description="Header_loggedin_open"
                                    data-tracking-toggle-close-event-description="Header_loggedin_closed"
                                    data-tracking-event-variables='{"eVar23":"$current_page"}'
                                    class="navbar-toggle navbar-always-on collapsed pull-right navbar-item signedin-icon auth toggle-tracking">
                                <span class="navbar-item-text"> </span>
                            </button>
							<?php 
									if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
										$userdata = $this->session->userdata['logged_in'];
										$user_type = $userdata['user_type'];
										if($user_type == 'employeer'){
									?>
    
                            <a href="<?php echo base_url();?>job_post" style="float:right;margin-top:15px;" class="btn-warning">
                                <span class="navbar-item-text-no-icon register-text" style="background:#ff9900;padding:10px 20px;border-radius: 7px !important;font-size:12px !important;">POST A JOB</span>
                            </a>
							<?php
										}
									}
							else
										{

							?>

							  <a href="<?php echo base_url();?>job_post" style="float:right;margin-top:15px;" class="btn-warning">
                                <span class="navbar-item-text-no-icon register-text" style="background:#ff9900;padding:10px 20px;border-radius: 7px !important;font-size:12px !important;">POST A JOB</span>
                            </a>
							<?php
										}
							?>
                            <span id="navbar-register-separator" class="navbar-toggle navbar-always-on collapsed pull-right navbar-item navbar-item-anchor hidden-xs hidden-sm navbar-separator"></span>

                            <button id="navbar-site-toggle" type="button"
                                    data-target="#navbar-site-links" data-toggle="collapse"
                                    data-tracking-toggle-open-event-description="Header_menu_open"
                                    data-tracking-toggle-close-event-description="Header_menu_closed"
                                    data-tracking-event-variables='{"eVar23":"$current_page"}'
                                    class="navbar-toggle navbar-always-on collapsed toggle-tracking visible-xs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>


                            <div id="navbar-desktop-site-links" class="hidden-xs">
                                <ul>
                            	    <li class="<?php echo(($page_name == 'home')?'abc':'');?>">
                                        <a class="navbar-item-anchor" href="<?php echo base_url();?>" style="font-size:13px !important;<?php echo(($page_name == 'home')?'color:black':'');?>">HOME</a>
                                    </li>
                                    <li class="<?php echo(($page_name == 'joblisting')?'abc':'');?>">
                                        <a class="navbar-item-anchor" href="<?php echo base_url();?>joblisting" style="font-size:13px !important;<?php echo(($page_name == 'joblisting')?'color:black':'');?>">JOBS SEARCH</a>
                                    </li>
									
									<?php 
									if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
										$userdata = $this->session->userdata['logged_in'];
										$user_type = $userdata['user_type'];
										if($user_type == 'employee'){
									?>
										<li class="<?php echo(($page_name == 'post_resume')?'abc':'');?>">
											<a href="<?php echo base_url();?>post_resume/fetch_data" style="font-size:13px !important;<?php echo(($page_name == 'post_resume')?'color:black':'');?>">POST RESUME</a>
										</li>
									<?php
										}
									}else{
									?>
										<li class="<?php echo(($page_name == 'post_resume')?'abc':'');?>">
											<a href="<?php echo base_url();?>post_resume" style="font-size:13px !important;<?php echo(($page_name == 'post_resume')?'color:black':'');?>">POST RESUME</a>
										</li>
									<?php
									}
									?>

									<?php 
									if(isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] != NULL){
										$userdata = $this->session->userdata['logged_in'];
										$user_type = $userdata['user_type'];
										if($user_type == 'employeer'){
									?>
										<li class="<?php echo(($page_name == 'job_post')?'abc':'');?>">
											<a class="navbar-item-anchor" style="font-size:13px !important;<?php echo(($page_name == 'job_post')?'color:black':'');?>" href="<?php echo base_url();?>job_post">POST A JOB</a>
										</li>
									<?php
										}
									}else{
									?>
										<li class="<?php echo(($page_name == 'job_post')?'abc':'');?>">
											<a class="navbar-item-anchor" style="font-size:13px !important;<?php echo(($page_name == 'job_post')?'color:black':'');?>" href="<?php echo base_url();?>job_post">POST A JOB</a>
										</li>
									<?php
									}
									?>
                            		<li class="<?php echo(($page_name == 'browse_candidate')?'abc':'');?>">
                                        <a class="navbar-item-anchor" style="font-size:13px !important;<?php echo(($page_name == 'browse_candidate')?'color:black':'');?>" href="<?php echo base_url();?>browse_candidate">RESUME BROWSE</a>
                                    </li>
                                </ul>
                            </div>

                            <a class="navbar-brand" href="/">
                                <div class="mobile-logo"></div>
                            </a>
                        </div>

                        <!--<div class="collapse navbar-collapse always-collapse tj-collapse-menu personalisation-collapse-menu" id="navbar-personalisation-links">
                            <ul class="nav navbar-nav">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">My profile</a></li>
                                <li><a href="#">My applications</a></li>
                                <li><a href="#">My CV</a></li>
                                <li><a href="#">My saved jobs</a><span class="jb-status badge saved-jobs-menu-pill"></span></li>
                                <li><a href="#">My job alerts</a></li>
                                <li class="signout"><a id="sign-out-link" href="#" class="signout-link">Sign out</a></li>
                            </ul>
                        </div>-->
                        

                        
                        <div class="collapse navbar-collapse always-collapse tj-collapse-menu sitelinks-collapse-menu" id="navbar-site-links">
                            <ul class="nav navbar-nav">
                               <li class="<?php echo(($page_name == 'home')?'abc':'');?>">
                                        <a class="navbar-item-anchor" href="<?php echo base_url();?>" style="font-size:13px !important;<?php echo(($page_name == 'home')?'color:black':'');?>">HOME</a>
                                </li>
                                <li class="<?php echo(($page_name == 'joblisting')?'abc':'');?>">
                                    <a class="navbar-item-anchor" href="<?php echo base_url();?>joblisting" style="font-size:13px !important;<?php echo(($page_name == 'joblisting')?'color:black':'');?>">JOBS SEARCH</a>
                                </li>
                                <li class="<?php echo(($page_name == 'post_resume')?'abc':'');?>">
                                    <a href="<?php echo base_url();?>post_resume" style="font-size:13px !important;<?php echo(($page_name == 'post_resume')?'color:black':'');?>">POST RESUME</a>
                                </li>
                                <li class="<?php echo(($page_name == 'job_post')?'abc':'');?>">
                                    <a class="navbar-item-anchor" style="font-size:13px !important;<?php echo(($page_name == 'job_post')?'color:black':'');?>" href="<?php echo base_url();?>job_post">POST A JOB</a>
                                </li>
                                <li class="<?php echo(($page_name == 'browse_candidate')?'abc':'');?>">
                                    <a class="navbar-item-anchor" style="font-size:13px !important;<?php echo(($page_name == 'browse_candidate')?'color:black':'');?>" href="<?php echo base_url();?>browse_candidate">RESUME BROWSE</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>

</div>