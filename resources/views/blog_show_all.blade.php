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
	<div class="row">
		<div class="col-xs-6 fader"><img src="<?php print 'public/images_show_all/'.$blogs->picture; ?>" class="img-responsive" alt=""></div>
	    <div class="col-xs-6">
			<div class="ville">
				<?php print $blogs->ville; ?>
			</div>
			<div class="titre">
				<?php print $blogs->titre; ?>
			</div>
			<div class="espace"></div>
			<div class="lire_post">lire le post</div>
	    </div>
    </div>
    <?php 
		$reverse = false;
	}else{	
	?>
	<div class="row">
		<div class="col-xs-6">
			<div class="ville">
				<?php print $blogs->ville; ?>
			</div>
			<div class="titre">
				<?php print $blogs->titre; ?>
			</div>
			<div class="espace"></div>
			<div class="lire_post">lire le post</div>
		</div>
		<div class="col-xs-6 fader"><img src="<?php print 'public/images_show_all/'.$blogs->picture; ?>" class="img-responsive" alt=""></div>
    </div>
	<?php 	
		$reverse = true;
	} 
  } ?>

<div>
@endsection
