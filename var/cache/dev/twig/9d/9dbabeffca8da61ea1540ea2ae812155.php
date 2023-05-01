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

/* articles/_form.html.twig */
class __TwigTemplate_f45570786c80e34120407a7ed6f83a3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/_form.html.twig"));

        // line 1
        echo "
        <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Create new Article</h5>
              ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "titreArticle", [], "any", false, false, false, 10), 'row');
        echo "
    </div>
      <div class=\"col-12\">
      <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nomArtiste", [], "any", false, false, false, 14), 'row');
        echo "
    </div>
          <div class=\"col-12\">
          <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prixArticle", [], "any", false, false, false, 18), 'row');
        echo "
    </div>
          <div class=\"col-12\">
          <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "descArticle", [], "any", false, false, false, 22), 'row');
        echo "
    </div>
          <div class=\"col-12\">
          <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "quantiteArticle", [], "any", false, false, false, 26), 'row');
        echo "
    </div>
        <div class=\"col-12\">
        <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "photoArticle", [], "any", false, false, false, 30), 'row');
        echo "
    </div>
        <div class=\"col-12\">
        <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "idGalerie", [], "any", false, false, false, 34), 'row');
        echo "
    </div>
         <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">Create</button>
               
                </div>

";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
</div>
</div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "articles/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Create new Article</h5>
              {{ form_start(form) }}
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.titreArticle)}}
    </div>
      <div class=\"col-12\">
      <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.nomArtiste)}}
    </div>
          <div class=\"col-12\">
          <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.prixArticle)}}
    </div>
          <div class=\"col-12\">
          <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.descArticle)}}
    </div>
          <div class=\"col-12\">
          <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.quantiteArticle)}}
    </div>
        <div class=\"col-12\">
        <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.photoArticle)}}
    </div>
        <div class=\"col-12\">
        <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.idGalerie)}}
    </div>
         <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">Create</button>
               
                </div>

{{ form_end(form) }}
</div>
</div>
</div>", "articles/_form.html.twig", "C:\\Users\\rania\\my_project_directory\\templates\\articles\\_form.html.twig");
    }
}
