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

/* articles/detail.html.twig */
class __TwigTemplate_7b4146e9e336426a2edfb1ce237b281d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'detail' => [$this, 'block_detail'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "product-detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/detail.html.twig"));

        $this->parent = $this->loadTemplate("product-detail.html.twig", "articles/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail"));

        // line 4
        echo "\t<section class=\"sec-product-detail bg0 p-t-65 p-b-60\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">
\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">
\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t

                      ";
        // line 18
        if (twig_matches("/(pdf)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "photoArticle", [], "any", false, false, false, 18)))) {
            // line 19
            echo "                        <object data=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" type=\"application/pdf\" width=\"80\" height=\"80    \">
                            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "fileFile"), "html", null, true);
            echo "\">click here to download the PDF file.</a></p>
                        </object>
                    ";
        } elseif (twig_matches("/(mp4|webm|ogv)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "photoArticle", [], "any", false, false, false, 22)))) {
            // line 23
            echo "                        <video controls width=\"500\" height=\"500\">
                            <source src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" type=\"video/";
            echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "photoArticle", [], "any", false, false, false, 24)), ".")), "html", null, true);
            echo "\">
                            Your browser does not support the video tag.
                        </video>
                   ";
        } else {
            // line 28
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" width=\"830\" height=\"380\">
                    ";
        }
        // line 30
        echo "                    





\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-01.jpg\">
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
\t\t\t\t\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 50, $this->source); })()), "titreArticle", [], "any", false, false, false, 50), "html", null, true);
        echo "
\t\t\t\t\t\t</h4>
                    <li class=\"flex-w flex-t p-b-7\">
                        <span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tArtist Name
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "nomArtiste", [], "any", false, false, false, 58), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t</li>
                                        </br>
                        <li class=\"flex-w flex-t p-b-7\">
                        <span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tGallery
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 69, $this->source); })()), "idGalerie", [], "any", false, false, false, 69), "titreGalerie", [], "any", false, false, false, 69), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>
                       
                        </br>
\t\t\t\t\t\t

\t\t\t
\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tPrice
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 83, $this->source); })()), "prixArticle", [], "any", false, false, false, 83), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>
</br>
                                        \t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tQuantity
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 93, $this->source); })()), "quantiteArticle", [], "any", false, false, false, 93), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>
    </br>                                
                        <li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 103, $this->source); })()), "descArticle", [], "any", false, false, false, 103), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t</br>\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"p-t-33\">
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t

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
\t\t\t\t\t\t\t<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#description\" role=\"tab\">Reviews</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#information\" role=\"tab\">Raiting</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\">Comments</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content p-t-43\">
\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-18 cl11\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                    
\t\t\t\t\t\t\t\t\t\t\t
             <tr>
                    <td>";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentaire"]) || array_key_exists("commentaire", $context) ? $context["commentaire"] : (function () { throw new RuntimeError('Variable "commentaire" does not exist.', 203, $this->source); })()), "contenu", [], "any", false, false, false, 203), "html", null, true);
        echo "</td>
                    
                </tr>

           
                    
                  

                    
                  

            
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"information\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"p-b-30 m-lr-15-sm\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- Add review -->
                                       
\t\t\t\t\t\t\t\t\t\t<form class=\"w-full\" method=\"POST\">
    <div class=\"flex-w flex-m p-t-50 p-b-23\">
        <span class=\"stext-102 cl3 m-r-16\">
            Your Rating
        </span>
        <span class=\"wrap-rating fs-18 cl11 pointer\">
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(1)\"></i>
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(2)\"></i>
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(3)\"></i>
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(4)\"></i>
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(5)\"></i>
            <input class=\"dis-none\" type=\"number\" name=\"rating\" id=\"rating\" value=\"0\">
        </span>
    </div>
    
    
    <input type=\"hidden\" name=\"article_id\" value=\"1\">
    <button type=\"submit\" name=\"submit_rating\" class=\"btn btn-primary\">Submit Rating</button>
</form>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"p-b-30 m-lr-15-sm\">
    <!-- Add review -->
    ";
        // line 264
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), 'form_start');
        echo "
    <h5 class=\"mtext-108 cl2 p-b-7\">
        Add a review
    </h5>
    <div class=\"row p-b-25\">
        <div class=\"col-12 p-b-5\">
            ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "contenu", [], "any", false, false, false, 270), 'label', ["label_attr" => ["class" => "stext-102 cl3"], "label" => "Your review"]);
        echo "
            ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "contenu", [], "any", false, false, false, 271), 'widget', ["attr" => ["class" => "size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10"]]);
        echo "
        </div>
        
    </div>
    <button type=\"submit\" class=\"flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10\">
        Submit
    </button>
    ";
        // line 278
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), 'form_end');
        echo "
</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "articles/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 278,  386 => 271,  382 => 270,  373 => 264,  309 => 203,  206 => 103,  193 => 93,  180 => 83,  163 => 69,  149 => 58,  138 => 50,  116 => 30,  110 => 28,  101 => 24,  98 => 23,  96 => 22,  91 => 20,  86 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'product-detail.html.twig' %}

\t{% block detail %}
\t<section class=\"sec-product-detail bg0 p-t-65 p-b-60\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-lg-7 p-b-30\">
\t\t\t\t\t<div class=\"p-l-25 p-r-30 p-lr-0-lg\">
\t\t\t\t\t\t<div class=\"wrap-slick3 flex-sb flex-w\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

\t\t\t\t\t\t\t<div class=\"slick3 gallery-lb\">
\t\t\t\t\t\t\t\t<div class=\"item-slick3\" data-thumb=\"assets1/images/product-detail-01.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"wrap-pic-w pos-relative\">
\t\t\t\t\t\t\t\t\t\t

                      {% if article.photoArticle|lower matches '/(pdf)\$/' %}
                        <object data=\"{{ vich_uploader_asset(article, 'fileFile') }}\" type=\"application/pdf\" width=\"80\" height=\"80    \">
                            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"{{ vich_uploader_asset(article, 'fileFile') }}\">click here to download the PDF file.</a></p>
                        </object>
                    {% elseif article.photoArticle|lower matches '/(mp4|webm|ogv)\$/' %}
                        <video controls width=\"500\" height=\"500\">
                            <source src=\"{{ vich_uploader_asset(article, 'fileFile') }}\" type=\"video/{{ article.photoArticle|lower|split('.')|last }}\">
                            Your browser does not support the video tag.
                        </video>
                   {% else %}
                    <img src=\"{{vich_uploader_asset(article,'fileFile') }}\" width=\"830\" height=\"380\">
                    {% endif %}
                    





\t\t\t\t\t\t\t\t\t\t<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"assets1/images/product-detail-01.jpg\">
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
\t\t\t\t\t\t\t{{article.titreArticle }}
\t\t\t\t\t\t</h4>
                    <li class=\"flex-w flex-t p-b-7\">
                        <span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tArtist Name
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ article.nomArtiste }}
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t</li>
                                        </br>
                        <li class=\"flex-w flex-t p-b-7\">
                        <span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tGallery
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t{{article.idGalerie.titreGalerie}}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>
                       
                        </br>
\t\t\t\t\t\t

\t\t\t
\t\t\t\t\t\t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tPrice
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ article.prixArticle }}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>
</br>
                                        \t<li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tQuantity
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ article.quantiteArticle }}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</li>
    </br>                                
                        <li class=\"flex-w flex-t p-b-7\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl3 size-205\">
\t\t\t\t\t\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"stext-102 cl6 size-206\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ article.descArticle }}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t</br>\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t<div class=\"p-t-33\">
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t

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
\t\t\t\t\t\t\t<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#description\" role=\"tab\">Reviews</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#information\" role=\"tab\">Raiting</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item p-b-10\">
\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\">Comments</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t<div class=\"tab-content p-t-43\">
\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-18 cl11\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                    
\t\t\t\t\t\t\t\t\t\t\t
             <tr>
                    <td>{{ commentaire.contenu}}</td>
                    
                </tr>

           
                    
                  

                    
                  

            
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"information\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"p-b-30 m-lr-15-sm\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- Add review -->
                                       
\t\t\t\t\t\t\t\t\t\t<form class=\"w-full\" method=\"POST\">
    <div class=\"flex-w flex-m p-t-50 p-b-23\">
        <span class=\"stext-102 cl3 m-r-16\">
            Your Rating
        </span>
        <span class=\"wrap-rating fs-18 cl11 pointer\">
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(1)\"></i>
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(2)\"></i>
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(3)\"></i>
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(4)\"></i>
            <i class=\"item-rating pointer zmdi zmdi-star-outline\" onclick=\"changeRating(5)\"></i>
            <input class=\"dis-none\" type=\"number\" name=\"rating\" id=\"rating\" value=\"0\">
        </span>
    </div>
    
    
    <input type=\"hidden\" name=\"article_id\" value=\"1\">
    <button type=\"submit\" name=\"submit_rating\" class=\"btn btn-primary\">Submit Rating</button>
</form>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- - -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"p-b-30 m-lr-15-sm\">
    <!-- Add review -->
    {{ form_start(form) }}
    <h5 class=\"mtext-108 cl2 p-b-7\">
        Add a review
    </h5>
    <div class=\"row p-b-25\">
        <div class=\"col-12 p-b-5\">
            {{ form_label(form.contenu, 'Your review', {'label_attr': {'class': 'stext-102 cl3'}}) }}
            {{ form_widget(form.contenu, {'attr': {'class': 'size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10'}}) }}
        </div>
        
    </div>
    <button type=\"submit\" class=\"flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10\">
        Submit
    </button>
    {{ form_end(form) }}
</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
\t</section>
{% endblock %}", "articles/detail.html.twig", "C:\\Users\\rania\\Downloads\\PidevRania1.0\\templates\\articles\\detail.html.twig");
    }
}
