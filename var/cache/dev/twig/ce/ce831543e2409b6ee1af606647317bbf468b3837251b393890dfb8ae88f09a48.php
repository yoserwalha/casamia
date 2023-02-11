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

/* base_front_connecte.html.twig */
class __TwigTemplate_32ae3b03cf0780177808ac7bc5de7c151e08faeb6ef34d0c422382965363e3fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front_connecte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front_connecte.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "base_front_connecte.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 3
        echo "\t\t\t<!-- Navbar Start -->
\t\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
\t\t\t\t<a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
\t\t\t\t\t<h2 class=\"m-0 text-primary\">
\t\t\t\t\t\t<i class=\"fa fa-book me-3\"></i>eLEARNING</h2>
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t<div class=\"navbar-nav ms-auto p-4 p-lg-0\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
\t\t\t\t\t\t<a href=\"about.html\" class=\"nav-item nav-link\">About</a>
\t\t\t\t\t\t<a href=\"courses.html\" class=\"nav-item nav-link\">Courses</a>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu fade-down m-0\">
\t\t\t\t\t\t\t\t<a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
\t\t\t\t\t\t\t\t<a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
\t\t\t\t\t\t\t\t<a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Déconnexion<i class=\"fa fa-arrow-right ms-3\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<!-- Navbar End -->
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base_front_connecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}
{% block navbar %}
\t\t\t<!-- Navbar Start -->
\t\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
\t\t\t\t<a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
\t\t\t\t\t<h2 class=\"m-0 text-primary\">
\t\t\t\t\t\t<i class=\"fa fa-book me-3\"></i>eLEARNING</h2>
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t<div class=\"navbar-nav ms-auto p-4 p-lg-0\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
\t\t\t\t\t\t<a href=\"about.html\" class=\"nav-item nav-link\">About</a>
\t\t\t\t\t\t<a href=\"courses.html\" class=\"nav-item nav-link\">Courses</a>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu fade-down m-0\">
\t\t\t\t\t\t\t\t<a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
\t\t\t\t\t\t\t\t<a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
\t\t\t\t\t\t\t\t<a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"{{ path('logout') }}\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Déconnexion<i class=\"fa fa-arrow-right ms-3\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<!-- Navbar End -->
\t\t{% endblock %}", "base_front_connecte.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\base_front_connecte.html.twig");
    }
}
