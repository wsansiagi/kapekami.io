<!DOCTYPE html>

<html lang="en">
<head>
  <?php $this->load->view('layout/head')?>
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">
  <!--Main Header-->
 <?php $this->load->view('layout/header')?>
  <!--Sidebar-->
 <?php $this->load->view('layout/sidebar')?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover" id="mydata" >
                <thead>
                <tr>
                  <th rowspan="2">No</th>
                  <th rowspan="2">Nama Kecamatan</th>
                  <th colspan="3">dkb</th>
                  <th colspan="3">data pelayanan</th>
                </tr>
                <tr>
                  <th>Laki-laki</th>
                  <th>Perempuan</th>
                  <th>Jumlah</th>
                  <th>Laki-laki</th>
                  <th>Perempuan</th>
                  <th>Jumlah</th>
                </tr>
                </thead>
                <tbody >
              
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php $this->load->view('layout/footer')?>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/dist/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
         
        $('#mydata').dataTable();
          
        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/barang/data_barang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].barang_kode+'</td>'+
                                '<td>'+data[i].barang_nama+'</td>'+
                                '<td>'+data[i].barang_harga+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
    });
 
</script>
</body>
</html>
