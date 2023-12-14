<?php $__env->startSection("content"); ?>
<h1>Пользователи</h1>
<table>
<tr>
	<th>Имя</th>
	<th>Комментарий</th>
	<th>Опубликовать</th>
	<th>Удалить</th>
</tr>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($row->name); ?></a></td>
		<td><?php echo e($row->text); ?></td>
     		<td><b><a href="/moderate/<?php echo e($row->id); ?>/approve">+</a></b></td>
     		<td><b><a href="/moderate/<?php echo e($row->id); ?>/delete">x</a></b></td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views//moderate.blade.php ENDPATH**/ ?>