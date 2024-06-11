<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__c312d9d6cec77ae93f2613012b2996cc */
class __TwigTemplate_4e34f709be83667418c9bd19dc167133 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Configuración de Productos • Scrapy-TEK</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPPreferences';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '8.1.6';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Leer este mensaje';
    var token = '0d59b99dedf0bb4b5863bbc0bca3a610';
    var currentIndex = 'index.php?controller=AdminPPreferences';
    var employee_token = 'fa12c5722d32921a1345614b66be31b1';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/admin893izawawjiie3x0ot8/index.php/improve/modules/manage?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc';
    var admin_notification_get_link = '/admin893izawawjiie3x0ot8/index.php/common/notifications?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc';
    var admin_notification_push_link = adminNotificationPushLink = '/admin893izawawjiie3x0ot8/index.php/common/notifications/ack?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc';
    var tab_modules_list = '';
    var update_success_";
        // line 42
        echo "msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/admin893izawawjiie3x0ot8/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin893izawawjiie3x0ot8/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin893izawawjiie3x0ot8/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin893izawawjiie3x0ot8/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin893izawawjiie3x0ot8\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin893izawawjiie3x0ot8\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"D\\u00f3lar estadounidense\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionD";
        // line 67
        echo "igits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin893izawawjiie3x0ot8/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.6\"></script>
<script type=\"text/javascript\" src=\"/admin893izawawjiie3x0ot8/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.6\"></script>
<script type=\"text/javascript\" src=\"/admin893izawawjiie3x0ot8/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin893izawawjiie3x0ot8/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin893izawawjiie3x0ot8/index.php/common/notifications?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminppreferences\"
  data-base-url=\"/admin893izawawjiie3x0ot8/index.php\"  data-token=\"8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminDashboard&amp;token=74435d20761442c3f45e78b1c73ee94f\"></a>
      <span id=\"shop_version\">8.1.6</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=97a1e45abd5535306fcd03c8c83ba013\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php/improve/modules/manage?token=153a4658dc4c5dc8b7af75a76de6803e\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php/sell/catalog/categories/new?token=153a4658dc4c5dc8b7af75a76de6803e\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php/sell/catalog/products-v2/create?token=153a4658dc4c5dc8b7af75a76de680";
        // line 136
        echo "3e\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1a35bdd5047f13742d8c36ea917c9099\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php/sell/orders?token=153a4658dc4c5dc8b7af75a76de6803e\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"84\"
        data-icon=\"icon-ShopParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/product-preferences\"
        data-post-link=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminQuickAccesses&token=3850a4411aa8ddbe786e4df364e4dae5\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Configuraci&oacute;n de...\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminQuickAccesses&token=3850a4411aa8ddbe786e4df364e4dae5\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin893izawawjiie3x0ot8/index.php?controller=AdminSearch&amp;token=3d280d2db28427f01498eed940a831d6\"
      role=\"search\"";
        // line 176
        echo ">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID ca";
        // line 192
        echo "rrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=97a1e45abd5535306fcd03c8c83ba013\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php/improve/modules/manage?token=153a4658dc4c5dc8b7af75a76de6803e\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php/sell/catalog/categories/new?token=153a4658dc4c5dc8b7af75a76de6803e\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php/sell/catalog/products-v2/create?token=153a4658dc4c5dc8b7af75a76de6803e\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin893izawawjiie3x0ot8/";
        // line 229
        echo "index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1a35bdd5047f13742d8c36ea917c9099\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php/sell/orders?token=153a4658dc4c5dc8b7af75a76de6803e\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"43\"
      data-icon=\"icon-ShopParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/product-preferences\"
      data-post-link=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminQuickAccesses&token=3850a4411aa8ddbe786e4df364e4dae5\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Configuraci&oacute;n de...\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminQuickAccesses&token=3850a4411aa8ddbe786e4df364e4dae5\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notificatio";
        // line 274
        echo "n js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=454da38f9057d30ad8d862eac12697c9\">carritos abandonados</a></strong>?<br>?. �";
        // line 324
        echo "�Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i clas";
        // line 374
        echo "s=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8080/img/pr/default.jpg\" alt=\"A\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, A</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/employees/1/edit?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminLogin&amp;logout=1&amp;token=faf6b5dbc24a12ef9a9c1c3d8af574cb\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/employees/toggle-navigation?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminDashboard&amp;token=74435d20761442c3f45e78b1c73ee94f\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.6</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
          ";
        // line 421
        echo "    <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminDashboard&amp;token=74435d20761442c3f45e78b1c73ee94f\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/orders/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/orders/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                       ";
        // line 458
        echo "                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/orders/invoices/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/orders/credit-slips/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/orders/delivery-slips/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminCarts&amp;token=454da38f9057d30ad8d862eac12697c9\" class=\"link\"> Carr";
        // line 486
        echo "itos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/catalog/products?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/catalog/products?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin893izawawjiie3x";
        // line 519
        echo "0ot8/index.php/sell/catalog/categories?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/catalog/monitoring/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminAttributesGroups&amp;token=00ff8f05116dec7f315e208eecd4a967\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/catalog/brands/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                       ";
        // line 549
        echo "                     
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/attachments/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminCartRules&amp;token=1a35bdd5047f13742d8c36ea917c9099\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/stocks/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/customers/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\">
                      <i class=\"mater";
        // line 579
        echo "ial-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/customers/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/addresses/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                ";
        // line 611
        echo "    <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminCustomerThreads&amp;token=f7f1020311625c2069305b6b4836eacb\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminCustomerThreads&amp;token=f7f1020311625c2069305b6b4836eacb\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/sell/customer-service/order-messages/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
            ";
        // line 640
        echo "                  <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminReturn&amp;token=c7c63c8f3ebea0794eb8c9840ae819ff\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminStats&amp;token=97a1e45abd5535306fcd03c8c83ba013\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/mo";
        // line 677
        echo "dules/manage?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/modules/manage?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/design/themes/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
 ";
        // line 708
        echo "                                                                   keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/design/themes/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/design/mail_theme/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/design/cms-pages/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
         ";
        // line 738
        echo "                                                   
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/design/modules/positions/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminImages&amp;token=3637e8235d1ca6a67238cd93106c932d\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/modules/link-widget/list?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminCarriers&amp";
        // line 767
        echo ";token=3c91402a6d1d2d37915821d18219980b\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminCarriers&amp;token=3c91402a6d1d2d37915821d18219980b\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/shipping/preferences/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_su";
        // line 799
        echo "bmenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/payment/payment_methods?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/payment/payment_methods?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/payment/preferences?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                         ";
        // line 828
        echo "     
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/international/localization/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/international/localization/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/international/zones/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                       ";
        // line 857
        echo "       </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/international/taxes/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/improve/international/translations/settings?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/shop/preferences/preferences?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\">
    ";
        // line 893
        echo "                  <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/shop/preferences/preferences?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/shop/order-preferences/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/adm";
        // line 922
        echo "in893izawawjiie3x0ot8/index.php/configure/shop/product-preferences/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/shop/customer-preferences/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/shop/contacts/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/shop/seo-urls/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
      ";
        // line 952
        echo "                                                      
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminSearchConf&amp;token=f2e821e0486ec0a62b2ae380fff8249d\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/system-information/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/system-information/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class";
        // line 979
        echo "=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/performance/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/administration/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/emails/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
             ";
        // line 1011
        echo "                   <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/import/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/employees/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/sql-requests/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/logs/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                              ";
        // line 1041
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/webservice-keys/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/feature-flags/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/advanced/security/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Brea";
        // line 1078
        echo "dcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Parámetros de la tienda</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin893izawawjiie3x0ot8/index.php/configure/shop/product-preferences/?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\" aria-current=\"page\">Configuración de Productos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Configuración de Productos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin893izawawjiie3x0ot8/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminPPreferences%253Fversion%253D8.1.6%2526country%253Des/Ayuda?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin893izawawjiie3x0ot8/index.php/common/sidebar/https%253A%25";
        // line 1131
        echo "2F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminPPreferences%253Fversion%253D8.1.6%2526country%253Des/Ayuda?_token=8jsRsRIeZGks8tozLsLF6uj8M4gv3V20sk1MgzNGXKc\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1152
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost:8080/admin893izawawjiie3x0ot8/index.php?controller=AdminDashboard&amp;token=74435d20761442c3f45e78b1c73ee94f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1186
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1152
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1186
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__c312d9d6cec77ae93f2613012b2996cc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1349 => 1186,  1328 => 1152,  1317 => 102,  1308 => 1186,  1268 => 1152,  1245 => 1131,  1190 => 1078,  1151 => 1041,  1119 => 1011,  1085 => 979,  1056 => 952,  1024 => 922,  993 => 893,  955 => 857,  924 => 828,  893 => 799,  859 => 767,  828 => 738,  796 => 708,  763 => 677,  724 => 640,  693 => 611,  659 => 579,  627 => 549,  595 => 519,  560 => 486,  530 => 458,  491 => 421,  442 => 374,  390 => 324,  338 => 274,  291 => 229,  252 => 192,  234 => 176,  192 => 136,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c312d9d6cec77ae93f2613012b2996cc", "");
    }
}
