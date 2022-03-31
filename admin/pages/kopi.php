<div class="card">
  <div class="card-header">
    <h3 class="card-title">Kopi</h3>
      <a href="index.php?p=add_kopi" class="btn btn-primary btn-flat">
        <i class="fa fa-plus"></i> Tambah
      </a>
  </div>
            
  <div class="card-body">
      <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Nama Kopi</th>
              <th>Keterangan</th>
              <th>Gambar</th>
              <th style="width: 230px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include 'koneksi.php';
              $no = 1;
              $data = mysqli_query($conn,"select * from tb_kopi");
              while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['nama_kopi']; ?></td>
              <td><?php echo $d['keterangan']; ?></td>
              <td>
                <img src="../gambar/<?php echo $d['gambar'] ?>" width="70px"> 
              </td>
              <td>
                <a href="index.php?p=hapus_kopi&id=<?php echo $d['id_kopi']; ?>" class="btn btn-danger btn-flat">
                  <i class="fa fa-trash"></i> Hapus
                </a>
                <a href="index.php?p=edit_kopi&id=<?php echo $d['id_kopi']; ?>" class="btn btn-primary btn-flat">
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