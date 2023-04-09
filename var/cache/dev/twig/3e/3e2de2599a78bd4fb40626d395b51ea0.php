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

/* users/index.html.twig */
class __TwigTemplate_6c9cd33a4f5c070ea3c40598b70b0109 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/index.html.twig", 1);
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
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 20px; padding: 50px;\">

            <div class=\"card-body\">
 <center> <h1 class=\"card-title\" >Users</h1> </center> 
    

    <table class=\"table\">
        <thead>
            <tr>
             
                <th>NomUser</th>
                <th>PrenomUser</th>
                
            
               
                <th>Img</th>
                <th>Role</th>
                <th>Block</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "        
                ";
            // line 32
            if ((twig_in_filter("ROLE_CLIENT", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 32)) || twig_in_filter("ROLE_ARTIST", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 32)))) {
                // line 33
                echo "            <tr>
                
                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nomUser", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenomUser", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
             
               
                
                <td><img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["user"], "imageFile"), "html", null, true);
                echo "\" width=\"80\" height=\"80\"></td>
                    ";
                // line 41
                if (twig_in_filter("ROLE_CLIENT", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 41))) {
                    // line 42
                    echo "                <td>Client</td>
                    ";
                } elseif (twig_in_filter("ROLE_ARTIST", twig_get_attribute($this->env, $this->source,                 // line 43
$context["user"], "roles", [], "any", false, false, false, 43))) {
                    // line 44
                    echo "                        <td>Artist</td>
                        ";
                } else {
                    // line 46
                    echo "                        <td>Admin</td>
                ";
                }
                // line 48
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "block", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                <td>
                <button class=\"btn btn-primary\" onclick=\"window.location.href='";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["idUser" => twig_get_attribute($this->env, $this->source, $context["user"], "idUser", [], "any", false, false, false, 50)]), "html", null, true);
                echo "'\">show</button>
                   &nbsp;&nbsp;
                 <button class=\"btn btn-primary\" onclick=\"window.location.href=' ";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit2", ["idUser" => twig_get_attribute($this->env, $this->source, $context["user"], "idUser", [], "any", false, false, false, 52)]), "html", null, true);
                echo "'\">edit</button>
                </td>
            </tr>
            ";
            }
            // line 56
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <tr>
                <td colspan=\"12\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>
<button class=\"btn btn-primary\" onclick=\"window.location.href='";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_new2");
        echo "'\"> Create new</button>
    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 63,  171 => 61,  162 => 57,  157 => 56,  150 => 52,  145 => 50,  139 => 48,  135 => 46,  131 => 44,  129 => 43,  126 => 42,  124 => 41,  120 => 40,  113 => 36,  109 => 35,  105 => 33,  103 => 32,  100 => 31,  95 => 30,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block tableForm %}
<div style=\" justify-content: center; margin-left: 150px;\">
       
          <div class=\"card\">
          <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 20px; padding: 50px;\">

            <div class=\"card-body\">
 <center> <h1 class=\"card-title\" >Users</h1> </center> 
    

    <table class=\"table\">
        <thead>
            <tr>
             
                <th>NomUser</th>
                <th>PrenomUser</th>
                
            
               
                <th>Img</th>
                <th>Role</th>
                <th>Block</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
        
                {% if \"ROLE_CLIENT\" in user.roles or \"ROLE_ARTIST\" in user.roles %}
            <tr>
                
                <td>{{ user.nomUser }}</td>
                <td>{{ user.prenomUser }}</td>
             
               
                
                <td><img src=\"{{vich_uploader_asset(user,'imageFile') }}\" width=\"80\" height=\"80\"></td>
                    {% if \"ROLE_CLIENT\" in user.roles %}
                <td>Client</td>
                    {% elseif \"ROLE_ARTIST\" in user.roles %}
                        <td>Artist</td>
                        {% else %}
                        <td>Admin</td>
                {% endif %}
                <td>{{ user.block }}</td>
                <td>
                <button class=\"btn btn-primary\" onclick=\"window.location.href='{{ path('app_users_show', {'idUser': user.idUser}) }}'\">show</button>
                   &nbsp;&nbsp;
                 <button class=\"btn btn-primary\" onclick=\"window.location.href=' {{ path('app_users_edit2', {'idUser': user.idUser}) }}'\">edit</button>
                </td>
            </tr>
            {% endif %}
        {% else %}
            <tr>
                <td colspan=\"12\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<button class=\"btn btn-primary\" onclick=\"window.location.href='{{ path('app_users_new2' ) }}'\"> Create new</button>
    

{% endblock %}
", "users/index.html.twig", "C:\\Users\\Acer\\Downloads\\my_project_directory\\my_project_directory\\templates\\users\\index.html.twig");
    }
}
