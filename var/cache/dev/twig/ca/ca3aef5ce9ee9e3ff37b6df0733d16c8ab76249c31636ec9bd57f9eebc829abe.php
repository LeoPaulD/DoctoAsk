<?php

/* presse/presse.html.twig */
class __TwigTemplate_a386cf743c911dff58bd4ba9208e1c30545dac315abfde2cadb10a8c147f77fe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "presse/presse.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "presse/presse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "presse/presse.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("presse/css/style.css"), "html", null, true);
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
        echo "<section class=\"container contenu pt-5 pb-5\">

        <!--  1 : La Presse en parle -->

        <div class=\"row\">
            <h1 class=\"col-12 text-center p-3 pb-4\" style=\"color : purple \">
                <b> LA PRESSE EN PARLE</b>
            </h1>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <a href=\"#\"><div class=\"col-lg-12 shadow pt-4 pb-1\">
                    <div class=\"bg-presse center\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("presse/img/sudouest.png"), "html", null, true);
        echo "\" alt=\"sudouest\" class=\"presse\">
                    </div>
                    <p class=\"text-center p-2 \">DoctoAsk est la plateforme qui rapproche les médecins des patients dans les desserts médicaux.</p>
                    <p class=\"text-right\"><b>24/11/2018</b></p>
                </div></a>
            </div>
            <div class=\"col-lg-6\">
                <a href=\"#\"><div class=\"col-lg-12 shadow pt-4 pb-1\">
                    <div class=\"bg-presse center p-1\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("presse/img/LeMonde.png"), "html", null, true);
        echo "\" alt=\"LeMonde\" class=\"presse\">
                    </div>
                    <p class=\"text-center p-2\">Des étudiants de l'Université de Bordeaux ont créé un chatbot révolutionnaire !</p>
                    <p class=\"text-right\"><b>13/11/2018</b></p>
                </div></a>
            </div>
            <div class=\"col-lg-6\">
                <a href=\"#\"><div class=\"col-lg-12 shadow pt-4 pb-1\">
                    <div class=\"bg-presse center p-1\">
                        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("presse/img/linternaute.png"), "html", null, true);
        echo "\" alt=\"linternaute\" class=\"presse\">
                    </div>
                    <p class=\"text-center p-2\">La plateforme DoctoAsk rend maintenant service à plus de 500 médecins dans toute la France !</p>
                    <p class=\"text-right\"><b>13/11/2018</b></p>
                </div></a>
            </div>
            <div class=\"col-lg-6\">
                <a href=\"#\"><div class=\"col-lg-12 shadow pt-4 pb-1\">
                    <div class=\"bg-presse center p-1\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("presse/img/letudiant.png"), "html", null, true);
        echo "\" alt=\"letudiant\" class=\"presse\">
                    </div>
                    <p class=\"text-center p-2\">Un outil qui aide les médecins en leur faisant gagner du temps ! Découvrez DoctoAsk, votre assistant médecin.</p>
                    <p class=\"text-right\"><b>05/11/2018</b></p>
                </div></a>
            </div>
        </div>

        <!-- 2 : DoctoAsk en quelques mots -->

        <div class=\"container pt-4\">
            <h1 class=\"text-center p-4\" style=\"color : purple\">
                <b>DOCTOASK EN QUELQUES MOTS </b>
            </h1>
            <p class=\"text-center\">
                DoctoAsk permet aux médecins de fournir des réponses simples aux questions les plus courantes de
                leurs patients,
                tout en restant concentrés sur les tâches les plus importantes de leur travail quotidien.
                Plus besoin d'avoir à chercher sur internet ou d'appeler son cabinet pour obtenir des informations
                sur votre médecin,
                grâce à DoctoAsk, vous optiendrez rapidement vos réponses !
            </p>
        </div>

        <!-- 3 : Ressources -->
        <div class=\"container pt-4\">
            <h1 class=\"col-12 text-center p-4\" style=\"color : purple \">
                <b> RESSOURCES</b>
            </h1>
            <p class=\"text-center\">Ci-dessous les principales ressources de DoctoAsk, à savoir : Logos, Charte graphique et Images.
            </p>
        </div>
        <div class=\"row pt-4\">
            <div class=\"col-lg-4 pb-5\">
                <div class=\"folder justify-content-center align-items-center mx-auto\">
                    <span>Logos</span>
                </div>
                <div class=\"text-center\">
                    <button class=\"bg-sub \">Télécharger</button>
                </div>
            </div>
            <div class=\"col-lg-4 pb-5\">
                <div class=\"folder justify-content-center align-items-center mx-auto\">
                    <span>Charte graphique</span>
                </div>
                <div class=\"text-center\">
                    <button class=\"bg-sub \">Télécharger</button>
                </div>
            </div>
            <div class=\"col-lg-4 pb-5\">
                <div class=\"folder justify-content-center align-items-center mx-auto\">
                    <span>Images</span>
                </div>
                <div class=\"text-center\">
                    <button class=\"bg-sub \">Télécharger</button>
                </div>
            </div>
        </div>




        <!-- 4 Communiqués de presse  -->

        <div class=\"container\">
            <h1 class=\"text-center p-4\" style=\"color : purple\">
                <b>COMMUNIQUÉ DE PRESSE</b>
            </h1>
            <p class=\"text-center \">Retrouvez nos communiqués officiels</p>
            <div>
                <p class=\"text-center p-4\">
                    <b>1 Janvier 2019 : </b>Plus de 500 médecins fond déja confiance à DoctoAsk.
                </p>
            </div>
            <div class=\"text-center\">
                <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help");
        echo "\" class=\"btn bg-sub primary-btn col-4\">
                    <p class=\"pt-2\">Nous contacter</p>
                </a>
            </div>
        </div>


    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "presse/presse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 123,  127 => 48,  115 => 39,  103 => 30,  91 => 21,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('presse/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}
<section class=\"container contenu pt-5 pb-5\">

        <!--  1 : La Presse en parle -->

        <div class=\"row\">
            <h1 class=\"col-12 text-center p-3 pb-4\" style=\"color : purple \">
                <b> LA PRESSE EN PARLE</b>
            </h1>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <a href=\"#\"><div class=\"col-lg-12 shadow pt-4 pb-1\">
                    <div class=\"bg-presse center\">
                        <img src=\"{{asset('presse/img/sudouest.png')}}\" alt=\"sudouest\" class=\"presse\">
                    </div>
                    <p class=\"text-center p-2 \">DoctoAsk est la plateforme qui rapproche les médecins des patients dans les desserts médicaux.</p>
                    <p class=\"text-right\"><b>24/11/2018</b></p>
                </div></a>
            </div>
            <div class=\"col-lg-6\">
                <a href=\"#\"><div class=\"col-lg-12 shadow pt-4 pb-1\">
                    <div class=\"bg-presse center p-1\">
                        <img src=\"{{asset('presse/img/LeMonde.png')}}\" alt=\"LeMonde\" class=\"presse\">
                    </div>
                    <p class=\"text-center p-2\">Des étudiants de l'Université de Bordeaux ont créé un chatbot révolutionnaire !</p>
                    <p class=\"text-right\"><b>13/11/2018</b></p>
                </div></a>
            </div>
            <div class=\"col-lg-6\">
                <a href=\"#\"><div class=\"col-lg-12 shadow pt-4 pb-1\">
                    <div class=\"bg-presse center p-1\">
                        <img src=\"{{asset('presse/img/linternaute.png')}}\" alt=\"linternaute\" class=\"presse\">
                    </div>
                    <p class=\"text-center p-2\">La plateforme DoctoAsk rend maintenant service à plus de 500 médecins dans toute la France !</p>
                    <p class=\"text-right\"><b>13/11/2018</b></p>
                </div></a>
            </div>
            <div class=\"col-lg-6\">
                <a href=\"#\"><div class=\"col-lg-12 shadow pt-4 pb-1\">
                    <div class=\"bg-presse center p-1\">
                        <img src=\"{{asset('presse/img/letudiant.png')}}\" alt=\"letudiant\" class=\"presse\">
                    </div>
                    <p class=\"text-center p-2\">Un outil qui aide les médecins en leur faisant gagner du temps ! Découvrez DoctoAsk, votre assistant médecin.</p>
                    <p class=\"text-right\"><b>05/11/2018</b></p>
                </div></a>
            </div>
        </div>

        <!-- 2 : DoctoAsk en quelques mots -->

        <div class=\"container pt-4\">
            <h1 class=\"text-center p-4\" style=\"color : purple\">
                <b>DOCTOASK EN QUELQUES MOTS </b>
            </h1>
            <p class=\"text-center\">
                DoctoAsk permet aux médecins de fournir des réponses simples aux questions les plus courantes de
                leurs patients,
                tout en restant concentrés sur les tâches les plus importantes de leur travail quotidien.
                Plus besoin d'avoir à chercher sur internet ou d'appeler son cabinet pour obtenir des informations
                sur votre médecin,
                grâce à DoctoAsk, vous optiendrez rapidement vos réponses !
            </p>
        </div>

        <!-- 3 : Ressources -->
        <div class=\"container pt-4\">
            <h1 class=\"col-12 text-center p-4\" style=\"color : purple \">
                <b> RESSOURCES</b>
            </h1>
            <p class=\"text-center\">Ci-dessous les principales ressources de DoctoAsk, à savoir : Logos, Charte graphique et Images.
            </p>
        </div>
        <div class=\"row pt-4\">
            <div class=\"col-lg-4 pb-5\">
                <div class=\"folder justify-content-center align-items-center mx-auto\">
                    <span>Logos</span>
                </div>
                <div class=\"text-center\">
                    <button class=\"bg-sub \">Télécharger</button>
                </div>
            </div>
            <div class=\"col-lg-4 pb-5\">
                <div class=\"folder justify-content-center align-items-center mx-auto\">
                    <span>Charte graphique</span>
                </div>
                <div class=\"text-center\">
                    <button class=\"bg-sub \">Télécharger</button>
                </div>
            </div>
            <div class=\"col-lg-4 pb-5\">
                <div class=\"folder justify-content-center align-items-center mx-auto\">
                    <span>Images</span>
                </div>
                <div class=\"text-center\">
                    <button class=\"bg-sub \">Télécharger</button>
                </div>
            </div>
        </div>




        <!-- 4 Communiqués de presse  -->

        <div class=\"container\">
            <h1 class=\"text-center p-4\" style=\"color : purple\">
                <b>COMMUNIQUÉ DE PRESSE</b>
            </h1>
            <p class=\"text-center \">Retrouvez nos communiqués officiels</p>
            <div>
                <p class=\"text-center p-4\">
                    <b>1 Janvier 2019 : </b>Plus de 500 médecins fond déja confiance à DoctoAsk.
                </p>
            </div>
            <div class=\"text-center\">
                <a href=\"{{ path('help') }}\" class=\"btn bg-sub primary-btn col-4\">
                    <p class=\"pt-2\">Nous contacter</p>
                </a>
            </div>
        </div>


    </section>
{% endblock %}
", "presse/presse.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/presse/presse.html.twig");
    }
}
