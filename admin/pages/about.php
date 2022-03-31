<div class="card">
  <div class="card-header">
    <h3 class="card-title">About</h3>
  </div>
            
  <div class="card-body">
      <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 180px">Judul</th>
              <th>About</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include 'koneksi.php';
              $data = mysqli_query($conn,"select * from about");
              while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
              <td><?php echo $d['tittle']; ?></td>
              <td><?php echo $d['about']; ?></td>
              <td>
                <img src="../gambar/<?php echo $d['gambar'] ?>" width="100px"> 
              </td>
              <td>
                <a href="index.php?p=edit_about&id=<?php echo $d['id_about']; ?>" class="btn btn-primary btn-flat">
      <i class="fa fa-pen"></i> Edit
    </a></td>
            </tr>
            <?php 
              }
            ?>
          </tbody>
      </table>
  </div>
</div>