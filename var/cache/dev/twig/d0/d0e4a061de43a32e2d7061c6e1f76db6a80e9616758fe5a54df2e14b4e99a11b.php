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

/* security/security/boutons.html.twig */
class __TwigTemplate_69ba19bcb408525fa52cf0598a978bc14183922a2e7eeb3d7d0aa0e7bafe12ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/boutons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/boutons.html.twig"));

        // line 1
        echo "<div class=\"col-lg-12 mt-3 pt-3 pb-2  fond\">
    <div class=\"row\">
        <div class=\"centrer\">
            <div class=\"col-12\">
                
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile_edit");
        echo "\" class=\"btn btn-normal btn-outline-primary mb-2 mr-2 l-5\">
                    <i class=\"fa fa-edit\"></i>
                        ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier mon profil"), "html", null, true);
        echo "
                </a>
                
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_change_password");
        echo "\" class=\"btn btn-outline-warning mb-2 mr-2 l-5\">
                    <i class=\"fa fa-lock\"></i>
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changer mot de passe"), "html", null, true);
        echo "
                </a>
                

                
                ";
        // line 18
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODIF_FIN_CELL") && (null === (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 18, $this->source); })())))) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cotisation_new", ["cellule" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "cellule", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"btn btn-normal btn-primary mb-2 mr-2 l-5\">
                        <i class=\"fa fa-edit\"></i>
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Definir Cotisation"), "html", null, true);
            echo "
                    </a>
                    ";
        } else {
            // line 24
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cotisation_edit", ["cellule" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "cellule", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "cellule", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-normal btn-primary mb-2 mr-2 l-5\">
                            <i class=\"fa fa-edit\"></i>
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier Cotisation"), "html", null, true);
            echo "
                        </a>
                ";
        }
        // line 29
        echo "
                <div class=\"dropdown\" style=\"display: inline;\">
                    <button id=\"joindre\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        fonctions
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"joindre\">

                        <a class=\"dropdown-item\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_change", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "fonction" => 1]), "html", null, true);
        echo "\">Pesident Federation</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_change", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "fonction" => 2]), "html", null, true);
        echo "\">Secretaire Federation</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_change", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "fonction" => 3]), "html", null, true);
        echo "\">Tresorier Federation</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_change", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "fonction" => 5]), "html", null, true);
        echo "\">President Daahira</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_change", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40), "fonction" => 6]), "html", null, true);
        echo "\">Secretaire Daahira</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_change", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "fonction" => 7]), "html", null, true);
        echo "\">Tresorier Daahira</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_change", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "fonction" => 9]), "html", null, true);
        echo "\">Membre Simple</a>

                    </div>
                </div>
                

                
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/security/boutons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  129 => 41,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  100 => 29,  94 => 26,  88 => 24,  82 => 21,  76 => 19,  74 => 18,  66 => 13,  61 => 11,  55 => 8,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-12 mt-3 pt-3 pb-2  fond\">
    <div class=\"row\">
        <div class=\"centrer\">
            <div class=\"col-12\">
                
                <a href=\"{{ path('security_profile_edit') }}\" class=\"btn btn-normal btn-outline-primary mb-2 mr-2 l-5\">
                    <i class=\"fa fa-edit\"></i>
                        {{ 'Modifier mon profil'|trans }}
                </a>
                
                <a href=\"{{ path('security_change_password') }}\" class=\"btn btn-outline-warning mb-2 mr-2 l-5\">
                    <i class=\"fa fa-lock\"></i>
                    {{ 'Changer mot de passe'|trans }}
                </a>
                

                
                {% if is_granted(\"ROLE_MODIF_FIN_CELL\") and cellule is null %}
                    <a href=\"{{ path('cotisation_new', { 'cellule' : app.user.cellule.id }) }}\" class=\"btn btn-normal btn-primary mb-2 mr-2 l-5\">
                        <i class=\"fa fa-edit\"></i>
                        {{ 'Definir Cotisation'|trans }}
                    </a>
                    {% else  %}
                        <a href=\"{{ path('cotisation_edit', { 'cellule' : app.user.cellule.id, 'id' : app.user.cellule.id }) }}\" class=\"btn btn-normal btn-primary mb-2 mr-2 l-5\">
                            <i class=\"fa fa-edit\"></i>
                            {{ 'Modifier Cotisation'|trans }}
                        </a>
                {% endif %}

                <div class=\"dropdown\" style=\"display: inline;\">
                    <button id=\"joindre\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        fonctions
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"joindre\">

                        <a class=\"dropdown-item\" href=\"{{ path('fonction_change', { 'user' : user.id, 'fonction': 1})}}\">Pesident Federation</a>
                        <a class=\"dropdown-item\" href=\"{{ path('fonction_change', { 'user' : user.id, 'fonction': 2})}}\">Secretaire Federation</a>
                        <a class=\"dropdown-item\" href=\"{{ path('fonction_change', { 'user' : user.id, 'fonction': 3})}}\">Tresorier Federation</a>
                        <a class=\"dropdown-item\" href=\"{{ path('fonction_change', { 'user' : user.id, 'fonction': 5})}}\">President Daahira</a>
                        <a class=\"dropdown-item\" href=\"{{ path('fonction_change', { 'user' : user.id, 'fonction': 6})}}\">Secretaire Daahira</a>
                        <a class=\"dropdown-item\" href=\"{{ path('fonction_change', { 'user' : user.id, 'fonction': 7})}}\">Tresorier Daahira</a>
                        <a class=\"dropdown-item\" href=\"{{ path('fonction_change', { 'user' : user.id, 'fonction': 9})}}\">Membre Simple</a>

                    </div>
                </div>
                

                
            </div>
        </div>
    </div>
</div>
", "security/security/boutons.html.twig", "/var/www/html/sirmang/templates/security/security/boutons.html.twig");
    }
}
