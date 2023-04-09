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

/* register.html.twig */
class __TwigTemplate_9e91a10dab93aaf05d9e086f3497bf76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'formregister' => [$this, 'block_formregister'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
\t\t<!-- MATERIAL DESIGN ICONIC FONT -->
\t\t<link rel=\"stylesheet\"  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsRegister/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">

\t\t<!-- STYLE CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsRegister/css/style.css"), "html", null, true);
        echo "\">
\t</head>

\t<body>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "\t\t    <!-- Flashy depends on jQuery -->
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
    <!-- Include Flashy default partial -->
    ";
        // line 69
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
\t</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MyArt";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        $this->displayBlock('formregister', $context, $blocks);
        // line 63
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_formregister($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formregister"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formregister"));

        // line 18
        echo "\t\t<div class=\"wrapper\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsRegister/images/9.png"), "html", null, true);
        echo "');\">
\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"image-holder\">
\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsRegister/images/11.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<form action=\"\">
\t\t\t\t\t<h3>Registration Form</h3>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"First Name\" class=\"form-control\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Last Name\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Username\" class=\"form-control\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-account\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Email Address\" class=\"form-control\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-email\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<select name=\"\" id=\"\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\" disabled selected>Gender</option>
\t\t\t\t\t\t\t<option value=\"male\">Male</option>
\t\t\t\t\t\t\t<option value=\"femal\">Female</option>
\t\t\t\t\t\t\t<option value=\"other\">Other</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\" class=\"form-control\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-lock\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<input type=\"password\" placeholder=\"Confirm Password\" class=\"form-control\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-locat\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<button>Register
\t\t\t\t\t\t<i class=\"zmdi zmdi-arrow-right\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 21,  151 => 18,  141 => 17,  131 => 63,  129 => 17,  119 => 16,  100 => 5,  87 => 69,  82 => 67,  77 => 64,  75 => 16,  68 => 12,  62 => 9,  57 => 7,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>{% block title %}MyArt{% endblock %}</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
\t\t<!-- MATERIAL DESIGN ICONIC FONT -->
\t\t<link rel=\"stylesheet\"  href=\"{{asset('assetsRegister/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}\">

\t\t<!-- STYLE CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('assetsRegister/css/style.css')}}\">
\t</head>

\t<body>
{% block body %}
{% block formregister %}
\t\t<div class=\"wrapper\" style=\"background-image: url('{{asset('assetsRegister/images/9.png')}}');\">
\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"image-holder\">
\t\t\t\t\t<img src=\"{{asset('assetsRegister/images/11.jpg')}}\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<form action=\"\">
\t\t\t\t\t<h3>Registration Form</h3>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"First Name\" class=\"form-control\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Last Name\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Username\" class=\"form-control\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-account\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Email Address\" class=\"form-control\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-email\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<select name=\"\" id=\"\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\" disabled selected>Gender</option>
\t\t\t\t\t\t\t<option value=\"male\">Male</option>
\t\t\t\t\t\t\t<option value=\"femal\">Female</option>
\t\t\t\t\t\t\t<option value=\"other\">Other</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\" class=\"form-control\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-lock\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<input type=\"password\" placeholder=\"Confirm Password\" class=\"form-control\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-locat\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<button>Register
\t\t\t\t\t\t<i class=\"zmdi zmdi-arrow-right\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t{% endblock %}
\t\t{% endblock %}
\t\t    <!-- Flashy depends on jQuery -->
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <!-- Load Flashy default JavaScript -->
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
    <!-- Include Flashy default partial -->
    {{ include('@MercurySeriesFlashy/flashy.html.twig') }}
\t</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>", "register.html.twig", "C:\\Users\\Acer\\Downloads\\my_project_directory\\my_project_directory\\templates\\register.html.twig");
    }
}
