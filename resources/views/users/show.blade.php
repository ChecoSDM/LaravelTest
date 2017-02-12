<h1>Lista de usuarios.</h1>

@if($users)
  <ul>
    @foreach($users as $user)
      <li>{{ $user->real_name }} - {{ $user->email }} - {{ Html::link('users/update/'.$user->id, 'Actualizar') }} -{{ Html::link('users/delete/'.$user->id, 'Eliminar') }}</li>
    @endforeach
  </ul>
@else
  ¡Parece que aún no hay usuarios! 
@endif

{{ Html::link('users/create', 'Crear usuario') }}