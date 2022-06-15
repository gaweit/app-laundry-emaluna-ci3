<form action="" method="post">
 <div class="container">
 <div align="center">
 	<h5><?php echo $this->session->flashdata('info'); ?></h5>
 </div>
   <div class="row my-12">
      <div class="col-md-6">
        <label>Silahkan masukkan kode transaksi anda</label>
        <input type="text" name="kode_transaksi" class="form-control" placeholder="Silahkan masukkan kode transaksi anda"> 
      </div>
      <div class="col-md-6">
        <label>Biaya Pengantaran</label>
        <input type="text" name="biaya" class="form-control" placeholder="Rp.5.000" value="Rp.5.000" readonly> 
      </div> 
      <div class="col-md-6">
        <button type="submit" name="proses_pengantaran" class="btn btn-warning">Ajukan Pengantaran Laundry</button>
      </div>
    </div>
  </div>
</form>
      <hr>