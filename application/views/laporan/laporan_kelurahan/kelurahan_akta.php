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
 <?php $this->load->view('layout/sidebar')?>
 

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
                <button class="tablinks active" onclick="openCity(event, 'AktaLahir')">Kepemilikan Akta Kelahiran</button>
                <button class="tablinks" onclick="openCity(event, 'AktaPenduduk018Tahun')">Penduduk 0 - 18 tahun</button>
                <button class="tablinks" onclick="openCity(event, 'KepemilikanAkta018Tahun')">Kepemilikan Akta Kelahiran (0-18 Tahun)</button>
                <button class="tablinks" onclick="openCity(event, 'AktaPenduduk05Tahun')">Penduduk 0 - 5 tahun</button>
                <button class="tablinks" onclick="openCity(event, 'KepemilikanAkta05Tahun')">Kepemilikan Akta Kelahiran (0-5 Tahun)</button>
                <button class="tablinks" onclick="openCity(event, 'TerbitAktaLahir')">Penerbitan Akta Kelahiran</button>
                <button class="tablinks" onclick="openCity(event, 'AktaKawin')">Penerbitan Akta Perkawinan</button>
                <button class="tablinks" onclick="openCity(event, 'AktaCerai')">Penerbitan Akta Perceraian</button>
                <button class="tablinks" onclick="openCity(event, 'PelaporanKematian')">Pelaporan Kematian</button>
            </div>

                <div id="AktaLahir" class="tabcontent">
                <h3>Kepemilikan Akta Kelahiran</h3>
                <p>
                <table id="example2" border="1px" >
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
                        foreach ($aktalahir as $row =>$value ) {
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
            </table>
                </div>
                <div id="AktaPenduduk018Tahun" class="tabcontent">
                <h3>Penduduk 0 - 18 Tahun</h3>
                <p>
                <table id="example3" border="1px" >
                    <thead>
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="9"><center>Jumlah Akta Penduduk 0 - 18 Tahun<center></td>
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
                            foreach ($aktapenduduk018tahun as $row =>$value ) {
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
                </table>
                </div>
                <div id="KepemilikanAkta018Tahun" class="tabcontent">
                <h3>Kepemilikan Akta Lahir 0-18 Tahun</h3>
                <table id="example5" border="1px" >
                    <thead> 
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="9"><center>Kepemilikan Akta Kelahiran Penduduk Umur 0-18 Tahun<center></td>
                    </tr>
                    <tr>
                        <td colspan="4"><center>DKB</center></td>
                        <td colspan="4"><center>Data Pelayanan</center></td>
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
                            foreach ($kepemilikanakta018tahun as $row =>$value ) {
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
                </table>
                </div>

                <div id="AktaPenduduk05Tahun" class="tabcontent">
                <h3>Akta Penduduk 0-5 Tahun</h3>
                <table id="example4" border="1px" >
                    <thead> 
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="9"><center>Jumlah Akta Penduduk 0 - 5 Tahun<center></td>
                    </tr>
                    <tr>
                        <td colspan="4"><center>DKB</center></td>
                        <td colspan="4"><center>Data Pelayanan</center></td>
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
                            foreach ($aktapenduduk05tahun as $row =>$value ) {
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
                </table>
                </div>
                
                <div id="KepemilikanAkta05Tahun" class="tabcontent">
                <h3>Kepemilikan Akta Kelahiran 0-5 Tahun</h3>
                <table id="example7" border="1px" >
                    <thead> 
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="9"><center>Kepemilikan Akta Kelahiran Penduduk Umur 0-5 Tahun<center></td>
                    </tr>
                    <tr>
                        <td colspan="4"><center>DKB</center></td>
                        <td colspan="4"><center>Data Pelayanan</center></td>
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
                            foreach ($kepemilikanakta05tahun as $row =>$value ) {
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
                </table>
                </div>
                <div id="TerbitAktaLahir" class="tabcontent">
                <h3>Penerbitan Akta Kelahiran</h3>
                <table id="example6" border="1px" >
                    <thead> 
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="9"><center> Akta Lahir<center></td>
                    </tr>
                    <tr>
                        <td colspan="3"><center>BULAN OKTOBER</center></td>
                        <td colspan="3"><center>S/D BULAN OKTOBER</center></td>
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
                            foreach ($terbitaktaLahir as $row =>$value ) {
                            $sum = $value->lahirl + $value->lahirp;
                            $sum2 = $value->slahirl + $value->slahirp;
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->lahirl ?></td>
                            <td><?php echo $value->lahirp ?></td>
                            <td><?php echo $sum ?></td>
                            <td><?php echo $value->slahirl ?></td>
                            <td><?php echo $value->slahirp ?></td>
                            <td><?php echo $sum2 ?></td>

                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                </div>
                <div id="AktaKawin" class="tabcontent">
                <h3>Penerbitan Akta Perkawinan</h3>
                <table id="example8" border="1px">
                    <thead> 
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="9"><center>Akta Perkawinan<center></td>
                    </tr>
                    <tr>
                        <td colspan="3"><center>BULAN OKTOBER</center></td>
                        <td colspan="3"><center>S/D BULAN OKTOBER</center></td>
                    </tr>
                    <tr>
                        <td colspan="">Perkawinan</td>
                        <td colspan="">Akta Kawin</td>
                        <td colspan="">Jumlah</td>
                        <td colspan="">Perkawinan</td>
                        <td colspan="">Akta Kawin</td>
                        <td colspan="">Jumlah</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach ($aktakawin as $row =>$value ) {
                            $sum = $value->kawin + $value->akawin;
                            $sum2 = $value->skawin + $value->sakawin;
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->kawin ?></td>
                            <td><?php echo $value->akawin ?></td>
                            <td><?php echo $sum ?></td>
                            <td><?php echo $value->skawin ?></td>
                            <td><?php echo $value->sakawin ?></td>
                            <td><?php echo $sum2 ?></td>

                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                </div>
                <div id="AktaCerai" class="tabcontent">
                <h3>Penerbitan Akta Perceraian</h3>
                <table id="example9" border="1px">
                    <thead> 
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="9"><center>Akta Perceraian <center></td>
                    </tr>
                    <tr>
                        <td colspan="3"><center>BULAN OKTOBER</center></td>
                        <td colspan="3"><center>S/D BULAN OKTOBER</center></td>
                    </tr>
                    <tr>
                        <td colspan="">Perceraian</td>
                        <td colspan="">Akta Perceraian</td>
                        <td colspan="">Jumlah</td>
                        <td colspan="">Perceraian/td>
                        <td colspan="">Akta Perceraian</td>
                        <td colspan="">Jumlah</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach ($aktacerai as $row =>$value ) {
                            $sum = $value->cerai + $value->acerai;
                            $sum2 = $value->scerai + $value->sacerai;
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->cerai ?></td>
                            <td><?php echo $value->acerai ?></td>
                            <td><?php echo $sum ?></td>
                            <td><?php echo $value->scerai ?></td>
                            <td><?php echo $value->sacerai ?></td>
                            <td><?php echo $sum2 ?></td>

                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                </div>
                <div id="PelaporanKematian" class="tabcontent">
                <h3>Penerbitan Pelaporan Kematian</h3>
                <table id="example10" border="1px">
                    <thead> 
                    <tr rowspan="2">
                        <td rowspan="3">Nama Kelurahan</td>
                        <td colspan="9"><center>Pelaporan Kematian<center></td>
                    </tr>
                    <tr>
                        <td colspan="3"><center>Peristiwa Kematian</center></td>
                        <td colspan="3"><center>Akta Kematian</center></td>
                        <td colspan="3"><center>Akta Kematian Terlambat</center></td>
                    </tr>
                    <tr>
                        <td colspan="">BULAN OKTOBER</td>
                        <td colspan="">S/D BULAN OKTOBER</td>
                        <td colspan="">Jumlah</td>
                        <td colspan="">BULAN OKTOBER</td>
                        <td colspan="">S/D BULAN OKTOBER</td>
                        <td colspan="">Jumlah</td>
                        <td colspan="">BULAN OKTOBER</td>
                        <td colspan="">S/D BULAN OKTOBER</td>
                        <td colspan="">Jumlah</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach ($pelaporankematian as $row =>$value ) {
                            $sum = $value->pkb + $value->pksb;
                            $sum2 = $value->akb + $value->aksb;
                            $sum3 = $value->akbt + $value->aksbt;
                            
                        ?>
                        <tr>
                            <td><?php echo $value->nama_kelurahan ?></td>
                            <td><?php echo $value->pkb ?></td>
                            <td><?php echo $value->pksb ?></td>
                            <td><?php echo $sum ?></td>
                            <td><?php echo $value->akb ?></td>
                            <td><?php echo $value->aksb ?></td>
                            <td><?php echo $sum2 ?></td>
                            <td><?php echo $value->akbt ?></td>
                            <td><?php echo $value->aksbt ?></td>
                            <td><?php echo $sum3 ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
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
