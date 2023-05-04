<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <title><?= $meta_title ?></title>
</head>

<body class="bg-light">

   <nav class="navbar navbar-light fixed-top bg-light shadow-sm">
      <div class="container-lg">
         <a class="navbar-brand text-danger fw-bold fs-3" href="#"><?= $title ?></a>
         <div class="dropdown">
            <button class="btn btn-secondary btn-danger px-3" type="button" id="dropdownMuneButton" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fas fa-bars"></i>
            </button>