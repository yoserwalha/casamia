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

/* FrontOffice/accueil/index.html.twig */
class __TwigTemplate_b401f360683d287e19d0eff8e45342cc6a2c87fff057126835d5db23e560f7ff extends Template
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
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "FrontOffice/accueil/index.html.twig", 1);
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
        echo "\t<!-- Service Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"service-item text-center pt-3\">
\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-graduation-cap text-primary mb-4\"></i>
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Skilled Instructors</h5>
\t\t\t\t\t\t\t<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"service-item text-center pt-3\">
\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-globe text-primary mb-4\"></i>
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Online Classes</h5>
\t\t\t\t\t\t\t<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"service-item text-center pt-3\">
\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-home text-primary mb-4\"></i>
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Home Projects</h5>
\t\t\t\t\t\t\t<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
\t\t\t\t\t<div class=\"service-item text-center pt-3\">
\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-book-open text-primary mb-4\"></i>
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Book Library</h5>
\t\t\t\t\t\t\t<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Service End -->


\t<!-- About Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"min-height: 400px;\">
\t\t\t\t\t<div class=\"position-relative h-100\">
\t\t\t\t\t\t<img class=\"img-fluid position-absolute w-100 h-100\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/about.jpg "), "html", null, true);
        echo "\" alt=\"\" style=\"object-fit: cover;\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<h6 class=\"section-title bg-white text-start text-primary pe-3\">About Us</h6>
\t\t\t\t\t<h1 class=\"mb-4\">Welcome to eLEARNING</h1>
\t\t\t\t\t<p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t<p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
\t\t\t\t\t<div class=\"row gy-2 gx-4 mb-4\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"\">Read More</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- About End -->


\t<!-- Categories Start -->
\t<div class=\"container-xxl py-5 category\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t<h6 class=\"section-title bg-white text-center text-primary px-3\">Categories</h6>
\t\t\t\t<h1 class=\"mb-5\">Courses Categories</h1>
\t\t\t</div>
\t\t\t<div class=\"row g-3\">
\t\t\t\t<div class=\"col-lg-7 col-md-6\">
\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 wow zoomIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t<a class=\"position-relative d-block overflow-hidden\" href=\"\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/cat-1.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Web Design</h5>
\t\t\t\t\t\t\t\t\t<small class=\"text-primary\">49 Courses</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.3s\">
\t\t\t\t\t\t\t<a class=\"position-relative d-block overflow-hidden\" href=\"\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/cat-2.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Graphic Design</h5>
\t\t\t\t\t\t\t\t\t<small class=\"text-primary\">49 Courses</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.5s\">
\t\t\t\t\t\t\t<a class=\"position-relative d-block overflow-hidden\" href=\"\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/cat-3.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Video Editing</h5>
\t\t\t\t\t\t\t\t\t<small class=\"text-primary\">49 Courses</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-6 wow zoomIn\" data-wow-delay=\"0.7s\" style=\"min-height: 350px;\">
\t\t\t\t\t<a class=\"position-relative d-block h-100 overflow-hidden\" href=\"\">
\t\t\t\t\t\t<img class=\"img-fluid position-absolute w-100 h-100\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/cat-4.jpg "), "html", null, true);
        echo "\" alt=\"\" style=\"object-fit: cover;\">
\t\t\t\t\t\t<div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin:  1px;\">
\t\t\t\t\t\t\t<h5 class=\"m-0\">Online Marketing</h5>
\t\t\t\t\t\t\t<small class=\"text-primary\">49 Courses</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Categories Start -->


\t<!-- Courses Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t<h6 class=\"section-title bg-white text-center text-primary px-3\">Courses</h6>
\t\t\t\t<h1 class=\"mb-5\">Popular Courses</h1>
\t\t\t</div>
\t\t\t<div class=\"row g-4 justify-content-center\">
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"course-item bg-light\">
\t\t\t\t\t\t<div class=\"position-relative overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/course-1.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4 pb-0\">
\t\t\t\t\t\t\t<h3 class=\"mb-0\">\$149.00</h3>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small>(123)</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex border-top\">
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user text-primary me-2\"></i>30 Students</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"course-item bg-light\">
\t\t\t\t\t\t<div class=\"position-relative overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/course-2.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4 pb-0\">
\t\t\t\t\t\t\t<h3 class=\"mb-0\">\$149.00</h3>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small>(123)</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex border-top\">
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user text-primary me-2\"></i>30 Students</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"course-item bg-light\">
\t\t\t\t\t\t<div class=\"position-relative overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/course-3.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4 pb-0\">
\t\t\t\t\t\t\t<h3 class=\"mb-0\">\$149.00</h3>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small>(123)</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex border-top\">
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user text-primary me-2\"></i>30 Students</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Courses End -->


\t<!-- Team Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t<h6 class=\"section-title bg-white text-center text-primary px-3\">Instructors</h6>
\t\t\t\t<h1 class=\"mb-5\">Expert Instructors</h1>
\t\t\t</div>
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"team-item bg-light\">
\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/team-1.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Instructor Name</h5>
\t\t\t\t\t\t\t<small>Designation</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"team-item bg-light\">
\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/team-2.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Instructor Name</h5>
\t\t\t\t\t\t\t<small>Designation</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"team-item bg-light\">
\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/team-3.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Instructor Name</h5>
\t\t\t\t\t\t\t<small>Designation</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
\t\t\t\t\t<div class=\"team-item bg-light\">
\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/team-4.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Instructor Name</h5>
\t\t\t\t\t\t\t<small>Designation</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Team End -->


\t<!-- Testimonial Start -->
\t<div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<h6 class=\"section-title bg-white text-center text-primary px-3\">Testimonial</h6>
\t\t\t\t<h1 class=\"mb-5\">Our Students Say!</h1>
\t\t\t</div>
\t\t\t<div class=\"owl-carousel testimonial-carousel position-relative\">
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t<img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/testimonial-1.jpg "), "html", null, true);
        echo "\" style=\"width: 80px; height: 80px;\">
\t\t\t\t\t<h5 class=\"mb-0\">Client Name</h5>
\t\t\t\t\t<p>Profession</p>
\t\t\t\t\t<div class=\"testimonial-text bg-light text-center p-4\">
\t\t\t\t\t\t<p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t<img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/testimonial-2.jpg "), "html", null, true);
        echo "\" style=\"width: 80px; height: 80px;\">
\t\t\t\t\t<h5 class=\"mb-0\">Client Name</h5>
\t\t\t\t\t<p>Profession</p>
\t\t\t\t\t<div class=\"testimonial-text bg-light text-center p-4\">
\t\t\t\t\t\t<p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t<img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/testimonial-3.jpg "), "html", null, true);
        echo "\" style=\"width: 80px; height: 80px;\">
\t\t\t\t\t<h5 class=\"mb-0\">Client Name</h5>
\t\t\t\t\t<p>Profession</p>
\t\t\t\t\t<div class=\"testimonial-text bg-light text-center p-4\">
\t\t\t\t\t\t<p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t<img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/img/testimonial-4.jpg "), "html", null, true);
        echo "\" style=\"width: 80px; height: 80px;\">
\t\t\t\t\t<h5 class=\"mb-0\">Client Name</h5>
\t\t\t\t\t<p>Profession</p>
\t\t\t\t\t<div class=\"testimonial-text bg-light text-center p-4\">
\t\t\t\t\t\t<p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Testimonial End -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 401,  502 => 393,  491 => 385,  480 => 377,  441 => 341,  414 => 317,  387 => 293,  360 => 269,  312 => 224,  278 => 193,  244 => 162,  217 => 138,  203 => 127,  191 => 118,  179 => 109,  122 => 55,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}
{% block body %}
\t<!-- Service Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"service-item text-center pt-3\">
\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-graduation-cap text-primary mb-4\"></i>
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Skilled Instructors</h5>
\t\t\t\t\t\t\t<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"service-item text-center pt-3\">
\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-globe text-primary mb-4\"></i>
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Online Classes</h5>
\t\t\t\t\t\t\t<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"service-item text-center pt-3\">
\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-home text-primary mb-4\"></i>
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Home Projects</h5>
\t\t\t\t\t\t\t<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
\t\t\t\t\t<div class=\"service-item text-center pt-3\">
\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-book-open text-primary mb-4\"></i>
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Book Library</h5>
\t\t\t\t\t\t\t<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Service End -->


\t<!-- About Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"min-height: 400px;\">
\t\t\t\t\t<div class=\"position-relative h-100\">
\t\t\t\t\t\t<img class=\"img-fluid position-absolute w-100 h-100\" src=\"{{ asset ('FrontOffice/img/about.jpg ')}}\" alt=\"\" style=\"object-fit: cover;\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<h6 class=\"section-title bg-white text-start text-primary pe-3\">About Us</h6>
\t\t\t\t\t<h1 class=\"mb-4\">Welcome to eLEARNING</h1>
\t\t\t\t\t<p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t<p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
\t\t\t\t\t<div class=\"row gy-2 gx-4 mb-4\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"\">Read More</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- About End -->


\t<!-- Categories Start -->
\t<div class=\"container-xxl py-5 category\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t<h6 class=\"section-title bg-white text-center text-primary px-3\">Categories</h6>
\t\t\t\t<h1 class=\"mb-5\">Courses Categories</h1>
\t\t\t</div>
\t\t\t<div class=\"row g-3\">
\t\t\t\t<div class=\"col-lg-7 col-md-6\">
\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 wow zoomIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t<a class=\"position-relative d-block overflow-hidden\" href=\"\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/cat-1.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Web Design</h5>
\t\t\t\t\t\t\t\t\t<small class=\"text-primary\">49 Courses</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.3s\">
\t\t\t\t\t\t\t<a class=\"position-relative d-block overflow-hidden\" href=\"\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/cat-2.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Graphic Design</h5>
\t\t\t\t\t\t\t\t\t<small class=\"text-primary\">49 Courses</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.5s\">
\t\t\t\t\t\t\t<a class=\"position-relative d-block overflow-hidden\" href=\"\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/cat-3.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Video Editing</h5>
\t\t\t\t\t\t\t\t\t<small class=\"text-primary\">49 Courses</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-6 wow zoomIn\" data-wow-delay=\"0.7s\" style=\"min-height: 350px;\">
\t\t\t\t\t<a class=\"position-relative d-block h-100 overflow-hidden\" href=\"\">
\t\t\t\t\t\t<img class=\"img-fluid position-absolute w-100 h-100\" src=\"{{ asset ('FrontOffice/img/cat-4.jpg ')}}\" alt=\"\" style=\"object-fit: cover;\">
\t\t\t\t\t\t<div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin:  1px;\">
\t\t\t\t\t\t\t<h5 class=\"m-0\">Online Marketing</h5>
\t\t\t\t\t\t\t<small class=\"text-primary\">49 Courses</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Categories Start -->


\t<!-- Courses Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t<h6 class=\"section-title bg-white text-center text-primary px-3\">Courses</h6>
\t\t\t\t<h1 class=\"mb-5\">Popular Courses</h1>
\t\t\t</div>
\t\t\t<div class=\"row g-4 justify-content-center\">
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"course-item bg-light\">
\t\t\t\t\t\t<div class=\"position-relative overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/course-1.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4 pb-0\">
\t\t\t\t\t\t\t<h3 class=\"mb-0\">\$149.00</h3>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small>(123)</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex border-top\">
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user text-primary me-2\"></i>30 Students</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"course-item bg-light\">
\t\t\t\t\t\t<div class=\"position-relative overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/course-2.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4 pb-0\">
\t\t\t\t\t\t\t<h3 class=\"mb-0\">\$149.00</h3>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small>(123)</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex border-top\">
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user text-primary me-2\"></i>30 Students</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"course-item bg-light\">
\t\t\t\t\t\t<div class=\"position-relative overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/course-3.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4 pb-0\">
\t\t\t\t\t\t\t<h3 class=\"mb-0\">\$149.00</h3>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary\"></small>
\t\t\t\t\t\t\t\t<small>(123)</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex border-top\">
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center border-end py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
\t\t\t\t\t\t\t<small class=\"flex-fill text-center py-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user text-primary me-2\"></i>30 Students</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Courses End -->


\t<!-- Team Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t<h6 class=\"section-title bg-white text-center text-primary px-3\">Instructors</h6>
\t\t\t\t<h1 class=\"mb-5\">Expert Instructors</h1>
\t\t\t</div>
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"team-item bg-light\">
\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/team-1.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Instructor Name</h5>
\t\t\t\t\t\t\t<small>Designation</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"team-item bg-light\">
\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/team-2.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Instructor Name</h5>
\t\t\t\t\t\t\t<small>Designation</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"team-item bg-light\">
\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/team-3.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Instructor Name</h5>
\t\t\t\t\t\t\t<small>Designation</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
\t\t\t\t\t<div class=\"team-item bg-light\">
\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset ('FrontOffice/img/team-4.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Instructor Name</h5>
\t\t\t\t\t\t\t<small>Designation</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Team End -->


\t<!-- Testimonial Start -->
\t<div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<h6 class=\"section-title bg-white text-center text-primary px-3\">Testimonial</h6>
\t\t\t\t<h1 class=\"mb-5\">Our Students Say!</h1>
\t\t\t</div>
\t\t\t<div class=\"owl-carousel testimonial-carousel position-relative\">
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t<img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"{{ asset ('FrontOffice/img/testimonial-1.jpg ')}}\" style=\"width: 80px; height: 80px;\">
\t\t\t\t\t<h5 class=\"mb-0\">Client Name</h5>
\t\t\t\t\t<p>Profession</p>
\t\t\t\t\t<div class=\"testimonial-text bg-light text-center p-4\">
\t\t\t\t\t\t<p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t<img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"{{ asset ('FrontOffice/img/testimonial-2.jpg ')}}\" style=\"width: 80px; height: 80px;\">
\t\t\t\t\t<h5 class=\"mb-0\">Client Name</h5>
\t\t\t\t\t<p>Profession</p>
\t\t\t\t\t<div class=\"testimonial-text bg-light text-center p-4\">
\t\t\t\t\t\t<p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t<img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"{{ asset ('FrontOffice/img/testimonial-3.jpg ')}}\" style=\"width: 80px; height: 80px;\">
\t\t\t\t\t<h5 class=\"mb-0\">Client Name</h5>
\t\t\t\t\t<p>Profession</p>
\t\t\t\t\t<div class=\"testimonial-text bg-light text-center p-4\">
\t\t\t\t\t\t<p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"testimonial-item text-center\">
\t\t\t\t\t<img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"{{ asset ('FrontOffice/img/testimonial-4.jpg ')}}\" style=\"width: 80px; height: 80px;\">
\t\t\t\t\t<h5 class=\"mb-0\">Client Name</h5>
\t\t\t\t\t<p>Profession</p>
\t\t\t\t\t<div class=\"testimonial-text bg-light text-center p-4\">
\t\t\t\t\t\t<p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Testimonial End -->


{% endblock %}
", "FrontOffice/accueil/index.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\FrontOffice\\accueil\\index.html.twig");
    }
}
