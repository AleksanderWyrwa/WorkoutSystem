

<?php $__env->startSection('content'); ?>
    <h1>Dodaj nowy wynik treningu</h1>

    <form action="<?php echo e(route('workout_results.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <!-- Wybór treningu -->
        <div class="mb-3">
            <label for="workout_id" class="form-label">Trening</label>
            <select name="workout_id" id="workout_id" class="form-control" onchange="updateCalories()">
                <option value="">Wybierz trening</option>
                <?php $__currentLoopData = $workouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($workout->id); ?>" data-calories="<?php echo e($workout->exercises->sum('calories_burned')); ?>">
                        <?php echo e($workout->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Wyświetlenie spalonych kalorii -->
        <div class="mb-3">
            <label for="calories_burned" class="form-label">Spalone kalorie</label>
            <input type="text" id="calories_burned" class="form-control" readonly>
        </div>

        <!-- Data -->
        <div class="mb-3">
            <label for="date" class="form-label">Data</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Zapisz wynik</button>
    </form>

    <script>
        // Funkcja, która będzie aktualizować pole 'Spalone kalorie' po wybraniu treningu
        function updateCalories() {
            const workoutSelect = document.getElementById('workout_id');
            const selectedOption = workoutSelect.options[workoutSelect.selectedIndex];
            const caloriesBurned = selectedOption ? selectedOption.dataset.calories : 0;

            document.getElementById('calories_burned').value = caloriesBurned;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Grudzień\fitness-app\resources\views/workout_results/create.blade.php ENDPATH**/ ?>