

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$this -> load -> view('welcome_message') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url() ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">
     <link href="<?=base_url() ?>css/styles.css" rel="stylesheet">
      <link href="<?=base_url() ?>css/share.css" rel="stylesheet">
 
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



<?=$this->load->view('pages/thoughts')?>
    
  </body>
</html>


