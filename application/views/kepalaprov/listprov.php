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
  <?php $this->load->view('layout/sidebar4')?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kependudukan Jawa Barat
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
        <div class="col-md-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <table id="wandoya" class="table table-striped table-bordered nowrap" style="width:100%">
              <thead>
                  <tr>
                      <th>No.</th>
                      <th>Nama Kabupaten/Kota</th>
                      <th>Nama Kecamatan</th>
                      <th>Nama Kelurahan</th>
                      <th>DKBL</th>
                      <th>DKBP</th>
                      <th>DPL</th>
                      <th>DPP</th>
                      <th>RBL</th>
                      <th>RBP</th>
                      <th>RSBL</th>
                      <th>RSBP</th>
                      <th>CBL</th>
                      <th>CBP</th>
                      <th>CSBL</th>
                      <th>CSBP</th>
                      <th>BIO</th>
                      <th>SFE</th>
                      <th>EFC</th>
                      <th>DUP</th>
                      <th>ADJ</th>
                      <th>PRR</th>
                      <th>CETAK KTP</th>
                      <th>BCT</th>
                      <th>BCTT</th>
                      <th>USIAL</th>
                      <th>USIAP</th>
                      <th>LAHIRL</th>
                      <th>LAHIRP</th>
                      <th>SLAHIRL</th>
                      <th>SLAHIRP</th>
                      <th>KAWIN</th>
                      <th>AKAWIN</th>
                      <th>SKAWIN</th>
                      <th>SAKAWIN</th>
                      <th>CERAI</th>
                      <th>ACERAI</th>
                      <th>SCERAI</th>
                      <th>SACERAI</th>
                      <th>PKB</th>
                      <th>PKSB</th>
                      <th>AKB</th>
                      <th>AKSB</th>
                      <th>AKBT</th>
                      <th>AKSBT</th>
                      <th>KBSL</th>
                      <th>KBSP</th>
                      <th>KSBSL</th>
                      <th>KSBSP</th>
                      <th>KKBSL</th>
                      <th>KKBSP</th>
                      <th>KKSBSL</th>
                      <th>KKSBSP</th>
                  </tr>
              </thead>
              <tbody>
              <?php
                $no=0;
                foreach($data as $row =>$value){
              ?>
              <?php
                $no++;
              ?>
                  <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $value->nama_kabkot ?></td>
                      <td><?php echo $value->nama_kecamatan ?></td>
                      <td><?php echo $value->nama_kelurahan ?></td>
                      <td><?php echo $value->dkbl ?></td>
                      <td><?php echo $value->dkbp ?></td>
                      <td><?php echo $value->dpl ?></td>
                      <td><?php echo $value->dpp ?></td>
                      <td><?php echo $value->rbl ?></td>
                      <td><?php echo $value->rbp ?></td>
                      <td><?php echo $value->rsbl ?></td>
                      <td><?php echo $value->rsbp ?></td>
                      <td><?php echo $value->cbl ?></td>
                      <td><?php echo $value->cbp ?></td>
                      <td><?php echo $value->csbl ?></td>
                      <td><?php echo $value->csbp ?></td>
                      <td><?php echo $value->bio ?></td>
                      <td><?php echo $value->sfe ?></td>
                      <td><?php echo $value->efc ?></td>
                      <td><?php echo $value->dup ?></td>
                      <td><?php echo $value->adj ?></td>
                      <td><?php echo $value->prr ?></td>
                      <td><?php echo $value->cetakktp ?></td>
                      <td><?php echo $value->bct ?></td>
                      <td><?php echo $value->bctt ?></td>
                      <td><?php echo $value->usial ?></td>
                      <td><?php echo $value->usiap ?></td>
                      <td><?php echo $value->lahirl ?></td>
                      <td><?php echo $value->lahirp ?></td>
                      <td><?php echo $value->slahirl ?></td>
                      <td><?php echo $value->slahirp ?></td>
                      <td><?php echo $value->kawin ?></td>
                      <td><?php echo $value->akawin ?></td>
                      <td><?php echo $value->skawin ?></td>
                      <td><?php echo $value->sakawin ?></td>
                      <td><?php echo $value->cerai ?></td>
                      <td><?php echo $value->acerai ?></td>
                      <td><?php echo $value->scerai ?></td>
                      <td><?php echo $value->sacerai ?></td>
                      <td><?php echo $value->pkb ?></td>
                      <td><?php echo $value->pksb ?></td>
                      <td><?php echo $value->akb ?></td>
                      <td><?php echo $value->aksb ?></td>
                      <td><?php echo $value->akbt ?></td>
                      <td><?php echo $value->aksbt ?></td>
                      <td><?php echo $value->kbsl ?></td>
                      <td><?php echo $value->kbsp ?></td>
                      <td><?php echo $value->ksbsl ?></td>
                      <td><?php echo $value->ksbsp ?></td>
                      <td><?php echo $value->kkbsl ?></td>
                      <td><?php echo $value->kkbsp ?></td>
                      <td><?php echo $value->kksbsl ?></td>
                      <td><?php echo $value->kksbsp ?></td>
                  </tr>
                  <?php
                    }
                  ?>
              </tbody>
              <tfoot>
              <tr>
                      <th>No.</th>
                      <th>Nama Kabupaten/Kota</th>
                      <th>Nama Kecamatan</th>
                      <th>Nama Kelurahan</th>
                      <th>DKBL</th>
                      <th>DKBP</th>
                      <th>DPL</th>
                      <th>DPP</th>
                      <th>RBL</th>
                      <th>RBP</th>
                      <th>RSBL</th>
                      <th>RSBP</th>
                      <th>CBL</th>
                      <th>CBP</th>
                      <th>CSBL</th>
                      <th>CSBP</th>
                      <th>BIO</th>
                      <th>SFE</th>
                      <th>EFC</th>
                      <th>DUP</th>
                      <th>ADJ</th>
                      <th>PRR</th>
                      <th>CETAK KTP</th>
                      <th>BCT</th>
                      <th>BCTT</th>
                      <th>USIAL</th>
                      <th>USIAP</th>
                      <th>LAHIRL</th>
                      <th>LAHIRP</th>
                      <th>SLAHIRL</th>
                      <th>SLAHIRP</th>
                      <th>KAWIN</th>
                      <th>AKAWIN</th>
                      <th>SKAWIN</th>
                      <th>SAKAWIN</th>
                      <th>CERAI</th>
                      <th>ACERAI</th>
                      <th>SCERAI</th>
                      <th>SACERAI</th>
                      <th>PKB</th>
                      <th>PKSB</th>
                      <th>AKB</th>
                      <th>AKSB</th>
                      <th>AKBT</th>
                      <th>AKSBT</th>
                      <th>KBSL</th>
                      <th>KBSP</th>
                      <th>KSBSL</th>
                      <th>KSBSP</th>
                      <th>KKBSL</th>
                      <th>KKBSP</th>
                      <th>KKSBSL</th>
                      <th>KKSBSP</th>
                  </tr>
              </tfoot>
          </table>
          </div>
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