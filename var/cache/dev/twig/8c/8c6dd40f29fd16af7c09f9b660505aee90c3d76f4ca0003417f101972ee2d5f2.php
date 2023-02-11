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

/* BackOffice/user/index.html.twig */
class __TwigTemplate_d6992523b4a158b913ce582de8f561619133afde46fcd1690ccc7be4553a6c5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'otherStyle' => [$this, 'block_otherStyle'],
            'body' => [$this, 'block_body'],
            'boutonAdd' => [$this, 'block_boutonAdd'],
            'ajouter' => [$this, 'block_ajouter'],
            'modifier' => [$this, 'block_modifier'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "BackOffice/user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_otherStyle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherStyle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherStyle"));

        // line 3
        echo "\t<style>
\t\t.boutons {
\t\t\tborder-color: transparent;
\t\t\tbackground-color: transparent
\t\t}
\t\t.icon {
\t\t\tfont-size: 24px;
\t\t\tcolor: #172D88
\t\t}
\t\t.icon:hover {
\t\t\tfont-size: 24px;
\t\t\tcolor: red
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t<div class=\"row flex-grow\">
\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t<div class=\"card card-rounded\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Les utilisateurs</h4>
\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Total utilisateurs : 3</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 29
        $this->displayBlock('boutonAdd', $context, $blocks);
        // line 35
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 37
        echo "\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t<table class=\"table select-table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t";
        // line 42
        echo "\t\t\t\t\t\t\t\t\t<th>Nom utilisateur</th>
\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>Role</th>
\t\t\t\t\t\t\t\t\t<th>Date creation</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t";
        // line 50
        echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 60), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 66), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 71
                echo "                                            ";
                if (($context["role"] == "ROLE_USER")) {
                    // line 72
                    echo "                                                Client
                                            ";
                } elseif ((                // line 73
$context["role"] == "ROLE_ADMIN")) {
                    // line 74
                    echo "                                                Administrateur
                                            ";
                }
                // line 76
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateCreation", [], "any", false, false, false, 79), "d-m-Y"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-pencil icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes de vous sure de vouloir supprimer un utilisateur ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 90))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-delete icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" style=\"text-align:center; font-size: 14px; font-weight:bold\">Aucun utilisateur trouvé !</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 112
        $this->displayBlock('ajouter', $context, $blocks);
        // line 113
        echo "\t";
        $this->displayBlock('modifier', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_boutonAdd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutonAdd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutonAdd"));

        // line 30
        echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a id=\"displayButton\" class=\"btn btn-primary text-white mb-0 me-0\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new", ["button_label" => "Update"]);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus-circle-outline\"></i>&nbsp;&nbsp;&nbsp;Ajouter un utilisateur</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_ajouter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajouter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajouter"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_modifier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modifier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modifier"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 113,  293 => 112,  279 => 31,  276 => 30,  266 => 29,  255 => 113,  253 => 112,  243 => 104,  234 => 100,  219 => 90,  215 => 89,  207 => 84,  199 => 79,  189 => 76,  185 => 74,  183 => 73,  180 => 72,  177 => 71,  173 => 70,  166 => 66,  160 => 62,  156 => 60,  153 => 59,  147 => 54,  142 => 53,  137 => 50,  128 => 42,  122 => 37,  119 => 35,  117 => 29,  106 => 20,  96 => 19,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}
{% block otherStyle %}
\t<style>
\t\t.boutons {
\t\t\tborder-color: transparent;
\t\t\tbackground-color: transparent
\t\t}
\t\t.icon {
\t\t\tfont-size: 24px;
\t\t\tcolor: #172D88
\t\t}
\t\t.icon:hover {
\t\t\tfont-size: 24px;
\t\t\tcolor: red
\t\t}
\t</style>
{% endblock %}

{% block body %}
\t<div class=\"row flex-grow\">
\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t<div class=\"card card-rounded\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Les utilisateurs</h4>
\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Total utilisateurs : 3</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% block boutonAdd %}
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a id=\"displayButton\" class=\"btn btn-primary text-white mb-0 me-0\" href=\"{{path('app_user_new', {'button_label': 'Update'}) }}\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus-circle-outline\"></i>&nbsp;&nbsp;&nbsp;Ajouter un utilisateur</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t\t{# ************************************** Affichage ************************************* #}
\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t<table class=\"table select-table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t{# <th></th> #}
\t\t\t\t\t\t\t\t\t<th>Nom utilisateur</th>
\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>Role</th>
\t\t\t\t\t\t\t\t\t<th>Date creation</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t{# <th>Status</th> #}
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for user in user %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t{# <img src=\"{{ asset ('BackOffice/images/faces/face1.jpg ')}}\" alt=\"\"> #}
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>{{ user.username }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <p>20 sous chapitres</p> #}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>{{ user.email }}</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>{% for role in user.roles %}
                                            {% if role == \"ROLE_USER\"%}
                                                Client
                                            {% elseif role == \"ROLE_ADMIN\" %}
                                                Administrateur
                                            {% endif %}
                                        {% endfor %}</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>{{ user.dateCreation | date('d-m-Y') }}</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_user_edit', {'id': user.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-pencil icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Etes de vous sure de vouloir supprimer un utilisateur ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-delete icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" style=\"text-align:center; font-size: 14px; font-weight:bold\">Aucun utilisateur trouvé !</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% block ajouter %}{% endblock %}
\t{% block modifier %}{% endblock %}
{% endblock %}
", "BackOffice/user/index.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\BackOffice\\user\\index.html.twig");
    }
}
