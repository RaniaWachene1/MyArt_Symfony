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

/* articles/quick_view.html.twig */
class __TwigTemplate_1161f3571acca87cdf7f9a365ffd0950 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'article' => [$this, 'block_article'],
            'galeries' => [$this, 'block_galeries'],
            'latest' => [$this, 'block_latest'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/quick_view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/quick_view.html.twig"));

        $this->parent = $this->loadTemplate("blog.html.twig", "articles/quick_view.html.twig", 1);
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
        echo "                    <div class=\"col-md-8 col-lg-9 p-b-80\">
                        <div class=\"p-r-45 p-r-0-lg\">
                            <!--  -->
                            <div class=\"wrap-pic-w how-pos5-parent\">
                                ";
        // line 7
        if (twig_matches("/(pdf)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "photoArticle", [], "any", false, false, false, 7)))) {
            // line 8
            echo "                                    <object data=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" type=\"application/pdf\" width=\"200\" height=\"200\">
                                        <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "fileFile"), "html", null, true);
            echo "\">click here to download the PDF file.</a></p>
                                    </object>
                                ";
        } elseif (twig_matches("/(mp4|webm|ogv)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "photoArticle", [], "any", false, false, false, 11)))) {
            // line 12
            echo "                                    <video controls width=\"200\" height=\"200\">
                                        <source src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" type=\"video/";
            echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "photoArticle", [], "any", false, false, false, 13)), ".")), "html", null, true);
            echo "\">
                                        Your browser does not support the video tag.
                                    </video>
                                ";
        } else {
            // line 17
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" width=\"200\" height=\"200\">
                                ";
        }
        // line 19
        echo "
                                <div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t22
\t\t\t\t\t\t\t\t</span>

                                    <span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>

                            <div class=\"p-t-32\">
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

                                <h4 class=\"ltext-109 cl2 p-b-28\">
                                    8 Inspiring Ways to Wear Dresses in the Winter
                                </h4>

                                <p class=\"stext-117 cl6 p-b-26\">
                                    ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "descArticle", [], "any", false, false, false, 58), "html", null, true);
        echo "
                                </p>


                            </div>



                            <!--  -->
                            <div class=\"p-t-40\">
                                <h5 class=\"mtext-113 cl2 p-b-12\">
                                    Leave a Comment
                                </h5>
                               ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"bor19 m-b-20\">
                                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "contenu", [], "any", false, false, false, 73), 'row');
        echo "
                                    </div>
                                    <button type=\"submit\" class=\"flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04\">
                                        Post Comment
                                    </button>
                                ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_galeries($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "galeries"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "galeries"));

        // line 84
        echo "                            <div class=\"p-t-55\">
                                <h4 class=\"mtext-112 cl2 p-b-33\">
                                    Galeries
                                </h4>

                                <ul>
                                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galeries"]) || array_key_exists("galeries", $context) ? $context["galeries"] : (function () { throw new RuntimeError('Variable "galeries" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["galery"]) {
            // line 91
            echo "                                    <li class=\"bor18\">
                                        <a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
                                            ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "titreGalerie", [], "any", false, false, false, 93), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                </ul>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 100
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "latest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "latest"));

        // line 101
        echo "                            <div class=\"p-t-65\">
                                <h4 class=\"mtext-112 cl2 p-b-33\">
                                    Featured Articles
                                </h4>

                                <ul>
                                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articletri"]) || array_key_exists("articletri", $context) ? $context["articletri"] : (function () { throw new RuntimeError('Variable "articletri" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 108
            echo "                                    <li class=\"flex-w flex-t p-b-30\">
                                        <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_quick_view", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
                                            ";
            // line 110
            if (twig_matches("/(pdf)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photoArticle", [], "any", false, false, false, 110)))) {
                // line 111
                echo "                                                <object data=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" type=\"application/pdf\" width=\"80\" height=\"80    \">
                                                    <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\">click here to download the PDF file.</a></p>
                                                </object>
                                            ";
            } elseif (twig_matches("/(mp4|webm|ogv)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 114
$context["article"], "photoArticle", [], "any", false, false, false, 114)))) {
                // line 115
                echo "                                                <video controls width=\"80\" height=\"80\">
                                                    <source src=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" type=\"video/";
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photoArticle", [], "any", false, false, false, 116)), ".")), "html", null, true);
                echo "\">
                                                    Your browser does not support the video tag.
                                                </video>
                                            ";
            } else {
                // line 120
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" width=\"80\" height=\"80\">
                                            ";
            }
            // line 122
            echo "                                        </a>

                                        <div class=\"size-215 flex-col-t p-t-8\">
                                            <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_quick_view", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\" class=\"stext-116 cl8 hov-cl1 trans-04\">
                                                ";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titreArticle", [], "any", false, false, false, 126), "html", null, true);
            echo "
                                            </a>

                                            <span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixArticle", [], "any", false, false, false, 130), "html", null, true);
            echo "TND
\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                </ul>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "articles/quick_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 135,  318 => 130,  311 => 126,  307 => 125,  302 => 122,  296 => 120,  287 => 116,  284 => 115,  282 => 114,  277 => 112,  272 => 111,  270 => 110,  266 => 109,  263 => 108,  259 => 107,  251 => 101,  241 => 100,  229 => 97,  219 => 93,  215 => 91,  211 => 90,  203 => 84,  193 => 83,  178 => 78,  170 => 73,  165 => 71,  149 => 58,  108 => 19,  102 => 17,  93 => 13,  90 => 12,  88 => 11,  83 => 9,  78 => 8,  76 => 7,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'blog.html.twig' %}
\t\t\t\t{% block article %}
                    <div class=\"col-md-8 col-lg-9 p-b-80\">
                        <div class=\"p-r-45 p-r-0-lg\">
                            <!--  -->
                            <div class=\"wrap-pic-w how-pos5-parent\">
                                {% if article.photoArticle|lower matches '/(pdf)\$/' %}
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

                                <div class=\"flex-col-c-m size-123 bg9 how-pos5\">
\t\t\t\t\t\t\t\t<span class=\"ltext-107 cl2 txt-center\">
\t\t\t\t\t\t\t\t\t22
\t\t\t\t\t\t\t\t</span>

                                    <span class=\"stext-109 cl3 txt-center\">
\t\t\t\t\t\t\t\t\tJan 2018
\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>

                            <div class=\"p-t-32\">
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

                                <h4 class=\"ltext-109 cl2 p-b-28\">
                                    8 Inspiring Ways to Wear Dresses in the Winter
                                </h4>

                                <p class=\"stext-117 cl6 p-b-26\">
                                    {{article.descArticle }}
                                </p>


                            </div>



                            <!--  -->
                            <div class=\"p-t-40\">
                                <h5 class=\"mtext-113 cl2 p-b-12\">
                                    Leave a Comment
                                </h5>
                               {{ form_start(form) }}
                                    <div class=\"bor19 m-b-20\">
                                        {{ form_row(form.contenu) }}
                                    </div>
                                    <button type=\"submit\" class=\"flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04\">
                                        Post Comment
                                    </button>
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                {% endblock %}
\t\t\t\t\t\t{% block galeries %}
                            <div class=\"p-t-55\">
                                <h4 class=\"mtext-112 cl2 p-b-33\">
                                    Galeries
                                </h4>

                                <ul>
                                    {% for galery in galeries %}
                                    <li class=\"bor18\">
                                        <a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
                                            {{ galery.titreGalerie }}
                                        </a>
                                    </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endblock %}
\t\t\t\t\t\t{% block latest %}
                            <div class=\"p-t-65\">
                                <h4 class=\"mtext-112 cl2 p-b-33\">
                                    Featured Articles
                                </h4>

                                <ul>
                                    {% for article in articletri %}
                                    <li class=\"flex-w flex-t p-b-30\">
                                        <a href=\"{{ path('app_articles_quick_view',{'id':article.idArticle}) }}\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
                                            {% if article.photoArticle|lower matches '/(pdf)\$/' %}
                                                <object data=\"{{ vich_uploader_asset(article, 'fileFile') }}\" type=\"application/pdf\" width=\"80\" height=\"80    \">
                                                    <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"{{ vich_uploader_asset(article, 'fileFile') }}\">click here to download the PDF file.</a></p>
                                                </object>
                                            {% elseif article.photoArticle|lower matches '/(mp4|webm|ogv)\$/' %}
                                                <video controls width=\"80\" height=\"80\">
                                                    <source src=\"{{ vich_uploader_asset(article, 'fileFile') }}\" type=\"video/{{ article.photoArticle|lower|split('.')|last }}\">
                                                    Your browser does not support the video tag.
                                                </video>
                                            {% else %}
                                                <img src=\"{{vich_uploader_asset(article,'fileFile') }}\" width=\"80\" height=\"80\">
                                            {% endif %}
                                        </a>

                                        <div class=\"size-215 flex-col-t p-t-8\">
                                            <a href=\"{{ path('app_articles_quick_view',{'id':article.idArticle}) }}\" class=\"stext-116 cl8 hov-cl1 trans-04\">
                                                {{article.titreArticle }}
                                            </a>

                                            <span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t{{ article.prixArticle }}TND
\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endblock %}", "articles/quick_view.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PidevRania1.0\\templates\\articles\\quick_view.html.twig");
    }
}
