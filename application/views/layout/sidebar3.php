<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          
          <ul class="treeview-menu">      
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Laporan Reguler</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo site_url('admin_kab/C_laporan/detail_jumlahpenduduk/'.$this->session->userdata('id_kabkot'));?>"><i class="fa fa-circle-o"></i> Jumlah Penduduk</a></li>
                <li><a href="<?php echo site_url('admin_kab/C_laporan/detail_ktp/'.$this->session->userdata('id_kabkot'));?>"><i class="fa fa-circle-o"></i> KTP</a></li>
                <li><a href="<?php echo site_url('admin_kab/C_laporan/detail_KIA/'.$this->session->userdata('id_kabkot'));?>"><i class="fa fa-circle-o"></i> KIA</a></li>
                <li><a href="<?php echo site_url('admin_kab/C_laporan/detail_akta/'.$this->session->userdata('id_kabkot'));?>"><i class="fa fa-circle-o"></i> AKTA</a></li>
                <li><a href="<?php echo site_url('admin_kab/C_laporan/detail_pindah/'.$this->session->userdata('id_kabkot'));?>"><i class="fa fa-circle-o"></i> Pindah dan Datang</a></li>
              </ul>
          </ul>
        </li>
        </ul>
      </li>
    </section>
    <!-- /.sidebar -->
  </aside>