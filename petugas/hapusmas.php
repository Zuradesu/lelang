<?php 
    if($_GET['id_masyarakat']){
        include "../koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from masyarakat where id_masyarakat='".$_GET['id_masyarakat']."'");
            if($qry_hapus){
                 echo "<script>alert('Sukses Hapus data');location.href='datamasyarakat.php';</script>";
                    } else {
                        echo "<script>alert('Gagal Hapus data');location.href='datamasyarakat.php';</script>";
                    }
                
            
    }
?>