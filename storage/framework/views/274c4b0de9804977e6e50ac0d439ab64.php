<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness App</title>
    <!-- Ładowanie Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Nawigacja -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Fitness App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('workouts.index')); ?>">Treningi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('exercises.index')); ?>">Ćwiczenia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('workout_results.index')); ?>">Wyniki</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Główna zawartość strony -->
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Ładowanie Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\Grudzień\fitness-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>