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

/* articles/indexfront.html.twig */
class __TwigTemplate_5b46cb7ae5335bcb7a1443a0500a80b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'article' => [$this, 'block_article'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "showarticlefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/indexfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/indexfront.html.twig"));

        $this->parent = $this->loadTemplate("showarticlefront.html.twig", "articles/indexfront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_article($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        // line 3
        echo "\t<!-- Product -->
\t<div class=\"bg0 m-t-23 p-b-140\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex-w flex-sb-m p-b-52\">
\t\t\t\t<div class=\"flex-w flex-l-m filter-tope-group m-tb-10\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galeries"]) || array_key_exists("galeries", $context) ? $context["galeries"] : (function () { throw new RuntimeError('Variable "galeries" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 9
            echo "\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1\" data-filter=\"*\">
\t\t\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "titreGalerie", [], "any", false, false, false, 10), "html", null, true);
            echo "
\t\t\t\t\t</button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t</div>

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
\t\t\t";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 231, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 232
            echo "\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women\">
\t\t\t\t
\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t         ";
            // line 237
            if (twig_matches("/(pdf)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photoArticle", [], "any", false, false, false, 237)))) {
                // line 238
                echo "                        <object data=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" type=\"application/pdf\" width=\"200\" height=\"200\">
                            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\">click here to download the PDF file.</a></p>
                        </object>
                    ";
            } elseif (twig_matches("/(mp4|webm|ogv)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 241
$context["article"], "photoArticle", [], "any", false, false, false, 241)))) {
                // line 242
                echo "                        <video controls width=\"200\" height=\"200\">
                            <source src=\"";
                // line 243
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" type=\"video/";
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photoArticle", [], "any", false, false, false, 243)), ".")), "html", null, true);
                echo "\">
                            Your browser does not support the video tag.
                        </video>
                   ";
            } else {
                // line 247
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" width=\"200\" height=\"200\">
                    ";
            }
            // line 249
            echo "
\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titreArticle", [], "any", false, false, false, 258), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixArticle", [], "any", false, false, false, 262), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"block2-txt-child2 flex-r p-t-3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
\t\t\t\t\t\t\t\t\t<img class=\"icon-heart1 dis-block trans-04\" src=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-heart-01.png"), "html", null, true);
            echo "\" alt=\"ICON\">
\t\t\t\t\t\t\t\t\t<img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/images/icons/icon-heart-02.png"), "html", null, true);
            echo "\" alt=\"ICON\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "\t\t\t\t\t
\t\t\t</div>

\t\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "articles/indexfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 278,  385 => 269,  381 => 268,  372 => 262,  365 => 258,  354 => 249,  348 => 247,  339 => 243,  336 => 242,  334 => 241,  329 => 239,  324 => 238,  322 => 237,  315 => 232,  311 => 231,  91 => 13,  82 => 10,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'showarticlefront.html.twig' %}
{% block article %}
\t<!-- Product -->
\t<div class=\"bg0 m-t-23 p-b-140\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex-w flex-sb-m p-b-52\">
\t\t\t\t<div class=\"flex-w flex-l-m filter-tope-group m-tb-10\">
                {% for g in galeries %}
\t\t\t\t\t<button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1\" data-filter=\"*\">
\t\t\t\t\t{{g.titreGalerie}}
\t\t\t\t\t</button>
                {% endfor %}
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
\t\t\t{% for article in articles %}
\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women\">
\t\t\t\t
\t\t\t\t\t<!-- Block2 -->
\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t<div class=\"block2-pic hov-img0\">
\t\t\t\t\t\t\t         {% if article.photoArticle|lower matches '/(pdf)\$/' %}
                        <object data=\"{{ vich_uploader_asset(article, 'fileFile') }}\" type=\"application/pdf\" width=\"200\" height=\"200\">
                            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"{{ vich_uploader_asset(article, 'fileFile') }}\">click here to download the PDF file.</a></p>
                        </object>
                    {% elseif article.photoArticle|lower matches '/(mp4|webm|ogv)\$/' %}
                        <video controls width=\"200\" height=\"200\">
                            <source src=\"{{ vich_uploader_asset(article, 'fileFile') }}\" type=\"video/{{ article.photoArticle|lower|split('.')|last }}\">
                            Your browser does not support the video tag.
                        </video>
                   {% else %}
                    <img src=\"{{vich_uploader_asset(article,'fileFile') }}\" width=\"200\" height=\"200\">
                    {% endif %}

\t\t\t\t\t\t\t<a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\">
\t\t\t\t\t\t\t\tQuick View
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"block2-txt flex-w flex-t p-t-14\">
\t\t\t\t\t\t\t<div class=\"block2-txt-child1 flex-col-l \">
\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
\t\t\t\t\t\t\t\t\t{{article.titreArticle}}
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t{{article.prixArticle}}
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
\t\t\t\t\t
\t\t\t\t</div>

{% endfor %}
\t\t\t\t\t
\t\t\t</div>

\t\t
{% endblock %}", "articles/indexfront.html.twig", "C:\\Users\\rania\\OneDrive\\Documents\\MyArt_Symfony\\templates\\articles\\indexfront.html.twig");
    }
}
