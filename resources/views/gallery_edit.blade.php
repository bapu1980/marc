@extends('template_blog')

@section('contenu')
<div class="col-sm-offset-4 col-sm-4">
    <br/>
	<div class="panel panel-primary">
		<div class="panel-heading">Modification d'une gallerie</div>
		<div class="panel-body">
			<div class="col-sm-12">
			{!! Form::model($gallery, ['route'=>['gallery.update',$gallery->id],'method'=>'put', 'files'=>true, 'class'=>'form-horizontal panel']) !!}
			<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
				{!! Form::text('titre', null, ['class'=>'form-control','placeholder'=>'Titre']) !!}
				{!! $errors->first('titre','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
				{!! Form::file('image') !!}
				{!! $errors->first('image','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('gallery_text') ? 'has-error' : '' !!}">
				{!! Form::textarea('gallery_text', null, ['class'=>'form-control','placeholder'=>'Text de la page']) !!}
				{!! $errors->first('gallery_text','<small class="help-block">:message</small>') !!}
			</div>
			{!! Form::submit('Envoyer',['class'=>'btn btn-primary pull-right'])!!}
			{!! Form::close() !!}
		</div>
	</div>
	<a href="javascript:history.back()" class="btn btn-primary">
		<span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
	</a>
	</div>
		<?php 
	print '<b><u>exemple à mettre dans le champ texte</u></b><br/><br/>';
	print htmlentities('<div class="mask">').'<br/>';
    print htmlentities('<a href="<?php print url("/")?>/public/gallerie/nom_du_dossier/nom_image+extension">').'<br/>';
    print htmlentities('<img src="<?php print url("/")?>/public/gallerie/nom_du_dossier/nom_image+extension" class="img-responsive" alt="">').'<br/>'; 
	print htmlentities('</a>').'<br/>';
    print htmlentities('</div>'); ?>
</div>
@endsection