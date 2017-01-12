<div ng-controller="homeCtrl">
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

			                                <a href="registration" >As a Jiko </a>

			                                <?php
			                                	}
			                                ?>
			                                
			                                </li>
			                                
			                                <li><a href="home/logout">Sign out</a></li>
			                               
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


<!--=============================login form Modal box=================================-->

 <div class="loginpop">
 	<div class="modal fade" id="loginModal" role="dialog">
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  
			</div>
			<div class="modal-body">
			 <button class="btn facebookbtn"><i class="fa fa-facebook pull-left"></i>Log in with Facebook</button>
			 <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
			 <button class="btn googlebtn"><i class="fa fa-google pull-left"></i>Log in with Google</button>
			 
			 <div class="line"><span class="or">or</span></div>
			 	<div class="clearfix"></div>
			 <div class="logform-area">
			 	 <form name="loginForm" novalidate>
					<div class="input-group">
					  <input type="email" class="form-control" placeholder="Email address" ng-model="userEmail" name="userEmail" aria-describedby="basic-addon1" required>
					   <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
					</div>
			        <span style="color:red;" ng-show="loginForm.userEmail.$dirty && loginForm.userEmail.$invalid">
			          <span ng-show="loginForm.userEmail.$error.required">Email is required</span>
			          <span ng-show="loginForm.userEmail.$error.email">Invalid email address</span>
			        </span>
					
					<div class="input-group">
					  <input type="password" class="form-control" placeholder="Password" ng-model="userPassword" name="userPassword" aria-describedby="basic-addon1" required>
					   <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
					</div>
			        <span style="color:red;" ng-show="loginForm.userPassword.$dirty && loginForm.userPassword.$invalid">
			          <span ng-show="loginForm.userPassword.$error.required">Password is required</span>
			        </span>
					
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
					
					<a href="#">Use phone number instead Can't log in?</a>
					<button type="submit" ng-click="submitLogin()" ng-disabled="loginForm.$invalid" class="btn loginbtn">Login</button>
			 	</form>
			 </div>
			
			 
			</div>
			<div class="modal-footer">
			  <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
			  <p class="text-left">Don't have an account <button type="submit" ng-click="goToSignup()" class="btn btn-default pull-right">Sign up</button></p>
			  
			</div>
		  </div>

		</div>
  </div>
 </div>

  






<!--=============================sign up form Modal box=================================-->

 <div class="loginpop">
 	<div class="modal fade" id="signupModal" role="dialog">
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  
			</div>
			<div class="modal-body">
			 <p class="small text-center">Sign up with <a href="#">Facebook</a> or <a href="#">Google</a></p>
			 
			 <div class="line"><span class="or">or</span></div>
			 	<div class="clearfix"></div>
			 <div class="logform-area">
			 	 <form name="signupForm" novalidate>
			 	 
					 <div class="col-lg-12 col-md-12 col-sm-12">
					 	<div class="row">
					 		<div class="input-group">
							  <input type="email" class="form-control" ng-model="userEmail" name="userEmail" placeholder="Email address" aria-describedby="basic-addon1" required>
							   <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
							</div>
					        <span style="color:red;" ng-show="signupForm.userEmail.$dirty && signupForm.userEmail.$invalid">
					          <span ng-show="signupForm.userEmail.$error.required">Email is required</span>
					          <span ng-show="signupForm.userEmail.$error.email">Invalid email address</span>
					        </span>
					 	</div>
					 </div>
					 
					 
					 <div class="col-lg-12 col-md-12 col-sm-12">
					 	<div class="row">
					 		<div class="input-group">
							  <input type="text" class="form-control" ng-model="userFirstName" name="userFirstName" placeholder="First name" aria-describedby="basic-addon1" required>
							   <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
							</div>
					        <span style="color:red;" ng-show="signupForm.userFirstName.$dirty && signupForm.userFirstName.$invalid">
					          <span ng-show="signupForm.userFirstName.$error.required">First Name is required</span>
					        </span>
					 	</div>
					 </div>
					 
					 <div class="col-lg-12 col-md-12 col-sm-12">
					 	<div class="row">
					 		<div class="input-group">
							  <input type="text" class="form-control" ng-model="userLastName" name="userLastName" placeholder="Last name" aria-describedby="basic-addon1" required>
							   <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
							</div>
					        <span style="color:red;" ng-show="signupForm.userLastName.$dirty && signupForm.userLastName.$invalid">
					          <span ng-show="signupForm.userLastName.$error.required">Last Name is required</span>
					        </span>
					 	</div>
					 </div>
					 
					 
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row">
							<div class="input-group">
							  <input type="password" class="form-control" ng-model="userPassword" name="userPassword" placeholder="Password" aria-describedby="basic-addon1" required>
							   <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
							</div>
					        <span style="color:red;" ng-show="signupForm.userPassword.$dirty && signupForm.userPassword.$invalid">
					          <span ng-show="signupForm.userPassword.$error.required">Password is required</span>
					        </span>
						</div>
					</div> 	
					
					 
					 <div class="col-lg-12 col-md-12 col-sm-12">
					 	<div class="row">
					 		<p class="margin-bottom-15">Birthday
					 		<a href="#" class="black" data-toggle="tooltip" data-placement="top" title="To sign up, you must ne 18 or older.
Other perple won,t see your birthday."><i class="fa fa-question-circle icon-left"></i></a></p>
						</div>
			        </div>
			      	
			      			<div class="col-lg-4 col-md-4 col-sm-12">
			      				<div class="row">
									<div class="Morelng">
										<div class="spr_selector">
											<label class="fa fa-sort-desc"></label>
											<select class="spr_select" ng-model="userBirthMonth" name="userBirthMonth" required>																							
													<option value="1">Janauary</option>												
													<option value="2">February</option>
													<option value="3">March</option>
													<option value="4">April</option>												
													<option value="5">May</option>
													<option value="6">June</option>
													<option value="7">July</option>												
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>												
													<option value="11">November</option>
													<option value="12">December</option>
											</select>
										</div>
									</div>
			      			     </div>
			      		    </div>
			      		    
			      		    <div class="col-lg-4 col-md-4 col-sm-12">
									<div class="Morelng">
										<div class="spr_selector">
											<label class="fa fa-sort-desc"></label>
											<select class="spr_select" ng-model="userBirthDate" name="userBirthDate" placeholder="Date" required>																	
													<option value="1">1</option>												
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>												
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>												
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>												
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>												
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>												
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>												
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>												
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>												
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>												
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>												
											</select>
										</div>
									</div>
			      		    </div>
			      		    
			      		    
			      		    <div class="col-lg-4 col-md-4 col-sm-12">
			      				<div class="row">
									<div class="Morelng">
										<div class="spr_selector">
											<label class="fa fa-sort-desc"></label>
											<select class="spr_select" ng-model="userBirthYear" name="userBirthYear" required>
												<option value="2016">2016</option>
												<option value="2015">2015</option>
												<option value="2014">2014</option>
											    <option value="2013">2013</option>
											    <option value="2012">2012</option>
											    <option value="2011">2011</option>
											    <option value="2010">2010</option>
											    <option value="2009">2009</option>
											    <option value="2008">2008</option>
											    <option value="2007">2007</option>
											    <option value="2006">2006</option>
											    <option value="2005">2005</option>
											    <option value="2004">2004</option>
											    <option value="2003">2003</option>
											    <option value="2002">2002</option>
											    <option value="2001">2001</option>
											    <option value="2000">2000</option>
											    <option value="1999">1999</option>
											    <option value="1998">1998</option>
											    <option value="1997">1997</option>
											    <option value="1996">1996</option>
											    <option value="1995">1995</option>
											    <option value="1994">1994</option>
											    <option value="1993">1993</option>
											    <option value="1992">1992</option>
											    <option value="1991">1991</option>
											    <option value="1990">1990</option>
											    <option value="1989">1989</option>
											    <option value="1988">1988</option>
											    <option value="1987">1987</option>
											    <option value="1986">1986</option>
											    <option value="1985">1985</option>
											    <option value="1984">1984</option>
											    <option value="1983">1983</option>
											    <option value="1982">1982</option>
											    <option value="1981">1981</option>
											    <option value="1980">1980</option>
											    <option value="1979">1979</option>
											    <option value="1978">1978</option>
											    <option value="1977">1977</option>
											    <option value="1976">1976</option>
											    <option value="1975">1975</option>
											    <option value="1974">1974</option>
											    <option value="1973">1973</option>
											    <option value="1972">1972</option>
											    <option value="1971">1971</option>
											    <option value="1970">1970</option>
											    <option value="1969">1969</option>
											    <option value="1968">1968</option>
											    <option value="1967">1967</option>
											    <option value="1966">1966</option>
											    <option value="1965">1965</option>
											    <option value="1964">1964</option>
											    <option value="1963">1963</option>
											    <option value="1962">1962</option>
											    <option value="1961">1961</option>
											    <option value="1960">1960</option>
											    <option value="1959">1959</option>
											    <option value="1958">1958</option>
											    <option value="1957">1957</option>
											    <option value="1956">1956</option>
											    <option value="1955">1955</option>
											    <option value="1954">1954</option>
											    <option value="1953">1953</option>
											    <option value="1952">1952</option>
											    <option value="1951">1951</option>
											    <option value="1950">1950</option>
											    <option value="1949">1949</option>
											    <option value="1948">1948</option>
											    <option value="1947">1947</option>
											    <option value="1946">1946</option>
											    <option value="1945">1945</option>
											    <option value="1944">1944</option>
											    <option value="1943">1943</option>
											    <option value="1942">1942</option>
											    <option value="1941">1941</option>
											    <option value="1940">1940</option>
											    <option value="1939">1939</option>
											    <option value="1938">1938</option>
											    <option value="1937">1937</option>
											    <option value="1936">1936</option>
											    <option value="1935">1935</option>
											    <option value="1934">1934</option>
											    <option value="1933">1933</option>
											    <option value="1932">1932</option>
											    <option value="1931">1931</option>
											    <option value="1930">1930</option>
											    <option value="1929">1929</option>
											    <option value="1928">1928</option>
											    <option value="1927">1927</option>
											    <option value="1926">1926</option>
											    <option value="1925">1925</option>
											    <option value="1924">1924</option>
											    <option value="1923">1923</option>
											    <option value="1922">1922</option>
											    <option value="1921">1921</option>
											    <option value="1920">1920</option>
											    <option value="1919">1919</option>
											    <option value="1918">1918</option>
											    <option value="1917">1917</option>
											    <option value="1916">1916</option>
											    <option value="1915">1915</option>
											    <option value="1914">1914</option>
											    <option value="1913">1913</option>
											    <option value="1912">1912</option>
											    <option value="1911">1911</option>
											    <option value="1910">1910</option>
											    <option value="1909">1909</option>
											    <option value="1908">1908</option>
											    <option value="1907">1907</option>
											    <option value="1906">1906</option>
											    <option value="1905">1905</option>
											</select>
										</div>
									</div>
			      			     </div>
			      		    </div>
			      
				     
				      
				    			 
				
					
					<div class="checkbox">
						<label><input type="checkbox" ng-model="userSubscribe">I’d like to receive coupons, promotions, serveys, andupdates via email about Hi, Jiko.</label>
					</div>
					
					<p class="small">By signing up, I agree to Hi, Jiko’s <a href="#">User Agreement. </a></p>
					<button type="submit" ng-disabled="signupForm.$invalid" ng-click="submitSignup()" class="btn loginbtn">Signup</button>
			 	</form>
			 </div>
			
			 
			</div>
			<div class="modal-footer">
			  <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
			  <p class="text-left">I have an account <button type="submit" ng-click="goToLogin()" class="btn btn-default pull-right">Sign in</button></p>
			  
			</div>
		  </div>

		</div>
  </div>
 </div>


	
<!--start slider area	-->
<div class="container">
	<div class="col-lg-12">
		<div class="slider">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <div class="bnr-contain">
     	<h2>Shopping without Shipping.</h2>
     	<div class="bnr-dtl">Meet our Hi, Jiko community. We reside in different countries.
We introduce our local hot deals. We help you purchase them.</div>
    <a href="#">Finf Jiko</a>
     </div>
      <img src="<?php echo base_url();?>assets/images/slider1.jpg" alt="">
    </div>

    <div class="item">
     <div class="bnr-contain">
     	<h2>Shopping without Shipping.</h2>
     	<div class="bnr-dtl">Meet our Hi, Jiko community. We reside in different countries.
We introduce our local hot deals. We help you purchase them.</div>
    <a href="#">Finf Jiko</a>
     </div>
      <img src="<?php echo base_url();?>assets/images/slider2.jpg" alt="">
    </div>

    <div class="item">
     <div class="bnr-contain">
     	<h2>Shopping without Shipping.</h2>
     	<div class="bnr-dtl">Meet our Hi, Jiko community. We reside in different countries.
We introduce our local hot deals. We help you purchase them.</div>
    <a href="#">Finf Jiko</a>
     </div>
      <img src="<?php echo base_url();?>assets/images/slider3.jpg" alt="">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
	</div>
	
	<!--product tab area-->
	
		

<div class="col-lg-12">
<div class="home-pro-area">
	<div class="pro-tab">

<div id="tabInfo">
Selected tab: <span class="tabName"></span>
</div>
<h2>Deal Category</h2>
<div id="verticalTab">
<ul class="resp-tabs-list">
<li>Electronics</li>
<li>Electronics Accessories</li>
<li>Sports</li>
<li>Toy, Kids & Baby</li>
<li>Home & Garden</li>
<li>Food & Snacks</li>
<li>Fashion</li>
<li>Entertainment</li>
<li>Books</li>
</ul>
<div class="resp-tabs-container">

<!--start Electronics tab-->

<div class="ele-protab">
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	
</div>

<!--start Accessories tab-->

<div class="acc-protab">
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	

<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>


</div>


<!--start Sports tab-->

<div class="sports-protab">
<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
</div>


<!--start Toy tab-->

<div class="toy-protab">
<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
</div>

<!--start garden tab-->
<div class="garden-protab">
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
			<div class="pro-status">5 I have it now</div>
		</div>
	</div>
</div>

<!--start food tab-->

<div class="food-protab">
<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
</div>

<!--start fashion tab-->

<div class="fashion-protab">
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
</div>

<!--start Entertainment tab-->
<div class="entr-protab">
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
</div>


<!--start book tab-->
<div class="book-protab">

<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="product-box">
			<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg" /></div>
			<div class="pro-dtl-area">
				<div class="color-area">
				<i class="fa fa-square orange"></i>
				<i class="fa fa-square blue"></i>
				<i class="fa fa-square green"></i>
				<i class="fa fa-square yellow"></i>
				<i class="fa fa-square red"></i>
				</div>
				<div class="pro-price">$35</div>
				<div class="pro-con">
					 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
				</div>
				<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
			</div>
		</div>
	</div>
</div>


</div>
</div>
<br />
<div style="height: 30px; clear: both"></div>
</div>
</div>
	
	</div>	
	
	
	
<!--start hot deals area-->
<div class="col-lg-12">
	<div class="hotdeal-area">
		<h2>Hot Deals In Each Country</h2>
		<div class="country-area">
			<ul>
				
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">South Korea</div>
				</li>
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">Japan</div>
				</li>
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">United States</div>
				</li>
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">Taiwan</div>
				</li>
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">France</div>
				</li>
				
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">Germany</div>
				</li>
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">United Kingdom</div>
				</li>
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">Thailand</div>
				</li>
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">Australia</div>
				</li>
				<li>
					<div class="img-area"></div>
					<div class="cnt-name">New Zeland</div>
				</li>
			</ul>
		</div>
	</div>
</div>

	
<!--start find product area	-->
<div class="col-lg-12">
	<div class="fnd-delivery-area">
		<h2>Find Your Products with Jiko Delivery Options.</h2>
		<div class="row">
		<div class="col-md-3 col-sm-6">
		<a href="#">
			<div class="dlv-box">
				<div class="icon-area"><img src="<?php echo base_url();?>assets/images/pickup-icon.png" /></div>
				<div class="title-text">LOCAL <br>PICK UP</div>
			</div>
		</a>
		</div>
		
		<div class="col-md-3 col-sm-6">
		<a href="#">
			<div class="dlv-box">
				<div class="icon-area"><img src="<?php echo base_url();?>assets/images/delivery-icon.png" /></div>
				<div class="title-text">LOCAL<br>DELIVERY</div>
			</div>
		</a>
		</div>
		
		<div class="col-md-3 col-sm-6">
		<a href="#">
			<div class="dlv-box">
				<div class="icon-area"><img src="<?php echo base_url();?>assets/images/travel-icon.png" /></div>
				<div class="title-text">TRAVEL & DELIVER</div>
			</div>
		</a>
		</div>
		
		<div class="col-md-3 col-sm-6">
		<a href="#">
			<div class="dlv-box">
				<div class="icon-area"><img src="<?php echo base_url();?>assets/images/shipping-icon.png" /></div>
				<div class="title-text">INTERNATIONAL SHIPPING</div>
			</div>
		</a>
		</div>
		</div>
	</div>
</div>


	
<!--start pickup proces	-->	

<div class="col-lg-12">
<div class="row">
	<div class="pickup-proces-area">
		<div class="col-md-6 col-sm-6">
			<a href="#">
				<div class="pickup-proces-box picbg1">
					<div class="sml-title">Local Pick Up</div>
					<div class="big-title">in SEOUL</div>
				</div>
			</a>
		</div>
		
		<div class="col-md-6 col-sm-6">
			<a href="#">
				<div class="pickup-proces-box picbg2">
					<div class="sml-title">Travel & Deliver </div>
					<div class="big-title">in BEIJING</div>
				</div>
			</a>
		</div>
		
		<div class="col-md-6 col-sm-6">
			<a href="#">
				<div class="pickup-proces-box picbg3">
					<div class="sml-title">LOCAL PICK UP </div>
					<div class="big-title">in PARIS</div>
				</div>
			</a>
		</div>
		
		<div class="col-md-6 col-sm-6">
			<a href="#">
				<div class="pickup-proces-box picbg1">
					<div class="sml-title">Travel & Deliver </div>
					<div class="big-title">in SEOUL</div>
				</div>
			</a>
		</div>
		
	</div>
</div>
	
</div>	
	
<!--ad area-->
<div class="col-lg-12">
	<div class="sample-sec"><img src="<?php echo base_url();?>assets/images/samplae.png" /></div>
</div>


<!--best deal area-->

<div class="col-lg-12">
	<div class="best-deal-area">
		<h2>BEST HOT DEALS NOW!</h2>
	
			<section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
             <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
              
            </div>
            <div class="item">
             <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
            <div class="item">
             <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
            <div class="item">
              <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
            <div class="item">
              <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
            <div class="item">
              <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"><img src="<?php echo base_url();?>assets/images/pro1.jpg"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
           
      
          </div>
          <!--<a class="button secondary play">Play</a> 
          <a class="button secondary stop">Stop</a>-->

        </div>
      </div>
    </section>	
	</div>	
</div>
			
	
<!--ad area-->			
<div class="col-lg-12">
	<div class="sample-sec"><img src="<?php echo base_url();?>assets/images/samplae.png"></div>
</div> <!--end add div-->
			
			

<!--best BEST ELECTRONICS DEALS deal area-->

<div class="col-lg-12">
	<div class="best-deal-area">
		<h2>BEST ELECTRONICS DEALS</h2>
	
	<section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
             <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
              
            </div>
            <div class="item">
             <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
            <div class="item">
             <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
            <div class="item">
              <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
            <div class="item">
              <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
            <div class="item">
              <div class="col-lg-12">
             	<div class="product-box">
					<div class="pro-img-area"></div>
						<div class="pro-dtl-area">
							<div class="color-area">
							<i class="fa fa-square orange"></i>
							<i class="fa fa-square blue"></i>
							<i class="fa fa-square green"></i>
							<i class="fa fa-square yellow"></i>
							<i class="fa fa-square red"></i>
							</div>
							<div class="pro-price">$35</div>
							<div class="pro-con">
								 scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. 
							</div>
							<div class="pro-map"><i class="fa fa-map-marker"></i>South Korea</div>
						</div>
				</div>
             </div>
            </div>
           
      
          </div>
          <!--<a class="button secondary play">Play</a> 
          <a class="button secondary stop">Stop</a>-->

        </div>
      </div>
    </section>	
	</div>	
</div>			

<!--ad area-->			
<div class="col-md-6"><div class="add-sml-area"><img src="<?php echo base_url();?>assets/images/add1.png"/></div></div> <!--end add div-->	
<div class="col-md-6"><div class="add-sml-area"><img src="<?php echo base_url();?>assets/images/add2.png"/></div></div> <!--end add div-->		

	
<!--kingdom store-->	
			
	
		<div class="col-lg-12">
	<div class="kingdom-store-area">
		<h2>Store</h2>
		<div class="row">
		<div class="col-md-3 col-sm-6">
		<a href="#">
			<div class="store-box">
			<h2>UNITED KINGDOM</h2>
				<div class="icon-area"></div>
				<div class="title-text">UK TOY STORE</div>
				<div class="ph-btn"><i class="fa fa-phone"></i>Contact</div>
			</div>
		</a>
		</div>
		
		<div class="col-md-3 col-sm-6">
		<a href="#">
			<div class="store-box">
			<h2>UNITED KINGDOM</h2>
				<div class="icon-area"></div>
				<div class="title-text">UK TOY STORE</div>
				<div class="ph-btn"><i class="fa fa-phone"></i>Contact</div>
			</div>
		</a>
		</div>
		
		<div class="col-md-3 col-sm-6">
		<a href="#">
			<div class="store-box">
			<h2>UNITED KINGDOM</h2>
				<div class="icon-area"></div>
				<div class="title-text">UK TOY STORE</div>
				<div class="ph-btn"><i class="fa fa-phone"></i>Contact</div>
			</div>
		</a>
		</div>
		
		<div class="col-md-3 col-sm-6">
		<a href="#">
			<div class="store-box">
			<h2>UNITED KINGDOM</h2>
				<div class="icon-area"></div>
				<div class="title-text">UK TOY STORE</div>
				<div class="ph-btn"><i class="fa fa-phone"></i>Contact</div>
			</div>
		</a>
		</div>
		</div>
	</div>
</div>
				
				
	
</div> <!--end container div-->
</div>


