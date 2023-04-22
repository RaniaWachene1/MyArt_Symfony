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

/* panier/index.html.twig */
class __TwigTemplate_f0a59e85e971ff4b631016aa878bf421 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'shoppingcart' => [$this, 'block_shoppingcart'],
            'cartTotal' => [$this, 'block_cartTotal'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "shoping-cart.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("shoping-cart.html.twig", "panier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_shoppingcart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoppingcart"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoppingcart"));

        // line 4
        echo "    <div class=\"wrap-table-shopping-cart\">
    <table class=\"table-shopping-cart\">
        <thead>
            <tr class=\"table_head\">
                <th class=\"column-1\">Article</th>
                <th class=\"column-2\">Quantity</th>
                <th class=\"column-3\">Total</th>
                <th class=\"column-4\">Update Cart</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 15, $this->source); })()), "idArticle", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 16
            echo "            <tr>
                <td class=\"column-1\">
                    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
            echo "\" width=\"80\" height=\"80\" alt=\"IMG\">
                </td>
                <td class=\"column-2\">
                    <div class=\"wrap-num-product flex-w m-l-auto m-r-0\" >
                        <div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
                            <i class=\"fs-16 zmdi zmdi-minus\"></i>
                        </div>
                        <input type=\"number\"
                               name=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "quantite", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "full_name", [], "any", false, false, false, 26), "html", null, true);
            echo "\"
                               class=\"mtext-104 cl3 txt-center num-product\"
                               value=\"";
            // line 28
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantite", [], "any", false, true, false, 28), "vars", [], "any", false, true, false, 28), "value", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantite", [], "any", false, true, false, 28), "vars", [], "any", false, true, false, 28), "value", [], "any", false, false, false, 28), 1)) : (1)), "html", null, true);
            echo "\"
                               min=\"1\"
                               max=\"100\">
                        <div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
                            <i class=\"fs-16 zmdi zmdi-plus\"></i>
                        </div>
                    </div>
                </td>
                <td class=\"column-3\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 36, $this->source); })()), "total", [], "any", false, false, false, 36), "html", null, true);
            echo " TND</td>
                <td class=\"column-4\">
                    <button id=\"update-cart-button\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail\">
                        Update Cart
                    </button></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "

        </tbody>
    </table>
    </div>
    <div class=\"flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm\">
        <div class=\"flex-w flex-m m-r-20 m-tb-5\">
            <input class=\"stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5\" type=\"text\" name=\"coupon\" placeholder=\"Coupon Code\">

            <div class=\"flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5\">
                Apply coupon
            </div>
        </div>

        <div class=\"flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10\">


        </div>

    </div>
    <script>
        // Get a reference to the \"Update Cart\" button
        var updateCartButton = document.getElementById(\"update-cart-button\");

        // Add a click event listener to the button
        updateCartButton.addEventListener(\"click\", function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Get the quantity value from the input field
            var quantity = document.querySelector(\".num-product\").value;

            // Send an AJAX request to update the cart data
            var xhr = new XMLHttpRequest();
            xhr.open(\"POST\", \"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_update");
        echo "\", true);
            xhr.setRequestHeader(\"Content-type\", \"application/x-www-form-urlencoded\");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Update the cart total and subtotal values
                    var data = JSON.parse(xhr.responseText);
                    document.querySelector(\".subtotal-value\").innerHTML = data.subtotal;
                    document.querySelector(\".total-value\").innerHTML = data.total;
                }
            };
            xhr.send(\"quantite=\" + quantity);
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_cartTotal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cartTotal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cartTotal"));

        // line 92
        echo "    ";
        $context["total"] = 0;
        // line 93
        echo "        ";
        $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 93, $this->source); })()) + twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 93, $this->source); })()), "total", [], "any", false, false, false, 93));
        // line 94
        echo "    <div class=\"col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50\">
        <div class=\"bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm\">
            <h4 class=\"mtext-109 cl2 p-b-30\">
                Cart Totals
            </h4>

            <div class=\"flex-w flex-t bor12 p-b-13\">
                <div class=\"size-208\">
\t\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\t\tSubtotal:
\t\t\t\t\t\t\t\t</span>
                </div>

                <div class=\"size-209\">
\t\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "TND
\t\t\t\t\t\t\t\t</span>
                </div>
            </div>

            <div class=\"flex-w flex-t bor12 p-t-15 p-b-30\">


                <div class=\"size-209 p-r-18 p-r-0-sm w-full-ssm\">


                    <div class=\"p-t-15\">




                        <div class=\"flex-w\">
                            <div class=\"flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer\">
                                Update Totals
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"flex-w flex-t p-t-27 p-b-33\">
                <div class=\"size-208\">
\t\t\t\t\t\t\t\t<span class=\"mtext-101 cl2\">
\t\t\t\t\t\t\t\t\tTotal:
\t\t\t\t\t\t\t\t</span>
                </div>

                <div class=\"size-209 p-t-1\">
\t\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t\t";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "TND
\t\t\t\t\t\t\t\t</span>
                </div>
            </div>

            <button class=\"flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer\">
                Proceed to Checkout
            </button>
        </div>
    </div>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 144,  223 => 109,  206 => 94,  203 => 93,  200 => 92,  190 => 91,  166 => 77,  130 => 43,  117 => 36,  106 => 28,  101 => 26,  90 => 18,  86 => 16,  82 => 15,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'shoping-cart.html.twig' %}

{% block shoppingcart %}
    <div class=\"wrap-table-shopping-cart\">
    <table class=\"table-shopping-cart\">
        <thead>
            <tr class=\"table_head\">
                <th class=\"column-1\">Article</th>
                <th class=\"column-2\">Quantity</th>
                <th class=\"column-3\">Total</th>
                <th class=\"column-4\">Update Cart</th>
            </tr>
        </thead>
        <tbody>
        {% for article in panier.idArticle %}
            <tr>
                <td class=\"column-1\">
                    <img src=\"{{vich_uploader_asset(article,'fileFile') }}\" width=\"80\" height=\"80\" alt=\"IMG\">
                </td>
                <td class=\"column-2\">
                    <div class=\"wrap-num-product flex-w m-l-auto m-r-0\" >
                        <div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
                            <i class=\"fs-16 zmdi zmdi-minus\"></i>
                        </div>
                        <input type=\"number\"
                               name=\"{{ form.quantite.vars.full_name }}\"
                               class=\"mtext-104 cl3 txt-center num-product\"
                               value=\"{{ form.quantite.vars.value|default(1) }}\"
                               min=\"1\"
                               max=\"100\">
                        <div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
                            <i class=\"fs-16 zmdi zmdi-plus\"></i>
                        </div>
                    </div>
                </td>
                <td class=\"column-3\">{{ panier.total }} TND</td>
                <td class=\"column-4\">
                    <button id=\"update-cart-button\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail\">
                        Update Cart
                    </button></td>
            </tr>
        {% endfor %}


        </tbody>
    </table>
    </div>
    <div class=\"flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm\">
        <div class=\"flex-w flex-m m-r-20 m-tb-5\">
            <input class=\"stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5\" type=\"text\" name=\"coupon\" placeholder=\"Coupon Code\">

            <div class=\"flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5\">
                Apply coupon
            </div>
        </div>

        <div class=\"flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10\">


        </div>

    </div>
    <script>
        // Get a reference to the \"Update Cart\" button
        var updateCartButton = document.getElementById(\"update-cart-button\");

        // Add a click event listener to the button
        updateCartButton.addEventListener(\"click\", function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Get the quantity value from the input field
            var quantity = document.querySelector(\".num-product\").value;

            // Send an AJAX request to update the cart data
            var xhr = new XMLHttpRequest();
            xhr.open(\"POST\", \"{{ path('app_panier_update') }}\", true);
            xhr.setRequestHeader(\"Content-type\", \"application/x-www-form-urlencoded\");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Update the cart total and subtotal values
                    var data = JSON.parse(xhr.responseText);
                    document.querySelector(\".subtotal-value\").innerHTML = data.subtotal;
                    document.querySelector(\".total-value\").innerHTML = data.total;
                }
            };
            xhr.send(\"quantite=\" + quantity);
        });
    </script>
{% endblock %}
{% block cartTotal %}
    {% set total = 0 %}
        {% set total = total + panier.total %}
    <div class=\"col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50\">
        <div class=\"bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm\">
            <h4 class=\"mtext-109 cl2 p-b-30\">
                Cart Totals
            </h4>

            <div class=\"flex-w flex-t bor12 p-b-13\">
                <div class=\"size-208\">
\t\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\t\tSubtotal:
\t\t\t\t\t\t\t\t</span>
                </div>

                <div class=\"size-209\">
\t\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
{{ total }}TND
\t\t\t\t\t\t\t\t</span>
                </div>
            </div>

            <div class=\"flex-w flex-t bor12 p-t-15 p-b-30\">


                <div class=\"size-209 p-r-18 p-r-0-sm w-full-ssm\">


                    <div class=\"p-t-15\">




                        <div class=\"flex-w\">
                            <div class=\"flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer\">
                                Update Totals
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"flex-w flex-t p-t-27 p-b-33\">
                <div class=\"size-208\">
\t\t\t\t\t\t\t\t<span class=\"mtext-101 cl2\">
\t\t\t\t\t\t\t\t\tTotal:
\t\t\t\t\t\t\t\t</span>
                </div>

                <div class=\"size-209 p-t-1\">
\t\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t\t{{ total }}TND
\t\t\t\t\t\t\t\t</span>
                </div>
            </div>

            <button class=\"flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer\">
                Proceed to Checkout
            </button>
        </div>
    </div>




{% endblock %}", "panier/index.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PidevRania1.0\\templates\\panier\\index.html.twig");
    }
}
