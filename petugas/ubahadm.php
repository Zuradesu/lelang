<?php include "sidebaradmin.php";?>
<?php include "../koneksi.php";?>

<?php 
$qry_get_petugas=mysqli_query($conn,"SELECT * FROM petugas WHERE id_petugas = '".$_GET['id_petugas']."'");
$data_petugas=mysqli_fetch_array($qry_get_petugas);
?>



<br>
    <h3> Ubah Data</h3>
    <form action="proses_ubah_admin.php" method="post">
    <input type="hidden" name="id_petugas" value= "<?=$data_petugas['id_petugas']?>">
    
    Nama :
    <input type="text" name="nama_petugas" value="<?=$data_petugas['nama_petugas']?>" class="form-control">
    <br>
    Username :
    <input type="text" name="username" value="<?=$data_petugas['username']?>" class="form-control">
    <br>
    Password :
    <input type="password" name="password" value="<?=$data_petugas['password']?>" class="form-control">
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