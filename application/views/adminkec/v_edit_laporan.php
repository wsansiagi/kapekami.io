<!DOCTYPE html>

<html lang="en">
<head>
  <?php $this->load->view('layout/head')?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!--Main Header-->
 <?php $this->load->view('layout/header')?>
  <!--Sidebar-->
 <?php $this->load->view('layout/sidebar2')?>
 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Laporan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan</li>   
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="container">
  <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Input Laporan
            </h1>
        </div>
        <div class="row">
          <?php
          foreach($data as $row){
          ?>
          <form class="form-horizontal col-xs-6" method="POST" action="<?php echo site_url().'admin_kec/C_laporan/update_laporan';?>">
                <div class="modal-body">
                <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kelurahan</label>
                        <div class="col-xs-9">
                            <input  value="<?php echo $row->nama_kelurahan?>" class="form-control" type="text" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >dkbl</label>
                        <div class="col-xs-9">
                            <input name="dkbl" value="<?php echo $row->dkbl?>" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >dkbp</label>
                        <div class="col-xs-9">
                            <input name="dkbp" value="<?php echo $row->dkbp?>" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>\

                     <div class="form-group">
                        <label class="control-label col-xs-3" >dpl</label>
                        <div class="col-xs-9">
                            <input name="dpl" value="<?php echo $row->dpl?>" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >dpp</label>
                        <div class="col-xs-9">
                            <input name="dpp" value="<?php echo $row->dpp?>" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="<?php echo site_url('kepalakec/C_laporan/detail_ktp/'.$this->session->userdata('id_kec'));?>" class="btn"  aria-hidden="true">Tutup</a>
                    <input type="submit" class="btn btn-info" id="btn_simpan" value="Simpan">
                </div>
            </form>
            <?php
              }
            ?>  
        </div>
      </div>       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
<?php $this->load->view('layout/footer')?>
</body>
</html>