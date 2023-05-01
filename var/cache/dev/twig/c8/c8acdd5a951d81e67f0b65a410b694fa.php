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

/* articles/cart.html.twig */
class __TwigTemplate_34201990b8419df2d60422e19d283bc3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'cart' => [$this, 'block_cart'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/cart.html.twig"));

        $this->parent = $this->loadTemplate("shoping-cart.html.twig", "articles/cart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart"));

        // line 4
        echo "\t<form class=\"bg0 p-t-75 p-b-85\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-xl-7 m-lr-auto m-b-50\">
\t\t\t\t\t<div class=\"m-l-25 m-r--38 m-lr-0-xl\">
\t\t\t\t\t\t";
        // line 9
        $this->displayBlock('shoppingcart', $context, $blocks);
        // line 65
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
          ";
        // line 67
        $this->displayBlock('cartTotal', $context, $blocks);
        // line 152
        echo "\t\t\t</div>
\t\t</div>
\t</form>
\t\t
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_shoppingcart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoppingcart"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shoppingcart"));

        // line 10
        echo "\t\t\t\t\t\t<div class=\"wrap-table-shopping-cart\">

\t\t\t\t\t\t\t<table class=\"table-shopping-cart\">
\t\t\t\t\t\t\t\t<tr class=\"table_head\">
\t\t\t\t\t\t\t\t\t<th class=\"column-1\">Product</th>
\t\t\t\t\t\t\t\t\t<th class=\"column-2\"></th>
\t\t\t\t\t\t\t\t\t<th class=\"column-3\">Price</th>
\t\t\t\t\t\t\t\t\t<th class=\"column-4\">Quantity</th>
\t\t\t\t\t\t\t\t\t<th class=\"column-5\">Total</th>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<tr class=\"table_row\">
\t\t\t\t\t\t\t\t\t<td class=\"column-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"how-itemcart1\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/item-cart-05.jpg\" alt=\"IMG\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"column-2\">Lightweight Jacket</td>
\t\t\t\t\t\t\t\t\t<td class=\"column-3\">\$ 16.00</td>
\t\t\t\t\t\t\t\t\t<td class=\"column-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-num-product flex-w m-l-auto m-r-0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<input class=\"mtext-104 cl3 txt-center num-product\" type=\"number\" name=\"num-product2\" value=\"1\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"column-5\">\$ 16.00</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm\">
\t\t\t\t\t\t\t<div class=\"flex-w flex-m m-r-20 m-tb-5\">
\t\t\t\t\t\t\t\t<input class=\"stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5\" type=\"text\" name=\"coupon\" placeholder=\"Coupon Code\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5\">
\t\t\t\t\t\t\t\t\tApply coupon
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10\">
\t\t\t\t\t\t\t\tUpdate Cart
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_cartTotal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cartTotal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cartTotal"));

        // line 68
        echo "\t\t\t\t<div class=\"col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50\">
\t\t\t\t\t<div class=\"bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm\">
\t\t\t\t\t\t<h4 class=\"mtext-109 cl2 p-b-30\">
\t\t\t\t\t\t\tCart Totals
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<div class=\"flex-w flex-t bor12 p-b-13\">
\t\t\t\t\t\t\t<div class=\"size-208\">
\t\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\t\tSubtotal:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"size-209\">
\t\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t\t\$79.65
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex-w flex-t bor12 p-t-15 p-b-30\">
\t\t\t\t\t\t\t<div class=\"size-208 w-full-ssm\">
\t\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\t\tShipping:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"size-209 p-r-18 p-r-0-sm w-full-ssm\">
\t\t\t\t\t\t\t\t<p class=\"stext-111 cl6 p-t-2\">
\t\t\t\t\t\t\t\t\tThere are no shipping methods available. Please double check your address, or contact us if you need any help.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"p-t-15\">
\t\t\t\t\t\t\t\t\t<span class=\"stext-112 cl8\">
\t\t\t\t\t\t\t\t\t\tCalculate Shipping
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9\">
\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t<option>Select a country...</option>
\t\t\t\t\t\t\t\t\t\t\t<option>USA</option>
\t\t\t\t\t\t\t\t\t\t\t<option>UK</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"bor8 bg0 m-b-12\">
\t\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl8 plh3 size-111 p-lr-15\" type=\"text\" name=\"state\" placeholder=\"State /  country\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"bor8 bg0 m-b-22\">
\t\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl8 plh3 size-111 p-lr-15\" type=\"text\" name=\"postcode\" placeholder=\"Postcode / Zip\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"flex-w\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer\">
\t\t\t\t\t\t\t\t\t\t\tUpdate Totals
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex-w flex-t p-t-27 p-b-33\">
\t\t\t\t\t\t\t<div class=\"size-208\">
\t\t\t\t\t\t\t\t<span class=\"mtext-101 cl2\">
\t\t\t\t\t\t\t\t\tTotal:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"size-209 p-t-1\">
\t\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t\t\$79.65
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer\">
\t\t\t\t\t\t\tProceed to Checkout
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "articles/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 68,  173 => 67,  109 => 10,  99 => 9,  85 => 152,  83 => 67,  79 => 65,  77 => 9,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'shoping-cart.html.twig' %}

{% block cart %}
\t<form class=\"bg0 p-t-75 p-b-85\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-xl-7 m-lr-auto m-b-50\">
\t\t\t\t\t<div class=\"m-l-25 m-r--38 m-lr-0-xl\">
\t\t\t\t\t\t{% block shoppingcart %}
\t\t\t\t\t\t<div class=\"wrap-table-shopping-cart\">

\t\t\t\t\t\t\t<table class=\"table-shopping-cart\">
\t\t\t\t\t\t\t\t<tr class=\"table_head\">
\t\t\t\t\t\t\t\t\t<th class=\"column-1\">Product</th>
\t\t\t\t\t\t\t\t\t<th class=\"column-2\"></th>
\t\t\t\t\t\t\t\t\t<th class=\"column-3\">Price</th>
\t\t\t\t\t\t\t\t\t<th class=\"column-4\">Quantity</th>
\t\t\t\t\t\t\t\t\t<th class=\"column-5\">Total</th>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<tr class=\"table_row\">
\t\t\t\t\t\t\t\t\t<td class=\"column-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"how-itemcart1\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/item-cart-05.jpg\" alt=\"IMG\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"column-2\">Lightweight Jacket</td>
\t\t\t\t\t\t\t\t\t<td class=\"column-3\">\$ 16.00</td>
\t\t\t\t\t\t\t\t\t<td class=\"column-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-num-product flex-w m-l-auto m-r-0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<input class=\"mtext-104 cl3 txt-center num-product\" type=\"number\" name=\"num-product2\" value=\"1\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"column-5\">\$ 16.00</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm\">
\t\t\t\t\t\t\t<div class=\"flex-w flex-m m-r-20 m-tb-5\">
\t\t\t\t\t\t\t\t<input class=\"stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5\" type=\"text\" name=\"coupon\" placeholder=\"Coupon Code\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5\">
\t\t\t\t\t\t\t\t\tApply coupon
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10\">
\t\t\t\t\t\t\t\tUpdate Cart
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t</div>
          {% block cartTotal %}
\t\t\t\t<div class=\"col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50\">
\t\t\t\t\t<div class=\"bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm\">
\t\t\t\t\t\t<h4 class=\"mtext-109 cl2 p-b-30\">
\t\t\t\t\t\t\tCart Totals
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<div class=\"flex-w flex-t bor12 p-b-13\">
\t\t\t\t\t\t\t<div class=\"size-208\">
\t\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\t\tSubtotal:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"size-209\">
\t\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t\t\$79.65
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex-w flex-t bor12 p-t-15 p-b-30\">
\t\t\t\t\t\t\t<div class=\"size-208 w-full-ssm\">
\t\t\t\t\t\t\t\t<span class=\"stext-110 cl2\">
\t\t\t\t\t\t\t\t\tShipping:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"size-209 p-r-18 p-r-0-sm w-full-ssm\">
\t\t\t\t\t\t\t\t<p class=\"stext-111 cl6 p-t-2\">
\t\t\t\t\t\t\t\t\tThere are no shipping methods available. Please double check your address, or contact us if you need any help.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"p-t-15\">
\t\t\t\t\t\t\t\t\t<span class=\"stext-112 cl8\">
\t\t\t\t\t\t\t\t\t\tCalculate Shipping
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9\">
\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t<option>Select a country...</option>
\t\t\t\t\t\t\t\t\t\t\t<option>USA</option>
\t\t\t\t\t\t\t\t\t\t\t<option>UK</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"bor8 bg0 m-b-12\">
\t\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl8 plh3 size-111 p-lr-15\" type=\"text\" name=\"state\" placeholder=\"State /  country\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"bor8 bg0 m-b-22\">
\t\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl8 plh3 size-111 p-lr-15\" type=\"text\" name=\"postcode\" placeholder=\"Postcode / Zip\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"flex-w\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer\">
\t\t\t\t\t\t\t\t\t\t\tUpdate Totals
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex-w flex-t p-t-27 p-b-33\">
\t\t\t\t\t\t\t<div class=\"size-208\">
\t\t\t\t\t\t\t\t<span class=\"mtext-101 cl2\">
\t\t\t\t\t\t\t\t\tTotal:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"size-209 p-t-1\">
\t\t\t\t\t\t\t\t<span class=\"mtext-110 cl2\">
\t\t\t\t\t\t\t\t\t\$79.65
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer\">
\t\t\t\t\t\t\tProceed to Checkout
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>
\t</form>
\t\t
\t{% endblock %}", "articles/cart.html.twig", "C:\\Users\\rania\\Downloads\\PidevRania1.0\\templates\\articles\\cart.html.twig");
    }
}
