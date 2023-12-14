<?php $__env->startSection("content"); ?>
<h1>Посты</h1>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
		<p><b><?php echo e($row->title); ?></b>
		<span><a href="/user/<?php echo e($row->user->id); ?>"><?php echo e($row->user->name); ?> <?php echo e($row->user->lastname); ?></a></span>
		<p><?php echo e($row->text); ?></p>
		<p><a href="/posts/post/<?php echo e($row->id); ?>">Просмотреть комментарии</a></p>
</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/Downloads/laravelApp/resources/views/posts.blade.php ENDPATH**/ ?>