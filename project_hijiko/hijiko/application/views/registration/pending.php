<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyuj4qD6JgNna1tWyG4lhvBoOAuBwAtB0&libraries=places&sensor=false"
         async defer></script>

<div ng-controller="registrationPendingCtrl">
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
	

	
	
	<div id="step3box5" class="box myfreerate-box">
				<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="box jiko-submited-box">
               			
               			 
               			  <div class="pickitem-frm-box">
						 
						   		<h3><strong>Your Jiko Application has been submitted!</strong></h3>

								 
								
								<p class="small">Please wait 1 - 2 days for us to finish reviewing your application. 
Thanks for applying to become a member in our Jiko community.</p>
								
							
								<button class="btn app-btn" ng-click="goToHome()">To Home</button>
								<button class="btn app-btn">My Account</button>
								<button class="btn app-btn">Personal Page</button>
							
			 			  </div>
			 			  
						</div>
						</div>
				
				
					
			
	</div>
	

</div>	
			
	
</div> <!--end container div-->
</div>


