@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Ususrios</div>
				<div class="panel-body">
					{!! Form::model($user, ['route' => 'admin.users.update', 'method' => 'PUT']) !!}
					
					   @include('admin.users.partials.fields')
					
					  <button type="submit" class="btn btn-success">Actualizar</button>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
