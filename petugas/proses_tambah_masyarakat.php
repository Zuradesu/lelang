<?php
if ($_POST) {
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nomor_ponsel=$_POST['nomor_ponsel'];
    
    
    if (empty($nama)) {
        echo "<script>
        alert('nama tidak boleh kosong');
        location.href='tambahmasyarakat.php'; 
        </script>";
        
    } elseif (empty($username)) {
        echo "<script>
        alert('username tidak boleh kosong');
        location.href='tambahmasyarakat.php'; 
        </script>";
    
    } 
    
    elseif (empty($password)) {
        echo "<script>
        alert('password tidak boleh kosong');
        location.href='tambahmasyarakat.php'; 
        </script>";
    
    } elseif (empty($nomor_ponsel)) {
        echo "<script>
        alert('nomor tidak boleh kosong');
        location.href='tambahmasyarakat.php'; 
        </script>";
    
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into masyarakat (nama, username, password, nomor_ponsel) value ('".$nama."','".$username."','".md5($password)."','".$nomor_ponsel."')");
    

        if($insert){
            echo "<script>
            alert('Sukses menambahkan data');
            location.href='tambahmasyarakat.php'; 
            </script>";
        } else {
            echo "<script>
        alert('Gagal menambahkan data');
        location.href='tambahmasyarakat.php'; 
        </script>";
         }
        

        }
}
?>