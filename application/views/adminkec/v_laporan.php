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
        <div class="col-xs-11">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Id Laporan</th>
                <th>Id Kabupaten</th>
                <th>Id Kecamatan</th>
                <th>dkbl</th>
                <th>dkbp</th>
                <th>dpl</th>
                <th>dpp</th>
                <th>bulan</th>
                <th>tahun</th>
                <th>status</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                    foreach ($data as $row ) {
                ?>
                <tr>

                    <td><?php echo $row->id_ktp ?></td>
                    <td><?php echo $row->id_kabkot ?></td>
                    <td><?php echo $row->id_kec ?></td>
                    <td><?php echo $row->dkbl ?></td>
                    <td><?php echo $row->dkbp ?></td>
                    <td><?php echo $row->dpl ?></td>
                    <td><?php echo $row->dpp ?></td>
                    <td><?php echo $row->bulan ?></td>
                    <td><?php echo $row->tahun ?></td>
                    <td><?php echo $row->status ?></td>
                    <td>
                    <a href="<?php echo base_url('index.php/admin/C_admin/edit_laporan/'.$row->id_ktp); ?>" class="btn btn-success btn-sm">Edit</a>
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
                <h3 class="modal-title" id="myModalLabel">Tambah Laporan</h3>
            </div>
            <form class="form-horizontal" action="<?php echo site_url().'index.php/admin/C_admin/simpan_Laporan'; ?>" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Laporan</label>
                        <div class="col-xs-9">
                            <input name="id_ktp" class="form-control" type="text" placeholder="Id Laporan" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kabupaten/Kota</label>
                        <div class="col-xs-9">
                            <input name="id_kabkot" id="id_kabkot" class="form-control" type="text" placeholder="Id Kabupaten/Kota" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kecamatan</label>
                        <div class="col-xs-9">
                            <input name="id_kec" class="form-control" type="text" placeholder="Id Laporan" style="width:335px;" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >dkbl</label>
                        <div class="col-xs-9">
                            <input name="dkbl" class="form-control" type="text" placeholder="dkbl" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >dkbp</label>
                        <div class="col-xs-9">
                            <input name="dkbp" class="form-control" type="text" placeholder="dkbp" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >dpl</label>
                        <div class="col-xs-9">
                            <input name="dpl" class="form-control" type="text" placeholder="dpl" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >dpp</label>
                        <div class="col-xs-9">
                            <input name="dpp" class="form-control" type="text" placeholder="dpp" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Bulan</label>
                        <div class="col-xs-9">
                            <input name="bulan" class="form-control" type="text" placeholder="bulan" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tahun</label>
                        <div class="col-xs-9">
                            <input name="tahun" class="form-control" type="text" placeholder="tahun" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-9">
                            <input name="status" class="form-control" type="text" placeholder="status" style="width:335px;" required>
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
