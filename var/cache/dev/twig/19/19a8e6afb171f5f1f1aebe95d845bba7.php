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
class __TwigTemplate_d159539dfa36cc05315dd4cd4440f142 extends Template
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

    // line 3
    public function block_article($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        // line 4
        echo "                    <div class=\"col-md-8 col-lg-9 p-b-80\">
                        <div class=\"p-r-45 p-r-0-lg\">
                            <!--  -->
                            <div class=\"wrap-pic-w how-pos5-parent\">
                                ";
        // line 8
        if (twig_matches("/(pdf)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "photoArticle", [], "any", false, false, false, 8)))) {
            // line 9
            echo "                                    <object data=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" type=\"application/pdf\" width=\"200\" height=\"200\">
                                        <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "fileFile"), "html", null, true);
            echo "\">click here to download the PDF file.</a></p>
                                    </object>
                                ";
        } elseif (twig_matches("/(mp4|webm|ogv)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "photoArticle", [], "any", false, false, false, 12)))) {
            // line 13
            echo "                                    <video controls width=\"200\" height=\"200\">
                                        <source src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" type=\"video/";
            echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "photoArticle", [], "any", false, false, false, 14)), ".")), "html", null, true);
            echo "\">
                                        Your browser does not support the video tag.
                                    </video>
                                ";
        } else {
            // line 18
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" width=\"200\" height=\"200\">
                                ";
        }
        // line 20
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
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 59, $this->source); })()), "descArticle", [], "any", false, false, false, 59), "html", null, true);
        echo "
                                </p>


                            </div>



                            <!--  -->
                            <div class=\"p-t-40\">
                                <h5 class=\"mtext-113 cl2 p-b-12\">
                                    Leave a Comment
                                </h5>
                               ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"bor19 m-b-20\">
                                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "contenu", [], "any", false, false, false, 74), 'row');
        echo "
                                    </div>
                                    <button type=\"submit\" class=\"flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04\">
                                        Post Comment
                                    </button>
                                ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_galeries($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "galeries"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "galeries"));

        // line 85
        echo "                            <div class=\"p-t-55\">
                                <h4 class=\"mtext-112 cl2 p-b-33\">
                                    Galeries
                                </h4>

                                <ul>
                                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galeries"]) || array_key_exists("galeries", $context) ? $context["galeries"] : (function () { throw new RuntimeError('Variable "galeries" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["galery"]) {
            // line 92
            echo "                                    <li class=\"bor18\">
                                        <a href=\"#\" class=\"dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4\">
                                            ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "titreGalerie", [], "any", false, false, false, 94), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                </ul>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "latest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "latest"));

        // line 102
        echo "                            <div class=\"p-t-65\">
                                <h4 class=\"mtext-112 cl2 p-b-33\">
                                    Featured Articles
                                </h4>

                                <ul>
                                    ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articletri"]) || array_key_exists("articletri", $context) ? $context["articletri"] : (function () { throw new RuntimeError('Variable "articletri" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 109
            echo "                                    <li class=\"flex-w flex-t p-b-30\">
                                        <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_quick_view", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\" class=\"wrao-pic-w size-214 hov-ovelay1 m-r-20\">
                                            ";
            // line 111
            if (twig_matches("/(pdf)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photoArticle", [], "any", false, false, false, 111)))) {
                // line 112
                echo "                                                <object data=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" type=\"application/pdf\" width=\"80\" height=\"80    \">
                                                    <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\">click here to download the PDF file.</a></p>
                                                </object>
                                            ";
            } elseif (twig_matches("/(mp4|webm|ogv)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 115
$context["article"], "photoArticle", [], "any", false, false, false, 115)))) {
                // line 116
                echo "                                                <video controls width=\"80\" height=\"80\">
                                                    <source src=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" type=\"video/";
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photoArticle", [], "any", false, false, false, 117)), ".")), "html", null, true);
                echo "\">
                                                    Your browser does not support the video tag.
                                                </video>
                                            ";
            } else {
                // line 121
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" width=\"80\" height=\"80\">
                                            ";
            }
            // line 123
            echo "                                        </a>

                                        <div class=\"size-215 flex-col-t p-t-8\">
                                            <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_quick_view", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 126)]), "html", null, true);
            echo "\" class=\"stext-116 cl8 hov-cl1 trans-04\">
                                                ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titreArticle", [], "any", false, false, false, 127), "html", null, true);
            echo "
                                            </a>

                                            <span class=\"stext-116 cl6 p-t-20\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixArticle", [], "any", false, false, false, 131), "html", null, true);
            echo "TND
\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
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
        return array (  329 => 136,  318 => 131,  311 => 127,  307 => 126,  302 => 123,  296 => 121,  287 => 117,  284 => 116,  282 => 115,  277 => 113,  272 => 112,  270 => 111,  266 => 110,  263 => 109,  259 => 108,  251 => 102,  241 => 101,  229 => 98,  219 => 94,  215 => 92,  211 => 91,  203 => 85,  193 => 84,  178 => 79,  170 => 74,  165 => 72,  149 => 59,  108 => 20,  102 => 18,  93 => 14,  90 => 13,  88 => 12,  83 => 10,  78 => 9,  76 => 8,  70 => 4,  60 => 3,  37 => 1,);
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
                        {% endblock %}", "articles/quick_view.html.twig", "C:\\Users\\rania\\Downloads\\PidevRania1.0\\templates\\articles\\quick_view.html.twig");
    }
}
