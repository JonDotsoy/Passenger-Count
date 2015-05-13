<table class="table table-striped">
					 <tr> 
					  <th>ID</th>
					  <th>Nombre</th>
					  <th>Correo</th>
					  <th>Tipo Usuario</th>
					  <th>Acciones</th>
					 </tr>
					 @foreach ($users as $user)
					 <tr>
					 	<td>{{ $user->id_operario }}</td>
					 	<td>{{ $user->nombre }}</td>
					 	<td>{{ $user->email }}</td>
					 	<td>{{ $user->tipo_usuario }}</td>
					 	<td>
					 	<a href="{{ route('admin.users.edit', $user->id_operario ) }}">Editar</a>
					 	<a href="">Eliminar</a>
					 </td>
					 </tr> 
					 @endforeach
</table>