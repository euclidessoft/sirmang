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

/* security/security/profile.html.twig */
class __TwigTemplate_29ae884fa3f330f5bfb4f16a3e594a0c1d9bb5476a1203b747c47909ff9c973d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/profile.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "security/security/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mon profile"), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
  
    <div class=\"col-12\">
       
        ";
        // line 8
        echo twig_include($this->env, $context, "security/security/boutons.html.twig");
        echo "
        
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"col-lg-12 mt-4 alert alert-success alert-dismissible fade show radius-10 shadow-black\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        <div class=\"col-lg-12\">
            <div class=\"col-lg-6  col-md-12 offset-lg-3 mt-5 mb-5 pb-2 fond-inner\">
                <div class=\"col-12 profile-header\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.JPG"), "html", null, true);
        echo "\" width=\"60\" height=\"\" alt=\"sirmang\" class=\"rounded-circle\" />
                   <h4> ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["nom_site"]) || array_key_exists("nom_site", $context) ? $context["nom_site"] : (function () { throw new RuntimeError('Variable "nom_site" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"row\">
                <div class=\"col-4 mt-5 text-center\">
                    ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "sexe", [], "any", false, false, false, 24) == "Monsieur")) {
            // line 25
            echo "                     <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar.jpg"), "html", null, true);
            echo "\" width=\"100\" alt=\"Photo\" class=\"rounded-circle\" />
                     ";
        } else {
            // line 27
            echo "                     <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-femme.jpg"), "html", null, true);
            echo "\" width=\"100\" alt=\"Photo\" class=\"rounded-circle\" />
                     ";
        }
        // line 29
        echo "                </div>
                <div class=\"col-8 mt-3 mb-4\">
                    <h6>Fonction :<b>   ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "profession", [], "any", false, false, false, 31), "html", null, true);
        echo "</b></h6>
                    <h6>Prenom :<b>   ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), "html", null, true);
        echo "</b></h6>
                    <h6>Nom :<b>   ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), "html", null, true);
        echo "</b></h6>
                    <h6>Date de naissance :<b>   ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "datenaiss", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
        echo "</b></h6>
                    <h6>Lieu de naissance :<b>   ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "lieunaiss", [], "any", false, false, false, 35), "html", null, true);
        echo "</b></h6>
                    <h6>Adresse :<b>   ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "adresse", [], "any", false, false, false, 36), "html", null, true);
        echo "</b></h6>
                    <h6>T&eacute;l&eacute;phone:<b>  ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "phone", [], "any", false, false, false, 37), "html", null, true);
        echo " </b></h6>
                    <h6> Email: <b>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), "html", null, true);
        echo "</b></h6>
                       <h6> Dahira: <b>";
        // line 39
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "cellule", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "cellule", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true))) : (print ("non definie")));
        echo " </b></h6>
                     
                </div>
                </div>
                
                  
            </div>
        </div>
        
    </div>
</div>
";
        // line 50
        $this->displayBlock('scripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 51
        echo "<script>
    function joindre() {
        \$('#joindre').html(\"<div class=\\\"spinner-border spinner-border-sm text-info\\\" role=\\\"status\\\"><span class=\\\"sr-only\\\">Loading...</span></div>\");
    }


</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/security/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 51,  199 => 50,  185 => 39,  181 => 38,  177 => 37,  173 => 36,  169 => 35,  165 => 34,  161 => 33,  157 => 32,  153 => 31,  149 => 29,  143 => 27,  137 => 25,  135 => 24,  128 => 20,  124 => 19,  119 => 16,  110 => 13,  106 => 11,  102 => 10,  97 => 8,  91 => 4,  81 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %} {{ 'Mon profile'|trans }} {% endblock %}
{% block body %}
<div class=\"row\">
  
    <div class=\"col-12\">
       
        {{ include('security/security/boutons.html.twig') }}
        
        {% for message in app.flashes('notice')%}
        <div class=\"col-lg-12 mt-4 alert alert-success alert-dismissible fade show radius-10 shadow-black\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            {{ message|trans }}
        </div>
        {% endfor%}
        <div class=\"col-lg-12\">
            <div class=\"col-lg-6  col-md-12 offset-lg-3 mt-5 mb-5 pb-2 fond-inner\">
                <div class=\"col-12 profile-header\">
                    <img src=\"{{asset('images/logo.JPG') }}\" width=\"60\" height=\"\" alt=\"sirmang\" class=\"rounded-circle\" />
                   <h4> {{ nom_site }}</h4>
                </div>
                <div class=\"row\">
                <div class=\"col-4 mt-5 text-center\">
                    {% if user.sexe == \"Monsieur\" %}
                     <img src=\"{{asset('images/avatar.jpg') }}\" width=\"100\" alt=\"Photo\" class=\"rounded-circle\" />
                     {% else %}
                     <img src=\"{{asset('images/avatar-femme.jpg') }}\" width=\"100\" alt=\"Photo\" class=\"rounded-circle\" />
                     {% endif %}
                </div>
                <div class=\"col-8 mt-3 mb-4\">
                    <h6>Fonction :<b>   {{ user.profession }}</b></h6>
                    <h6>Prenom :<b>   {{ user.prenom }}</b></h6>
                    <h6>Nom :<b>   {{ user.nom }}</b></h6>
                    <h6>Date de naissance :<b>   {{ user.datenaiss|date('d/m/Y') }}</b></h6>
                    <h6>Lieu de naissance :<b>   {{ user.lieunaiss }}</b></h6>
                    <h6>Adresse :<b>   {{ user.adresse }}</b></h6>
                    <h6>T&eacute;l&eacute;phone:<b>  {{ user.phone }} </b></h6>
                    <h6> Email: <b>{{user.email}}</b></h6>
                       <h6> Dahira: <b>{{ user.cellule ? user.cellule.nom : 'non definie' }} </b></h6>
                     
                </div>
                </div>
                
                  
            </div>
        </div>
        
    </div>
</div>
{% block scripts %}
<script>
    function joindre() {
        \$('#joindre').html(\"<div class=\\\"spinner-border spinner-border-sm text-info\\\" role=\\\"status\\\"><span class=\\\"sr-only\\\">Loading...</span></div>\");
    }


</script>
{% endblock %}
{% endblock %}
", "security/security/profile.html.twig", "/var/www/html/sirmang/templates/security/security/profile.html.twig");
    }
}
