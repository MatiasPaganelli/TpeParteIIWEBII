<head>
  <meta charset="utf-8">
  <title>{{$titulo}}</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container col-md-4 col-sm-6 col-lg-4">
    <form action="filtrarAdmin" method="POST">
      <select name="filtrarAdmin" class="form-control filter">
        <option value="" selected disabled hidden>Categorias</option>
        {foreach from=$categorias item=categoria}
        <option value="{$categoria['id']}">{$categoria['nombre']}</option>
        {/foreach}
      </select>
      <button class="btn btn-lg btn-primary btn-block dofilter" type="submit">Filtrar</button>
    </form>
  </div>
  <div class="container">
