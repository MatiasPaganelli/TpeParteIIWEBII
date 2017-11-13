<h1>Lista de Productos:</h1>
  {foreach from=$productos item=producto}
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail">
        <img src="{$imagen['path']}" alt="Imagen del producto {$producto['nombre']}">
        <div class="caption">
          <p>{$producto['nombre']} </p>
          <p>{$producto['descripcion']}</p>
          <p>Categoria: {$producto['id_categoria']}</p>
          <p>{$producto['nombre']}</p>
          <p>Precio:{$producto['precio']}</p>
          <p>Peso: {$producto['peso']}</p>
          <a href="borrarProducto/{$producto['id']}"><span class="glyphicon glyphicon-trash data-id="{{id}}" " aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
    {/foreach}
