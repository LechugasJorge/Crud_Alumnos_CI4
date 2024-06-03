<h1>Agregar Alumnos</h1>

<?php if (session('mensaje')) { ?>
<div class="alert alert-info" role="alert">
    <strong>Error </strong>
    <?= session('mensaje') ?>
</div>
<?php } ?>

<a href="<?= base_url('inicio'); ?>" class="btn btn-primary">Regresar a inicio</a>

<form role="form" action="<?= base_url('inicio/store') ?>" method="post">
    <div class="form-group">
        <label class="control-label" for="nombre">nombre:</label>
        <input class="form-control" id="nombre" name="nombre" placeholder="nombre" type="text">
    </div>
    <div class="form-group">
        <label class="control-label" for="apellido">apellido:</label>
        <input class="form-control" id="apellido" name="apellido" placeholder="apellido" type="text">
    </div>
    <div class="form-group">
        <label class="control-label" for="telefono">telefono:</label>
        <input class="form-control" id="telefono" name="telefono" placeholder="telefono" type="text">
    </div>
    <input type="submit" value="Guardar">
</form>