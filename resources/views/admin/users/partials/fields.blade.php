 <div class="form-group">
 	   
 	   {!! Form::label('nombre', 'Nombre') !!}
 	   {!! Form::text('nombre', null, ['class'=> 'form-control', 'placeholder'=> 'Ingrese nombre' ]) !!}
 	</div>
 	<div class="form-group">
 	     {!! Form::label('apellido', 'apellido') !!}
 	  	 {!! Form::text('apellido', null, ['class'=> 'form-control', 'placeholder'=> 'Ingrese apellido' ]) !!}
 	</div>
 	<div class="form-group">
 	    {!! Form::label('email', 'E-mail') !!}
 	    {!! Form::email('email', null, ['class'=> 'form-control', 'placeholder'=> 'Ingrese email' ]) !!}
 	</div>
 	
 	<div class="form-group">
 	    {!! Form::label('password', 'Contraseña') !!}
 	    {!! Form::password('password', ['class'=> 'form-control', 'placeholder'=> 'Ingrese contraseña' ]) !!}
 	</div>
 	<div class="form-group">
 	    {!! Form::label('tipo_usuario', 'Tipo de usuario') !!}
 	    {!! Form::select('type', ['' => 'Seleccione tipo', 'admin' => 'Administrador','usuario' => 'Usuario'], null , ['class' => 'form-control'] ) !!}
	</div>
				
