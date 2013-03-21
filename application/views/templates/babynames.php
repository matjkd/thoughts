<!DOCTYPE html>
<html>
<head>
	  <title><?php if(isset($title)) { echo $title; } ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta name="description" content="Really simple, really awesome baby name generator. ">
	
    <!-- Styles -->
    <link href="<?=base_url()?>themes/clean/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>themes/clean/css/theme.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="themes/clean/css/lib/animate.css" media="screen, projection">
    <link rel="stylesheet" href="<?=base_url()?>themes/clean/css/coming-soon.css" type="text/css" media="screen" />
      <link href="<?=base_url() ?>css/share.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style type="text/css">
	.male {
		color:rgb(2, 73, 134);
	}
	.female {
		color:#F8B9B7;
	}
</style>
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
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?=base_url()?>babynames">
                <strong>Baby Name Generator</strong>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                     <li><a href="<?=base_url() ?>babynames/name/boy">Boys Name</a></li>
      <li><a href="<?=base_url() ?>babynames/name/girl">Girls Name</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>

    <!-- Sign In Option 1 -->
    <div id="coming_soon">
        <div class="head">
            <div class="container">
                <div class="span6 text">
                   <?php foreach ($thought as $row):
$id = $row->name_id;
				$name = $row -> name;
				$sex = $row->sex;
				$meaning = $row->Meaning;
				$origin = $row->Origin;
				if($sex == 'Boy') { $sexclass = "male";}
				if($sex == 'Girl') { $sexclass = "female";}
				if($sex == 'Unisex') { $sexclass = "unisex";}
			endforeach; ?>
              <h1><span  class="<?=$sexclass?>"><?=$name?></span></h1>
             <div><p> Do you like this name?</p></div>
       <a href="<?=base_url() ?>babynames/like_name/<?=$id?>"> <button class="btn"><i class="icon-thumbs-up icon-4x"></i></button></a>
      <a href="<?=base_url() ?>babynames/dislike_name/<?=$id?>"> <button class="btn"><i class="icon-thumbs-down icon-4x"></i></button></a>
                </div>

                <div class="span6 count">
                  <p>Meaning: <?=$meaning?></p>
                  <p>Origin: <?=$origin?></p>
                </div>
            </div>
        </div>

        <div class="email_wrapp">
            <div class="container">
                <div class="span11 wrapp" style="padding-top:10px; height:110px;">
                    	<div style="text-align: center;">
  		<?=$this->load->view('ads/leaderboard')?>
  	</div>
  		<div style="text-align: center;" class=" center visible-phone">
  		<?=$this->load->view('ads/mobile-ad')?>
  	</div>
                </div>
            </div>
        </div>

        <div class="social">
            <div class="container">
            	<div id="example1">
	<p>Share with your friends  </p>
  <div id="mydiv"></div>
  
</div>
                   
            </div>
        </div>
    </div>

    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row info">
                <div class="span6 residence">
                    <ul>
                        <li>&nbsp;</li>
                      
                    </ul>
                </div>
                <div class="span5 touch">
                    <ul>
                        <li>&nbsp;</li>
                    </ul>
                </div>
            </div>
            <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                           <div><?=$this->load->view('ads/horizontal-text')?></div>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            Really Simple Baby Name Generator
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?=base_url()?>themes/clean/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>themes/clean/js/theme.js"></script>
     <script src="<?=base_url() ?>js/jquery.share.js"></script>
   
   
   <script>
	 $('#mydiv').share({
        networks: ['facebook','pinterest','googleplus','twitter','linkedin','tumblr','in1','email','stumbleupon','digg']
    });
</script>
</body>
</html>