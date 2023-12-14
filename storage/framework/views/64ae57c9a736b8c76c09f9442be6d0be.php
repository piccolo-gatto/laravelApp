<?php $__env->startSection("content"); ?>
<h1>Добавление комментария</h1>
<form method="POST" action="">

	<?php echo csrf_field(); ?>

	<div>
		<label for="name"><div>Имя:</div></label>
			<input type="text" name="name">
			<?php $__errorArgs = ["title"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<span><?php echo e($message); ?></span>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	</div>

	<div>
		<label for="text"><div>Комментарий:</div></label>
			<textarea name="text"></textarea>
			<?php $__errorArgs = ["text"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<span><?php echo e($message); ?></span>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	</div>
	<button type="submit">Сохранить</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views/add_comment.blade.php ENDPATH**/ ?>