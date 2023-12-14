<?php $__env->startSection("content"); ?>
<div>
	<h1><?php echo e($post->title); ?></h1>
	<p><?php echo e($post->text); ?></p>
</div>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div>
		<h4><?php echo e($row->name); ?></h4>
		<p><?php echo e($row->text); ?></p>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<p><a href="/posts/post/<?php echo e($post->id); ?>/comment/add">Новый комментарий</a></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/Downloads/laravelApp/resources/views/post.blade.php ENDPATH**/ ?>