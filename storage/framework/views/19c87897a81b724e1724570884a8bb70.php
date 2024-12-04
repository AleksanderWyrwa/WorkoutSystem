<!-- resources/views/exercises/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Ćwiczenia</h1>
        <a href="<?php echo e(route('exercises.create')); ?>" class="btn btn-primary mb-3">Dodaj nowe ćwiczenie</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nazwa</th>
                    <th>Opis</th>
                    <th>Czas trwania (min)</th>
                    <th>Spalone kalorie</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exercise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($exercise->id); ?></td>
                        <td><?php echo e($exercise->name); ?></td>
                        <td><?php echo e($exercise->description); ?></td>
                        <td><?php echo e($exercise->duration); ?></td>
                        <td><?php echo e($exercise->calories_burned); ?></td>
                        <td>
                            <a href="<?php echo e(route('exercises.show', $exercise->id)); ?>" class="btn btn-info">Pokaż</a>
                            <a href="<?php echo e(route('exercises.edit', $exercise->id)); ?>" class="btn btn-warning">Edytuj</a>
                            <form action="<?php echo e(route('exercises.destroy', $exercise->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/exercises/index.blade.php ENDPATH**/ ?>