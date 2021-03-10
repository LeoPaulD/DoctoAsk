<?php

/* nouveaute/creat.html.twig */
class __TwigTemplate_974d8f021a9eb29298880daf5415fd378d80233d9677ba1f601e3a8d2b3de1b1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "nouveaute/creat.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nouveaute/creat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nouveaute/creat.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formNouveaute"]) || array_key_exists("formNouveaute", $context) ? $context["formNouveaute"] : (function () { throw new Twig_Error_Runtime('Variable "formNouveaute" does not exist.', 3, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
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
        echo "    <link rel=\"stylesheet\" href=\"";
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
   <h1>Création des Nouveautées</h1>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNouveaute"]) || array_key_exists("formNouveaute", $context) ? $context["formNouveaute"] : (function () { throw new Twig_Error_Runtime('Variable "formNouveaute" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
   ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formNouveaute"]) || array_key_exists("formNouveaute", $context) ? $context["formNouveaute"] : (function () { throw new Twig_Error_Runtime('Variable "formNouveaute" does not exist.', 13, $this->source); })()), "title", array()), 'row', array("attr" => array("placeholder" => "Titre de la nouveauté")));
        echo "
   ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formNouveaute"]) || array_key_exists("formNouveaute", $context) ? $context["formNouveaute"] : (function () { throw new Twig_Error_Runtime('Variable "formNouveaute" does not exist.', 14, $this->source); })()), "content", array()), 'row', array("attr" => array("placeholder" => "Description de la nouveauté")));
        echo "
   

   <button type=\"submit\" class=\"bg-sub p-2 m-4\">";
        // line 17
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 17, $this->source); })())) {
            echo "Enregistrer modification";
        } else {
            // line 18
            echo "       Ajouter nouveauté
       ";
        }
        // line 20
        echo "    </button>
   ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNouveaute"]) || array_key_exists("formNouveaute", $context) ? $context["formNouveaute"] : (function () { throw new Twig_Error_Runtime('Variable "formNouveaute" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
   </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "nouveaute/creat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 21,  106 => 20,  102 => 18,  98 => 17,  92 => 14,  88 => 13,  84 => 12,  79 => 9,  70 => 8,  57 => 5,  48 => 4,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% form_theme formNouveaute 'bootstrap_4_layout.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('help/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}
<section class=\"contenu text-center\">
 <div class=\"container\">
   <h1>Création des Nouveautées</h1>
    {{form_start(formNouveaute)}}
   {{form_row(formNouveaute.title,{'attr': {'placeholder': 'Titre de la nouveauté'}})}}
   {{form_row(formNouveaute.content,{'attr': {'placeholder': 'Description de la nouveauté'}})}}
   

   <button type=\"submit\" class=\"bg-sub p-2 m-4\">{% if editMode %}Enregistrer modification{% else %}
       Ajouter nouveauté
       {% endif %}
    </button>
   {{form_end(formNouveaute)}}
   </div>
</section>
{% endblock %}
", "nouveaute/creat.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/nouveaute/creat.html.twig");
    }
}
