<form action="" method="post">
 <div class="container">
 <div align="center">
 	<h5><?php echo $this->session->flashdata('info'); ?></h5>
 </div>
   <div class="row my-5">
      <div class="col-md-10">
        <input type="text" name="kode_transaksi" class="form-control" placeholder="Silahkan masukkan kode transaksi anda">
      </div>
      <div class="col-md-2">
        <button type="submit" name="proses_pengantaran" class="btn btn-warning">Ajukan Pengantaran Laundry</button>
      </div>
    </div>
  </div>
</form>