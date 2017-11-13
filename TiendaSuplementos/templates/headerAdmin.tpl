<head>
  <meta charset="utf-8">
  <title>{{$titulo}}</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">  <div class="col-md-4 col-sm-3 col-lg-4">
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
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="indexAdmin">IndexAdmin</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="createUsuario">Crear usuario</a></li>
          </ul>
          <ul class=" nav navbar-nav navbar-right">
            <li><a href="logout">Logout</a></li>
          </ul>
          <ul class=" nav navbar-nav navbar-right">
            <li><a href="modificarProducto">Modificar Producto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="comentarios">Comentarios</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="agregarProducto">Crear Producto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="AdminUsuarios">Administrar Usuarios</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
