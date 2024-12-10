<?php
session_start();
ob_start();


include_once '../connect/connect.php';
require_once '../connect/sanphamconn.php';
require_once '../connect/nhasanxuatconn.php';
require_once '../connect/categoriesconn.php';
require '../connect/user.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <div class="wrapper">
    <aside id="sidebar">
      <div class="d-flex">
        <button class="toggle-btn" type="button">
          <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
          <a href="#">Admin</a>
        </div>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-item">
          <a href="index.php?page_layout=sanpham" class="sidebar-link">
            <i class="lni lni-user"></i>
            <span>Quản lý sản phẩm</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index.php?page_layout=danhmuc" class="sidebar-link">
            <i class="lni lni-agenda"></i>
            <span>Quản lý danh mục</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index.php?page_layout=nsx" class="sidebar-link">
            <i class="lni lni-protection"></i>
            <span>Quản lý nhà sản xuất</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index.php?page_layout=taikhoan" class="sidebar-link">
            <i class="lni lni-layout"></i>
            <span>Quản lý tài khoản</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link">
            <i class="lni lni-popup"></i>
            <span>Quản lý đơn hàng</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link">
            <i class="lni lni-cog"></i>
            <span>Setting</span>
          </a>
        </li>
      </ul>
      <div class="sidebar-footer">
        <a href="index.php?page_layout=logout" class="sidebar-link">
          <i class="lni lni-exit"></i>
          <span>Logout</span>
        </a>
      </div>
    </aside>
    <div class="main">
      <nav class="navbar navbar-expand px-4 py-3">
        <form action="#" class="d-none d-sm-inline-block"></form>
        <div class="navbar-collapse collapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
              <a href="#" class="nav-icon pe-md-0">
                <img
                  src="../image/account.png"
                  width="15%"
                  class="avatar"
                  alt="" />
              </a>
              <div class="dropdown-menu dropdown-menu-end rounded"></div>
            </li>
          </ul>
        </div>
      </nav>
      <main class="content px-3 py-4">
        <div class="container-fluid">
          <div class="mb-3">
            <div class="row">
              <div class="col-12 col-md-4">
                <div class="card border-0"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">

                <table class="table table-striped">
                  <?php


                  if (isset($_GET['page_layout'])) {
                    switch ($_GET['page_layout']) {
                     
                    }
                  }

                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="../script/script.js"></script>
</body>

</html>

<?php
