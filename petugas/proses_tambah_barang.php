<?php
if ($_POST) {
    $nama_barang=$_POST['nama_barang'];
    $tanggal_daftar=$_POST['tanggal_daftar'];
    $harga_awal=$_POST['harga_awal'];
    $deskripsi=$_POST['deskripsi'];
    $foto=$_POST['foto'];
    $deskripsi_singkat=$_POST['deskripsi_singkat'];
    $merk=$_POST['merk'];
    
    
    if (empty($nama_barang)) {
        echo "<script>
        alert('nama tidak boleh kosong');
        location.href='tambah_barang.php'; 
        </script>";
        
    }  elseif (empty($tanggal_daftar)) {
        echo "<script>
        alert('Tanggal tidak boleh kosong');
        location.href='tambah_barang.php'; 
        </script>";
    
    } 
    
    elseif (empty($harga_awal)) {
        echo "<script>
        alert('Harga tidak boleh kosong');
        location.href='tambah_barang.php'; 
        </script>";
    
    } elseif (empty($deskripsi)) {
        echo "<script>
        alert('deskripsi tidak boleh kosong');
        location.href='tambah_barang.php'; 
        </script>";
    
    } elseif (empty($foto)) {
        echo "<script>
        alert('Foto tidak boleh kosong');
        location.href='tambah_barang.php'; 
        </script>";
    
    } elseif (empty($deskripsi_singkat)) {
        echo "<script>
        alert('deskripsi tidak boleh kosong');
        location.href='tambah_barang.php'; 
        </script>";
    
    } elseif (empty($merk)) {
        echo "<script>
        alert('Merk tidak boleh kosong');
        location.href='tambah_barang.php'; 
        </script>";
        
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO barang 
        (
            nama_barang,
            tanggal_daftar, 
            harga_awal, 
            deskripsi,
            foto,
            deskripsi_singkat,
            merk
        
        ) value (
            '".$nama_barang."',
            '".$tanggal_daftar."',
            '".$harga_awal."',
            '".$deskripsi."',
            '".$foto."',
            '".$deskripsi_singkat."',
            '".$merk."'
            )"
        );
    

        if($insert){
            echo "<script>
            alert('Sukses menambahkan data');
            location.href='tambah_barang.php'; 
            </script>";
        } else {
            echo "<script>
        alert('Gagal menambahkan data');
        location.href='tambah_barang.php'; 
        </script>";
         }
        

        }
}
?>