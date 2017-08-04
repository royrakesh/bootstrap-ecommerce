<!DOCTYPE html>
<html>
  <head>
    
    <?php require('inc/meta.php') ?>
    <title>Home - Easy Shop</title>
    <link rel="stylesheet" href="assets/css/app.min.css">
   
  </head>
  <body>

  <?php require('inc/nav.php') ?>
  
<div class="main cart">
	<div class="easy-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
				<h1 class="page-title">Cart</h1>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th style="width: 50%">Product</th>
								<th style="width: 10%">Price</th>
								<th style="width: 8%">Quantity</th>
								<th style="width: 22%" class="text-center">Subtotal</th>
								<th style="width: 10%"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-6 hidden-xs">
										<img src="images/product.jpg" class="img-responsive" alt="">
										</div>
										<div class="col-sm-6">
											<h4 class="nomargin">Product 1</h4>
											
										</div>
									</div>
								</td>
								<td data-th="price">$1.99</td>
								<td data-th="quantity">
								<input type="number" name="" id="quantity" class="form-control" value="1"  required="required" title="">
								</td>
								<td data-th="subtotal" class=" text-center">$1.99</td>
								<td class="action text-center" data-th="">
									<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
									<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
								</td>
							</tr>
							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-6 hidden-xs"><img src="images/product.jpg" class="img-responsive" alt=""></div>
										<div class="col-sm-6">
											<h4 class="nomargin">Product 1</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. </p>
										</div>
									</div>
								</td>
								<td data-th="price">$1.99</td>
								<td data-th="quantity">
								<input type="number" name="" id="quantity" class="form-control" value="1"  required="required" title="">
								</td>
								<td data-th="subtotal" class=" text-center">$1.99</td>
								<td class="action text-center" data-th="">
									<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
									<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
								</td>
							</tr>
						</tbody>
					</table>

					<a href="category.php" class="btn btn-info" title=""><i class="fa fa-mail-reply"></i> Continue shopping</a>
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
				

				<a href="#" class="btn btn-success">Process to checkout</a>
				</div>
			</div>
		</div>
	</div>
	
</div>

















  <? require_once 'inc/footer.php';?>


    <!-- Scripts -->
    <script src="assets/js/app.min.js" type="text/javascript" charset="utf-8"></script>

  </body>
  </html>