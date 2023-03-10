<?php
session_start();
include_once '../template/header.php';
include_once '../template/sidebar.php';
include_once '../template/topbar.php';
?>

<?php 

include_once '../../controllers/c_pengguna.php';

$pengguna = new c_pengguna();

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> Daftar Pengguna </small></h3>
      </div>

     
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2> Daftar Pengguna</h2>
            <ul class="nav navbar-right panel_toolbox">
             
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table class="table">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Nama Outlet</th>
                  <th>Role</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $nomor = 1;
                foreach ($pengguna->tampil() as $p) { 
                ?>
                <tr>
                  <th scope="row"><?= $nomor++ ?></th>
                  <td><?= $p->user_nama ?></td>
                  <td><?= $p->username ?></td>
                  <td><?= $p->outlet_nama ?></td>
                  <td><?= $p->role ?></td>
                  <td>
                            <center>
                            <a href="v_edit_pengguna.php?id=<?= $p->id ?>"><button type="button" class="btn btn-round btn-primary">Edit</button></a>
                            
                            <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="../../routers/r_pengguna.php?id=<?= $p->id ?>&aksi=hapus"><button type="button" name="hapus" class="btn btn-round btn-danger">Hapus</button></a>
                            </center>
                          </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- /page content -->

<?php include_once '../template/footer.php'; ?>