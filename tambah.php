<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Tambah Ruangan</h1>

 <form method="post" action="<?= base_url('index.php/ruangan/simpan') ?>">
    
  <div class="mb-3">
    <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
    <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan">
  </div>

  <div class="mb-3">
    <label for="lantai" class="form-label">Lantai</label>
    <input type="text" class="form-control" id="lantai" name="lantai">
  </div>

  <div class="mb-3">
    <label for="keterangan" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="keterangan" name="keterangan">
  </div>

  <button type="submit" class="btn btn-primary">Tambah Ruangan</button>
   <a href="<?= base_url('index.php/ruangan') ?>" 
   class="btn btn-secondary">
   Kembali

</form>

    

    </div>
    
</body>
</html>