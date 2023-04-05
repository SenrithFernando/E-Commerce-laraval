<?php $__env->startSection("content"); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="<?php echo e($product['gallery']); ?>" alt="" class="w-50">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2 class="pb-3"><?php echo e($product['name']); ?></h2>
            <h3>Price :<?php echo e($product['price']); ?></h3>
            <h5>Detail :<?php echo e($product['description']); ?></h5>
            <h5>Catagory :<?php echo e($product['category']); ?></h5>

            <form action="/add_to_cart" method="POST">
                    <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">
                <button class="btn btn-primary mt-2">Add to Cart</button>
            </form>
            <br>
            <button class="btn btn-success mt-2 mb-2">Buy Now</button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Senrith Fernando\commerce\resources\views/detail.blade.php ENDPATH**/ ?>