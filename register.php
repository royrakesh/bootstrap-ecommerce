<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Easy Shop</title>
    <link rel="stylesheet" href="assets/css/app.min.css">
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-sm-4">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Easy Shop</a>
          </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="col-xs-12 col-sm-8">
          <div class="collapse navbar-collapse navbar-ex1-collapse responsive-menu">
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="/">Home</a>
              </li>
              <li>
                <a href="category.php">Category</a>
              </li>
              <li>
                <a href="#">Product</a>
              </li>
              <li>
                <a href="#">Featured</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="login.php">Login</a>
                  </li>
                  <li>
                    <a href="register.php">Signup</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
		<!-- /Navbar-->
		
		<!-- /header -->
		<div class="main">
		
			<div class="container" id="registerbox">
				<div class="row registerrow">
					<div class="col-xs-12 col-md-6 col-md-offset-3 register-wrapper">
						
					<div class="panel panel-primary">

					  <div class="registerlogo">
							<i class="fa fa-user fa-4x"></i>
					  </div>

						<div class="panel-body">
							<div class="form" role="form">

								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>

								<div class="form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>

								<div class="form-group">

									<input type="password" class="form-control" id="password" name="password" placeholder="password">
									
								</div>

								

								<div class="form-group">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="">
											<a href="#" title="">Terms &amp; condition</a>
										</label>
									</div>
								</div>
								<div class="register-footer">
										<button type="submit" class="btn btn-primary btn-block"> Signup</button>
										<hr>
										<div class="row">
											<a href="#" class="col-md-6 border-right">Already have an account ?</a>
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
		<div class="clearfix"></div>
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<span>Build with
							<i class="fa fa-heart"></i>by Rakesh</span>
					</div>
				</div>
			</div>
		</footer>
		<!-- /footer -->
		<!-- Scripts -->
		<script src="assets/js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="assets/js/app.min.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>