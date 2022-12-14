<?php
$this->load->View('include/headsoal.php');

if ($set=="soal") {
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1 style="text-align:center">
        <b>Episode 1</b>
      </h1>
      <h2></h2>
    </section>

    <?php
    $this->load->View('soal/soal1.php');
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <form action="<?=base_url();?>admin/lastabsensi" method="post">
                <div class="col-md-2">
                </div>

                  <!-- /.input group -->
                <!-- </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-danger">Ambil Data Absensi</button>
                </div> -->
              </form>
            </div>
            <div class="box-header">
              <h1 class="box-title"><b>Jawaban Player</b> </h1>
            <div style="text-align:right">
            <a href="<?=base_url()?>admin/hapus_soal" onclick="return confirm('Anda Yakin mereset data soal?')"><button type="button" class="btn btn-danger btn-md"><i class="glyphicon glyphicon-trash"></i>  Mulai Ulang</button></a>
            </div>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="t1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align:center">No</th>
                  <th style="text-align:center">Player</th>
                  <th style="text-align:center">Jawaban</th>
                  <th style="text-align:center">Waktu</th>
                </tr>
                </thead>
                <tbody>
                <?php if(empty($absensimasuk)){?>
                <tr>
                  <td style="text-align:center">Data tidak ditemukan</td>
                  <td style="text-align:center">Data tidak ditemukan</td>
                  <td style="text-align:center">Data tidak ditemukan</td>
                  <td style="text-align:center">Data tidak ditemukan</td>
                </tr>
                <?php } else{
                $no = 0;
                foreach($absensimasuk as $row){ $no++;?>
                <tr>
                  <td style="text-align:center"><b class="text-success"><?php echo $no;?></b></td>
                  <td style="text-align:center"><?php echo $row->nama_devices;?></td>
                  <td style="text-align:center"><?php echo $row->nama;?></td>
                  <td style="text-align:center"><?php echo date("H:i:s",$row->created_at);?></td>
                </tr>
                <?php }}?>
                
                </tbody>
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
    <?php
    $this->load->View('soal/jawaban1.php');
    ?>
    <!-- /.content -->

    <!-- Main content -->
    <!-- /.content -->
  </div>

  
<?php
} else if ($set=="last-absensi") {
  if (!isset($tanggal)) {
    $tanggal = "";
  }

  if (!isset($waktuabsensi)) {
    $waktuabsensi = "";
  }
?>

<?php
} 
$this->load->view('include/footer.php');
?>

</div>  <!-- penutup header -->

<!-- jQuery 3 -->
<script src="<?=base_url();?>components/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url();?>components/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>components/dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="<?=base_url();?>components/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>components/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- date-range-picker -->
<script src="<?=base_url();?>components/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url();?>components/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#t1").DataTable();
    $('#t2').DataTable();
  });

  $(function () {
    //Date range picker
    $('#reservation').daterangepicker()

  })
</script>

</body>
</html>