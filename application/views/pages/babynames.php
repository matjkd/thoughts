    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          
            <a class="brand" href="<?=base_url() ?>babynames">Random Baby Name Generator</a>
          <ul class="nav">
      <li><a href="<?=base_url() ?>babynames/name/m">Boys Name</a></li>
      <li><a href="<?=base_url() ?>babynames/name/f">Girls Name</a></li>
    
    </ul>
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

<style type="text/css">
	.male {
		color:#006DCC;
	}
	.female {
		color:#F8B9B7;
	}
</style>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?=base_url() ?>img/ocean_thumb.jpg" alt="">
          <div class="container">
          
            <div class=" carousel-caption center">
            	<?php foreach ($thought as $row):
$id = $row->name_id;
				$name = $row -> name;
				$sex = $row->sex;
				if($sex == 'm') { $sexclass = "male";}
				if($sex == 'f') { $sexclass = "female";}
			endforeach; ?>
              <h1><span  class="<?=$sexclass?>"><?=$name?></span></h1>
              Do you like this name?
       <a href="<?=base_url() ?>babynames/like_name/<?=$id?>"> <button class="btn"><i class="icon-thumbs-up icon-4x"></i></button></a>
      <a href="<?=base_url() ?>babynames/dislike_name/<?=$id?>"> <button class="btn"><i class="icon-thumbs-down icon-4x"></i></button></a>

              <br/><br/> 
<div id="example1">
	<p>Share with your friends  </p>
  <div id="mydiv"></div>
</div>



            </div>
          </div>
        </div>
       
      </div>
     
    </div><!-- /.carousel -->
    
  <div class="container sharing"> 
  	<div class="span12 center hidden-phone">
  		<?=$this->load->view('ads/leaderboard')?>
  	</div>
  		<div class="span12 center visible-phone">
  		<?=$this->load->view('ads/mobile-ad')?>
  	</div>
</div>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      

    


      <!-- FOOTER -->
      <footer>
       
        <p>&copy; 2013.
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <script src="<?=base_url() ?>js/bootstrap.min.js"></script>
     <script src="<?=base_url() ?>js/jquery.share.js"></script>
   
   
   <script>
	 $('#mydiv').share({
        networks: ['facebook','pinterest','googleplus','twitter','linkedin','tumblr','in1','email','stumbleupon','digg']
    });
</script>
    