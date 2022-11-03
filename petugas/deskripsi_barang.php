<?php include "../koneksi.php";?>
<?php include "sidebaradmin.php";?>


<!-- Card Produk -->
<?php 
$querybarang = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '".$_GET['id_barang']."' ");
while ($databarang=mysqli_fetch_array($querybarang)){
?>

<div class="card mb-3" style="max-width: auto;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../image/<?= $databarang['foto'] ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> <?= $databarang['nama_barang'] ?> </h5>
        <div class="col-md-6">
            <table class="table table-borderless">
              <tr>
                <th>Merk </th>
                <td><?= $databarang['merk'] ?></td>
              </tr>
              <tr>
                <th>  Tanggal Ditambahkan </th>
                <td> <?= $databarang['tanggal_daftar'] ?> </td>
              </tr>
              <tr>
                <th> Harga </th>
                <td><?php $number=$databarang['harga_awal']; echo number_format($number, ); ?> </td>
              </tr>
              <tr>
              <th colspan="2"><a href="ikutlelaang.php"><button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
  Ikut Lelang
</button></a></th>
              </tr>
            </table>
            
        </div>
      </div>
    </div>
  </div>
</div>

<!--  Akhir Card Produk-->

<!--  Deskripsi Produk-->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h3>Deskripsi Produk</h3> <br>
                                    <p> <?=  $databarang['deskripsi'] ?> </p>
 
                                    
                                </div>
                            </div>
<!--  Akhir deskripsi Produk-->
<?php } ?>