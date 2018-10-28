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
  <?php $this->load->view('layout/sidebar3')?>
 

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
              <table class="tabelReport" border="1px" >
            <thead>
              <tr rowspan="2">
                <td rowspan="3">Nama Kelurahan</td>
                <td colspan="12"><center>Jumlah Penduduk<center></td>
              </tr>
              <tr>
                <td colspan="3"><center>BULAN OKTOBER</center></td>
                <td colspan="3"><center>S/D OKTOBER</center></td>
                <td colspan="3"><center>BULAN SEPTEMBER</center></td>
                <td colspan="3"><center>S/D SEPTEMBER</center></td>
              </tr>
              <tr>
                <td colspan="">L</td>
                <td colspan="">P</td>
                <td colspan="">Jumlah</td>
                <td colspan="">L</td>
                <td colspan="">P</td>
                <td colspan="">Jumlah</td>
                <td colspan="">L</td>
                <td colspan="">P</td>
                <td colspan="">Jumlah</td>
                <td colspan="">L</td>
                <td colspan="">P</td>
                <td colspan="">Jumlah</td>
              </tr>
            </thead>
            <tbody>
              <?php
                    foreach ($data as $row =>$value ) {
                      $sum = $value->kbsl + $value->kbsp;
                      $sum2 = $value->ksbsl + $value->ksbsp;
                      $sum3 = $value->kkbsl + $value->kkbsp;
                      $sum4 = $value->kksbsl + $value->kksbsp;
                ?>
                <tr>
                    <td><?php echo $value->nama_kelurahan ?></td>
                    <td><?php echo $value->kbsl ?></td>
                    <td><?php echo $value->kbsp ?></td>
                    <td><?php echo $sum ?></td>
                    <td><?php echo $value->ksbsl ?></td>
                    <td><?php echo $value->ksbsp ?></td>
                    <td><?php echo $sum2 ?></td>
                    <td><?php echo $value->kkbsl ?></td>
                    <td><?php echo $value->kkbsp ?></td>
                    <td><?php echo $sum3 ?></td>
                    <td><?php echo $value->kksbsl ?></td>
                    <td><?php echo $value->kksbsp ?></td>
                    <td><?php echo $sum4 ?></td>

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