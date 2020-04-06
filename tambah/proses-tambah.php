<?php

include '../connect.php';

if(isset($_POST['simpan']))
{
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $kelas = $_POST['kelas'];
  $alamat = $_POST['alamat'];
  $web = $_POST['web'];
  $pbo = $_POST['pbo'];
  $basdat = $_POST['basdat'];
  $desain = $_POST['desain'];
  $progdas = $_POST['progdas'];
  $jumlah = $web+$pbo+$basdat+$desain+$progdas;
  $ratarata = $jumlah/5;
  if($ratarata >=90)
  {
    $pred='A';
    $ket='EXCELLENT';
  }else if($ratarata >=80 )
  {
    $pred='B';
    $ket='BAIK';
  } else if($ratarata >=70 )
  {
    $pred='C';
    $ket='CUKUP';
  }else if($ratarata >=60)
  {
    $pred='D';
    $ket='KURANG';
  }else if($ratarata <=50)
  {
    $pred='E';
    $ket='RENDAH';
  }




  $sql = "INSERT INTO nilai (NIS,nama,jurusan, kelas, alamat,nilai_web, nilai_PBO, nilai_basdat,nilai_design,nilai_progdas,rata_rata,predikat,keterangan)
  VALUES ('$nis', '$nama', '$jurusan', '$kelas', '$alamat', '$web', '$pbo', '$basdat', '$desain', '$progdas', '$ratarata', '$pred', '$ket')";

  $res = mysqli_query($connect, $sql);

  $count = mysqli_affected_rows($connect);

  if($count == 1)
  {
    header("Location: ../index.php");
  }
  else
  {
    header("Location: tambah.php");
  }
}
else
{
  header("Location: tambah.php");
}
?>
