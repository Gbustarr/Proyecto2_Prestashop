<?php
/* Smarty version 4.3.4, created on 2024-06-11 15:57:01
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6668ac0d7b4df6_44245555',
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
function content_6668ac0d7b4df6_44245555 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Contenedor carrusel ">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://www.scrapy-tek.com">            <figure>
              <img src="http://localhost:8080/modules/ps_imageslider/images/0f74d956497ce66906ccba1134cf52e1e01c8353_back-slide1.jpeg" alt="Tienda de Tecnologia" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SCRAPY-TEK</h2>
                  <div class="caption-description"><h3>CALIDAD EXEC-EPCIONAL</h3>
<p>¡En ningún otro lugar podrás encontrar la calidad de los articulos de esta tienda!</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
                      <figure>
              <img src="http://localhost:8080/modules/ps_imageslider/images/7d231e914d3ad5639486d290333e6536e9a884ea_back-slide2.jpeg" alt="LO MEJOR DE LO MEJOR" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SCRAPY-TEK</h2>
                  <div class="caption-description"><h3>IMPRESIONANTES PRODUCTOS</h3>
<p>Tenemos una vasta categoría de productos por ofrecer a un precio inigualable!</p></div>
                </figcaption>
                          </figure>
                  </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://localhost:8080/modules/ps_imageslider/images/d72346cd189899597bd7824b87ad0b7611d3eba9_back-slide3.jpeg" alt="DELUXE" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SCRAPY-TEK</h2>
                  <div class="caption-description"><h3>PRODUCTOS DELUXE 100% ORIGINALES NO FAKE</h3>
<p>1 link full download rapidshare no pass no rar no malware</p></div>
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
