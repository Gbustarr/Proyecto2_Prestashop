<?php
/* Smarty version 4.3.4, created on 2024-06-15 18:26:34
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666e151ade4201_17981353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_666e151ade4201_17981353 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Contenedor carrusel ">
              <li class="carousel-item active" role="option" aria-hidden="false">
                      <figure>
              <img src="http://192.168.0.11/modules/ps_imageslider/images/5cc0ef2077ce9959f0c5a454772bc9639a5feba3_back-slide1.jpeg" alt="LO MEJOR DE LO MEJOR" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SCRAPY-TEK</h2>
                  <div class="caption-description"><p><strong>Productos excepcionalmente excepcionales</strong></p></div>
                </figcaption>
                          </figure>
                  </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://192.168.0.11/modules/ps_imageslider/images/56f4d9ea6dd9cc59b5b1c540fa0a0be6db498dff_back-slide2.jpeg" alt="Tienda de Tecnologia" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SCRAPY-TEK</h2>
                  <div class="caption-description"><h3>Testimonio genérico 1</h3>
<p>"Nunca había estado tan satisfecha en la compra de productos online hasta que me topé con esta pagina maravillosa"</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://192.168.0.11/modules/ps_imageslider/images/92dc221c8ea12d1a935e4024996aef388823900d_back-slide3.jpeg" alt="O-MY-GOD" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SCRAPY-TEK</h2>
                  <div class="caption-description"><h3>PRODUCTOS IMPRESIONANTES A PRECIOS IMPRESIONANTES</h3>
<p>Lo mejol de lo mejol</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Botones del carrusel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Anterior">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Siguiente">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
