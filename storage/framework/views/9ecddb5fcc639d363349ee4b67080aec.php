

<?php $__env->startSection('content'); ?>
    <h1>Edytuj Trening</h1>

    <form action="<?php echo e(route('workouts.update', $workout->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nazwa</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($workout->name); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea class="form-control" id="description" name="description" required><?php echo e($workout->description); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Czas Trwania (min)</label>
            <input type="number" class="form-control" id="duration" name="duration" value="<?php echo e($workout->duration); ?>" required>
        </div>

        <div class="mb-3">
            <label for="exercises" class="form-label">Wybierz ćwiczenia</label>
            <div>
                <?php $__currentLoopData = $exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exercise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exercises[]" value="<?php echo e($exercise->id); ?>" id="exercise<?php echo e($exercise->id); ?>"
                            <?php if($workout->exercises->contains($exercise->id)): ?> checked <?php endif; ?>>
                        <label class="form-check-label" for="exercise<?php echo e($exercise->id); ?>">
                            <?php echo e($exercise->name); ?>

                        </label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Zapisz Zmiany</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/workouts/edit.blade.php ENDPATH**/ ?>