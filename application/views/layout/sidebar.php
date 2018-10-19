<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo base_url('admin\C_admin');?>">
            <i class="fa fa-dashboard"></i><span>Dashboard</span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url('admin\C_admin\tampil_user');?>">
            <i class="fa fa-user"></i>
            <span>User</span>
          </a>
        </li>
         <li>
          <a href="<?php echo site_url('admin/C_admin/tampil_kabkot');?>">
            <i class="fa fa-users"></i>
            <span>Kabupaten/Kota</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/C_admin/tampil_kecamatan');?>">
            <i class="fa fa-users"></i>
            <span>Kecamatan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/C_admin/tampil_kelurahan');?>">
            <i class="fa fa-users"></i>
            <span>Kelurahan</span>
          </a>
        </li>
         
        <li>
          <a href="<?php echo site_url('admin/C_admin/tampil_laporan');?>">
            <i class="fa fa-book"></i> <span>Laporan Reguler</span>
          </a>
      </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
