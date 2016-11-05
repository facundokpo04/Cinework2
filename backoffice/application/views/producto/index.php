
<?php //var_dump($model); ?>
<h1 class="page-header">
    <a class="pull-right btn btn-primary" href="<?php echo site_url('producto/crud'); ?>">Registrar</a>
    Productos
</h1>

<ol class="breadcrumb">
  <li class="active">Productos</li>
</ol>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th style="width:60px;"></th>
            <th>Nombre</th>
            <th style="width:160px;" class="text-right">Precio ($)</th>
            <th style="width:160px;"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($model as $m): ?>
        <tr>
            <td>
            <?php if(!empty($m->Imagen)): ?>
                <img style="width:60px; height:60px;" src="<?php echo $m->Imagen; ?>"  alt="?php echo ; ?>" />
                <?php endif; ?>
            </td>
            <td><?php echo $m->Nombre; ?></td>
            <td class="text-right"><?php echo $m->Precio; ?></td>
            <td class="text-center">
                <a class="btn btn-xs btn-success" href="<?php echo site_url('producto/crud/' . $m->id); ?>">
                    Editar
                </a>
                <a class="btn btn-xs btn-danger" href="<?php echo site_url('producto/eliminar/' . $m->id); ?>" onclick="return confirm('¿Esta seguro de eliminar este producto?');">
                    Eliminar
                </a>
            </td>
        </tr>
  <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->pagination->create_links(); ?>