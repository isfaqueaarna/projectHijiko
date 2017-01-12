<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyuj4qD6JgNna1tWyG4lhvBoOAuBwAtB0&libraries=places&sensor=false"
         async defer></script>

<div ng-controller="registrationStep3Ctrl">
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
	

	<!--=============================================STEP 3 =================================================-->
	
	<!--1st box-->
	
	<div id="step3box1" class="box myfreerate-box" style="">
				<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
               			
               			 
               			  <div class="pickitem-frm-box">
						   <div class="col-lg-12 col-md-12 col-sm-12">
						   		<h4><strong>Last step!</strong></h4>
						   		<p class="small">
						   		Let’s make other users get to know you more.</p>
								<p class="small">Language, location, deal category
								<span class="chk"><i class="fa fa-check" aria-hidden="true"></i>
		</span></p>
								<p class="small"><a href="step1edit">Change</a></p>


								<div class="line margin-bottom-20"></div>

								 <div class="step-text">Step 2</div>
								<h4><strong>Authentication</strong></h4>
								<p>Photo ID, E-mail, Phone number<span class="chk"><i class="fa fa-check" aria-hidden="true"></i>
		</span></p>
								<p class="small"><a href="step2edit">Change</a></p>

								<div class="line margin-bottom-20"></div>
								
								
								<div class="step-text">Step 3</div>
								<h4><strong>Introduce Yourself</strong></h4>
								<p>Your profile image, something about yourself</p>
								<button class="btn btn-success" ng-click="goToStep3Box2()">Continue</button>
							</div>
			 			  </div>
			 			  
						</div>
						</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div text-center done-div">
							<img src="<?php echo base_url();?>assets/images/lud-img.jpg" class="done-img" alt="" title="">
						</div>
					</div>
					
			
	</div>
	
	
	<!--2nd box-->
	
	<div id="step3box2" class="box myfreerate-box" style="display: none;">
	<form name="step3box2Form" novalidate>
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="progressbar">
				<div class="bar" style="width:70%;"></div>
					Step 3 : Introduce Yourself
				</div>
	    	</div>
			
			
				<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
               			  <div class="pickitem-frm-box">
						   <div class="col-lg-12 col-md-12 col-sm-12">
						   		<h4><strong>Add your photo</strong></h4>
					
						   		<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="row">
										<div class="add-pic"><img ng-show="step3box2Form.picProfile.$valid" ngf-thumbnail="picProfile"></div>
									</div>
						   		</div>
						   		
						   		<div class="col-lg-6 col-md-6 col-sm-12">
						   		<button class="btn facebook-btn"><i class="fa fa-user icon-right"></i>Use Facebook Photo</button>			
						   		<span id="fileselector">
									<label class="btn Fupbtn" for="upload-file-selector">
										<input id="upload-file-selector" type="file" ngf-select ng-model="picProfile" name="picProfile" accept="image/*" ngf-max-size="2MB" required
                             ngf-model-invalid="errorFile">
										<i class="fa fa-cloud-upload icon-right"></i>upload file
									</label>
                             			<i ng-show="step3box2Form.picProfile.$error.required">*required</i><br>
                      <i ng-show="step3box2Form.picProfile.$error.maxSize">File too large 
                          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
									</label>
								</span>
					   		
					   	
						   		
						   		</div>
						   		
						   		
						   		<div class="clearfix"></div>
								<div class="pickitem-frm-box">
			 			  		<div class="col-lg-12 col-md-12 col-sm-12">
     								<button class="back" ng-click="goToStep3Box1()"><i class="fa fa-long-arrow-left icon-right"></i>Back</button>
     								<button class="next" ng-click="goToStep3Box3(picProfile)" ng-disabled="step3box2Form.$invalid">Next</button>
								</div>
		 			  		</div>
							</div>
			 			  </div>
			 			  
						</div>
						</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
							<i class="fa fa-lightbulb-o blb" aria-hidden="true"></i>
							<p>Everyone on Hi, Jiko has a profile photo, including your customers. This way you know who’s coming to pickup your items, and customers know that they’re dealing with a real person too. </p>
							<p>Make sure the photo clearly shows your face.</p>
							<p>These photos are meant only to confirm identities, not choose from whom to purchase or to whom to sell.</p>
							
						</div>
					</div>
					</form>
					
			
	</div>
	
	
	<!--3rd box-->
	
	<div id="step3box3" class="box myfreerate-box" style="display: none;">
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="progressbar">
				<div class="bar" style="width:97%;"></div>
					Step 3 : Introduce Yourself
				</div>
	    	</div>
			
				<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
               			  <div class="pickitem-frm-box">
						   <div class="col-lg-12 col-md-12 col-sm-12">
						   		<h4><strong>Write something about yourself. Greet to your potential customers.</strong></h4>
					
						   		<div class="grt-textarea"></div>			
						   		 <div class="form-group">
									  <textarea class="form-control" ng-model="vdAboutYourself" name="vdAboutYourself" rows="5" id=""></textarea>
								</div>
						   		
						   		<div class="clearfix"></div>
								<div class="pickitem-frm-box">
			 			  		<div class="col-lg-12 col-md-12 col-sm-12">
     								<button class="back" ng-click="goToStep3Box2()"><i class="fa fa-long-arrow-left icon-right"></i>Back</button>
     								<button class="next" ng-click="goToStep3Box4()">Next</button>
								</div>
		 			  		</div>
							</div>
			 			  </div>
			 			  
						</div>
						</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
							<i class="fa fa-lightbulb-o blb" aria-hidden="true"></i>
							<p>This introduction will be presented in your shop. Please let other users 
coming to  your shop learn who you are.</p>
							<p>If users feel kindness and friendship by visiting your shop, they will trust you and your introduced local deals better.</p>
							
						</div>
					</div>
					
			
	</div>
	
	
	<!--4th box-->
	
	
	<div id="step3box4" class="box myfreerate-box" style="display: none;">
				<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div">
               			
               			 
               			  <div class="pickitem-frm-box">
						   <div class="col-lg-12 col-md-12 col-sm-12">
						   		<h4><strong>All done!</strong></h4>
						   		<p class="small">
						   		Now, you may submit your application to us, or go back to previous steps to make a change.</p>
								<p class="small">Language, location, deal category
								<span class="chk"><i class="fa fa-check" aria-hidden="true"></i>
		</span></p>
								<p class="small"><a href="step3edit">Change</a></p>


								<div class="line margin-bottom-20"></div>

								 <div class="step-text">Step 2</div>
								<h4><strong>Authentication</strong></h4>
								<p>Photo ID, E-mail, Phone number<span class="chk"><i class="fa fa-check" aria-hidden="true"></i>
		</span></p>
								<p class="small"><a href="step2edit">Change</a></p>

								<div class="line margin-bottom-20"></div>
								
								
								<div class="step-text">Step 3</div>
								<h4 class="desable-text"><strong>Introduce Yourself</strong></h4>
								<p class="desable-text">Your profile image, something about yourself
								<span class="chk"><i class="fa fa-check" aria-hidden="true"></i>
		</span></p>
								<button class="btn sub-btn" ng-click="goToStep3Finish()">Submit</button>
							</div>
			 			  </div>
			 			  
						</div>
						</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box signup-div text-center done-div">
							<img src="<?php echo base_url();?>assets/images/done-img.jpg" class="done-img" alt="" title="">
						</div>
					</div>
					
			
	</div>
	
	
	<!--5th box-->
	
	
	<div id="step3box5" class="box myfreerate-box" style="display: none;">
				<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="box jiko-submited-box">
               			
               			 
               			  <div class="pickitem-frm-box">
						 
						   		<h3><strong>Your Jiko Application has been submitted!</strong></h3>

								 
								
								<p class="small">Please wait 1 - 2 days for us to finish reviewing your application. 
Thanks for applying to become a member in our Jiko community.</p>
								
							
								<button class="btn app-btn">To Home</button>
								<button class="btn app-btn">My Account</button>
								<button class="btn app-btn">Personal Page</button>
							
			 			  </div>
			 			  
						</div>
						</div>
				
				
					
			
	</div>
	

</div>	
			
	
</div> <!--end container div-->
</div>


