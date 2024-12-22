<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
  <body>
    <div class="body">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h3>Registrarse como Usuario</h3>
                <p>Complete los datos para convertirse en usuario</p>
                <br>
                <?php // echo validation_errors(); ?>
                <form method="post" action="<?php echo site_url("auth/registro"); ?>">
                    <div class="mb-3">
                        <label for="email" class="form-label ">Email:</label>
                        <input type="text" class="form-control bg-black p-2 text-dark bg-opacity-10" id="email" name="email" value="<?php echo set_value("email"); ?>">
                        <?php echo form_error("email",'<div class="form-text text-danger">','</div>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control bg-black p-2 text-dark bg-opacity-10" id="apellido" name="apellido" value="<?php echo set_value("apellido"); ?>">
                        <?php echo form_error("apellido",'<div class="form-text text-danger">','</div>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control bg-black p-2 text-dark bg-opacity-10" id="nombre" name="nombre" value="<?php echo set_value("nombre"); ?>">
                        <?php echo form_error("nombre",'<div class="form-text text-danger">','</div>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" class="form-control bg-black p-2 text-dark bg-opacity-10" id="usuario" name="usuario" value="<?php echo set_value("usuario"); ?>">
                        <?php echo form_error("usuario",'<div class="form-text text-danger">','</div>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control bg-black p-2 text-dark bg-opacity-10" id="password" name="password" value="<?php echo set_value("password"); ?>">
                        <?php echo form_error("password",'<div class="form-text text-danger">','</div>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="conf-password" class="form-label">Confirmar Contraseña:</label>
                        <input type="password" class="form-control bg-black p-2 text-dark bg-opacity-10" id="conf-password" name="conf-password">
                        <?php echo form_error("conf-password",'<div class="form-text text-danger">','</div>'); ?>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
                <br>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>