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
        Data Kecamatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kecamatan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="container">
  <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Ubah Data
                <small>Kecamatan</small>
        
            </h1>
        </div>
        <div class="row">
          <?php
          foreach($data as $row){
          ?>
          <form class="form-horizontal" method="POST" action="<?php echo site_url().'index.php/admin/C_admin/update_kecamatan'; ?>">
                <div class="modal-body">

                  <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kabupaten/Kota</label>
                        <div class="col-xs-9">
                            <input name="id_kec" value="<?php echo $row->id_kec?>"  class="form-control" type="text" placeholder="Id Kabupaten/Kota" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kecamatan</label>
                        <div class="col-xs-9">
                            <input name="id_kabkot" value="<?php echo $row->id_kabkot?>" class="form-control" type="text" placeholder="Id Kabupaten/Kota" style="width:335px;" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kecamatan</label>
                        <div class="col-xs-9">
                            <input name="nama_kecamatan" value="<?php echo $row->nama_kecamatan?>" class="form-control" type="text" placeholder="Nama Kabupaten/Kota" style="width:335px;" required>
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
