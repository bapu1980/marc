@extends('template_blog')

@section('contenu')
<div class="col-sm-offset-4 col-sm-4">
    <br/>
	<div class="panel panel-primary">
		<div class="panel-heading">Création d'une gallerie</div>
		<div class="panel-body">
			<div class="col-sm-12">
			{!! Form::open(['route'=>'gallery.store','method'=>'POST', 'files'=>true, 'class'=>'form-horizontal panel']) !!}
			<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
				{!! Form::text('titre', null, ['class'=>'form-control','placeholder'=>'Titre']) !!}
				{!! $errors->first('titre','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
				{!! Form::file('image') !!}
				{!! $errors->first('image','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('blog_text') ? 'has-error' : '' !!}">
				{!! Form::textarea('gallery_text', null, ['class'=>'form-control','placeholder'=>'Text de la page']) !!}
				{!! $errors->first('gallery_text','<small class="help-block">:message</small>') !!}
			</div>

			{!! Form::submit('Envoyer',['class'=>'btn btn-primary pull-right'])!!}
			{!! Form::close() !!}
		</div>
	</div>
	<a href="javascript:history.back()" class="btn btn-primary">
		<span class="glyphicon glyphicon-circle-arrow-left">Retour</span>
	</a>
</div>
@endsection
