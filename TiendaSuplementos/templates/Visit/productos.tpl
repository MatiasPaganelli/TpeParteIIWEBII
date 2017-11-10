<h1>Lista de Productos:</h1>
  {foreach from=$productos item=producto}
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail">
        <div class="caption">
          {html_image file = "{$producto['images']}"}
          <h3>{$producto['nombre']} </h3>
          <p>{$producto['descripcion']}</p>
          <p>Categoria: {$producto['id_categoria']}</p>
          <p>{$producto['nombre']}</p>
          <p>Precio:{$producto['precio']}</p>
          <p>Peso: {$producto['peso']}</p>
        </div>
      </div>
    </div>
</div>
{/foreach}
