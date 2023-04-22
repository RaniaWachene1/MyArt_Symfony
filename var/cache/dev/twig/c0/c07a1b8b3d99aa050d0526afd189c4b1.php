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

/* galeries/show.html.twig */
class __TwigTemplate_cb3c32d75f5d2added4de7a4864cbab5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galeries/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galeries/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "galeries/show.html.twig", 1);
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
        echo "<div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Gallery</h1> </center>



    

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id Gallery</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["galery"]) || array_key_exists("galery", $context) ? $context["galery"] : (function () { throw new RuntimeError('Variable "galery" does not exist.', 19, $this->source); })()), "idGalerie", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["galery"]) || array_key_exists("galery", $context) ? $context["galery"] : (function () { throw new RuntimeError('Variable "galery" does not exist.', 23, $this->source); })()), "titreGalerie", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
                   <div class=\"button-container\" style=\"  margin-top: 20px;\">
                     <button class=\"btn btn-success btn-sm \" style=\"  margin-left: 210px;\" onclick=\"window.location.href='";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galeries_edit", ["idGalerie" => twig_get_attribute($this->env, $this->source, (isset($context["galery"]) || array_key_exists("galery", $context) ? $context["galery"] : (function () { throw new RuntimeError('Variable "galery" does not exist.', 28, $this->source); })()), "idGalerie", [], "any", false, false, false, 28)]), "html", null, true);
        echo "'\">Edit <i class=\"bi bi-pencil-square\"></i></button>

<div class=\"text-center\" >
";
        // line 31
        if (twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "
 ";
            // line 33
            echo twig_include($this->env, $context, "galeries/_delete_form.html.twig");
            echo "
               ";
        } else {
            // line 35
            echo "                           <button class=\"btn btn-danger btn-sm  \" style=\"  margin-right: 210px;\"  onclick=\"window.location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galeries_delete1", ["idGalerie" => twig_get_attribute($this->env, $this->source, (isset($context["galery"]) || array_key_exists("galery", $context) ? $context["galery"] : (function () { throw new RuntimeError('Variable "galery" does not exist.', 35, $this->source); })()), "idGalerie", [], "any", false, false, false, 35)]), "html", null, true);
            echo "'\">Delete <i class=\"bi bi-trash\"></i></button>               

               ";
        }
        // line 38
        echo "                </div>
</div>


    </div>
</div>
</div>
</div>
</div>
  <button class=\"btn btn-info btn-sm\" onclick=\"window.location.href='";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galeries_index");
        echo "'\"> <i class=\"bi bi-arrow-bar-left\"></i> Back to List  </button>

</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "galeries/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 47,  124 => 38,  117 => 35,  112 => 33,  109 => 32,  107 => 31,  101 => 28,  93 => 23,  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block tableForm %}
<div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Gallery</h1> </center>



    

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id Gallery</th>
                <td>{{ galery.idGalerie }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ galery.titreGalerie }}</td>
            </tr>
        </tbody>
    </table>
                   <div class=\"button-container\" style=\"  margin-top: 20px;\">
                     <button class=\"btn btn-success btn-sm \" style=\"  margin-left: 210px;\" onclick=\"window.location.href='{{ path('app_galeries_edit', {'idGalerie': galery.idGalerie}) }}'\">Edit <i class=\"bi bi-pencil-square\"></i></button>

<div class=\"text-center\" >
{% if articles is empty %}

 {{ include('galeries/_delete_form.html.twig') }}
               {% else %}
                           <button class=\"btn btn-danger btn-sm  \" style=\"  margin-right: 210px;\"  onclick=\"window.location.href='{{ path('app_galeries_delete1',{'idGalerie': galery.idGalerie}) }}'\">Delete <i class=\"bi bi-trash\"></i></button>               

               {% endif %}
                </div>
</div>


    </div>
</div>
</div>
</div>
</div>
  <button class=\"btn btn-info btn-sm\" onclick=\"window.location.href='{{ path('app_galeries_index') }}'\"> <i class=\"bi bi-arrow-bar-left\"></i> Back to List  </button>

</div>
</div>
{% endblock %}
", "galeries/show.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PidevRania1.0\\templates\\galeries\\show.html.twig");
    }
}
