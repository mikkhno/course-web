<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Реєстрація</title>
</head>
<body>
<h1>Реєстрація</h1>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="/register" method="post">
    <?php echo csrf_field(); ?>

    <input type="text" name="first_name" placeholder="Ім'я">
    <input type="text" name="last_name" placeholder="Прізвище">
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="Пароль">
    <input type="text" name="telegram" placeholder="telegram для зв'язку">
    <input type="text" name="phone" placeholder="Номер +380...">
    <button type="submit">Зареєструватися</button>
</form>
<a href="<?php echo e(route('welcome')); ?>"> Повернутися назад.</a>

</body>
</html>
<?php /**PATH /Users/mikkhno/deutsch-vektor/resources/views/registration.blade.php ENDPATH**/ ?>