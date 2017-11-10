<head>
  <meta charset="utf-8">
  <title>{{$titulo}}</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container col-md-4 col-sm-6 col-lg-4">
    <form action="filtrar" method="POST">
      <select name="filtrar" class="form-control filter">
        <option value="" selected disabled hidden>Categorias</option>
        {foreach from=$categorias item=categoria}
        <option value="{$categoria['nombre']}">{$categoria['nombre']}</option>
        {/foreach}
      </select>
      <button class="btn btn-lg btn-primary btn-block dofilter" type="submit">Filtrar</button>
    </form>
  </div>
  <div class="container">

    {foreach from=$productos item=producto}
    {if $producto['id_categoria'] == $categoriaFiltrada}
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="thumbnail">
          {html_image file = "{$producto['images']}"}
          <div class="caption">
            <h3>{$producto['nombre']} </h3>
            <p>{$producto['descripcion']}</p>
            <p>Precio:{$producto['precio']}</p>
            <p>Peso: {$producto['peso']}</p>
          </div>
        </div>
      </div>
      {/if}
      {/foreach}
  {include file="footer.tpl"}
