<?php
  /*print_r($search_array['company_name']);
  foreach($search_array As $valuez){
    echo $valuez;
  }*/
?>

<!-- sidebar -->
		<form name="adv_search" method="POST" action="<?php echo base_url();?>browse_candidate">
			<div id="facet" class="refine">
			  <div class="facetcollapsible" style="margin-bottom:-50px;">
				<div class="heading">Refine Search
				</div>
			  </div>
			  <div class="job_search" style="padding:10px;">
				<div class="form-group">
				  <input type="text" class="form-control" id="cityz" name="city" value="<?php echo(($this->session->tempdata("city") != '')?$this->session->tempdata("city"):'');?>" placeholder="City / zip code" onchange="this.form.submit()">
				  
				  <div class="search_icon">
					<span class="ti-location-pin"></span>
				  </div>
				  
				  <p>&nbsp;</p>

				  <select class="form-control" name="comp_name" onchange="this.form.submit()">
					<option selected disabled>Company Name</option>
					<?php
						//print_r($comp_name);
						foreach($comp_name As $fetch_comp){
						  if($fetch_comp->company_name != ""){
					?>
					<option value="<?php echo $fetch_comp->company_name;?>" <?php echo(($this->session->tempdata("comp_name") == $fetch_comp->company_name)?'selected':'');?>>
					<?php
							echo $fetch_comp->company_name;
					?>
					</option>
					<?php
						}else{
						  continue;
						}
					  }
					?>
          </select>
				</div>
				<!--<a href="javascript:void(0)" class="btn btn-primary adv_filt" onclick="show_advance_fult();" style="padding-top:10px;padding-bottom:10px;border-radius:0px;text-align:center">Advance Filters</a>-->
			  </div>
			  <div class="facetwidget">
				<h3 class="facetwidget_h nomargin" data-toggle="collapse" data-target="#employer">Skills
				</h3>
				<div id="employer" class="facetwidgetbody collapse in">
				  <ul class="ullilist">
					<?php
					  //print_r($this->session->tempdata("all_skills"));
					  $merge = "";
					  foreach($skills_all As $skills_unique){
						$merge .= $skills_unique->skills;
					  }
					  $convert_merge_to = explode(",",$merge);
					  $i = 0;
					  foreach($convert_merge_to As $key=>$uniqu_skills){
					  $search_data_rr = explode(",",$this->session->tempdata("all_skills"));

					?>							
						<li>
							  <div class="facetwiditem">
								<div class="chkbox csmall rfchck">
								  <div class="checkbox custom">
									<input type="checkbox" value="<?php echo $uniqu_skills;?>" name="skills[]" <?php echo((in_array($uniqu_skills, $search_data_rr))?'checked':'');?> onchange="this.form.submit()" class="frad" id="cid_<?php echo $i;?>">

									<label for="cid_<?php echo $i;?>" title="<?php echo strtoupper($uniqu_skills);?>">
									  <a href="javascript:void(0);" class="a_underline" target="_blank"><?php echo strtoupper($uniqu_skills);?>
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


				<h3 class="facetwidget_h collapsed nomargin" data-toggle="collapse" data-target="#education" id="companyTypeDataTarget">Education
				</h3>
				<div class="facetwidgetbody collapse" id="education">
				  <ul class="ullilist">
					<?php
					$i=0;
					$merge = "";
					  foreach($edu_all As $edu_unique){
						$merge .= $edu_unique->education;
					  }
					  $convert_merge_to = explode(",",$merge);
					  foreach($convert_merge_to As $key=>$uniqu_skills){
					?>
					<li>
					  <div class="facetwiditem">
						<div class="chkbox csmall chcked">
						  <div class="radio custom">

							 <input type="radio" value="<?php echo $uniqu_skills;?>" <?php echo(($this->session->tempdata("edu") == $uniqu_skills)?'checked':'');?> name="edu" onchange="this.form.submit()" class="frad" id="edu_<?php echo $i;?>">

							<label for="edu_<?php echo $i;?>" title="<?php echo strtoupper($uniqu_skills);?>"><?php echo strtoupper($uniqu_skills);?>
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
				
				<h3 class="facetwidget_h collapsed nomargin" data-toggle="collapse" data-target="#reloc" id="companyTypeDataTarget">Relocation
				</h3>
				<div class="facetwidgetbody collapse" id="reloc">
				  <ul class="ullilist">
					<?php
					$i=0;
					?>
					<li>
					  <div class="facetwiditem">
						<div class="chkbox csmall chcked">
						  <div class="radio custom">
							<input type="radio" value="yes" name="reloc" onchange="this.form.submit()" <?php echo(($this->session->tempdata("reloc") == "yes")?'checked':'');?> class="frad" id="yes_1">
							<label for="yes_1" title="Yes">Yes
							</label>
						  </div>
						</div>

						<div class="chkbox csmall chcked">
						  <div class="radio custom">
							<input type="radio" value="no" name="reloc" onchange="this.form.submit()" <?php echo(($this->session->tempdata("reloc") == "no")?'checked':'');?> class="frad" id="yes_1">
							<label for="yes_1" title="No">No
							</label>
						  </div>
						</div>
						<!--<a href="javascript:void(0)" onclick="hrefDataLink('ctp_1','top_comp')" class="fcnt">1071
						</a>-->
					  </div>
					</li>

				  </ul>
				</div>

				<h3 class="facetwidget_h collapsed nomargin" data-toggle="collapse" data-target="#exp_type" id="companyTypeDataTarget">Experience
				</h3>
				<div class="facetwidgetbody collapse" id="exp_type">
				  <ul class="ullilist">
					<?php
					$i=0;
                    for($i=0; $i<7; $i++){
					?>
					<li>
					  <div class="facetwiditem">
						<div class="chkbox csmall chcked">
						  <div class="radio custom">
							<input type="radio" value="<?php echo $i;?>" name="exp" onchange="this.form.submit()" <?php echo(($this->session->tempdata("exp") == $i)?'checked':'');?> class="frad" id="ctp_<?php echo $i;?>">
							<label for="ctp_<?php echo $i;?>" title="<?php echo $i;?>+ yrs"><?php echo $i;?>+ yrs
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

				<h3 class="facetwidget_h collapsed nomargin" data-toggle="collapse" data-target="#salary" id="salaryDataTarget">Annual Pay
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