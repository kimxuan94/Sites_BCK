<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vitrine Bento Area</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/developper.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">
    <div ic="page">

    <!-- Navigation -->
    <?php include("nav.php"); ?>

    <!-- Header -->
    <?php include("head.php"); ?>

        <!-- Full Page Image Background Carousel Header -->

    <!-- Catalogue -->
    <?php include("catalogue.php"); ?>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>More about us</h3>
                    <br>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-lg-offset-2">
                    <p>Bento Area is a nice shop, located in Paris, all bento's lovers who searching for some nippon stuff will find all they need.</p>
                </div>
                <div class="col-lg-4">
                    <p>Placed in a lovely place, our shop keeps open until 8 am and offers you a large range of products. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <?php include("contact.php"); ?>
        <?php include("foot.php"); ?>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                                <div class="desc">
                                    <div class="simpleCart_shelfItem" id="fk">
                                    <h5 class="item_name">Araya Bento</h5>
                                    <img src="img/araya.jpg" class="img-responsive img-centered" alt="">
                                    <span class="item_price">Price: 10€</span><br>      
                                    <input type="text" class="item_quantity" id="qty" value="1" size="8" />
                                    <input type="button" class="item_add" value="add to my bag" />
                                    <span class="item_thumb">img/thumb/araya.png</span>
                                </div>
                        </div>
                    </div>
                            <div class="detail">
                                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula.</p>
                            </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Go to shop</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                                <div class="desc">
                                    <div class="simpleCart_shelfItem">
                                        <h5 class="item_name">Pandaru Bento</h5>
                                        <img src="img/pandaru.jpg" class="img-responsive img-centered" alt="">
                                        <span class="item_price">Price: 7€</h1></span><br>
                                        <input type="text" class="item_quantity" id="qty" value="1" size="8" />
                                        <input type="button" class="item_add" value="add to my bag" />
                                        <span class="item_thumb">img/thumb/pandaru.png</span>
                                    </div>
                                </div>
                        </div>
                                <div class="detail">
                                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula.</p>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Go to shop</button>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <div class="desc">
                                <div class="simpleCart_shelfItem">
                                    <h5 class="item_name">Yamiku Bento</h5>
                                    <img src="img/yamiku.jpg" class="img-responsive img-centered" alt="">
                                    <span class="item_price">Price: 12€</h1></span><br>
                                    <input type="text" class="item_quantity" id="qty" value="1" size="8" />
                                    <input type="button" class="item_add" value="add to my bag" />
                                    <span class="item_thumb">img/thumb/yamiku.png</span>
                                </div>
                            </div>
                        </div>
                                <div class="detail">
                                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula.</p>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Go to shop</button>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <div class="desc">
                                <div class="simpleCart_shelfItem">
                                    <h5 class="item_name">Goruden Bento</h5>
                                    <img src="img/goruden.jpg" class="img-responsive img-centered" alt="">
                                    <span class="item_price">Price: 25€</h1></span><br>
                                    <input type="text" class="item_quantity" id="qty" value="1" size="8" />
                                    <input type="button" class="item_add" value="add to my bag" />
                                    <span class="item_thumb">img/thumb/goruden.png</span>
                                </div>
                            </div>
                        </div>
                            <div class="detail">
                                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula.</p>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Go to shop</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <div class="desc">
                                <div class="simpleCart_shelfItem">
                                    <h5 class="item_name">Reddoben Bento</h5>
                                    <img src="img/reddoben.jpg" class="img-responsive img-centered" alt="">
                                    <span class="item_price">15€</span><br>
                                    <input type="text" class="item_quantity"value="1" size="8" />
                                    <input type="button" class="item_add" value="add to my bag" />
                                    <span class="item_thumb">img/thumb/reddoben.png</span>
                                </div>
                            </div>
                        </div>
                                <div class="detail">
                                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula.</p>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Go to shop</button>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <div class="desc">
                                <div class="simpleCart_shelfItem">
                                    <h5 class="item_name">Kuro Bento</h5>
                                    <img src="img/kuro.jpg" class="img-responsive img-centered" alt="">
                                    <span class="item_price">21€</span><br>
                                    <input type="text" class="item_quantity"value="1" size="8" />
                                    <input type="button" class="item_add" value="add to my bag" />
                                    <span class="item_thumb">img/thumb/kuro.png</span>
                                </div>
                            </div>
                        </div>
                                <div class="detail">
                                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula.</p>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Go to shop</button>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="new-list" tabindex="-1" role="dialog" aria-labelledby="new-list" aria-hidden="true">
  <div id="modulis" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p>My Bag: (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><hr>
        <div class="simpleCart_items">
            <span class="item_thumb"></span><hr>
                <div class="item_quantity"></div> 
                    <div class="itemincrement"></div>
                        <div class="itemdecrement"></div>
        </div>
            <span class="total"></span>Total: <span class="simpleCart_total"></span><hr>
            <a href="javascript:;" class="simpleCart_empty"><button class="cmd">Remove</button></a>
            <a href="javascript:;" class="simpleCart_checkout"><button class="cmd">Order</button></a>
      </div>
    </div>
  </div>
</div>
            
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/customCart.js"></script>

    <!--Custom Theme Gmap -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
    <script type="text/javascript" src="js/extinfowindow.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script src="js/map_pop.js"></script>

    <!--Script to Activate the Carousel-->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <!--Modal script config-->
    <script>
    $('.nav navbar-nav navbar-right').click(function(e) {
    e.stopPropagation();
    if ($(e.target).is('[data-toggle=modal]')) {
        $($(e.target).data('target')).modal()
    }
});
    </script>

  <!--Cart Script-->
    <script type="text/javascript" src="js/customCart.js"></script>
    <script type="text/javascript">
        simpleCart.email = "bentoarea@gmail.com";
        simpleCart.checkoutTo = PayPal;
        simpleCart.cartHeaders = [ "name", "thumb_image" , "Quantity_input" ,  "increment",  "decrement", "Total" ];
        
    </script>
</body>
</div>
</html>
