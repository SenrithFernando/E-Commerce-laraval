<?php $__env->startSection("content"); ?>
<div class="custom-product" >
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-12" >
        <div class="trending-wrapper">
            <h4>Result for Product</h4>
            <a href="ordernow" class="btn btn-success mb-3">Order Now</a>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row searched-item w-100 pt-4 cart-list-devider">
                <div class="col-sm-3 col-4">
                    <a href="detail/<?php echo e($item->id); ?>">
                        <img src="<?php echo e($item->gallery); ?>" alt="" class="w-50">

                    </a>
                </div>

                <div class="col-sm-3 col-4">

                        <div class="text-dark" style="text-decoration: none;">
                            <h2 ><?php echo e($item->name); ?></h2>
                            <h5><?php echo e($item->description); ?></h5>
                            <p>Rs.<?php echo e($item->price); ?>/=</p>
                        </div>

                </div>

                <div class="col-sm-3 col-4">
                    <a href="/removecart/<?php echo e($item->cart_id); ?>"><button class="btn btn-warning">Remove to Cart</button></a>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <a href="ordernow" class="btn btn-success mx-3">Order Now</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Senrith Fernando\commerce\resources\views/cartlist.blade.php ENDPATH**/ ?>