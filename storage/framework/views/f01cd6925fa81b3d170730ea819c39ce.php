<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Головна</title>
</head>
<body>

<h2><?php echo e($date); ?></h2>
<h1>Вітаємо, <?php echo e($user->first_name); ?>!</h1>

<h2>Мої курси</h2>

<?php if($courses->isEmpty()): ?>
    <p>Поки що немає...</p>
<?php else: ?>
<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <form action="<?php echo e(route('content', ['id' => $course->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit"><?php echo e($course->group_name); ?></button>
    </form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>


<a href="<?php echo e(route('allgroups')); ?>">Всі групи</a>

<h2>Розклад на тиждень:</h2>
<?php if($courses->isEmpty()): ?>
    <p>Поки що немає...</p>
<?php else: ?>
<?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($schedule->group_name); ?> - <?php echo e($schedule->day); ?> <?php echo e($schedule->time); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<form action="<?php echo e(route('logout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <button type="submit">Вийти</button>
</form>
</body>
</html>
<?php /**PATH /Users/mikkhno/deutsch-vektor/resources/views/main.blade.php ENDPATH**/ ?>