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

/* BackOffice/commande/ajouter.html.twig */
class __TwigTemplate_93ca0511e3fe2c50f6e6aec1ac4f6519b07916a1c4e979d3435ff031f8056bac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'boutonAdd' => [$this, 'block_boutonAdd'],
            'affichage' => [$this, 'block_affichage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "BackOffice/commande/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/commande/ajouter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/commande/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("BackOffice/commande/index.html.twig", "BackOffice/commande/ajouter.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_index_back");
        echo "\">
\t\t\t<i class=\"mdi mdi-close-octagon\"></i>&nbsp;&nbsp;&nbsp;Annuler</a>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_affichage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affichage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affichage"));

        // line 10
        echo "\t<div class=\"row flex-grow\">
\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t<div class=\"card card-rounded\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Ajouter une commande</h4>
\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Veuillez remplir ces champs pour ajouter une commande</p>
\t\t\t\t\t\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), 'label', ["label" => "Nom client"]);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20), 'widget');
        echo "</th>
\t\t\t\t\t\t</tr>
                        <tr>
\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'label', ["label" => "Description"]);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'widget');
        echo "</th>
\t\t\t\t\t\t</tr>
                        <tr>
\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), 'label', ["label" => "Prix"]);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), 'widget');
        echo "</th>
\t\t\t\t\t\t</tr>
                        <tr>
\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateExp", [], "any", false, false, false, 31), 'label', ["label" => "Date Expiration"]);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateExp", [], "any", false, false, false, 32), 'widget');
        echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button class=\"btn btn-primary text-white mb-0 me-0\">";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
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
        return "BackOffice/commande/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 36,  150 => 35,  144 => 32,  140 => 31,  134 => 28,  130 => 27,  124 => 24,  120 => 23,  114 => 20,  110 => 19,  105 => 17,  96 => 10,  86 => 9,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BackOffice/commande/index.html.twig' %}
{% block boutonAdd %}
\t<div>
\t\t<a class=\"btn btn-primary text-white mb-0 me-0\" href=\"{{path('commande_index_back') }}\">
\t\t\t<i class=\"mdi mdi-close-octagon\"></i>&nbsp;&nbsp;&nbsp;Annuler</a>
\t</div>
{% endblock %}
{# *************************** Ajouter ********************************** #}
{% block affichage %}
\t<div class=\"row flex-grow\">
\t\t<div class=\"col-12 grid-margin stretch-card\">
\t\t\t<div class=\"card card-rounded\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4 class=\"card-title card-title-dash\">Ajouter une commande</h4>
\t\t\t\t\t\t<p class=\"card-subtitle card-subtitle-dash\">Veuillez remplir ces champs pour ajouter une commande</p>
\t\t\t\t\t\t{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">{{ form_label(form.username, \"Nom client\") }}</th>
\t\t\t\t\t\t\t<th>{{ form_widget(form.username) }}</th>
\t\t\t\t\t\t</tr>
                        <tr>
\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">{{ form_label(form.description, \"Description\") }}</th>
\t\t\t\t\t\t\t<th>{{ form_widget(form.description) }}</th>
\t\t\t\t\t\t</tr>
                        <tr>
\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">{{ form_label(form.prix, \"Prix\") }}</th>
\t\t\t\t\t\t\t<th>{{ form_widget(form.prix) }}</th>
\t\t\t\t\t\t</tr>
                        <tr>
\t\t\t\t\t\t\t<th class=\"m-0 font-weight-bold text-dark\">{{ form_label(form.dateExp, \"Date Expiration\") }}</th>
\t\t\t\t\t\t\t<th>{{ form_widget(form.dateExp) }}</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button class=\"btn btn-primary text-white mb-0 me-0\">{{ button_label|default('Enregistrer') }}</button>
\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "BackOffice/commande/ajouter.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\BackOffice\\commande\\ajouter.html.twig");
    }
}
