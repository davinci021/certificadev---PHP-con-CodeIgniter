<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://localhost/CertificaDev/plantilla/sinfoto.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Pedrito Briseño</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header"><?=$titulo?></li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="http://localhost/CertificaDev/index.php/certificatev_controller/agregar"><i class="fa fa-link"></i> <span>Postular</span></a></li>
        <li><a href="http://localhost/CertificaDev/index.php/certificatev_controller/"><i class="fa fa-link"></i> <span>Listar Postulaciones</span></a></li>
        <li class="treeview">
          <a href="http://localhost/CertificaDev/index.php/certificatev_controller/verestado"><i class="fa fa-link"></i> <span>Ver Estado</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$titulo?>
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <!--<section class="content">-->

    