<?php $__env->startSection("content"); ?>
<h1>Редактирование поста</h1>

<form method="POST" action="">
	<?php echo csrf_field(); ?>

	<input type="hidden" name="id" value="<?php echo e($edit_post->id); ?>">

	<div>
		<label for="title"><div>Тема:</div></label>
		<input type="text" name="title" value="<?php echo e(old('title') ?? $edit_post->title); ?>">
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
		<textarea name="text" value="<?php echo e(old('text') ?? $edit_post->text); ?>"></textarea>
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
			<input type="datetime-local" name="datetime" value="<?php echo e(old('text') ?? $edit_post->publish_datetime); ?>"></input>
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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views/edit_post.blade.php ENDPATH**/ ?>