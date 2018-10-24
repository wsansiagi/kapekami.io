<!DOCTYPE html>

<html lang="en">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
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
        Laporan Kabupaten/Kota
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="container">
  <!-- Page Heading -->
        <div class="row">
            <div class="col=md-3">
                <br><br>
            </div>
        </div>
        </div>
        <div class="col-xs-11">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <div class="tab">
                <button class="tablinks active" onclick="openCity(event, 'WajibKTP')">Wajib KTP</button>
                <button class="tablinks" onclick="openCity(event, 'WajibKTPBelumRekam')">Wajib KTP Belum Rekam</button>
                <button class="tablinks" onclick="openCity(event, 'PerekamanPencetakan')">KTP Perekaman Pencetakan</button>
                <button class="tablinks" onclick="openCity(event, 'KTPStatusRekam')">KTP Status Perekaman</button>
                <button class="tablinks" onclick="openCity(event, 'PencetakanKTPLD')">Pencetakan KTP-el Luar Domisili</button>
                <button class="tablinks" onclick="openCity(event, 'SuratKeteranganPKTP')">Surat Keterangan Pengganti KTP-el</button>
                               </div>

                <div id="WajibKTP" class="tabcontent">
                <h3>Wajib KTP</h3>
                <p>
                <table id="example2" border="1px" >
                    <thead>
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="6"><center>Jumlah Penduduk<center></td>
                    </tr>
                    <tr>
                        <td colspan="3"><center>DKB</center></td>
                        <td colspan="3"><center>Data Pelayanan</center></td>
                    </tr>
                    <tr>
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
                            foreach ($wajibktp as $row =>$value ) {
                            $sum = $value->dkbl + $value->dkbp;
                            $sum2 = $value->dpl + $value->dpp;
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->dkbl ?></td>
                            <td><?php echo $value->dkbp ?></td>
                            <td><?php echo $sum ?></td>
                            <td><?php echo $value->dpl ?></td>
                            <td><?php echo $value->dpp ?></td>
                            <td><?php echo $sum2 ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td><td>
                    <td></td>
                    <td></td>
                    </tr>
                    </tfoot>
                </table>
                </div>

                <div id="WajibKTPBelumRekam" class="tabcontent">
                <h3>Wajib KTP Belum Rekam</h3>
                <p>
                <table id="example3" border="1px" >
                    <thead>
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="9"><center>Jumlah Penduduk<center></td>
                    </tr>
                    <tr>
                        <td colspan="4"><center>DKB</center></td>
                        <td colspan="4"><center>Data Pelayanan</center></td>
                    </tr>
                    <tr>
                        <td colspan="">L</td>
                        <td colspan="">P</td>
                        <td colspan="">Jumlah</td>
                        <td colspan="">%</td>
                        <td colspan="">L</td>
                        <td colspan="">P</td>
                        <td colspan="">Jumlah</td>
                        <td colspan="">%</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach ($wajibktpbelumrekam as $row =>$value ) {
                            $sum = $value->dkbl + $value->dkbp;
                            $sum2 = $value->dpl + $value->dpp;
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->dkbl ?></td>
                            <td><?php echo $value->dkbp ?></td>
                            <td><?php echo $sum ?></td>
                            <td></td>
                            <td><?php echo $value->dpl ?></td>
                            <td><?php echo $value->dpp ?></td>
                            <td><?php echo $sum2 ?></td>
                            <td></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><td>
                    <td></td>
                    <td></td>
                    </tr>
                    </tfoot>
                </table>
                </div>

                <div id="PerekamanPencetakan" class="tabcontent">
                <h3>KTP Perekaman Percetakan</h3>
                <p>
                <table id="example5" border="1px" >
                    <thead>
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="6"><center>Perekaman<center></td>
                        <td colspan="6"><center>Percetakan<center></td>
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
                            foreach ($perekamanpencetakan as $row =>$value ) {
                            $sum = $value->dkbl + $value->dkbp;
                            $sum2 = $value->dpl + $value->dpp;
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->dkbl ?></td>
                            <td><?php echo $value->dkbp ?></td>
                            <td><?php echo $sum ?></td>
                            <td><?php echo $value->dpl ?></td>
                            <td><?php echo $value->dpp ?></td>
                            <td><?php echo $sum2 ?></td>
                            <td><?php echo $value->dpl ?></td>
                            <td><?php echo $value->dpp ?></td>
                            <td><?php echo $sum2 ?></td>
                            <td><?php echo $value->dpl ?></td>
                            <td><?php echo $value->dpp ?></td>
                            <td><?php echo $sum2 ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><td>
                    <td></td>
                    <td></td>
                    </tr>
                    </tfoot>
                </table>
                </div>

                <div id="KTPStatusRekam" class="tabcontent">
                <h3>KTP Status Rekam</h3>
                <p>
                <table id="example6" border="1px" >
                    <thead>
                    <tr rowspan="2">
                        <td colspan="3">Nama Kelurahan</td>
                        <td colspan="">BIO</td>
                        <td colspan="">EFC</td>
                        <td colspan="">DUF</td>
                        <td colspan="">ADJ</td>
                        <td colspan="">PRR</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach ($ktpstatusrekam as $row =>$value ) {
                            $sum = $value->dkbl + $value->dkbp;
                            $sum2 = $value->dpl + $value->dpp;
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->dkbl ?></td>
                            <td><?php echo $value->dkbp ?></td>
                            <td><?php echo $sum ?></td>
                            <td><?php echo $value->dpl ?></td>
                            <td><?php echo $value->dpp ?></td>
                            <td><?php echo $value->dpp ?></td>
                            <td><?php echo $sum2 ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><td>
                    <td></td>
                    <td></td>
                    </tr>
                    </tfoot>
                </table>
                </div>

                <div id="PencetakanKTPLD" class="tabcontent">
                <h3>Pencetakan KTLPD</h3>
                <p>
                <table id="example7" border="1px" >
                    <thead>
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                    </tr>
                    <tr>
                        <td colspan="3"><center>BULAN SEPTEMBER</center></td>
                        <td colspan="3"><center>S/D BULAN SEPTEMBER</center></td>
                    </tr>
                    <tr>
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
                            foreach ($pencetakanktpld as $row =>$value ) {
                            $sum = $value->dkbl + $value->dkbp;
                            $sum2 = $value->dpl + $value->dpp;
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->dkbl ?></td>
                            <td><?php echo $value->dkbp ?></td>
                            <td><?php echo $sum ?></td>
                            <td><?php echo $value->dpl ?></td>
                            <td><?php echo $value->dpp ?></td>
                            <td><?php echo $sum2 ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td><td>
                    <td></td>
                    <td></td>
                    </tr>
                    </tfoot>
                </table>
                </div>
                
                <div id="SuratKeteranganPKTP" class="tabcontent">
                <h3>Surat Keterangan PKTP</h3>
                <p>
                <table id="example8" border="1px" >
                    <thead>
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="6"><center>Penerbitan Surat Keterangan<center></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><center>Tercetak KTP</center></td>
                        <td colspan="2"><center>Belum Tercetak KTP</center></td>
                        <td rowspan="2"><center>Jumlah</center></td>
                       
                    </tr>
                    
                    <tr>
                        <td colspan="">Status Tunggal</td>
                        <td colspan="">Belum Tunggal</td>
                       
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach ($suratketeranganpktp as $row =>$value ) {
                            $sum = $value->dkbl + $value->dkbp;
                            $sum2 = $value->dpl + $value->dpp;
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->dkbl ?></td>
                            <td><?php echo $value->dkbp ?></td>
                            <td><?php echo $sum ?></td>
                            <td><?php echo $sum2 ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <td>Total</td>
                    
                    <td><td>
                    <td></td>
                    <td></td>
                    </tr>
                    </tfoot>
                </table>
                </div>
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

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</html>
