<?php
include 'connect.php';

$sql = "SELECT * FROM nilai ";

$res = mysqli_query($connect, $sql);

$nilai = array();

while ($data = mysqli_fetch_assoc($res)) {
  $nilai[] = $data;
}

include 'aset/header.php';
?>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card gradient1">
        <div class="card-header">
          <h2 class="card-title"><i class="fas fa-book"></i> Data Nilai</h2>
          <h5 align="right"><a class="fas fa-user-plus mr-2" href="http://localhost/challenge/tambah/tambah.php" >Tambah</a></h5>

        </div>
        <div class="card-body">
          <table class="table table-warning">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th scope="col">WEB</th>
                <th scope="col">PBO</th>
                <th scope="col">Basdat</th>
                <th scope="col">Desain</th>
                <th scope="col">Prodgas</th>
                <th scope="col">Rata-Rata</th>
                <th scope="col">Predikat Nilai</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $id = 1;
              foreach ($nilai as $c ) { ?>

                <tr>
                  <th scope="row"><?= $id ?></th>
                  <td><?= $c['NIS'] ?></th>
                    <td><?= $c['nama']?></th>
                      <td><?= $c['jurusan'] ?></th>
                        <td><?= $c['kelas'] ?></th>
                          <td><?= $c['alamat'] ?></th>
                            <td><?= $c['nilai_web'] ?></th>
                              <td><?= $c['nilai_PBO'] ?></th>
                                <td><?= $c['nilai_basdat'] ?></th>
                                  <td><?= $c['nilai_design'] ?></th>
                                    <td><?= $c['nilai_progdas'] ?></th>
                                      <td><?= $c['rata_rata'] ?></th>
                                        <td><?= $c['predikat'] ?></th>
                                          <td><?= $c['keterangan'] ?></th>
                                          </tr>
                                          <?php
                                          $id++;
                                        }
                                        ?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br>

                          </div>
                          <?php
                          include 'aset/footer.php';
                          ?>
