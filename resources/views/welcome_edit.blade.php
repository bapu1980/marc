@extends('template_blog')

@section('contenu')
<div class="col-sm-offset-4 col-sm-4">
    <br/>
	<div class="panel panel-primary">
		<div class="panel-heading">Modification homepage</div>
		<div class="panel-body">
			<div class="col-sm-12">
			{!! Form::model($welcome, ['route'=>['welcome.update',$welcome[0]->id],'method'=>'put', 'files'=>true, 'class'=>'form-horizontal panel']) !!}
			<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
				{!! Form::text('titre', $welcome[0]->titre, ['class'=>'form-control','placeholder'=>'Titre']) !!}
				{!! $errors->first('titre','<small class="help-block">:message</small>') !!}
			</div>
			
			<div class="form-group {!! $errors->has('valeur') ? 'has-error' : '' !!}">
				{!! Form::text('valeur', $welcome[0]->valeur, ['class'=>'form-control','placeholder'=>'valeur']) !!}
				{!! $errors->first('valeur','<small class="help-block">:message</small>') !!}
				{!! Form::text('id', $welcome[0]->id) !!}
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