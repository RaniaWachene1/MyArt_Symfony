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

/* articles/_formedit.html.twig */
class __TwigTemplate_46d7c74efef1c309c4fa9e4215551136 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/_formedit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/_formedit.html.twig"));

        // line 1
        echo "<div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Create new Article</h1> </center>
              ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"col-12\">
    <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "titreArticle", [], "any", false, false, false, 11), 'row');
        echo "
    </div>

      <div class=\"col-12\">
      <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nomArtiste", [], "any", false, false, false, 16), 'row');
        echo "
    </div>
          <div class=\"col-12\">
          <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prixArticle", [], "any", false, false, false, 20), 'row');
        echo "
    </div>
          <div class=\"col-12\">
          <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "descArticle", [], "any", false, false, false, 24), 'row');
        echo "
    </div>
          <div class=\"col-12\">
          <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "quantiteArticle", [], "any", false, false, false, 28), 'row');
        echo "
    </div>
    <div class=\"col-12\">
        <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "idGalerie", [], "any", false, false, false, 32), 'row');
        echo "
    </div>
        <div class=\"col-12\">
        <label for=\"inputNanme4\" class=\"form-label\"></label>
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "fileFile", [], "any", false, false, false, 36), 'row');
        echo "

    </div >
        
         <div class=\"text-center\" style=\"  margin-top: 50px;\">
                  <button type=\"submit\" class=\"btn btn-primary\">Update</button>
               
                </div>

";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
</div>
</div>
</div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "articles/_formedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 45,  101 => 36,  94 => 32,  87 => 28,  80 => 24,  73 => 20,  66 => 16,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\" justify-content: center; margin-left: 150px;\">
        
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 15px; padding: 10px;\">

            <div class=\"card-body\">
             <center> <h1 class=\"card-title\" >Create new Article</h1> </center>
              {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
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
    {{ form_row(form.idGalerie)}}
    </div>
        <div class=\"col-12\">
        <label for=\"inputNanme4\" class=\"form-label\"></label>
    {{ form_row(form.fileFile)}}

    </div >
        
         <div class=\"text-center\" style=\"  margin-top: 50px;\">
                  <button type=\"submit\" class=\"btn btn-primary\">Update</button>
               
                </div>

{{ form_end(form) }}
</div>
</div>
</div>
</div>", "articles/_formedit.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PidevRania\\templates\\articles\\_formedit.html.twig");
    }
}
