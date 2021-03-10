<?php

/* faq/faq.html.twig */
class __TwigTemplate_9d5f12c90b83421de8fe026e1faeee7aa9f7e609603cb71e0044618e2058f5cd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "faq/faq.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faq/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faq/faq.html.twig"));

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
        echo "<section class=\"contenu  \">
    <div class=\"container d-flex \">
        <div class=\"row\">
            <h1 class=\" text-center col-12 pt-4 m-4\">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help");
        echo "\">
                    <b>FOIRE AUX QUESTIONS !</b>
                </a>
            </h1>

            <h2 class=\"text-center col-12 p-1 pt-3\">Comment trouver son Médecin ?</h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12 \">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\"> Dans la barre de recherche \"Rechercher un médecin”, taper les premières
                            lettres de votre médecin.
                            <hr>
                            Vous ne vous rappelez pas du nom de votre médecin ou vous n’avez pas de médecin,
                            accédez à
                            notre annuaire de praticiens pour trouver un médecin plus facilement grâce à des
                            filtres.
                            <ul>
                                <li>Accéder à l’annuaire médecin.</li>
                                <li>L’outil filtre vous permet de trouver intuitivement un médecin en fonction de
                                    sa spécialité, de sa localisation.</li>
                            </ul>
                        </li>
                        <li class=\"p-1\">Selectionnez votre médecin.</li>
                        <li class=\"p-1\">Vous êtes maitenant sur son profil, vous pouvez retrouver différentes
                            informations lié à son activité et son cabinet médical mais vous pouvez aussi intéragir
                            avec son assistant numérique.</li>
                    </ol>

                </p>
            </div>

            <h2 class=\"text-center col-12 p-1 pt-3\">Vous êtes praticien ?</h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\">Cliquez sur un des boutons “Êtes-vous praticien” sur notre site.</li>
                        <li class=\"p-1\">Atterrissez sur la page connexion pour accéder à votre espace personnel.</li>
                        <li class=\"p-1\">Vous avez déjà un compte, connectez-vous avec votre identifiant et mot de
                            passe.
                            <hr>
                            Vous n’avez pas de compte, inscrivez-vous

                        </li>
                        <li class=\"p-1\"> Vous êtes maintenant connecté sur la plateforme vous pouvez accéder à
                            votre espace personnel et configurer votre profil ainsi que votre assistant numérique</li>

                    </ol>

                </p>
            </div>

            <h2 class=\"text-center col-12 p-1 pt-3\">Comment choisir mon offre ?</h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\"> Dans la barre de navigation cliquez sur <b>\"Nos offres\"</b> ou
                            connectez-vous à
                            votre espace personnel pour accéder aux offres.</li>
                        <li class=\"p-1\">Sélectionnez une offre adapté à vos besoins.</li>
                        <li class=\"p-1\">Souscrivez à l’offre, les modalités de la première année vous sont
                            offertes.</li>
                    </ol>

                </p>
            </div>


            <h2 class=\"text-center col-12 p-1 pt-3\">Comment configurer son profil ? </h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\">Connectez-vous à votre espace personnel pour accéder à l'édition de votre
                            profil médecin.</li>
                        <li class=\"p-1\">Entrez vos différentes informations.</li>
                        <li class=\"p-1\">Votre profil est maintenant à jour et publique.</li>
                    </ol>

                </p>
            </div>


            <h2 class=\"text-center col-12 p-1 pt-3 \">Comment configurer son assistant numérique / son chatbot ?</h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\">Connectez-vous à votre espace personnel pour accéder à la configuration du
                            chatbot.</li>
                        <li class=\"p-1\">Configurer vos réponses en fonction du nombre de réponses possible dans
                            votre offre.</li>
                        <li class=\"p-1\">Votre assistant numérique peut maintenant répondre aux questions de vos
                            patients.</li>
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
        return "faq/faq.html.twig";
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
<section class=\"contenu  \">
    <div class=\"container d-flex \">
        <div class=\"row\">
            <h1 class=\" text-center col-12 pt-4 m-4\">
                <a href=\"{{path('help')}}\">
                    <b>FOIRE AUX QUESTIONS !</b>
                </a>
            </h1>

            <h2 class=\"text-center col-12 p-1 pt-3\">Comment trouver son Médecin ?</h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12 \">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\"> Dans la barre de recherche \"Rechercher un médecin”, taper les premières
                            lettres de votre médecin.
                            <hr>
                            Vous ne vous rappelez pas du nom de votre médecin ou vous n’avez pas de médecin,
                            accédez à
                            notre annuaire de praticiens pour trouver un médecin plus facilement grâce à des
                            filtres.
                            <ul>
                                <li>Accéder à l’annuaire médecin.</li>
                                <li>L’outil filtre vous permet de trouver intuitivement un médecin en fonction de
                                    sa spécialité, de sa localisation.</li>
                            </ul>
                        </li>
                        <li class=\"p-1\">Selectionnez votre médecin.</li>
                        <li class=\"p-1\">Vous êtes maitenant sur son profil, vous pouvez retrouver différentes
                            informations lié à son activité et son cabinet médical mais vous pouvez aussi intéragir
                            avec son assistant numérique.</li>
                    </ol>

                </p>
            </div>

            <h2 class=\"text-center col-12 p-1 pt-3\">Vous êtes praticien ?</h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\">Cliquez sur un des boutons “Êtes-vous praticien” sur notre site.</li>
                        <li class=\"p-1\">Atterrissez sur la page connexion pour accéder à votre espace personnel.</li>
                        <li class=\"p-1\">Vous avez déjà un compte, connectez-vous avec votre identifiant et mot de
                            passe.
                            <hr>
                            Vous n’avez pas de compte, inscrivez-vous

                        </li>
                        <li class=\"p-1\"> Vous êtes maintenant connecté sur la plateforme vous pouvez accéder à
                            votre espace personnel et configurer votre profil ainsi que votre assistant numérique</li>

                    </ol>

                </p>
            </div>

            <h2 class=\"text-center col-12 p-1 pt-3\">Comment choisir mon offre ?</h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\"> Dans la barre de navigation cliquez sur <b>\"Nos offres\"</b> ou
                            connectez-vous à
                            votre espace personnel pour accéder aux offres.</li>
                        <li class=\"p-1\">Sélectionnez une offre adapté à vos besoins.</li>
                        <li class=\"p-1\">Souscrivez à l’offre, les modalités de la première année vous sont
                            offertes.</li>
                    </ol>

                </p>
            </div>


            <h2 class=\"text-center col-12 p-1 pt-3\">Comment configurer son profil ? </h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\">Connectez-vous à votre espace personnel pour accéder à l'édition de votre
                            profil médecin.</li>
                        <li class=\"p-1\">Entrez vos différentes informations.</li>
                        <li class=\"p-1\">Votre profil est maintenant à jour et publique.</li>
                    </ol>

                </p>
            </div>


            <h2 class=\"text-center col-12 p-1 pt-3 \">Comment configurer son assistant numérique / son chatbot ?</h2>
            <div class=\"justify-content-center pb-5\">
                <p class=\"text-justify  col-12\">
                    <ol>
                        <li class=\"p-1\">Allez sur DoctoAsk.</li>
                        <li class=\"p-1\">Connectez-vous à votre espace personnel pour accéder à la configuration du
                            chatbot.</li>
                        <li class=\"p-1\">Configurer vos réponses en fonction du nombre de réponses possible dans
                            votre offre.</li>
                        <li class=\"p-1\">Votre assistant numérique peut maintenant répondre aux questions de vos
                            patients.</li>
                    </ol>

                </p>
            </div>

        </div>
    </div>
</section>


{% endblock %}", "faq/faq.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/faq/faq.html.twig");
    }
}
