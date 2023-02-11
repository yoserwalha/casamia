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
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\">Demographics</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\">More</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"btn-wrapper\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark align-items-center\">
\t\t\t\t\t\t\t\t<i class=\"icon-share\"></i>
\t\t\t\t\t\t\t\tShare</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark\">
\t\t\t\t\t\t\t\t<i class=\"icon-printer\"></i>
\t\t\t\t\t\t\t\tPrint</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary text-white me-0\">
\t\t\t\t\t\t\t\t<i class=\"icon-download\"></i>
\t\t\t\t\t\t\t\tExport</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-4 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Performance Line Chart</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-subtitle card-subtitle-dash\">Lorem Ipsum is simply dummy text of the printing</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"performance-line-legend\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chartjs-wrapper mt-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"performaneLine\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-primary card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash text-white mb-4\">Status Summary</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"status-summary-ight-white mb-1\">Closed Value</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-info\">357</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-summary-chart-wrapper pb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"status-summary\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-2 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"circle-progress-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"totalVisitors\" class=\"progressbar-js-circle pr-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-small mb-2\">Total Visitors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 fw-bold\">26.80%</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"circle-progress-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"visitperday\" class=\"progressbar-js-circle pr-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-small mb-2\">Visits per day</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 fw-bold\">9065</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Market Overview</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tThis month
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Settings</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mt-1 justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mt-4 justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"me-2 fw-bold\">\$36,2531.00</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"me-2\">USD</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-success\">(+1.37%)</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"marketing-overview-legend\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chartjs-bar-wrapper mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"marketingOverview\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded table-darkBGImg\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-white upgrade-info mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tEnhance your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Campaign</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor better outreach
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info upgrade-btn\">Upgrade Account!</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Pending Requests</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-plus\"></i>Add new member</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table select-table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Customer</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Company</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Progress</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face1.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Brandon Washington</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">79%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 85%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face2.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Laura Brooks</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face3.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Wayne Murphy</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 38%\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face4.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Matthew Bailey</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-danger\">Pending</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face5.jpg "), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Katherine Butler</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title  card-title-dash\">Recent Events</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChange in Directors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOther Events
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuarterly Report
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChange in Directors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-primary\">Show all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Activities</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">20 finished, 5 remaining</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"bullet-line-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Just now</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Oliver Noah</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Jack William</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Leo Lucas</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Thomas Henry</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-primary\">Show all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Todo list</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"add-items d-flex mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"What do you need to do today?\"> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list todo-list-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning me-3\">Due tomorrow</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-flag ms-2 flag-color\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">23 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success me-3\">Done</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success me-3\">Done</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"border-bottom-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-danger me-3\">Expired</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Type By Amount</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas class=\"my-auto\" id=\"doughnutChart\" height=\"200\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"doughnut-chart-legend\" class=\"mt-5 text-center\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Leave Report</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton3\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMonth Wise
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">week Wise</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Year Wise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"leaveReport\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Top Performer</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face1.jpg "), "html", null, true);
        echo "\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Brandon Washington</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face2.jpg "), "html", null, true);
        echo "\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Wayne Murphy</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"";
        // line 759
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face3.jpg "), "html", null, true);
        echo "\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Katherine Butler</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face4.jpg "), "html", null, true);
        echo "\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Matthew Bailey</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"";
        // line 783
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face5.jpg "), "html", null, true);
        echo "\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Rafell John</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Alaska, USA</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return array (  877 => 783,  862 => 771,  847 => 759,  832 => 747,  817 => 735,  490 => 411,  451 => 375,  412 => 339,  373 => 303,  334 => 267,  68 => 3,  58 => 2,  35 => 1,);
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
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\">Demographics</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\">More</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"btn-wrapper\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark align-items-center\">
\t\t\t\t\t\t\t\t<i class=\"icon-share\"></i>
\t\t\t\t\t\t\t\tShare</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-otline-dark\">
\t\t\t\t\t\t\t\t<i class=\"icon-printer\"></i>
\t\t\t\t\t\t\t\tPrint</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary text-white me-0\">
\t\t\t\t\t\t\t\t<i class=\"icon-download\"></i>
\t\t\t\t\t\t\t\tExport</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-4 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Performance Line Chart</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-subtitle card-subtitle-dash\">Lorem Ipsum is simply dummy text of the printing</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"performance-line-legend\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chartjs-wrapper mt-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"performaneLine\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-primary card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash text-white mb-4\">Status Summary</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"status-summary-ight-white mb-1\">Closed Value</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-info\">357</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-summary-chart-wrapper pb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"status-summary\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-2 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"circle-progress-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"totalVisitors\" class=\"progressbar-js-circle pr-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-small mb-2\">Total Visitors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 fw-bold\">26.80%</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"circle-progress-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"visitperday\" class=\"progressbar-js-circle pr-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-small mb-2\">Visits per day</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0 fw-bold\">9065</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Market Overview</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tThis month
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Settings</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Separated link</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mt-1 justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mt-4 justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"me-2 fw-bold\">\$36,2531.00</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"me-2\">USD</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-success\">(+1.37%)</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"marketing-overview-legend\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chartjs-bar-wrapper mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"marketingOverview\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded table-darkBGImg\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-white upgrade-info mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tEnhance your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Campaign</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor better outreach
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-info upgrade-btn\">Upgrade Account!</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Pending Requests</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-plus\"></i>Add new member</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive  mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table select-table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Customer</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Company</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Progress</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('BackOffice/images/faces/face1.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Brandon Washington</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">79%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 85%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('BackOffice/images/faces/face2.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Laura Brooks</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('BackOffice/images/faces/face3.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Wayne Murphy</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 38%\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning\">In progress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('BackOffice/images/faces/face4.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Matthew Bailey</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-danger\">Pending</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-flat mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('BackOffice/images/faces/face5.jpg ')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Katherine Butler</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Head admin</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Company name 1</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>company type</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-success\">65%</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>85/162</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title  card-title-dash\">Recent Events</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChange in Directors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOther Events
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuarterly Report
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center border-bottom py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 font-weight-medium\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChange in Directors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar text-muted me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-primary\">Show all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Activities</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">20 finished, 5 remaining</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"bullet-line-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Just now</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Oliver Noah</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Jack William</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Leo Lucas</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Thomas Henry</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-light-green\">Ben Tossell</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tassign you a task</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>1h</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list align-items-center pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-primary\">Show all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Todo list</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"add-items d-flex mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"What do you need to do today?\"> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list todo-list-rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-warning me-3\">Due tomorrow</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-flag ms-2 flag-color\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">23 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success me-3\">Done</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-success me-3\">Done</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"border-bottom-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-helper rounded\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-4 text-small me-3\">24 June 2020</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-opacity-danger me-3\">Expired</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Type By Amount</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas class=\"my-auto\" id=\"doughnutChart\" height=\"200\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"doughnut-chart-legend\" class=\"mt-5 text-center\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Leave Report</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton3\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMonth Wise
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">week Wise</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Year Wise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"leaveReport\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row flex-grow\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-rounded\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Top Performer</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"{{ asset ('BackOffice/images/faces/face1.jpg ')}}\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Brandon Washington</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"{{ asset ('BackOffice/images/faces/face2.jpg ')}}\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Wayne Murphy</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"{{ asset ('BackOffice/images/faces/face3.jpg ')}}\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Katherine Butler</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"{{ asset ('BackOffice/images/faces/face4.jpg ')}}\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Matthew Bailey</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">162543</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper d-flex align-items-center justify-content-between pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-sm rounded-10\" src=\"{{ asset ('BackOffice/images/faces/face5.jpg ')}}\" alt=\"profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapper ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"ms-1 mb-1 fw-bold\">Rafell John</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Alaska, USA</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted text-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1h ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "BackOffice/dashboard/index.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\BackOffice\\dashboard\\index.html.twig");
    }
}
