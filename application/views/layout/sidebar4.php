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
        <?php if($this->session->userdata('level')=='admin'){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('admin\C_admin\tampil_user');?>"><i class="fa fa-user"></i> Pengguna Provinsi</a></li>
            <li class=""><a href="<?php echo base_url('admin\C_admin\tampil_userkab');?>"><i class="fa fa-user"></i> Pengguna Kabupaten/Kota</a></li>
            <li class=""><a href="<?php echo base_url('admin\C_admin\tampil_userkec');?>"><i class="fa fa-user"></i> Pengguna Kecamatan</a></li>
          </ul>
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
            <i class="fa fa-users"></i>
            <span>Report</span>
          </a>
        </li>
        <?php }elseif($this->session->userdata('level')=='adminkepalaprovinsi'){?>
      <li class="treeview">
          <ul class="treeview-menu">      
          </ul>
        </li>
        <li class="active treeview">
          <a href="<?php echo site_url('admin/C_admin/tampil_laporan');?>">
            <i class="fa fa-book"></i> <span>Laporan Reguler</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('kepalaprov/C_laporan/tampil_semua');?>"><i class="fa fa-circle-o"></i> List Semua Data</a></li>
                <!-- <li><a href="#"><i class="fa fa-circle-o"></i> KTP</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> KIA</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> AKTA</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Pindah dan Datang</a></li> -->
              </ul>
        </li>
      <?php }?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>