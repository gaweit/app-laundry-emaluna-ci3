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
      <form method="post" action="<?= base_url('pengajuan/update'); ?>">
        <div class="form-group">
          <input type="text" name="id" value="<?= $pengajuan['id'] ?>" class="form-control" readonly>
        </div>
        <div class="form-group"> 
          <select name="status" class="form-control">
          
            <option value="Dikirim">Telah Dikirim</option>
            <option value="Tolak Pengantaran">Tolak Pengantaran</option>
        </select>
        </div> 
        
        <div class="form-group">
          <a href="<?= base_url('pengajuan') ?>" class="btn btn-warning">Batal</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>

      </form>
    </div>
  </div>
</div>
  
</body>
</html>