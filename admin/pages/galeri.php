<div class="card">
  <div class="card-header">
    <h3 class="card-title">Gallery</h3>
    <a href="index.php?p=add_galery" class="btn btn-primary btn-flat">
      <i class="fa fa-plus"></i> Tambah
    </a>
  </div>
              
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Nama Gambar</th>
          <th>Gambar</th>
          <th style="width: 230px">Aksi</th>
        </tr>
      </thead>
    <tbody>
      <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($conn,"select * from tb_galery");
        while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama_gambar']; ?></td>
        <td>
          <img src="../gambar/<?php echo $d['gambar'] ?>" width="300px"> 
        </td>
        <td>
         <a href="index.php?p=hapus_gallery&id=<?php echo $d['id_galery']; ?>" class="btn btn-danger btn-flat">
            <i class="fa fa-trash"></i> Hapus
          </a>
          <a href="index.php?p=edit_gallery&id=<?php echo $d['id_galery']; ?>" class="btn btn-primary btn-flat">
            <i class="fa fa-pen"></i> Edit
          </a>
        </td>
      </tr>
        <?php 
          }
        ?>
      </tbody>
    </table>
  </div>
</div>