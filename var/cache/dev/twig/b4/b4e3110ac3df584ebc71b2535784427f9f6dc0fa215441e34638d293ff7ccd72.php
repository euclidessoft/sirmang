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

/* layout.html.twig */
class __TwigTemplate_41b31d077bebf1928fe06da73b1727f634b15b97473e30512a1ef791211b28d2 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        <div class=\"sidebar-accueil\">
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
            <div class=\"sidebar-accueil-menu\">
                ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "sexe", [], "any", false, false, false, 30) == "Monsieur")) {
            // line 31
            echo "                     <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar.jpg"), "html", null, true);
            echo "\" width=\"180\" height=\"180\" alt=\"Photo-profil\" class=\"imgbox\" />
                     ";
        } else {
            // line 33
            echo "                     <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-femme.jpg"), "html", null, true);
            echo "\" width=\"180\" height=\"180\" alt=\"Photo-profil\" class=\"imgbox\" />
                     ";
        }
        // line 35
        echo "                    
                <ul>
                    <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_cotisation_user", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\"><span> <i class=\"fa fa-money\"></i></span>
                    <span>Suivre mes cotisations</span></a></li>

                    ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRESI")) {
            // line 41
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_users");
            echo "\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                        <span>Gestion Administrative</span></a></li>
                    <li><a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_caisses");
            echo "\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-money\"></i></span>
                        <span>Gestion Financi&egrave;re</span></a></li>
                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRESI_CELL")) {
            // line 46
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRESI_ZONE")) {
                // line 47
                echo "                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cellule_index");
                echo "\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                            <span>Gestion Administrative</span></a></li>
                        ";
            } else {
                // line 50
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cellule_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "cellule", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                            <span>Gestion Administrative</span></a></li>
                        ";
            }
            // line 53
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_caisses");
            echo "\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-money\"></i></span>
                            <span>Gestion Financi&egrave;re</span></a></li>

                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AFF_ADMIN_CELL")) {
            // line 57
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AFF_ADMIN_BEN")) {
                // line 58
                echo "                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_users");
                echo "\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                            <span>Gestion Administrative</span></a></li>
                        ";
            } else {
                // line 61
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cellule_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "cellule", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                            <span>Gestion Administrative</span></a></li>
                        ";
            }
            // line 64
            echo "
                    ";
        } elseif (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AFF_FIN_CELL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AFF_FIN_BEN"))) {
            // line 66
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_caisses");
            echo "\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-money\"></i></span>
                        <span>Gestion Financi&egrave;re</span></a></li>
                        
                    ";
        } else {
            // line 70
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tam_ca");
            echo "\"><span><i class=\"fa fa-bank\"></i></span>
                            <span>Administration</span></a></li>
                    ";
        }
        // line 73
        echo "
                    
                </ul>
            </div>
        </div>

        <div class=\"main-contener-accueil\">
            <header class=\"header-accueil\">
                <div class=\"bars-text\">
                <h2>
                <label for=\"nav-toggle\"><span class=\"las la-bars\"></span></label>
               <span id=\"welcome\"> Bienvenue</span>
                </h2>
                </div>
                <div class=\"user-wrapper\">
                    ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "sexe", [], "any", false, false, false, 88) == "Monsieur")) {
            // line 89
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar.jpg"), "html", null, true);
            echo "\" width=\"30\" alt=\"Photo\" class=\"rounded-circle\" /></a>
                     ";
        } else {
            // line 91
            echo "                         <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-femme.jpg"), "html", null, true);
            echo "\" width=\"40\" alt=\"Photo\" class=\"rounded-circle\" /></a>
                     ";
        }
        // line 93
        echo "                    <div>
                        <h6><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_profile");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "prenom", [], "any", false, false, false, 94), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "nom", [], "any", false, false, false, 94), "html", null, true);
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
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\" class=\"btn btn-danger btn-lg\"> <i class=\"fa fa-sign-out\"></i>  se d&eacute;connecter</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <main>
                ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "            </main>
        </div>
        ";
        // line 128
        $this->displayBlock('javascripts', $context, $blocks);
        // line 194
        echo "        ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 197
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

    // line 122
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 123
        echo "                
                <!-- /.row -->
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 129
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 136
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

    // line 194
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 195
        echo "        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 195,  432 => 194,  364 => 136,  360 => 135,  352 => 130,  349 => 129,  339 => 128,  327 => 123,  317 => 122,  299 => 14,  295 => 13,  289 => 9,  279 => 8,  267 => 197,  264 => 194,  262 => 128,  258 => 126,  256 => 122,  246 => 115,  218 => 94,  215 => 93,  207 => 91,  199 => 89,  197 => 88,  180 => 73,  173 => 70,  165 => 66,  161 => 64,  154 => 61,  147 => 58,  144 => 57,  136 => 53,  129 => 50,  122 => 47,  119 => 46,  113 => 43,  107 => 41,  105 => 40,  99 => 37,  95 => 35,  89 => 33,  83 => 31,  81 => 30,  71 => 27,  64 => 22,  62 => 8,  58 => 7,  54 => 6,  47 => 1,);
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
        <div class=\"sidebar-accueil\">
            <div class=\"sidebar-brand\">
                <h2><span><img src=\"{{asset('images/logo.JPG') }}\" width=\"40\" height=\"\" alt=\"{{ nom_site }}\" class=\"rounded-circle\" /></span><span>{{ nom_site }}</span></h2>
            </div>
            <div class=\"sidebar-accueil-menu\">
                {% if app.user.sexe == \"Monsieur\" %}
                     <img src=\"{{asset('images/avatar.jpg') }}\" width=\"180\" height=\"180\" alt=\"Photo-profil\" class=\"imgbox\" />
                     {% else %}
                     <img src=\"{{asset('images/avatar-femme.jpg') }}\" width=\"180\" height=\"180\" alt=\"Photo-profil\" class=\"imgbox\" />
                     {% endif %}
                    
                <ul>
                    <li><a href=\"{{ path('finance_cotisation_user', { user: app.user.id})}}\"><span> <i class=\"fa fa-money\"></i></span>
                    <span>Suivre mes cotisations</span></a></li>

                    {% if  is_granted('ROLE_PRESI') %}
                    <li><a href=\"{{ path('security_users')}}\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                        <span>Gestion Administrative</span></a></li>
                    <li><a href=\"{{ path('finance_caisses')}}\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-money\"></i></span>
                        <span>Gestion Financi&egrave;re</span></a></li>
                    {% elseif  is_granted('ROLE_PRESI_CELL') %}
                        {% if  is_granted('ROLE_PRESI_ZONE') %}
                            <li><a href=\"{{ path('cellule_index')}}\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                            <span>Gestion Administrative</span></a></li>
                        {% else %}
                            <li><a href=\"{{ path('cellule_show', { 'id' : app.user.cellule.id})}}\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                            <span>Gestion Administrative</span></a></li>
                        {% endif %}
                        <li><a href=\"{{ path('finance_caisses')}}\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-money\"></i></span>
                            <span>Gestion Financi&egrave;re</span></a></li>

                    {% elseif  is_granted('ROLE_AFF_ADMIN_CELL') %}
                        {% if is_granted('ROLE_AFF_ADMIN_BEN') %}
                            <li><a href=\"{{ path('security_users')}}\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                            <span>Gestion Administrative</span></a></li>
                        {% else %}
                            <li><a href=\"{{ path('cellule_show', { 'id' : app.user.cellule.id})}}\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-bank\"></i></span>
                            <span>Gestion Administrative</span></a></li>
                        {% endif %}

                    {% elseif is_granted('ROLE_AFF_FIN_CELL') or is_granted('ROLE_AFF_FIN_BEN') %}
                    <li><a href=\"{{ path('finance_caisses')}}\"><span><i class=\"fa fa-exchange\"></i> <i class=\"fa fa-money\"></i></span>
                        <span>Gestion Financi&egrave;re</span></a></li>
                        
                    {% else %}
                        <li><a href=\"{{ path('tam_ca')}}\"><span><i class=\"fa fa-bank\"></i></span>
                            <span>Administration</span></a></li>
                    {% endif %}

                    
                </ul>
            </div>
        </div>

        <div class=\"main-contener-accueil\">
            <header class=\"header-accueil\">
                <div class=\"bars-text\">
                <h2>
                <label for=\"nav-toggle\"><span class=\"las la-bars\"></span></label>
               <span id=\"welcome\"> Bienvenue</span>
                </h2>
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
                                <a href=\"{{ path('security_logout')}}\" class=\"btn btn-danger btn-lg\"> <i class=\"fa fa-sign-out\"></i>  se d&eacute;connecter</a>
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

</html>", "layout.html.twig", "/var/www/html/sirmang/templates/layout.html.twig");
    }
}
