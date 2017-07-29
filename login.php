<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Easy Shop</title>
    <link rel="stylesheet" href="assets/css/app.min.css">
  </head>
  <body>

      <? require_once('inc/nav.php') ?>

		<!-- /header -->
		<div class="main">

			<div class="container" id="loginbox">
				<div class="row loginrow">
					<div class="col-xs-12 col-md-6 col-md-offset-3 login-wrapper">

					<div class="panel panel-primary">

					  <div class="loginlogo">
							<i class="fa fa-user fa-4x"></i>
					  </div>

						<div class="panel-body">
							<div class="form" role="form">

								<div class="form-group">
									<input type="text" class="form-control" id="username" name="username" placeholder="roy@easyshop.com">
								</div>
								<div class="form-group">

									<input type="password" class="form-control" id="password" name="password" placeholder="password">

								</div>

								<div class="form-group">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="">
											Remember me
										</label>
									</div>
								</div>
								<div class="login-footer">
										<button type="submit" class="btn btn-primary btn-block"> Login</button>
										<hr>
										<div class="row">
											<a href="#" class="col-md-6 border-right"> Create an account</a>
											<a href="#" class="col-md-6"> Forget Password ?</a>
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
    <!-- /footer -->
		<!-- /footer -->
		<!-- Scripts -->
		<script src="assets/js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="assets/js/app.min.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>
