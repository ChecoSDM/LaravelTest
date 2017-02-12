<h1>Actualizar usuario</h1>

{{ Form::open() }}

  Nombre: {{ Form::text('real_name', $user->real_name) }}<br />
  Email: {{ Form::text('email', $user->email) }}<br />
  Cambiar password: {{ Form::password('password') }}<br />

{{ Form::submit('Actualizar usuario') }}

{{ Form::close() }}