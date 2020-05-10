<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="public/backend/index3.html" class="brand-link">
    <img src="public/backend/dist/img/AdminLTELogo.png"
    alt="AdminLTE Logo"
    class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="public/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php 
          if (isset($_SESSION['user'])) {
            echo $_SESSION['user']['name'];
          }
          ?>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?mod=user&act=list" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản Lý Người Dùng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=post&act=list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản Lý Bài Viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=category&act=list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản Lý Danh Mục</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-header">EXAMPLES</li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Quản Lý Người Dùng
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?mod=user&act=list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Người Dùng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=user&act=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Mới Người Dùng </p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="index.php?mod=user&act=edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cập Nhật Thông Tin</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Quản Lý Bài Viết
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?mod=post&act=list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Bài Viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=post&act=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Mới Bài Viết</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Quản Lý Danh Mục
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?mod=category&act=list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Chuyên Mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=category&act=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Mới Chuyên Mục</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>