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

/* reset_password/check_email.html.twig */
class __TwigTemplate_76e675ab99399e7f512a04311583df2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formregister' => [$this, 'block_formregister'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $this->parent = $this->loadTemplate("register.html.twig", "reset_password/check_email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_formregister($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formregister"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formregister"));

        // line 4
        echo "\t<div class=\"wrapper\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsRegister/images/9.png"), "html", null, true);
        echo "');\">
\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"image-holder\">
\t\t\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsRegister/images/11.jpg"), "html", null, true);
        echo "\" height=\"650\" width=\"600\" alt=\"\">
\t\t\t\t</div>
    
    <h2 class=\"active\">Courriel de réinitialisation du mot de passe envoyé</h2>
    <p>
        Si un compte correspondant à votre adresse e-mail existe, un e-mail contenant un lien que vous pouvez utiliser pour réinitialiser votre mot de passe vient d'être envoyé.
        Ce lien expirera dans";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 13, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 13, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 13), "ResetPasswordBundle"), "html", null, true);
        echo ".
    </p>
    <p>Si vous ne recevez pas d'e-mail, veuillez vérifier votre dossier spam ou <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Réessayez</a>.</p>
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  84 => 13,  75 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'register.html.twig' %}

{% block formregister %}
\t<div class=\"wrapper\" style=\"background-image: url('{{asset('assetsRegister/images/9.png')}}');\">
\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"image-holder\">
\t\t\t\t\t<img src=\"{{asset('assetsRegister/images/11.jpg')}}\" height=\"650\" width=\"600\" alt=\"\">
\t\t\t\t</div>
    
    <h2 class=\"active\">Courriel de réinitialisation du mot de passe envoyé</h2>
    <p>
        Si un compte correspondant à votre adresse e-mail existe, un e-mail contenant un lien que vous pouvez utiliser pour réinitialiser votre mot de passe vient d'être envoyé.
        Ce lien expirera dans{{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.
    </p>
    <p>Si vous ne recevez pas d'e-mail, veuillez vérifier votre dossier spam ou <a href=\"{{ path('app_forgot_password_request') }}\">Réessayez</a>.</p>
</div>
</div>
{% endblock %}", "reset_password/check_email.html.twig", "C:\\Users\\Acer\\Downloads\\my_project_directory\\my_project_directory\\templates\\reset_password\\check_email.html.twig");
    }
}
