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

/* articles/show.html.twig */
class __TwigTemplate_9534cf719da41e03477fd36cf801c02d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_tableForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        // line 6
        echo "   <div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Article</h1> </center>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id Article</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "idArticle", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title Article</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "titreArticle", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name of Artist</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "nomArtiste", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gallery</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "idGalerie", [], "any", false, false, false, 30), "titreGalerie", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            
            <tr>
                <th>Price</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "prixArticle", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 39, $this->source); })()), "descArticle", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 43, $this->source); })()), "quantiteArticle", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                            <td>
                      ";
        // line 48
        if (twig_matches("/(pdf)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 48, $this->source); })()), "photoArticle", [], "any", false, false, false, 48)))) {
            // line 49
            echo "                        <object data=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 49, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" type=\"application/pdf\" width=\"200\" height=\"200\">
                            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 50, $this->source); })()), "fileFile"), "html", null, true);
            echo "\">click here to download the PDF file.</a></p>
                        </object>
                    ";
        } elseif (twig_matches("/(mp4|webm|ogv)\$/", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 52, $this->source); })()), "photoArticle", [], "any", false, false, false, 52)))) {
            // line 53
            echo "                        <video controls width=\"200\" height=\"200\">
                            <source src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 54, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" type=\"video/";
            echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 54, $this->source); })()), "photoArticle", [], "any", false, false, false, 54)), ".")), "html", null, true);
            echo "\">
                            Your browser does not support the video tag.
                        </video>
                   ";
        } else {
            // line 58
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "fileFile"), "html", null, true);
            echo "\" width=\"200\" height=\"200\">
                    ";
        }
        // line 60
        echo "                    </td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 64, $this->source); })()), "idUser", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rate</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 68, $this->source); })()), "rate", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

  <button class=\"btn btn-primary\" onclick=\"window.location.href='";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_edit", ["idArticle" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 73, $this->source); })()), "idArticle", [], "any", false, false, false, 73)]), "html", null, true);
        echo "'\">Edit</button>
  


    ";
        // line 77
        echo twig_include($this->env, $context, "articles/_delete_form.html.twig");
        echo "
    </div>
</div>
</div>
</div>
<div  style=\"  margin-top: 10px;\">
<button class=\"btn btn-info btn-sm \" onclick=\"window.location.href='";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_index");
        echo "'\"> <i class=\"bi bi-arrow-bar-left\"></i> Back to List </button>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "articles/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 83,  193 => 77,  186 => 73,  178 => 68,  171 => 64,  165 => 60,  159 => 58,  150 => 54,  147 => 53,  145 => 52,  140 => 50,  135 => 49,  133 => 48,  125 => 43,  118 => 39,  111 => 35,  103 => 30,  96 => 26,  89 => 22,  82 => 18,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block tableForm %}
   <div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Article</h1> </center>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id Article</th>
                <td>{{ article.idArticle }}</td>
            </tr>
            <tr>
                <th>Title Article</th>
                <td>{{ article.titreArticle }}</td>
            </tr>
            <tr>
                <th>Name of Artist</th>
                <td>{{ article.nomArtiste }}</td>
            </tr>
            <tr>
                <th>Gallery</th>
                <td>{{article.idGalerie.titreGalerie}}</td>
            </tr>
            
            <tr>
                <th>Price</th>
                <td>{{ article.prixArticle }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ article.descArticle }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ article.quantiteArticle }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                            <td>
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
                    </td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>{{ article.idUser }}</td>
            </tr>
            <tr>
                <th>Rate</th>
                <td>{{ article.rate }}</td>
            </tr>
        </tbody>
    </table>

  <button class=\"btn btn-primary\" onclick=\"window.location.href='{{ path('app_articles_edit', {'idArticle': article.idArticle}) }}'\">Edit</button>
  


    {{ include('articles/_delete_form.html.twig') }}
    </div>
</div>
</div>
</div>
<div  style=\"  margin-top: 10px;\">
<button class=\"btn btn-info btn-sm \" onclick=\"window.location.href='{{ path('app_articles_index') }}'\"> <i class=\"bi bi-arrow-bar-left\"></i> Back to List </button>
</div>
{% endblock %}
", "articles/show.html.twig", "C:\\Users\\rania\\OneDrive\\Documents\\MyArt_Symfony\\templates\\articles\\show.html.twig");
    }
}
