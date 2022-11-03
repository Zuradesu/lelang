<?php include "../koneksi.php";?>
<?php include "sidebaradmin.php";?>

<br>
    <h3>Tambah Barang</h3>
    <form action="proses_tambah_barang.php" method="post">
    
    Nama :
    <input type="text" name="nama_barang" value="" class="form-control">
    <br>
    
    Merk :
    <input type="text" name="merk" value="" class="form-control">
    <br>
    
    Tanggal Ditambahkan :
    <input type="date" name="tanggal_daftar" value="" class="form-control">
    <br>
    
    Harga :
    <input type="text" name="harga_awal" value="" class="form-control">
    <br>
    
    Deskripsi Singkat :
    <input type="text" name="deskripsi_singkat" value="" class="form-control">
    <br>
    
    Deskripsi  :
    <input type="text" name="deskripsi" value="" class="form-control">
    <br>
    
    Foto :
    <input type="text" name="foto" value="" class="form-control">
    <br>
    <br>
    <input type="submit" name="proses" value="Simpan" class="btn btn-primary">
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>