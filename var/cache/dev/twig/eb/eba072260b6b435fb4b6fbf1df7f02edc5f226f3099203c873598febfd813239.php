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

/* BackOffice/dashboard/index.html.twig */
class __TwigTemplate_d6364bceea91a6ca04de9b074d82d5a758ba01c924fcd8ca67f3eb5c9c33b017 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "BackOffice/dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"row\">
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackOffice/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}
{% block body %}
\t<div class=\"row\">
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
{% endblock %}
", "BackOffice/dashboard/index.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\casamia\\templates\\BackOffice\\dashboard\\index.html.twig");
    }
}
