

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($exercise->name); ?></h1>

    <div class="mb-3">
        <strong>Opis:</strong>
        <p><?php echo e($exercise->description); ?></p>
    </div>

    <div class="mb-3">
        <strong>Czas trwania:</strong> <?php echo e($exercise->duration); ?> minut
    </div>

    <div class="mb-3">
        <strong>Spalone kalorie:</strong> <?php echo e($exercise->calories_burned); ?> kcal
    </div>

    <a href="<?php echo e(route('exercises.index')); ?>" class="btn btn-primary">Powrót do listy ćwiczeń</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/exercises/show.blade.php ENDPATH**/ ?>