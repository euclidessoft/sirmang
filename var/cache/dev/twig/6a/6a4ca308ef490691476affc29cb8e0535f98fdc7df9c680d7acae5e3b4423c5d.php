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

/* security/security/boutons-admin.html.twig */
class __TwigTemplate_49706d0982ff10f5d242baab458d0d61c07c9233939d7be2a24d1cb9aa765bdc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/boutons-admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/boutons-admin.html.twig"));

        // line 1
        echo "<div class=\"col-lg-12 mt-3 pt-3 pb-2  fond\">
    <div class=\"row\">
        <div class=\"centrer\">
            ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODIF_ADMIN_CELL")) {
            // line 5
            echo "            <div class=\"col-12\">
                    
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user_edit", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\" class=\"btn btn-normal btn-outline-primary mb-2 mr-2 l-5\">
                    <i class=\"fa fa-edit\"></i>
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modifier Infos Utilisateur"), "html", null, true);
            echo "
                 </a>
                ";
            // line 11
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROPRIETAIRE")) {
                // line 12
                echo "                    ";
                $context["admin"] = 0;
                // line 13
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "roles", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 14
                    echo "                        ";
                    if (($context["role"] == "ROLE_ADMIN")) {
                        // line 15
                        echo "                            ";
                        $context["admin"] = 1;
                        // line 16
                        echo "                        ";
                    }
                    // line 17
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "
                    ";
                // line 19
                if (((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 19, $this->source); })()) == 0)) {
                    // line 20
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user_admin", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
                    echo "\" class=\"btn btn-normal btn-outline-danger mb-2 mr-2 l-5\">
                            <i class=\"fa fa-edit\"></i>
                       D&eacute;signer comme Administrateur
                        </a>
                    ";
                } else {
                    // line 25
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user_admin_cancel", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
                    echo "\" class=\"btn btn-normal btn-outline-success mb-2 mr-2 l-5\">
                            <i class=\"fa fa-edit\"></i>
                       D&eacute;activer Administrateur
                        </a>
                    ";
                }
                // line 30
                echo "                ";
            }
            // line 31
            echo "                <button class=\"btn btn-normal btn-danger mb-2 mr-2 l-5\" onclick=\"del(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
            echo ")\" id=\"btn\">
                    <i class=\"fa fa-trash\"></i>
                ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Supprimer Membre"), "html", null, true);
            echo "
                </button>

                ";
            // line 36
            if ((null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "cellule", [], "any", false, false, false, 36))) {
                // line 37
                echo "                <div class=\"dropdown\" style=\"display: inline;\">
                    <button id=\"joindre\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                   
                        affecter a un Dahira
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"joindre\">
                            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cellules"]) || array_key_exists("cellules", $context) ? $context["cellules"] : (function () { throw new RuntimeError('Variable "cellules" does not exist.', 43, $this->source); })()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["cellule"]) {
                    // line 44
                    echo "                                <a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cellule_joindre_admin", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "cellule" => twig_get_attribute($this->env, $this->source, $context["cellule"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                    echo "\" onclick=\"joindre()\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cellule"], "nom", [], "any", false, false, false, 44), "html", null, true);
                    echo "</a>
                            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 46
                    echo "                                Aucune Cellule
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cellule'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                    </div>
              </div>

                ";
            }
            // line 52
            echo "                    
                
                  ";
            // line 54
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODIF_ADMIN_CELL") &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "cellule", [], "any", false, false, false, 54)))) {
                echo " 
                <td data-label=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
                echo "\">
                            ";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "enabled", [], "any", false, false, false, 56) == 1)) {
                    // line 57
                    echo "                            <button class=\"btn btn-shadow btn-td btn-normal btn-warning\" id=\"btn";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "\" onclick=\"userdisable(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
                    echo ")\">
                                <i class=\"fa fa-user-lock\"></i>
                                ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Désactiver"), "html", null, true);
                    echo "
                            </button>
                            ";
                } else {
                    // line 62
                    echo "                            <button class=\"btn btn-shadow btn-td btn-normal btn-success\" id=\"btn";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62), "html", null, true);
                    echo "\" onclick=\"userenable(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62), "html", null, true);
                    echo ")\">
                                <i class=\"fa fa-lock-open\"></i>
                                ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activer"), "html", null, true);
                    echo "
                            </button>
                            ";
                }
                // line 67
                echo "                </td>
                ";
            }
            // line 69
            echo "
                
                
            </div>
            ";
        }
        // line 74
        echo "        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/security/boutons-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 74,  211 => 69,  207 => 67,  201 => 64,  193 => 62,  187 => 59,  179 => 57,  177 => 56,  173 => 55,  169 => 54,  165 => 52,  159 => 48,  152 => 46,  142 => 44,  137 => 43,  129 => 37,  127 => 36,  121 => 33,  115 => 31,  112 => 30,  103 => 25,  94 => 20,  92 => 19,  89 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  69 => 13,  66 => 12,  64 => 11,  59 => 9,  54 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-12 mt-3 pt-3 pb-2  fond\">
    <div class=\"row\">
        <div class=\"centrer\">
            {% if is_granted(\"ROLE_MODIF_ADMIN_CELL\") %}
            <div class=\"col-12\">
                    
                <a href=\"{{ path('security_user_edit', {user : user.id}) }}\" class=\"btn btn-normal btn-outline-primary mb-2 mr-2 l-5\">
                    <i class=\"fa fa-edit\"></i>
                {{ 'Modifier Infos Utilisateur'|trans }}
                 </a>
                {% if is_granted(\"ROLE_PROPRIETAIRE\") %}
                    {% set admin = 0 %}
                    {% for role in user.roles %}
                        {% if role == 'ROLE_ADMIN' %}
                            {% set admin = 1 %}
                        {% endif %}
                    {% endfor %}

                    {% if admin == 0 %}
                        <a href=\"{{ path('security_user_admin', {user : user.id}) }}\" class=\"btn btn-normal btn-outline-danger mb-2 mr-2 l-5\">
                            <i class=\"fa fa-edit\"></i>
                       D&eacute;signer comme Administrateur
                        </a>
                    {% else %}
                        <a href=\"{{ path('security_user_admin_cancel', {user : user.id}) }}\" class=\"btn btn-normal btn-outline-success mb-2 mr-2 l-5\">
                            <i class=\"fa fa-edit\"></i>
                       D&eacute;activer Administrateur
                        </a>
                    {% endif %}
                {% endif %}
                <button class=\"btn btn-normal btn-danger mb-2 mr-2 l-5\" onclick=\"del({{user.id}})\" id=\"btn\">
                    <i class=\"fa fa-trash\"></i>
                {{ 'Supprimer Membre'|trans }}
                </button>

                {% if user.cellule is null %}
                <div class=\"dropdown\" style=\"display: inline;\">
                    <button id=\"joindre\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                   
                        affecter a un Dahira
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"joindre\">
                            {% for cellule in cellules %}
                                <a class=\"dropdown-item\" href=\"{{ path('cellule_joindre_admin',{ user: user.id, cellule : cellule.id})}}\" onclick=\"joindre()\">{{ cellule.nom }}</a>
                            {% else %}
                                Aucune Cellule
                            {% endfor %}
                    </div>
              </div>

                {% endif %}
                    
                
                  {% if  is_granted('ROLE_MODIF_ADMIN_CELL') and  user.cellule is not null %} 
                <td data-label=\"{{ 'Action'|trans }}\">
                            {% if user.enabled == 1%}
                            <button class=\"btn btn-shadow btn-td btn-normal btn-warning\" id=\"btn{{user.id}}\" onclick=\"userdisable({{user.id}})\">
                                <i class=\"fa fa-user-lock\"></i>
                                {{'Désactiver'|trans}}
                            </button>
                            {% else %}
                            <button class=\"btn btn-shadow btn-td btn-normal btn-success\" id=\"btn{{user.id}}\" onclick=\"userenable({{user.id}})\">
                                <i class=\"fa fa-lock-open\"></i>
                                {{'Activer'|trans}}
                            </button>
                            {% endif %}
                </td>
                {% endif %}

                
                
            </div>
            {% endif %}
        </div>
    </div>
</div>
", "security/security/boutons-admin.html.twig", "/var/www/html/sirmang/templates/security/security/boutons-admin.html.twig");
    }
}
