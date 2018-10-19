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
        Data Kabupaten/Kota
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kabupaten/Kota</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="container">
  <!-- Page Heading -->
        <div class="row">

        <br>
        <br>
        </div>
       <div class="col-xs-11">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Id Kabupaten/Kota</th>
                <th>Nama Kabupaten</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($data as $row ) {
                        # code...
                ?>
                <tr>
                    <td><?php echo $row->id_kabkot ?></td>
                    <td><?php echo $row->nama_kabkot ?></td>
                    <td>
                    <a href="<?php echo base_url('index.php/C_laporan/detail_kabkot/'.$row->id_kabkot); ?>" class="btn btn-success btn-sm">Laporan Detail</a>

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
                <h3 class="modal-title" id="myModalLabel">Tambah Kabupaten/Kota</h3>
            </div>
            <form class="form-horizontal" method="POST" action="<?php echo site_url().'index.php/admin/C_admin/simpan_kabkot'; ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kabupaten/Kota</label>
                        <div class="col-xs-9">
                            <input name="id_kabkot" id="id_kabkot" class="form-control" type="text" placeholder="Id Kabupaten/Kota" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kabupaten/Kota</label>
                        <div class="col-xs-9">
                            <input name="nama_kabkot" id="nama_kabkot" class="form-control" type="text" placeholder="Nama Kabupaten/Kota" style="width:335px;" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <input type="submit" class="btn btn-info" id="btn_simpan" value="Simpan">
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
