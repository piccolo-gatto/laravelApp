<?php $__env->startSection('title', 'All Users'); ?>

<?php $__env->startSection('content'); ?>
  <h1>All Users</h1>   
  <ul>
  <?php if(count($users) == 0): ?>
    <li>Пользователей нет</li>
  <?php else: ?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="/users/<?php echo e($user->id); ?>"><?php echo e($user->name); ?> <?php echo e($user->lastname); ?></a>  <a href="/users/<?php echo e($user->id); ?>/edit">&#9998;</a>
      <a href="/users/<?php echo e($user->id); ?>/delete">&#10006;</a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    <p><a href="/users_create" style='border: 1px solid black; border-radius: 3px;'>Add a user</a></p>
  <?php endif; ?>
  </ul>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views/users/users.blade.php ENDPATH**/ ?>