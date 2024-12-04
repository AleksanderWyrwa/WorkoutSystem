<!-- resources/views/workouts/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Treningi</h1>
        <a href="<?php echo e(route('workouts.create')); ?>" class="btn btn-primary mb-3">Dodaj nowy trening</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nazwa</th>
                    <th>Opis</th>
                    <th>Czas trwania (min)</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $workouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($workout->id); ?></td>
                        <td><?php echo e($workout->name); ?></td>
                        <td><?php echo e($workout->description); ?></td>
                        <td><?php echo e($workout->duration); ?></td>
                        <td>
                            <a href="<?php echo e(route('workouts.show', $workout->id)); ?>" class="btn btn-info">Pokaż</a>
                            <a href="<?php echo e(route('workouts.edit', $workout->id)); ?>" class="btn btn-warning">Edytuj</a>
                            <form action="<?php echo e(route('workouts.destroy', $workout->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/workouts/index.blade.php ENDPATH**/ ?>