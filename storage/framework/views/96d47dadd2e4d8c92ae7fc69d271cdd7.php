<?php $__env->startSection("content"); ?>
<h1>Пользователи</h1>
<table>
<tr>
	<th>Имя</th>
	<th>Комментарий</th>
	<th>Одибрить</th>
</tr>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($row->name); ?></a></td>
		<td><?php echo e($row->text); ?></td>
     		<td><form action="<?php echo e(route('approve', $row)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('update'); ?>
                    <button type="submit">Одобрить</button>
                </form></td>

	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<p><a href="/user/add">Добавить</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views/moderate.blade.php ENDPATH**/ ?>