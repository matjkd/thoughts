

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Carousel Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>css/bootstrap-responsive.css" rel="stylesheet">
     <link href="<?=base_url()?>css/styles.css" rel="stylesheet">
 

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?=base_url()?>js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>img/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>img/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>img/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?=base_url()?>img/favicon.png">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?=base_url()?>">What I think of you...</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
           
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?=base_url()?>img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>"
<?=$this->load->view('welcome_message')?>"</h1>
             
            </div>
          </div>
        </div>
       
      </div>
     
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      

    


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>js/jquery.js"></script>
    <script src="<?=base_url()?>js/bootstrap-transition.js"></script>
    <script src="<?=base_url()?>js/bootstrap-alert.js"></script>
    <script src="<?=base_url()?>js/bootstrap-modal.js"></script>
    <script src="<?=base_url()?>js/bootstrap-dropdown.js"></script>
    <script src="<?=base_url()?>js/bootstrap-scrollspy.js"></script>
    <script src="<?=base_url()?>js/bootstrap-tab.js"></script>
    <script src="<?=base_url()?>js/bootstrap-tooltip.js"></script>
    <script src="<?=base_url()?>js/bootstrap-popover.js"></script>
    <script src="<?=base_url()?>js/bootstrap-button.js"></script>
    <script src="<?=base_url()?>js/bootstrap-collapse.js"></script>
    <script src="<?=base_url()?>js/bootstrap-carousel.js"></script>
    <script src="<?=base_url()?>js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="<?=base_url()?>js/holder/holder.js"></script>
  </body>
</html>


