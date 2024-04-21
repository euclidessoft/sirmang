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

/* security/security/user.html.twig */
class __TwigTemplate_65dd61ed0cb32743b6fba7bfe199cb92b03bdf9b794c51674b50fb7f5c669d2c extends Template
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
        return "layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/user.html.twig"));

        $this->parent = $this->loadTemplate("layout1.html.twig", "security/security/user.html.twig", 1);
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
        echo twig_include($this->env, $context, "security/security/boutons-admin.html.twig");
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
        echo "\" width=\"60\" height=\"\" alt=\"tam\" class=\"rounded-circle\" />
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
                    <h6>T&eacute;l&eacute;phone:<b>  ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "phone", [], "any", false, false, false, 36), "html", null, true);
        echo " </b></h6>
                    <h6> Email: <b>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), "html", null, true);
        echo "</b></h6>
                    <h6>Adresse :<b>   ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "adresse", [], "any", false, false, false, 38), "html", null, true);
        echo "</b></h6>
                </div>
                </div>
                        
                    
            
                
            </div>
        </div>
    </div>
</div>
";
        // line 49
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

        // line 50
        echo "<script>
    
    function del(id) {
        if (confirm(\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voulez-vous vraiment supprimer cet utilisateur ?"), "html", null, true);
        echo "\")) {
            \$('#btn').html(\"<i class=\\\"fa fa-spinner\\\"></i>\");
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user_delete");
        echo "\",
                data: \"usr=\" + id,
                success: function(data) {
                    if (data['ok'] != '') {
                        document.location.href = data['ok'];
                    }
                },
                error: function() {
                    alert(\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La requête n'a pas abouti"), "html", null, true);
        echo "\");
                }
            });
        }

    }

    function userdisable(id) {
        if (confirm(\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voulez-vous vraiment désactiver cet utilisateur ?"), "html", null, true);
        echo "\")) {
            \$('#btn' + id).html(\"<i class='fa fa-spinner'></i>\");
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user_disable");
        echo "\",
                data: \"usr=\" + id,
                success: function(data) {
                    if (data['ok'] != '') {
                        \$('#btn' + id).attr('class', 'btn btn-shadow btn-td btn-normal btn-success');
                        \$('#btn' + id).attr('onclick', 'userenable(' + id + ')');
                        \$('#btn' + id).html(\"<i class='fa fa-lock-open'></i> ";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activer"), "html", null, true);
        echo "\");
                    }
                },
                error: function() {
                    alert(\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La requête n'a pas abouti"), "html", null, true);
        echo "\");
                }
            });
        }

    }

    function userenable(id) {
        if (confirm(\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voulez-vous vraiment activer cet utilisateur ?"), "html", null, true);
        echo "\")) {
            \$('#btn' + id).html(\"<i class='fa fa-spinner'></i>\");
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user_enable");
        echo "\",
                data: \"usr=\" + id,
                success: function(data) {
                    if (data['ok'] != '') {
                        \$('#btn' + id).attr('class', 'btn btn-shadow btn-td btn-normal btn-warning');
                        \$('#btn' + id).attr('onclick', 'userdisable(' + id + ')');
                        \$('#btn' + id).html(\"<i class='fa fa-user-lock'></i> ";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Désactiver"), "html", null, true);
        echo "\");
                        document.location.href = \"/User/\"+id;
                    }
                },
                error: function() {
                    alert(\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La requête n'a pas abouti"), "html", null, true);
        echo "\");
                }
            });
        }

    }

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/security/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 110,  298 => 105,  289 => 99,  282 => 95,  271 => 87,  264 => 83,  255 => 77,  248 => 73,  237 => 65,  226 => 57,  219 => 53,  214 => 50,  195 => 49,  181 => 38,  177 => 37,  173 => 36,  169 => 35,  165 => 34,  161 => 33,  157 => 32,  153 => 31,  149 => 29,  143 => 27,  137 => 25,  135 => 24,  128 => 20,  124 => 19,  119 => 16,  110 => 13,  106 => 11,  102 => 10,  97 => 8,  91 => 4,  81 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout1.html.twig' %}
{% block title %} {{ 'Mon profile'|trans }} {% endblock %}
{% block body %}
<div class=\"row\">
  
    <div class=\"col-12\">
       
        {{ include('security/security/boutons-admin.html.twig') }}
        
        {% for message in app.flashes('notice')%}
        <div class=\"col-lg-12 mt-4 alert alert-success alert-dismissible fade show radius-10 shadow-black\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            {{ message|trans }}
        </div>
        {% endfor%}
        <div class=\"col-lg-12\">
            <div class=\"col-lg-6  col-md-12 offset-lg-3 mt-5 mb-5 pb-2 fond-inner\">
                <div class=\"col-12 profile-header\">
                    <img src=\"{{asset('images/logo.JPG') }}\" width=\"60\" height=\"\" alt=\"tam\" class=\"rounded-circle\" />
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
                    <h6>T&eacute;l&eacute;phone:<b>  {{ user.phone }} </b></h6>
                    <h6> Email: <b>{{user.email}}</b></h6>
                    <h6>Adresse :<b>   {{ user.adresse }}</b></h6>
                </div>
                </div>
                        
                    
            
                
            </div>
        </div>
    </div>
</div>
{% block scripts %}
<script>
    
    function del(id) {
        if (confirm(\"{{ 'Voulez-vous vraiment supprimer cet utilisateur ?'|trans }}\")) {
            \$('#btn').html(\"<i class=\\\"fa fa-spinner\\\"></i>\");
            \$.ajax({
                type: \"POST\",
                url: \"{{path('security_user_delete')}}\",
                data: \"usr=\" + id,
                success: function(data) {
                    if (data['ok'] != '') {
                        document.location.href = data['ok'];
                    }
                },
                error: function() {
                    alert(\"{{ 'La requête n\\'a pas abouti'|trans}}\");
                }
            });
        }

    }

    function userdisable(id) {
        if (confirm(\"{{ 'Voulez-vous vraiment désactiver cet utilisateur ?'|trans }}\")) {
            \$('#btn' + id).html(\"<i class='fa fa-spinner'></i>\");
            \$.ajax({
                type: \"POST\",
                url: \"{{path('security_user_disable')}}\",
                data: \"usr=\" + id,
                success: function(data) {
                    if (data['ok'] != '') {
                        \$('#btn' + id).attr('class', 'btn btn-shadow btn-td btn-normal btn-success');
                        \$('#btn' + id).attr('onclick', 'userenable(' + id + ')');
                        \$('#btn' + id).html(\"<i class='fa fa-lock-open'></i> {{'Activer'|trans}}\");
                    }
                },
                error: function() {
                    alert(\"{{ 'La requête n\\'a pas abouti'|trans}}\");
                }
            });
        }

    }

    function userenable(id) {
        if (confirm(\"{{ 'Voulez-vous vraiment activer cet utilisateur ?'|trans }}\")) {
            \$('#btn' + id).html(\"<i class='fa fa-spinner'></i>\");
            \$.ajax({
                type: \"POST\",
                url: \"{{path('security_user_enable')}}\",
                data: \"usr=\" + id,
                success: function(data) {
                    if (data['ok'] != '') {
                        \$('#btn' + id).attr('class', 'btn btn-shadow btn-td btn-normal btn-warning');
                        \$('#btn' + id).attr('onclick', 'userdisable(' + id + ')');
                        \$('#btn' + id).html(\"<i class='fa fa-user-lock'></i> {{'Désactiver'|trans}}\");
                        document.location.href = \"/User/\"+id;
                    }
                },
                error: function() {
                    alert(\"{{ 'La requête n\\'a pas abouti'|trans}}\");
                }
            });
        }

    }

</script>
{% endblock %}
{% endblock %}
", "security/security/user.html.twig", "/var/www/html/sirmang/templates/security/security/user.html.twig");
    }
}
