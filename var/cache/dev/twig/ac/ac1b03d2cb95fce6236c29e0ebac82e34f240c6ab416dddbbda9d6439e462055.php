<?php

/* securite/securite.html.twig */
class __TwigTemplate_5e2c89893da7e0e4d92204ae2820c7fa5bcb5dcb9490fe25ea05ad9c8e46eb82 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "securite/securite.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "securite/securite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "securite/securite.html.twig"));

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
        echo "<section class=\"contenu mb-5 text-center bg-light container\">
    <div class=\"row d-flex justify-content-center bg-white pb-4 \">
        <h1 class=\"pt-5  m-4 col-10\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help");
        echo "\">
                <b>SECURITÉ</b>
            </a>
        </h1>


        <h2 class=\"text-center p-4 col-10\">
            <b>POLITIQUE DE PROTECTION DES DONNÉES PERSONNELLES</b>
        </h2>


        <p class=\"text-justify  justify-content-center col-12\">

            Doctoask construit avec ses utilisateurs des relations fortes et durables, fondées sur la confiance
            réciproque : <br>
            assurer la sécurité et la confidentialité des données personnelles de ses utilisateurs est une priorité
            absolue pour DoctoAsk.
            DoctoAsk respecte l’ensemble des dispositions réglementaires et législatives françaises et européennes
            relatives à la protection des données personnelles.
            DoctoAsk se conforme également aux règles déontologiques édictées par les instances ordinales
            représentatives des professions médicales et paramédicales présentes sur son service.
            <br>
            DoctoAsk applique une politique extrêmement stricte pour garantir la protection des données personnelles de
            santé de ses utilisateurs :
            <br>
            - Chaque utilisateur de DoctoAsk reste maître de ses données. DoctoAsk n’en dispose pas librement.
            <br>
            - Elles sont traitées de manière transparente, confidentielle et sécurisée.
            <br>
            - DoctoAsk est engagé dans une démarche continue de protection des données de ses utilisateurs, en
            conformité avec la Loi Informatique et Libertés du 6 janvier 1978 modifiée (ci-après « LIL ») et du
            Règlement (UE) général sur la protection des données du 27 avril 2016 (ci-après « RGPD »).
            <br>

            - Les données personnelles de nos utilisateurs et clients sont hébergées par un prestataire français
            <br>
        </p>

        </p>


        <h2 class=\"text-center p-4 col-10\">
            <b> COLLECTE & ORIGINE DES DONNÉES </b>
        </h2>


        <p class=\"text-justify  justify-content-center col-12\">
            Toutes les données concernant les Utilisateurs sont collectées directement auprès de ces derniers.
            <br>
            Les Utilisateurs sont informés des finalités pour lesquelles leurs données sont collectées via les
            différents
            formulaires de collecte de données en ligne et via la Charte de gestion des cookies.
        </p>


        <h2 class=\"text-center p-4 col-10\" col-12>
            <b>DURÉE DE CONSERVATION DES DONNÉES </b>
        </h2>


        <p class=\"text-justify  justify-content-center col-12 \">
            Nous conservons vos données uniquement le temps nécessaire pour les finalités poursuivies, conformément aux
            prescriptions légales.


        </p>


        <h2 class=\"text-center col-10 p-4\">
            <b> LES DROITS DES UTILISATEURS</b>
        </h2>


        <p class=\"text-justify  justify-content-center col-12\">
            Chaque fois que DoctoAsk traite des Données Personnelles, DoctoAsk prend toutes les mesures raisonnables
            pour
            s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour
            lesquelles
            DoctoAsk les traite.
            <br>
            Conformément à la réglementation européenne en vigueur, les Utilisateurs de Doctoask disposent des droits
            suivants :
            <br>
            <br>
            droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de complétude des
            données des Utilisateurs
            <br>
            droit de verrouillage ou d’effacement des données des Utilisateurs à caractère personnel (article 17 du
            RGPD),
            lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la collecte, l'utilisation, la
            communication ou la conservation est interdite (en savoir plus)
            <br>
            droit de retirer à tout moment un consentement (article 13-2c RGPD)
            <br>
            droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD)
            <br>
            droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD) (en savoir plus)
            <br>
            droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet
            de
            traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD)
            <br>
            droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui DoctoAsk devra
            communiquer (ou non) ses données à un tiers qu’ils aura préalablement désigné (en savoir plus)
            <br>
            Dès que DoctoAsk a connaissance du décès d’un Utilisateur et à défaut d’instructions de sa part, DoctoAsk
            s’engage à détruire ses données, sauf si leur conservation s’avère nécessaire à des fins probatoires ou
            pour
            répondre à une obligation légale (telle que la conservation du dossier patient).
            <br>
            Si l’Utilisateur souhaite savoir comment DoctoAsk utilise ses Données Personnelles, demander à les
            rectifier ou
            s’oppose à leur traitement, l’Utilisateur peut contacter Doctoask par écrit à l’adresse mail suivante
            :doctoask@gmail.com Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait
            que
            DoctoAsk corrige, mette à jour ou supprime, en s’identifiant de manière précise avec une copie d’une pièce
            d’identité (carte d’identité ou passeport). Les demandes de suppression de Données Personnelles seront
            soumises
            aux obligations qui sont imposées à DoctoAsk par la loi, notamment en matière de conservation ou
            d’archivage
            des documents. Enfin, les Utilisateurs de Doctoask peuvent déposer une réclamation auprès des autorités de
            contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).

        </p>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "securite/securite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('cgu/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}
<section class=\"contenu mb-5 text-center bg-light container\">
    <div class=\"row d-flex justify-content-center bg-white pb-4 \">
        <h1 class=\"pt-5  m-4 col-10\">
            <a href=\"{{path('help')}}\">
                <b>SECURITÉ</b>
            </a>
        </h1>


        <h2 class=\"text-center p-4 col-10\">
            <b>POLITIQUE DE PROTECTION DES DONNÉES PERSONNELLES</b>
        </h2>


        <p class=\"text-justify  justify-content-center col-12\">

            Doctoask construit avec ses utilisateurs des relations fortes et durables, fondées sur la confiance
            réciproque : <br>
            assurer la sécurité et la confidentialité des données personnelles de ses utilisateurs est une priorité
            absolue pour DoctoAsk.
            DoctoAsk respecte l’ensemble des dispositions réglementaires et législatives françaises et européennes
            relatives à la protection des données personnelles.
            DoctoAsk se conforme également aux règles déontologiques édictées par les instances ordinales
            représentatives des professions médicales et paramédicales présentes sur son service.
            <br>
            DoctoAsk applique une politique extrêmement stricte pour garantir la protection des données personnelles de
            santé de ses utilisateurs :
            <br>
            - Chaque utilisateur de DoctoAsk reste maître de ses données. DoctoAsk n’en dispose pas librement.
            <br>
            - Elles sont traitées de manière transparente, confidentielle et sécurisée.
            <br>
            - DoctoAsk est engagé dans une démarche continue de protection des données de ses utilisateurs, en
            conformité avec la Loi Informatique et Libertés du 6 janvier 1978 modifiée (ci-après « LIL ») et du
            Règlement (UE) général sur la protection des données du 27 avril 2016 (ci-après « RGPD »).
            <br>

            - Les données personnelles de nos utilisateurs et clients sont hébergées par un prestataire français
            <br>
        </p>

        </p>


        <h2 class=\"text-center p-4 col-10\">
            <b> COLLECTE & ORIGINE DES DONNÉES </b>
        </h2>


        <p class=\"text-justify  justify-content-center col-12\">
            Toutes les données concernant les Utilisateurs sont collectées directement auprès de ces derniers.
            <br>
            Les Utilisateurs sont informés des finalités pour lesquelles leurs données sont collectées via les
            différents
            formulaires de collecte de données en ligne et via la Charte de gestion des cookies.
        </p>


        <h2 class=\"text-center p-4 col-10\" col-12>
            <b>DURÉE DE CONSERVATION DES DONNÉES </b>
        </h2>


        <p class=\"text-justify  justify-content-center col-12 \">
            Nous conservons vos données uniquement le temps nécessaire pour les finalités poursuivies, conformément aux
            prescriptions légales.


        </p>


        <h2 class=\"text-center col-10 p-4\">
            <b> LES DROITS DES UTILISATEURS</b>
        </h2>


        <p class=\"text-justify  justify-content-center col-12\">
            Chaque fois que DoctoAsk traite des Données Personnelles, DoctoAsk prend toutes les mesures raisonnables
            pour
            s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour
            lesquelles
            DoctoAsk les traite.
            <br>
            Conformément à la réglementation européenne en vigueur, les Utilisateurs de Doctoask disposent des droits
            suivants :
            <br>
            <br>
            droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de complétude des
            données des Utilisateurs
            <br>
            droit de verrouillage ou d’effacement des données des Utilisateurs à caractère personnel (article 17 du
            RGPD),
            lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la collecte, l'utilisation, la
            communication ou la conservation est interdite (en savoir plus)
            <br>
            droit de retirer à tout moment un consentement (article 13-2c RGPD)
            <br>
            droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD)
            <br>
            droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD) (en savoir plus)
            <br>
            droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet
            de
            traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD)
            <br>
            droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui DoctoAsk devra
            communiquer (ou non) ses données à un tiers qu’ils aura préalablement désigné (en savoir plus)
            <br>
            Dès que DoctoAsk a connaissance du décès d’un Utilisateur et à défaut d’instructions de sa part, DoctoAsk
            s’engage à détruire ses données, sauf si leur conservation s’avère nécessaire à des fins probatoires ou
            pour
            répondre à une obligation légale (telle que la conservation du dossier patient).
            <br>
            Si l’Utilisateur souhaite savoir comment DoctoAsk utilise ses Données Personnelles, demander à les
            rectifier ou
            s’oppose à leur traitement, l’Utilisateur peut contacter Doctoask par écrit à l’adresse mail suivante
            :doctoask@gmail.com Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait
            que
            DoctoAsk corrige, mette à jour ou supprime, en s’identifiant de manière précise avec une copie d’une pièce
            d’identité (carte d’identité ou passeport). Les demandes de suppression de Données Personnelles seront
            soumises
            aux obligations qui sont imposées à DoctoAsk par la loi, notamment en matière de conservation ou
            d’archivage
            des documents. Enfin, les Utilisateurs de Doctoask peuvent déposer une réclamation auprès des autorités de
            contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).

        </p>
    </div>
</section>
{% endblock %}", "securite/securite.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/securite/securite.html.twig");
    }
}
