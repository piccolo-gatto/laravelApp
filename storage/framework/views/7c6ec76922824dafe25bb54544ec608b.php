<?php $__env->startSection("content"); ?>
<h1>Пользователи</h1>
<table>
<tr>
	<th>Имя</th>
	<th>Фамилия</th>
	<th>Возраст</th>
</tr>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><a href="/user/<?php echo e($row->id); ?>"><?php echo e($row->name); ?></a></td>
		<td><?php echo e($row->lastname); ?></td>
		<td><?php echo e($row->age); ?></td>

	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<p><a href="/user/add">Добавить</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/Downloads/laravelApp/resources/views/users.blade.php ENDPATH**/ ?>