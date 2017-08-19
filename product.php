<!DOCTYPE html>
<html>
  <head>
     <?php require('inc/meta.php') ?>
    <title>Single Product - Easy Shop</title>
    <link rel="stylesheet" href="assets/css/app.min.css">
  </head>
  <body>
    <?php require( 'inc/nav.php') ?>
      <div class="main product">
        <div class="container">

          <div class="row">
            <div class="col-xs-12">
              <ol class="breadcrumb">
                <li>
                  <a href="#">Product</a>
                </li>
                <li>
                  <a href="#">Laptop</a>
                </li>
                <li class="active">Dell 65T09 2GB RAM</li>
              </ol>
            </div>
          </div>





         <div class="easy-section" id="product-row">
            <div class="row product-row">
            <div class="col-xs-12 col-md-6">
              <div class="product-image">
                <img src="images/product/laptop.png" class="img-responsive" alt="Image">
              </div>
              <div class="product-image-slider"></div>
              
            </div>
            <div class="col-xs-12 col-md-6 product-summery">
              <div class="product-title">
                <h3>Dell 65T09 2GB RAM</h3>
                <hr>
              </div>
              <div class="product-category text-muted">
                <h5>Laptop</h5>
              </div>
              <div class="product-summery">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              <hr>
              <div class="product-variation">
                <div class="row">
                  <div class="form-group col-md-6">
                       <label for="quantity">Quantity</label>
                          <div class="input-group">
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
                  <div class="form-group col-md-6">
                   <label for="quantity">Color</label>
                    <select name="" id="input" class="form-control" required="required">
                      <option value="">RED</option>
                      <option value="">BLUE</option>
                      <option value="">GREEN</option>
                      <option value="">BLACK</option>
                      <option value="">WHITE</option>
                    </select>
                  </div>
                </div>
              </div>
              <hr>
              <div class="product-cart">
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <a href="" class="btn btn-info btn-block">
                    <i class="fa fa-shopping-cart"></i> 
                    Add to Cart</a>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <a href="" class="btn btn-info btn-block">
                   <i class="fa fa-arrow-right"></i> 
                    Add to Wishlist</a>
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div> <!-- .product end -->
         </div>

          <div class="easy-section" id="product-meta">
            <div class="row product-meta">
            <div class="col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Description</h3>
                </div>
                <div class="panel-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Info</h3>
                </div>
                <div class="panel-body">
                  <dl class="dl-horizontal">
                    <dt>OS</dt>
                    <dd>Ubuntu</dd>
                    <dd class="line-break"></dd>
                    <dt>Ram</dt>
                    <dd>2GB</dd>
                    <dd class="line-break"></dd>
                    <dt>Details</dt>
                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>
                    <dd class="line-break"></dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          </div>

<hr>

         <div class="easy-section" id="related-product">
            <div class="row related-product">
            <h1 class="section-heading">Related Products</h1>
             <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                  <div class="row">
                    <div class="col-sm-12 col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-sm-12 col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-sm-12 col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-sm-12 col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                  </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                  <div class="row">
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                  </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                  <div class="row">
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/product.jpg" alt="Image" style="max-width:100%;"></a></div>
                  </div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a class="left carousel-control" href="#Carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#Carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div><!--.Carousel-->
          </div>
      </div>
                    




        </div><!-- .container end -->

      </div> <!-- .main end -->

      <?php require_once 'inc/footer.php';?>
      <!-- /footer -->
      <!-- progressbar -->
      <div class="easyshop-progress-container">
        <div class="easyshop-progress"></div>
      </div>
      <!-- Scripts -->
      <script src="assets/js/app.min.js" type="text/javascript" charset="utf-8"></script>
  </body>

</html>