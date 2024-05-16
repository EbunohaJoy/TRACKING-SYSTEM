<?php require_once 'components/head.php' ?>

<?php require_once 'components/header.php' ?>
    <!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= PAGE BREADCRUMB =-=-=-=-=-=-= -->
    <section class="breadcrumbs-area parallex">
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <div class="col-sm-12 col-md-6 page-heading text-left">
                        <h3>my account </h3>
                        <h2>My Profile</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <ul class="breadcrumbs">
                            <li><a href="#">home</a></li>
                            <li><a href="#">pages</a></li>
                            <li><a href="#">profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =-=-=-=-=-=-= PAGE BREADCRUMB END =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Blog & News =-=-=-=-=-=-= -->
    <section id="blog" class="custom-padding">
        <div class="container">
            <!-- Row -->
            <div class="row">
            
                <div class="col-sm-12 col-xs-12 col-md-4">

                    <!-- sidebar -->
                    <div class="profile-sidebar">
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id="img-upload" class="img-responsive" src="images/avatar.png" alt="" />
                        </div>
                    </form>
                
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a target="_blank" href="#">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
                    <!-- sidebar end -->

                </div>
            
                <div class="col-sm-12 col-xs-12 col-md-8">

                    <div class="row">
                    
                    <div class="profile-section margin-bottom-20">
						<div class="profile-tabs">
							<ul class="nav nav-justified nav-tabs">
								<li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
								<li><a href="#edit" data-toggle="tab">Edit Profile</a></li>
								<li><a href="#payment" data-toggle="tab">Payment Options</a></li>
								<li><a href="#settings" data-toggle="tab">Notification Settings</a></li>
							</ul>
							<div class="tab-content">
								<div class="profile-edit tab-pane fade in active" id="profile">
									<h2 class="heading-md">Manage your Name, ID and Email Addresses.</h2>
									<p>Below are the name and email addresses on file for your account.</p>
									<br>
									<dl class="dl-horizontal">
										<dt><strong>Your name </strong></dt>
										<dd>
											Muhammad Umair
											
										</dd>
										<hr>
										<dt><strong>Your ID </strong></dt>
										<dd>
											UZ1-23456
											
										</dd>
										<hr>
										<dt><strong>Company name </strong></dt>
										<dd>
											Scripts Bundle
											
										</dd>
										<hr>
										<dt><strong>Email Address </strong></dt>
										<dd>
											contact@scriptsbundle.com
											
										</dd>
										<hr>
										<dt><strong>Phone Number </strong></dt>
										<dd>
											(0423) 12-2345-789
											
										</dd>
										<hr>
										<dt><strong>Office Number </strong></dt>
										<dd>
											(+92) 12-3456-789
											
										</dd>
										<hr>
										<dt><strong>Address </strong></dt>
										<dd>
											Lahore, PK
											
										</dd>
										<hr>
									</dl>
									<button class="btn btn-sm btn-default" type="button">Cancel</button>
									<button class="btn btn-sm btn-primary"  type="button">Save Changes</button>
								</div>

								<div class="profile-edit tab-pane fade" id="edit">
									<h2 class="heading-md">Manage your Security Settings</h2>
									<p>Change your password.</p>
									<br>
									<form>

                                    <label>Your Name </label>
                                    <input type="text" class="form-control margin-bottom-20">
            
                                    
                                    <label>Email Address <span class="color-red">*</span></label>
                                    <input type="text" class="form-control margin-bottom-20">
                                    
                                    <label>Contact Number <span class="color-red">*</span></label>
                                    <input type="text" class="form-control margin-bottom-20">
                                    
                                    <label>Address <span class="color-red">*</span></label>
                                     <textarea class = "form-control margin-bottom-20" rows = "3"></textarea>
   

                                    <div class="row">
                                    
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" checked="" id="checkbox2">
                                        <label for="checkbox2">
                                            I read <a href="#">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    </div>
                                    
                                       
                                        <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-sm">Update My Info</button>
                                        </div>
                                    </div>
					            </form>
								</div>

								<div class="profile-edit tab-pane fade" id="payment">
									<h2 class="heading-md">Manage your Payment Settings</h2>
									<p>Below are the payment options for your account.</p>
									<br>
									<form action="#" id="sky-form" class="sky-form" novalidate>
										<!--Checkout-Form-->
                                        
                                        
                                        <div class="payment-group margin-bottom-30">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                            <label for="inlineRadio1"> Visa</label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio2" value="option1" name="radioInline">
                                            <label for="inlineRadio2"> MasterCard </label>
                                        </div>
                                         <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio3" value="option1" name="radioInline">
                                            <label for="inlineRadio3"> PayPal </label>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-9 col-md-9">
                                                <input type="text" class="form-control margin-bottom-20" placeholder="Card number" id="card" name="card">
                                            </div>
                                            <div class="col-sm-3 col-md-3">
                                               <input type="text" class="form-control margin-bottom-20" placeholder="CVV2" id="cvv" name="cvv">
                                            </div>
						                </div>
                                        
                                        
                                    
										

										<div class="row">
                                            <label class="col-md-4"><span class="expiration-date">Expiration Date</span> <span class="color-red">*</span></label>
											
											<div class="col-md-5 ">
													<select name="month" class="form-control ">
														<option value="0" selected="" disabled="">Month</option>
														<option value="1">January</option>
														<option value="1">February</option>
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
											<div class="col col-md-3">
												<label class="input">
													<input type="text" class="form-control margin-bottom-20" name="year" id="year" placeholder="Year">
												</label>
											</div>
										</div>
										<button class="btn btn-sm btn-default"type="button">Cancel</button>
										<button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
										<!--End Checkout-Form-->
									</form>
								</div>

								<div class="profile-edit tab-pane fade" id="settings">
									<h2 class="heading-md">Manage your Notifications.</h2>
									<p>Below are the notifications you may manage.</p>
									<br>
									<form>
                                    
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c1">
                                        <label for="c1">
                                            Send me email notification when when order is processed
                                        </label>
                                    </div>
                                    <hr>
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c2">
                                        <label for="c2">
                                           Send me email notification when when order is delivered
                                        </label>
                                    </div>
                                     <hr>
                                      <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c3">
                                        <label for="c3">
                                            Send me email notification for the latest update
                                        </label>
                                    </div>
                                    <hr>
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c4">
                                        <label for="c4">
                                            Receive our monthly newsletter
                                        </label>
                                    </div>
                                     <hr>
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c5">
                                        <label for="c5">
                                            Email notification
                                        </label>
                                    </div>
                                     <hr>
                                     
                                     <div class="button-group margin-top-20">
										<button class="btn btn-sm btn-default" type="button">Reset</button>
										<button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                     </div>   
									</form>
								</div>
							</div>
						</div>
					</div>
                    
                    </div>

                </div>

                
            </div>

            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Blog & News end =-=-=-=-=-=-= -->


<?php require_once 'components/footer.php' ?>