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

/* galeries/delete.html.twig */
class __TwigTemplate_9bb7fa3745b29eacb1ce765df4763b91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galeries/delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galeries/delete.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "galeries/delete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_tableForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        // line 4
        echo "    <h1>Supprimer la galerie</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 7, $this->source); })()), 'errors');
        echo "

        <div class=\"form-group\">
            <label for=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 10, $this->source); })()), "confirmation", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 10, $this->source); })()), "confirmation", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "label", [], "any", false, false, false, 10), "html", null, true);
        echo "</label>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 11, $this->source); })()), "confirmation", [], "any", false, false, false, 11), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            <label for=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 15, $this->source); })()), "galerie", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 15, $this->source); })()), "galerie", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "label", [], "any", false, false, false, 15), "html", null, true);
        echo "</label>
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 16, $this->source); })()), "galerie", [], "any", false, false, false, 16), 'widget');
        echo "
        </div>

        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie_index");
        echo "\" class=\"btn btn-secondary\">Annuler</a>
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new RuntimeError('Variable "deleteForm" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "galeries/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 21,  108 => 20,  101 => 16,  95 => 15,  88 => 11,  82 => 10,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block tableForm %}
    <h1>Supprimer la galerie</h1>

    {{ form_start(deleteForm) }}
        {{ form_errors(deleteForm) }}

        <div class=\"form-group\">
            <label for=\"{{ deleteForm.confirmation.vars.id }}\">{{ deleteForm.confirmation.vars.label }}</label>
            {{ form_widget(deleteForm.confirmation) }}
        </div>

        <div class=\"form-group\">
            <label for=\"{{ deleteForm.galerie.vars.id }}\">{{ deleteForm.galerie.vars.label }}</label>
            {{ form_widget(deleteForm.galerie) }}
        </div>

        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        <a href=\"{{ path('galerie_index') }}\" class=\"btn btn-secondary\">Annuler</a>
    {{ form_end(deleteForm) }}
{% endblock %}
", "galeries/delete.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PidevRania\\templates\\galeries\\delete.html.twig");
    }
}
