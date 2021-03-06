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
        Data Kelurahan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelurahan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="container">
  <!-- Page Heading -->
        <div class="row">
        </div>
        <div class="col-xs-11">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Id Kecamatan</th>
                <th>Nama Kecamatan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                    foreach ($data as $row ) {
                ?>
                <tr>
                    <td><?php echo $row->id_kec ?></td>
                    <td><?php echo $row->nama_kecamatan ?></td>
                    <td>
                    <a href="<?php echo base_url('C_laporan/pindahdatang_kelurahan/'.$row->id_kec); ?>" class="btn btn-primary btn-sm">Lihat Pindah Datang</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>

      <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Kelurahan</h3>
            </div>
            <form class="form-horizontal" action="<?php echo site_url().'admin/C_admin/simpan_kelurahan'; ?>" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kelurahan</label>
                        <div class="col-xs-9">
                            <input name="id_kel" class="form-control" type="text" placeholder="Id Kelurahan" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kecamatan</label>
                        <div class="col-xs-9">
                            <select name="id_kec" class="form-control" type="text" placeholder="Id Kecamatan" style="width:335px;" required>
                            <option value="">Pilih Kecamatan</option>
                              <?php
                                foreach ($kecamatan as $rows) {
                              ?>
                                <option value="<?php echo $rows->id_kec ?>"><?php echo $rows->nama_kecamatan ?></option>
                              <?php
                                }
                              ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kelurahan</label>
                        <div class="col-xs-9">
                            <input name="nama_kelurahan" class="form-control" type="text" placeholder="Nama Kelurahan" style="width:335px;" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <input class="btn btn-info" type="submit" value="Simpan">
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
<?php $this->load->view('layout/footer')?>
</body>
</html>