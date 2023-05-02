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

/* showarticlefront.html.twig */
class __TwigTemplate_73b8765971b169b5eec84a0bcb2bacf0 extends Template
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
            'article' => [$this, 'block_article'],
            'quickview' => [$this, 'block_quickview'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "showarticlefront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "showarticlefront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/Alogo.png"), "html", null, true);
        echo "\"/>
\t
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
\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t<img src=\"";
        // line 79
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
\t\t\t\t\t\t\t\t<a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_indexfront");
        echo "\">Gallery</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"shoping-cart.html\">Event</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"blog.html.twig\">Auction</a>
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
        // line 132
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
\t\t\t\t\t
\t\t\t\t\t<a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test");
        echo "\">Home</a>
\t\t\t\t\t
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_indexfront");
        echo "\">Gallery</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"shoping-cart.html\" class=\"label1 rs1\" data-label1=\"hot\">Event</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"blog.html.twig\">Auction</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"about.html\">Claim</a>
\t\t\t\t</li>

\t\t
\t\t\t</ul>
\t\t</div>

\t\t<!-- Modal Search -->
\t\t<div class=\"modal-search-header flex-c-m trans-04 js-hide-modal-search\">
\t\t\t<div class=\"container-search-header\">
\t\t\t\t<button class=\"flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search\">
\t\t\t\t\t<img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-close2.png"), "html", null, true);
        echo "\" alt=\"CLOSE\">
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
\t\t\t\t\t\t\t<img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/item-cart-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG\">
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
\t\t\t\t\t\t\t<img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/item-cart-02.jpg"), "html", null, true);
        echo "\" alt=\"IMG\">
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
\t\t\t\t\t\t\t<img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/item-cart-03.jpg"), "html", null, true);
        echo "\" alt=\"IMG\">
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

\t";
        // line 318
        $this->displayBlock('article', $context, $blocks);
        // line 322
        echo "\t\t\t<!-- Load more -->
\t\t\t<div class=\"flex-c-m flex-w w-full p-t-45\">
\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\tLoad More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t

<!-- Footer -->
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
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-01.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-02.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-03.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-04.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 469
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
";
        // line 490
        $this->displayBlock('quickview', $context, $blocks);
        // line 645
        echo "<!--===============================================================================================-->\t
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/slick-custom.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/parallax100/parallax100.js"), "html", null, true);
        echo "\"></script>
\t<script>
        \$('.parallax100').parallax100();
\t</script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/MagnificPopup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
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
\t<script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
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
\t<script src=\"";
        // line 728
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
\t<script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 318
    public function block_article($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        // line 319
        echo "\t<!-- Product -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 490
    public function block_quickview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "quickview"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "quickview"));

        // line 491
        echo "\t<!-- Modal1 -->
\t<div class=\"wrap-modal1 js-modal1 p-t-60 p-b-20\">
\t\t<div class=\"overlay-modal1 js-hide-modal1\"></div>

\t\t<div class=\"container\">
\t\t\t<div class=\"bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent\">
\t\t\t\t<button class=\"how-pos3 hov3 trans-04 js-hide-modal1\">
\t\t\t\t\t<img src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-close.png"), "html", null, true);
        echo "\" alt=\"CLOSE\">
\t\t\t\t</button>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">
\t\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">
\t\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t\t\t<div class=\"wrap-slick3-dots\"></div>
\t\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-01.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-02.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-02.jpg"), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-03.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-03.jpg"), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "showarticlefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  901 => 531,  896 => 529,  885 => 521,  880 => 519,  869 => 511,  864 => 509,  850 => 498,  841 => 491,  831 => 490,  819 => 319,  809 => 318,  790 => 4,  776 => 745,  756 => 728,  715 => 690,  710 => 688,  693 => 674,  685 => 669,  680 => 667,  676 => 666,  671 => 664,  667 => 663,  654 => 653,  649 => 651,  645 => 650,  640 => 648,  635 => 646,  632 => 645,  630 => 490,  606 => 469,  599 => 465,  592 => 461,  585 => 457,  578 => 453,  445 => 322,  443 => 318,  406 => 284,  387 => 268,  368 => 252,  333 => 220,  307 => 197,  299 => 192,  236 => 132,  192 => 91,  177 => 79,  133 => 38,  129 => 37,  124 => 35,  119 => 33,  114 => 31,  109 => 29,  104 => 27,  99 => 25,  94 => 23,  89 => 21,  84 => 19,  79 => 17,  74 => 15,  69 => 13,  63 => 10,  58 => 8,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t        <title>{% block title %}MyArt{% endblock %}</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/bootstrap/css/bootstrap.min.css')}}\">

<link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets1/images/icons/Alogo.png')}}\"/>
\t
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
\t\t\t\t<a href=\"#\" class=\"logo\">
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
\t\t\t\t\t\t\t\t<a href=\"{{path('app_articles_indexfront')}}\">Gallery</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"shoping-cart.html\">Event</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"blog.html.twig\">Auction</a>
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
\t\t\t\t\t
\t\t\t\t\t<a href=\"{{path('app_test')}}\">Home</a>
\t\t\t\t\t
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_articles_indexfront')}}\">Gallery</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"shoping-cart.html\" class=\"label1 rs1\" data-label1=\"hot\">Event</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"blog.html.twig\">Auction</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"about.html\">Claim</a>
\t\t\t\t</li>

\t\t
\t\t\t</ul>
\t\t</div>

\t\t<!-- Modal Search -->
\t\t<div class=\"modal-search-header flex-c-m trans-04 js-hide-modal-search\">
\t\t\t<div class=\"container-search-header\">
\t\t\t\t<button class=\"flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search\">
\t\t\t\t\t<img src=\"{{asset('assets1/images/icons/icon-close2.png')}}\" alt=\"CLOSE\">
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
\t\t\t\t\t\t\t<img src=\"{{asset('assets1/images/item-cart-01.jpg')}}\" alt=\"IMG\">
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
\t\t\t\t\t\t\t<img src=\"{{asset('assets1/images/item-cart-02.jpg')}}\" alt=\"IMG\">
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
\t\t\t\t\t\t\t<img src=\"{{asset('assets1/images/item-cart-03.jpg')}}\" alt=\"IMG\">
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

\t{% block article %}
\t<!-- Product -->

{% endblock %}
\t\t\t<!-- Load more -->
\t\t\t<div class=\"flex-c-m flex-w w-full p-t-45\">
\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\tLoad More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t

<!-- Footer -->
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
{% block quickview %}
\t<!-- Modal1 -->
\t<div class=\"wrap-modal1 js-modal1 p-t-60 p-b-20\">
\t\t<div class=\"overlay-modal1 js-hide-modal1\"></div>

\t\t<div class=\"container\">
\t\t\t<div class=\"bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent\">
\t\t\t\t<button class=\"how-pos3 hov3 trans-04 js-hide-modal1\">
\t\t\t\t\t<img src=\"{{asset('assets1/images/icons/icon-close.png')}}\" alt=\"CLOSE\">
\t\t\t\t</button>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">
\t\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">
\t\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t\t\t<div class=\"wrap-slick3-dots\"></div>
\t\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"{{asset('assets1/images/product-detail-01.jpg')}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets1/images/product-detail-01.jpg')}}\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"{{asset('assets1/images/product-detail-02.jpg')}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets1/images/product-detail-02.jpg')}}\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"{{asset('assets1/images/product-detail-03.jpg')}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets1/images/product-detail-03.jpg')}}\" alt=\"IMG-PRODUCT\">

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
{% endblock %}
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
\t<script src=\"{{asset('assets1/vendor/daterangepicker/moment.min.js')}}\"></script>
\t<script src=\"{{asset('assets1/vendor/daterangepicker/daterangepicker.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/slick/slick.min.js')}}\"></script>
\t<script src=\"{{asset('assets1/js/slick-custom.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/parallax100/parallax100.js')}}\"></script>
\t<script>
        \$('.parallax100').parallax100();
\t</script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}\"></script>
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
\t<script src=\"{{asset('assets1/vendor/isotope/isotope.pkgd.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/sweetalert/sweetalert.min.js')}}\"></script>
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
\t<script src=\"{{asset('assets1/js/main.js')}}\"></script>

</body>
</html>", "showarticlefront.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PidevRania1.0\\templates\\showarticlefront.html.twig");
    }
}
