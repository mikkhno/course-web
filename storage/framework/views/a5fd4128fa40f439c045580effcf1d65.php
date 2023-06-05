<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вітаємо на платформі</title>
</head>

<body>
<h1>Вітаємо на платформі Deutsch Vektor!</h1>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('login')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Увійти</button>
</form>

<h3>Немає облікового запису?</h3>
<a href="<?php echo e(route('reg')); ?>" class="button"> Зареєструйтеся.</a>

</body>
</html>
<?php /**PATH /Users/mikkhno/deutsch-vektor/resources/views/welcome.blade.php ENDPATH**/ ?>