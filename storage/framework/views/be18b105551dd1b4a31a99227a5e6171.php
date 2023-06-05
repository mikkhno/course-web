<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Інформація</title>
</head>
<body>

<h2>Інформація про групу:</h2>

<?php $__currentLoopData = $group_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>Назва групи: <?php echo e($group->group_name); ?></p>
    <p>Куратор: <?php echo e($group->initials); ?></p>
    <p>Зв'язок<br> telegram: <?php echo e($group->telegram); ?> | <?php echo e($group->phone); ?></p>
    <p>Рівень: <?php echo e($group->name); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<h3>Всі учасники:</h3>

<?php
    use Illuminate\Support\Facades\Auth;
        $loggedInUserFirstName = Auth::user()->first_name;
?>

<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($user->first_name == $loggedInUserFirstName): ?>
        <p><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> (Я)</p>
    <?php else: ?> <p><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></p> <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<h2>Розклад:</h2>
<?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($schedule->day); ?> <?php echo e($schedule->time); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<h2>Інші курси</h2>
<?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php if($group->group_name != $other->group_name): ?>
        <form action="<?php echo e(route('content', ['id' => $other->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit"><?php echo e($other->group_name); ?></button>
        </form>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<a href="<?php echo e(route('main',['id'=>Auth::id()])); ?>">Назад</a>
</body>
</html>
<?php /**PATH /Users/mikkhno/deutsch-vektor/resources/views/content.blade.php ENDPATH**/ ?>