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

/* shoping-cart.html.twig */
class __TwigTemplate_8eafb4396b1ac59fb22dbd9f44997784 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cart' => [$this, 'block_cart'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shoping-cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shoping-cart.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Shoping Cart</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->\t
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/Alogo.png"), "html", null, true);
        echo "\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/fonts/iconic/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/fonts/linearicons-v1.0.0/icon-font.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/animate/animate.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/css/util.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/css/main.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
</head>
<body class=\"animsition\">
\t
\t<!-- Header -->
\t<header class=\"header-v4\">
\t\t<!-- Header desktop -->
\t\t<div class=\"container-menu-desktop\">
\t\t\t<!-- Topbar -->
\t\t\t<div class=\"top-bar\">
\t\t\t\t<div class=\"content-topbar flex-sb-m h-full container\">
\t\t\t\t\t<div class=\"left-top-bar\">
\t\t\t\t\t\tFree shipping for standard order over \$100
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"right-top-bar flex-w h-full\">
\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\tHelp & FAQs
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\tEN
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"wrap-menu-desktop how-shadow1\">
\t\t\t\t<nav class=\"limiter-menu-desktop container\">
\t\t\t\t\t
\t\t\t\t\t<!-- Logo desktop -->\t\t
\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/myartlogo.png"), "html", null, true);
        echo "\" alt=\"IMG-LOGO\">
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Menu desktop -->
\t\t\t\t\t<div class=\"menu-desktop\">
\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t<li class=\"active-menu\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"product.html\">Gallery</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"shoping-cart.html\">Event</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"blog.html\">Auction</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"about.html\">Claim</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>\t

\t\t\t\t\t<!-- Icon header -->
\t\t\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m\">
\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart\" data-notify=\"2\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<a href=\"#\" class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti\" data-notify=\"0\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>\t
\t\t</div>

\t\t<!-- Header Mobile -->
\t\t<div class=\"wrap-header-mobile\">
\t\t\t<!-- Logo moblie -->\t\t
\t\t\t<div class=\"logo-mobile\">
\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/myartlogo.png"), "html", null, true);
        echo "\" alt=\"IMG-LOGO\"></a>
\t\t\t</div>

\t\t\t<!-- Icon header -->
\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m m-r-15\">
\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search\">
\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart\" data-notify=\"2\">
\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t</div>

\t\t\t\t<a href=\"#\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti\" data-notify=\"0\">
\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Button show menu -->
\t\t\t<div class=\"btn-show-menu-mobile hamburger hamburger--squeeze\">
\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>


\t\t<!-- Menu Mobile -->
\t\t<div class=\"menu-mobile\">
\t\t\t<ul class=\"topbar-mobile\">
\t\t\t\t<li>
\t\t\t\t\t<div class=\"left-top-bar\">
\t\t\t\t\t\tFree shipping for standard order over \$100
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<div class=\"right-top-bar flex-w h-full\">
\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\tHelp & FAQs
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\tEN
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<ul class=\"main-menu-m\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t<ul class=\"sub-menu-m\">
\t\t\t\t\t\t<li><a href=\"index.html\">Homepage 1</a></li>
\t\t\t\t\t\t<li><a href=\"home-02.html\">Homepage 2</a></li>
\t\t\t\t\t\t<li><a href=\"home-03.html\">Homepage 3</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<span class=\"arrow-main-menu-m\">
\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t</span>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"product.html\">Shop</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"shoping-cart.html\" class=\"label1 rs1\" data-label1=\"hot\">Features</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<!-- Modal Search -->
\t\t<div class=\"modal-search-header flex-c-m trans-04 js-hide-modal-search\">
\t\t\t<div class=\"container-search-header\">
\t\t\t\t<button class=\"flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search\">
\t\t\t\t\t<img src=\"assets1/images/icons/icon-close2.png\" alt=\"CLOSE\">
\t\t\t\t</button>

\t\t\t\t<form class=\"wrap-search-header flex-w p-l-15\">
\t\t\t\t\t<button class=\"flex-c-m trans-04\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<input class=\"plh3\" type=\"text\" name=\"search\" placeholder=\"Search...\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!-- Cart -->
\t<div class=\"wrap-header-cart js-panel-cart\">
\t\t<div class=\"s-full js-hide-cart\"></div>

\t\t<div class=\"header-cart flex-col-l p-l-65 p-r-25\">
\t\t\t<div class=\"header-cart-title flex-w flex-sb-m p-b-8\">
\t\t\t\t<span class=\"mtext-103 cl2\">
\t\t\t\t\tYour Cart
\t\t\t\t</span>

\t\t\t\t<div class=\"fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart\">
\t\t\t\t\t<i class=\"zmdi zmdi-close\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"header-cart-content flex-w js-pscroll\">
\t\t\t\t<ul class=\"header-cart-wrapitem w-full\">
\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t<img src=\"assets1/images/item-cart-01.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tWhite Shirt Pleat
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">
\t\t\t\t\t\t\t\t1 x \$19.00
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t<img src=\"assets1/images/item-cart-02.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tConverse All Star
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">
\t\t\t\t\t\t\t\t1 x \$39.00
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t<img src=\"assets1/images/item-cart-03.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tNixon Porter Leather
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">
\t\t\t\t\t\t\t\t1 x \$17.00
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t<div class=\"header-cart-total w-full p-tb-40\">
\t\t\t\t\t\tTotal: \$75.00
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"header-cart-buttons flex-w w-full\">
\t\t\t\t\t\t<a href=\"shoping-cart.html\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10\">
\t\t\t\t\t\t\tView Cart
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"shoping-cart.html\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10\">
\t\t\t\t\t\t\tCheck Out
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- breadcrumb -->
\t<div class=\"container\">
\t\t<div class=\"bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg\">
\t\t\t<a href=\"index.html\" class=\"stext-109 cl8 hov-cl1 trans-04\">
\t\t\t\tHome
\t\t\t\t<i class=\"fa fa-angle-right m-l-9 m-r-10\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<span class=\"stext-109 cl4\">
\t\t\t\tShoping Cart
\t\t\t</span>
\t\t</div>
\t</div>
\t\t

\t<!-- Shoping Cart -->
\t";
        // line 334
        $this->displayBlock('cart', $context, $blocks);
        // line 484
        echo "\t\t

\t<!-- Footer -->
\t\t<footer class=\"bg3 p-t-75 p-b-32\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tCategories
\t\t\t\t\t</h4>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tPainting
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tSculpture
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tPhotography
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tDrawing
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tDigital
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tHelp
\t\t\t\t\t</h4>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tTrack Order
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tReturns 
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tShipping
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tFAQs
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tGET IN TOUCH
\t\t\t\t\t</h4>

\t\t\t\t\t<p class=\"stext-107 cl7 size-201\">
\t\t\t\t\t\tAny questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"p-t-27\">
\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t<i class=\"fa fa-pinterest-p\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tNewsletter
\t\t\t\t\t</h4>

\t\t\t\t\t<form>
\t\t\t\t\t\t<div class=\"wrap-input1 w-full p-b-4\">
\t\t\t\t\t\t\t<input class=\"input1 bg-none plh1 stext-107 cl7\" type=\"text\" name=\"email\" placeholder=\"email@example.com\">
\t\t\t\t\t\t\t<div class=\"focus-input1 trans-04\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-18\">
\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"p-t-40\">
\t\t\t\t<div class=\"flex-c-m flex-w p-b-18\">
\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-01.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-02.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-03.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-04.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-05.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<p class=\"stext-107 cl6 txt-center\">
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by TheDevelopers
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</footer>


\t<!-- Back to top -->
\t<div class=\"btn-back-to-top\" id=\"myBtn\">
\t\t<span class=\"symbol-btn-back-to-top\">
\t\t\t<i class=\"zmdi zmdi-chevron-up\"></i>
\t\t</span>
\t</div>

<!--===============================================================================================-->\t
\t<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(\".js-select2\").each(function(){
\t\t\t\$(this).select2({
\t\t\t\tminimumResultsForSearch: 20,
\t\t\t\tdropdownParent: \$(this).next('.dropDownSelect2')
\t\t\t});
\t\t})
\t</script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/MagnificPopup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$('.js-pscroll').each(function(){
\t\t\t\$(this).css('position','relative');
\t\t\t\$(this).css('overflow','hidden');
\t\t\tvar ps = new PerfectScrollbar(this, {
\t\t\t\twheelSpeed: 1,
\t\t\t\tscrollingThreshold: 1000,
\t\t\t\twheelPropagation: false,
\t\t\t});

\t\t\t\$(window).on('resize', function(){
\t\t\t\tps.update();
\t\t\t})
\t\t});
\t</script>
<!--===============================================================================================-->
<script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 334
    public function block_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart"));

        // line 335
        echo "\t<form class=\"bg0 p-t-75 p-b-85\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-xl-7 m-lr-auto m-b-50\">
\t\t\t\t\t<div class=\"m-l-25 m-r--38 m-lr-0-xl\">
\t\t\t\t\t
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
\t\t\t\t\t</div>
\t\t\t\t</div>

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
\t\t\t</div>
\t\t</div>
\t</form>
\t\t
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "shoping-cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  682 => 335,  672 => 334,  659 => 682,  639 => 665,  634 => 663,  621 => 653,  616 => 651,  612 => 650,  607 => 648,  602 => 646,  576 => 623,  569 => 619,  562 => 615,  555 => 611,  548 => 607,  423 => 484,  421 => 334,  207 => 123,  151 => 70,  107 => 29,  103 => 28,  98 => 26,  93 => 24,  88 => 22,  83 => 20,  78 => 18,  73 => 16,  68 => 14,  63 => 12,  58 => 10,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Shoping Cart</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->\t
\t<link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets1/images/icons/Alogo.png')}}\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/bootstrap/css/bootstrap.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/fonts/iconic/css/material-design-iconic-font.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/fonts/linearicons-v1.0.0/icon-font.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/animate/animate.css')}}\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/css-hamburgers/hamburgers.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/animsition/css/animsition.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/select2/select2.min.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/perfect-scrollbar/perfect-scrollbar.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/css/util.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/css/main.css')}}\">
<!--===============================================================================================-->
</head>
<body class=\"animsition\">
\t
\t<!-- Header -->
\t<header class=\"header-v4\">
\t\t<!-- Header desktop -->
\t\t<div class=\"container-menu-desktop\">
\t\t\t<!-- Topbar -->
\t\t\t<div class=\"top-bar\">
\t\t\t\t<div class=\"content-topbar flex-sb-m h-full container\">
\t\t\t\t\t<div class=\"left-top-bar\">
\t\t\t\t\t\tFree shipping for standard order over \$100
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"right-top-bar flex-w h-full\">
\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\tHelp & FAQs
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\tEN
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m trans-04 p-lr-25\">
\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"wrap-menu-desktop how-shadow1\">
\t\t\t\t<nav class=\"limiter-menu-desktop container\">
\t\t\t\t\t
\t\t\t\t\t<!-- Logo desktop -->\t\t
\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/icons/myartlogo.png')}}\" alt=\"IMG-LOGO\">
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Menu desktop -->
\t\t\t\t\t<div class=\"menu-desktop\">
\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t<li class=\"active-menu\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"product.html\">Gallery</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"shoping-cart.html\">Event</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"blog.html\">Auction</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"about.html\">Claim</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>\t

\t\t\t\t\t<!-- Icon header -->
\t\t\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m\">
\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart\" data-notify=\"2\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<a href=\"#\" class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti\" data-notify=\"0\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>\t
\t\t</div>

\t\t<!-- Header Mobile -->
\t\t<div class=\"wrap-header-mobile\">
\t\t\t<!-- Logo moblie -->\t\t
\t\t\t<div class=\"logo-mobile\">
\t\t\t\t<a href=\"index.html\"><img src=\"{{asset('assets1/images/icons/myartlogo.png')}}\" alt=\"IMG-LOGO\"></a>
\t\t\t</div>

\t\t\t<!-- Icon header -->
\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m m-r-15\">
\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search\">
\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart\" data-notify=\"2\">
\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t</div>

\t\t\t\t<a href=\"#\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti\" data-notify=\"0\">
\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Button show menu -->
\t\t\t<div class=\"btn-show-menu-mobile hamburger hamburger--squeeze\">
\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>


\t\t<!-- Menu Mobile -->
\t\t<div class=\"menu-mobile\">
\t\t\t<ul class=\"topbar-mobile\">
\t\t\t\t<li>
\t\t\t\t\t<div class=\"left-top-bar\">
\t\t\t\t\t\tFree shipping for standard order over \$100
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<div class=\"right-top-bar flex-w h-full\">
\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\tHelp & FAQs
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\tEN
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m p-lr-10 trans-04\">
\t\t\t\t\t\t\tUSD
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<ul class=\"main-menu-m\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t<ul class=\"sub-menu-m\">
\t\t\t\t\t\t<li><a href=\"index.html\">Homepage 1</a></li>
\t\t\t\t\t\t<li><a href=\"home-02.html\">Homepage 2</a></li>
\t\t\t\t\t\t<li><a href=\"home-03.html\">Homepage 3</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<span class=\"arrow-main-menu-m\">
\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t</span>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"product.html\">Shop</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"shoping-cart.html\" class=\"label1 rs1\" data-label1=\"hot\">Features</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<!-- Modal Search -->
\t\t<div class=\"modal-search-header flex-c-m trans-04 js-hide-modal-search\">
\t\t\t<div class=\"container-search-header\">
\t\t\t\t<button class=\"flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search\">
\t\t\t\t\t<img src=\"assets1/images/icons/icon-close2.png\" alt=\"CLOSE\">
\t\t\t\t</button>

\t\t\t\t<form class=\"wrap-search-header flex-w p-l-15\">
\t\t\t\t\t<button class=\"flex-c-m trans-04\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<input class=\"plh3\" type=\"text\" name=\"search\" placeholder=\"Search...\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!-- Cart -->
\t<div class=\"wrap-header-cart js-panel-cart\">
\t\t<div class=\"s-full js-hide-cart\"></div>

\t\t<div class=\"header-cart flex-col-l p-l-65 p-r-25\">
\t\t\t<div class=\"header-cart-title flex-w flex-sb-m p-b-8\">
\t\t\t\t<span class=\"mtext-103 cl2\">
\t\t\t\t\tYour Cart
\t\t\t\t</span>

\t\t\t\t<div class=\"fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart\">
\t\t\t\t\t<i class=\"zmdi zmdi-close\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"header-cart-content flex-w js-pscroll\">
\t\t\t\t<ul class=\"header-cart-wrapitem w-full\">
\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t<img src=\"assets1/images/item-cart-01.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tWhite Shirt Pleat
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">
\t\t\t\t\t\t\t\t1 x \$19.00
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t<img src=\"assets1/images/item-cart-02.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tConverse All Star
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">
\t\t\t\t\t\t\t\t1 x \$39.00
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"header-cart-item flex-w flex-t m-b-12\">
\t\t\t\t\t\t<div class=\"header-cart-item-img\">
\t\t\t\t\t\t\t<img src=\"assets1/images/item-cart-03.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header-cart-item-txt p-t-8\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tNixon Porter Leather
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"header-cart-item-info\">
\t\t\t\t\t\t\t\t1 x \$17.00
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t<div class=\"header-cart-total w-full p-tb-40\">
\t\t\t\t\t\tTotal: \$75.00
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"header-cart-buttons flex-w w-full\">
\t\t\t\t\t\t<a href=\"shoping-cart.html\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10\">
\t\t\t\t\t\t\tView Cart
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"shoping-cart.html\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10\">
\t\t\t\t\t\t\tCheck Out
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- breadcrumb -->
\t<div class=\"container\">
\t\t<div class=\"bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg\">
\t\t\t<a href=\"index.html\" class=\"stext-109 cl8 hov-cl1 trans-04\">
\t\t\t\tHome
\t\t\t\t<i class=\"fa fa-angle-right m-l-9 m-r-10\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<span class=\"stext-109 cl4\">
\t\t\t\tShoping Cart
\t\t\t</span>
\t\t</div>
\t</div>
\t\t

\t<!-- Shoping Cart -->
\t{% block cart %}
\t<form class=\"bg0 p-t-75 p-b-85\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-xl-7 m-lr-auto m-b-50\">
\t\t\t\t\t<div class=\"m-l-25 m-r--38 m-lr-0-xl\">
\t\t\t\t\t
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
\t\t\t\t\t</div>
\t\t\t\t</div>

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
\t\t\t</div>
\t\t</div>
\t</form>
\t\t
\t{% endblock %}
\t\t

\t<!-- Footer -->
\t\t<footer class=\"bg3 p-t-75 p-b-32\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tCategories
\t\t\t\t\t</h4>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tPainting
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tSculpture
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tPhotography
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tDrawing
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tDigital
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tHelp
\t\t\t\t\t</h4>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tTrack Order
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tReturns 
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tShipping
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tFAQs
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tGET IN TOUCH
\t\t\t\t\t</h4>

\t\t\t\t\t<p class=\"stext-107 cl7 size-201\">
\t\t\t\t\t\tAny questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"p-t-27\">
\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"#\" class=\"fs-18 cl7 hov-cl1 trans-04 m-r-16\">
\t\t\t\t\t\t\t<i class=\"fa fa-pinterest-p\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tNewsletter
\t\t\t\t\t</h4>

\t\t\t\t\t<form>
\t\t\t\t\t\t<div class=\"wrap-input1 w-full p-b-4\">
\t\t\t\t\t\t\t<input class=\"input1 bg-none plh1 stext-107 cl7\" type=\"text\" name=\"email\" placeholder=\"email@example.com\">
\t\t\t\t\t\t\t<div class=\"focus-input1 trans-04\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-18\">
\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"p-t-40\">
\t\t\t\t<div class=\"flex-c-m flex-w p-b-18\">
\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/icons/icon-pay-01.png')}}\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/icons/icon-pay-02.png')}}\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/icons/icon-pay-03.png')}}\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/icons/icon-pay-04.png')}}\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/icons/icon-pay-05.png')}}\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<p class=\"stext-107 cl6 txt-center\">
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by TheDevelopers
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</footer>


\t<!-- Back to top -->
\t<div class=\"btn-back-to-top\" id=\"myBtn\">
\t\t<span class=\"symbol-btn-back-to-top\">
\t\t\t<i class=\"zmdi zmdi-chevron-up\"></i>
\t\t</span>
\t</div>

<!--===============================================================================================-->\t
\t<script src=\"{{asset('assets1/vendor/jquery/jquery-3.2.1.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/animsition/js/animsition.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/bootstrap/js/popper.js')}}\"></script>
\t<script src=\"{{asset('assets1/vendor/bootstrap/js/bootstrap.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/select2/select2.min.js')}}\"></script>
\t<script>
\t\t\$(\".js-select2\").each(function(){
\t\t\t\$(this).select2({
\t\t\t\tminimumResultsForSearch: 20,
\t\t\t\tdropdownParent: \$(this).next('.dropDownSelect2')
\t\t\t});
\t\t})
\t</script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}\"></script>
\t<script>
\t\t\$('.js-pscroll').each(function(){
\t\t\t\$(this).css('position','relative');
\t\t\t\$(this).css('overflow','hidden');
\t\t\tvar ps = new PerfectScrollbar(this, {
\t\t\t\twheelSpeed: 1,
\t\t\t\tscrollingThreshold: 1000,
\t\t\t\twheelPropagation: false,
\t\t\t});

\t\t\t\$(window).on('resize', function(){
\t\t\t\tps.update();
\t\t\t})
\t\t});
\t</script>
<!--===============================================================================================-->
<script src=\"{{asset('assets1/js/main.js')}}\"></script>
</body>
</html>", "shoping-cart.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PidevRania\\templates\\shoping-cart.html.twig");
    }
}
