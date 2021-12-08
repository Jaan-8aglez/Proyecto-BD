<?php
require 'conexion.php';
?>

<table class="table table-bordered my-5">
    <thead>
        <tr>
            <th>Id Cuerpo</th>
            <th>Tel 1</th>
            <th>Tel 2</th>
            <th>Punto Geo</th>
            <th>Nombre Zona</th>
            <th>Prioridad</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryJoin = 'SELECT protege.id_cuerpo, cuerpo_bomberos.tel_emer1, cuerpo_bomberos.tel_emer2, zonas.punto_geo, zonas.nombre, protege.prioridad FROM protege 
            INNER JOIN cuerpo_bomberos ON protege.id_cuerpo = cuerpo_bomberos.id_cuerpo
            INNER JOIN zonas ON protege.punto_geo = zonas.punto_geo';
        $response = mysqli_query($conexion, $queryJoin) or die();
        while ($fetch = mysqli_fetch_array($response)) {
        ?>
            <tr>
                <td><?php echo $fetch["id_cuerpo"] ?></td>
                <td><?php echo $fetch['tel_emer1'] ?></td>
                <td><?php echo $fetch['tel_emer2'] ?></td>
                <td><?php echo $fetch["punto_geo"] ?></td>
                <td><?php echo $fetch["nombre"] ?></td>
                <td><?php echo $fetch["prioridad"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<table class="table table-bordered my-5">
    <thead>
        <tr>
            <th>Cuerpo</th>
            <th>Tel 1</th>
            <th>Tel 2</th>
            <th>No. Hombres</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM cuerpo_bomberos ON WHERE 
		id <> '50' ";
        $response = mysqli_query($conexion, $query) or die();
        while ($fetch = mysqli_fetch_array($response)) {
        ?>
            <tr>
                <td><?php echo $fetch['id_cuerpo'] ?></td>
                <td><?php echo $fetch['tel_emer1'] ?></td>
                <td><?php echo $fetch['tel_emer2'] ?></td>
                <td><?php echo $fetch['no_hombres'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>




