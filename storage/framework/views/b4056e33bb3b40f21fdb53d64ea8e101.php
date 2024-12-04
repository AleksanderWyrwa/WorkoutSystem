

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edytuj ćwiczenie</h1>
        <form action="<?php echo e(route('exercises.update', $exercise->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Metoda PUT do aktualizacji -->
            <div class="form-group">
                <label for="name">Nazwa</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $exercise->name)); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" id="description" name="description"><?php echo e(old('description', $exercise->description)); ?></textarea>
            </div>
            <div class="form-group">
                <label for="duration">Czas trwania (min)</label>
                <input type="number" class="form-control" id="duration" name="duration" value="<?php echo e(old('duration', $exercise->duration)); ?>" required min="1">
            </div>
            <div class="form-group">
                <label for="calories_burned">Spalone kalorie</label>
                <input type="number" class="form-control" id="calories_burned" name="calories_burned" value="<?php echo e(old('calories_burned', $exercise->calories_burned)); ?>" required min="1">
            </div>
            <button type="submit" class="btn btn-success mt-3">Zapisz zmiany</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/exercises/edit.blade.php ENDPATH**/ ?>