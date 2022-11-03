<?php include "../koneksi.php";?>
<?php include "sidebaradmin.php";?>

<div class="container-fluid">
    
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Barang Lelang</h1>
            </div>
            <div class="row"> 
        
        <?php 
        $querybarang = mysqli_query($conn, "SELECT * FROM barang") ;
        while ($databarang=mysqli_fetch_array($querybarang)){
        ?>     

        
   
    

        <div class="col-md-3">
            <div class="card" >
                <img src="../image/<?=$databarang['foto']?>" style="width:291x; height:300px;" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title"><?=$databarang['nama_barang']?></h5>
                    <p class="card-text"><?=$databarang['deskripsi_singkat']?></p>
                    <a href="deskripsi_barang.php?id_barang=<?=$databarang['id_barang']?>" class="btn btn-primary">Selengkapnya</a>
                    </div>    
            </div>
        </div> 
        
    <?php
 }
  ?>
    
    
    
    
    
    
    
    
    </div>
    
    
    
    
        
        
        
    
    
    </div>


   




