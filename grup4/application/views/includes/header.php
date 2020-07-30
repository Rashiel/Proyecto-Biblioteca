<!DOCTYPE html>
<html>
<head>
    <title>Proyecto Biblioteca G4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('https://i.pinimg.com/originals/61/62/b3/6162b3e26235f56feec637a053cf80ce.jpg') ; ">
<div class="containessssss"><!--No usaremos container por que en ejemplares es muy extenso la tabla-->
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Proyecto Biblioteca</a>
  </div>
  
  <ul class="navbar-nav mr-auto">
        <li class="navbar-brand" ><a class="nav-link" href="<?php echo base_url('ejemplar');?>">Ejemplares</a></li>
        <li class="navbar-brand"><a class="nav-link" href="<?php echo base_url('categoria');?>">Categoria</a></li>
        <li class="navbar-brand"><a class="nav-link" href="<?php echo base_url('usuario');?>">Usuario</a></li>
        <li class="navbar-brand"><a class="nav-link" href="<?php echo base_url('Login/salir');?>">logout</a></li>
    </ul>
</nav>
