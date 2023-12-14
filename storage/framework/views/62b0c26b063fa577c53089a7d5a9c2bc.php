<?php $__env->startSection('title', "Add a user"); ?>

<?php $__env->startSection('content'); ?>

<h1>Add a user</h1>

<div>
      
</div>
<form method="post" action="/users">
    <?php echo csrf_field(); ?>

<div>
      <label>Name</label>
      <input type="text" name="name" value="<?php echo e(old('name')); ?>">
      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div style="color: red; font-size: 14px"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<br>
<div>
      <label>LastName</label>
      <input type="text" name="lastname" value="<?php echo e(old('lastname')); ?>">
      <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div style="color: red; font-size: 14px"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<br>

<div>
      <label>Age</label>
      <input type="text" name="age" value="<?php echo e(old('age')); ?>">
      <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div style="color: red; font-size: 14px"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<br>

<div>
      <label>City</label>
      <select name="city">
        <option value="Irkutsk">Irkutsk</option>
        <option value="Angarsk">Angarsk</option>
        <option value="Bratsk">Bratsk</option>
    </select>
    <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div style="color: red; font-size: 14px"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>
<br>
<div>
      <label>Email</label>
      <input type="text" name="email" value="<?php echo e(old('email')); ?>">
      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div style="color: red; font-size: 14px"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<br>
<div>
      <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="checkbox" name="roles[]" value="<?php echo e($role->id); ?>"/><?php echo e($role->name); ?><br/>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>
<br>
      <button type="submit" name="button">Сreate</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lynnk\Desktop\laravelApp\resources\views/users/create.blade.php ENDPATH**/ ?>