

<?php $__env->startSection('content'); ?>
    <h1>Wyniki treningów</h1>

    <a href="<?php echo e(route('workout_results.create')); ?>" class="btn btn-primary">Dodaj nowy wynik</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Trening</th>
                <th>Data</th>
                <th>Wynik</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($result->workout->name); ?></td>
                    <td><?php echo e($result->date); ?></td>
                    <td><?php echo e($result->performance); ?></td>
                    <td>
                        <form action="<?php echo e(route('workout_results.destroy', $result->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/workout_results/index.blade.php ENDPATH**/ ?>