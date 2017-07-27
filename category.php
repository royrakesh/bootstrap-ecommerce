<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Category - Easy Shop</title>
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
                <a href="product.php">Product</a>
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
                    <a href="signup.php">Signup</a>
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
    <header id="banner" class="category-banner" style="transform: all .4s">
      <div class="wrap-center">
        <div class="banner-centered" id="banner-text">
          <h2><strong>Welcome to Easy Shop</strong></h2>
        </div>
      </div>
    </header>
    <!-- /header -->
    <div class="container-fluid">
      
      <section class="easy-section" id="content">
        <div class="row">
          <div class="main col-xs-12 col-sm-9">
            <div class="row list-group product-grid">
              <div class="item col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
                <div class="thumbnail">
                  <img src="./images/product.jpg" alt="" class="group list-group-image">
                  <div class="caption">
                    <h3 class="group inner list-group-item-heading">Title</h3>
                      <div class="row product">
                        <div class="col-xs-12 col-md-12 text-center">
                          <p class="lead">$23.00</p>
                        </div>
                        <div class="col-xs-12 col-md-12">
                           <a href="" class="btn btn-success btn-block"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
              
               <div class="item col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
                <div class="thumbnail">
                  <img src="./images/product.jpg" alt="" class="group list-group-image">
                  <div class="caption">
                    <h3 class="group inner list-group-item-heading">Title</h3>
                      <div class="row product">
                        <div class="col-xs-12 col-md-12 text-center">
                          <p class="lead">$23.00</p>
                        </div>
                        <div class="col-xs-12 col-md-12">
                           <a href="" class="btn btn-success btn-block"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
               <div class="item col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
                <div class="thumbnail">
                  <img src="./images/product.jpg" alt="" class="group list-group-image">
                  <div class="caption">
                    <h3 class="group inner list-group-item-heading">Title</h3>
                      <div class="row product">
                        <div class="col-xs-12 col-md-12 text-center">
                          <p class="lead">$23.00</p>
                        </div>
                        <div class="col-xs-12 col-md-12">
                           <a href="" class="btn btn-success btn-block"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
               <div class="item col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
                <div class="thumbnail">
                  <img src="./images/product.jpg" alt="" class="group list-group-image">
                  <div class="caption">
                    <h3 class="group inner list-group-item-heading">Title</h3>
                      <div class="row product">
                        <div class="col-xs-12 col-md-12 text-center">
                          <p class="lead">$23.00</p>
                        </div>
                        <div class="col-xs-12 col-md-12">
                           <a href="" class="btn btn-success btn-block"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
              
            </div>
           
          </div>
          <div class="sidebar col-xs-12 col-sm-3">
            <div class="well well-lg">Easy Shop</div>
            <div class="list-group">
              <a href="#" class="list-group-item active">Item 1</a>
              <a href="#" class="list-group-item">Item 2</a>
              <a href="#" class="list-group-item">Item 3</a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="clearfix"></div>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <span>Build with
            <i class="fa fa-heart"></i> by Rakesh</span>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/app.min.js" type="text/javascript" charset="utf-8"></script>

  <script >
  
   $(document).ready(function(){
  
     $(document).scroll(function(){
  
        var scroll = $(this).scrollTop();
  
        $("#banner-text").css(
        {
          'top': (scroll / 3) + 'px',
          'opacity': 1 - (scroll / 1000),
          'font-size': 0.8 - (scroll/600) + 'em'
        });
  
        $("#banner").css(
        {
          'background-position': 'center' + (-scroll / 2) + 'px',
        });
  
  
      });
  
   });
     
    
  
  
  </script>
  </body>

</html>