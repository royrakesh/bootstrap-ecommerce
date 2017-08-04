<!DOCTYPE html>
<html>
  <head>
     <?php require('inc/meta.php') ?>
    <title>Easy Shop</title>
    <link rel="stylesheet" href="assets/css/app.min.css">
  </head>
  <body>

    <?php require('inc/nav.php') ?>


   	<div class="main">

			<div class="container p-t-20" id="forgetpasswordbox">
				<div class="row forgetpasswordrow">
					<div class="col-xs-12 col-md-6 col-md-offset-3 forgetpassword-wrapper">

					<div class="panel panel-primary">
							<div class="forgetpasswordlogo">
							<i class="fa fa-unlock fa-4x"></i>
							</div>
								<h1 class="section-heading">Reset password</h1>
								<hr>	
		
   						<div class="panel-body">
							<div class="form" role="form">

								<div class="form-group">
									<input type="text" class="form-control" id="username" name="username" placeholder="roy@easyshop.com">
								</div>

								<div class="forgetpassword-footer m-t-40">
										<button type="submit" class="btn btn-primary btn-block"> Send Verification link</button>
										<div class="alert alert-success m-t-30 easy-alert">
												Email sent to your registered email address
										</div>
								</div>

							</div>
						</div>
					</div>

					</div>
				</div>
			</div>

		</div>

		 <? require_once 'inc/footer.php';?>

    <script src="assets/js/app.min.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>
