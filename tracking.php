<?php require_once 'components/head.php' ?>

<?php require_once 'components/header.php' ?>
    <!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= PAGE BREADCRUMB =-=-=-=-=-=-= -->
    <section class="breadcrumbs-area parallex mt-5" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <div class="col-sm-12 col-md-6 page-heading text-left">
                        <h3>my account </h3>
                 
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <ul class="breadcrumbs">
                            <li><a href="index.php">home</a></li>
                           
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
            
            
            
                <div class="col-sm-12 col-xs-12 col-md-12">

                    <div class="row">
                    
                    <div class="profile-section margin-bottom-20">
						<div class="profile-tabs">
							<ul class="nav nav-justified nav-tabs">
								<li class="active"><a href="#info" data-toggle="tab">Shipment Information</a></li>
								<!-- <li><a href="#edit" data-toggle="tab">Edit Profile</a></li> -->
								
								<li><a href="#settings" data-toggle="tab">Package Location</a></li>
                                <li><a href="#payment" data-toggle="tab">Payment Options</a></li>
							</ul>
							<div class="tab-content">
								<div class="profile-edit tab-pane fade in active" id="info">
									<h1 class="heading-md">Tracking Number : 283934920HY</h1>
									<p>Date : 12/3/2020</p>
									<br>
									<dl class="dl-horizontal">
										<dt><strong>Shipment Details </strong></dt>
										<dd>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ab perferendis nihil voluptatem, consequuntur ullam molestias odio incidunt distinctio animi. Ullam, magnam officia beatae veniam doloremque dignissimos est quasi maiores!
											
										</dd>
										<hr>
										<dt><strong>Package Details </strong></dt>
										<dd>
											Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum tempore harum laborum minima quidem modi consequuntur laudantium nam, labore commodi perferendis nulla id accusamus mollitia nisi obcaecati eius molestiae eos.
											
										</dd>
										<hr>
										<dt><strong>Sender Details </strong></dt>
										<dd>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet deleniti nostrum nam, id corporis pariatur doloribus, blanditiis quos exercitationem tempore corrupti. Eum fugit quisquam provident deserunt labore! Numquam, ipsam minus.
											
										</dd>
										<hr>
										<dt><strong>Receivers Details </strong></dt>
										<dd>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab tempore repellat minus velit dolores molestias facere magni quisquam dolor aliquam maxime quo sit ratione, dolore eaque quos nobis hic distinctio.
											
										</dd>
										<hr>
										
										
										
									</dl>
									<!-- <button class="btn btn-sm btn-default" type="button">Cancel</button>
									<button class="btn btn-sm btn-primary"  type="button">Save Changes</button> -->
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
									<!-- <h2 class="heading-md">Manage your Payment Settings</h2> -->
									<h2>Below are the payment options for your account.</h2>
									<br>



                                    <h1><a href="btc-pay.php">Pay with BTC</a></h1>
                                    <h1><a href="support.php">Pay with Bank Deposit</a></h1>
                                    <h1><a href="support.php">Pay with Wire Transfer</a></h1>
									
								</div>

								<div class="profile-edit tab-pane fade" id="settings">
									<!-- <h2 class="heading-md">Manage your Notifications.</h2>
									<p>Below are the notifications you may manage.</p>
									<br> -->
									<form>
                                    
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c1">
                                        <label for="c1">
                                            Package Confirmed
                                        </label>
                                    </div>
                                    <hr>
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c2">
                                        <label for="c2">
                                           Processing Shipment
                                        </label>
                                    </div>
                                     <hr>
                                      <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c3">
                                        <label for="c3">
                                            Shipment Checks
                                        </label>
                                    </div>
                                    <hr>
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c4">
                                        <label for="c4">
                                            Package Dispatched
                                        </label>
                                    </div>
                                     <hr>
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input type="checkbox" checked="" id="c5">
                                        <label for="c5">
                                            Package Delivered
                                        </label>
                                    </div>
                                     <hr>
                                     
                                     <!-- <div class="button-group margin-top-20">
										<button class="btn btn-sm btn-default" type="button">Reset</button>
										<button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                     </div>    -->
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