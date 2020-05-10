<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Xin chào <?php 
    if (isset($_SESSION['user'])) {
      echo $_SESSION['user']['name'];
    }
    ?> </b><a href="index.php?mod=auth&act=logout"><i class="fas fa-sign-out-alt"></i></a> 
  </div>
</footer>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index.php?mod=home&act=admin" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="index.php?mod=auth&act=logout" class="nav-link">Logout</a>
    </li> -->
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="/Project/mvc/index.php?mod=auth&act=login"" class="nav-link">Login</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->