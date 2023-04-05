<?php $__env->startSection("content"); ?>
<div class="custom-product mx-3" >
    <table class="table">

        <tbody>
          <tr>

            <td>Amount</td>
            <td>Rs. <?php echo e($total); ?></td>
          </tr>
          <tr>

            <td>Tax</td>
            <td>Rs. 0</td>
          </tr>
          <tr>

            <td >Delivery</td>
            <td>Rs. 10</td>
          </tr>
          <tr>

            <td >Total Amount</td>
            <td><b> Rs. <?php echo e($total+10); ?></b></td>
          </tr>
        </tbody>
      </table>
      <div>
        <form action="/orderplace" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
              <textarea name="address" placeholder="enter your address"   aria-describedby="emailHelp" class="mx-3 w-25"></textarea>

            </div>
            <div class="mb-3 px-3">
              <label for="pwd"><b> Payment Method</b></label> <br><br>
              <input type="radio" value="cash" name="payment"  ><span> Online Payment</span> <br> <br>
              <input type="radio" value="cash" name="payment"  > <span> EMI Payment</span><br> <br>
              <input type="radio" value="cash" name="payment" ><span> Payment On delivery</span><br> <br>
            </div>

            <button type="submit" class="btn btn-secondary">Order Now</button>
          </form>
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Senrith Fernando\commerce\resources\views/ordernow.blade.php ENDPATH**/ ?>