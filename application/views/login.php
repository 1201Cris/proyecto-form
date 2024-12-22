<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
  </head>
  <body>
    <div class="body">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 ">
                <h1>Ingreso al sistema</h1>
                <div class="card bg-black p-2 text-dark bg-opacity-10">
                  <div class="card-body">
                    <?php
                    if($this->session->flashdata("OP")){
                      $op=$this->session->flashdata("OP");
                      switch($op){
                        case "INCORRECTO":
                          ?>
                            <div class='alert alert-danger'>Usuario Incorrecto</div>
                          <?php
                          break;
                        case "PROHIBIDO":
                          ?>
                            <div class='alert alert-danger'>Primero tenes que loguearte</div>
                          <?php
                          break;
                        case "INACTIVO":
                          ?>
                            <div class='alert alert-danger'>Tu usuario fué desactivado</div>
                          <?php
                          break;
                        case "PENDIENTE":
                          ?>
                            <div class='alert alert-danger'>Tu usuario aun no fué activado
                            </div>
                          <?php
                          break;
                        case "CERRADO":
                          ?>
                            <div class='alert alert-danger'>El registro al sistema está desactivado
                            </div>
                          <?php
                          break;
                      }
                    }
                    ?>
                    <form action="" method="post" ;>
                      <div class="mb-3">
                        <label for="usuario" class="form-label ">Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control bg-black p-2 text-dark bg-opacity-10">
                        <?php echo form_error("usuario",'<div class="form-text text-danger">','</div>'); ?>
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control bg-black p-2 text-dark bg-opacity-10">
                        <?php echo form_error("password",'<div class="form-text text-danger">','</div>'); ?>
                      </div>
                      <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                  </div>
                </div>
                <?php if(TIPO_REGISTRO!=3){ ?>
                <p class="text-center">
                  <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="<?php echo site_url("auth/registro"); ?>">No sos usuario? Registrate</a>
                </p>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>