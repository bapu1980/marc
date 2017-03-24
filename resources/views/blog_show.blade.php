@extends('template_blog_show')

@section('contenu')
<!-- Theme CSS -->
{!! Html::style('resources/assets/css/blog_show.css') !!}

{!! Html::script('https://www.google.com/recaptcha/api.js') !!}

	<header>
        <div class="header-content">
        </div>
    </header>
	
	<div class="container">
            <div class="row">
                <div class="col-xs-6">
					<div class="lieu"><?php print $blog->ville."/".$blog->pays; ?></div>
					<div class="date"><?php setlocale (LC_TIME, 'fr_FR','fra');
						$timestamp = strtotime($blog->created_at);
						print utf8_encode(strftime( "%d %B %Y", $timestamp) ); ?></div>
                    <div class="titre"><?php print $blog->titre; ?></div>
					<div class="texte"><?php print $blog->blog_text; ?></div>
                </div>
				<div class="col-xs-6 commentaire">
					<div class="commentaire_titre">
						commentaire
					</div>
					<?php
					if(count($commentaire)==0){
						print '<div class="box_commentaire_vide">';
						print 'pas de commentaire pour le moment';
						print '</div>';
					}
					
					foreach($commentaire as $commentaire){
						print '<div class="box_commentaire">';
						print '<div class="commentaire_text">';
						print $commentaire->commentaire_text;
						print '</div>';
						print '<div class="commentaire_nom">';
						print $commentaire->nom;
						print '</div>';
						print '<div class="commentaire_time">';
						setlocale (LC_TIME, 'fr_FR','fra');
						$timestamp = strtotime($commentaire->created_at);
						print utf8_encode(strftime( "%d %B %Y", $timestamp) ) ;  
						print '</div>';
						print '</div>';
						//var_dump($commentaire);
					}
					?>
				</div>
				<div class="col-xs-6">
					<div class="commentaire_titre">
						ajouter un commentaire
					</div>
					{!! Form::open(['url'=>'commentaire_insert','method'=>'POST']) !!}
					<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
						{!! Form::text('nom', null, ['class'=>'form-control','placeholder'=>'Votre nom']) !!}
						{!! $errors->first('nom','<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
						{!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'Votre email']) !!}
						{!! $errors->first('email','<small class="help-block">:message</small>') !!}
						{!! Form::hidden('blog_id', $blog->id, ['class'=>'form-control','placeholder'=>'Votre blog_id']) !!}
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::textarea('commentaire_text', null, ['class'=>'form-control','placeholder'=>'Votre message']) !!}
						{!! $errors->first('commentaire_text','<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group">
					{!! Form::captcha() !!}
					</div>
					{!! Form::submit('Envoyer !',['class'=>'btn btn-info pull-right']) !!}
					{!! Form::close() !!}
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
