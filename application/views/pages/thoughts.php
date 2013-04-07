    <!-- NAVBAR
    ================================================== -->
    <div class="container">
    	<div class="span12 center hidden-phone">
  		<?=$this -> load -> view('ads/leaderboard2') ?>
  	</div>
    </div>
   



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?=base_url() ?>img/examples/background-1-2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption center">
              <h1><?=$this -> load -> view('welcome_message') ?></h1>
             
               
<div id="example1">
	<p>That's what I think of you. My opinion of your friends is different. </p>
  <div id="mydiv"></div>
</div>





            </div>
          </div>
        </div>
       
      </div>
      
     
     
    </div><!-- /.carousel -->
    <div class="container sharing"> 
    	<div class="row well">
	<h4>Submit an Opinion</h4>
	
	<?=form_open('welcome/submit_opinion') ?>
	
	<input type="text" name="opinion" placeholder="what you think of someone" ><br/>
	
	
	<button type="submit" name="submit" value="submit" class="btn btn-info btn-large">
					Submit
				</button>
				<?=form_close() ?>
	</div>
</div>
  <div class="container sharing"> 
  	<div class="span12 center hidden-phone">
  		<?=$this -> load -> view('ads/leaderboard') ?>
  	</div>
  		<div class="span12 center visible-phone">
  		<?=$this -> load -> view('ads/mobile-ad') ?>
  	</div>
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
     <script src="<?=base_url() ?>js/jquery.share.js"></script>
   
   
   <script>
	$('#mydiv').share({
		networks : ['facebook', 'pinterest', 'googleplus', 'twitter', 'linkedin', 'tumblr', 'in1', 'email', 'stumbleupon', 'digg']
	}); 
</script>
    