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

/* security/security/user2.html.twig */
class __TwigTemplate_9f39d838a0d1dac7c1c02c887438adb9369769010b86b5465ffa4ab739b566d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'ag' => [$this, 'block_ag'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/user2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/user2.html.twig"));

        $this->parent = $this->loadTemplate("layout1.html.twig", "security/security/user2.html.twig", 1);
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

        echo " TAM- Assemblee Generale  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_ag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ag"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ag"));

        echo " class=\"active\" ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<button type=\"button\" data-toggle=\"modal\" href=\"#nombre\" id=\"subm\" class=\"btn btn-normal btn-primary mb-2 mr-3\">
    <i class=\"fa fa-list\"></i>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trier"), "html", null, true);
        echo "
</button>
<div class=\"modal\" id=\"nombre\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg mt-5\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title text-center\" id=\"packtitle\">
                    ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Affichage par criteres"), "html", null, true);
        echo "
                </h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group mt-4 mb-4\">
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row\">
                        
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "annee", [], "any", false, false, false, 28), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "sexe", [], "any", false, false, false, 33), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"form-group\">
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "situation", [], "any", false, false, false, 43), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "bloodgroup", [], "any", false, false, false, 48), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "cellule", [], "any", false, false, false, 53), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "profession", [], "any", false, false, false, 58), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "specialite", [], "any", false, false, false, 63), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "region", [], "any", false, false, false, 68), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "departement", [], "any", false, false, false, 73), 'row', ["attr" => ["label" => "Departement"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "ville", [], "any", false, false, false, 78), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "etablissement", [], "any", false, false, false, 83), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                        <button class=\"btn btn-primary text-center\" type=\"submit\" id=\"send\" onclick=\"recherche()\"> Rechercher</button>
                        </div>
                        ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo "
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>


<div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"panel panel-primary\">
        
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 107
            echo "    <div class=\"alert alert-success alert-dismissible fade show radius-10 shadow-black\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    <div class=\"alert alert-primary\">
        ";
        // line 113
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 113, $this->source); })())), "html", null, true);
        echo " élément(s) trouvé(s)
    </div>
    <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"liste\">
        <thead>
            <tr>
                <th class=\"text-center\">
                    ";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Photo"), "html", null, true);
        echo "
                </th>
                <th>
                    ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Identifiant"), "html", null, true);
        echo "
                </th>
                <th>
                    ";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom et Prénom"), "html", null, true);
        echo "
                </th>
                <th class=\"text-center\">
                    ";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Téléphone"), "html", null, true);
        echo "
                </th>
                <th class=\"text-center\">
                    ";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profession"), "html", null, true);
        echo "
                </th>
                <th class=\"text-center\">
                    ";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dahira"), "html", null, true);
        echo "
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 139, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 140
            echo "            <tr>
                <td data-label=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Photo"), "html", null, true);
            echo "\">
                    <b><a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            echo "\">
                        ";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 143) == "Monsieur")) {
                // line 144
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar.jpg"), "html", null, true);
                echo "\" width=\"50\" alt=\"Photo\" class=\"rounded-circle\" />
                        ";
            } else {
                // line 146
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-femme.jpg"), "html", null, true);
                echo "\" width=\"50\" alt=\"Photo\" class=\"rounded-circle\" />
                        ";
            }
            // line 148
            echo "                    </a></b>
                </td>
                <td data-label=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Identifiant"), "html", null, true);
            echo "\">
                   <b> <a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            echo "\">
                        ";
            // line 152
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 152)), "html", null, true);
            echo "
                    </a></b>
                </td>
                <td data-label=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prénom"), "html", null, true);
            echo "\">
                   <b> <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            echo "\">
                        ";
            // line 157
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 157)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 157), "html", null, true);
            echo " 
                    </a></b>
                </td>
                <td data-label=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Téléphone"), "html", null, true);
            echo "\" class=\"phone\">
                   <b> <a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 161)]), "html", null, true);
            echo "\">
                        ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 162), "html", null, true);
            echo "
                    </a></b>
                </td>
                <td data-label=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profession"), "html", null, true);
            echo "\" class=\"text-center\">
                   <b> <a href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 166)]), "html", null, true);
            echo "\">
                        ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "profession", [], "any", false, false, false, 167), "html", null, true);
            echo "
                    </a></b>
                </td>
                <td data-label=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dahira"), "html", null, true);
            echo "\" class=\"text-center\">
                   <b> <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\">
                        ";
            // line 172
            if (twig_get_attribute($this->env, $this->source, $context["user"], "cellule", [], "any", false, false, false, 172)) {
                // line 173
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "cellule", [], "any", false, false, false, 173), "nom", [], "any", false, false, false, 173), "html", null, true);
                echo "
                           ";
            } else {
                // line 175
                echo "                                   <div class=\"dropdown\" style=\"display: inline;\">
                                       <button id=\"joindre\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                                           joindre une cellule
                                       </button>
                                       <div class=\"dropdown-menu\" aria-labelledby=\"joindre\">
                                           ";
                // line 181
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cellules"]) || array_key_exists("cellules", $context) ? $context["cellules"] : (function () { throw new RuntimeError('Variable "cellules" does not exist.', 181, $this->source); })()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["cellule"]) {
                    // line 182
                    echo "                                               <a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cellule_joindre_admin", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 182), "cellule" => twig_get_attribute($this->env, $this->source, $context["cellule"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                    echo "\" onclick=\"joindre()\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cellule"], "nom", [], "any", false, false, false, 182), "html", null, true);
                    echo "</a>
                                           ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 184
                    echo "                                               Aucune Cellule
                                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cellule'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "                                       </div>
                                   </div>
                           ";
            }
            // line 189
            echo "                    </a></b>
                </td>
               
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"col-12\" id=\"exportexcel\">

        </div>
    </div>
</div>
</div>



</div>
</div>
";
        // line 207
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

        // line 208
        echo "<script>
    function userdisable(id) {
        if (confirm(\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voulez-vous vraiment désactiver cet utilisateur ?"), "html", null, true);
        echo "\")) {
            \$('#btn' + id).html(\"<img src='";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ajax-loader.gif"), "html", null, true);
        echo "' width='24' />\");
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user_disable");
        echo "\",
                data: \"usr=\" + id,
                success: function(data) {
                    if (data['ok'] != '') {
                        \$('#btn' + id).attr('class', 'btn btn-shadow btn-td btn-normal btn-success');
                        \$('#btn' + id).attr('onclick', 'userenable(' + id + ')');
                        \$('#btn' + id).html(\"<i class='fa fa-lock-open'></i> ";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activer"), "html", null, true);
        echo "\");
                    }
                },
                error: function() {
                    alert(\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La requête n'a pas abouti"), "html", null, true);
        echo "\");
                }
            });
        }

    }

    function userenable(id) {
        if (confirm(\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voulez-vous vraiment activer cet utilisateur ?"), "html", null, true);
        echo "\")) {
            \$('#btn' + id).html(\"<img src='";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ajax-loader.gif"), "html", null, true);
        echo "' width='24' />\");
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_user_enable");
        echo "\",
                data: \"usr=\" + id,
                success: function(data) {
                    if (data['ok'] != '') {
                        \$('#btn' + id).attr('class', 'btn btn-shadow btn-td btn-normal btn-danger');
                        \$('#btn' + id).attr('onclick', 'userdisable(' + id + ')');
                        \$('#btn' + id).html(\"<i class='fa fa-user-lock'></i> ";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Désactiver"), "html", null, true);
        echo "\");
                    }
                },
                error: function() {
                    alert(\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("La requête n'a pas abouti"), "html", null, true);
        echo "\");
                }
            });
        }

    }
    function recherche(){
         \$('#send').html(\"<i class='fa fa-spinner'></i>\");

    }

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/security/user2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 246,  572 => 242,  563 => 236,  557 => 233,  553 => 232,  542 => 224,  535 => 220,  526 => 214,  520 => 211,  516 => 210,  512 => 208,  493 => 207,  477 => 193,  468 => 189,  463 => 186,  456 => 184,  446 => 182,  441 => 181,  433 => 175,  427 => 173,  425 => 172,  421 => 171,  417 => 170,  411 => 167,  407 => 166,  403 => 165,  397 => 162,  393 => 161,  389 => 160,  381 => 157,  377 => 156,  373 => 155,  367 => 152,  363 => 151,  359 => 150,  355 => 148,  349 => 146,  343 => 144,  341 => 143,  337 => 142,  333 => 141,  330 => 140,  326 => 139,  318 => 134,  312 => 131,  306 => 128,  300 => 125,  294 => 122,  288 => 119,  279 => 113,  276 => 112,  267 => 109,  263 => 107,  259 => 106,  239 => 89,  230 => 83,  222 => 78,  214 => 73,  206 => 68,  198 => 63,  190 => 58,  182 => 53,  174 => 48,  166 => 43,  158 => 38,  150 => 33,  142 => 28,  134 => 23,  123 => 15,  113 => 8,  109 => 6,  99 => 5,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout1.html.twig' %}
{% block title %} TAM- Assemblee Generale  {% endblock %}
{% block ag %} class=\"active\" {% endblock %}

{% block body %}
<button type=\"button\" data-toggle=\"modal\" href=\"#nombre\" id=\"subm\" class=\"btn btn-normal btn-primary mb-2 mr-3\">
    <i class=\"fa fa-list\"></i>
    {{ 'Trier'|trans }}
</button>
<div class=\"modal\" id=\"nombre\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg mt-5\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title text-center\" id=\"packtitle\">
                    {{ 'Affichage par criteres'|trans }}
                </h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group mt-4 mb-4\">
                    {{ form_start(form)}}
                    <div class=\"row\">
                        
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                {{ form_row(form.annee) }}
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                {{ form_row(form.sexe) }}
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"form-group\">
                                {{ form_row(form.status) }}
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                {{ form_row(form.situation) }}
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                {{ form_row(form.bloodgroup) }}
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                {{ form_row(form.cellule) }}
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                {{ form_row(form.profession) }}
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                {{ form_row(form.specialite) }}
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                {{ form_row(form.region) }}
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                {{ form_row(form.departement,{ 'attr' : {'label' : 'Departement'}}) }}
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                {{ form_row(form.ville) }}
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group mb-4\">
                                {{ form_row(form.etablissement) }}
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                        <button class=\"btn btn-primary text-center\" type=\"submit\" id=\"send\" onclick=\"recherche()\"> Rechercher</button>
                        </div>
                        {{ form_end(form)}}
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>


<div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"panel panel-primary\">
        
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
    {% for message in app.flashes('notice')%}
    <div class=\"alert alert-success alert-dismissible fade show radius-10 shadow-black\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        {{ message|trans }}
    </div>
    {% endfor%}
    <div class=\"alert alert-primary\">
        {{ users|length }} élément(s) trouvé(s)
    </div>
    <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"liste\">
        <thead>
            <tr>
                <th class=\"text-center\">
                    {{ 'Photo'|trans }}
                </th>
                <th>
                    {{ 'Identifiant'|trans }}
                </th>
                <th>
                    {{ 'Nom et Prénom'|trans }}
                </th>
                <th class=\"text-center\">
                    {{ 'Téléphone'|trans }}
                </th>
                <th class=\"text-center\">
                    {{ 'Profession'|trans }}
                </th>
                <th class=\"text-center\">
                    {{ 'Dahira'|trans }}
                </th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
            <tr>
                <td data-label=\"{{ 'Photo'|trans }}\">
                    <b><a href=\"{{ path('security_user', { user : user.id })}}\">
                        {% if user.sexe == \"Monsieur\" %}
                        <img src=\"{{asset('images/avatar.jpg') }}\" width=\"50\" alt=\"Photo\" class=\"rounded-circle\" />
                        {% else %}
                        <img src=\"{{asset('images/avatar-femme.jpg') }}\" width=\"50\" alt=\"Photo\" class=\"rounded-circle\" />
                        {% endif %}
                    </a></b>
                </td>
                <td data-label=\"{{ 'Identifiant'|trans }}\">
                   <b> <a href=\"{{ path('security_user', { user : user.id })}}\">
                        {{ user.username|upper }}
                    </a></b>
                </td>
                <td data-label=\"{{ 'Prénom'|trans }}\">
                   <b> <a href=\"{{ path('security_user', { user : user.id })}}\">
                        {{ user.nom|upper }} {{ user.prenom }} 
                    </a></b>
                </td>
                <td data-label=\"{{ 'Téléphone'|trans }}\" class=\"phone\">
                   <b> <a href=\"{{ path('security_user', { user : user.id })}}\">
                        {{ user.phone }}
                    </a></b>
                </td>
                <td data-label=\"{{ 'Profession'|trans }}\" class=\"text-center\">
                   <b> <a href=\"{{ path('security_user', { user : user.id })}}\">
                        {{ user.profession }}
                    </a></b>
                </td>
                <td data-label=\"{{ 'Dahira'|trans }}\" class=\"text-center\">
                   <b> <a href=\"{{ path('security_user', { user : user.id })}}\">
                        {% if user.cellule %}
                            {{ user.cellule.nom }}
                           {% else %}
                                   <div class=\"dropdown\" style=\"display: inline;\">
                                       <button id=\"joindre\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

                                           joindre une cellule
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
                    </a></b>
                </td>
               
            {% endfor %}
        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"col-12\" id=\"exportexcel\">

        </div>
    </div>
</div>
</div>



</div>
</div>
{% block scripts %}
<script>
    function userdisable(id) {
        if (confirm(\"{{ 'Voulez-vous vraiment désactiver cet utilisateur ?'|trans }}\")) {
            \$('#btn' + id).html(\"<img src='{{ asset('images/ajax-loader.gif')}}' width='24' />\");
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
            \$('#btn' + id).html(\"<img src='{{ asset('images/ajax-loader.gif')}}' width='24' />\");
            \$.ajax({
                type: \"POST\",
                url: \"{{path('security_user_enable')}}\",
                data: \"usr=\" + id,
                success: function(data) {
                    if (data['ok'] != '') {
                        \$('#btn' + id).attr('class', 'btn btn-shadow btn-td btn-normal btn-danger');
                        \$('#btn' + id).attr('onclick', 'userdisable(' + id + ')');
                        \$('#btn' + id).html(\"<i class='fa fa-user-lock'></i> {{'Désactiver'|trans}}\");
                    }
                },
                error: function() {
                    alert(\"{{ 'La requête n\\'a pas abouti'|trans}}\");
                }
            });
        }

    }
    function recherche(){
         \$('#send').html(\"<i class='fa fa-spinner'></i>\");

    }

</script>
{% endblock %}
{% endblock %}
", "security/security/user2.html.twig", "/var/www/html/sirmang/templates/security/security/user2.html.twig");
    }
}
