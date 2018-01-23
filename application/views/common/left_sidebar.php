<?php
  /*print_r($search_array['company_name']);
  foreach($search_array As $valuez){
    echo $valuez;
  }*/
?>
		<!-- sidebar -->
		<form name="adv_search" method="POST" action="<?php echo base_url();?>joblisting">
			<div id="facet" class="refine">
			  <div class="facetcollapsible " style="margin-bottom:-50px;">
				<div class="heading">Refine Search
				</div>
			  </div>
			  <div class="job_search" style="padding:10px;">
				<div class="form-group">
				  <input type="text" class="form-control" name="job_title" value="<?php echo(($this->session->tempdata("job_title") != '')?$this->session->tempdata("job_title"):'');?>" placeholder="Job Title" onchange="this.form.submit()">
				  <div class="search_icon">
					<span class="ti-location-pin"></span>
				  </div>
				  <p> </p>
				  <input type="text" class="form-control" id="cityz" name="city" value="<?php echo(($this->session->tempdata("city") != '')?$this->session->tempdata("city"):'');?>" placeholder="City / zip code" onchange="this.form.submit()">
				  
				  <div class="search_icon">
					<span class="ti-location-pin"></span>
				  </div>
				</div>
				<!--<a href="javascript:void(0)" class="btn btn-primary adv_filt" onclick="show_advance_fult();" style="padding-top:10px;padding-bottom:10px;border-radius:0px;text-align:center">Advance Filters</a>-->
			  </div>
			  <div class="facetwidget">
				<h3 class="facetwidget_h nomargin" data-toggle="collapse" data-target="#employer">Job Categories
				</h3>
				<div id="employer" class="facetwidgetbody collapse in">
				  <ul class="ullilist">
					<?php
						$i=0;
						foreach($job_cat As $uniqu_cat){
						  $i++;
						  $search_data_rr = explode(",",$this->session->tempdata("cat"));
						  //print_r($uniqu_cat);
						  //echo "-";
						  //print_r($search_data_rr);
						?>
							<li>
							  <div class="facetwiditem">
								<div class="chkbox csmall rfchck">
								  <div class="checkbox custom">
									<input type="checkbox" value="<?php echo $uniqu_cat->category_id;?>" name="cat[]" <?php echo((in_array($uniqu_cat->category_id, $search_data_rr))?'checked':'');?> onchange="this.form.submit();" class="frad" id="cid_<?php echo $i;?>">
									<label for="cid_<?php echo $i;?>" title="<?php echo $uniqu_cat->category_name;?>">
									  <a href="javascript:void(0);" class="a_underline" target="_blank"><?php echo substr($uniqu_cat->category_name,0,25);?> <?php echo((strlen($uniqu_cat->category_name) > 25)?'..':'');?>
									  </a>
									</label>
								  </div>
								</div>
								<!--<a class="fcnt" href="javascript:void(0)" onclick="hrefDataLink('cid_248505','top_emp')">15
								</a>-->
							  </div>
							</li>
						<?php
						 }
						?>
				  </ul>
				</div>


				<h3 class="facetwidget_h collapsed nomargin" data-toggle="collapse" data-target="#company_type" id="companyTypeDataTarget">Company Type
				</h3>
				<div class="facetwidgetbody collapse" id="company_type">
				  <ul class="ullilist">
					<?php
					$i=0;
					foreach($job_type As $uniqu_type){
						$i++;
					?>
					<li>
					  <div class="facetwiditem">
						<div class="chkbox csmall chcked">
						  <div class="radio custom">
							<input type="radio" value="<?php echo $uniqu_type->type;?>" name="type" onchange="this.form.submit();" <?php echo(($this->session->tempdata("type") == $uniqu_type->type)?'checked':'');?> class="frad" id="ctp_<?php echo $i;?>"> 
							<label for="ctp_<?php echo $i;?>" title="<?php echo strtoupper($uniqu_type->type);?>"><?php echo strtoupper($uniqu_type->type);?>
							</label>
						  </div>
						</div>
						<!--<a href="javascript:void(0)" onclick="hrefDataLink('ctp_1','top_comp')" class="fcnt">1071
						</a>-->
					  </div>
					</li>
					<?php
					 }
					?>
				  </ul>
				</div>


				<h3 class="facetwidget_h collapsed nomargin" data-toggle="collapse" data-target="#salary" id="salaryDataTarget">Jobs by Salary
				</h3>
				<div class="facetwidgetbody collapse" id="salary">
				  <ul class="ullilist">
					
					<?php
                    $m=10000;
					$i = 0;
                    for($i=1; $i < 15 ; $i++){
						$i++;
                    ?>
						<li>
						  <div class="facetwiditem">
							<div class="chkbox csmall chcked">
							  <div class="radio custom">
								<input type="radio" value="<?php echo $m*$i;?>" id="s_<?php echo $i;?>" name="ann_pay" onchange="this.form.submit()" <?php echo(($this->session->tempdata("ann_pay") == $m*$i)?'checked':'');?> class="frad"> 
								<label for="s_<?php echo $i;?>" title="ALL">$ <?php echo $m*$i;?></label>
							  </div>
							</div>
							<!--<a href="javascript:void(0)" onclick="hrefDataLink('s_*~*','top_sal')" class="fcnt">1751
							</a>-->
						  </div>
						</li>
					<?php
					   }
					?>	 
				  </ul>
				</div>
			  </div>
			  <div class="facetwidget_wrapper">
				<div class="facetwidget_b clearfix" style="width: auto;">
				  <a class="pull-left clear" href="javascript:void(0)" onclick="resetFormFields()">Clear all filters
				  </a>
				</div>
			  </div>
			</div>
		</form>
		<!-- sidebar ends -->