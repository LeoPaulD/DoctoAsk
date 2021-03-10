<?php

/* contact/contact.html.twig */
class __TwigTemplate_9a07c84f78fe471326472f47eef460b3058616b5775407f7b8668f1574a2db72 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "contact/contact.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 3, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("help/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"contenu text-center\">
    <div class=\"container\">
        <h1>Formulaire de contact !</h1>
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 13, $this->source); })()), "object", array()), 'row', array("attr" => array("placeholder" => "Objet")));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 14, $this->source); })()), "message", array()), 'row', array("attr" => array("placeholder" => "Message")));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 15, $this->source); })()), "name", array()), 'row', array("attr" => array("placeholder" => "nom")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 16, $this->source); })()), "prenom", array()), 'row', array("attr" => array("placeholder" => "prenom")));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 17, $this->source); })()), "mail", array()), 'row', array("attr" => array("placeholder" => "mail")));
        echo "

        <button type=\"submit\" class=\"bg-sub p-2 m-4\">
            Envoyer message
        </button>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  104 => 17,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  79 => 9,  70 => 8,  57 => 5,  48 => 4,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% form_theme formContact 'bootstrap_4_layout.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('help/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}
<section class=\"contenu text-center\">
    <div class=\"container\">
        <h1>Formulaire de contact !</h1>
        {{form_start(formContact)}}
        {{form_row(formContact.object,{'attr': {'placeholder': 'Objet'}})}}
        {{form_row(formContact.message,{'attr': {'placeholder': 'Message'}})}}
        {{form_row(formContact.name,{'attr': {'placeholder': 'nom'}})}}
        {{form_row(formContact.prenom,{'attr': {'placeholder': 'prenom'}})}}
        {{form_row(formContact.mail,{'attr': {'placeholder': 'mail'}})}}

        <button type=\"submit\" class=\"bg-sub p-2 m-4\">
            Envoyer message
        </button>
        {{form_end(formContact)}}
    </div>
    {% endblock %}", "contact/contact.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/contact/contact.html.twig");
    }
}
