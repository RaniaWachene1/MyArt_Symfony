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

/* users/new2.html.twig */
class __TwigTemplate_2e9510b8e05765b6cf88531c9677fa01 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/new2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/new2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/new2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New user";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_tableForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableForm"));

        // line 7
        echo "
    <div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Create new user</h1> </center>

  ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "imageFile", [], "any", false, false, false, 19), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenomUser", [], "any", false, false, false, 23), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nomUser", [], "any", false, false, false, 27), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateNaiss", [], "any", false, false, false, 31), 'row');
        echo "
    </div>
   <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "telUser", [], "any", false, false, false, 35), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "sexe", [], "any", false, false, false, 39), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "adresse", [], "any", false, false, false, 43), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "role", [], "any", false, false, false, 47), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'row');
        echo "
    </div>
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), 'row');
        echo "
    </div>
    <div class=\"text-center\" style=\"  margin-top: 50px;\">
                  <button type=\"submit\" class=\"btn btn-primary\">Create</button>
               
                </div>
    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
</div>
</div>
</div>
</div>

    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/new2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 67,  177 => 61,  168 => 55,  161 => 51,  154 => 47,  147 => 43,  140 => 39,  133 => 35,  126 => 31,  119 => 27,  112 => 23,  105 => 19,  99 => 16,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New user{% endblock %}

    
{% block tableForm %}

    <div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Create new user</h1> </center>

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
                  <button type=\"submit\" class=\"btn btn-primary\">Create</button>
               
                </div>
    {{ form_end(form) }}
</div>
</div>
</div>
</div>

    <a href=\"{{ path('app_users_index') }}\">back to list</a>
{% endblock %}

", "users/new2.html.twig", "C:\\Users\\Acer\\Downloads\\my_project_directory\\my_project_directory\\templates\\users\\new2.html.twig");
    }
}
