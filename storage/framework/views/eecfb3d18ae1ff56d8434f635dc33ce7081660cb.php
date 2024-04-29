<?php $__env->startSection('content'); ?>
<br><br><br>

<div class="card" style="padding: 100px;">
  <div class="card-header" style="font-weight: bold">Students Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($students->name); ?></h5>
        <p class="card-text">Address : <?php echo e($students->address); ?></p>
        <p class="card-text">Mobile : <?php echo e($students->mobile); ?></p>
  </div>

    </hr>

  </div>
</div>

<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\LProjects\studentcrud-app\resources\views/students/show.blade.php ENDPATH**/ ?>