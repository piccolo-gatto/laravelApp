<?php $__env->startSection("content"); ?>
<h1>Посты</h1>
<p><a href="/blog/post/add">Новый пост</a></p>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class='block'>
		<b><a href="/blog/post/<?php echo e($row->id); ?>"><?php echo e($row->title); ?></a></b>
		<p><?php echo e($row->text); ?></p>
</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views/blog.blade.php ENDPATH**/ ?>