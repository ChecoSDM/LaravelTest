<h1>Crear usuario</h1>

<form method="POST">
  Nombre: <input type="text" name="real_name"/><br />
  Email: <input type="text" name="email"/><br />
  Password: <input type="password" name="password" /><br />
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
  <input type="submit" value="Crear usuario"/>
</form>