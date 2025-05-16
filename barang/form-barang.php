<?php
session_start();
if (!isset($_SESSION['ssLoginPOS'])) {
  header("location: ../auth/login.php");
  exit();
}

require '../config/config.php';
require '../config/functions.php';
//require '../module/mode-barang.php';

$title = 'Tambah Barang | Market PPLG';
require '../template/header.php';
require '../template/navbar.php';
require '../template/sidebar.php';

if (isset($_POST['simpan'])) {
  if (insert($_POST) > 0) {
    echo "<script>alert('User baru berhasil diregistrasi')</script>";
  }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Barang</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= $main_url ?>dashboard.php">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= $main_url ?>barang/data-barang.php">Barang</a></li>
            <li class="breadcrumb-item active">Add Barang</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus fa-sm"></i> Add Barang</h3>
            <button type="submit" name="simpan" class="btn btn-primary btn-sm float-right"><i class="fas fa-save"></i>
              Simpan</button>
            <button type="reset" class="btn btn-danger btn-sm float-right mr-1"><i class="fas fa-times"></i>
              Reset</button>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8 mb-3">
                <div class="form-group">
                  <label for="kode">Kode</label>
                  <input type="text" name="kode" id="kode" class="form-control" placeholder="Masukan Kode Barang"
                    autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="barcode">Barcode</label>
                  <input type="text" name="barcode" id="barcode" class="form-control"
                    placeholder="Masukan Barcode" autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="nama">Nama Barang</label>
                  <input type="text" name="nama id="nama" class="form-control"
                    placeholder="Masukan Nama Barang" autofocus autocomplete="off" required>
                </div>
                
                <div class="form-group">
                  <label for="level">Satuan</label>
                  <select name="level" id="level" class="form-control" required>
                    <option value="">--Satuan Barang--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama">Harga Beli</label>
                  <input type="text" name="nama id="nama" class="form-control"
                    placeholder="Rp 0" autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="nama">Harga Jual</label>
                  <input type="text" name="nama id="nama" class="form-control"
                    placeholder="Rp 0" autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="nama">Stok Minimal</label>
                  <input type="text" name="nama id="nama" class="form-control"
                    placeholder="0" autofocus autocomplete="off" required>
                </div>
                
              </div>
              <div class="col-lg-4 text-center">
                <img src="<?= $main_url ?>assets/image/barang.png" class="profile-user-img img-square mb-3" alt="User">
                <input type="file" name="image" class="form-control">
                <span class="text-sm">Type file gambar JPG | PNG | GIF</span><br>
                <span class="text-sm">Width = Height</span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
<?php require '../template/footer.php'; ?>