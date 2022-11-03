<?php 

    if($_POST){
        $username=$_POST['username'];
        $pass=$_POST['password'];
        
           
            if(empty($username)){
                echo "<script>alert('Username tidak boleh kosong');location.href='loginmsy.php';</script>";
            }elseif(empty($pass)){
                echo "<script>alert('Password tidak boleh kosong');location.href='loginmsy.php';</script>";
            } else {
            include "/koneksi.php";
            $qry_login=mysqli_query($conn,"select * from masyarakat where username = '".$username."' and password = '".$pass."'");
            if(mysqli_num_rows($qry_login)>0){
                $data_login=mysqli_fetch_array($qry_login);
                    session_start();
                        $_SESSION['id_masyarakat']=$data_login['id_masyarakat'];
                        $_SESSION['nama']=$data_login['nama'];
                        $_SESSION['status_login']=true;
                    header("location: dashboard_masyarakat.php");
             } else {
                    echo "<script>alert('Username dan Password tidak benar');location.href='loginmsy.php';</script>";
                }

        }

    
    }
?>