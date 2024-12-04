<!-- resources/views/workouts/show.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($workout->name); ?></h1>
        <p><strong>Opis:</strong> <?php echo e($workout->description); ?></p>
        <p><strong>Czas trwania:</strong> <?php echo e($workout->duration); ?> minut</p>
        <h3>Ćwiczenia w tym treningu:</h3>
        <ul>
            <?php $__currentLoopData = $workout->exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exercise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($exercise->name); ?> - <?php echo e($exercise->duration); ?> minut</li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <a href="<?php echo e(route('workouts.index')); ?>" class="btn btn-secondary">Powrót</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/workouts/show.blade.php ENDPATH**/ ?>