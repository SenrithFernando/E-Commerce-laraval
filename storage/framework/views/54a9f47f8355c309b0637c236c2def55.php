<?php
use App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user')) {
    $total=ProductController::cartItem();
}
$total=ProductController::cartItem();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">E-COMMERSE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="/cartlist">
                cart(<?php echo e($total); ?>)
            </a>
            </li>
            <?php if(Session::has('user')): ?>
            <div class="btn-group">
                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo e(Session::get('user')['name']); ?>

                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/logout">Logout</a>
                    </li>
                    <?php else: ?>
                    <li><a class="dropdown-item" href="/login">Login</a></li>
                    <li><a class="dropdown-item" href="/register">Rejister</a></li>
                    <?php endif; ?>
                </ul>
              </div>


          </ul>
        

      </div>
    </div>
  </nav>
<?php /**PATH C:\Users\Senrith Fernando\commerce\resources\views/header.blade.php ENDPATH**/ ?>