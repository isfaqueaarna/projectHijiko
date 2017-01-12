<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyuj4qD6JgNna1tWyG4lhvBoOAuBwAtB0&libraries=places&sensor=false"
         async defer></script>

<div ng-controller="registrationStep1editCtrl">
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
		<div id="step1editbox1" class="box myfreerate-box" style="">
		<form name="step1editbox1Form" novalidate>
		
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="progressbar">
			<div class="bar" style="width: 20%;"></div>
				Step 1 : Start with the basics
			</div>
		</div>
		
			<h2><?php echo $this->session->userdata['user_logged']['userFirstName']." ".$this->session->userdata['user_logged']['userLastName'] ?></h2>
			
					<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div">
							
				            <div class="">
	               
	               			 <div class="step-text">STEP 1</div>
							   <div class="col-lg-12 col-md-12 col-sm-12">
							   		<h4><strong>Where are you located?</strong></h4>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									
								   <input ng-model="editingItem.vdLocation" name="vendorLocation" type="text" class="form-control margin-bottom-20" placeholder="Seoul City Hall" googleplace required>
								<button class="btn btn-success" ng-click="goToStep1editBox2()" ng-disabled="step1editbox1Form.$invalid">Continue</button>
								</div>
				 			  </div>


					</div>
					</div>
					

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div text-center">
								<img src="<?php echo base_url();?>assets/images/user-img.jpg" alt="" title=""/>
							</div>
						</div>
						</form>
				
		</div>
		
		<!--2nd box-->

		<div id="step1editbox2" class="box myfreerate-box" style="display: none;">
		<form name="step1editbox2Form" novalidate>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="progressbar">
				<div class="bar" style="width:30%;"></div>
					Step 1 : Start with the basics
				</div>
		    </div>
					<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div">
							
				            <div class="">
	               
	               			
							   <div class="col-lg-12 col-md-12 col-sm-12">
						   		<div class="row">
							   		<h4><strong>What is your primary language?</strong></h4>
								</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
							   <div class="row">
								   <div class="Morelng">
										<div class="spr_selector">
											<label class="fa fa-sort-desc"></label>
											<select class="spr_select" ng-model="editingItem.vdPLanguage" required>
												<option ng-repeat="language in languages" value="{{language.langFName}}">{{language.langFName}}</option>										
											</select>
										</div>
	     							</div>
								</div>
								</div>
			 			  
			 			  
			 			   <div class="col-lg-12 col-md-12 col-sm-12">
			 			   <div class="row">
			 			   <h4><strong>Can you use any other language(s)?</strong></h4>
								</div>
								</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
							   <div class="row">
								   <div class="Morelng">
										<div class="spr_selector">
											<label class="fa fa-sort-desc"></label>
											<select class="spr_select" ng-model="vdSLang" ng-change="addSLang()">													
													<option ng-repeat="language in languages" value="{{language.langFName}}">{{language.langFName}}</option>
											</select>
										</div>
	     							</div>
	     							
	     							<div class="list-lang">
	     								<ul>
	     									<li ng-repeat="vdSLanguage in vdSLanguages">{{vdSLanguage.langFName}} <button class="box-btn" ng-click="removeSLang(vdSLanguage)">Spanish</button></li>						
	     								</ul>
	     							</div>
	     							
	     							
	     							<button class="back" ng-click="goToStep1editBox1()"><i class="fa fa-long-arrow-left icon-right"></i>Back</button>
	     							<button class="next" ng-click="goToStep1editBox3()" ng-disabled="step1box2Form.$invalid">Next</button>
							</div>
								</div>
			 			  
			 			  
				 			  </div>


					</div>
					</div>
					

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div">
							<i class="fa fa-lightbulb-o blb" aria-hidden="true"></i>
								<p>Your language skill will help communicating with your potential customers from many countries.<br><br>If you don’t speak other languages, that’s okay. Hi, Jiko also provides automatic Google translation system as well to help users understand your introduced local deals.</p>
							</div>
						</div>
						</form>
				
		</div>
		
		
		<!--3rd box-->




	<div id="step1editbox3" class="box myfreerate-box" style="display: none;">
			<form name="step1editbox3Form" novalidate>
			<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="progressbar">
			<div class="bar" style="width:40%;"></div>
				Step 1 : Start with the basics
			</div>
	    </div>
			
				<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
						
			            <div class="">
               
						   <div class="col-lg-12 col-md-12 col-sm-12">
							   <div class="row">
							   		<h4><strong>Which categories of your local deals are you going to introduce?</strong></h4>
								</div>
							</div>
							<div class="row">
							
							<div class="col-lg-6 col-md-6 col-sm-12">
							   <div class="Morelng">
									<div class="spr_selector">
										<label class="fa fa-sort-desc"></label>
								<select class="spr_select" ng-model="vdPCategory" ng-change="addPcat()">												
									<option ng-repeat="category in categories" value="{{category.pcatName}}">{{category.pcatName}}</option>
								</select>
									</div>
     							</div>	
							</div>
    							
    							<div class="col-lg-6 col-md-6 col-sm-12">
    							<p class="small">You may choose up to 5 categories.</p>
								   	<div class="box cat-list-box">
								   		<ul>
								   			<li ng-repeat="vdPCategory in vdPCategories"><img src="{{vdPCategory.pcatImageLink}}" class="margin-right15" height="20" width="20"><span>{{vdPCategory.pcatName}}</span>
								   			 <button class="box-btn" ng-click="removePcat(vdPCategory)"></button></li>
								   		</ul>
								   	</div>					
								</div>
    								
     						
							</div>
     								<div class="col-lg-12 col-md-12 col-sm-12">
						   			<div class="row">
     							
     							<button class="back" ng-click="goToStep1editBox2()"><i class="fa fa-long-arrow-left icon-right"></i>Back</button>
     							<button class="next" ng-click="goToStep1editBox4()">Next</button>
     							
								</div>
							</div>
			 			  </div>

				</div>
				</div>
				

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
						<i class="fa fa-lightbulb-o blb" aria-hidden="true"></i>
							<p>You may introduce any types of items except items that are prohibited by Hi, Jiko regulation.</p>
						</div>
					</div>
					</form>
			
	</div>
		
		
		<!--4th box-->
		
		<div id="step1editbox4" class="box myfreerate-box" style="display: none;">
				<form name="step1box4Form" novalidate>
				<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="progressbar">
				<div class="bar" style="width:55%;"></div>
					Step 1 : Start with the basics
				</div>
		    </div>
				
					<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div">
	               			 <!--<div class="step-text">Step 1 : Start with the basics</div>-->
	               			 
	               			  <div class="pickitem-frm-box">
							   <div class="col-lg-12 col-md-12 col-sm-12">
							   		<h4><strong>Where can customers pick up your items?</strong></h4>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
								  	 <p>Country</p>
									   <div class="Morelng">
											<div class="spr_selector">
												<label class="fa fa-sort-desc"></label>
													<select class="spr_select" ng-model="editingItem.vdCountry" required>													
														<option ng-repeat="country in countries" value="{{country.mncoId}}">{{country.mncoFName}}</option>
													</select>
											</div>
										</div>
								</div>
				 			  </div>
				 			  
				 			  
				 			  <div class="pickitem-frm-box">
							  
								<div class="col-lg-6 col-md-6 col-sm-12">
								  	 <p>State</p>
									  <div class="form-group">
									  <input type="text" class="form-control" ng-model="editingItem.vdState" name="vendorState" required>
							        <span style="color:red;" ng-show="step1box4Form.vendorState.$dirty && step1box4Form.vendorState.$invalid">
							          <span ng-show="step1box4Form.vendorState.$error.required">State is required</span>
							        </span>
									</div>
								</div>
			 			  
			 			  
			 			  		<div class="col-lg-6 col-md-6 col-sm-12">
								  	 <p>city</p>
									  <div class="form-group">
									  <input type="text" class="form-control" ng-model="editingItem.vdCity" name="vendorCity" required>
								        <span style="color:red;" ng-show="step1box4Form.vendorCity.$dirty && step1box4Form.vendorCity.$invalid">
								          <span ng-show="step1box4Form.vendorCity.$error.required">City is required</span>
								        </span>
									</div>
								</div>
			 			  
				 			  </div>
				 			  
				 			  
				 			   <div class="pickitem-frm-box">
							  
								<div class="col-lg-12 col-md-12 col-sm-12">
								  	 <p>Street Address</p>
									   <div class="form-group">
										  <textarea class="form-control" rows="5" id="comment" ng-model="editingItem.vdStreetAddress" name="vendorStreetAddress" required></textarea>
								        <span style="color:red;" ng-show="step1box4Form.vendorStreetAddress.$dirty && step1box4Form.vendorStreetAddress.$invalid">
								          <span ng-show="step1box4Form.vendorStreetAddress.$error.required">Street Address is required</span>
								        </span>
									   </div>
								</div>

				 			  </div>
				 			  
				 			  
				 			  <div class="pickitem-frm-box">
							  
								<div class="col-lg-12 col-md-12 col-sm-12">
								  	 <p>Apt, Suite, Blog</p>
									  <div class="form-group">
									  <input type="text" class="form-control" ng-model="editingItem.vdWebsites" name="vendorWebsite" required>
								        <span style="color:red;" ng-show="step1box4Form.vendorWebsite.$dirty && step1box4Form.vendorWebsite.$invalid">
								          <span ng-show="step1box4Form.vendorWebsite.$error.required">Apt, Suit, Blog info is required</span>
								        </span>
									</div>
								</div>

				 			  </div>
				 			  
				 			  
				 			  <div class="pickitem-frm-box">
							  
								<div class="col-lg-12 col-md-12 col-sm-12">
								  	 <p>ZIP Code</p>
									  <div class="form-group">
									  <input type="number" class="form-control" ng-model="editingItem.vdZIPCode" name="vendorZipCode" required>
								        <span style="color:red;" ng-show="step1box4Form.vendorZipCode.$dirty && step1box4Form.vendorZipCode.$invalid">
								          <span ng-show="step1box4Form.vendorZipCode.$error.required">ZIP Code is required</span>
								        </span>
									</div>
								</div>

				 			  </div>
				 			  
				 			  
				 			  
				 			   <div class="pickitem-frm-box">
				 			  		<div class="col-lg-12 col-md-12 col-sm-12">
	     								<button class="back" ng-click="goToStep1editBox3()"><i class="fa fa-long-arrow-left icon-right"></i>Back</button>
	     								<button class="next" ng-click="goToStep1editBox5()" ng-disabled="step1box4Form.$invalid">Next</button>
									</div>
			 			  		</div>
				 			  
				 			  
				 			  
				 			  

					</div>
					</div>
					

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div">
							<i class="fa fa-lightbulb-o blb" aria-hidden="true"></i>
								<p>You may introduce any types of items except items that are prohibited by Hi, Jiko regulation.</p>
								<p><img src="<?php echo base_url();?>assets/images/l-map.jpg" alt="" title=""></p>
							</div>
						</div>
						</form>
				
		</div>
		
		
		
		
		
		<!--5th box-->
		
		<div id="step1editbox5" class="box myfreerate-box" style="display: none;">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="progressbar">
					<div class="bar" style="width:94%;"></div>
						Step 1 : Start with the basics
					</div>
		    	</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div">
	               			  <div class="pickitem-frm-box">
							   <div class="col-lg-12 col-md-12 col-sm-12">
							   		<h4><strong>Where's your place located?</strong></h4>
								</div>
						   
						    	<div class="col-lg-12 col-md-12 col-sm-12">
						    		<div class="signup-map">
						    			<!--
						    			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14739.541940318572!2d88.35792065!3d22.5459621!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1482489840300" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>-->
						    			
						    			<div id="myMapedit" style="height: 280px; width: 100%"></div>
						    			<!--
										<input id="address" type="text"><br/>
										<input type="text" id="latitude" placeholder="Latitude">
										<input type="text" id="longitude" placeholder="Longitude">-->
						    		</div>
								</div>
							   
				 			  </div>
				 			  
				 			
				 	
				 			  
				 			  
				 			  
				 			   <div class="pickitem-frm-box">
				 			  		<div class="col-lg-12 col-md-12 col-sm-12">
	     								<button class="back" ng-click="goToStep1Box4()"><i class="fa fa-long-arrow-left icon-right"></i>Back</button>
	     								<button class="next" ng-click="goToStep1editFinish()">Finish</button>
									</div>
			 			  		</div>
				 			  
				 			  
				 			  
				 			  

					</div>
					</div>
					

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="box signup-div">
							<i class="fa fa-lightbulb-o blb" aria-hidden="true"></i>
								<p>You may introduce any types of items except items that are prohibited by Hi, Jiko regulation.</p>
								<p><img src="<?php echo base_url();?>assets/images/l-map.jpg" alt="" title=""></p>
							</div>
						</div>
				
		</div>
		
		
		<!--6th box-->
		
		<div id="step1editbox6" class="box myfreerate-box" style="display: none;">
				
			
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
									<p class="small"><a href="#">Change</a></p>


									<div class="line margin-bottom-20"></div>

									 <div class="step-text">Step 2</div>
									<h4><strong>Authentication</strong></h4>
									<p>Photo ID, E-mail, Phone number</p>
									<button class="btn btn-success">Continue</button>

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
	</div>				
	
</div> <!--end container div-->
</div>


