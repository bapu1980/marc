@extends('template_blog')

@section('contenu')
<br/>
<div class="col-sm-offset-4 col-sm-4">
    @if(session()->has('ok'))
		<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
	@endif
	<div class="panel panel-primary">
		<div class="panel-heading">
		<h3 class="panel-title">Liste des blogs</h3>
		</div>
		<table>
		<thead>
		<tr>
			<th>#</th>
			<th>Titre</th>
			<th></th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			@foreach ($blog as $blog)
				<tr>
					<td>{!! $blog->id !!}</td>
					<td class="text-primary"><strong>{!! $blog->titre !!}</strong></td>
					<td>{!! link_to_route('blog.show','Voir', [$blog->id], ['class'=>'btn btn-success btn-block']) !!}</td>
					<td>{!! link_to_route('blog.edit','Modifier', [$blog->id], ['class'=>'btn btn-warning btn-block']) !!}</td>
					<td>{!! Form::open(['method'=>'DELETE', 'route'=>['blog.destroy', $blog->id]]) !!}
						{!! Form::submit('Supprimer',['class'=>'btn btn-danger btn-block','onclick'=>'return confirm(\'Vraiment supprimer cet page ?\')']) !!}
						{!! Form::close !!}
					</td>
			@endforeach
		</tbody>
		</table>
		</div>
		{!! link_to_route('blog.create','Ajouter un blog',[],['class'=>'btn btn-info pull-right'])!!}
		{!! $links !!}		
</div>
@endsection