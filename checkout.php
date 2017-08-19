<!DOCTYPE html>
<html>
	<head>
		<?php require('inc/meta.php') ?>
		<title>Checkout - Easy Shop</title>
		<link rel="stylesheet" href="assets/css/app.min.css">
	</head>
	<body>
		<?php require('inc/nav.php') ?>
		<div class="main checkout">
			<div class="easy-section">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 stepwizard">
							<div class="stepwizard-row setup-panel">
								<div class="stepwizard-step">
									<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
									<p>Delivery Address</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
									<p>Payment Address</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
									<p>Payment &amp; Order</p>
								</div>
							</div>
						</div>
					</div>
					<form role="form" action="" method="post">
						<div class="row setup-content" id="step-1">
							<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
								<div class="col-md-12">
									<h3> Delivery Address</h3>
									<hr>
									<div class="form-group">
										<input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
									</div>
									<div class="form-group">
										<input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
									</div>
									<div class="form-group">
										<input type="email" name="" id="input" class="form-control" value="" required="required" title="" placeholder="Enter Your Email">
									</div>

									
									<div class="form-group">
										<div class="row">

										<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<input type="text" name="country" id="city" class="form-control" value="" required="required"  title="" placeholder="Country">
												</div>
											</div>


											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
												
															<select name="" id="state" class="form-control">
																<option value="">-- Select One --</option>
															</select>

															

												</div>
											</div>
											
												
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
												<input type="text" name="pincode" id="pincode" class="form-control" value="" required="required" title="" placeholder="Pincode">
												</div>
											</div>
											
												<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<input type="text" name="city" id="city" class="form-control" value="" required="required"  title="" placeholder="City">
												</div>
											</div>
										</div>
									</div>



									






									<div class="form-group">
										<textarea required="required" class="form-control" placeholder="Enter your address" ></textarea>
									</div>
									<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
								</div>
							</div>
						</div>
						<div class="row setup-content" id="step-2">
							<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
								<div class="col-md-12">
									<h3> Payment Address</h3>
									<hr>
									<div class="form-group">
										<label class="control-label">Company Name</label>
										<input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
									</div>
									<div class="form-group">
										<label class="control-label">Company Address</label>
										<input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
									</div>
									<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
								</div>
							</div>
						</div>
						<div class="row setup-content" id="step-3">
							<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
								<div class="col-md-12">
									<h3> Place Order</h3>
									<hr>
									<button class="btn btn-success btn-lg pull-right" type="submit">Place Order</button>
								</div>
							</div>
						</div>
					</form>
					</div> <!-- end of container -->
				</div>
			</div>
			<?php require_once 'inc/footer.php';?>
			<!-- Scripts -->
			<script src="assets/js/app.min.js" type="text/javascript" charset="utf-8"></script>
		</body>
	</html>