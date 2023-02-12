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

/* base_front.html.twig */
class __TwigTemplate_242e53b30ca7a4e0dc14bb7256303a7ef3c01d48f362464cb7f7c88cc662f473 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'otherStyle' => [$this, 'block_otherStyle'],
            'navbar' => [$this, 'block_navbar'],
            'carousel' => [$this, 'block_carousel'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'fleche' => [$this, 'block_fleche'],
            'otherJS' => [$this, 'block_otherJS'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<meta content=\"\" name=\"keywords\">
\t\t<meta content=\"\" name=\"description\">
\t\t<title>
\t\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t</title>
\t\t<!-- Favicon -->
\t\t<link
\t\thref=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">

\t\t<!-- Google Web Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

\t\t<!-- Icon Font Stylesheet -->
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

\t\t<!-- Libraries Stylesheet -->
\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/lib/animate/animate.min.css "), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/lib/owlcarousel/assets/owl.carousel.min.css "), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t<link
\t\thref=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/bootstrap.min.css "), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Template Stylesheet -->
\t\t<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/style.css "), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t";
        // line 40
        $this->displayBlock('otherStyle', $context, $blocks);
        // line 43
        echo "\t</head>
\t<body>
\t\t<!-- Spinner Start -->
\t\t<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
\t\t\t<div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
\t\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t\t</div>
\t\t</div>
\t\t<!-- Spinner End -->

\t\t";
        // line 53
        $this->displayBlock('navbar', $context, $blocks);
        // line 84
        echo "
\t\t";
        // line 85
        $this->displayBlock('carousel', $context, $blocks);
        // line 127
        echo "
\t\t";
        // line 128
        $this->displayBlock('body', $context, $blocks);
        // line 129
        echo "
\t\t";
        // line 130
        $this->displayBlock('footer', $context, $blocks);
        // line 227
        echo "
\t\t";
        // line 228
        $this->displayBlock('fleche', $context, $blocks);
        // line 234
        echo "
\t\t<!-- JavaScript Libraries -->
\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
\t\t<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/lib/wow/wow.min.js "), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/lib/easing/easing.min.js "), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/lib/waypoints/waypoints.min.js "), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/lib/owlcarousel/owl.carousel.min.js "), "html", null, true);
        echo "\"></script>

\t\t<!-- Template Javascript -->
\t\t<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/main.js "), "html", null, true);
        echo "\"></script>

\t\t";
        // line 246
        $this->displayBlock('otherJS', $context, $blocks);
        // line 247
        echo "\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "\t\t\t\tAMT Learning
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_otherStyle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherStyle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherStyle"));

        // line 41
        echo "\t\t\t";
        // line 42
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 54
        echo "\t\t\t<!-- Navbar Start -->
\t\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
\t\t\t\t<a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
\t\t\t\t\t<h2 class=\"m-0 text-primary\">
\t\t\t\t\t\t<i class=\"fa fa-globe me-3\"></i>CasaMia</h2>
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t<div class=\"navbar-nav ms-auto p-4 p-lg-0\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"nav-item nav-link active\"></a>
\t\t\t\t\t\t<a href=\"about.html\" class=\"nav-item nav-link\"></a>
\t\t\t\t\t\t<a href=\"courses.html\" class=\"nav-item nav-link\"></a>
\t\t\t\t\t\t";
        // line 76
        echo "\t\t\t\t\t\t<a href=\"contact.html\" class=\"nav-item nav-link\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Sign In<i class=\"fa fa-arrow-right ms-3\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<!-- Navbar End -->
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 86
        echo "\t\t\t";
        // line 124
        echo "

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 131
        echo "
\t\t\t<!-- Footer Start -->
\t\t\t<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"row g-5\">
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-3\">Quick Link</h4>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">About Us</a>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">Contact Us</a>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">FAQs & Help</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-3\">Contact</h4>
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
\t\t\t\t\t\t\t<div class=\"d-flex pt-2\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-social\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-social\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-social\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-social\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-3\">Gallery</h4>
\t\t\t\t\t\t\t<div class=\"row g-2 pt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/course-1.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/course-2.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/course-3.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/course-2.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/course-3.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/course-1.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-3\">Newsletter</h4>
\t\t\t\t\t\t\t<p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
\t\t\t\t\t\t\t<div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
\t\t\t\t\t\t\t\t<input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t<a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

\t\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\t\tDesigned By
\t\t\t\t\t\t\t\t<a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
\t\t\t\t\t\t\t\tDistributed By
\t\t\t\t\t\t\t\t<a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-end\">
\t\t\t\t\t\t\t\t<div class=\"footer-menu\">
\t\t\t\t\t\t\t\t\t<a href=\"\">Home</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">Cookies</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">Help</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">FQAs</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Footer End -->
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 228
    public function block_fleche($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fleche"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fleche"));

        // line 229
        echo "\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\">
\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t</a>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 246
    public function block_otherJS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherJS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherJS"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 246,  464 => 229,  454 => 228,  403 => 186,  397 => 183,  391 => 180,  385 => 177,  379 => 174,  373 => 171,  331 => 131,  321 => 130,  303 => 128,  291 => 124,  289 => 86,  279 => 85,  263 => 78,  259 => 76,  244 => 56,  240 => 54,  230 => 53,  220 => 42,  218 => 41,  208 => 40,  197 => 10,  187 => 9,  175 => 247,  173 => 246,  168 => 244,  162 => 241,  158 => 240,  154 => 239,  150 => 238,  144 => 234,  142 => 228,  139 => 227,  137 => 130,  134 => 129,  132 => 128,  129 => 127,  127 => 85,  124 => 84,  122 => 53,  110 => 43,  108 => 40,  103 => 38,  97 => 35,  90 => 31,  85 => 29,  68 => 15,  63 => 12,  61 => 9,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<meta content=\"\" name=\"keywords\">
\t\t<meta content=\"\" name=\"description\">
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tAMT Learning
\t\t\t{% endblock %}
\t\t</title>
\t\t<!-- Favicon -->
\t\t<link
\t\thref=\"{{ asset ('FrontOffice/img/favicon.ico')}}\" rel=\"icon\">

\t\t<!-- Google Web Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

\t\t<!-- Icon Font Stylesheet -->
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

\t\t<!-- Libraries Stylesheet -->
\t\t<link href=\"{{ asset ('FrontOffice/lib/animate/animate.min.css ')}}\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"{{ asset ('FrontOffice/lib/owlcarousel/assets/owl.carousel.min.css ')}}\" rel=\"stylesheet\">

\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t<link
\t\thref=\"{{ asset ('FrontOffice/css/bootstrap.min.css ')}}\" rel=\"stylesheet\">

\t\t<!-- Template Stylesheet -->
\t\t<link href=\"{{ asset ('FrontOffice/css/style.css ')}}\" rel=\"stylesheet\">

\t\t{% block otherStyle %}
\t\t\t{#{{ encore_entry_script_tags('app') }}#}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<!-- Spinner Start -->
\t\t<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
\t\t\t<div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
\t\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t\t</div>
\t\t</div>
\t\t<!-- Spinner End -->

\t\t{% block navbar %}
\t\t\t<!-- Navbar Start -->
\t\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
\t\t\t\t<a href=\"{{ path('inscription') }}\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
\t\t\t\t\t<h2 class=\"m-0 text-primary\">
\t\t\t\t\t\t<i class=\"fa fa-globe me-3\"></i>CasaMia</h2>
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t<div class=\"navbar-nav ms-auto p-4 p-lg-0\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"nav-item nav-link active\"></a>
\t\t\t\t\t\t<a href=\"about.html\" class=\"nav-item nav-link\"></a>
\t\t\t\t\t\t<a href=\"courses.html\" class=\"nav-item nav-link\"></a>
\t\t\t\t\t\t{# <div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"></a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu fade-down m-0\">
\t\t\t\t\t\t\t\t<a href=\"team.html\" class=\"dropdown-item\"></a>
\t\t\t\t\t\t\t\t<a href=\"testimonial.html\" class=\"dropdown-item\"></a>
\t\t\t\t\t\t\t\t<a href=\"404.html\" class=\"dropdown-item\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t<a href=\"contact.html\" class=\"nav-item nav-link\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"{{ path('inscription') }}\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Sign In<i class=\"fa fa-arrow-right ms-3\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<!-- Navbar End -->
\t\t{% endblock %}

\t\t{% block carousel %}
\t\t\t{# <!-- Carousel Start -->
\t\t\t<div class=\"container-fluid p-0 mb-5\">
\t\t\t\t<div class=\"owl-carousel header-carousel position-relative\">
\t\t\t\t\t<div class=\"owl-carousel-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/carousel-1.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t<div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row justify-content-start\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"display-3 text-white animated slideInDown\">The Best Online Learning Platform</h1>
\t\t\t\t\t\t\t\t\t\t<p class=\"fs-5 text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"owl-carousel-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/carousel-2.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t<div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row justify-content-start\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"display-3 text-white animated slideInDown\">Get Educated Online From Your Home</h1>
\t\t\t\t\t\t\t\t\t\t<p class=\"fs-5 text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Carousel End --> #}


\t\t{% endblock %}

\t\t{% block body %}{% endblock %}

\t\t{% block footer %}

\t\t\t<!-- Footer Start -->
\t\t\t<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"row g-5\">
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-3\">Quick Link</h4>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">About Us</a>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">Contact Us</a>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
\t\t\t\t\t\t\t<a class=\"btn btn-link\" href=\"\">FAQs & Help</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-3\">Contact</h4>
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
\t\t\t\t\t\t\t<div class=\"d-flex pt-2\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-social\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-social\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-social\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-social\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-3\">Gallery</h4>
\t\t\t\t\t\t\t<div class=\"row g-2 pt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('FrontOffice/img/course-1.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('FrontOffice/img/course-2.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('FrontOffice/img/course-3.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('FrontOffice/img/course-2.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('FrontOffice/img/course-3.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid bg-light p-1\" src=\"{{ asset ('FrontOffice/img/course-1.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-3\">Newsletter</h4>
\t\t\t\t\t\t\t<p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
\t\t\t\t\t\t\t<div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
\t\t\t\t\t\t\t\t<input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t<a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

\t\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\t\tDesigned By
\t\t\t\t\t\t\t\t<a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
\t\t\t\t\t\t\t\tDistributed By
\t\t\t\t\t\t\t\t<a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-end\">
\t\t\t\t\t\t\t\t<div class=\"footer-menu\">
\t\t\t\t\t\t\t\t\t<a href=\"\">Home</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">Cookies</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">Help</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">FQAs</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Footer End -->
\t\t{% endblock %}

\t\t{% block fleche %}
\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\">
\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t</a>
\t\t{% endblock %}

\t\t<!-- JavaScript Libraries -->
\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
\t\t<script src=\"{{ asset ('FrontOffice/lib/wow/wow.min.js ')}}\"></script>
\t\t<script src=\"{{ asset ('FrontOffice/lib/easing/easing.min.js ')}}\"></script>
\t\t<script src=\"{{ asset ('FrontOffice/lib/waypoints/waypoints.min.js ')}}\"></script>
\t\t<script src=\"{{ asset ('FrontOffice/lib/owlcarousel/owl.carousel.min.js ')}}\"></script>

\t\t<!-- Template Javascript -->
\t\t<script src=\"{{ asset ('FrontOffice/js/main.js ')}}\"></script>

\t\t{% block otherJS %}{% endblock %}
\t</body>
</html>
", "base_front.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\casamia\\templates\\base_front.html.twig");
    }
}
