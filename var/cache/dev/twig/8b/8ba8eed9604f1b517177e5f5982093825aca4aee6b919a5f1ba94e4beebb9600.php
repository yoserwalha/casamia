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

/* base_back.html.twig */
class __TwigTemplate_81f61a4a9c6ca3e3f88bd355871d97e954388e5eaceeb0311bf00bdfbc2182f7 extends Template
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
            'profil' => [$this, 'block_profil'],
            'fleche' => [$this, 'block_fleche'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'otherJS' => [$this, 'block_otherJS'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t\t</title>
\t\t<!-- plugins:css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/feather/feather.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/ti-icons/css/themify-icons.css "), "html", null, true);
        echo " \">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/typicons/typicons.css "), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/simple-line-icons/css/simple-line-icons.css "), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/css/vendor.bundle.base.css "), "html", null, true);
        echo "\">
\t\t<!-- endinject -->
\t\t<!-- Plugin css for this page -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/datatables.net-bs4/dataTables.bootstrap4.css "), "html", null, true);
        echo "\"> 
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select.dataTables.min.css"), "html", null, true);
        echo "\">
\t\t<!-- End plugin css for this page -->
\t\t<!-- inject:css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/css/vertical-layout-light/style.css "), "html", null, true);
        echo "\"> <!-- endinject -->
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/favicon.png "), "html", null, true);
        echo "\"/> 
\t\t";
        // line 27
        $this->displayBlock('otherStyle', $context, $blocks);
        // line 28
        echo "\t\t</head>
\t\t<body>
\t\t\t<div
\t\t\t\tclass=\"container-scroller\">
\t\t\t\t<!-- partial:partials/_navbar.html -->

\t\t\t\t<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
\t\t\t\t\t<div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
\t\t\t\t\t\t\t\t<span class=\"icon-menu\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/logo.svg "), "html", null, true);
        echo "\" alt=\"logo\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/logo-mini.svg "), "html", null, true);
        echo "\" alt=\"logo\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-menu-wrapper d-flex align-items-top\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
\t\t\t\t\t\t\t\t<h1 class=\"welcome-text\">Bonjour,
\t\t\t\t\t\t\t\t\t<span class=\"text-black fw-bold\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "getUsername", [], "method", false, false, false, 54), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<h3 class=\"welcome-sub-text\">Retrouvez ici toutes les informations sur votre site AMT Learning !
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t\t\t<div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon input-group-prepend border-right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-calendar input-group-text calendar-icon\"></span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<form class=\"search-form\" action=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 77
        $this->displayBlock('profil', $context, $blocks);
        // line 99
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 100
        $this->displayBlock('fleche', $context, $blocks);
        // line 105
        echo "\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<!-- partial -->
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid page-body-wrapper\">
\t\t\t\t\t<!-- partial:partials/_settings-panel.html -->
\t\t\t\t\t<div class=\"theme-setting-wrapper\">
\t\t\t\t\t\t<div id=\"settings-trigger\">
\t\t\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"theme-settings\" class=\"settings-panel\">
\t\t\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t\t\t<p class=\"settings-heading\">SIDEBAR SKINS</p>
\t\t\t\t\t\t\t<div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
\t\t\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light</div>
\t\t\t\t\t\t\t<div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
\t\t\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark</div>
\t\t\t\t\t\t\t<p class=\"settings-heading mt-2\">HEADER SKINS</p>
\t\t\t\t\t\t\t<div class=\"color-tiles mx-0 px-4\">
\t\t\t\t\t\t\t\t<div class=\"tiles success\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles warning\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles danger\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles info\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles dark\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles default\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"right-sidebar\" class=\"settings-panel\">
\t\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t\t<ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO ppppppppppppppLIST</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- partial -->
\t\t\t\t\t<!-- partial:partials/_sidebar.html -->
\t\t\t\t\t";
        // line 146
        $this->displayBlock('sidebar', $context, $blocks);
        // line 178
        echo "\t\t\t\t\t<!-- partial -->
\t\t\t\t\t<div class=\"main-panel\">
\t\t\t\t\t\t<div class=\"content-wrapper\"> 
\t\t\t\t\t\t";
        // line 181
        $this->displayBlock('body', $context, $blocks);
        // line 182
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- content-wrapper ends -->
\t\t\t\t\t\t\t<!-- partial:partials/_footer.html -->
\t\t\t\t\t\t\t";
        // line 185
        $this->displayBlock('footer', $context, $blocks);
        // line 195
        echo "\t\t\t\t\t\t\t<!-- partial -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- main-panel ends -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- page-body-wrapper ends -->
\t\t\t\t</div>
\t\t\t\t<!-- container-scroller -->

\t\t\t\t<!-- plugins:js -->
\t\t\t\t<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/js/vendor.bundle.base.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<!-- endinject -->
\t\t\t\t<!-- Plugin js for this page -->
\t\t\t\t<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/chart.js/Chart.min.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendors/progressbar.js/progressbar.min.js "), "html", null, true);
        echo "\"></script>

\t\t\t\t<!-- End plugin js for this page -->
\t\t\t\t<!-- inject:js -->
\t\t\t\t<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/off-canvas.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/hoverable-collapse.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/template.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/settings.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/todolist.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<!-- endinject -->
\t\t\t\t<!-- Custom js for this page-->
\t\t\t\t<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/jquery.cookie.js\" type=\"text/javascript "), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/dashboard.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/Chart.roundedBarCharts.js "), "html", null, true);
        echo "\"></script>
\t\t\t\t<!-- End custom js for this page-->

\t\t\t\t";
        // line 225
        $this->displayBlock('otherJS', $context, $blocks);
        // line 226
        echo "\t\t\t</body>
\t\t</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "\t\t\t\tcasamia Dashboard
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_otherStyle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherStyle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherStyle"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_profil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profil"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profil"));

        // line 78
        echo "\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-xs rounded-circle\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face8.jpg "), "html", null, true);
        echo "\" alt=\"Profile image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-md rounded-circle\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/images/faces/face8.jpg "), "html", null, true);
        echo "\" alt=\"Profile image\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 mt-3 font-weight-semibold\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "getUsername", [], "method", false, false, false, 85), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 87
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tMon Profil
\t\t\t\t\t\t\t\t\t\t\t";
        // line 92
        echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Déconnexion</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_fleche($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fleche"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fleche"));

        // line 101
        echo "\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
\t\t\t\t\t\t\t\t<span class=\"mdi mdi-menu\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 147
        echo "\t\t\t\t\t\t<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-grid-large menu-icon\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-category\">Pages</li>

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_index_back");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-card-text-outline\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Commande</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userBack");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Membres casamia</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-category\">Autre</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
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

    // line 185
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 186
        echo "\t\t\t\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a>
\t\t\t\t\t\t\t\t\t\t\tfrom BootstrapDash.</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights reserved.</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 225
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
        return "base_back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 225,  532 => 186,  522 => 185,  504 => 181,  481 => 165,  472 => 159,  460 => 150,  455 => 147,  445 => 146,  432 => 101,  422 => 100,  407 => 94,  403 => 92,  397 => 88,  394 => 87,  390 => 85,  386 => 84,  379 => 80,  375 => 78,  365 => 77,  347 => 27,  336 => 8,  326 => 7,  314 => 226,  312 => 225,  306 => 222,  302 => 221,  298 => 220,  292 => 217,  288 => 216,  284 => 215,  280 => 214,  276 => 213,  269 => 209,  265 => 208,  261 => 207,  255 => 204,  244 => 195,  242 => 185,  237 => 182,  235 => 181,  230 => 178,  228 => 146,  185 => 105,  183 => 100,  180 => 99,  178 => 77,  152 => 54,  141 => 46,  137 => 45,  132 => 43,  128 => 42,  112 => 28,  110 => 27,  106 => 26,  102 => 25,  95 => 21,  91 => 20,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 10,  59 => 7,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tcasamia Dashboard
\t\t\t{% endblock %}
\t\t</title>
\t\t<!-- plugins:css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/vendors/feather/feather.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/vendors/mdi/css/materialdesignicons.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/vendors/ti-icons/css/themify-icons.css ')}} \">
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/vendors/typicons/typicons.css ')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/vendors/simple-line-icons/css/simple-line-icons.css ')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/vendors/css/vendor.bundle.base.css ')}}\">
\t\t<!-- endinject -->
\t\t<!-- Plugin css for this page -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/vendors/datatables.net-bs4/dataTables.bootstrap4.css ')}}\"> 
\t\t<link rel=\"stylesheet\" href=\"{{ asset ('js/select.dataTables.min.css')}}\">
\t\t<!-- End plugin css for this page -->
\t\t<!-- inject:css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ asset ('BackOffice/css/vertical-layout-light/style.css ')}}\"> <!-- endinject -->
\t\t<link rel=\"shortcut icon\" href=\"{{ asset ('BackOffice/images/favicon.png ')}}\"/> 
\t\t{% block otherStyle %}{% endblock %}
\t\t</head>
\t\t<body>
\t\t\t<div
\t\t\t\tclass=\"container-scroller\">
\t\t\t\t<!-- partial:partials/_navbar.html -->

\t\t\t\t<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
\t\t\t\t\t<div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
\t\t\t\t\t\t\t\t<span class=\"icon-menu\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"navbar-brand brand-logo\" href=\"{{path('app_dashboard')}}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('BackOffice/images/logo.svg ')}}\" alt=\"logo\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"navbar-brand brand-logo-mini\" href=\"{{path('app_dashboard')}}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('BackOffice/images/logo-mini.svg ')}}\" alt=\"logo\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-menu-wrapper d-flex align-items-top\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
\t\t\t\t\t\t\t\t<h1 class=\"welcome-text\">Bonjour,
\t\t\t\t\t\t\t\t\t<span class=\"text-black fw-bold\">{{ app.user.getUsername() }}</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<h3 class=\"welcome-sub-text\">Retrouvez ici toutes les informations sur votre site AMT Learning !
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t\t\t<div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon input-group-prepend border-right\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-calendar input-group-text calendar-icon\"></span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<form class=\"search-form\" action=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% block profil %}
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-xs rounded-circle\" src=\"{{ asset ('BackOffice/images/faces/face8.jpg ')}}\" alt=\"Profile image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-md rounded-circle\" src=\"{{ asset ('BackOffice/images/faces/face8.jpg ')}}\" alt=\"Profile image\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 mt-3 font-weight-semibold\">{{ app.user.getUsername() }}</p>
\t\t\t\t\t\t\t\t\t\t\t{# <p class=\"fw-light text-muted mb-0\">{{ app.user.getEmail() }}</p> #}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('profile') }}\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tMon Profil
\t\t\t\t\t\t\t\t\t\t\t{# <span class=\"badge badge-pill badge-danger\">1</span> #}
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('logout') }}\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Déconnexion</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% block fleche %}
\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
\t\t\t\t\t\t\t\t<span class=\"mdi mdi-menu\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<!-- partial -->
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid page-body-wrapper\">
\t\t\t\t\t<!-- partial:partials/_settings-panel.html -->
\t\t\t\t\t<div class=\"theme-setting-wrapper\">
\t\t\t\t\t\t<div id=\"settings-trigger\">
\t\t\t\t\t\t\t<i class=\"ti-settings\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"theme-settings\" class=\"settings-panel\">
\t\t\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t\t\t<p class=\"settings-heading\">SIDEBAR SKINS</p>
\t\t\t\t\t\t\t<div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
\t\t\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light</div>
\t\t\t\t\t\t\t<div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
\t\t\t\t\t\t\t\t<div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark</div>
\t\t\t\t\t\t\t<p class=\"settings-heading mt-2\">HEADER SKINS</p>
\t\t\t\t\t\t\t<div class=\"color-tiles mx-0 px-4\">
\t\t\t\t\t\t\t\t<div class=\"tiles success\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles warning\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles danger\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles info\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles dark\"></div>
\t\t\t\t\t\t\t\t<div class=\"tiles default\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"right-sidebar\" class=\"settings-panel\">
\t\t\t\t\t\t<i class=\"settings-close ti-close\"></i>
\t\t\t\t\t\t<ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO ppppppppppppppLIST</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- partial -->
\t\t\t\t\t<!-- partial:partials/_sidebar.html -->
\t\t\t\t\t{% block sidebar %}
\t\t\t\t\t\t<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_dashboard')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-grid-large menu-icon\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-category\">Pages</li>

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('commande_index_back')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-card-text-outline\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Commande</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('userBack')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Membres casamia</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-category\">Autre</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t{% endblock %}
\t\t\t\t\t<!-- partial -->
\t\t\t\t\t<div class=\"main-panel\">
\t\t\t\t\t\t<div class=\"content-wrapper\"> 
\t\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- content-wrapper ends -->
\t\t\t\t\t\t\t<!-- partial:partials/_footer.html -->
\t\t\t\t\t\t\t{% block footer %}
\t\t\t\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a>
\t\t\t\t\t\t\t\t\t\t\tfrom BootstrapDash.</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights reserved.</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t<!-- partial -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- main-panel ends -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- page-body-wrapper ends -->
\t\t\t\t</div>
\t\t\t\t<!-- container-scroller -->

\t\t\t\t<!-- plugins:js -->
\t\t\t\t<script src=\"{{ asset ('BackOffice/vendors/js/vendor.bundle.base.js ')}}\"></script>
\t\t\t\t<!-- endinject -->
\t\t\t\t<!-- Plugin js for this page -->
\t\t\t\t<script src=\"{{ asset ('BackOffice/vendors/chart.js/Chart.min.js ')}}\"></script>
\t\t\t\t<script src=\"{{ asset ('BackOffice/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js ')}}\"></script>
\t\t\t\t<script src=\"{{ asset ('BackOffice/vendors/progressbar.js/progressbar.min.js ')}}\"></script>

\t\t\t\t<!-- End plugin js for this page -->
\t\t\t\t<!-- inject:js -->
\t\t\t\t<script src=\"{{ asset ('BackOffice/js/off-canvas.js ')}}\"></script>
\t\t\t\t<script src=\"{{ asset ('BackOffice/js/hoverable-collapse.js ')}}\"></script>
\t\t\t\t<script src=\"{{ asset ('BackOffice/js/template.js ')}}\"></script>
\t\t\t\t<script src=\"{{ asset ('BackOffice/js/settings.js ')}}\"></script>
\t\t\t\t<script src=\"{{ asset ('BackOffice/js/todolist.js ')}}\"></script>
\t\t\t\t<!-- endinject -->
\t\t\t\t<!-- Custom js for this page-->
\t\t\t\t<script src=\"{{ asset ('BackOffice/js/jquery.cookie.js\" type=\"text/javascript ')}}\"></script>
\t\t\t\t<script src=\"{{ asset ('BackOffice/js/dashboard.js ')}}\"></script>
\t\t\t\t<script src=\"{{ asset ('BackOffice/js/Chart.roundedBarCharts.js ')}}\"></script>
\t\t\t\t<!-- End custom js for this page-->

\t\t\t\t{% block otherJS %}{% endblock %}
\t\t\t</body>
\t\t</html>
", "base_back.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\base_back.html.twig");
    }
}
