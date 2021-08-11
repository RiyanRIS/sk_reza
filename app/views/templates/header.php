<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= (@$data['judul'] ?: "Dashboard") ?> | <?= $_SESSION['PROFIL']['sistem'] ?></title>
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/datatables/datatables.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="dist/css/style.css">