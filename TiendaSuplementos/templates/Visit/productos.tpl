{include file="headerVisit.tpl"}
<h1>Lista de Productos:</h1>
<div class="row">
  <button id="refresh" type="button" class="btn btn-default btn-xs pull-right" aria-label="Refresh">
    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
  </button>
</div>

{foreach from=$productos item=producto}
<!-- <div class="container-fluid well">
  <div class="row">
    <div class="col-md-4 col-sm-6">
        <div id="carousel-noticia" class="carousel slide" data-ride="carousel" data-interval="10">
        <ol class="carousel-indicators">
          <li data-target="#carousel-noticia" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-noticia" data-slide-to="1"></li>
          <li data-target="#carousel-noticia" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <a href="detalleProducto">{html_image file = "{$producto['images']}"}</a>
          </div>
          <div class="item">
            {html_image file = "{$producto['images']}"}
          </div>
          <div class="item">
            {html_image file = "{$producto['images']}"}
          </div>
        </div>


        <a class="left carousel-control" href="#carousel-noticia" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#carousel-noticia" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
    <div class="caption">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="..." alt="Second slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="..." alt="Third slide">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div> -->
<a href="detalleProducto/{$producto['id']}">{html_image file = "{$producto['images']}"}</a>
<h3>{$producto['nombre']} </h3>

<!-- </div>
</div>
</div>
</div>
</div> -->
{/foreach}
{include file="footer.tpl"}
