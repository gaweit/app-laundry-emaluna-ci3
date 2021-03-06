<!-- Begin Page Content -->
<div class="container-fluid">

  <?php
  if(!empty($this->session->flashdata('info'))){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $this->session->flashdata('info'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php }
  ?>

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>No Transaksi</th>
              <th>Tanggal Pengajuan</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($pengajuan as $row): ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row->no_transaksi; ?></td>
              <td><?= $row->tanggal_pengajuan; ?></td>
              <td><?= $row->status; ?></td>
              
              <td>
                
                <a href="<?= base_url('pengajuan/edit/') . $row->id?>" class="btn btn-success btn-sm">Konfirmasi</a>  
                <a href="<?= base_url('pengajuan/delete/') . $row->id?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Tolak Pengantaran</a>
              </td> 
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
