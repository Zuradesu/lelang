<?php include "sidebaradmin.php";?>
<?php include "../koneksi.php";?>
               
        <!-- Begin Page Content -->
         <!-- Begin Page Content -->
         <div class="container-fluid">
        
        <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat | Untuk menambah data anda bisa klik <a target="_blank"
                  href="tambahmasyarakat.php">"tambah data"</a>. </h6>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <th>no</th>
                                  <th>Name</th>
                                  <th>Username</th>
                                  <th>Password</th>
                                  <th>Nomor Telepon</th>   
                                  <th colspan="2">Aksi</th>                             
                              </tr>
                          </thead>
                          
                          <tbody>
                          <?php 
    include "../koneksi.php";
    $qry_masyarakat=mysqli_query($conn,"select * from masyarakat");

    $no=0;
    while($data_masyarakat=mysqli_fetch_array($qry_masyarakat)){

    $no++;
    ?>

<tr>
                    <td><?= $no ?></td>
                    <td><?= $data_masyarakat['nama'] ?></td>
                    <td><?= $data_masyarakat['username'] ?></td>
                    <td><?= $data_masyarakat['password'] ?></td>
                    <td><?= $data_masyarakat['nomor_ponsel'] ?></td>
                    <td><a href="ubah_siswa.php?id_siswa=<?= $data_siswa['id_siswa'] ?>" onclick="return confirm('Apakah anda yakin merubah data ini?')" >Ubah</a></td>
                    <td><a href="hapusmas.php?id_masyarakat=<?= $data_masyarakat['id_masyarakat'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" >Hapus</a></td>
                </tr>
            <?php 

            }

            ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

      </div>
      <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

 
</body>

</html>