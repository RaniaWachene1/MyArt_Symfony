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

/* articles/index.html.twig */
class __TwigTemplate_beeaa6bc1014a9351f0a9f32fa70e1c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tableForm' => [$this, 'block_tableForm'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_tableForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        // line 3
        echo "    <div style=\"display: flex; justify-content: center; margin-left: 170px; \">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Article</h1> </center>

    <table class=\"table\">
        <thead>
            <tr>
                
                <th>Title</th>
                <th>Name</th>

                <th>Article</th>
                <th>Gallery</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 25
            echo "            <tr>
                
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titreArticle", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nomArtiste", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
               
                <td>
                      ";
            // line 31
            if (twig_matches("/(pdf)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photoArticle", [], "any", false, false, false, 31)))) {
                // line 32
                echo "                        <object data=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" type=\"application/pdf\" width=\"80\" height=\"80    \">
                            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\">click here to download the PDF file.</a></p>
                        </object>
                    ";
            } elseif (twig_matches("/(mp4|webm|ogv)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 35
$context["article"], "photoArticle", [], "any", false, false, false, 35)))) {
                // line 36
                echo "                        <video controls width=\"80\" height=\"80\">
                            <source src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" type=\"video/";
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photoArticle", [], "any", false, false, false, 37)), ".")), "html", null, true);
                echo "\">
                            Your browser does not support the video tag.
                        </video>
                   ";
            } else {
                // line 41
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "fileFile"), "html", null, true);
                echo "\" width=\"80\" height=\"80\">
                    ";
            }
            // line 43
            echo "                    </td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "idGalerie", [], "any", false, false, false, 44), "titreGalerie", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_show", ["idArticle" => twig_get_attribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_edit", ["idArticle" => twig_get_attribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_new");
        echo "\">Create new</a>
       </div>
</div>
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 58,  172 => 55,  163 => 51,  154 => 47,  150 => 46,  145 => 44,  142 => 43,  136 => 41,  127 => 37,  124 => 36,  122 => 35,  117 => 33,  112 => 32,  110 => 31,  104 => 28,  100 => 27,  96 => 25,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block tableForm %}
    <div style=\"display: flex; justify-content: center; margin-left: 170px; \">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Article</h1> </center>

    <table class=\"table\">
        <thead>
            <tr>
                
                <th>Title</th>
                <th>Name</th>

                <th>Article</th>
                <th>Gallery</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                
                <td>{{ article.titreArticle }}</td>
                <td>{{ article.nomArtiste }}</td>
               
                <td>
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
                    </td>
                <td>{{article.idGalerie.titreGalerie}}</td>
                <td>
                    <a href=\"{{ path('app_articles_show', {'idArticle': article.idArticle}) }}\">show</a>
                    <a href=\"{{ path('app_articles_edit', {'idArticle': article.idArticle}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_articles_new') }}\">Create new</a>
       </div>
</div>
</div>
</div>
{% endblock %}
", "articles/index.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PidevRania\\templates\\articles\\index.html.twig");
    }
}
