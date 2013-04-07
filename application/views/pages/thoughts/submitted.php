<!-- NAVBAR
================================================== -->
<div class="container">
	<div class="span12 center hidden-phone">
		<?=$this -> load -> view('ads/leaderboard2') ?>
	</div>
</div>

<div class="container">
	<div class="row-fluid well">
You have submitted <h1 style="color:#555; line-height: 64px;">"<?=$opinion?>"</h1>
		<p>Nice one. If grammar and spelling is acceptable, we may add your opinion to the database. If not, we may not. Add another?</p>

		<h4>Submit another Opinion</h4>

		<?=form_open('welcome/submit_opinion') ?>

		<input type="text" name="opinion" placeholder="what you think of someone" >
		<br/>

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