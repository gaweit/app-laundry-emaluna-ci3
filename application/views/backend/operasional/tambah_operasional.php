<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
  <div class="card shadow mb-4">
    <div class="card-body">
      <form method="post" action="<?= base_url('operasional/simpan'); ?>">
        <div class="form-group">
          <input type="text" name="jenis_pengeluaran" value="" placeholder="Tambah Jenis Pengeluaran" class="form-control">
        </div>
        <div class="form-group">
          <input type="number" name="nominal_pengeluaran" class="form-control" placeholder="Input nama Nominal" required>
        </div>
        <div class="form-group">
          <textarea name="keterangan" id="" cols="30" rows="5" class="form-control" placeholder="Keterangan" required></textarea>
        </div>

        <div class="form-group">
          <a href="<?= base_url('operasional') ?>" class="btn btn-warning">Batal</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

      </form>
    </div>
  </div>
</div>
  
</body>
</html>