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
        echo "<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"home-tab\">
\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\">Audiences</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-content tab-content-basic\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"statistics-details d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Bounce Rate</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">32.53%</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>-0.5%</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Page Views</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">7,682</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>+0.1%</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">New Sessions</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">68.8</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>68.8</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Avg. Time on Site</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">2m:35s</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>+0.8%</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">New Sessions</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">68.8</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>68.8</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Avg. Time on Site</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">2m:35s</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>+0.8%</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t
\t<div class=\"row flex-grow\">
\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t<div class=\"card card-rounded\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Les Commandes</h4>
\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Total Commandes :
\t\t\t\t\t\t\t\t";
        // line 111
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 112
        $this->displayBlock('boutonAdd', $context, $blocks);
        // line 118
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 120
        echo "\t\t\t\t\t";
        $this->displayBlock('affichage', $context, $blocks);
        // line 177
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_boutonAdd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutonAdd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutonAdd"));

        // line 113
        echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary text-white mb-0 me-0\" href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_new", ["button_label" => "Update"]);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus-circle-outline\"></i>&nbsp;&nbsp;&nbsp;Ajouter une commande</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_affichage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affichage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affichage"));

        // line 121
        echo "\t\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t\t<table id=\"order-listing\" class=\"table select-table\" style=\"width:100%\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        echo "\t\t\t\t\t\t\t\t\t\t<th>Nom client</th>
\t\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t\t<th>Date Expiration</th>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t";
        // line 132
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 135, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 136
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "username", [], "any", false, false, false, 142), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "description", [], "any", false, false, false, 147), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "prix", [], "any", false, false, false, 148), "html", null, true);
            echo "</td>
                                            <td>";
            // line 149
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateExp", [], "any", false, false, false, 149), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"boutons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='mdi mdi-pencil icon'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 158)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes de vous sure de vouloir supprimer une commande ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 159))), "html", null, true);
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
            // line 169
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\" style=\"text-align:center; font-size: 14px; font-weight:bold\">Aucune commande trouvée !</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 183
    public function block_otherJS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherJS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherJS"));

        // line 184
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
        return array (  376 => 184,  366 => 183,  353 => 173,  344 => 169,  329 => 159,  325 => 158,  315 => 151,  310 => 149,  306 => 148,  302 => 147,  297 => 144,  293 => 142,  290 => 141,  284 => 136,  279 => 135,  274 => 132,  267 => 126,  261 => 121,  251 => 120,  237 => 114,  234 => 113,  224 => 112,  209 => 177,  206 => 120,  203 => 118,  201 => 112,  198 => 111,  109 => 23,  99 => 22,  72 => 3,  62 => 2,  39 => 1,);
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
<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"home-tab\">
\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\">Audiences</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-content tab-content-basic\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"statistics-details d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Bounce Rate</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">32.53%</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>-0.5%</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Page Views</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">7,682</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>+0.1%</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">New Sessions</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">68.8</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>68.8</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Avg. Time on Site</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">2m:35s</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>+0.8%</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">New Sessions</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">68.8</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>68.8</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<p class=\"statistics-title\">Avg. Time on Site</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"rate-percentage\">2m:35s</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-success d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>+0.8%</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t
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
", "BackOffice/commande/index.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\casamia\\templates\\BackOffice\\commande\\index.html.twig");
    }
}
