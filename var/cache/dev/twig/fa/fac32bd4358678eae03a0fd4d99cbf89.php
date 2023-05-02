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

/* galeries/index.html.twig */
class __TwigTemplate_dd5ef94ddf780060fe9834ce1ae96d3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galeries/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galeries/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "galeries/index.html.twig", 1);
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
             <center> <h1 class=\"card-title\" >List of Galleries </h1> </center>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id Gallery</th>
                <th>Title</th>
                <th class=\"text-center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galeries"]) || array_key_exists("galeries", $context) ? $context["galeries"] : (function () { throw new RuntimeError('Variable "galeries" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["galery"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "idGalerie", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "titreGalerie", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>
                <button class=\"btn btn-info btn-sm  \" style=\"  margin-left: 60px;\" onclick=\"window.location.href='";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galeries_show", ["idGalerie" => twig_get_attribute($this->env, $this->source, $context["galery"], "idGalerie", [], "any", false, false, false, 25)]), "html", null, true);
            echo "'\">Show <i class=\"bi bi-eye\"></i></button>

                    <button class=\"btn btn-info btn-sm  \" style=\"  margin-left: 30px;\" onclick=\"window.location.href='";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galeries_edit", ["idGalerie" => twig_get_attribute($this->env, $this->source, $context["galery"], "idGalerie", [], "any", false, false, false, 27)]), "html", null, true);
            echo "'\">Edit <i class=\"bi bi-pencil-square\"></i></button>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
<div class=\"text-center\" style=\"  margin-top: 50px;\">
               
                                   <button class=\"btn btn-primary\" onclick=\"window.location.href='";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galeries_new");
        echo "'\"> <i class=\"bi bi-plus\"></i>Create new Gallery</button>

                </div>
    

</div>
</div>
</div>
</div>
</div>
<div  style=\"  margin-top: 10px;\">
<button class=\"btn btn-primary\" onclick=\"window.location.href='";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_index");
        echo "'\">Artist view</button>
</div>
<div  style=\"  margin-top: 10px;\">
<button class=\"btn btn-primary\"  onclick=\"window.location.href='";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_indexfront");
        echo "'\">Client view </button>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "galeries/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  148 => 51,  134 => 40,  128 => 36,  119 => 32,  109 => 27,  104 => 25,  99 => 23,  95 => 22,  92 => 21,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block tableForm %}
<div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >List of Galleries </h1> </center>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id Gallery</th>
                <th>Title</th>
                <th class=\"text-center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for galery in galeries %}
            <tr>
                <td>{{ galery.idGalerie }}</td>
                <td>{{ galery.titreGalerie }}</td>
                <td>
                <button class=\"btn btn-info btn-sm  \" style=\"  margin-left: 60px;\" onclick=\"window.location.href='{{ path('app_galeries_show', {'idGalerie': galery.idGalerie}) }}'\">Show <i class=\"bi bi-eye\"></i></button>

                    <button class=\"btn btn-info btn-sm  \" style=\"  margin-left: 30px;\" onclick=\"window.location.href='{{ path('app_galeries_edit', {'idGalerie': galery.idGalerie}) }}'\">Edit <i class=\"bi bi-pencil-square\"></i></button>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<div class=\"text-center\" style=\"  margin-top: 50px;\">
               
                                   <button class=\"btn btn-primary\" onclick=\"window.location.href='{{ path('app_galeries_new') }}'\"> <i class=\"bi bi-plus\"></i>Create new Gallery</button>

                </div>
    

</div>
</div>
</div>
</div>
</div>
<div  style=\"  margin-top: 10px;\">
<button class=\"btn btn-primary\" onclick=\"window.location.href='{{ path('app_articles_index') }}'\">Artist view</button>
</div>
<div  style=\"  margin-top: 10px;\">
<button class=\"btn btn-primary\"  onclick=\"window.location.href='{{ path('app_articles_indexfront') }}'\">Client view </button>
</div>
{% endblock %}", "galeries/index.html.twig", "C:\\Users\\rania\\Downloads\\PidevRania1.0\\templates\\galeries\\index.html.twig");
    }
}
