<?php

/* help_chat/helpChat.html.twig */
class __TwigTemplate_9cef6e1b3f83ae6f919348fa883d7d9d94be83cf2e5a90164ebcd3dcbb07e3ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "help_chat/helpChat.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "help_chat/helpChat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "help_chat/helpChat.html.twig"));

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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cgu/css/style.css"), "html", null, true);
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
        echo "<section class=\"contenu mb-5\">
    <div class=\"container d-flex \">
        <div class=\" justify-content-center row\">
            <h1 class=\"text-center pt-4 m-4\">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help");
        echo "\">
                    <b>CHATBOT AIDE !</b>
                </a>
            </h1>
            <h2 class=\"text-center col-10 p-1\">Comment parler à l’assistant numérique de son médecin ?</h2>
            <div class=\"justify-content-center\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\">Accédez au profil d’un médecin grâce à la barre de recherche sur la page
                            d’accueil
                            ou grâce à
                            l’Annuaire</li>
                        <li class=\"p-1\">Sur le profil médecin vous pouvez ouvrir le chat et ainsi parler à l’assistant
                            numérique de
                            votre
                            médecin.</li>
                        <li class=\"p-1\">Interrogez le, il essaiera de répondre au mieux à vos demandes.</li>
                    </ol>

                </p>
            </div>
        </div>
    </div>
</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "help_chat/helpChat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('cgu/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}
<section class=\"contenu mb-5\">
    <div class=\"container d-flex \">
        <div class=\" justify-content-center row\">
            <h1 class=\"text-center pt-4 m-4\">
                <a href=\"{{path('help')}}\">
                    <b>CHATBOT AIDE !</b>
                </a>
            </h1>
            <h2 class=\"text-center col-10 p-1\">Comment parler à l’assistant numérique de son médecin ?</h2>
            <div class=\"justify-content-center\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\">Accédez au profil d’un médecin grâce à la barre de recherche sur la page
                            d’accueil
                            ou grâce à
                            l’Annuaire</li>
                        <li class=\"p-1\">Sur le profil médecin vous pouvez ouvrir le chat et ainsi parler à l’assistant
                            numérique de
                            votre
                            médecin.</li>
                        <li class=\"p-1\">Interrogez le, il essaiera de répondre au mieux à vos demandes.</li>
                    </ol>

                </p>
            </div>
        </div>
    </div>
</section>


{% endblock %}", "help_chat/helpChat.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/help_chat/helpChat.html.twig");
    }
}
