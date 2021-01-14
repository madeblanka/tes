<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    </head>
    <body>
    <a href="<?php echo site_url('tes/tambah/') ?>"
       href="#!" class="btn btn-small text-success"><i class="fas fa-folder"></i> Tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">No Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($tes as $tes): ?> 
    <tr>
      <th scope="row"><?php echo $tes->id?></th>
      <th scope="row"><?php echo $tes->nama?></th>
      <th ><?php echo $tes->notelp?></th>
      <th ><?php echo $tes->alamat?></th>
    <th>
      <a href="<?php echo site_url('tes/edit/'.$tes->id) ?>"
       href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>

      <a href="<?php echo site_url('tes/delete/'.$tes->id) ?>"
       onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
      <?php endforeach?>
  </th>
    </tr>
  </tbody>
</table>
</body></html>