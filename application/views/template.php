

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>What I think of you</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url() ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">
     <link href="<?=base_url() ?>css/styles.css" rel="stylesheet">
 
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?=base_url()?>js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url() ?>img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url() ?>img/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url() ?>img/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?=base_url() ?>img/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?=base_url() ?>img/favicon.png">
                                   
                                   
                                   <script type="text/javascript">
									var _gaq = _gaq || [];
									_gaq.push(['_setAccount', 'UA-19623681-26']);
									_gaq.push(['_trackPageview']);

									(function() {
										var ga = document.createElement('script');
										ga.type = 'text/javascript';
										ga.async = true;
										ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
										var s = document.getElementsByTagName('script')[0];
										s.parentNode.insertBefore(ga, s);
									})();

</script>
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
          
            <a class="brand" href="<?=base_url() ?>">What I think of you...</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
           <?=$this->load->view('ads/horizontal-text')?>
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?=base_url() ?>img/examples/background-1-2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1><?=$this -> load -> view('welcome_message') ?></h1>
             



            </div>
          </div>
        </div>
       
      </div>
     
    </div><!-- /.carousel -->
<div id="example1">
  <div id="twitter" data-url="http://www.whatithinkofyou.org" data-text="Share with your friends to see what I think of them" data-title="Tweet"></div>
  <div id="facebook" data-url="http://www.whatithinkofyou.org" data-text="Share with your friends to see what I think of them" data-title="Like"></div>
  <div id="googleplus" data-url="http://www.whatithinkofyou.org" data-text="Share with your friends to see what I think of them" data-title="+1"></div>
</div>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      

    


      <!-- FOOTER -->
      <footer>
       
        <p>&copy; 2013. Disclaimer: The views of this website are probably not the views of the person that sent you the link, nor are they the 
        	views of the owner of the site. They are the views of a highly advanced artificial intelligence (or a random selection process). 
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <script src="<?=base_url() ?>js/bootstrap.min.js"></script>
     <script src="<?=base_url() ?>js/sharrre.min.js"></script>
   
   
   <script>
            $('#twitter').sharrre({
              share: {
                twitter: true
              },
              enableHover: false,
              enableTracking: true,
              buttons: { twitter: {via: '_JulienH'}},
              click: function(api, options){
                api.simulateClick();
                api.openPopup('twitter');
              }
            });
            $('#facebook').sharrre({
              share: {
                facebook: true
              },
              enableHover: false,
              enableTracking: true,
              click: function(api, options){
                api.simulateClick();
                api.openPopup('facebook');
              }
            });
            $('#googleplus').sharrre({
              share: {
                googlePlus: true
              },
              enableHover: false,
              enableTracking: true,
              click: function(api, options){
                api.simulateClick();
                api.openPopup('googlePlus');
              }
            });
            
</script>
    
    
  </body>
</html>


