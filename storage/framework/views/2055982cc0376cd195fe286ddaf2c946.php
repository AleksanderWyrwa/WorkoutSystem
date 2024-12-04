<!-- resources/views/home.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1 class="display-4">Witaj w aplikacji Fitness!</h1>
        <p class="lead">Zarządzaj swoimi treningami, ćwiczeniami i wynikami w jednym miejscu.</p>
        <hr class="my-4">
        <p>Rozpocznij swoją przygodę z fitnessu:</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Treningi</h5>
                        <p class="card-text">Zarządzaj swoimi treningami. Dodawaj nowe, edytuj i przeglądaj wykonane treningi.</p>
                        <a href="<?php echo e(route('workouts.index')); ?>" class="btn btn-primary">Zobacz treningi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ćwiczenia</h5>
                        <p class="card-text">Dodawaj nowe ćwiczenia, edytuj je i przypisuj do treningów.</p>
                        <a href="<?php echo e(route('exercises.index')); ?>" class="btn btn-primary">Zobacz ćwiczenia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Wyniki</h5>
                        <p class="card-text">Zarządzaj swoimi wynikami. Zapisuj dane dotyczące wykonanych treningów.</p>
                        <a href="<?php echo e(route('workout_results.index')); ?>" class="btn btn-primary">Zobacz wyniki</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/home.blade.php ENDPATH**/ ?>