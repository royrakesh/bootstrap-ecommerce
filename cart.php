<!DOCTYPE html>
<html>
	<head>
		
		<?php require('inc/meta.php') ?>
		<title>Cart - Easy Shop</title>
		<link rel="stylesheet" href="assets/css/app.min.css">
		
	</head>
	<body>
		<?php require('inc/nav.php') ?>
		
		<div class="main cart">
			<div class="easy-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12"><h1 class="page-title">Cart</h1></div>
					</div>
					
					<div class="row m-t-30">
						<div class="col-sm-12 col-md-9">
							<div class="row cart-wrapper">
								<div class="col-xs-12">
									<div class="row vm">
										<div class="col-xs-12 col-sm-3">
											<img src="images/product.jpg" class="img-responsive" alt="">
											<div class="input-group m-t-20">
												<span class="input-group-btn">
													<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
													<span class="glyphicon glyphicon-minus"></span>
													</button>
												</span>
												<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="10" min="1" max="10">
												<span class="input-group-btn">
													<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
													<span class="glyphicon glyphicon-plus"></span>
													</button>
												</span>
											</div>
										</div>
										<div class="col-xs-12 col-sm-3" style="text-align: left">
											<h4 class="nomargin">Product 1</h4>
											<span class="text-muted">Black Dell, Size: 2Gb</span><br>
											<span>by <strong>A P Telecom.</strong></span>
										</div>
										<div class="col-xs-12 col-sm-3"><div><span class="">Sub Total : </span><strong>25$</strong></div></div>
										<div class="col-xs-12 col-sm-3">
											<div class="cart-button">
												<button class="btn btn-info btn-sm col-xs-6"><i class="fa fa-refresh"></i></button>
												<button class="btn btn-danger btn-sm col-xs-6"><i class="fa fa-trash-o"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row cart-wrapper">
								<div class="col-xs-12">
									<div class="row vm">
										<div class="col-xs-12 col-sm-3">
											<img src="images/product.jpg" class="img-responsive" alt="">
											<div class="input-group m-t-20">
												<span class="input-group-btn">
													<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
													<span class="glyphicon glyphicon-minus"></span>
													</button>
												</span>
												<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="10" min="1" max="10">
												<span class="input-group-btn">
													<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
													<span class="glyphicon glyphicon-plus"></span>
													</button>
												</span>
											</div>
										</div>
										<div class="col-xs-12 col-sm-3" style="text-align: left">
											<h4 class="nomargin">Product 1</h4>
											<span class="text-muted">Black Dell, Size: 2Gb</span><br>
											<span>by <strong>A P Telecom.</strong></span>
										</div>
										<div class="col-xs-12 col-sm-3"><div><span class="">Sub Total : </span><strong>25$</strong></div></div>
										<div class="col-xs-12 col-sm-3">
											<div class="cart-button">
												<button class="btn btn-info btn-sm col-xs-6"><i class="fa fa-refresh"></i></button>
												<button class="btn btn-danger btn-sm col-xs-6"><i class="fa fa-trash-o"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<a href="category.php" class="btn btn-info m-t-20" title=""><i class="fa fa-mail-reply"></i> Continue shopping</a>
						</div>
						<div class="col-sm-12 col-md-3 cart-details">
							<h4>Details</h4>
							<hr>
							<div class="total-price">
								<dl class="dl-horizontal">
									<dt>Sub Total</dt>
									<dd>200$</dd>
									<dd class="line-break"></dd>
									<dt>Tax</dt>
									<dd>20S$</dd>
									<dd class="line-break"></dd>
									<dt>Total</dt>
									<dd>220$</dd>
									<dd class="line-break"></dd>
								</dl>
							</div>
							
							<a href="checkout.php" class="btn btn-success">Process to checkout</a>
						</div>
					</div> <!-- end product loop -->
				</div>
			</div>
			
		</div>
		<?php require_once 'inc/footer.php';?>
		<!-- Scripts -->
		<script src="assets/js/app.min.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>