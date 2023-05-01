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

/* front.html.twig */
class __TwigTemplate_29e3498649c8cc64c6d0de8327e02df7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

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
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">

<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/Alogo.png"), "html", null, true);
        echo "\"/>
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
\t\t\t\t\t
\t\t\t\t\t<!-- Logo desktop -->\t\t
\t\t\t\t\t<a href=\"#\" class=\"logo\">
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

\t\t\t\t\t\t\t<li class=\"label1\" data-label1=\"New\">
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

\t\t\t\t\t\t<a href=\"#\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti\" data-notify=\"0\">
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
\t\t\t\t\t<img src=\"";
        // line 228
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
        // line 260
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
        // line 276
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
        // line 292
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

\t\t

\t<!-- Slider -->
\t<section class=\"section-slide\">
\t\t<div class=\"wrap-slick1\">
\t\t\t<div class=\"slick1\">
\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(assets1/images/2.png);\">
\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"fadeInDown\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tInvite Art to your life
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"fadeInUp\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tGalleries
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(assets1/images/3.png);\">
\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rollIn\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tExclusive events, priceless memories.
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"lightSpeedIn\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tEvents
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"slideInUp\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tView Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(assets1/images/6.png);\">
\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateInDownLeft\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tOne of a kind
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateInUpRight\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tAuctions
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tBid Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(assets1/images/7.png);\">
\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t</section>


\t<!-- Banner -->
\t<div class=\"sec-banner bg0 p-t-80 p-b-50\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/gal2.png"), "html", null, true);
        echo "\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"";
        // line 421
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_indexfront");
        echo "\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\" color=\"white\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\" color=\"white\">
\t\t\t\t\t\t\t\t\tGallery
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\t2023
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/en.png"), "html", null, true);
        echo "\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"product.html\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tEvent
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\t2023
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tView Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/au.png"), "html", null, true);
        echo "\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"product.html\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tAuction
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\t2023
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tBid Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- Product -->
\t<section class=\"bg0 p-t-23 p-b-140\">
\t\t<div class=\"container\">
\t\t\t<div class=\"p-b-10\">
\t\t\t\t<h3 class=\"ltext-103 cl5\">
\t\t\t\t\t Overview
\t\t\t\t</h3>
\t\t\t</div>

\t\t\t<div class=\"flex-w flex-sb-m p-b-52\">
\t\t\t\t<div class=\"flex-w flex-l-m filter-tope-group m-tb-10\">
\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1\" data-filter=\"*\">
\t\t\t\t\t\tAll
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".women\">
\t\t\t\t\t\tPainting
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".men\">
\t\t\t\t\t\tSculpture
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".bag\">
\t\t\t\t\t\tPhotography
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".shoes\">
\t\t\t\t\t\tDrawing
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".watches\">
\t\t\t\t\t\tDigital
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<div class=\"flex-w flex-c-m m-tb-10\">
\t\t\t\t\t<div class=\"flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter\">
\t\t\t\t\t\t<i class=\"icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list\"></i>
\t\t\t\t\t\t<i class=\"icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none\"></i>
\t\t\t\t\t\t Filter
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search\">
\t\t\t\t\t\t<i class=\"icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search\"></i>
\t\t\t\t\t\t<i class=\"icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none\"></i>
\t\t\t\t\t\tSearch
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Search product -->
\t\t\t\t<div class=\"dis-none panel-search w-full p-t-10 p-b-15\">
\t\t\t\t\t<div class=\"bor8 dis-flex p-l-15\">
\t\t\t\t\t\t<button class=\"size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<input class=\"mtext-107 cl2 size-114 plh2 p-r-15\" type=\"text\" name=\"search-product\" placeholder=\"Search\">
\t\t\t\t\t</div>\t
\t\t\t\t</div>

\t\t\t\t<!-- Filter -->
\t\t\t\t<div class=\"dis-none panel-filter w-full p-t-10\">
\t\t\t\t\t<div class=\"wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm\">
\t\t\t\t\t\t<div class=\"filter-col1 p-r-15 p-b-27\">
\t\t\t\t\t\t\t<div class=\"mtext-102 cl2 p-b-15\">
\t\t\t\t\t\t\t\tSort By
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tDefault
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tPopularity
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tAverage rating
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
\t\t\t\t\t\t\t\t\t\tNewness
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tPrice: Low to High
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tPrice: High to Low
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-col2 p-r-15 p-b-27\">
\t\t\t\t\t\t\t<div class=\"mtext-102 cl2 p-b-15\">
\t\t\t\t\t\t\t\tPrice
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
\t\t\t\t\t\t\t\t\t\tAll
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$0.00 - \$50.00
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$50.00 - \$100.00
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$100.00 - \$150.00
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$150.00 - \$200.00
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$200.00+
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-col3 p-r-15 p-b-27\">
\t\t\t\t\t\t\t<div class=\"mtext-102 cl2 p-b-15\">
\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #222;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tBlack
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #4272d7;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
\t\t\t\t\t\t\t\t\t\tBlue
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #b3b3b3;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tGrey
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #00ad5f;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tGreen
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #fa4251;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tRed
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #aaa;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tWhite
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-col4 p-b-27\">
\t\t\t\t\t\t\t<div class=\"mtext-102 cl2 p-b-15\">
\t\t\t\t\t\t\t\tTags
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"flex-w p-t-4 m-r--5\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tFashion
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tLifestyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tDenim
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tStreetstyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tCrafts
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row isotope-grid\">
\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women\">
\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t<img src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\tEsprit Ruffle Shirt
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\$16.64
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-heart-01.png"), "html", null, true);
        echo "\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-heart-02.png"), "html", null, true);
        echo "\" alt=\"ICON\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t
\t\t\t</div>

\t\t\t<!-- Load more -->
\t\t\t<div class=\"flex-c-m flex-w w-full p-t-45\">
\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\tLoad More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</section>


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
        // line 913
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-01.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 917
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-02.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 921
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-03.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 925
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-pay-04.png"), "html", null, true);
        echo "\" alt=\"ICON-PAY\">
\t\t\t\t\t</a>

\t\t\t\t\t<a href=\"#\" class=\"m-all-1\">
\t\t\t\t\t\t<img src=\"";
        // line 929
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

\t<!-- Modal1 -->
\t<div class=\"wrap-modal1 js-modal1 p-t-60 p-b-20\">
\t\t<div class=\"overlay-modal1 js-hide-modal1\"></div>

\t\t<div class=\"container\">
\t\t\t<div class=\"bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent\">
\t\t\t\t<button class=\"how-pos3 hov3 trans-04 js-hide-modal1\">
\t\t\t\t\t<img src=\"";
        // line 958
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
        // line 969
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-01.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 971
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"";
        // line 979
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-02.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 981
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-02.jpg"), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-02.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-expand\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-03.jpg')}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 991
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-03.jpg"), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"";
        // line 993
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/product-detail-03.jpg"), "html", null, true);
        echo "\">
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
\t<script src=\"";
        // line 1106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 1108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 1110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 1111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 1113
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
        // line 1123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 1126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 1127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/slick-custom.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 1129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/parallax100/parallax100.js"), "html", null, true);
        echo "\"></script>
\t<script>
        \$('.parallax100').parallax100();
\t</script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 1134
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
        // line 1148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/vendor/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 1150
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
\t
\t</script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 1188
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
        // line 1205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/main.js"), "html", null, true);
        echo "\"></script>
\t   <!-- Flashy depends on jQuery -->
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"";
        // line 1209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
    <!-- Include Flashy default partial -->
    ";
        // line 1211
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "

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

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1450 => 4,  1436 => 1211,  1431 => 1209,  1424 => 1205,  1404 => 1188,  1363 => 1150,  1358 => 1148,  1341 => 1134,  1333 => 1129,  1328 => 1127,  1324 => 1126,  1319 => 1124,  1315 => 1123,  1302 => 1113,  1297 => 1111,  1293 => 1110,  1288 => 1108,  1283 => 1106,  1167 => 993,  1162 => 991,  1149 => 981,  1144 => 979,  1133 => 971,  1128 => 969,  1114 => 958,  1082 => 929,  1075 => 925,  1068 => 921,  1061 => 917,  1054 => 913,  910 => 772,  906 => 771,  883 => 751,  598 => 469,  570 => 444,  544 => 421,  539 => 419,  409 => 292,  390 => 276,  371 => 260,  336 => 228,  237 => 132,  193 => 91,  178 => 79,  134 => 38,  130 => 37,  125 => 35,  120 => 33,  115 => 31,  110 => 29,  105 => 27,  100 => 25,  95 => 23,  90 => 21,  85 => 19,  80 => 17,  75 => 15,  70 => 13,  65 => 11,  60 => 9,  56 => 8,  49 => 4,  44 => 1,);
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
<link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">

<link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets1/images/icons/Alogo.png')}}\"/>
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
\t\t\t\t\t\t\t\t<a href=\"{{path('app_articles_indexfront')}}\">Gallery</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"shoping-cart.html\">Event</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"label1\" data-label1=\"New\">
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

\t\t\t\t\t\t<a href=\"#\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti\" data-notify=\"0\">
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

\t\t

\t<!-- Slider -->
\t<section class=\"section-slide\">
\t\t<div class=\"wrap-slick1\">
\t\t\t<div class=\"slick1\">
\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(assets1/images/2.png);\">
\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"fadeInDown\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tInvite Art to your life
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"fadeInUp\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tGalleries
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"zoomIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(assets1/images/3.png);\">
\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rollIn\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tExclusive events, priceless memories.
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"lightSpeedIn\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tEvents
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"slideInUp\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tView Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(assets1/images/6.png);\">
\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t<div class=\"flex-col-l-m h-full p-t-100 p-b-30 respon5\">
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateInDownLeft\" data-delay=\"0\">
\t\t\t\t\t\t\t\t<span class=\"ltext-101 cl2 respon2\">
\t\t\t\t\t\t\t\t\tOne of a kind
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateInUpRight\" data-delay=\"800\">
\t\t\t\t\t\t\t\t<h2 class=\"ltext-201 cl2 p-t-19 p-b-43 respon1\">
\t\t\t\t\t\t\t\t\tAuctions
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"layer-slick1 animated visible-false\" data-appear=\"rotateIn\" data-delay=\"1600\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\t\t\t\t\tBid Now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item-slick1\" style=\"background-image: url(assets1/images/7.png);\">
\t\t\t\t\t<div class=\"container h-full\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t</section>


\t<!-- Banner -->
\t<div class=\"sec-banner bg0 p-t-80 p-b-50\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/gal2.png')}}\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"{{path('app_articles_indexfront')}}\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\" color=\"white\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\" color=\"white\">
\t\t\t\t\t\t\t\t\tGallery
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\t2023
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tShop Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/en.png')}}\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"product.html\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tEvent
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\t2023
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tView Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6 col-xl-4 p-b-30 m-lr-auto\">
\t\t\t\t\t<!-- Block1 -->
\t\t\t\t\t<div class=\"block1 wrap-pic-w\">
\t\t\t\t\t\t<img src=\"{{asset('assets1/images/au.png')}}\" alt=\"IMG-BANNER\">

\t\t\t\t\t\t<a href=\"product.html\" class=\"block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3\">
\t\t\t\t\t\t\t<div class=\"block1-txt-child1 flex-col-l\">
\t\t\t\t\t\t\t\t<span class=\"block1-name ltext-102 trans-04 p-b-8\">
\t\t\t\t\t\t\t\t\tAuction
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"block1-info stext-102 trans-04\">
\t\t\t\t\t\t\t\t\t2023
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block1-txt-child2 p-b-4 trans-05\">
\t\t\t\t\t\t\t\t<div class=\"block1-link stext-101 cl0 trans-09\">
\t\t\t\t\t\t\t\t\tBid Now
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- Product -->
\t<section class=\"bg0 p-t-23 p-b-140\">
\t\t<div class=\"container\">
\t\t\t<div class=\"p-b-10\">
\t\t\t\t<h3 class=\"ltext-103 cl5\">
\t\t\t\t\t Overview
\t\t\t\t</h3>
\t\t\t</div>

\t\t\t<div class=\"flex-w flex-sb-m p-b-52\">
\t\t\t\t<div class=\"flex-w flex-l-m filter-tope-group m-tb-10\">
\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1\" data-filter=\"*\">
\t\t\t\t\t\tAll
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".women\">
\t\t\t\t\t\tPainting
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".men\">
\t\t\t\t\t\tSculpture
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".bag\">
\t\t\t\t\t\tPhotography
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".shoes\">
\t\t\t\t\t\tDrawing
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".watches\">
\t\t\t\t\t\tDigital
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<div class=\"flex-w flex-c-m m-tb-10\">
\t\t\t\t\t<div class=\"flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter\">
\t\t\t\t\t\t<i class=\"icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list\"></i>
\t\t\t\t\t\t<i class=\"icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none\"></i>
\t\t\t\t\t\t Filter
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search\">
\t\t\t\t\t\t<i class=\"icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search\"></i>
\t\t\t\t\t\t<i class=\"icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none\"></i>
\t\t\t\t\t\tSearch
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Search product -->
\t\t\t\t<div class=\"dis-none panel-search w-full p-t-10 p-b-15\">
\t\t\t\t\t<div class=\"bor8 dis-flex p-l-15\">
\t\t\t\t\t\t<button class=\"size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-search\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<input class=\"mtext-107 cl2 size-114 plh2 p-r-15\" type=\"text\" name=\"search-product\" placeholder=\"Search\">
\t\t\t\t\t</div>\t
\t\t\t\t</div>

\t\t\t\t<!-- Filter -->
\t\t\t\t<div class=\"dis-none panel-filter w-full p-t-10\">
\t\t\t\t\t<div class=\"wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm\">
\t\t\t\t\t\t<div class=\"filter-col1 p-r-15 p-b-27\">
\t\t\t\t\t\t\t<div class=\"mtext-102 cl2 p-b-15\">
\t\t\t\t\t\t\t\tSort By
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tDefault
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tPopularity
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tAverage rating
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
\t\t\t\t\t\t\t\t\t\tNewness
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tPrice: Low to High
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tPrice: High to Low
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-col2 p-r-15 p-b-27\">
\t\t\t\t\t\t\t<div class=\"mtext-102 cl2 p-b-15\">
\t\t\t\t\t\t\t\tPrice
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
\t\t\t\t\t\t\t\t\t\tAll
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$0.00 - \$50.00
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$50.00 - \$100.00
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$100.00 - \$150.00
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$150.00 - \$200.00
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\t\$200.00+
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-col3 p-r-15 p-b-27\">
\t\t\t\t\t\t\t<div class=\"mtext-102 cl2 p-b-15\">
\t\t\t\t\t\t\t\tColor
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #222;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tBlack
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #4272d7;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
\t\t\t\t\t\t\t\t\t\tBlue
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #b3b3b3;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tGrey
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #00ad5f;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tGreen
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #fa4251;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tRed
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #aaa;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"filter-link stext-106 trans-04\">
\t\t\t\t\t\t\t\t\t\tWhite
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"filter-col4 p-b-27\">
\t\t\t\t\t\t\t<div class=\"mtext-102 cl2 p-b-15\">
\t\t\t\t\t\t\t\tTags
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"flex-w p-t-4 m-r--5\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tFashion
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tLifestyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tDenim
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tStreetstyle
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
\t\t\t\t\t\t\t\t\tCrafts
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row isotope-grid\">
\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women\">
\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t<img src=\"{{asset('assets1/images/product-01.jpg')}}\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\tEsprit Ruffle Shirt
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\$16.64
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"{{asset('assets1/images/icons/icon-heart-01.png')}}\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"{{asset('assets1/images/icons/icon-heart-02.png')}}\" alt=\"ICON\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t
\t\t\t</div>

\t\t\t<!-- Load more -->
\t\t\t<div class=\"flex-c-m flex-w w-full p-t-45\">
\t\t\t\t<a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
\t\t\t\t\tLoad More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</section>


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

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-01.jpg\">
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

\t\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-03.jpg')}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets1/images/product-detail-03.jpg')}}\" alt=\"IMG-PRODUCT\">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"{{asset('assets1/images/product-detail-03.jpg')}}\">
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
\t   <!-- Flashy depends on jQuery -->
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
    <!-- Include Flashy default partial -->
    {{ include('@MercurySeriesFlashy/flashy.html.twig') }}

</body>
</html>", "front.html.twig", "C:\\Users\\rania\\my_project_directory\\templates\\front.html.twig");
    }
}
