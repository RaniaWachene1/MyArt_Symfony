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

/* blog.html.twig */
class __TwigTemplate_78438779dfb0ef5d56aae1dcb80a2a8d extends Template
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
            'galeries' => [$this, 'block_galeries'],
            'latest' => [$this, 'block_latest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">

\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/Alogo.png"), "html", null, true);
        echo "\"/>
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/fonts/iconic/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/fonts/linearicons-v1.0.0/icon-font.min.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/animate/animate.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/slick/slick.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/MagnificPopup/magnific-popup.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/css/util.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/css/main.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
</head>
<body class=\"animsition\">
\t
\t<!-- Header -->
\t<header>
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

\t\t\t<div class=\"wrap-menu-desktop\">
\t\t\t\t<nav class=\"limiter-menu-desktop container\">

\t\t\t\t\t<!-- Logo desktop -->
\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/myartlogo.png"), "html", null, true);
        echo "\" alt=\"IMG-LOGO\">
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Menu desktop -->
\t\t\t\t\t<div class=\"menu-desktop\">
\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t<li class=\"active-menu\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_indexfront");
        echo "\">Gallery</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"shoping-cart.html\">Event</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"label1\" data-label1=\"New\">
\t\t\t\t\t\t\t\t<a href=\"blog.html.twig\">Auction</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"about.html\">Claim</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Icon header -->
\t\t\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m\">
\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart\" data-notify=\"2\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<a href=\"#\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti\" data-notify=\"0\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>

\t\t<!-- Header Mobile -->
\t\t<div class=\"wrap-header-mobile\">
\t\t\t<!-- Logo moblie -->
\t\t\t<div class=\"logo-mobile\">
\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 133
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
\t\t\t\t\t<a href=\"blog.html.twig\">Blog</a>
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
\t\t\t\t\t<img src=\"";
        // line 229
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
\t\t\t\t\t\t\t<img src=\"images/item-cart-01.jpg\" alt=\"IMG\">
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
\t\t\t\t\t\t\t<img src=\"images/item-cart-02.jpg\" alt=\"IMG\">
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
\t\t\t\t\t\t\t<img src=\"images/item-cart-03.jpg\" alt=\"IMG\">
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





\t<!-- Content page -->

\t<section class=\"bg0 p-t-52 p-b-20\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 336
        $this->displayBlock('article', $context, $blocks);
        // line 440
        echo "\t\t\t\t<div class=\"col-md-4 col-lg-3 p-b-80\">
\t\t\t\t\t<div class=\"side-menu\">
\t\t\t\t\t\t<div class=\"bor17 of-hidden pos-relative\">
\t\t\t\t\t\t\t<input class=\"stext-103 cl2 plh4 size-116 p-l-28 p-r-55\" type=\"text\" name=\"search\" placeholder=\"Search\">

\t\t\t\t\t\t\t<button class=\"flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 449
        $this->displayBlock('galeries', $context, $blocks);
        // line 488
        echo "\t\t\t\t\t\t";
        $this->displayBlock('latest', $context, $blocks);
        // line 545
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t
\t
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
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-01.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-02.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-03.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-04.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-05.png\" alt=\"ICON-PAY\">
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


<!--===============================================================================================-->
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 717
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
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/slick-custom.js"), "html", null, true);
        echo "\"></script>
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/parallax100/parallax100.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$('.parallax100').parallax100();
\t</script>
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/MagnificPopup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$('.gallery-lb').each(function() { // the containers for all your galleries
\t\t\t\$(this).magnificPopup({
\t\t\t\tdelegate: 'a', // the selector for gallery item
\t\t\t\ttype: 'image',
\t\t\t\tgallery: {
\t\t\t\t\tenabled:true
\t\t\t\t},
\t\t\t\tmainClass: 'mfp-fade'
\t\t\t});
\t\t});
\t</script>
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$('.js-addwish-b2').on('click', function(e){
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

\t</script>
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 792
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
\t<!--===============================================================================================-->
\t<script src=\"";
        // line 809
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/main.js"), "html", null, true);
        echo "\"></script>
\t<!-- Flashy depends on jQuery -->
\t<script src=\"//code.jquery.com/jquery.js\"></script>
\t<!-- Load Flashy default JavaScript -->
\t<script src=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
\t<!-- Include Flashy default partial -->
\t";
        // line 815
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

    // line 336
    public function block_article($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        // line 337
        echo "\t\t\t\t<div class=\"col-md-8 col-lg-9 p-b-80\">
\t\t\t\t\t<div class=\"p-r-45 p-r-0-lg\">
\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"wrap-pic-w how-pos5-parent\">
\t\t\t\t\t\t\t<img src=\"images/blog-04.jpg\" alt=\"IMG-BLOG\">

\t\t\t\t\t\t\t<div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t22
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-32\">
\t\t\t\t\t\t\t<span class=\"flex-w flex-m stext-111 cl2 p-b-19\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<span class=\"cl4\">By</span> Admin
\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t22 Jan, 2018
\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tStreetStyle, Fashion, Couple
\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t8 Comments
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<h4 class=\"ltext-109 cl2 p-b-28\">
\t\t\t\t\t\t\t\t8 Inspiring Ways to Wear Dresses in the Winter
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<p class=\"stext-117 cl6 p-b-26\">
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<p class=\"stext-117 cl6 p-b-26\">
\t\t\t\t\t\t\t\tPraesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex-w flex-t p-t-16\">
\t\t\t\t\t\t\t<span class=\"size-216 stext-116 cl8 p-t-4\">
\t\t\t\t\t\t\t\tTags
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<div class=\"flex-w size-217\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tStreetstyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tCrafts
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"p-t-40\">
\t\t\t\t\t\t\t<h5 class=\"mtext-113 cl2 p-b-12\">
\t\t\t\t\t\t\t\tLeave a Comment
\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t<p class=\"stext-107 cl6 p-b-40\">
\t\t\t\t\t\t\t\tYour email address will not be published. Required fields are marked *
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"bor19 m-b-20\">
\t\t\t\t\t\t\t\t\t<textarea class=\"stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15\" name=\"cmt\" placeholder=\"Comment...\"></textarea>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"bor19 size-218 m-b-20\">
\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-lr-18\" type=\"text\" name=\"name\" placeholder=\"Name *\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"bor19 size-218 m-b-20\">
\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-lr-18\" type=\"text\" name=\"email\" placeholder=\"Email *\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"bor19 size-218 m-b-30\">
\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-lr-18\" type=\"text\" name=\"web\" placeholder=\"Website\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tPost Comment
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 449
    public function block_galeries($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "galeries"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "galeries"));

        // line 450
        echo "\t\t\t\t\t\t<div class=\"p-t-55\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-33\">
\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tFashion
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tBeauty
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tStreet Style
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tLife Style
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tDIY & Crafts
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 488
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "latest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "latest"));

        // line 489
        echo "\t\t\t\t\t\t<div class=\"p-t-65\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-33\">
\t\t\t\t\t\t\t\tFeatured Products
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-01.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tWhite Shirt With Pleat Detail Back
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$19.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-02.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tConverse All Star Hi Black Canvas
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$39.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-03.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tNixon Porter Leather Watch In Tan
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$17.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1010 => 489,  1000 => 488,  953 => 450,  943 => 449,  831 => 337,  821 => 336,  802 => 5,  788 => 815,  783 => 813,  776 => 809,  756 => 792,  715 => 754,  710 => 752,  693 => 738,  685 => 733,  680 => 731,  676 => 730,  671 => 728,  667 => 727,  654 => 717,  649 => 715,  645 => 714,  640 => 712,  635 => 710,  468 => 545,  465 => 488,  463 => 449,  452 => 440,  450 => 336,  340 => 229,  241 => 133,  197 => 92,  182 => 80,  138 => 39,  134 => 38,  129 => 36,  124 => 34,  119 => 32,  114 => 30,  109 => 28,  104 => 26,  99 => 24,  94 => 22,  89 => 20,  84 => 18,  79 => 16,  74 => 14,  69 => 12,  64 => 10,  60 => 9,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

\t<title>{% block title %}MyArt{% endblock %}</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/bootstrap/css/bootstrap.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">

\t<link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets1/images/icons/Alogo.png')}}\"/>
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/bootstrap/css/bootstrap.min.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/fonts/iconic/css/material-design-iconic-font.min.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/fonts/linearicons-v1.0.0/icon-font.min.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/animate/animate.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/css-hamburgers/hamburgers.min.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/animsition/css/animsition.min.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/select2/select2.min.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/daterangepicker/daterangepicker.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/slick/slick.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/MagnificPopup/magnific-popup.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/vendor/perfect-scrollbar/perfect-scrollbar.css')}}\">
\t<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/css/util.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets1/css/main.css')}}\">
<!--===============================================================================================-->
</head>
<body class=\"animsition\">
\t
\t<!-- Header -->
\t<header>
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

\t\t\t<div class=\"wrap-menu-desktop\">
\t\t\t\t<nav class=\"limiter-menu-desktop container\">

\t\t\t\t\t<!-- Logo desktop -->
\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/icons/myartlogo.png')}}\" alt=\"IMG-LOGO\">
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Menu desktop -->
\t\t\t\t\t<div class=\"menu-desktop\">
\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t<li class=\"active-menu\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_articles_indexfront')}}\">Gallery</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"shoping-cart.html\">Event</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"label1\" data-label1=\"New\">
\t\t\t\t\t\t\t\t<a href=\"blog.html.twig\">Auction</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"about.html\">Claim</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Icon header -->
\t\t\t\t\t<div class=\"wrap-icon-header flex-w flex-r-m\">
\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart\" data-notify=\"2\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-shopping-cart\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<a href=\"#\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti\" data-notify=\"0\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-favorite-outline\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>

\t\t<!-- Header Mobile -->
\t\t<div class=\"wrap-header-mobile\">
\t\t\t<!-- Logo moblie -->
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
\t\t\t\t\t<a href=\"blog.html.twig\">Blog</a>
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
\t\t\t\t\t\t\t<img src=\"images/item-cart-01.jpg\" alt=\"IMG\">
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
\t\t\t\t\t\t\t<img src=\"images/item-cart-02.jpg\" alt=\"IMG\">
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
\t\t\t\t\t\t\t<img src=\"images/item-cart-03.jpg\" alt=\"IMG\">
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





\t<!-- Content page -->

\t<section class=\"bg0 p-t-52 p-b-20\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% block article %}
\t\t\t\t<div class=\"col-md-8 col-lg-9 p-b-80\">
\t\t\t\t\t<div class=\"p-r-45 p-r-0-lg\">
\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"wrap-pic-w how-pos5-parent\">
\t\t\t\t\t\t\t<img src=\"images/blog-04.jpg\" alt=\"IMG-BLOG\">

\t\t\t\t\t\t\t<div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t22
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"p-t-32\">
\t\t\t\t\t\t\t<span class=\"flex-w flex-m stext-111 cl2 p-b-19\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<span class=\"cl4\">By</span> Admin
\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t22 Jan, 2018
\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tStreetStyle, Fashion, Couple
\t\t\t\t\t\t\t\t\t<span class=\"cl12 m-l-4 m-r-6\">|</span>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t8 Comments
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<h4 class=\"ltext-109 cl2 p-b-28\">
\t\t\t\t\t\t\t\t8 Inspiring Ways to Wear Dresses in the Winter
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<p class=\"stext-117 cl6 p-b-26\">
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<p class=\"stext-117 cl6 p-b-26\">
\t\t\t\t\t\t\t\tPraesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex-w flex-t p-t-16\">
\t\t\t\t\t\t\t<span class=\"size-216 stext-116 cl8 p-t-4\">
\t\t\t\t\t\t\t\tTags
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<div class=\"flex-w size-217\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tStreetstyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tCrafts
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"p-t-40\">
\t\t\t\t\t\t\t<h5 class=\"mtext-113 cl2 p-b-12\">
\t\t\t\t\t\t\t\tLeave a Comment
\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t<p class=\"stext-107 cl6 p-b-40\">
\t\t\t\t\t\t\t\tYour email address will not be published. Required fields are marked *
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"bor19 m-b-20\">
\t\t\t\t\t\t\t\t\t<textarea class=\"stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15\" name=\"cmt\" placeholder=\"Comment...\"></textarea>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"bor19 size-218 m-b-20\">
\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-lr-18\" type=\"text\" name=\"name\" placeholder=\"Name *\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"bor19 size-218 m-b-20\">
\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-lr-18\" type=\"text\" name=\"email\" placeholder=\"Email *\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"bor19 size-218 m-b-30\">
\t\t\t\t\t\t\t\t\t<input class=\"stext-111 cl2 plh3 size-116 p-lr-18\" type=\"text\" name=\"web\" placeholder=\"Website\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<button class=\"flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tPost Comment
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
{% endblock %}
\t\t\t\t<div class=\"col-md-4 col-lg-3 p-b-80\">
\t\t\t\t\t<div class=\"side-menu\">
\t\t\t\t\t\t<div class=\"bor17 of-hidden pos-relative\">
\t\t\t\t\t\t\t<input class=\"stext-103 cl2 plh4 size-116 p-l-28 p-r-55\" type=\"text\" name=\"search\" placeholder=\"Search\">

\t\t\t\t\t\t\t<button class=\"flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% block galeries %}
\t\t\t\t\t\t<div class=\"p-t-55\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-33\">
\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tFashion
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tBeauty
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tStreet Style
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tLife Style
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"bor18\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
\t\t\t\t\t\t\t\t\t\tDIY & Crafts
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
{% endblock %}
\t\t\t\t\t\t{% block latest %}
\t\t\t\t\t\t<div class=\"p-t-65\">
\t\t\t\t\t\t\t<h4 class=\"mtext-112 cl2 p-b-33\">
\t\t\t\t\t\t\t\tFeatured Products
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-01.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tWhite Shirt With Pleat Detail Back
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$19.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-02.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tConverse All Star Hi Black Canvas
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$39.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-30\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/product-min-03.jpg\" alt=\"PRODUCT\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"size-215 flex-col-t p-t-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stext-116 cl8 hov-cl1 trans-04\">
\t\t\t\t\t\t\t\t\t\t\tNixon Porter Leather Watch In Tan
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t\$17.00
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
{% endblock %}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t
\t
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
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-01.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-02.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-03.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-04.png\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"images/icons/icon-pay-05.png\" alt=\"ICON-PAY\">
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


<!--===============================================================================================-->
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/jquery/jquery-3.2.1.min.js')}}\"></script>
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/animsition/js/animsition.min.js')}}\"></script>
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/bootstrap/js/popper.js')}}\"></script>
\t<script src=\"{{asset('assets1/vendor/bootstrap/js/bootstrap.min.js')}}\"></script>
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/select2/select2.min.js')}}\"></script>
\t<script>
\t\t\$(\".js-select2\").each(function(){
\t\t\t\$(this).select2({
\t\t\t\tminimumResultsForSearch: 20,
\t\t\t\tdropdownParent: \$(this).next('.dropDownSelect2')
\t\t\t});
\t\t})
\t</script>
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/daterangepicker/moment.min.js')}}\"></script>
\t<script src=\"{{asset('assets1/vendor/daterangepicker/daterangepicker.js')}}\"></script>
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/slick/slick.min.js')}}\"></script>
\t<script src=\"{{asset('assets1/js/slick-custom.js')}}\"></script>
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/parallax100/parallax100.js')}}\"></script>
\t<script>
\t\t\$('.parallax100').parallax100();
\t</script>
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}\"></script>
\t<script>
\t\t\$('.gallery-lb').each(function() { // the containers for all your galleries
\t\t\t\$(this).magnificPopup({
\t\t\t\tdelegate: 'a', // the selector for gallery item
\t\t\t\ttype: 'image',
\t\t\t\tgallery: {
\t\t\t\t\tenabled:true
\t\t\t\t},
\t\t\t\tmainClass: 'mfp-fade'
\t\t\t});
\t\t});
\t</script>
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/isotope/isotope.pkgd.min.js')}}\"></script>
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/vendor/sweetalert/sweetalert.min.js')}}\"></script>
\t<script>
\t\t\$('.js-addwish-b2').on('click', function(e){
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

\t</script>
\t<!--===============================================================================================-->
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
\t<!--===============================================================================================-->
\t<script src=\"{{asset('assets1/js/main.js')}}\"></script>
\t<!-- Flashy depends on jQuery -->
\t<script src=\"//code.jquery.com/jquery.js\"></script>
\t<!-- Load Flashy default JavaScript -->
\t<script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
\t<!-- Include Flashy default partial -->
\t{{ include('@MercurySeriesFlashy/flashy.html.twig') }}

</body>
</html>", "blog.html.twig", "C:\\Users\\rania\\Downloads\\PidevRania1.0\\templates\\blog.html.twig");
    }
}
