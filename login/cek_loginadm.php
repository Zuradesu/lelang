<?php
  // mengaktifkan session pada php
  session_start();

  // menghubungkan php dengan koneksi database
  include 'koneksi.php';

  // menangkap data yang  dikirim dari form login
  $username = $_POST['username'];
  $password = $_POST['password'];

  // menyeleksi data user dgn username & password yg sesuai 
  $login=mysqli_query($conn, "select * from petugas where username = '".$username."' and password = '".$password."'");
  // 
  $cek = mysqli_num_rows($login);

  if($cek>0) {
    $data=mysqli_fetch_array($login);

    // cek jika user login sebagai admin
    if($data['level']=="admin") {

      // buat session login & username
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "admin";
    
      // alihkan ke halaman admin
      header("location:dashboard_admin.php");

    // cek jika user login sebagai petugas
    } elseif ($data['level'] = "petugas") {
      
      // buat session login & username
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "petugas";
      $_SESSION['nama']=$data['nama'];
      $_SESSION['status_login']=true;

      // alihkan ke halaman kasir
      header("location:dashboard_petugas.php");

    // cek jika user login sebagai masyarakat
    } else {
      
      // alihkan ke halaman login kembali
		  header("location:login.php?pesan=gagal");
    }
  } else {
    header("location:login.php?pesan=gagal");
  }
?>