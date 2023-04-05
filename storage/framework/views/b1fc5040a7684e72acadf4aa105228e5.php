<?php $__env->startSection("content"); ?>
<div class="custom-product" >
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-12" >
        <div class="trending-wrapper">
            <h4>my orders for Product</h4>

            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row searched-item w-100 pt-4 cart-list-devider">
                <div class="col-sm-3 col-4">
                    <a href="detail/<?php echo e($item->id); ?>">
                        <img src="<?php echo e($item->gallery); ?>" alt="" class="w-50">

                    </a>
                </div>

                <div class="col-sm-3 col-4">

                        <div class="text-dark" style="text-decoration: none;">
                            <h2>Name : <?php echo e($item->name); ?></h2>
                            <p>Delivery status : <?php echo e($item->status); ?></p>
                            <p>Address : <?php echo e($item->address); ?></p>
                            <p>Payment Status : <?php echo e($item->payment_status); ?></p>
                            <p>Payment Method : <?php echo e($item->payment_method); ?></p>
                        </div>

                </div>

                <div class="col-sm-3 col-4">

                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Senrith Fernando\commerce\resources\views/myorders.blade.php ENDPATH**/ ?>