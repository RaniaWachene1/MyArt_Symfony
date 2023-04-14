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

/* product-detail.html.twig */
class __TwigTemplate_9fc5e005932375d614250f38594727b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product-detail.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Product Detail</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

<!--===============================================================================================-->

\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/favicon.png"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/fonts/iconic/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/fonts/linearicons-v1.0.0/icon-font.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/animate/animate.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/slick/slick.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/MagnificPopup/magnific-popup.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/css/util.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
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
\t\t\t\t\t\t<img src=\"assets1/images/icons/logo-01.png\" alt=\"IMG-LOGO\">
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Menu desktop -->
\t\t\t\t\t<div class=\"menu-desktop\">
\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Homepage 1</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"home-02.html\">Homepage 2</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"home-03.html\">Homepage 3</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"product.html\">Shop</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"label1\" data-label1=\"hot\">
\t\t\t\t\t\t\t\t<a href=\"shoping-cart.html\">Features</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t\t</li>
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
\t\t\t\t<a href=\"index.html\"><img src=\"assets1/images/icons/logo-01.png\" alt=\"IMG-LOGO\"></a>
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

\t\t\t<a href=\"product.html\" class=\"stext-109 cl8 hov-cl1 trans-04\">
\t\t\t\tMen
\t\t\t\t<i class=\"fa fa-angle-right m-l-9 m-r-10\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<span class=\"stext-109 cl4\">
\t\t\t\tLightweight Jacket
\t\t\t</span>
\t\t</div>
\t</div>
\t\t

\t<!-- Product Detail -->
\t<section class=\"sec-product-detail bg0 p-t-65 p-b-60\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">
\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">
\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t\t<div class=\"wrap-slick3-dots\"></div>
\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-01.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-02.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-03.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-03.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-03.jpg\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-6 col-lg-5 p-b-30\">
\t\t\t\t\t<div class=\"p-r-50 p-t-5 p-lr-0-lg\">
\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 js-name-detail p-b-14\">
\t\t\t\t\t\t\tLightweight Jacket
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<span class=\"mtext-106 cl2\">
\t\t\t\t\t\t\t\$58.79
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<p class=\"stext-102 cl3 p-t-23\">
\t\t\t\t\t\t\tNulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"p-t-33\">
\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t<div class=\"size-203 flex-c-m respon6\">
\t\t\t\t\t\t\t\t\tSize
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"size-204 respon6-next\">
\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 bor8 bg0\">
\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t<option>Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Size S</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Size M</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Size L</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Size XL</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t<div class=\"size-203 flex-c-m respon6\">
\t\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"size-204 respon6-next\">
\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 bor8 bg0\">
\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t<option>Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Red</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Blue</option>
\t\t\t\t\t\t\t\t\t\t\t<option>White</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Grey</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t<div class=\"size-204 flex-w flex-m respon6-next\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-num-product flex-w m-r-20 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-minus\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<input class=\"mtext-104 cl3 txt-center num-product\" type=\"number\" name=\"num-product\" value=\"1\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail\">
\t\t\t\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"flex-w flex-m p-l-100 p-t-40 respon7\">
\t\t\t\t\t\t\t<div class=\"flex-m bor9 p-r-10 m-r-11\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100\" data-tooltip=\"Add to Wishlist\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Facebook\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Twitter\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Google Plus\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"bor10 m-t-50 p-t-43 p-b-40\">
\t\t\t\t<!-- Tab01 -->
\t\t\t\t<div class=\"tab01\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#description\" role=\"tab\">Description</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#information\" role=\"tab\">Additional information</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\">Reviews (1)</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content p-t-43\">
\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"how-pos2 p-lr-15-md\">
\t\t\t\t\t\t\t\t<p class=\"stext-102 cl6\">
\t\t\t\t\t\t\t\t\tAenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"information\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t\t\t\t<ul class=\"p-lr-28 p-lr-15-sm\">
\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tWeight
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t0.79 kg
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tDimensions
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t110 x 33 x 100 cm
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tMaterials
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t60% cotton
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\tBlack, Blue, Grey, Green, Red, White
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tSize
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\tXL, L, M, S
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"p-b-30 m-lr-15-sm\">
\t\t\t\t\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-w flex-t p-b-68\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/avatar-01.jpg\" alt=\"AVATAR\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"size-207\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-b-17\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mtext-107 cl2 p-r-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAriana Grande
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-18 cl11\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"stext-102 cl6\">
\t\t\t\t\t\t\t\t\t\t\t\t\tQuod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- Add review -->
\t\t\t\t\t\t\t\t\t\t<form class=\"w-full\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mtext-108 cl2 p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t\tAdd a review
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"stext-102 cl6\">
\t\t\t\t\t\t\t\t\t\t\t\tYour email address will not be published. Required fields are marked *
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-w flex-m p-t-50 p-b-23\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 m-r-16\">
\t\t\t\t\t\t\t\t\t\t\t\t\tYour Rating
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"wrap-rating fs-18 cl11 pointer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"dis-none\" type=\"number\" name=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row p-b-25\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 p-b-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"stext-102 cl3\" for=\"review\">Your review</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10\" id=\"review\" name=\"review\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 p-b-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"stext-102 cl3\" for=\"name\">Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"size-111 bor8 stext-102 cl2 p-lr-20\" id=\"name\" type=\"text\" name=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 p-b-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"stext-102 cl3\" for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"size-111 bor8 stext-102 cl2 p-lr-20\" id=\"email\" type=\"text\" name=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10\">
\t\t\t\t\t\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15\">
\t\t\t<span class=\"stext-107 cl6 p-lr-25\">
\t\t\t\tSKU: JAK-01
\t\t\t</span>

\t\t\t<span class=\"stext-107 cl6 p-lr-25\">
\t\t\t\tCategories: Jacket, Men
\t\t\t</span>
\t\t</div>
\t</section>


\t<!-- Related Products -->
\t<section class=\"sec-relate-product bg0 p-t-45 p-b-105\">
\t\t<div class=\"container\">
\t\t\t<div class=\"p-b-45\">
\t\t\t\t<h3 class=\"ltext-106 cl5 txt-center\">
\t\t\t\t\tRelated Products
\t\t\t\t</h3>
\t\t\t</div>

\t\t\t<!-- Slide2 -->
\t\t\t<div class=\"wrap-slick2\">
\t\t\t\t<div class=\"slick2\">
\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-01.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tEsprit Ruffle Shirt
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$16.64
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-02.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tHerschel supply
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$35.31
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-03.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tOnly Check Trouser
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$25.50
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-04.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tClassic Trench Coat
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$75.00
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-05.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tFront Pocket Jumper
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$34.75
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-06.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tVintage Inspired Classic 
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$93.20
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-07.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tShirt in Stretch Cotton
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$52.66
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-08.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tPieces Metallic Printed
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$18.96
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t\t

\t<!-- Footer -->
\t<footer class=\"bg3 p-t-75 p-b-32\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tCategories
\t\t\t\t\t</h4>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tWomen
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tMen
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tShoes
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tWatches
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
\t\t\t\t\t\t<img src=\"assets1/images/icons/icon-pay-01.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"assets1/images/icons/icon-pay-02.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"assets1/images/icons/icon-pay-03.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"assets1/assets1/images/icons/icon-pay-04.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"assets1/images/icons/icon-pay-05.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<p class=\"stext-107 cl6 txt-center\">
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a> &amp; distributed by <a href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
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

\t<!-- Modal1 -->
\t<div class=\"wrap-modal1 js-modal1 p-t-60 p-b-20\">
\t\t<div class=\"overlay-modal1 js-hide-modal1\"></div>

\t\t<div class=\"container\">
\t\t\t<div class=\"bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent\">
\t\t\t\t<button class=\"how-pos3 hov3 trans-04 js-hide-modal1\">
\t\t\t\t\t<img src=\"assets1/images/icons/icon-close.png\" alt=\"CLOSE\">
\t\t\t\t</button>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">
\t\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">
\t\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t\t\t<div class=\"wrap-slick3-dots\"></div>
\t\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-01.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-02.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-03.jpg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-03.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-03.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6 col-lg-5 p-b-30\">
\t\t\t\t\t\t<div class=\"p-r-50 p-t-5 p-lr-0-lg\">
\t\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 js-name-detail p-b-14\">
\t\t\t\t\t\t\t\tLightweight Jacket
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<span class=\"mtext-106 cl2\">
\t\t\t\t\t\t\t\t\$58.79
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<p class=\"stext-102 cl3 p-t-23\">
\t\t\t\t\t\t\t\tNulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t\t<div class=\"p-t-33\">
\t\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t\t<div class=\"size-203 flex-c-m respon6\">
\t\t\t\t\t\t\t\t\t\tSize
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"size-204 respon6-next\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 bor8 bg0\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Size S</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Size M</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Size L</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Size XL</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t\t<div class=\"size-203 flex-c-m respon6\">
\t\t\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"size-204 respon6-next\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 bor8 bg0\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Red</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Blue</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>White</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Grey</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t\t<div class=\"size-204 flex-w flex-m respon6-next\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-num-product flex-w m-r-20 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<input class=\"mtext-104 cl3 txt-center num-product\" type=\"number\" name=\"num-product\" value=\"1\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail\">
\t\t\t\t\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t\t<div class=\"flex-w flex-m p-l-100 p-t-40 respon7\">
\t\t\t\t\t\t\t\t<div class=\"flex-m bor9 p-r-10 m-r-11\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100\" data-tooltip=\"Add to Wishlist\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Google Plus\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

<!--===============================================================================================-->\t
\t<script src=\"vendor/jquery/jquery-3.2.1.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/animsition/js/animsition.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/bootstrap/js/popper.js\"></script>
\t<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/select2/select2.min.js\"></script>
\t<script>
\t\t\$(\".js-select2\").each(function(){
\t\t\t\$(this).select2({
\t\t\t\tminimumResultsForSearch: 20,
\t\t\t\tdropdownParent: \$(this).next('.dropDownSelect2')
\t\t\t});
\t\t})
\t</script>
<!--===============================================================================================-->
\t<script src=\"vendor/daterangepicker/moment.min.js\"></script>
\t<script src=\"vendor/daterangepicker/daterangepicker.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/slick/slick.min.js\"></script>
\t<script src=\"js/slick-custom.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/parallax100/parallax100.js\"></script>
\t<script>
        \$('.parallax100').parallax100();
\t</script>
<!--===============================================================================================-->
\t<script src=\"vendor/MagnificPopup/jquery.magnific-popup.min.js\"></script>
\t<script>
\t\t\$('.gallery-lb').each(function() { // the containers for all your galleries
\t\t\t\$(this).magnificPopup({
\t\t        delegate: 'a', // the selector for gallery item
\t\t        type: 'image',
\t\t        gallery: {
\t\t        \tenabled:true
\t\t        },
\t\t        mainClass: 'mfp-fade'
\t\t    });
\t\t});
\t</script>
<!--===============================================================================================-->
\t<script src=\"vendor/isotope/isotope.pkgd.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/sweetalert/sweetalert.min.js\"></script>
\t<script>
\t\t\$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
\t\t\te.preventDefault();
\t\t});

\t\t\$('.js-addwish-b2').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().find('.js-name-b2').html();
\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to wishlist !\", \"success\");

\t\t\t\t\$(this).addClass('js-addedwish-b2');
\t\t\t\t\$(this).off('click');
\t\t\t});
\t\t});

\t\t\$('.js-addwish-detail').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().parent().find('.js-name-detail').html();

\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to wishlist !\", \"success\");

\t\t\t\t\$(this).addClass('js-addedwish-detail');
\t\t\t\t\$(this).off('click');
\t\t\t});
\t\t});

\t\t/*---------------------------------------------*/

\t\t\$('.js-addcart-detail').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().parent().parent().find('.js-name-detail').html();
\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to cart !\", \"success\");
\t\t\t});
\t\t});
\t
\t</script>
<!--===============================================================================================-->
\t<script src=\"vendor/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
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
\t<script src=\"js/main.js\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MyArt";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1468 => 7,  128 => 38,  124 => 37,  119 => 35,  114 => 33,  109 => 31,  104 => 29,  99 => 27,  94 => 25,  89 => 23,  84 => 21,  79 => 19,  74 => 17,  69 => 15,  64 => 13,  59 => 11,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Product Detail</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t        <title>{% block title %}MyArt{% endblock %}</title>

<!--===============================================================================================-->

\t<link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets1/images/icons/favicon.png')}}\">
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
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/daterangepicker/daterangepicker.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/slick/slick.css')}}\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/MagnificPopup/magnific-popup.css')}}\">
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
\t\t\t\t\t\t<img src=\"assets1/images/icons/logo-01.png\" alt=\"IMG-LOGO\">
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Menu desktop -->
\t\t\t\t\t<div class=\"menu-desktop\">
\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Homepage 1</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"home-02.html\">Homepage 2</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"home-03.html\">Homepage 3</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"product.html\">Shop</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"label1\" data-label1=\"hot\">
\t\t\t\t\t\t\t\t<a href=\"shoping-cart.html\">Features</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t\t</li>
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
\t\t\t\t<a href=\"index.html\"><img src=\"assets1/images/icons/logo-01.png\" alt=\"IMG-LOGO\"></a>
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

\t\t\t<a href=\"product.html\" class=\"stext-109 cl8 hov-cl1 trans-04\">
\t\t\t\tMen
\t\t\t\t<i class=\"fa fa-angle-right m-l-9 m-r-10\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<span class=\"stext-109 cl4\">
\t\t\t\tLightweight Jacket
\t\t\t</span>
\t\t</div>
\t</div>
\t\t

\t<!-- Product Detail -->
\t<section class=\"sec-product-detail bg0 p-t-65 p-b-60\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">
\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">
\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t\t<div class=\"wrap-slick3-dots\"></div>
\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-01.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-02.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-03.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-03.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-03.jpg\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-6 col-lg-5 p-b-30\">
\t\t\t\t\t<div class=\"p-r-50 p-t-5 p-lr-0-lg\">
\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 js-name-detail p-b-14\">
\t\t\t\t\t\t\tLightweight Jacket
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<span class=\"mtext-106 cl2\">
\t\t\t\t\t\t\t\$58.79
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<p class=\"stext-102 cl3 p-t-23\">
\t\t\t\t\t\t\tNulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"p-t-33\">
\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t<div class=\"size-203 flex-c-m respon6\">
\t\t\t\t\t\t\t\t\tSize
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"size-204 respon6-next\">
\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 bor8 bg0\">
\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t<option>Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Size S</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Size M</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Size L</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Size XL</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t<div class=\"size-203 flex-c-m respon6\">
\t\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"size-204 respon6-next\">
\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 bor8 bg0\">
\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t<option>Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Red</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Blue</option>
\t\t\t\t\t\t\t\t\t\t\t<option>White</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Grey</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t<div class=\"size-204 flex-w flex-m respon6-next\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-num-product flex-w m-r-20 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-minus\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<input class=\"mtext-104 cl3 txt-center num-product\" type=\"number\" name=\"num-product\" value=\"1\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail\">
\t\t\t\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"flex-w flex-m p-l-100 p-t-40 respon7\">
\t\t\t\t\t\t\t<div class=\"flex-m bor9 p-r-10 m-r-11\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100\" data-tooltip=\"Add to Wishlist\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Facebook\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Twitter\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Google Plus\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"bor10 m-t-50 p-t-43 p-b-40\">
\t\t\t\t<!-- Tab01 -->
\t\t\t\t<div class=\"tab01\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#description\" role=\"tab\">Description</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#information\" role=\"tab\">Additional information</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\">Reviews (1)</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content p-t-43\">
\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"how-pos2 p-lr-15-md\">
\t\t\t\t\t\t\t\t<p class=\"stext-102 cl6\">
\t\t\t\t\t\t\t\t\tAenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"information\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t\t\t\t<ul class=\"p-lr-28 p-lr-15-sm\">
\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tWeight
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t0.79 kg
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tDimensions
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t110 x 33 x 100 cm
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tMaterials
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t60% cotton
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\tBlack, Blue, Grey, Green, Red, White
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tSize
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\tXL, L, M, S
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"p-b-30 m-lr-15-sm\">
\t\t\t\t\t\t\t\t\t\t<!-- Review -->
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-w flex-t p-b-68\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/avatar-01.jpg\" alt=\"AVATAR\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"size-207\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-w flex-sb-m p-b-17\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mtext-107 cl2 p-r-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAriana Grande
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-18 cl11\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"stext-102 cl6\">
\t\t\t\t\t\t\t\t\t\t\t\t\tQuod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- Add review -->
\t\t\t\t\t\t\t\t\t\t<form class=\"w-full\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mtext-108 cl2 p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t\tAdd a review
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"stext-102 cl6\">
\t\t\t\t\t\t\t\t\t\t\t\tYour email address will not be published. Required fields are marked *
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-w flex-m p-t-50 p-b-23\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 m-r-16\">
\t\t\t\t\t\t\t\t\t\t\t\t\tYour Rating
\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"wrap-rating fs-18 cl11 pointer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"item-rating pointer zmdi zmdi-star-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"dis-none\" type=\"number\" name=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row p-b-25\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 p-b-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"stext-102 cl3\" for=\"review\">Your review</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10\" id=\"review\" name=\"review\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 p-b-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"stext-102 cl3\" for=\"name\">Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"size-111 bor8 stext-102 cl2 p-lr-20\" id=\"name\" type=\"text\" name=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 p-b-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"stext-102 cl3\" for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"size-111 bor8 stext-102 cl2 p-lr-20\" id=\"email\" type=\"text\" name=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10\">
\t\t\t\t\t\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15\">
\t\t\t<span class=\"stext-107 cl6 p-lr-25\">
\t\t\t\tSKU: JAK-01
\t\t\t</span>

\t\t\t<span class=\"stext-107 cl6 p-lr-25\">
\t\t\t\tCategories: Jacket, Men
\t\t\t</span>
\t\t</div>
\t</section>


\t<!-- Related Products -->
\t<section class=\"sec-relate-product bg0 p-t-45 p-b-105\">
\t\t<div class=\"container\">
\t\t\t<div class=\"p-b-45\">
\t\t\t\t<h3 class=\"ltext-106 cl5 txt-center\">
\t\t\t\t\tRelated Products
\t\t\t\t</h3>
\t\t\t</div>

\t\t\t<!-- Slide2 -->
\t\t\t<div class=\"wrap-slick2\">
\t\t\t\t<div class=\"slick2\">
\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-01.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tEsprit Ruffle Shirt
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$16.64
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-02.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tHerschel supply
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$35.31
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-03.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tOnly Check Trouser
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$25.50
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-04.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tClassic Trench Coat
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$75.00
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-05.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tFront Pocket Jumper
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$34.75
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-06.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tVintage Inspired Classic 
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$93.20
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-07.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tShirt in Stretch Cotton
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$52.66
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"item-slick2 p-l-15 p-r-15 p-t-15 p-b-15\">
\t\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-08.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t\tPieces Metallic Printed
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\t\$18.96
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"assets1/images/icons/icon-heart-01.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"assets1/images/icons/icon-heart-02.png\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t\t

\t<!-- Footer -->
\t<footer class=\"bg3 p-t-75 p-b-32\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-lg-3 p-b-50\">
\t\t\t\t\t<h4 class=\"stext-301 cl0 p-b-30\">
\t\t\t\t\t\tCategories
\t\t\t\t\t</h4>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tWomen
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tMen
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tShoes
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"p-b-10\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-107 cl7 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\tWatches
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
\t\t\t\t\t\t<img src=\"assets1/images/icons/icon-pay-01.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"assets1/images/icons/icon-pay-02.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"assets1/images/icons/icon-pay-03.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"assets1/assets1/images/icons/icon-pay-04.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"assets1/images/icons/icon-pay-05.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<p class=\"stext-107 cl6 txt-center\">
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a> &amp; distributed by <a href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
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

\t<!-- Modal1 -->
\t<div class=\"wrap-modal1 js-modal1 p-t-60 p-b-20\">
\t\t<div class=\"overlay-modal1 js-hide-modal1\"></div>

\t\t<div class=\"container\">
\t\t\t<div class=\"bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent\">
\t\t\t\t<button class=\"how-pos3 hov3 trans-04 js-hide-modal1\">
\t\t\t\t\t<img src=\"assets1/images/icons/icon-close.png\" alt=\"CLOSE\">
\t\t\t\t</button>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">
\t\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">
\t\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t\t\t<div class=\"wrap-slick3-dots\"></div>
\t\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-01.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-02.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-03.jpg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets1/images/product-detail-03.jpg\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-03.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6 col-lg-5 p-b-30\">
\t\t\t\t\t\t<div class=\"p-r-50 p-t-5 p-lr-0-lg\">
\t\t\t\t\t\t\t<h4 class=\"mtext-105 cl2 js-name-detail p-b-14\">
\t\t\t\t\t\t\t\tLightweight Jacket
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<span class=\"mtext-106 cl2\">
\t\t\t\t\t\t\t\t\$58.79
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<p class=\"stext-102 cl3 p-t-23\">
\t\t\t\t\t\t\t\tNulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t\t<div class=\"p-t-33\">
\t\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t\t<div class=\"size-203 flex-c-m respon6\">
\t\t\t\t\t\t\t\t\t\tSize
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"size-204 respon6-next\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 bor8 bg0\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Size S</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Size M</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Size L</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Size XL</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t\t<div class=\"size-203 flex-c-m respon6\">
\t\t\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"size-204 respon6-next\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rs1-select2 bor8 bg0\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"js-select2\" name=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Choose an option</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Red</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Blue</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>White</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Grey</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropDownSelect2\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"flex-w flex-r-m p-b-10\">
\t\t\t\t\t\t\t\t\t<div class=\"size-204 flex-w flex-m respon6-next\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-num-product flex-w m-r-20 m-tb-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<input class=\"mtext-104 cl3 txt-center num-product\" type=\"number\" name=\"num-product\" value=\"1\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fs-16 zmdi zmdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail\">
\t\t\t\t\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t\t<div class=\"flex-w flex-m p-l-100 p-t-40 respon7\">
\t\t\t\t\t\t\t\t<div class=\"flex-m bor9 p-r-10 m-r-11\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100\" data-tooltip=\"Add to Wishlist\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Google Plus\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

<!--===============================================================================================-->\t
\t<script src=\"vendor/jquery/jquery-3.2.1.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/animsition/js/animsition.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/bootstrap/js/popper.js\"></script>
\t<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/select2/select2.min.js\"></script>
\t<script>
\t\t\$(\".js-select2\").each(function(){
\t\t\t\$(this).select2({
\t\t\t\tminimumResultsForSearch: 20,
\t\t\t\tdropdownParent: \$(this).next('.dropDownSelect2')
\t\t\t});
\t\t})
\t</script>
<!--===============================================================================================-->
\t<script src=\"vendor/daterangepicker/moment.min.js\"></script>
\t<script src=\"vendor/daterangepicker/daterangepicker.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/slick/slick.min.js\"></script>
\t<script src=\"js/slick-custom.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/parallax100/parallax100.js\"></script>
\t<script>
        \$('.parallax100').parallax100();
\t</script>
<!--===============================================================================================-->
\t<script src=\"vendor/MagnificPopup/jquery.magnific-popup.min.js\"></script>
\t<script>
\t\t\$('.gallery-lb').each(function() { // the containers for all your galleries
\t\t\t\$(this).magnificPopup({
\t\t        delegate: 'a', // the selector for gallery item
\t\t        type: 'image',
\t\t        gallery: {
\t\t        \tenabled:true
\t\t        },
\t\t        mainClass: 'mfp-fade'
\t\t    });
\t\t});
\t</script>
<!--===============================================================================================-->
\t<script src=\"vendor/isotope/isotope.pkgd.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"vendor/sweetalert/sweetalert.min.js\"></script>
\t<script>
\t\t\$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
\t\t\te.preventDefault();
\t\t});

\t\t\$('.js-addwish-b2').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().find('.js-name-b2').html();
\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to wishlist !\", \"success\");

\t\t\t\t\$(this).addClass('js-addedwish-b2');
\t\t\t\t\$(this).off('click');
\t\t\t});
\t\t});

\t\t\$('.js-addwish-detail').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().parent().find('.js-name-detail').html();

\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to wishlist !\", \"success\");

\t\t\t\t\$(this).addClass('js-addedwish-detail');
\t\t\t\t\$(this).off('click');
\t\t\t});
\t\t});

\t\t/*---------------------------------------------*/

\t\t\$('.js-addcart-detail').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().parent().parent().find('.js-name-detail').html();
\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to cart !\", \"success\");
\t\t\t});
\t\t});
\t
\t</script>
<!--===============================================================================================-->
\t<script src=\"vendor/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
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
\t<script src=\"js/main.js\"></script>

</body>
</html>", "product-detail.html.twig", "C:\\Users\\rania\\my_project_directory\\templates\\product-detail.html.twig");
    }
}
