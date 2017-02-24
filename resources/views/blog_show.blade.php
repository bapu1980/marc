@extends('template_blog_show')

@section('contenu')
<!-- Theme CSS -->
{!! Html::style('resources/assets/css/blog_show.css') !!}
 
	<header>
        <div class="header-content">
        </div>
    </header>
	
	<div class="container">
            <div class="row">
                <div class="col-xs-6">
					<div class="lieu"><?php print $blog->ville."/".$blog->pays; ?></div>
					<div class="date"><?php print $blog->created_at; ?></div>
                    <div class="titre"><?php print $blog->titre; ?></div>
					<div class="texte"><?php print $blog->blog_text; ?></div>
                </div>
            </div>
    </div>
	
	<script>
	$( document ).ready(function() {
		var url = "<?php print url('/')."/public/images/".$blog->picture; ?>";
		$("header").css("background-image", "url("+url+")"); 
	});
	</script>
<?php //var_dump($blog); ?>
@endsection
