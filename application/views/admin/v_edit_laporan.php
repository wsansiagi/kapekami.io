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
 <?php $this->load->view('layout/sidebar')?>
 

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
            <h1 class="page-header">Ubah Laporan
            </h1>
        </div>
        <div class="row">
          <?php
          foreach($data as $row){
          ?>
          <form class="form-horizontal" method="POST" action="<?php echo site_url().'admin/C_admin/update_laporan'; ?>">
                <div class="modal-body">

                  <div class="form-group">
                        <label class="control-label col-xs-3" >ID Laporan</label>
                        <div class="col-xs-9">
                            <input name="id_ktp" value="<?php echo $row->id_ktp?>"  class="form-control" type="text" placeholder="Id Laporan" style="width:335px;" readonly>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kabupaten/Kota</label>
                        <div class="col-xs-9">
                            <input name="id_kabkot" value="<?php echo $row->id_kabkot?>" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kecamatan</label>
                        <div class="col-xs-9">
                            <input name="id_kec" value="<?php echo $row->id_kec?>" class="form-control" type="text" style="width:335px;" required>
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

                    <div class="form-group">
                        <label class="control-label col-xs-3" >bulan</label>
                        <div class="col-xs-9">
                            <input name="bulan" value="<?php echo $row->bulan?>" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tahun</label>
                        <div class="col-xs-9">
                            <input name="tahun" value="<?php echo $row->tahun?>" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-9">
                            <input name="status" value="<?php echo $row->status?>" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
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