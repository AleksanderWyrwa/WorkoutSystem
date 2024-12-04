

<?php $__env->startSection('content'); ?>
    <h1>Wynik treningu: <?php echo e($result->workout->name); ?></h1>

    <p><strong>Data:</strong> <?php echo e($result->date); ?></p>
    <p><strong>Wynik:</strong> <?php echo e($result->performance); ?></p>

    <a href="<?php echo e(route('workout_results.index')); ?>" class="btn btn-primary">Powrót do listy</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/workout_results/show.blade.php ENDPATH**/ ?>