<!--=================================================
    Menu Lateral izquierdo - Menu principal
==================================================-->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo SERVERURL; ?>views/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Datacom S.R.L.</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo SERVERURL; ?>views/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">William Claro Quisbert</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
            if(true){
          ?>
              <li class="nav-item">
                <a href="<?php echo SERVERURL; ?>plantilla-tablas" class="nav-link <?php if(isset($_GET['view']) && $_GET['view']=='plantilla-tablas'){echo 'active';}else{echo '';} ?>">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Tablas
                    <span class="badge badge-info right">2</span>
                  </p>
                </a>
              </li>
          <?php  
            }
          ?>
          
          <li class="nav-item active">
            <a href="<?php echo SERVERURL; ?>plantilla" class="nav-link <?php if(isset($_GET['view']) && $_GET['view']=='plantilla'){echo 'active';}else{echo '';} ?>">
              <i class="nav-icon far fa-image"></i>
              <p>
                Plantilla
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo SERVERURL; ?>plantilla-validation" class="nav-link <?php if(isset($_GET['view']) && $_GET['view']=='plantilla-validation'){echo 'active';}else{echo '';} ?>">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Validación
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>