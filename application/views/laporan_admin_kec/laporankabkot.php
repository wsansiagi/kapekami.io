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
                <button class="tablinks active" onclick="openCity(event, 'Jumlah Penduduk')">Jumlah Penduduk</button>
                <button class="tablinks" onclick="openCity(event, 'WajibKTP')">Wajib KTP</button>
                <button class="tablinks" onclick="openCity(event, 'WajibKTPBelumRekam')">Wajib KTP Belum Rekam</button>
                <button class="tablinks" onclick="openCity(event, 'PerekamanPencetakan')">KTP Perekaman Pencetakan</button>
                <button class="tablinks" onclick="openCity(event, 'WajibKTPBelumRekam')">KTP Status Perekaman</button>
                <button class="tablinks" onclick="openCity(event, 'PencetakanKTPLD')">Pencetakan KTP-el Luar Domisili</button>
                <button class="tablinks" onclick="openCity(event, 'SuratKeteranganPKTP')">Surat Keterangan Pengganti KTP-el</button>
                <button class="tablinks" onclick="openCity(event, 'KepemilikanKIA')">Kepemilikan KIA</button>
                <button class="tablinks" onclick="openCity(event, 'KepemilikanAktaKelahiran')">Kepemilikan AKTA Kelahiran</button>
                <button class="tablinks" onclick="openCity(event, 'AktaPenduduk018')">AKTA Penduduk 0-18 Tahun</button>
                <button class="tablinks" onclick="openCity(event, 'MilikAktaPenduduk018')">Kepemilikan AKTA Kelahiran (0-18)</button>
                <button class="tablinks" onclick="openCity(event, 'AktaPenduduk05')">AKTA Penduduk 0-5 Tahun</button>
                <button class="tablinks" onclick="openCity(event, 'MilikAktaPenduduk05')">Kepemilikan AKTA Kelahiran (0-5)</button>
                <button class="tablinks" onclick="openCity(event, 'AktaLahir')">Penerbitan AKTA Kelahiran</button>
                <button class="tablinks" onclick="openCity(event, 'AktaKawin')">Penerbitan AKTA Perkawinan</button>
                <button class="tablinks" onclick="openCity(event, 'AktaCerai')">Penerbitan AKTA Perceraian</button>
                <button class="tablinks" onclick="openCity(event, 'LaporMati')">Pelaporan Kematian</button>
                <button class="tablinks" onclick="openCity(event, 'CatatSipil')">Arsip AKTA Pencatatan Sipil</button>
                <button class="tablinks" onclick="openCity(event, 'UbahAnak')">Perubahan Status Anak</button>
                <button class="tablinks" onclick="openCity(event, 'CatatWarga')">Pencatatan Kewarganegaraan</button>

                </div>

                <div id="London" class="tabcontent">
                <h3>London</h3>
                <p>London is the capital city of England.</p>
                </div>

                <div id="Paris" class="tabcontent">
                <h3>Paris</h3>
                <p>Paris is the capital of France.</p> 
                </div>

                <div id="Tokyo" class="tabcontent">
                <h3>Tokyo</h3>
                <p>Tokyo is the capital of Japan.</p>
                </div>
          </div>
        </div>
      </div>

      <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Pengguna</h3>
            </div>
            <form class="form-horizontal" action="<?php echo site_url().'index.php/admin/C_admin/simpan_user'; ?>" method="POST">
                <div class="modal-body">
                    <!-- <div class="form-group">
                        <label class="control-label col-xs-3" >ID pengguna</label>
                        <div class="col-xs-9">
                            <input name="id_user" class="form-control" type="text" placeholder="Id pengguna" style="width:335px;" required>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Kabupaten/Kota</label>
                        <div class="col-xs-9">
                            <select name="id_kabkot" id="id_kabkot" class="form-control" type="text" placeholder="Id Kabupaten/Kota" style="width:335px;" required>
                                <option value="">Pilih Kab/Kota</option>
                                <?php
                                    foreach ($kabkot as $rows) {
                                ?>
                                    <option value="<?php echo $rows->id_kabkot ?>"><?php echo $rows->nama_kabkot ?></option>
                                <?php
                                    }
                                ?>
                                </select>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username" class="form-control" type="text" placeholder="username" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" class="form-control" type="text" placeholder="username" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Level</label>
                        <div class="col-xs-9">
                            <select name="level" class="form-control" type="text" placeholder="username" style="width:335px;" required>
                                <option value="">Pilih Hak Akses</option>
                                <option value="adminkabupaten">Admin Kabupaten/Kota</option>
                                <option value="adminkepalakabupaten">Admin Kepala Kabupaten/Kota</option>
                            </select>
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
