<?php

namespace WPML\Core;

use \WPML\Core\Twig\Environment;
use \WPML\Core\Twig\Error\LoaderError;
use \WPML\Core\Twig\Error\RuntimeError;
use \WPML\Core\Twig\Markup;
use \WPML\Core\Twig\Sandbox\SecurityError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedTagError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFilterError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFunctionError;
use \WPML\Core\Twig\Source;
use \WPML\Core\Twig\Template;

/* products.twig */
class __TwigTemplate_4e638b0995e5e8700101b91a2ee11c480c30c53ce88fec45084f5db855c7fa40 extends \WPML\Core\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<form method=\"post\" action=\"";
        echo \WPML\Core\twig_escape_filter($this->env, ($context["request_uri"] ?? null));
        echo "\">

\t";
        // line 3
        $this->loadTemplate("filter.twig", "products.twig", 3)->display(twig_array_merge($context, ($context["filter"] ?? null)));
        // line 4
        echo "
\t<table class=\"widefat fixed wpml-list-table wp-list-table striped\" cellspacing=\"0\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\" class=\"column-thumb\">
\t\t\t\t\t\t<span class=\"wc-image wcml-tip\"
\t\t\t\t\t\t\t  data-tip=\"";
        // line 10
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "image", []));
        echo "\">";
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "image", []), "html", null, true);
        echo "</span>
\t\t\t\t</th>
\t\t\t\t<th scope=\"col\" class=\"wpml-col-title ";
        // line 12
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["filter_urls"] ?? null), "product_sorted", []), "html", null, true);
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 13
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["filter_urls"] ?? null), "product", []));
        echo "\">
\t\t\t\t\t\t<span>";
        // line 14
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "product", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t<span class=\"sorting-indicator\"></span>
\t\t\t\t\t</a>
\t\t\t\t</th>
\t\t\t\t<th scope=\"col\" class=\"wpml-col-languages\">
\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages_flags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 20
            echo "\t\t\t\t\t\t<span title=\"";
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", []));
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 21
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_url", []), "html", null, true);
            echo "\"  alt=\"";
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", []));
            echo "\"/>
\t\t\t\t\t\t</span>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t</th>
\t\t\t\t<th scope=\"col\"
\t\t\t\t\tclass=\"column-categories\">";
        // line 26
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "categories", []), "html", null, true);
        echo "</th>
\t\t\t\t";
        // line 27
        if ($this->getAttribute(($context["strings"] ?? null), "type", [])) {
            // line 28
            echo "\t\t\t\t\t<th scope=\"col\" class=\"column-product_type\">
\t\t\t\t\t\t\t<span class=\"wc-type wcml-tip\"
\t\t\t\t\t\t\t\t  data-tip=\"";
            // line 30
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "type", []));
            echo "\">";
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "type", []), "html", null, true);
            echo "</span>
\t\t\t\t\t</th>
\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t<th scope=\"col\" id=\"date\" class=\"column-date ";
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["filter_urls"] ?? null), "date_sorted", []), "html", null, true);
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 34
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["filter_urls"] ?? null), "date", []));
        echo "\">
\t\t\t\t\t\t<span>";
        // line 35
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "date", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t<span class=\"sorting-indicator\"></span>
\t\t\t\t\t</a>
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>

\t\t<tbody>
\t\t\t";
        // line 43
        if (twig_test_empty($this->getAttribute(($context["data"] ?? null), "products", []))) {
            // line 44
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">
\t\t\t\t\t\t<strong>";
            // line 46
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "no_products", []), "html", null, true);
            echo "</strong>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "products", []));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 51
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"thumb column-thumb\">
\t\t\t\t\t\t\t<a href=\"";
                // line 53
                echo $this->getAttribute($context["product"], "edit_post_link", []);
                echo "\">
\t\t\t\t\t\t\t\t<img width=\"150\" height=\"150\" src=\"";
                // line 54
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "post_thumbnail", []), "html", null, true);
                echo "\" class=\"wp-post-image original-image\" data-image-id=\"thumbnail-";
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "ID", []), "html", null, true);
                echo "\" >
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t";
                // line 59
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "has_image", [])) {
                    // line 60
                    echo "\t\t\t\t\t\t\t<img id=\"thumbnail-";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "ID", []), "html", null, true);
                    echo "\" src=\"";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "post_thumbnail", []), "html", null, true);
                    echo "\" class=\"mouse-hovered\">
\t\t\t\t\t\t";
                }
                // line 62
                echo "
\t\t\t\t\t\t<td class=\"wpml-col-title  wpml-col-title-flag\">
\t\t\t\t\t\t\t";
                // line 64
                if (($this->getAttribute($context["product"], "post_parent", []) != 0)) {
                    echo " &#8212; ";
                }
                // line 65
                echo "\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t";
                // line 66
                if ( !$this->getAttribute(($context["data"] ?? null), "slang", [])) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"wpml-title-flag\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 68
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "orig_flag_url", []), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                }
                // line 71
                echo "
\t\t\t\t\t\t\t\t<a href=\"";
                // line 72
                echo $this->getAttribute($context["product"], "edit_post_link", []);
                echo "\" title=\"";
                echo \WPML\Core\twig_escape_filter($this->env, strip_tags($this->getAttribute($context["product"], "post_title", [])), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 73
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "post_title", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t";
                // line 76
                if (($this->getAttribute($context["product"], "post_status", []) == "draft")) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t- <span class=\"post-state\">";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "draft", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 79
                echo "
\t\t\t\t\t\t\t\t";
                // line 80
                if (($this->getAttribute($context["product"], "post_status", []) == "private")) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t- <span class=\"post-state\">";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "private", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 83
                echo "
\t\t\t\t\t\t\t\t";
                // line 84
                if (($this->getAttribute($context["product"], "post_status", []) == "pending")) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t- <span class=\"post-state\">";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "pending", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "
\t\t\t\t\t\t\t\t";
                // line 88
                if (($this->getAttribute($context["product"], "post_status", []) == "future")) {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t- <span class=\"post-state\">";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "future", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 91
                echo "
\t\t\t\t\t\t\t\t";
                // line 92
                if (($this->getAttribute(($context["data"] ?? null), "search", []) && ($this->getAttribute($context["product"], "post_parent", []) != 0))) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t| <span class=\"prod_parent_text\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 94
                    echo \WPML\Core\twig_escape_filter($this->env, sprintf($this->getAttribute(($context["strings"] ?? null), "parent", []), $this->getAttribute($context["product"], "parent_title", [])), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t\t</strong>

\t\t\t\t\t\t\t<div class=\"row-actions\">
\t\t\t\t\t\t\t\t<span class=\"edit\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 101
                echo $this->getAttribute($context["product"], "edit_post_link", []);
                echo "\"
\t\t\t\t\t\t\t\t\t   title=\"";
                // line 102
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "edit_item", []));
                echo "\">";
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "edit", []), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t</span> | <span class=\"view\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 104
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "view_link", []));
                echo "\"
\t\t\t\t\t\t\t\t\t   title=\"";
                // line 105
                echo \WPML\Core\twig_escape_filter($this->env, sprintf($this->getAttribute(($context["strings"] ?? null), "view_link", []), $this->getAttribute($context["product"], "post_title", [])));
                echo "\" target=\"_blank\">";
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "view", []), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"wpml-col-languages\">
\t\t\t\t\t\t\t";
                // line 112
                echo $this->getAttribute($context["product"], "translation_statuses", []);
                echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"column-categories\">
\t\t\t\t\t\t\t";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "categories_list", []));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["category"], "href", []));
                    echo "\">";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 119
                if ($this->getAttribute(($context["strings"] ?? null), "type", [])) {
                    // line 120
                    echo "\t\t\t\t\t\t\t<td class=\"column-product_type\">
\t\t\t\t\t\t\t\t<span class=\"product-type wcml-tip ";
                    // line 121
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "icon_class", []));
                    echo "\"
\t\t\t\t\t\t\t\t\t  data-tip=\"";
                    // line 122
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "icon_class", []));
                    echo "\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                }
                // line 125
                echo "
\t\t\t\t\t\t<td class=\"column-date\">
\t\t\t\t\t\t\t";
                // line 127
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["product"], "formated_date", []), "html", null, true);
                echo "

\t\t\t\t\t\t\t";
                // line 129
                if (($this->getAttribute($context["product"], "post_status", []) == "publish")) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t<br>";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "published", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 132
                    echo "\t\t\t\t\t\t\t\t<br>";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "modified", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 134
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t";
        }
        // line 138
        echo "\t\t</tbody>
\t</table>

\t<input type=\"hidden\" id=\"upd_product_nonce\" value=\"";
        // line 141
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["nonces"] ?? null), "upd_product", []));
        echo "\" />
\t<input type=\"hidden\" id=\"get_product_data_nonce\" value=\"";
        // line 142
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["nonces"] ?? null), "get_product_data", []));
        echo "\" />

\t";
        // line 144
        $this->loadTemplate("pagination.twig", "products.twig", 144)->display(twig_array_merge($context, ($context["pagination"] ?? null)));
        // line 145
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 145,  391 => 144,  386 => 142,  382 => 141,  377 => 138,  374 => 137,  366 => 134,  360 => 132,  354 => 130,  352 => 129,  347 => 127,  343 => 125,  337 => 122,  333 => 121,  330 => 120,  328 => 119,  325 => 118,  314 => 116,  310 => 115,  304 => 112,  292 => 105,  288 => 104,  281 => 102,  277 => 101,  271 => 97,  265 => 94,  262 => 93,  260 => 92,  257 => 91,  251 => 89,  249 => 88,  246 => 87,  240 => 85,  238 => 84,  235 => 83,  229 => 81,  227 => 80,  224 => 79,  218 => 77,  216 => 76,  210 => 73,  204 => 72,  201 => 71,  195 => 68,  192 => 67,  190 => 66,  187 => 65,  183 => 64,  179 => 62,  171 => 60,  168 => 59,  159 => 54,  155 => 53,  151 => 51,  146 => 50,  139 => 46,  135 => 44,  133 => 43,  122 => 35,  118 => 34,  113 => 33,  105 => 30,  101 => 28,  99 => 27,  95 => 26,  91 => 24,  80 => 21,  75 => 20,  71 => 19,  63 => 14,  59 => 13,  55 => 12,  48 => 10,  40 => 4,  38 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ request_uri|e }}\">

\t{% include 'filter.twig' with filter %}

\t<table class=\"widefat fixed wpml-list-table wp-list-table striped\" cellspacing=\"0\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\" class=\"column-thumb\">
\t\t\t\t\t\t<span class=\"wc-image wcml-tip\"
\t\t\t\t\t\t\t  data-tip=\"{{ strings.image|e }}\">{{ strings.image }}</span>
\t\t\t\t</th>
\t\t\t\t<th scope=\"col\" class=\"wpml-col-title {{ filter_urls.product_sorted }}\">
\t\t\t\t\t<a href=\"{{ filter_urls.product|e }}\">
\t\t\t\t\t\t<span>{{ strings.product }}</span>
\t\t\t\t\t\t<span class=\"sorting-indicator\"></span>
\t\t\t\t\t</a>
\t\t\t\t</th>
\t\t\t\t<th scope=\"col\" class=\"wpml-col-languages\">
\t\t\t\t\t{% for language in languages_flags %}
\t\t\t\t\t\t<span title=\"{{ language.name|e }}\">
\t\t\t\t\t\t\t<img src=\"{{ language.flag_url }}\"  alt=\"{{ language.name|e }}\"/>
\t\t\t\t\t\t</span>
\t\t\t\t\t{% endfor %}
\t\t\t\t</th>
\t\t\t\t<th scope=\"col\"
\t\t\t\t\tclass=\"column-categories\">{{ strings.categories }}</th>
\t\t\t\t{% if ( strings.type ) %}
\t\t\t\t\t<th scope=\"col\" class=\"column-product_type\">
\t\t\t\t\t\t\t<span class=\"wc-type wcml-tip\"
\t\t\t\t\t\t\t\t  data-tip=\"{{ strings.type|e }}\">{{ strings.type }}</span>
\t\t\t\t\t</th>
\t\t\t\t{% endif %}
\t\t\t\t<th scope=\"col\" id=\"date\" class=\"column-date {{ filter_urls.date_sorted }}\">
\t\t\t\t\t<a href=\"{{ filter_urls.date|e }}\">
\t\t\t\t\t\t<span>{{ strings.date }}</span>
\t\t\t\t\t\t<span class=\"sorting-indicator\"></span>
\t\t\t\t\t</a>
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>

\t\t<tbody>
\t\t\t{% if data.products is empty %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">
\t\t\t\t\t\t<strong>{{ strings.no_products }}</strong>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t{% for product in data.products %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"thumb column-thumb\">
\t\t\t\t\t\t\t<a href=\"{{ product.edit_post_link|raw }}\">
\t\t\t\t\t\t\t\t<img width=\"150\" height=\"150\" src=\"{{ product.post_thumbnail }}\" class=\"wp-post-image original-image\" data-image-id=\"thumbnail-{{ product.ID }}\" >
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t{# Conndition to check if we have thumbnail. If true the larger image appears #}
\t\t\t\t\t\t{% if product.has_image %}
\t\t\t\t\t\t\t<img id=\"thumbnail-{{ product.ID }}\" src=\"{{ product.post_thumbnail }}\" class=\"mouse-hovered\">
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<td class=\"wpml-col-title  wpml-col-title-flag\">
\t\t\t\t\t\t\t{% if product.post_parent != 0 %} &#8212; {% endif %}
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t{% if not data.slang %}
\t\t\t\t\t\t\t\t\t<span class=\"wpml-title-flag\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ product.orig_flag_url }}\"/>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t<a href=\"{{ product.edit_post_link|raw }}\" title=\"{{ product.post_title|striptags  }}\">
\t\t\t\t\t\t\t\t\t{{ product.post_title }}
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t{% if product.post_status == 'draft' %}
\t\t\t\t\t\t\t\t\t- <span class=\"post-state\">{{ strings.draft }}</span>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if product.post_status == 'private' %}
\t\t\t\t\t\t\t\t\t- <span class=\"post-state\">{{ strings.private }}</span>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if product.post_status == 'pending' %}
\t\t\t\t\t\t\t\t\t- <span class=\"post-state\">{{ strings.pending }}</span>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if product.post_status == 'future' %}
\t\t\t\t\t\t\t\t\t- <span class=\"post-state\">{{ strings.future }}</span>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if data.search and product.post_parent != 0 %}
\t\t\t\t\t\t\t\t\t| <span class=\"prod_parent_text\">
\t\t\t\t\t\t\t\t\t\t{{ strings.parent|format( product.parent_title ) }}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</strong>

\t\t\t\t\t\t\t<div class=\"row-actions\">
\t\t\t\t\t\t\t\t<span class=\"edit\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ product.edit_post_link|raw }}\"
\t\t\t\t\t\t\t\t\t   title=\"{{ strings.edit_item|e }}\">{{ strings.edit }}</a>
\t\t\t\t\t\t\t\t</span> | <span class=\"view\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ product.view_link|e }}\"
\t\t\t\t\t\t\t\t\t   title=\"{{ strings.view_link|format( product.post_title )|e }}\" target=\"_blank\">{{ strings.view }}</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"wpml-col-languages\">
\t\t\t\t\t\t\t{{ product.translation_statuses|raw  }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"column-categories\">
\t\t\t\t\t\t\t{% for category in product.categories_list %}
\t\t\t\t\t\t\t\t<a href=\"{{ category.href|e }}\">{{ category.name }}</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% if ( strings.type ) %}
\t\t\t\t\t\t\t<td class=\"column-product_type\">
\t\t\t\t\t\t\t\t<span class=\"product-type wcml-tip {{ product.icon_class|e }}\"
\t\t\t\t\t\t\t\t\t  data-tip=\"{{ product.icon_class|e }}\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<td class=\"column-date\">
\t\t\t\t\t\t\t{{ product.formated_date }}

\t\t\t\t\t\t\t{% if product.post_status == \"publish\" %}
\t\t\t\t\t\t\t\t<br>{{ strings.published }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<br>{{ strings.modified }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</tbody>
\t</table>

\t<input type=\"hidden\" id=\"upd_product_nonce\" value=\"{{ nonces.upd_product|e }}\" />
\t<input type=\"hidden\" id=\"get_product_data_nonce\" value=\"{{ nonces.get_product_data|e }}\" />

\t{% include 'pagination.twig' with pagination %}
</form>", "products.twig", "/home/lqsorgsa/public_html/wp-content/plugins/woocommerce-multilingual/templates/products-list/products.twig");
    }
}
