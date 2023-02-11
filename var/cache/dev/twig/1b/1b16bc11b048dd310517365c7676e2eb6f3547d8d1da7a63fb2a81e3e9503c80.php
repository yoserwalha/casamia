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

/* FrontOffice/user/inscription.html.twig */
class __TwigTemplate_391cc1c5e6ab25e99985f03ba360613647f3d635347229ddd1b6b36a4237bdc1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'otherStyle' => [$this, 'block_otherStyle'],
            'carousel' => [$this, 'block_carousel'],
            'otherJS' => [$this, 'block_otherJS'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/user/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/user/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "FrontOffice/user/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AMT - Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_otherStyle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherStyle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherStyle"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/style2.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 7
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success\" role=\"alert\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
<div id=\"container\" class=\"container-fluid\">
\t\t<!-- FORM SECTION -->
\t\t<div class=\"row\">
\t\t\t<!-- SIGN UP -->
\t\t\t<div class=\"col align-items-center flex-col sign-up\">
\t\t\t\t<div class=\"form-wrapper align-items-center\">
\t\t\t\t\t<div class=\"form sign-up\">
\t\t\t\t\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 33, $this->source); })()), "username", [], "any", false, false, false, 33), 'widget', ["attr" => ["placeholder" => "Nom d'utilisateur"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 35
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bx-mail-send'></i>
\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'widget', ["attr" => ["placeholder" => "Email"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 41
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), 'widget', ["attr" => ["placeholder" => "Mot de passe"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 47
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 50, $this->source); })()), "confirme_password", [], "any", false, false, false, 50), 'widget', ["attr" => ["placeholder" => "Confirmer mot de passe"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tDéja membre ?
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<b onclick=\"toggle()\" class=\"pointer\">
\t\t\t\t\t\t\t\tConnectez-vous
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 66, $this->source); })()), 'form_end');
        echo " 
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t<!-- END SIGN UP -->
\t\t\t<!-- SIGN IN -->
\t\t\t<div class=\"col align-items-center flex-col sign-in\">
\t\t\t\t<div class=\"form-wrapper align-items-center\">
\t\t\t\t\t<div class=\"form sign-in\">
\t\t\t\t\t<form action=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Email\" required name=\"_username\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" required name=\"_password\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("motDePasseOubliee");
        echo "\" >Mot de passe oublié ?!</a>
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tVous n'avez pas de compte?
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<b onclick=\"toggle()\" class=\"pointer\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-wrapper\">
\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END SIGN IN -->
\t\t</div>
\t\t<!-- END FORM SECTION -->
\t\t<!-- CONTENT SECTION -->
\t\t<div class=\"row content-row\">
\t\t\t<!-- SIGN IN CONTENT -->
\t\t\t<div class=\"col align-items-center flex-col\">
\t\t\t\t<div class=\"text sign-in\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tBienvenue
\t\t\t\t\t</h2>
\t
\t\t\t\t</div>
\t\t\t\t<div class=\"img sign-in\">
\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END SIGN IN CONTENT -->
\t\t\t<!-- SIGN UP CONTENT -->
\t\t\t<div class=\"col align-items-center flex-col\">
\t\t\t\t<div class=\"img sign-up\">
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"text sign-up\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tRejoignez-nous
\t\t\t\t\t</h2>
\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END SIGN UP CONTENT -->
\t\t</div>
\t\t<!-- END CONTENT SECTION -->
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_otherJS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherJS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "otherJS"));

        // line 145
        echo "<script src=\"FrontOffice/js/main2.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontOffice/user/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 145,  320 => 144,  256 => 90,  238 => 75,  226 => 66,  211 => 53,  207 => 50,  202 => 47,  198 => 44,  193 => 41,  189 => 38,  184 => 35,  180 => 33,  174 => 30,  164 => 22,  155 => 19,  152 => 18,  147 => 17,  138 => 14,  135 => 13,  130 => 12,  121 => 9,  118 => 8,  113 => 7,  103 => 6,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}
{% block title %}AMT - Inscription{% endblock %}
{% block otherStyle %}
<link rel=\"stylesheet\" href=\"{{ asset ('FrontOffice/css/style2.css')}}\">
{% endblock %}
{% block carousel %}
 {% for message in app.flashes('message') %}
        <div class=\"alert alert-success\" role=\"alert\">
                {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('warning') %}
        <div class=\"alert alert-warning\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('danger') %}
        <div class=\"alert alert-danger\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}

<div id=\"container\" class=\"container-fluid\">
\t\t<!-- FORM SECTION -->
\t\t<div class=\"row\">
\t\t\t<!-- SIGN UP -->
\t\t\t<div class=\"col align-items-center flex-col sign-up\">
\t\t\t\t<div class=\"form-wrapper align-items-center\">
\t\t\t\t\t<div class=\"form sign-up\">
\t\t\t\t\t{{ form_start(formInscription , {'attr':{'novalidate':'novalidate'}}) }}
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t\t\t\t{{ form_widget(formInscription.username, {'attr': {'placeholder': \"Nom d'utilisateur\"}}) }}
\t\t\t\t\t\t\t{# <input type=\"text\" placeholder=\"Username\" name=\"formInscription[username]\" required=\"required\"> #}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bx-mail-send'></i>
\t\t\t\t\t\t\t{{ form_widget(formInscription.email, {'attr': {'placeholder': \"Email\"}}) }}
\t\t\t\t\t\t\t{# <input type=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t{{ form_row(formInscription.email) }} #}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t\t\t\t{{ form_widget(formInscription.password, {'attr': {'placeholder': \"Mot de passe\"}}) }}
\t\t\t\t\t\t\t{# <input type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t{{ form_row(formInscription.password) }} #}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t\t\t\t{{ form_widget(formInscription.confirme_password, {'attr': {'placeholder': \"Confirmer mot de passe\"}}) }}
\t\t\t\t\t\t\t{# <input type=\"password\" placeholder=\"Confirm password\">
\t\t\t\t\t\t\t{{ form_row(formInscription.confirme\t_password) }} #}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tDéja membre ?
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<b onclick=\"toggle()\" class=\"pointer\">
\t\t\t\t\t\t\t\tConnectez-vous
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(formInscription) }} 
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t<!-- END SIGN UP -->
\t\t\t<!-- SIGN IN -->
\t\t\t<div class=\"col align-items-center flex-col sign-in\">
\t\t\t\t<div class=\"form-wrapper align-items-center\">
\t\t\t\t\t<div class=\"form sign-in\">
\t\t\t\t\t<form action=\"{{ path('login') }}\" method=\"post\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-user'></i>
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Email\" required name=\"_username\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<i class='bx bxs-lock-alt'></i>
\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Mot de passe\" required name=\"_password\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>
\t\t\t\t\t\t\t\t<a href=\"{{ path('motDePasseOubliee') }}\" >Mot de passe oublié ?!</a>
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tVous n'avez pas de compte?
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<b onclick=\"toggle()\" class=\"pointer\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-wrapper\">
\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END SIGN IN -->
\t\t</div>
\t\t<!-- END FORM SECTION -->
\t\t<!-- CONTENT SECTION -->
\t\t<div class=\"row content-row\">
\t\t\t<!-- SIGN IN CONTENT -->
\t\t\t<div class=\"col align-items-center flex-col\">
\t\t\t\t<div class=\"text sign-in\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tBienvenue
\t\t\t\t\t</h2>
\t
\t\t\t\t</div>
\t\t\t\t<div class=\"img sign-in\">
\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END SIGN IN CONTENT -->
\t\t\t<!-- SIGN UP CONTENT -->
\t\t\t<div class=\"col align-items-center flex-col\">
\t\t\t\t<div class=\"img sign-up\">
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"text sign-up\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tRejoignez-nous
\t\t\t\t\t</h2>
\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END SIGN UP CONTENT -->
\t\t</div>
\t\t<!-- END CONTENT SECTION -->
\t</div>


{% endblock %}
{% block otherJS %}
<script src=\"FrontOffice/js/main2.js\"></script>
{% endblock %}", "FrontOffice/user/inscription.html.twig", "C:\\Users\\YoserWalha\\OneDrive\\Bureau\\amtlearning-meeting2\\templates\\FrontOffice\\user\\inscription.html.twig");
    }
}
