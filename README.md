# LaravelTest
Proyecto de prueba de Laravel.

Se realizan tareas básicas de altas, bajas y cambios de usuarios.

Cada registro de usuario contiene: nombre, Email y password.

Se crearon vistas para cada una de las operaciones, una vista para el listado,
una vista para la creación y una vista para la baja de los usuarios.

Las rutas de la aplicación son: 
-/users/show
-/users/create
-/users/update
  
Componentes principales.
-Migración de BD: \database\migrations\2017_02_10_000000_create_users_table.php
-Controllers: \app\Http\Controllers\Users\UsersController.php
-Modelo: \app\Users.php
-Vistas: \resources\views\users\
-Rutas: \routes\web.php
