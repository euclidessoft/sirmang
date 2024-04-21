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

/* security/security/userform.html.twig */
class __TwigTemplate_f4dab2e5b240101275804a1b0d8605c35bb4edf5e9992f2fa0d677f9d607ed75 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/userform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/security/userform.html.twig"));

        // line 1
        echo "
            <div class=\"col-lg-12\">
                <div class=\" card card-header mb-2\"> Les Champs avec * sont obligatoires</div>
                ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["id" => "form"]]);
        echo "

                <div class=\"row\">

                    <div class=\"col-md-12\">
                        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "profession", [], "any", false, false, false, 9), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group mb-4\">
                            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "profession", [], "any", false, false, false, 13), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "sexe", [], "any", false, false, false, 17), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group mb-4\">
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "sexe", [], "any", false, false, false, 21), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'widget', ["attr" => ["placeholder" => "Prenom *"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'widget', ["attr" => ["placeholder" => "Nom *"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "birthday", [], "any", false, false, false, 41), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "lieunaiss", [], "any", false, false, false, 44), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "birthday", [], "any", false, false, false, 48), 'widget', ["attr" => ["placeholder" => "Date de naissance (jj/mm/aaaa) "]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "lieunaiss", [], "any", false, false, false, 53), 'widget', ["attr" => ["placeholder" => "Lieu de naissance "]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "phone", [], "any", false, false, false, 60), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'widget', ["attr" => ["placeholder" => "Email *"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "phone", [], "any", false, false, false, 69), 'widget', ["attr" => ["placeholder" => "Telephone *"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "adresse", [], "any", false, false, false, 73), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group mb-4\">
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "adresse", [], "any", false, false, false, 77), 'widget', ["attr" => ["placeholder" => "Adresse "]]);
        echo "
                        </div>
                    </div>


                    
                    
                </div>

                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'rest');
        echo "
            
        
            <div class=\"row\">
                <div class=\"centrer mb-3\">
                    <button type=\"button\" data-toggle=\"modal\" href=\"#nombre\" id=\"subm\" class=\"btn btn-normal btn-success mr-3\" onclick=\"verif()\">
                        <i class=\"fa fa-save\"></i>
                        ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
        echo "
                    </button>
                    <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        echo "\" class=\"btn btn-shadow btn-normal btn-warning\">
                        <i class=\"fa fa-undo\"></i>
                        ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Annuler"), "html", null, true);
        echo "
                    </a>
                </div>
                ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"modal fade mt-5\" id=\"nombre\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg mt-5\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title text-center\" id=\"packtitle\">
                                ";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Verification avant soumission"), "html", null, true);
        echo "
                            </h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"form-group mt-4 mb-4\">
                               <div class=\"row\">
                                   <div class=\"col-sm-12\">
                                    Civilite: <b><span id=\"civilite\"></span></b>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        Prenom: <b><span id=\"prenom\"></span></b>
                                   </div>
                                   <div class=\"col-sm-6\">
                                     Nom: <b><span id=\"nom\"></span></b>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        Date de naissance: <b><span id=\"datenaiss\"></span></b>
                                   </div>
                                   <div class=\"col-sm-6\">
                                     Lieu de naissance: <b><span id=\"lieunaiss\"></span></b>
                                    </div>
                                   <div class=\"col-sm-6\">
                                     Telephone: <b><span id=\"telephone\"></span></b>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        Email: <b><span id=\"email\"></span></b>
                                   </div>
                                   <div class=\"col-sm-12\">
                                       Adresse: <b><span id=\"adresse\"></span></b>
                                   </div>


                               </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-shadow btn-normal btn-success mr-3\" onclick=\"send()\" id=\"confirm\">
                                    <i class=\"fa fa-save\"></i>
                                    ";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirmer"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/security/userform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 147,  223 => 107,  213 => 100,  207 => 97,  202 => 95,  197 => 93,  187 => 86,  175 => 77,  168 => 73,  161 => 69,  153 => 64,  146 => 60,  140 => 57,  133 => 53,  125 => 48,  118 => 44,  112 => 41,  105 => 37,  97 => 32,  90 => 28,  84 => 25,  77 => 21,  70 => 17,  63 => 13,  56 => 9,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
            <div class=\"col-lg-12\">
                <div class=\" card card-header mb-2\"> Les Champs avec * sont obligatoires</div>
                {{ form_start(form, {'attr' : { 'id' : 'form'}}) }}

                <div class=\"row\">

                    <div class=\"col-md-12\">
                        {{ form_errors(form.profession) }}
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group mb-4\">
                            {{ form_widget(form.profession)}}
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        {{ form_errors(form.sexe) }}
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group mb-4\">
                            {{ form_widget(form.sexe)}}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_errors(form.prenom) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_errors(form.nom) }}
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        {{ form_widget(form.prenom, {'attr' : { 'placeholder' : 'Prenom *'}}) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        {{ form_widget(form.nom, {'attr' : { 'placeholder' : 'Nom *'}}) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_errors(form.birthday) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_errors(form.lieunaiss) }}
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        {{ form_widget(form.birthday, {'attr' : { 'placeholder' : 'Date de naissance (jj/mm/aaaa) '}}) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        {{ form_widget(form.lieunaiss, {'attr' : { 'placeholder' : 'Lieu de naissance '}}) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_errors(form.email) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_errors(form.phone) }}
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        {{ form_widget(form.email, {'attr' : { 'placeholder' : 'Email *'}}) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                        {{ form_widget(form.phone, {'attr' : { 'placeholder' : 'Telephone *'}}) }}
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        {{ form_errors(form.adresse) }}
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group mb-4\">
                            {{ form_widget(form.adresse, {'attr' : { 'placeholder' : 'Adresse '}}) }}
                        </div>
                    </div>


                    
                    
                </div>

                {{ form_rest(form)}}
            
        
            <div class=\"row\">
                <div class=\"centrer mb-3\">
                    <button type=\"button\" data-toggle=\"modal\" href=\"#nombre\" id=\"subm\" class=\"btn btn-normal btn-success mr-3\" onclick=\"verif()\">
                        <i class=\"fa fa-save\"></i>
                        {{ 'Enregistrer'|trans }}
                    </button>
                    <a href=\"{{ path('security_profile')}}\" class=\"btn btn-shadow btn-normal btn-warning\">
                        <i class=\"fa fa-undo\"></i>
                        {{ 'Annuler'|trans }}
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
            <div class=\"modal fade mt-5\" id=\"nombre\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg mt-5\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title text-center\" id=\"packtitle\">
                                {{ 'Verification avant soumission'|trans }}
                            </h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"form-group mt-4 mb-4\">
                               <div class=\"row\">
                                   <div class=\"col-sm-12\">
                                    Civilite: <b><span id=\"civilite\"></span></b>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        Prenom: <b><span id=\"prenom\"></span></b>
                                   </div>
                                   <div class=\"col-sm-6\">
                                     Nom: <b><span id=\"nom\"></span></b>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        Date de naissance: <b><span id=\"datenaiss\"></span></b>
                                   </div>
                                   <div class=\"col-sm-6\">
                                     Lieu de naissance: <b><span id=\"lieunaiss\"></span></b>
                                    </div>
                                   <div class=\"col-sm-6\">
                                     Telephone: <b><span id=\"telephone\"></span></b>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        Email: <b><span id=\"email\"></span></b>
                                   </div>
                                   <div class=\"col-sm-12\">
                                       Adresse: <b><span id=\"adresse\"></span></b>
                                   </div>


                               </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-shadow btn-normal btn-success mr-3\" onclick=\"send()\" id=\"confirm\">
                                    <i class=\"fa fa-save\"></i>
                                    {{ 'Confirmer'|trans }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>", "security/security/userform.html.twig", "/var/www/html/sirmang/templates/security/security/userform.html.twig");
    }
}
