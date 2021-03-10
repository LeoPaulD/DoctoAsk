<?php

/* offres/offres.html.twig */
class __TwigTemplate_042eb0610b3afd204039509b97bfb3956f1cdee42dfcb3409a093eb0edaf40a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "offres/offres.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offres/offres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offres/offres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("offres/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- 1 : Description des offres -->
    <section class=\"contenu\">
    <div class=\"offres\">
        <div class=\"container\">
            <h1 class=\"text-center pt-4\" >
                Nos offres
            </h1>
            <p class=\"text-center p-4\">
                DoctoAsk vous propose 2 tarifs différents, chacun contenant un lot de questions/réponses à configurer pour le chatbot, le nombre dépendant du tarif choisi. Il s’agit d’un abonnement mensuel, la première année étant offerte afin de vous faire découvrir notre service. 
            </p>
        </div>
    </div>

    <!-- 2 : Les Offres -->
    <div class=\"container\">
        <div class=\"row pt-4\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new Twig_Error_Runtime('Variable "offres" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 25
            echo "                <a class=\"col-lg-6 p-3\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement", array("id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-12\">
                        <div class=\"img-offres align-items-end mx-auto\" style=\"background-image : url(";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["offre"], "cheminImg", array())), "html", null, true);
            echo ");\">
                            <div class=\"text-center p-2\">
                                <p><b>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prix", array()), "html", null, true);
            echo " € par mois</b><br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "contenu", array()), "html", null, true);
            echo "  questions + première année offerte</p>
                            </div>
                        </div>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
    <div class=\"container\">
        <p class=\"text-center font-italic p-4\">
            Une fois l’offre sélectionnée, et votre inscription terminée, vous pourrez alors configurer, dans votre espace personnel, vos questions/réponses, ainsi que tester le chatbot tel que le visiteur le percevra.
        </p>
    </div>
    <div class=\"col-12 p-4 pb-5 text-center\">
       <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help");
        echo "\"> <button class=\"bg-sub p-2\">
            <p>Nous contacter</p>
        </button></a>

    </div>

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "offres/offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  123 => 35,  109 => 29,  104 => 27,  98 => 25,  94 => 24,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('offres/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}
<!-- 1 : Description des offres -->
    <section class=\"contenu\">
    <div class=\"offres\">
        <div class=\"container\">
            <h1 class=\"text-center pt-4\" >
                Nos offres
            </h1>
            <p class=\"text-center p-4\">
                DoctoAsk vous propose 2 tarifs différents, chacun contenant un lot de questions/réponses à configurer pour le chatbot, le nombre dépendant du tarif choisi. Il s’agit d’un abonnement mensuel, la première année étant offerte afin de vous faire découvrir notre service. 
            </p>
        </div>
    </div>

    <!-- 2 : Les Offres -->
    <div class=\"container\">
        <div class=\"row pt-4\">
            {% for offre in offres %}
                <a class=\"col-lg-6 p-3\" href=\"{{ path('paiement',{'id':offre.id})}}\">
                    <div class=\"col-12\">
                        <div class=\"img-offres align-items-end mx-auto\" style=\"background-image : url({{ asset(offre.cheminImg)}});\">
                            <div class=\"text-center p-2\">
                                <p><b>{{ offre.prix }} € par mois</b><br>{{ offre.contenu }}  questions + première année offerte</p>
                            </div>
                        </div>
                    </div>
                </a>
            {% endfor %}
        </div>
    </div>
    <div class=\"container\">
        <p class=\"text-center font-italic p-4\">
            Une fois l’offre sélectionnée, et votre inscription terminée, vous pourrez alors configurer, dans votre espace personnel, vos questions/réponses, ainsi que tester le chatbot tel que le visiteur le percevra.
        </p>
    </div>
    <div class=\"col-12 p-4 pb-5 text-center\">
       <a href=\"{{ path('help') }}\"> <button class=\"bg-sub p-2\">
            <p>Nous contacter</p>
        </button></a>

    </div>

    </section>
{% endblock %}
", "offres/offres.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/offres/offres.html.twig");
    }
}
