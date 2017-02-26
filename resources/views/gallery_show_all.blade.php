@extends('template_blog_show')

@section('contenu')
<!-- Theme CSS -->
{!! Html::style('resources/assets/css/gallery_show_all.css') !!}
		
<div class="container_show_all">
 <div class="titre_categorie">Gallerie</div>
  <?php 
  foreach($gallery as $gallery){ 
	
  ?>
	<a href="<?php print url("/")."/gallery/".$gallery->id; ?>">
	<div class="view view-fifth">  
	 <img src="<?php print 'public/images_gallery/'.$gallery->picture; ?>" />  
      
      <div class="mask">  
     <div class="date">
				<?php 
				setlocale (LC_TIME, 'fr_FR','fra');
				$timestamp = strtotime($gallery->created_at);
				echo utf8_encode(strftime( "%d %B %Y", $timestamp) ) ;  
				?>
			</div>
			
			<div class="titre">
				<?php print $gallery->titre; ?>
			</div>
			
			<div class="lire_post">voir la gallerie</div>
	    </div> 
     </div>  
</div>  

	</a>
   
	<?php 	
	
  } ?>

<div>
@endsection
