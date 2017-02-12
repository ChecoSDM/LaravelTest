<h1>Actualizar usuario</h1>

<?php echo e(Form::open()); ?>


  Nombre: <?php echo e(Form::text('real_name', $user->real_name)); ?><br />
  Email: <?php echo e(Form::text('email', $user->email)); ?><br />
  Cambiar password: <?php echo e(Form::password('password')); ?><br />

<?php echo e(Form::submit('Actualizar usuario')); ?>


<?php echo e(Form::close()); ?>