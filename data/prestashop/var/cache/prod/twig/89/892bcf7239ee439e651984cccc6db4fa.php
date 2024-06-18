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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig */
class __TwigTemplate_306e2c8d1f14552daeabbab5658b46e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'category_form_block' => [$this, 'block_category_form_block'],
            'category_tool_serp' => [$this, 'block_category_tool_serp'],
            'category_form_rest' => [$this, 'block_category_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('category_form_block', $context, $blocks);
    }

    public function block_category_form_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["categoryForm"] ?? null), 'form_start', ["attr" => ["data-id" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0))]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categoryForm"] ?? null), 'errors');
        echo "

      ";
        // line 38
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "name", [], "any", false, false, false, 38), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]], 38, $context, $this->getSourceContext());
        // line 41
        echo "

      <div class=\"form-group row\">
        ";
        // line 44
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Displayed", [], "Admin.Global"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click on \"%displayed_label%\" to index the category on your shop.", ["%displayed_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Displayed", [], "Admin.Global")], "Admin.Catalog.Help")], 44, $context, $this->getSourceContext());
        echo "
        <div class=\"col-sm\">
          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "active", [], "any", false, false, false, 46), 'widget');
        echo "
          <small class=\"form-text\">
            ";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you want a category to appear in the menu of your shop, go to [1]Modules > Module Manager[/1] and configure your menu module.", ["[1]" => (("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage")) . "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        // line 51
        echo "
          </small>
        </div>
      </div>

      ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "id_parent", [], "any", true, true, false, 56)) {
            // line 57
            echo "      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "vars", [], "any", false, false, false, 59), "required", [], "any", false, false, false, 59)) {
                // line 60
                echo "            <span class=\"text-danger\">*</span>
          ";
            }
            // line 62
            echo "
          ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Parent category", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        </label>
        <div class=\"col-sm\">
          ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "id_parent", [], "any", false, false, false, 66), 'widget');
            echo "
        </div>
      </div>
      ";
        }
        // line 70
        echo "
      ";
        // line 71
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "description", [], "any", false, false, false, 71), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description", [], "Admin.Global"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]], 71, $context, $this->getSourceContext());
        // line 74
        echo "

      ";
        // line 76
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "additional_description", [], "any", false, false, false, 76), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional description", [], "Admin.Catalog.Feature"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]], 76, $context, $this->getSourceContext());
        // line 79
        echo "

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category cover image", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 86
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 86)->display($context);
        // line 87
        echo "
          ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "cover_image", [], "any", false, false, false, 88), 'widget');
        echo "

          <small class=\"form-text\">
            ";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is the main image for your category, displayed in the category page. The category description will overlap this image and appear in its top-left corner.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category thumbnail", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 101
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/thumbnail_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 101)->display($context);
        // line 102
        echo "
          ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "thumbnail_image", [], "any", false, false, false, 103), 'widget');
        echo "

          <small class=\"form-text\">
            ";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Displays a small image in the parent category's page, if the theme allows it.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu thumbnails", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 116
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 116)->display($context);
        // line 117
        echo "
          ";
        // line 118
        if (($context["allowMenuThumbnailsUpload"] ?? null)) {
            // line 119
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "menu_thumbnail_images", [], "any", false, false, false, 119), 'widget');
            echo "
          ";
        } else {
            // line 121
            echo "            <div class=\"d-none\">
              ";
            // line 122
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "menu_thumbnail_images", [], "any", false, false, false, 122), 'widget');
            echo "
            </div>

            <div class=\"alert alert-warning\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have reached the limit (%s) of files to upload, please remove files to continue uploading", ["%s" => ($context["maxMenuThumbnails"] ?? null)], "Admin.Catalog.Notification"), "html", null, true);
            echo "
              </p>
            </div>
          ";
        }
        // line 131
        echo "          <small class=\"form-text\">
            ";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The category thumbnail appears in the menu as a small image representing the category, if the theme allows it.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>

      ";
        // line 137
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeCategory");
        echo "

      ";
        // line 140
        echo "      ";
        if ( !(null === ($context["categoryUrl"] ?? null))) {
            // line 141
            echo "        ";
            $this->displayBlock('category_tool_serp', $context, $blocks);
            // line 152
            echo "      ";
        }
        // line 153
        echo "
      <div class=\"form-group row\">
        ";
        // line 155
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta title", [], "Admin.Global"), ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")], 155, $context, $this->getSourceContext());
        echo "
        <div class=\"col-sm\">
          ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "meta_title", [], "any", false, false, false, 157), 'widget');
        echo "
        </div>
      </div>

      <div class=\"form-group row\">
        ";
        // line 162
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta description", [], "Admin.Global"), ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")], 162, $context, $this->getSourceContext());
        echo "
        <div class=\"col-sm\">
          ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "meta_description", [], "any", false, false, false, 164), 'widget');
        echo "
        </div>
      </div>

      ";
        // line 168
        ob_start(function () { return ''; });
        // line 169
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        // line 170
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}"), "html", null, true);
        echo "
      ";
        $context["metaKeywordHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 172
        echo "
      ";
        // line 173
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "meta_keyword", [], "any", false, false, false, 173), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 175
($context["metaKeywordHelp"] ?? null)]], 173, $context, $this->getSourceContext());
        // line 176
        echo "

      ";
        // line 178
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "link_rewrite", [], "any", false, false, false, 178), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Friendly URL", [], "Admin.Global"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Only letters, numbers, underscore (_) and the minus (-) character are allowed.", [], "Admin.Catalog.Help")]], 178, $context, $this->getSourceContext());
        // line 181
        echo "

      ";
        // line 183
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "group_association", [], "any", false, false, false, 183), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group access", [], "Admin.Catalog.Feature"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark all of the customer groups which you would like to have access to this category.", [], "Admin.Catalog.Help")]], 183, $context, $this->getSourceContext());
        // line 186
        echo "

      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <div class=\"alert alert-info\">
            <p class=\"mb-1\">
              <strong>";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You now have three default customer groups.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "</strong>
            </p>

            <p>";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - All people without a valid customer account.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["defaultGroups"] ?? null), "visitorsGroup", [], "any", false, false, false, 196), "name", [], "any", false, false, false, 196)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - Customer who placed an order with the guest checkout.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["defaultGroups"] ?? null), "guestsGroup", [], "any", false, false, false, 197), "name", [], "any", false, false, false, 197)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - All people who have created an account on this site.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["defaultGroups"] ?? null), "customersGroup", [], "any", false, false, false, 198), "name", [], "any", false, false, false, 198)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
          </div>
        </div>
      </div>

      ";
        // line 203
        if (twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "shop_association", [], "any", true, true, false, 203)) {
            // line 204
            echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store association", [], "Admin.Global"), "html", null, true);
            echo "
          </label>
          <div class=\"col-sm\">
            ";
            // line 209
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "shop_association", [], "any", false, false, false, 209), 'widget');
            echo "
          </div>
        </div>
      ";
        }
        // line 213
        echo "
      ";
        // line 214
        $this->displayBlock('category_form_rest', $context, $blocks);
        // line 217
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 220
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
  </div>
</div>
";
        // line 226
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["categoryForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 141
    public function block_category_tool_serp($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEO preview", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              <div id=\"serp-app\" data-category-url=\"";
        // line 145
        echo twig_escape_filter($this->env, ($context["categoryUrl"] ?? null), "html", null, true);
        echo "\"></div>
              <small class=\"form-text\">
                ";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here is a preview of how your page will appear in search engine results.", [], "Admin.Global"), "html", null, true);
        echo "
              </small>
            </div>
          </div>
        ";
    }

    // line 214
    public function block_category_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categoryForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 215,  426 => 214,  417 => 147,  412 => 145,  407 => 143,  404 => 142,  400 => 141,  394 => 226,  388 => 223,  383 => 221,  379 => 220,  374 => 217,  372 => 214,  369 => 213,  362 => 209,  356 => 206,  352 => 204,  350 => 203,  342 => 198,  338 => 197,  334 => 196,  328 => 193,  319 => 186,  317 => 183,  313 => 181,  311 => 178,  307 => 176,  305 => 175,  304 => 173,  301 => 172,  296 => 170,  291 => 169,  289 => 168,  282 => 164,  277 => 162,  269 => 157,  264 => 155,  260 => 153,  257 => 152,  254 => 141,  251 => 140,  246 => 137,  238 => 132,  235 => 131,  228 => 127,  220 => 122,  217 => 121,  211 => 119,  209 => 118,  206 => 117,  204 => 116,  198 => 113,  188 => 106,  182 => 103,  179 => 102,  177 => 101,  171 => 98,  161 => 91,  155 => 88,  152 => 87,  150 => 86,  144 => 83,  138 => 79,  136 => 76,  132 => 74,  130 => 71,  127 => 70,  120 => 66,  114 => 63,  111 => 62,  107 => 60,  105 => 59,  101 => 57,  99 => 56,  92 => 51,  90 => 48,  85 => 46,  80 => 44,  75 => 41,  73 => 38,  68 => 36,  61 => 32,  55 => 29,  48 => 28,  45 => 27,  43 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/form.html.twig");
    }
}
