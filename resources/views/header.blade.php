<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  
</head>
<?php 
if(session('mode') !='mac'){
            $bg ='img/windows11.jpg';} else{
            $bg ='img/mac.jpg';
        }
        ?>
<style>
body{
    color:#fff;
    background-size: cover;
    background-image: url({{asset($bg)}});


}
</style>
<body>