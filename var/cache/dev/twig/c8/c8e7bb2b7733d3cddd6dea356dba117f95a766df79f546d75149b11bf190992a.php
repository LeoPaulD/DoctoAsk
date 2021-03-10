<?php

/* paiement/paiement.html.twig */
class __TwigTemplate_e68f9c612dbec64f920d4827ff0ac76be11ddeb0f33e5721f162cc345c825e7b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "paiement/paiement.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paiement/paiement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paiement/paiement.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("paiement/css/style.css"), "html", null, true);
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
        echo "<!-- Contenu de la page -->
<div class=\"contenu\">
    <div class=\"col-12\">
        <div>
            <h1 class=\"text-center pt-2 m-4\">Paiement offre</h1>
        </div>
    </div>
    <!-- 1 : Configuration du profil medecin -->
    <div class=\"container my-5\">
        <div class=\"col-12 m-5\"></div>
        <div class=\"col-10 mx-auto\">
            <div class=\" mx-auto p-4 profil-img mx-auto justify-content-center align-items-center\">
                <div class=\"justify-content-center align-items-center\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("paiement/img/locked.png"), "html", null, true);
        echo "\" alt=\"locked icon\">
                </div>
            </div>
        </div>
        <div>
            <p class=\"text-center mt-4 p-4\">Vous avez choisi l'offre à ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 26, $this->source); })()), "prix", array()), "html", null, true);
        echo " € par mois, vous pourrez configurer ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new Twig_Error_Runtime('Variable "offre" does not exist.', 26, $this->source); })()), "contenu", array()), "html", null, true);
        echo " réponses.</p>
        </div>
        <form action=\"\">
            <div class=\"justify-content-center\">
                <div class=\"col-lg-10 mx-auto\">

                    <div class=\"row\">
                        <div class=\"col-md-6 p-4\">
                            <label class=\"col-12\">Nom :</label>
                            <input class=\"inClass col-lg-12\" type=\"text\" placeholder=\"Entrer nom ...\" autofocus name=\"nom\">
                        </div>
                        <div class=\"col-lg-12 p-4\">
                            <label class=\"col-12\">Numéro de carte :</label>
                            <input type=\"tel\" class=\"inClass col-12\" placeholder=\"\" name=\"carte-credit\">
                        </div>
                        <div class=\"col-lg-6 p-4\">
                            <label class=\"col-12\">Date d'expiration :</label>
                            <input type=\"month\" id=\"mois-année\" class=\"inClass col-12\" name=\"carte-expiration\">
                        </div>
                        <div class=\"col-lg-6 p-4\">
                            <label class=\"col-12\">Cryptogramme CVV:</label>
                            <input type=\"tel\" class=\"inClass col-12\" name=\"cryptogramme cvv\">
                        </div>
                        <div class=\"col-md-6 justify-content-center d-flex mt-3 text-center\">
                            <i class=\"contenu\">Cette page de paiement est factice et ne traite donc aucune données, il est possible de la valider sans remplir les champs. </i>
                        </div>
                        <div class=\"col-md-6 text-center mt-4 mb-5\">
                            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editInfos");
        echo "\" class=\"btn bg-sub primary-btn col-8\">
                                <p class=\"pt-2\">Enregistrer</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
</div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "paiement/paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 53,  99 => 26,  91 => 21,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('paiement/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}
<!-- Contenu de la page -->
<div class=\"contenu\">
    <div class=\"col-12\">
        <div>
            <h1 class=\"text-center pt-2 m-4\">Paiement offre</h1>
        </div>
    </div>
    <!-- 1 : Configuration du profil medecin -->
    <div class=\"container my-5\">
        <div class=\"col-12 m-5\"></div>
        <div class=\"col-10 mx-auto\">
            <div class=\" mx-auto p-4 profil-img mx-auto justify-content-center align-items-center\">
                <div class=\"justify-content-center align-items-center\">
                    <img src=\"{{ asset('paiement/img/locked.png') }}\" alt=\"locked icon\">
                </div>
            </div>
        </div>
        <div>
            <p class=\"text-center mt-4 p-4\">Vous avez choisi l'offre à {{offre.prix}} € par mois, vous pourrez configurer {{offre.contenu}} réponses.</p>
        </div>
        <form action=\"\">
            <div class=\"justify-content-center\">
                <div class=\"col-lg-10 mx-auto\">

                    <div class=\"row\">
                        <div class=\"col-md-6 p-4\">
                            <label class=\"col-12\">Nom :</label>
                            <input class=\"inClass col-lg-12\" type=\"text\" placeholder=\"Entrer nom ...\" autofocus name=\"nom\">
                        </div>
                        <div class=\"col-lg-12 p-4\">
                            <label class=\"col-12\">Numéro de carte :</label>
                            <input type=\"tel\" class=\"inClass col-12\" placeholder=\"\" name=\"carte-credit\">
                        </div>
                        <div class=\"col-lg-6 p-4\">
                            <label class=\"col-12\">Date d'expiration :</label>
                            <input type=\"month\" id=\"mois-année\" class=\"inClass col-12\" name=\"carte-expiration\">
                        </div>
                        <div class=\"col-lg-6 p-4\">
                            <label class=\"col-12\">Cryptogramme CVV:</label>
                            <input type=\"tel\" class=\"inClass col-12\" name=\"cryptogramme cvv\">
                        </div>
                        <div class=\"col-md-6 justify-content-center d-flex mt-3 text-center\">
                            <i class=\"contenu\">Cette page de paiement est factice et ne traite donc aucune données, il est possible de la valider sans remplir les champs. </i>
                        </div>
                        <div class=\"col-md-6 text-center mt-4 mb-5\">
                            <a href=\"{{path('editInfos')}}\" class=\"btn bg-sub primary-btn col-8\">
                                <p class=\"pt-2\">Enregistrer</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
</div>

</div>

{% endblock %}
", "paiement/paiement.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/paiement/paiement.html.twig");
    }
}
