<?php $__env->startSection("content"); ?>
<h1>Добавление поста</h1>
<form method="POST" action="">

	<?php echo csrf_field(); ?>

	<div>
		<label for="title"><div>Тема:</div></label>
			<input type="text" name="title">
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
		<label for="text"><div>Пост:</div></label>
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
	
	<div>
		<label for="datetime"><div>Публикация:</div></label>
			<input type="datetime-local" name="datetime"></input>
			<?php $__errorArgs = ["datetime"];
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
      		<label>Опубликовать</label>
     		<input type="checkbox" name="is_published" value="1">
	</div>
	<button type="submit">Сохранить</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views/add_post.blade.php ENDPATH**/ ?>