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
<h1>Data Ruangan</h1>

        <a href="<?= base_url('index.php/ruangan/tambah') ?>"
            class="btn btn-primary">
            + Tambah Ruangan
        </a>

<form method="get" class="d-flex gap-2 mb-3">

    <input type="text"
           name="keyword"
           class="form-control"
           placeholder="Cari Ruangan...">

    <button type="submit" class="btn btn-primary">
        Search
    </button>

    <a href="<?= base_url('index.php/ruangan') ?>" 
       class="btn btn-secondary">
       Reset
    </a>

</form>

<table class="table">
    
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Ruangan</th>
      <th scope="col">Lantai</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    <?php foreach ($ruangan as $r): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $r->nama_ruangan ?></td>
      <td><?= $r->lantai ?></td>
      <td><?= $r->keterangan ?></td>
      <td>
       
        <a href="<?= base_url('index.php/ruangan/edit/'.$r->id) ?>"
            class="btn btn-warning btn-sm">
            Edit
        </a>

        <a href="<?= base_url('index.php/ruangan/hapus/'.$r->id) ?>" 
             class="btn btn-danger btn-sm"
             onclick="return confirm('Yakin mau hapus data ini?')">            
             Hapus
        </a>
      </td>
    </tr>
    <?php endforeach; ?>

    </tr>
  </tbody>
</table>
    </div>
</body>
</html>