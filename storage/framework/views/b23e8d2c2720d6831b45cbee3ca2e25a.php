<?php $__env->startSection("content"); ?>
<h1><?php echo e($user->name); ?> <?php echo e($user->lastname); ?></h1>
<p>
	<a href="/user/<?php echo e($user->id); ?>/edit">Редактировать</a> | <a href="/user/<?php echo e($user->id); ?>/delete">Удалить</a>
</p>
<p>
	Почта: <?php echo e($user->email); ?>

</p>
<p>
	Возраст: <?php echo e($user->age); ?>

</p>
<p>
	<a href="/user/<?php echo e($user->id); ?>/post/add">Создать пост</a> 
</p>
<h3>Посты:</h3>

	<?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
		<p><h4><?php echo e($row->title); ?></h4> <a href="/user/<?php echo e($user->id); ?>/post/<?php echo e($row->id); ?>/edit">Редактировать</a> | <a href="/user/<?php echo e($user->id); ?>/post/<?php echo e($row->id); ?>/delete">Удалить</a>
		<p><?php echo e($row->text); ?></p>
</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views/user.blade.php ENDPATH**/ ?>