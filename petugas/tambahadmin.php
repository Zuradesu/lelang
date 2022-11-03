<?php include "../koneksi.php";?>
<?php include "sidebaradmin.php";?>

<br>
    <h3>Tambah Admin</h3>
    <form action="proses_tambah_admin.php" method="post">
    
    Nama :
    <input type="text" name="nama_petugas" value="" class="form-control">
    <br>
    Username :
    <input type="text" name="username" value="" class="form-control">
    <br>
    Password :
    <input type="password" name="password" value="" class="form-control">
    <br>
    level : 
    <select name="level" class="form-control">
        <option></option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
    </select>
</select>
    <br>
    <br>
    <input type="submit" name="proses" value="Simpan" class="btn btn-primary">

    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>