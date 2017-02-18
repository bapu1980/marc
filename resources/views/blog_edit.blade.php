@extends('template_blog')

@section('contenu')
<div class="col-sm-offset-4 col-sm-4">
    <br/>
	<div class="panel panel-primary">
		<div class="panel-heading">Modification d'un blog</div>
		<div class="panel-body">
			<div class="col-sm-12">
			{!! Form::model($blog, ['route'=>['blog.update',$blog->id],'method'=>'put', 'files'=>true, 'class'=>'form-horizontal panel']) !!}
			<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
				{!! Form::text('titre', null, ['class'=>'form-control','placeholder'=>'Titre']) !!}
				{!! $errors->first('titre','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
				{!! Form::file('image') !!}
				{!! $errors->first('image','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('ville') ? 'has-error' : '' !!}">
				{!! Form::text('ville', null, ['class'=>'form-control','placeholder'=>'Ville']) !!}
				{!! $errors->first('ville','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('pays') ? 'has-error' : '' !!}">
				{!! Form::text('pays', null, ['class'=>'form-control','placeholder'=>'Pays']) !!}
				{!! $errors->first('pays','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('longitude') ? 'has-error' : '' !!}">
				{!! Form::text('longitude', null, ['class'=>'form-control','placeholder'=>'Longitude']) !!}
				{!! $errors->first('longitude','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('latitude') ? 'has-error' : '' !!}">
				{!! Form::text('latitude', null, ['class'=>'form-control','placeholder'=>'Latitude']) !!}
				{!! $errors->first('latitude','<small class="help-block">:message</small>') !!}
			</div>
			<div class="form-group {!! $errors->has('blog_text') ? 'has-error' : '' !!}">
				{!! Form::textarea('blog_text', null, ['class'=>'form-control','placeholder'=>'Text de la page']) !!}
				{!! $errors->first('blog_text','<small class="help-block">:message</small>') !!}
			</div>
			{!! Form::submit('Envoyer',['class'=>'btn btn-primary pull-right'])!!}
			{!! Form::close() !!}
		</div>
	</div>
	<a href="javascript:history.back()" class="btn btn-primary">
		<span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
	</a>
</div>
@endsection