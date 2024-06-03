<h1>Tabla de Usuarios</h1>
<!--<a href="http://localhost/junio/CRUD_FINAL/public/inicio/add" class="btn btn-primary">Agregar nuevo registro</a>-->
<a href="<?= base_url('inicio/add'); ?>" class="btn btn-primary">Agregar nuevo registro</a>

<?php if (session('mensaje')) { ?>
<div class="alert alert-success" role="alert">
    <strong>Transaccion Exitosa </strong>
    <?= session('mensaje') ?>
</div>
<?php } ?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $dato) : ?>

        <tr>
            <td><?php echo $dato['id']; ?></td>
            <td><?php echo $dato['nombre']; ?></td>
            <td><?php echo $dato['apellido']; ?></td>
            <td><?php echo $dato['telefono']; ?></td>
            <td>
                <a href="<?= base_url('inicio/edit/' . $dato['id']) ?>">Editar</a>
                <br>
                <a href="<?= base_url('inicio/delete/' . $dato['id']) ?>">Borrar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <!-- Aquí puedes agregar más filas -->
    </tbody>
</table>