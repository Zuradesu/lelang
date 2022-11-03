<?php include "../koneksi.php";?>
<?php include "sidebaradmin.php";?>

<br>
    <h3>Tambah User</h3>
    <form action="proses_tambah_masyarakat.php" method="post">
    
    Nama :
    <input type="text" name="nama" value="" class="form-control">
    <br>
    Username :
    <input type="text" name="username" value="" class="form-control">
    <br>
    Password :
    <input type="password" name="password" value="" class="form-control">
    <br>
    nomor ponsel : 
    <input type="text" name="nomor_ponsel" value="" class="form-control">
    <br>
    <br>
    <input type="submit" name="proses" value="Simpan" class="btn btn-primary">

    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>