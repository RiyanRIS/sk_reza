<?php

function toUrl($jenis, $file)
{
  if($jenis == "arsip"){
    return "uploads/arsip/".$file;
  }elseif($jenis == "img_kampus"){
    return "uploads/profil/kampus/".$file;
  }elseif($jenis == "img_lembaga"){
    return "uploads/profil/lembaga/".$file;
  }
}

function cekLogin()
{
  if(@$_SESSION['log_status'] != 1) {
    setMsg('Anda Belum Login. Silahkan login terlebih dahulu.', 'danger');
    header('location: '. site_url('auth'));
    exit;
  }
}

function setMsg($pesan, $type = 'success')
{
    $_SESSION['msg'] = [
        'pesan' => $pesan,
        'type'  => $type
    ];   
}

function getMsg(){
  if( isset($_SESSION['msg']) )
  {
    $msg = $_SESSION['msg'];
    $pesan = $msg['pesan'];
    if($msg['type'] == 'success'){
      echo "
        Swal.fire({
          icon: 'success',
          title: 'Berhasil',
          text: '$pesan',
        })
      ";
    }else{
      echo "
        Swal.fire({
          icon: 'error',
          title: 'Kesalahan',
          text: '$pesan',
        })
      ";
    }
    unset($_SESSION['msg']);
  }

}