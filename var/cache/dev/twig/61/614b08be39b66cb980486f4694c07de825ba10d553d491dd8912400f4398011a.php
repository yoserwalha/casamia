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

/* BackOffice/abonnement/ajouter.html.twig */
class __TwigTemplate_57330a251cab04a4aef054c4599f2aee80f3616f5d8b9aa42e52a1c101c8f544 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'boutonAdd' => [$this, 'block_boutonAdd'],
            'ajouter' => [$this, 'block_ajouter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "BackOffice/abonnement/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/abonnement/ajouter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/abonnement/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("BackOffice/abonnement/index.html.twig", "BackOffice/abonnement/ajouter.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_boutonAdd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutonAdd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutonAdd"));

        // line 3
        echo "\t<div>
\t\t<a class=\"btn btn-primary text-white mb-0 me-0\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboBack");
        echo "\">
\t\t\t<i class=\"mdi mdi-close-octagon\"></i>&nbsp;&nbsp;&nbsp;Annuler</a>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_ajouter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajouter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajouter"));

        // line 10
        echo "\t<div class=\"row flex-grow\">
\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t<div class=\"card card-rounded\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Ajouter un abonnement</h4>
\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Veuillez remplir ces champs pour ajouter un abonnement</p>
\t\t\t\t\t\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom_abo", [], "any", false, false, false, 20), 'label', ["label" => "Nom Abonnement"]);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom_abo", [], "any", false, false, false, 21), 'widget');
        echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'label', ["label" => "Description Abonnement"]);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'widget');
        echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prix", [], "any", false, false, false, 30), 'label', ["label" => "Prix Abonnement"]);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), 'widget');
        echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button class=\"btn btn-primary text-white mb-0 me-0\">";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 34, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
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
        return "BackOffice/abonnement/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 35,  143 => 34,  137 => 31,  133 => 30,  126 => 26,  122 => 25,  115 => 21,  111 => 20,  106 => 18,  96 => 10,  86 => 9,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BackOffice/abonnement/index.html.twig' %}
{% block boutonAdd %}
\t<div>
\t\t<a class=\"btn btn-primary text-white mb-0 me-0\" href=\"{{path('aboBack') }}\">
\t\t\t<i class=\"mdi mdi-close-octagon\"></i>&nbsp;&nbsp;&nbsp;Annuler</a>
\t</div>
{% endblock %}
{# ********************* Ajouter ****************************** #}
{% block ajouter %}
\t<div class=\"row flex-grow\">
\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t<div class=\"card card-rounded\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-start\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Ajouter un abonnement</h4>
\t\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Veuillez remplir ces champs pour ajouter un abonnement</p>
\t\t\t\t\t\t\t{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">{{ form_label(form.nom_abo, \"Nom Abonnement\") }}</th>
\t\t\t\t\t\t\t\t<th>{{ form_widget(form.nom_abo) }}</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">{{ form_label(form.description, \"Description Abonnement\") }}</th>
\t\t\t\t\t\t\t\t<th>{{ form_widget(form.description) }}</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">{{ form_label(form.prix, \"Prix Abonnement\") }}</th>
\t\t\t\t\t\t\t\t<th>{{ form_widget(form.prix) }}</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button class=\"btn btn-primary text-white mb-0 me-0\">{{ button_label|default('Enregistrer') }}</button>
\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "BackOffice/abonnement/ajouter.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\BackOffice\\abonnement\\ajouter.html.twig");
    }
}
