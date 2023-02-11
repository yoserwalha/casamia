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

/* BackOffice/commande/index.html.twig */
class __TwigTemplate_724dc6d8e6facda30b8087d167cbf2fbd5a7dc461085d0a7010fa69322605055 extends Template
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
            'affichage' => [$this, 'block_affichage'],
            'otherJS' => [$this, 'block_otherJS'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/commande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "BackOffice/commande/index.html.twig", 1);
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
        echo "\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css\">

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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "\t<div class=\"row flex-grow\">
\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t<div class=\"card card-rounded\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Les Commandes</h4>
\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Total Commandes :
\t\t\t\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 33
        $this->displayBlock('boutonAdd', $context, $blocks);
        // line 39
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 41
        echo "\t\t\t\t\t";
        $this->displayBlock('affichage', $context, $blocks);
        // line 98
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_boutonAdd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutonAdd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutonAdd"));

        // line 34
        echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary text-white mb-0 me-0\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_new", ["button_label" => "Update"]);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus-circle-outline\"></i>&nbsp;&nbsp;&nbsp;Ajouter une commande</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_affichage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affichage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affichage"));

        // line 42
        echo "\t\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t\t<table id=\"order-listing\" class=\"table select-table\" style=\"width:100%\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 47
        echo "\t\t\t\t\t\t\t\t\t\t<th>Nom client</th>
\t\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t\t<th>Date Expiration</th>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "username", [], "any", false, false, false, 63), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "description", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "prix", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                            <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateExp", [], "any", false, false, false, 70), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-pencil icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes de vous sure de vouloir supprimer une commande ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 80))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-delete icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\" style=\"text-align:center; font-size: 14px; font-weight:bold\">Aucune commande trouvée !</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_otherJS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherJS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherJS"));

        // line 105
        echo "\t<script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$('#order-listing').DataTable();
});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 105,  287 => 104,  274 => 94,  265 => 90,  250 => 80,  246 => 79,  236 => 72,  231 => 70,  227 => 69,  223 => 68,  218 => 65,  214 => 63,  211 => 62,  205 => 57,  200 => 56,  195 => 53,  188 => 47,  182 => 42,  172 => 41,  158 => 35,  155 => 34,  145 => 33,  130 => 98,  127 => 41,  124 => 39,  122 => 33,  119 => 32,  109 => 23,  99 => 22,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}
{% block otherStyle %}
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css\">

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
\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Les Commandes</h4>
\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Total Commandes :
\t\t\t\t\t\t\t\t{# {{commande|length}}</p> #}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% block boutonAdd %}
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary text-white mb-0 me-0\" href=\"{{path('commande_new', {'button_label': 'Update'}) }}\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus-circle-outline\"></i>&nbsp;&nbsp;&nbsp;Ajouter une commande</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t\t{# ************************************** Affichage ************************************* #}
\t\t\t\t\t{% block affichage %}
\t\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t\t<table id=\"order-listing\" class=\"table select-table\" style=\"width:100%\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t{# <th></th> #}
\t\t\t\t\t\t\t\t\t\t<th>Nom client</th>
\t\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t\t<th>Date Expiration</th>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t{# <th>Status</th> #}
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for com in commandes %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <img src=\"{{ asset ('BackOffice/images/faces/face1.jpg ')}}\" alt=\"\"> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>{{ com.username }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <p>20 sous chapitres</p> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{com.description}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{com.prix}}</td>
                                            <td>{{com.dateExp | date('d-m-Y')}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('commande_edit', {'id': com.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-pencil icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('commande_delete', {'id': com.id}) }}\" onsubmit=\"return confirm('Etes de vous sure de vouloir supprimer une commande ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ com.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-delete icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\" style=\"text-align:center; font-size: 14px; font-weight:bold\">Aucune commande trouvée !</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
{% endblock %}
{% block otherJS %}
\t<script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$('#order-listing').DataTable();
});
\t</script>
{% endblock %}
", "BackOffice/commande/index.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\BackOffice\\commande\\index.html.twig");
    }
}
