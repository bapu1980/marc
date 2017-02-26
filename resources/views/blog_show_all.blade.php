@extends('template_blog_show')

@section('contenu')
<!-- Theme CSS -->
{!! Html::style('resources/assets/css/blog_show_all.css') !!}
		
<div class="container_show_all">

  <?php 
  $reverse = true;
  foreach($blogs as $blogs){ 
	if($reverse){
  ?>
	<a href="<?php print url("/")."/blog/".$blogs->id; ?>">
	<div class="row <?php print 'blog_'.$blogs->id; ?>">
		<div class="col-xs-6 fader"><img src="<?php print 'public/images_show_all/'.$blogs->picture; ?>" class="img-responsive" alt=""></div>
	    <div class="col-xs-6">
			<div class="date">
				<?php 
				setlocale (LC_TIME, 'fr_FR','fra');
				$timestamp = strtotime($blogs->created_at);
				echo utf8_encode(strftime( "%d %B %Y", $timestamp) ) ;  
				?>
			</div>
			<div class="ville">
				<?php print $blogs->ville." / ".$blogs->pays; ?>
			</div>
			<div class="titre">
				<?php print $blogs->titre; ?>
			</div>
			<div class="espace"></div>
			<div class="lire_post">lire le post</div>
	    </div>
    </div>
	</a>
    <?php 
		$reverse = false;
	}else{	
	?>
	<a href="<?php print url("/")."/blog/".$blogs->id; ?>">
	<div class="row blog_text <?php print 'blog_'.$blogs->id; ?>">
		<div class="col-xs-6">
			<div class="date">
				<?php 
				setlocale (LC_TIME, 'fr_FR','fra');
				$timestamp = strtotime($blogs->created_at);
				echo utf8_encode(strftime( "%d %B %Y", $timestamp) ) ;  
				?>
			</div>
			<div class="ville">
				<?php print $blogs->ville." / ".$blogs->pays; ?>
			</div>
			<div class="titre">
				<?php print $blogs->titre; ?>
			</div>
			<div class="espace"></div>
			<div class="lire_post">lire le post</div>
		</div>
		<div class="col-xs-6 fader"><img src="<?php print 'public/images_show_all/'.$blogs->picture; ?>" class="img-responsive" alt=""></div>
    </div>
	</a>
	<?php 	
		$reverse = true;
	}
	print "<script>";
	print "$( document ).ready(function() {";
	
	print "$(\".blog_".$blogs->id." \").hover(
			  function() {
				
				$( this ).css('background','white');
				$( \".blog_".$blogs->id." .titre \" ).css('color','black');
				$( \".blog_".$blogs->id." .lire_post \" ).css('color','black');
			  }, function() {
				
				$( this ).css('background','black');
				$( \".blog_".$blogs->id." .titre \" ).css('color','white');
				$( \".blog_".$blogs->id." .lire_post \" ).css('color','white');
			  }
			)";
	print "});";
	print "</script>";
	
  } ?>

<div>
@endsection
