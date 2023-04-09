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

/* users/_form.html.twig */
class __TwigTemplate_edac43296746719b887298f1a51beaee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<h3>Registration Form</h3>
<div class=\"form-wrapper\">
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "imageFile", [], "any", false, false, false, 4), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "prenomUser", [], "any", false, false, false, 7), 'row');
        echo "
     ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nomUser", [], "any", false, false, false, 8), 'row');
        echo "
</div>
<div class=\"form-wrapper\">
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "dateNaiss", [], "any", false, false, false, 11), 'row');
        echo "
</div>
<div class=\"form-wrapper\">
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "telUser", [], "any", false, false, false, 14), 'row');
        echo "
</div>
<div class=\"form-wrapper\">
";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "sexe", [], "any", false, false, false, 17), 'row');
        echo "
<i class=\"zmdi zmdi-caret-down\" style=\"font-size: 17px\"></i>
</div>
<div class=\"form-wrapper\">
";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "adresse", [], "any", false, false, false, 21), 'row');
        echo "

</div>
<div class=\"form-wrapper\">
";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "role", [], "any", false, false, false, 25), 'row');
        echo "
</div>
<div class=\"form-wrapper\">
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'row');
        echo "
<i class=\"zmdi zmdi-email\"></i>
</div>
<div class=\"form-wrapper\">
";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), 'row');
        echo "
<i class=\"zmdi zmdi-lock\"></i>
</div>
\t\t<button>Register
\t\t\t\t\t\t<i class=\"zmdi zmdi-arrow-right\"></i>
\t\t</button>\t\t\t\t\t
";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "users/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  104 => 32,  97 => 28,  91 => 25,  84 => 21,  77 => 17,  71 => 14,  65 => 11,  59 => 8,  55 => 7,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
<h3>Registration Form</h3>
<div class=\"form-wrapper\">
{{ form_row(form.imageFile) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.prenomUser) }}
     {{ form_row(form.nomUser) }}
</div>
<div class=\"form-wrapper\">
{{ form_row(form.dateNaiss) }}
</div>
<div class=\"form-wrapper\">
{{ form_row(form.telUser) }}
</div>
<div class=\"form-wrapper\">
{{ form_row(form.sexe) }}
<i class=\"zmdi zmdi-caret-down\" style=\"font-size: 17px\"></i>
</div>
<div class=\"form-wrapper\">
{{ form_row(form.adresse) }}

</div>
<div class=\"form-wrapper\">
{{ form_row(form.role) }}
</div>
<div class=\"form-wrapper\">
{{ form_row(form.email) }}
<i class=\"zmdi zmdi-email\"></i>
</div>
<div class=\"form-wrapper\">
{{ form_row(form.password) }}
<i class=\"zmdi zmdi-lock\"></i>
</div>
\t\t<button>Register
\t\t\t\t\t\t<i class=\"zmdi zmdi-arrow-right\"></i>
\t\t</button>\t\t\t\t\t
{{ form_end(form) }}
", "users/_form.html.twig", "C:\\Users\\Acer\\Downloads\\my_project_directory\\my_project_directory\\templates\\users\\_form.html.twig");
    }
}
