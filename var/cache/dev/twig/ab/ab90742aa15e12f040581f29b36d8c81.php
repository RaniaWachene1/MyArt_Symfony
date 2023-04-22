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

/* galeries/edit.html.twig */
class __TwigTemplate_acca326005addbe9601d056509e5cf1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galeries/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galeries/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "galeries/edit.html.twig", 1);
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
        echo "    

    ";
        // line 8
        echo twig_include($this->env, $context, "galeries/_formedit.html.twig", ["button_label" => "Update"]);
        echo "


    
    ";
        // line 12
        if (twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "     <div  style=\"  margin-top: 10px;\">
    <button class=\"btn btn-danger btn-sm  \" style=\"  margin-right: 210px;\"  onclick=\"window.location.href='";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galeries_delete", ["idGalerie" => twig_get_attribute($this->env, $this->source, (isset($context["galery"]) || array_key_exists("galery", $context) ? $context["galery"] : (function () { throw new RuntimeError('Variable "galery" does not exist.', 14, $this->source); })()), "idGalerie", [], "any", false, false, false, 14)]), "html", null, true);
            echo "'\">Delete <i class=\"bi bi-trash\"></i></button>               
</div>
        
    ";
        } else {
            // line 18
            echo "    <div  style=\"  margin-top: 10px;\">
    <button class=\"btn btn-danger btn-sm  \" style=\"  margin-right: 210px;\"  onclick=\"window.location.href='";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galeries_delete1", ["idGalerie" => twig_get_attribute($this->env, $this->source, (isset($context["galery"]) || array_key_exists("galery", $context) ? $context["galery"] : (function () { throw new RuntimeError('Variable "galery" does not exist.', 19, $this->source); })()), "idGalerie", [], "any", false, false, false, 19)]), "html", null, true);
            echo "'\">Delete <i class=\"bi bi-trash\"></i></button>               
</div>


    ";
        }
        // line 24
        echo "    </div>
  <button class=\"btn btn-info btn-sm\" onclick=\"window.location.href='";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galeries_index");
        echo "'\"> <i class=\"bi bi-arrow-bar-left\"></i> Back to List  </button>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "galeries/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  102 => 24,  94 => 19,  91 => 18,  84 => 14,  81 => 13,  79 => 12,  72 => 8,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block tableForm %}
    

    {{ include('galeries/_formedit.html.twig', {'button_label': 'Update'}) }}


    
    {% if articles is empty %}
     <div  style=\"  margin-top: 10px;\">
    <button class=\"btn btn-danger btn-sm  \" style=\"  margin-right: 210px;\"  onclick=\"window.location.href='{{ path('app_galeries_delete',{'idGalerie': galery.idGalerie}) }}'\">Delete <i class=\"bi bi-trash\"></i></button>               
</div>
        
    {% else %}
    <div  style=\"  margin-top: 10px;\">
    <button class=\"btn btn-danger btn-sm  \" style=\"  margin-right: 210px;\"  onclick=\"window.location.href='{{ path('app_galeries_delete1',{'idGalerie': galery.idGalerie}) }}'\">Delete <i class=\"bi bi-trash\"></i></button>               
</div>


    {% endif %}
    </div>
  <button class=\"btn btn-info btn-sm\" onclick=\"window.location.href='{{ path('app_galeries_index') }}'\"> <i class=\"bi bi-arrow-bar-left\"></i> Back to List  </button>

</div>
{% endblock %}
", "galeries/edit.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PidevRania1.0\\templates\\galeries\\edit.html.twig");
    }
}
