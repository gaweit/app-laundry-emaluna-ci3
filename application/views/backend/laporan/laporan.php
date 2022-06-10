<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>$title</title>
</head>
<body>

<div class="container-fluid">
 <div class="card-deck">

  <div class="card">
  <div class="card-header">
 <h3 class="title"><?= $form1; ?></h3>
</div>
    <div class="card-body">
      <form action="<?= base_url('laporan/cetak_laporan_operasional'); ?>" method="post" class="form-user">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Tanggal Mulai</label>
          <div class="col-sm-6">
            <input type="date" name="tgl_mulai" class="form-control" required>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Tanggal Akhir</label>
          <div class="col-sm-6">
            <input type="date" name="tgl_akhir" class="form-control" required>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label"></label>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </form>
    </div>
  </div>

  <div class="card">
<div class="card-header">
 <h3 class="title"><?= $title; ?></h3>
</div>
 <div class="card-body">
      <form action="<?= base_url('laporan/cetak_laporan'); ?>" method="post" class="form-user">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Tanggal Mulai</label>
          <div class="col-sm-6">
            <input type="date" name="tgl_mulai" class="form-control" required>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Tanggal Akhir</label>
          <div class="col-sm-6">
            <input type="date" name="tgl_akhir" class="form-control" required>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label"></label>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </form>
    </div>
  </div>

</div>
</div>
</body>
</html>