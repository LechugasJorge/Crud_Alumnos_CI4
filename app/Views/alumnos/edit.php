<h1>Editar Alumnos</h1>

<?php if (session('mensaje')) { ?>
<div class="alert alert-info" role="alert">
    <strong>Error </strong>
    <?= session('mensaje') ?>
</div>
<?php } ?>

<a href="<?= base_url('inicio'); ?>" class="btn btn-primary">Regresar a inicio</a>

<form role="form" action="<?= base_url('inicio/update') ?>" method="post">
    <div class="form-group">
        <label class="control-label" for="nombre">nombre:</label>
        <input class="form-control" id="nombre" name="nombre" placeholder="nombre" type="text"
            value="<?php echo $dato['nombre']; ?>">
    </div>
    <div class="form-group">
        <label class="control-label" for="apellido">apellido:</label>
        <input class="form-control" id="apellido" name="apellido" placeholder="apellido" type="text"
            value="<?php echo $dato['apellido']; ?>">
    </div>
    <div class="form-group">
        <label class="control-label" for="telefono">telefono:</label>
        <input class="form-control" id="telefono" name="telefono" placeholder="telefono" type="text"
            value="<?php echo $dato['telefono']; ?>">
    </div>
    <input type="hidden" name="id" value="<?= $dato['id']; ?>">

    <input type="submit" value="Editar">
</form>