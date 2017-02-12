<h1>Lista de usuarios.</h1>

<?php if($users): ?>
  <ul>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($user->real_name); ?> - <?php echo e($user->email); ?> - <?php echo e(Html::link('users/update/'.$user->id, 'Actualizar')); ?> -<?php echo e(Html::link('users/delete/'.$user->id, 'Eliminar')); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
<?php else: ?>
  ¡Parece que aún no hay usuarios! 
<?php endif; ?>

<?php echo e(Html::link('users/create', 'Crear usuario')); ?>