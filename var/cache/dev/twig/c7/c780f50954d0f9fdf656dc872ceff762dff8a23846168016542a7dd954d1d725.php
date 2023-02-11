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

/* BackOffice/abonnement/index.html.twig */
class __TwigTemplate_906b9560599af8fd926943dfc37acb954832eb0cbe7451a78e49629c842629f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/abonnement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/abonnement/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "BackOffice/abonnement/index.html.twig", 1);
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
\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Les abonnements</h4>
\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Total abonnements : 3</p>
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
        echo "\t\t\t\t\t\t\t\t\t<th>Nom Abonnemnt</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t<th>Nombre d'abonnés</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "nomAbo", [], "any", false, false, false, 58), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "description", [], "any", false, false, false, 64), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 67), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>60</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-pencil icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes de vous sure de vouloir supprimer un abonnement ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 79))), "html", null, true);
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
            // line 89
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" style=\"text-align:center; font-size: 14px; font-weight:bold\">Aucun abonnement trouvé !</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 101
        $this->displayBlock('ajouter', $context, $blocks);
        // line 102
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_new", ["button_label" => "Update"]);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus-circle-outline\"></i>&nbsp;&nbsp;&nbsp;Ajouter un abonnement</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
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

    // line 102
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
        return "BackOffice/abonnement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 102,  265 => 101,  251 => 31,  248 => 30,  238 => 29,  227 => 102,  225 => 101,  215 => 93,  206 => 89,  191 => 79,  187 => 78,  179 => 73,  170 => 67,  164 => 64,  158 => 60,  154 => 58,  151 => 57,  145 => 52,  140 => 51,  135 => 48,  128 => 42,  122 => 37,  119 => 35,  117 => 29,  106 => 20,  96 => 19,  72 => 3,  62 => 2,  39 => 1,);
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
\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Les abonnements</h4>
\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Total abonnements : 3</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% block boutonAdd %}
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a id=\"displayButton\" class=\"btn btn-primary text-white mb-0 me-0\" href=\"{{path('app_abonnement_new', {'button_label': 'Update'}) }}\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus-circle-outline\"></i>&nbsp;&nbsp;&nbsp;Ajouter un abonnement</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t\t{# ************************************** Affichage ************************************* #}
\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t<table class=\"table select-table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t{# <th></th> #}
\t\t\t\t\t\t\t\t\t<th>Nom Abonnemnt</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t<th>Nombre d'abonnés</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t{# <th>Status</th> #}
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for abonnement in abonnements %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t{# <img src=\"{{ asset ('BackOffice/images/faces/face1.jpg ')}}\" alt=\"\"> #}
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>{{ abonnement.nomAbo }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <p>20 sous chapitres</p> #}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>{{ abonnement.description }}</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>{{ abonnement.prix  }}</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<h6>60</h6>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_abonnement_edit', {'id': abonnement.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-pencil icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_abonnement_delete', {'id': abonnement.id}) }}\" onsubmit=\"return confirm('Etes de vous sure de vouloir supprimer un abonnement ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ abonnement.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-delete icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\" style=\"text-align:center; font-size: 14px; font-weight:bold\">Aucun abonnement trouvé !</td>
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
", "BackOffice/abonnement/index.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\BackOffice\\abonnement\\index.html.twig");
    }
}
