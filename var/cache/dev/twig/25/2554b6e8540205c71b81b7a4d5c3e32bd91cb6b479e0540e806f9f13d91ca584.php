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

/* layout1.html.twig */
class __TwigTemplate_a9d6504ce22b36955b1cd8e0ca4e9e888399f55748b6d0bd0d736d710b41ffc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'ag' => [$this, 'block_ag'],
            'cellule' => [$this, 'block_cellule'],
            'attente' => [$this, 'block_attente'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\">
        <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom_site"]) || array_key_exists("nom_site", $context) ? $context["nom_site"] : (function () { throw new RuntimeError('Variable "nom_site" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    </head>
    <body>
        <input type=\"checkbox\" id=\"nav-toggle\">
        <div class=\"sidebar\">
            <div class=\"sidebar-brand\">
                <h2><span><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.JPG"), "html", null, true);
        echo "\" width=\"40\" height=\"\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["nom_site"]) || array_key_exists("nom_site", $context) ? $context["nom_site"] : (function () { throw new RuntimeError('Variable "nom_site" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" class=\"rounded-circle\" /></span><span>";
        echo twig_escape_filter($this->env, (isset($context["nom_site"]) || array_key_exists("nom_site", $context) ? $context["nom_site"] : (function () { throw new RuntimeError('Variable "nom_site" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</span></h2>
            </div>
            <div class=\"sidebar-menu\">
                <ul>
                    <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        echo "\"><span><i class=\"fa fa-dashboard\"></i></span>
                    <span>Accueil</span></a></li>
                    ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AFF_ADMIN_BEN")) {
            // line 34
            echo "                        <li><a  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_users");
            echo "\" ";
            $this->displayBlock('ag', $context, $blocks);
            echo "><span><i class=\"fa fa-users\"></i></span>
                        <span>Federation Dahiras</span></a></li>
                    ";
        }
        // line 37
        echo "

                        
                    <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cellule_index");
        echo "\" ";
        $this->displayBlock('cellule', $context, $blocks);
        echo "><span><i class=\"fa fa-cube\"></i></span>
                        <span>Dahira</span></a></li>
                    ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AFF_ADMIN_CELL")) {
            // line 43
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_waiting");
            echo "\" ";
            $this->displayBlock('attente', $context, $blocks);
            echo "><span><i class=\"fa fa-files-o\"></i></span>
                        <span>Liste d'attente</span></a></li>
                    ";
        }
        // line 46
        echo "                    
                </ul>
            </div>
        </div>

        <div class=\"main-contener\">
            <header>
                
                <h2>
                <label for=\"nav-toggle\"><span class=\"las la-bars\"></span></label>
                <span id=\"welcome\"> Bienvenue</span>
                </h2>

                <div class=\"search-wrapper\">
                    <span class=\"las la-search\"></span>
                    <input type=\"search\" placeholder=\"Rechercher ici\"/>
                </div>
                <div class=\"user-wrapper\">
                    ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "sexe", [], "any", false, false, false, 64) == "Monsieur")) {
            // line 65
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar.jpg"), "html", null, true);
            echo "\" width=\"30\" alt=\"Photo\" class=\"rounded-circle\" /></a>
                    ";
        } else {
            // line 67
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-femme.jpg"), "html", null, true);
            echo "\" width=\"40\" alt=\"Photo\" class=\"rounded-circle\" /></a>
                    ";
        }
        // line 69
        echo "                    <div>
                        <h6><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "prenom", [], "any", false, false, false, 70), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
        echo "</a></h6>
                        <small><a data-toggle=\"modal\" href=\"#deconnexion\">
                                D&eacute;connexion
                            </a></small>
                    </div>
                </div>
                
                
            </header>
            <div class=\"modal\" id=\"deconnexion\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog mt-5\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title text-center\">
                               D&eacute;connexion
                            </h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                                <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\" class=\"btn btn-danger btn-lg\"> <i class=\"fa fa-sign-out\"></i> D&eacute;connecter</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <main>
                ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "
            </main>
        </div>
        ";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 171
        echo "        ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 174
        echo "    </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
        
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/test-style.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_ag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ag"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ag"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_cellule($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_attente($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attente"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attente"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 99
        echo "                
                <!-- /.row -->
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fos_js_routes.js"), "html", null, true);
        echo "\"></script>
        
        <script>
        \$(document).ready(function() {
            var table = \$('#liste').DataTable({
    
    responsive: true,
    \"pageLength\": 25,
    buttons: [{
        extend: 'excelHtml5',
        text: '<i class=\"fa fa-file-excel fa-lg\"></i> Exporter vers Excel',
        attr: {
            class: 'btn btn-success'
        },
    }],
    language: {
        processing: \"Traitement en cours...\",
        search: \"Rechercher&nbsp;:\",
        lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
        info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
        infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
        infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
        infoPostFix: \"\",
        loadingRecords: \"Chargement en cours...\",
        zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
        emptyTable: \"Aucune donnée disponible dans le tableau\",
        paginate: {
            first: \"Premier\",
            previous: \"Pr&eacute;c&eacute;dent\",
            next: \"Suivant\",
            last: \"Dernier\"
        },
        aria: {
            sortAscending: \": activer pour trier la colonne par ordre croissant\",
            sortDescending: \": activer pour trier la colonne par ordre décroissant\"
        }
    }
    
    });
    table.buttons().container().appendTo('#exportexcel');
            selectAllstart();
            });
            function selectAllstart() { //selectionner tous les eleves
            if (\$(\"#tous\").is(':checked')) {
                \$(\"input[type=checkbox]\").attr('checked', true);
                \$(\"input[type=checkbox]\").each(
                    function() {
                        if (\$(this).is(':checked')) {
    
                        } else {
                            \$(this).trigger('click')
                        }
                        trselect(\$(this).attr(\"id\"));
                    });
            }
        }
        </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 172
        echo "        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 172,  434 => 171,  366 => 113,  362 => 112,  354 => 107,  351 => 106,  341 => 105,  329 => 99,  319 => 98,  301 => 43,  283 => 40,  265 => 34,  247 => 14,  243 => 13,  237 => 9,  227 => 8,  215 => 174,  212 => 171,  210 => 105,  205 => 102,  203 => 98,  193 => 91,  165 => 70,  162 => 69,  154 => 67,  146 => 65,  144 => 64,  124 => 46,  115 => 43,  113 => 42,  106 => 40,  101 => 37,  92 => 34,  90 => 33,  85 => 31,  74 => 27,  67 => 22,  65 => 8,  61 => 7,  57 => 6,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\">
        <link href=\"{{asset('images/favicon.ico')}}\" rel=\"shortcut icon\">
        <title>{{ nom_site }}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
        
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/test-style.css') }}\">
    <link href=\"{{ asset('css/datatables.min.css') }}\" rel=\"stylesheet\">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
        {% endblock %}
    </head>
    <body>
        <input type=\"checkbox\" id=\"nav-toggle\">
        <div class=\"sidebar\">
            <div class=\"sidebar-brand\">
                <h2><span><img src=\"{{asset('images/logo.JPG') }}\" width=\"40\" height=\"\" alt=\"{{ nom_site }}\" class=\"rounded-circle\" /></span><span>{{ nom_site }}</span></h2>
            </div>
            <div class=\"sidebar-menu\">
                <ul>
                    <li><a href=\"{{ path('security_profile') }}\"><span><i class=\"fa fa-dashboard\"></i></span>
                    <span>Accueil</span></a></li>
                    {% if  is_granted('ROLE_AFF_ADMIN_BEN') %}
                        <li><a  href=\"{{ path('security_users') }}\" {% block ag %}{% endblock %}><span><i class=\"fa fa-users\"></i></span>
                        <span>Federation Dahiras</span></a></li>
                    {% endif %}


                        
                    <li><a href=\"{{ path('cellule_index')}}\" {% block cellule %}{% endblock %}><span><i class=\"fa fa-cube\"></i></span>
                        <span>Dahira</span></a></li>
                    {% if  is_granted('ROLE_AFF_ADMIN_CELL') %}
                        <li><a href=\"{{ path('security_waiting')}}\" {% block attente %}{% endblock %}><span><i class=\"fa fa-files-o\"></i></span>
                        <span>Liste d'attente</span></a></li>
                    {% endif%}
                    
                </ul>
            </div>
        </div>

        <div class=\"main-contener\">
            <header>
                
                <h2>
                <label for=\"nav-toggle\"><span class=\"las la-bars\"></span></label>
                <span id=\"welcome\"> Bienvenue</span>
                </h2>

                <div class=\"search-wrapper\">
                    <span class=\"las la-search\"></span>
                    <input type=\"search\" placeholder=\"Rechercher ici\"/>
                </div>
                <div class=\"user-wrapper\">
                    {% if app.user.sexe == \"Monsieur\" %}
                        <a href=\"{{ path('security_profile') }}\"> <img src=\"{{asset('images/avatar.jpg') }}\" width=\"30\" alt=\"Photo\" class=\"rounded-circle\" /></a>
                    {% else %}
                        <a href=\"{{ path('security_profile') }}\"><img src=\"{{asset('images/avatar-femme.jpg') }}\" width=\"40\" alt=\"Photo\" class=\"rounded-circle\" /></a>
                    {% endif %}
                    <div>
                        <h6><a href=\"{{ path('security_profile') }}\">{{ app.user.prenom }} {{ app.user.nom }}</a></h6>
                        <small><a data-toggle=\"modal\" href=\"#deconnexion\">
                                D&eacute;connexion
                            </a></small>
                    </div>
                </div>
                
                
            </header>
            <div class=\"modal\" id=\"deconnexion\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog mt-5\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title text-center\">
                               D&eacute;connexion
                            </h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                                <a href=\"{{ path('security_logout')}}\" class=\"btn btn-danger btn-lg\"> <i class=\"fa fa-sign-out\"></i> D&eacute;connecter</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <main>
                {% block body%}
                
                <!-- /.row -->
                {% endblock%}

            </main>
        </div>
        {% block javascripts %}
        <!-- jQuery -->
        <script src=\"{{ asset('js/jquery-3.4.1.min.js') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"{{ asset('js/datatables.min.js') }}\"></script>
    <script src=\"{{ asset('js/fos_js_routes.js') }}\"></script>
        
        <script>
        \$(document).ready(function() {
            var table = \$('#liste').DataTable({
    
    responsive: true,
    \"pageLength\": 25,
    buttons: [{
        extend: 'excelHtml5',
        text: '<i class=\"fa fa-file-excel fa-lg\"></i> Exporter vers Excel',
        attr: {
            class: 'btn btn-success'
        },
    }],
    language: {
        processing: \"Traitement en cours...\",
        search: \"Rechercher&nbsp;:\",
        lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
        info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
        infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
        infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
        infoPostFix: \"\",
        loadingRecords: \"Chargement en cours...\",
        zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
        emptyTable: \"Aucune donnée disponible dans le tableau\",
        paginate: {
            first: \"Premier\",
            previous: \"Pr&eacute;c&eacute;dent\",
            next: \"Suivant\",
            last: \"Dernier\"
        },
        aria: {
            sortAscending: \": activer pour trier la colonne par ordre croissant\",
            sortDescending: \": activer pour trier la colonne par ordre décroissant\"
        }
    }
    
    });
    table.buttons().container().appendTo('#exportexcel');
            selectAllstart();
            });
            function selectAllstart() { //selectionner tous les eleves
            if (\$(\"#tous\").is(':checked')) {
                \$(\"input[type=checkbox]\").attr('checked', true);
                \$(\"input[type=checkbox]\").each(
                    function() {
                        if (\$(this).is(':checked')) {
    
                        } else {
                            \$(this).trigger('click')
                        }
                        trselect(\$(this).attr(\"id\"));
                    });
            }
        }
        </script>
        {% endblock %}
        {% block scripts %}
        
        {% endblock %}
    </body>

</html>", "layout1.html.twig", "/var/www/html/sirmang/templates/layout1.html.twig");
    }
}
