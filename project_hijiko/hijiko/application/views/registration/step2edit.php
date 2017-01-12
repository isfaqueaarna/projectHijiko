<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyuj4qD6JgNna1tWyG4lhvBoOAuBwAtB0&libraries=places&sensor=false"
         async defer></script>

<div ng-controller="registrationStep2editCtrl">
<div class="container">
	<div class="row">
		<div class="top-header">
			<div class="col-md-2">
				<div class="logo-area"><img src="<?php echo base_url();?>assets/images/logo.png" alt="" title=""/></div>
			</div>
			<div class="col-md-10">
				<div class="search-area">
				<from>
					<div class="src-fld">
						<div class="form-group">
						  <input type="text" class="form-control" id="usr">
						</div>
					</div>
					
					<div class="spr_selector">
						<label class="fa fa-sort-desc"></label>
						<select class="spr_select">
																		
									<option >All Categories</option>
																		
									<option value="2"> - Home</option>
																		
									<option value="3"> -  - Shop</option>
									
						</select>
					</div>
					<button value="Search" class="spr-search-button" type="submit" name="spr_submit_search">
							<i class="fa fa-search"></i>
						</button>
				</from>
					
				</div>
				<?php
					if(isset($this->session->userdata['user_logged'])){
				?>
				<div class="cart-area">
					<img src="<?php echo base_url();?>assets/images/cart.png" alt="" title=""/>
					<div class="cart-count">6</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
</div>
	
<!--start header navigation area-->

<div class="nav-area">
<div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Find a Jiko</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Local Deals <b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">By Country <b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">Country List</a></li>
                                    </ul>
                                
                                </li>
                               
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">By Category <b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">Category List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <?php
                    	if(isset($this->session->userdata['user_logged'])){
                    ?>


			            <div class="user-drop pull-right ">
			           	  	<div class="user-img"><img src="<?php echo base_url();?>assets/images/propic.jpg"/></div>
			            	<div class="collapse navbar-collapse ">
			                    <ul class="nav navbar-nav">
			                       
			                        <li>
			                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, <?php echo $this->session->userdata['user_logged']['userFirstName'] ?> <b class="caret"></b></a>

			                            <ul class="dropdown-menu dropdown-menu-rht">
			                              <li><a href="#">Messages</a></li>
			                           <li><a href="#">Wishlist</a></li>
			                             <li><a href="#">Favorite Jiko Shop</a></li>
			                               <li><a href="#">Profile</a></li>
			                                 <li><a href="#">Purchases and reviews</a></li>
			                                 	<li><a href="#">Account settings</a></li> 
			                               
			                               
			                               
			                                <li>
			                                <?php
			                                if($this->session->userdata['user_logged']['userIsVendor'] == 'yes'){
			                                ?>
			                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">As a Jiko <b class="caret"></b></a>

			                                    <ul class="dropdown-menu">
			                                        <li><a href="#">View Your Jiko Shop</a></li>
			                                        <li><a href="#">Edit Shop</a></li>
			                                         <li><a href="#">Dashboard</a></li>
													
			                                       <li>
			                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Delivery<b class="caret"></b></a>

			                                    <ul class="dropdown-menu">
			                                        <li><a href="#">Set Your Delivery Ticket Price</a></li>
			                                         <li><a href="#">Set Delivery Service Fees</a></li>
			                                        
			                                    </ul>
			                                </li>
			                                    
			                                      <li>
			                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Orders<b class="caret"></b></a>

			                                    <ul class="dropdown-menu">
			                                        <li><a href="#">Orders</a></li>
			                                         <li><a href="#">Reviews</a></li>
			                                        
			                                    </ul>
			                                </li> 
			                                
			                                <li>
			                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Local Deal Listings<b class="caret"></b></a>

			                                    <ul class="dropdown-menu">
			                                        <li><a href="#">Listing Manager</a></li>
			                                         <li><a href="#">Post a new deal listing</a></li>
			                                        
			                                    </ul>
			                                </li> 
			 

			                                    </ul>

			                                <?php
			                            		}else{
			                                ?>

			                                <a href="vendor_registration" class="dropdown-toggle" data-toggle="dropdown">As a Jiko </a>

			                                <?php
			                                	}
			                                ?>
			                                
			                                </li>
			                                
			                                <li><a href="logout">Sign out</a></li>
			                               
			                            </ul>
			                        </li>
			                    </ul>
			 
			                </div><!--/.nav-collapse -->
			            </div>

                    <?php
                		}else{
                    ?>
                    
                   	<div class="log-nav" style="float: right;">
                   		<ul class="nav navbar-nav">
                   		 	<li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                        	<li><a href="#" data-toggle="modal" data-target="#signupModal">Sign up</a></li>
                   		</ul>
                   	</div> 

                   	<?php
                   		}
                   	?>
                
 
                </div><!--/.nav-collapse -->
                
             
            </div>
        </div>

</div>




	
<!--start slider area	-->
<div class="container">

	
	<div class="col-lg-12 col-md-12 col-sm-12">
		
		<div id="step2editbox1" class="box myfreerate-box" style="">
				
			
					<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div"> 
	               			  <div class="pickitem-frm-box">
							   <div class="col-lg-12 col-md-12 col-sm-12">
							   		<h4><strong>Great progress</strong></h4>
							   		<p class="small">
							   		Now, let’s get to know you more so you can increase your trustability 
									to your potential customers.</p>
									<p class="small">Language, location, deal category
									<span class="chk"><i class="fa fa-check" aria-hidden="true"></i>
			</span></p>
									<p class="small"><a href="step1edit">Change</a></p>


									<div class="line margin-bottom-20"></div>

									 <div class="step-text">Step 2</div>
									<h4><strong>Authentication</strong></h4>
									<p>Photo ID, E-mail, Phone number</p>
									<button class="btn btn-success" ng-click="goToStep2Box2()">Continue</button>

									<div class="line margin-bottom-20"></div>
									
									
									<div class="step-text">Step 3</div>
									<h4 class="desable-text"><strong>Introduce Yourself</strong></h4>
									<p class="desable-text">Your profile image, something about yourself</p>

								</div>
				 			  </div>
				 			  
							</div>
							</div>
					
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div text-center">
								<img src="<?php echo base_url();?>assets/images/smile.jpg" class="smile-img" alt="" title="" />
							</div>
						</div>
								
		</div>


	<div id="step2editbox2" class="box myfreerate-box" style="display: none;">
		<form name="step2editbox2Form" novalidate>
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="progressbar">
				<div class="bar" style="width:40%;"></div>
					Step 2 : Authentication
				</div>
	    	</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
               			  <div class="pickitem-frm-box">
						   <div class="col-lg-12 col-md-12 col-sm-12">
					   			<div class="row">
					   			
						   		<h4><strong>Please upload your photo ID for Change Photo ID.</strong></h4>
						   		
						   		
						   		<span id="fileselector">
									<label class="btn upbtn" for="upload-file-selector">
										<input id="upload-file-selector" type="file" ngf-select ng-model="picPhotoId" name="picPhotoId" accept="image/*" ngf-max-size="2MB" required
                             ngf-model-invalid="errorFile">
										<i class="fa fa-cloud-upload icon-right"></i>upload file
									</label>
                             			<i ng-show="step2editbox2Form.picPhotoId.$error.required">*required</i><br>
                      <i ng-show="step2editbox2Form.picPhotoId.$error.maxSize">File too large 
                          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
								</span>
						   		
						   		<div class="clearfix"></div>
						   		
						   		<div class="col-lg-5 col-md-5 col-sm-12">
									<div class="row">
										<div class="prv-img"><img ng-show="step2editbox2Form.picPhotoId.$valid" ngf-thumbnail="picPhotoId" height="180" width="180"></div>
									</div>
						   		</div>
						   		<!--
				                  <span class="progress" ng-show="picPhotoId.progress >= 0">
				                    <div style="width:{{picPhotoId.progress}}%" 
				                        ng-bind="picPhotoId.progress + '%'"></div>
				                  </span>
				                  <span ng-show="picPhotoId.result">Upload Successful</span>
				                  <span class="err" ng-show="errorMsg">{{errorMsg}}</span>-->
						   		
						   		<div class="clearfix"></div>
								<div class="pickitem-frm-box">
			 			  		<div class="col-lg-12 col-md-12 col-sm-12">
     								<button class="back" ng-click="goToStep2Box1()"><i class="fa fa-long-arrow-left icon-right"></i>Back</button>
     								<button class="next" ng-click="goToStep2Box3File(picPhotoId)">Next</button>
								</div>
		 			  		</div>
							</div>
		 			  	
					   			</div>
			 			  </div>
			 			  
						</div>
						</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
							<i class="fa fa-lightbulb-o blb" aria-hidden="true"></i>
							<p>Please upload either your passport or your citizenship ID.</p>
							<p>Your ID information will be highly secured by our security system. </p>
							
						</div>
					</div>
					</form>
					
			
	</div>
	
	
		<!--mail box-->
	
	<div id="step2editbox3" class="box myfreerate-box" style="display: none;">
		<form name="step2box3Form" novalidate>
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="progressbar">
				<div class="bar" style="width:80%;"></div>
					Step 2 : Authentication
				</div>
	    	</div>
			
				<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
               			  <div class="pickitem-frm-box">
						   <div class="col-lg-12 col-md-12 col-sm-12">
					   		<div class="row">
						   		<h4><strong>Add your email address for change email</strong></h4>
						   		<div class="col-lg-3 col-md-3 col-md-12">
									<div class="row">
										<img src="<?php echo base_url();?>assets/images/mai-icon.png">
									</div>
						   		</div>
						   		
						   		<div id="step2editbox3_1" class="col-lg-9 col-md-9 col-sm-12">
									<div class="row">
									
									<div class="input-group inp-box">
									  <input type="email" class="form-control" ng-model="vdEmail" name="vdEmail" placeholder="email address">
									   <span class="input-group-btn">
										<button class="btn vf-btn" type="button" ng-click="emailVerify()">Verify</button>
									   </span>
									</div>
							        <span style="color:red;" ng-show="step2box3Form.vdEmail.$dirty && step2box3Form.vdEmail.$invalid">
							          <span ng-show="step2box3Form.vdEmail.$error.required">Email is required</span>
							          <span ng-show="step2box3Form.vdEmail.$error.email">Invalid email address</span>
							        </span>
										
									</div>
						   		</div>
						   		
						   		<div class="clearfix"></div>
						   		
						   		
										<div class="box code-msg" id="step2editbox3_2" style="display: none;">
										<div class="col-lg-3 col-md-3 col-md-12">
											<div class="row">
												<img src="<?php echo base_url();?>assets/images/suc-mail-icon.png">
											</div>
						   				</div>
						   		
						   		<div class="col-lg-9 col-md-9 col-sm-12">
									<div class="row">
									<div class="code-gnrt-box">
										OK, please check your email ({{vdEmail}}).
										We have sent you the 4-digit code. 
										Please enter the code:
										<div class="code-box">
											<div class="form-group">
											  <input type="text" ng-model="vdEmailOTP" name="vdEmailOTP" class="form-control" id="">
											</div>
										</div>
										<div class="clearfix"></div>
										<p class="small"><a href="#" class="small">Try again</a>: <a href="" ng-click="changeEmail()" class="small">Change to different email address</a></p>
									</div>
									
										
									</div>
						   		</div>
										</div>
										
										
									<!--code success box-->
											
										<div class="box code-msg" id="step2editbox3_3" style="display: none;">
										<div class="col-lg-3 col-md-3 col-md-12">
											<div class="row">
												<img src="<?php echo base_url();?>assets/images/suc-mail-icon.png">
											</div>
						   				</div>
						   		
						   		<div class="col-lg-9 col-md-9 col-sm-12">
									<div class="row">
										<div class="input-group inp-box">
										  <input type="text" class="form-control suc-mail" placeholder="jayson80@hotmail.com">
										  <span class="input-group-addon check-icon"><i class="fa fa-check-circle"></i></span>
										</div>
									</div>
						   		</div>
										</div>
								
						   		
						   		
								<div class="pickitem-frm-box" id="step2editbox3_4" style="">
			 			  		<div class="col-lg-12 col-md-12 col-sm-12">
     								<button class="back" ng-click="goToStep2Box2()"><i class="fa fa-long-arrow-left icon-right"></i>Back</button>
     								<button class="next" ng-click="goToStep2Box4()">Next</button>
								</div>
		 			  		</div>
							</div>
			 			  </div>
			 			  </div>
						</div>
						</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
							<i class="fa fa-lightbulb-o blb" aria-hidden="true"></i>
							<p>Please upload either your passport or your citizenship ID.</p>
							<p>Your ID information will be highly secured by our security system. </p>
							
						</div>
					</div>
					</form>
					
			
	</div>
	
	
	
	<!--phone box-->
	
	<div id="step2editbox4" class="box myfreerate-box" style="display: none;">
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="progressbar">
				<div class="bar" style="width:98%;"></div>
					Step 2 : Authentication
				</div>
	    	</div>
			
				<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
               			  <div class="pickitem-frm-box">
						   <div class="col-lg-12 col-md-12 col-sm-12">
					   		<div class="row">
						   		<h4><strong>Add your mobile number for change mobile number</strong></h4>
						   		
						   	
						   		
						   		<div class="col-lg-3 col-md-3 col-md-12">
									<div class="row">
										<img src="<?php echo base_url();?>assets/images/phone-icon.png">
									</div>
						   		</div>
						   		
						   		<div id="step2editbox4_1" class="col-lg-9 col-md-9 col-sm-12" style="">
									<div class="row">
									<form name="step2box4_1Form">
									
									<div class="input-group inp-box">
									  <input type="text" ng-model="vdMobile" name="vdMobile" class="form-control" placeholder="Mobile No">
									   <span class="input-group-btn">
										<button class="btn vf-btn" ng-click="mobileVerify()" type="button">Verify</button>
									   </span>
									</div>
									</form>
										
									</div>
						   		</div>
						   		
						   		<div class="clearfix"></div>
						   		
						   		
										<div id="step2editbox4_2" class="box code-msg" style="display: none;">
										<div class="col-lg-3 col-md-3 col-md-12">
											<div class="row">
												<img src="<?php echo base_url();?>assets/images/chk-phone-icon.png">
											</div>
						   				</div>
						   		
						   		<div class="col-lg-9 col-md-9 col-sm-12">
									<div class="row">
									<div class="code-gnrt-box">
										Ok, check your phone({{vdMobile}})
for a text from us. Enter the 4-digit code.
									<div class="clearfix"></div>
										<div class="code-box">
											<div class="form-group">
											  <input type="text" ng-model="vdMobileOTP" name="vdMobileOTP" class="form-control" id="">
											</div>
										</div>
										<div class="clearfix"></div>
										<p class="small"><a href="#" class="small">Try again</a> . <a href="" ng-click="callmeInstead()" class="small">Call me instead</a></p>
									</div>
									
										
									</div>
						   		</div>
										</div>
										
										
										
											<div id="step2editbox4_3" class="box code-msg" style="display: none;">
										<div class="col-lg-3 col-md-3 col-md-12">
											<div class="row">
												<img src="<?php echo base_url();?>assets/images/vf-phone-icon.png">
											</div>
						   				</div>
						   		
						   		<div class="col-lg-9 col-md-9 col-sm-12">
									<div class="row">
									<div class="code-gnrt-box">
										Ok, we’ll call +8210 8701 1000 with a code.
Enter the 4-digit code.
									<div class="clearfix"></div>
										<div class="code-box">
											<div class="form-group">
											  <input type="text" ng-model="vdMobileOTP2" ng-model="vdMobileOTP2" class="form-control" id="">
											</div>
										</div>
										<div class="clearfix"></div>
										<p class="small"><a href="#" class="small">Try again</a> . <a href="" ng-click="textmeInstead()" class="small">Text me instead</a></p>
									</div>
									
										
									</div>
						   		</div>
										</div>
										
										
									<!--code success box-->
											
										<div id="step2editbox4_4" class="box code-msg" style="display: none;">
										<div class="col-lg-3 col-md-3 col-md-12">
											<div class="row">
												<img src="<?php echo base_url();?>assets/images/phone-icon.png">
											</div>
						   				</div>
						   		
						   		<div class="col-lg-9 col-md-9 col-sm-12">
									<div class="row">
										<div class="input-group inp-box">
									  <span class="input-group-addon">+82</span>
										  <input type="text" class="form-control suc-mail" placeholder="jayson80@hotmail.com">
										  <span class="input-group-addon check-icon"><i class="fa fa-check-circle"></i></span>
										</div>
									</div>
						   		</div>
										</div>
								
						   		
						   		
								<div id="step2editbox4_5" class="pickitem-frm-box" style="">
			 			  		<div class="col-lg-12 col-md-12 col-sm-12">
     								<button class="back" ng-click="goToStep2Box3()"><i class="fa fa-long-arrow-left icon-right"></i>Back</button>
     								<button class="next" ng-click="goToStep2Finish()">Next</button>
								</div>
		 			  		</div>
							</div>
			 			  </div>
							</div>
						</div>
						</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
							<i class="fa fa-lightbulb-o blb" aria-hidden="true"></i>
							<p>Only confirmed customers get your phone number. This helps customers
contact you quickly if needed.</p>
							
							
						</div>
					</div>
					
			
	</div>




	</div>				
	
</div> <!--end container div-->
</div>


