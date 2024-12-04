<!-- resources/views/exercises/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Dodaj nowe ćwiczenie</h1>
        <form action="<?php echo e(route('exercises.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Nazwa</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="duration">Czas trwania (min)</label>
                <input type="number" class="form-control" id="duration" name="duration" required min="1">
            </div>
            <div class="form-group">
                <label for="calories_burned">Spalone kalorie</label>
                <input type="number" class="form-control" id="calories_burned" name="calories_burned" required min="1">
            </div>
            <button type="submit" class="btn btn-success mt-3">Zapisz</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/exercises/create.blade.php ENDPATH**/ ?>