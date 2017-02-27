@extends('template_blog_show')

@section('contenu')
<!-- Theme CSS -->
{!! Html::style('resources/assets/css/gallery_show.css') !!}
		
<div class="container_show_all">
 <div class="titre_categorie">Gallerie - <?php print $gallery->titre; ?></div>
 
 <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
              <?php print $gallery->gallery_text; ?>
            </div>
        </div>
    </section>
  <?php 
 //var_dump($gallery);
	
  ?>


<div>
<script>
$(document).ready(function ($) {
	$('.popup-gallery').magnificPopup({
	  delegate: 'a', // child items selector, by clicking on it popup will open
	  type: 'image',
	  gallery:{
		enabled:true
	  }
	});
});

</script>

@endsection
