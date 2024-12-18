<?php

$page = substr($_SERVER['SCRIPT_NAME'], strripos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand text-center m-0" href="#" target="_blank">
      <span class="font-weight-bold text-white">QUẢN LÝ S-SNEAKER</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main" style="height: 75vh">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white <?= $page == "index.php" ? 'active bg-gradient-primary' : '' ?>" href="../admin/index.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Thống kê</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= $page == "user.php" ? 'active bg-gradient-primary' : '' ?>" href="user.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Quản lý người dùng</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= $page == "order.php" ? 'active bg-gradient-primary' : '' ?>" href="order.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <span class="nav-link-text ms-1">Quản lý đơn hàng</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= $page == "category.php" ? 'active bg-gradient-primary' : '' ?>" href="category.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">category</i>

          </div>
          <span class="nav-link-text ms-1">Quản lý danh mục</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= $page == "add-category.php" ? 'active bg-gradient-primary' : '' ?>" href="add-category.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">category</i>

          </div>
          <span class="nav-link-text ms-1">Thêm danh mục</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= $page == "products.php" ? 'active bg-gradient-primary' : '' ?>" href="products.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">redeem</i>
          </div>
          <span class="nav-link-text ms-1">Quản lý sản phẩm</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= $page == "add-product.php" ? 'active bg-gradient-primary' : '' ?>" href="add-product.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">redeem</i>
          </div>
          <span class="nav-link-text ms-1">Thêm sản phẩm</span>
        </a>
      </li>
      <!--  -->
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-info mt-4 w-100" href="../index.php" type="button">Về cửa hàng</a>
      <a class="btn bg-gradient-primary mt-4 w-100" href="../logout.php" type="button">Đăng xuất</a>
    </div>
  </div>
</aside>