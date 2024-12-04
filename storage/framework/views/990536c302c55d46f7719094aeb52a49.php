

<?php $__env->startSection('content'); ?>
    <h1>Edytuj wynik treningu</h1>

    <form action="<?php echo e(route('workout_results.update', $result->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="workout_id" class="form-label">Trening</label>
            <select name="workout_id" id="workout_id" class="form-control">
                <?php $__currentLoopData = $workouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($workout->id); ?>" <?php if($workout->id == $result->workout_id): ?> selected <?php endif; ?>><?php echo e($workout->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Data</label>
            <input type="date" name="date" id="date" value="<?php echo e($result->date); ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label for="performance" class="form-label">Opis wyniku</label>
            <textarea name="performance" id="performance" class="form-control"><?php echo e($result->performance); ?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Zaktualizuj wynik</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/workout_results/edit.blade.php ENDPATH**/ ?>