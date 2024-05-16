<?php require_once 'components/head.php' ?>

<?php require_once 'components/header.php' ?>


    <!-- =-=-=-=-=-=-= PAGE BREADCRUMB =-=-=-=-=-=-= -->
    <section class="breadcrumbs-area parallex">
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <div class="col-sm-12 col-md-6 page-heading text-left">
                        <h3>create your account</h3>
                        <h2>Sign Up</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <ul class="breadcrumbs">
                            <li><a href="#">home</a></li>
                            <li><a href="#">pages</a></li>
                            <li><a href="#">sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =-=-=-=-=-=-= PAGE BREADCRUMB END =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= Sign UP Section =-=-=-=-=-=-= -->

    <section class="section-padding-70">
        <div class="container">
        <div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<form class="registration">
						<div class="box-header">
							<h2>Register a new account</h2>
							<p>Already Signed Up? Click <a href="#">Sign In</a> to login your account.</p>
						</div>

						<label>First Name</label>
						<input type="text" class="form-control margin-bottom-20">

						<label>Last Name</label>
						<input type="text" class="form-control margin-bottom-20">

						<label>Email Address <span class="color-red">*</span></label>
						<input type="text" class="form-control margin-bottom-20">

						<div class="row">
							<div class="col-sm-6">
								<label>Password <span class="color-red">*</span></label>
								<input type="password" class="form-control margin-bottom-20">
							</div>
							<div class="col-sm-6">
								<label>Confirm Password <span class="color-red">*</span></label>
								<input type="password" class="form-control margin-bottom-20">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-8 col-sm-8 col-xs-12 checkbox">
                            
                             <div class="checkbox checkbox-default">
                                <input type="checkbox" id="checkbox2">
                                <label for="checkbox2">
                                  I read <a href="#">Terms and Conditions</a>
                                </label>
                            </div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 text-right">
								<button type="submit" class="btn btn-primary btn-sm">Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </section>

    <!-- =-=-=-=-=-=-= Section End =-=-=-=-=-=-= -->


<?php require_once 'components/footer.php' ?>