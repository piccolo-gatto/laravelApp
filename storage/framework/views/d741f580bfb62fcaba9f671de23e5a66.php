<?php $__env->startSection("content"); ?>
<h1>Пользователи</h1>
<table>
<tr>
	<th>Имя</th>
	<th>Комментарий</th>
	<th>Одобрение</th>
	<th>Удаление</th>
</tr>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($row->name); ?></a></td>
		<td><?php echo e($row->text); ?></td>
     		<td><p><a href="/moderate/<?php echo e($row->id); ?>/approve">Одобрить</a></p></td>
     		<td><p><a href="/moderate/<?php echo e($row->id); ?>/delete">Удалить</a></p></td>


	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/Downloads/laravelApp/resources/views//moderate.blade.php ENDPATH**/ ?>