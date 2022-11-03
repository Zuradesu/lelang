<?php

if ($_POST) {

    $id_petugas = $_POST['id_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($nama_petugas)) {
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambahadm.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='tambahadm.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='tambahadm.php';</script>";
    } else {
        include "../koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE petugas SET nama_petugas='" . $nama_petugas . "', username='" . $username . "' WHERE id_petugas = '".$id_petugas."' " ) or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update petugas');location.href='dataadmin.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubahadm.php?id_petugas=" . $id_petugas . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "UPDATE petugas SET nama_petugas='" . $nama_petugas . "', username='" . $username . "' WHERE id_petugas = '".$id_petugas."'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update siswa');location.href='dataadmin.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubahadm.php?id_petugas=" . $id_petugas . "';</script>";
            }
        }
    }
}