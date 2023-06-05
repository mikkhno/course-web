<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php $__currentLoopData = $group_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
    <p><?php echo e($course->group_name); ?></p>
    <p><?php echo e($course->type); ?></p>
    <p><?php echo e($course->level); ?></p>
    <p><?php echo e($course->initials); ?></p>
    <form action="<?php echo e(route('content', ['id' => $course->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit">Переглянути</button>
    </form>
    <p>---</p>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<a href="<?php echo e(route('main',['id'=>Auth::id()])); ?>">Назад</a>

</body>
</html>
<?php /**PATH /Users/mikkhno/deutsch-vektor/resources/views/groups.blade.php ENDPATH**/ ?>