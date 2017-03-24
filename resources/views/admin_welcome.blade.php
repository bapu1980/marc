@extends('template_blog')

@section('contenu')
<br/>
<div class="col-sm-offset-4 col-sm-4">
	@if(session()->has('ok'))
		<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
	@endif
	<div class="panel panel-primary">
		<div class="panel-heading">
		<h3 class="panel-title">admin homepage</h3>
		</div>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Titre</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($datas as $datas)
					<tr>
						<td>{!! $datas->id !!}</td>
						<td class="text-primary"><strong>{!! $datas->titre !!}</strong></td>
						<td>{!! link_to_route('welcome.edit','Modifier', [$datas->id], ['class'=>'btn btn-warning btn-block']) !!}</td>
						
					
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	
</div>
@endsection