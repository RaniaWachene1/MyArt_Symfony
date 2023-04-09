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

/* users/edit2.html.twig */
class __TwigTemplate_023316e75f175062460d777fc788075f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/edit2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/edit2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/edit2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_tableForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        // line 5
        echo "<div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Update user account</h1> </center>

  ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "imageFile", [], "any", false, false, false, 16), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenomUser", [], "any", false, false, false, 20), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nomUser", [], "any", false, false, false, 24), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dateNaiss", [], "any", false, false, false, 28), 'row');
        echo "
    </div>
   <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "telUser", [], "any", false, false, false, 32), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "sexe", [], "any", false, false, false, 36), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "adresse", [], "any", false, false, false, 40), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "role", [], "any", false, false, false, 44), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), 'row');
        echo "
    </div>
    <div class=\"text-center\" style=\"  margin-top: 50px;\">
                  <button type=\"submit\" class=\"btn btn-primary\">Update</button>
               
                </div>
    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
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
        return "users/edit2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 58,  147 => 52,  140 => 48,  133 => 44,  126 => 40,  119 => 36,  112 => 32,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block tableForm %}
<div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Update user account</h1> </center>

  {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
<div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.imageFile)}}
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.prenomUser)}}
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.nomUser)}}
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.dateNaiss)}}
    </div>
   <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.telUser)}}
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.sexe)}}
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.adresse)}}
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.role)}}
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.email)}}
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.password)}}
    </div>
    <div class=\"text-center\" style=\"  margin-top: 50px;\">
                  <button type=\"submit\" class=\"btn btn-primary\">Update</button>
               
                </div>
    {{ form_end(form) }}
</div>
</div>
</div>
</div>
{% endblock %}", "users/edit2.html.twig", "C:\\Users\\Acer\\Downloads\\my_project_directory\\my_project_directory\\templates\\users\\edit2.html.twig");
    }
}
