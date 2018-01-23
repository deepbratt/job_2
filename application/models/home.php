
<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>jobs | Home</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<?php
		$this->load->view("common/meta_links");
	?>    
	<style>
		.cont{
			background: #182642;
			background-image:url("<?php echo base_url();?>images/hero-img-large-f0e6e043ee89f310399239e54c747d4999ef7340937338143ca2fe111fe4d39a.jpg");*/
			/*background-image:url("<?php echo base_url();?>images/newsll.png");*/
			/*background: -moz-linear-gradient(-45deg,#182642 0%,#1E5C8B 35%,#50C5CD 100%);
			background: -webkit-linear-gradient(-45deg,#182642 0%,#1E5C8B 35%,#50C5CD 100%);
			background: linear-gradient(135deg,#182642 0%,#1E5C8B 35%,#50C5CD 100%);*/
			background-size: cover;
			background-position: top;
			padding-top: 1rem;
			height:400px;
		}
		.btn{
			background: #85CE3F;
			border:1px solid #fff;
			text-align: center;
			color: #FFFFFF;
			height:45px !important;
			padding:10px 10px !important;
		}
		.new-btn{
			margin-left:-80px;
			margin-top:3px;
		}
	</style>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVEqoCsKgUMmAcDVX9OAwVMDewLI6yOAQ&sensor=false&libraries=places&language=en"></script>
</head>
<body>

<div>
<?php
	$this->load->view("common/header");
?>

 <section class="hero-container cont">
    <div class="container">

		<div class="row" style="margin-top:8.5%;">
			<div class="col-xs-12">
				<div class="tagline-container">
					<div class="" style="color:#fff;font-weight:normal;font-size:20px;">Find the right job.  <span style="font-weight:bold;">Right now.<span></div>
				</div>
			</div>
		</div>
		

		<div class="search-container navbar-site-search-bar" style="margin-top:10px;padding-bottom:30px;">
			<form method="POST" class="form-inline" action="<?php echo base_url();?>home/send_data">
				<div class="row" style="">
					<div class="keywords-location-container" style="padding: 15px;
    background: rgba(255,255,255,0.2);
    border-radius: 5px;">
						<div class="col-sm-12 col-md-12 keyword-child-container">
							<div class="row content">
								<div class="col-sm-4 col-md-4">
									<div class="form-group keywords-container">
										<div>
											<input class="form-control keywords search-keywords" type="search" name="Key_words" id="keywords_y" onkeyup="get_suggestion(this.value);" placeholder="Job Title" style="height:43px;">
											<div class="clear-keywords" >
												<span>&#10005;</span>
											</div>
										</div>
										<div>
											<ul class="dropdown-menu" id="replace_data" style="display:  none;margin-left: 11px;width: 94%;">
											</ul>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-md-4">
									<div class="form-group keywords-container">
										<div>
											<select id="keywords" name="job_type" class="form-control keywords search-keywords" style="height:45px;">
												 <option selected="selected" value="Category">Category</option>
												 <?php
												 	foreach($categories As $cat){
												 ?>
												 <option value="<?php echo $cat->category_id;?>"><?php echo $cat->category_name;?></option>
												 <?php
												 	}
												 ?>
											</select>
										</div>
									</div>
								</div>

								
								<div class="col-sm-4 col-md-4">
									<div class="form-group">
										<!--<label for="location" style="color:#fff;">Where</label>-->
										<div class="">
											<div class="location-input-container">
												<input class="form-control location" type="search" name="job_location" id="cityz" placeholder="Location" style="height:42px;margin-top:3px;margin-left:-12px;">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-2 col-xs-12">
							<div class="form-group">
								<input class="btn btn-primary new-btn" type="submit"  style="" name="search" value="browse" id="">
							</div>
						</div>
					</div>
				</div>

			</form>
		</div>

    </div>
    <div id="recommended-jobs-placeholder" class="rj-placeholder clearfix"></div>
		<div class="row browse-toggle hidden-sm hidden-md hidden-lg">
			<div class="container">
				<div class="col-xs-12 collapsed">
					<a onclick="return false;">
						<span class="nav-arrow"></span>
						<span class="title">Browse jobs</span>
					</a>
				</div>
			</div>
		</div>
</section>

		<div class="master-row job-count-row" style="border-top:1px solid #e6e6e6;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="counter">
					<h2 style="margin-top:5px;">
						Add your <span class="brand-highlight">resume </span>and let your next <span class="brand-highlight">job</span> find you
					</h2>
				</div>
				<div class="see-all-count" style="margin-bottom:13px;">
					<a href="<?php echo base_url();?>post_resume" class="btn btn-default">Upload resume</a>
				</div>
			</div>
		</div>
	</div>
</div>

         <div class="master-row job-tools" style="margin-top:0px;padding-bottom:50px;">
			<div class="container">
				<div class="row" style="background:#fff;">   
					
					<div class="col-xs-12 col-sm-4 tool-row alert-tool" >
						<a href="">
							<div class="row" >
								<div class="col-xs-12 icon-wrapper" style="text-align:center;">
									
									<img src="<?php echo base_url();?>images/pre_university.png" style="height:150px;text-align:center;">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 text-content">
									<h3>First</h3>
									<p>Set up a targeted alert and<br> be first to the latest jobs.</p>
								</div>
							</div>

							<div class="row">
								<div class="" style="text-align:center;">
									<a href="<?php echo base_url();?>job_post"class="btn btn-primary" style="color:#fff;">Post a job</a>
								</div>
							</div>
						</a>
					</div>
					
					
					<div class="col-xs-12 col-sm-4 tool-row register-tool">
						<a href="">
							<div class="row">
								<div class="col-xs-12" style="text-align:center;">
									
									<img src="<?php echo base_url();?>images/hc7.png" style="height:150px;text-align:center;">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 text-content">
									<h3>Fast</h3>
									<p>Create an account and access<br> your saved settings on any device.</p>
								</div>
							</div>

							<div class="row">
								<div class="" style="text-align:center;">
									<a href="<?php echo base_url();?>register" class="btn btn-warning" style="background:#1c4972;color:#fff;">Register now</a>
								</div>
							</div>
						</a>
					</div>

					
					<div class="col-xs-12 col-sm-4 tool-row cv-tool">
						<a href="">
							<div class="row">
								<div class="col-xs-12" style="text-align:center;">
									
									<img src="<?php echo base_url();?>images/hme4.png" style="height:150px;text-align:center;">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 text-content">
									<h3>Smart</h3>
									<p>
										Don't just find. Be found. <br>
										Put your CV in front of great employers.
									</p>
								</div>
							</div>

							<div class="row">
								<div class="" style="text-align:center;">
									<a href="<?php echo base_url();?>post_resume"><div class="btn btn-warning" style="background:#ff9900">Upload CV</div></a>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div> 

    <div class="container" style="margin-bottom:100px;margin-top:30px;">

      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-9">

			    <h1 class="col-md-12" style="background:#F2F2F2;float:left;margin-left:-10px;border-radius:3px;padding:10px 15px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
					<small style="color:black;font-weight:600;text-align:center;">Recent Jobs</small>
			    </h1>

				<?php
					for($i=0;$i<2;$i++){
				?>
				<div class="card mb-4">
					<div class="card-body col-md-12" style="background:white;border-radius: 3px;margin-bottom:10px;
					box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);float:left;margin-left:-10px;">

						<div class="col-md-2">
							<img src="<?php echo base_url();?>images/php-mini-logo.jpg" style="width:100%;margin-top:25px;">
						</div>
						<div class="col-md-10" style="">
						<h2 class="card-title" style=""><a href="<?php echo base_url();?>job_details" style="color:black !important;">PHP Developer - Laravel / Symfony </a></h2>
						<p class="card-text " style=""> Posted on November 1, 2017</p>
						<p class="card-text">PHP Developer - Laravel / Symfony $40k-$55k London PHP Developer with Laravel / Symfony software development company are looking for a PHP Developer using Laravel or Symfony to business, they are expanding the tech team and a PHP Developer is needed to...</p>
						</div>
					</div>
				</div>
				<?php
					}
				?>
				<!-- <div class="card mb-4" style="">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4">
						<button class="btn btn-primary"><a href="job_listing.php" class="col-md-12" type="submit" name="" style="text-decoration:none;color:white;">Explore Jobs</a></button>
					</div>
					<div class="col-md-4">
						
					</div>
				</div> -->
			</div>




		  	<div class="col-md-3" style="">
					<li class=" hpj-jsp-promo" style="margin-top:20px;float:right;margin-right:-10px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;width: 273px;margin-bottom: 25px;    color: #7D7D7D;list-style-type: none;">

                <div class="col-md-12" style="background:#F2F2F2;"><h2 style="color:black;margin: 0 20px 10px 10px;padding:10px;text-align:center;">Promote yourself</h2></div>
                <div class="col-md-12"><p style="color: #1A1A1A;font-weight: normal;margin-top:10px;">Get yourself in front of the right employers
                and recruiters in Australia - they're searching
                for people like you now!</p></div>

            </li>
			<div class="col-md-12" style="box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
				<li class="scomm-tile scomm-tile-large state-hide-text" style="float:left;margin-left:-10px;padding:0px;list-style:none;">
					<a class="" title="Over 14 thousand opportunities for a career change on SEEK Business" href="#"><img src="<?php echo base_url();?>images/seek_boss.png"></a>
				</li>
			</div>
	</div>

        </div>

      </div>





		<!-- <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center">
                                    <div class="page-heading heading3">
                                        <h2>We are Popular <span>Everywhere</span></h2>
                                        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="vector_map">
                                        <img src="<?php echo base_url();?>images/map.png" alt="" class="img-responsive">
                                    </div>
                                </div> 
                            </div>
                        </div> -->

      




    </div>
        </div>


    </div>
</div>
<?php
	$this->load->view("common/footer");
?>
<script>
	function get_suggestion(val) {
		$.ajax({
        url: '<?php echo base_url();?>home/get_name_suggestion',
        data: {'key_word': val}, // change this to send js object
        type: "post",
        success: function(response){
        	$("#replace_data").show();
        	$("#replace_data").append(response);
        	//alert(response);
        }
      });
	}
</script>
<script>
	function fetch_data(e) {
		var value_z = $(e).text();
		$("#keywords_y").val(value_z);
		$("#replace_data").hide();
	}
</script>
<script>
  var input = document.getElementById('cityz');
  var autocomplete = new google.maps.places.Autocomplete(input);
  </script>

</html>
