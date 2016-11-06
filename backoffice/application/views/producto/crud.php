<?php
    $titulo = 'Nuevo registro';
    $esAdmin = false;
    
    if(is_object($model)){
        $titulo = $model->Nombre;
    }
?>

<h1 class="page-header">
    <?php echo $titulo; ?>
</h1>

<ol class="breadcrumb">
    <li>
        <a href="<?php echo site_url('producto'); ?>">Productos</a>
    </li>
    <li class="active">
        <?php echo $titulo; ?>
    </li>
</ol>

<?php echo form_open('producto/guardar', ['enctype' => 'multipart/form-data']); ?>

<div class="panel panel-default">
 <div class="panel-body">
<input type="hidden" name="id" value="<?php echo is_object($model) ? $model->id : ''; ?>" />

<div class="form-horizontal"  >
    <label>Nombre</label>
   <input type="text" name="Nombre" class="form-control" placeholder="Ingrese el nombre" value="<?php echo is_object($model) ? $model->Nombre : ''; ?>">
</div>

<div class="form-group">
    <label>Precio</label>
    <input type="text" name="Precio" class="form-control" placeholder="Ingrese el precio" value="<?php echo is_object($model) ? $model->Precio : ''; ?>">
</div>

<div class="form-group">
    <label>Imagen</label>
    <div class="panel panel-default">
     <input  type="file" name="File"  >
   </div>
</div>
</div>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-primary"  type="submit" >Enviar</button>
  <button type="button" class="btn btn-default" onclick="window.history.back();">Cancelar</button>
</div>

<hr>



<?php echo form_close(); ?>