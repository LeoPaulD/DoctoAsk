<?php

/* infos/infos.html.twig */
class __TwigTemplate_d88587ed2ec0a38958e427c8d2537818eec011264697d882ffe907bb3ee79353 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "infos/infos.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "infos/infos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "infos/infos.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("infos/css/style.css"), "html", null, true);
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
        echo "
<section class=\"contenu\">

  <div class=\"container-fluid py-4\">
    <div class=\"row\">

      <div class=\"mx-auto\">
        <img
          src=\"

          ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 18, $this->source); })()), "photo", array()) != 0)) {
            // line 19
            echo "              ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((("dist/img/pp-medecin/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "nom", array())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "prenom", array())) . ".jpg")), "html", null, true);
            echo "
          ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->source); })()), "genre", array()) == 0)) {
            // line 21
            echo "              ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/pp-medecin/default_dr_M.jpg"), "html", null, true);
            echo "
          ";
        } else {
            // line 23
            echo "              ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/pp-medecin/default_dr_F.jpg"), "html", null, true);
            echo "
          ";
        }
        // line 25
        echo "
          \"
          alt=\"Photo de profil du ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "specialite", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "prenom", array()), "html", null, true);
        echo "\">
      </div>

    </div>

    <div class=\"row pt-4\">
      <h1 class=\"mx-auto\">Dr. ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->source); })()), "nom", array()), "html", null, true);
        echo "</h1>
    </div>

    <div class=\"row\">
      <h2 class=\"mx-auto\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "specialite", array()), "html", null, true);
        echo "</h2>
    </div>

  </div>

  <div class=\"container pt-3 pb-5\">

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Présentation</h1>
        <p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 48, $this->source); })()), "presentation", array()), "html", null, true);
        echo "</p>
      </div>

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Horaires</h1>
        <p>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 53, $this->source); })()), "horaires", array()), "html", null, true);
        echo "</p>
      </div>

    </div>

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Tarifs et remboursement</h1>
        <p>Consultation :
          ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 63, $this->source); })()), "tarif", array()), "html", null, true);
        echo "€</p>
        <p>Convention secteur
          ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 65, $this->source); })()), "convention", array()), "html", null, true);
        echo "</p>
        <p>Carte vitale :
          ";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 67, $this->source); })()), "CarteVitale", array()) == 1)) {
            // line 68
            echo "            Acceptée
          ";
        } else {
            // line 70
            echo "            Rejetée
          ";
        }
        // line 72
        echo "        </p>
      </div>

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Moyen de paiement</h1>
        <p>
          <span class=\"badge
          ";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 79, $this->source); })()), "cb", array()) == 1)) {
            // line 80
            echo "             badge-success\">
          ";
        } else {
            // line 82
            echo "             badge-danger\">
          ";
        }
        // line 84
        echo "            Carte bleu</span>
        </p>
        <p>
          <span class=\"badge
          ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 88, $this->source); })()), "cheque", array()) == 1)) {
            // line 89
            echo "             badge-success\">
          ";
        } else {
            // line 91
            echo "             badge-danger\">
          ";
        }
        // line 93
        echo "            Chèque</span>
        </p>
        <p>
          <span class=\"badge
          ";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 97, $this->source); })()), "espece", array()) == 1)) {
            // line 98
            echo "             badge-success\">
          ";
        } else {
            // line 100
            echo "             badge-danger\">
          ";
        }
        // line 102
        echo "            Espèce</span>
        </p>
      </div>

    </div>

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Site web de votre médecin</h1>
        <a class=\"btn btn-primary\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 112, $this->source); })()), "siteWeb", array()), "html", null, true);
        echo "\" role=\"button\" target=\"_blank\">
          <i class=\"fas fa-link\"></i> Voir le site</a>
      </div>

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Profil Doctolib</h1>
        <a class=\"btn btn-primary\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 118, $this->source); })()), "doctolib", array()), "html", null, true);
        echo "\" role=\"button\" target=\"_blank\">
          <i class=\"fas fa-user-md\"></i> Voir la page</a>
      </div>

    </div>

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-10 m-1\">

        <h1>Localisation</h1>
        <p>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 129, $this->source); })()), "rueCabinet", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 129, $this->source); })()), "codePostal", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 129, $this->source); })()), "villeCabinet", array()), "html", null, true);
        echo "</p>

        <div style=\"overflow:hidden;width: 100%;height: 440px;\" class=\"mx-auto\">
          <iframe
            width=\"100%\"
            height=\"100%\"
            src=\"https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 135, $this->source); })()), "rueCabinet", array()), "html", null, true);
        echo "+";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 135, $this->source); })()), "villeCabinet", array()), "html", null, true);
        echo "+";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 135, $this->source); })()), "paysCabinet", array()), "html", null, true);
        echo "&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed\"
            frameborder=\"0\"
            scrolling=\"no\"
            marginheight=\"0\"
            marginwidth=\"0\">
          </iframe>
        </div>

      </div>

    </div>

    <div class=\"col-12 col-md-6 btn-chat fixed-bottom mx-auto\">
      <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chatbot", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 148, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"fas fa-comment-dots\"></i> Parler au Dr. ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 149, $this->source); })()), "nom", array()), "html", null, true);
        echo "</a>
    </div>

  </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "infos/infos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 149,  307 => 148,  287 => 135,  274 => 129,  260 => 118,  251 => 112,  239 => 102,  235 => 100,  231 => 98,  229 => 97,  223 => 93,  219 => 91,  215 => 89,  213 => 88,  207 => 84,  203 => 82,  199 => 80,  197 => 79,  188 => 72,  184 => 70,  180 => 68,  178 => 67,  173 => 65,  168 => 63,  155 => 53,  147 => 48,  133 => 37,  126 => 33,  113 => 27,  109 => 25,  103 => 23,  97 => 21,  95 => 20,  90 => 19,  88 => 18,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('infos/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}

<section class=\"contenu\">

  <div class=\"container-fluid py-4\">
    <div class=\"row\">

      <div class=\"mx-auto\">
        <img
          src=\"

          {% if infos.photo != 0 %}
              {{ asset('dist/img/pp-medecin/' ~ user.nom ~ '_' ~ user.prenom ~ '.jpg')}}
          {% elseif user.genre == 0 %}
              {{ asset('dist/img/pp-medecin/default_dr_M.jpg')}}
          {% else %}
              {{ asset('dist/img/pp-medecin/default_dr_F.jpg')}}
          {% endif %}

          \"
          alt=\"Photo de profil du {{ user.specialite }}, {{ user.nom }} {{ user.prenom }}\">
      </div>

    </div>

    <div class=\"row pt-4\">
      <h1 class=\"mx-auto\">Dr. {{ user.nom }}</h1>
    </div>

    <div class=\"row\">
      <h2 class=\"mx-auto\">{{ user.specialite }}</h2>
    </div>

  </div>

  <div class=\"container pt-3 pb-5\">

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Présentation</h1>
        <p>{{ infos.presentation }}</p>
      </div>

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Horaires</h1>
        <p>{{ infos.horaires }}</p>
      </div>

    </div>

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Tarifs et remboursement</h1>
        <p>Consultation :
          {{ infos.tarif }}€</p>
        <p>Convention secteur
          {{ infos.convention }}</p>
        <p>Carte vitale :
          {% if infos.CarteVitale == 1 %}
            Acceptée
          {% else %}
            Rejetée
          {% endif %}
        </p>
      </div>

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Moyen de paiement</h1>
        <p>
          <span class=\"badge
          {% if infos.cb == 1 %}
             badge-success\">
          {% else %}
             badge-danger\">
          {% endif %}
            Carte bleu</span>
        </p>
        <p>
          <span class=\"badge
          {% if infos.cheque == 1 %}
             badge-success\">
          {% else %}
             badge-danger\">
          {% endif %}
            Chèque</span>
        </p>
        <p>
          <span class=\"badge
          {% if infos.espece == 1 %}
             badge-success\">
          {% else %}
             badge-danger\">
          {% endif %}
            Espèce</span>
        </p>
      </div>

    </div>

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Site web de votre médecin</h1>
        <a class=\"btn btn-primary\" href=\"{{ user.siteWeb }}\" role=\"button\" target=\"_blank\">
          <i class=\"fas fa-link\"></i> Voir le site</a>
      </div>

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Profil Doctolib</h1>
        <a class=\"btn btn-primary\" href=\"{{ user.doctolib }}\" role=\"button\" target=\"_blank\">
          <i class=\"fas fa-user-md\"></i> Voir la page</a>
      </div>

    </div>

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-10 m-1\">

        <h1>Localisation</h1>
        <p>{{ infos.rueCabinet }}<br>{{ infos.codePostal }}, {{ infos.villeCabinet }}</p>

        <div style=\"overflow:hidden;width: 100%;height: 440px;\" class=\"mx-auto\">
          <iframe
            width=\"100%\"
            height=\"100%\"
            src=\"https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q={{ infos.rueCabinet }}+{{ infos.villeCabinet }}+{{ infos.paysCabinet }}&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed\"
            frameborder=\"0\"
            scrolling=\"no\"
            marginheight=\"0\"
            marginwidth=\"0\">
          </iframe>
        </div>

      </div>

    </div>

    <div class=\"col-12 col-md-6 btn-chat fixed-bottom mx-auto\">
      <a href=\"{{ path('chatbot',{'id':user.id})}}\">
        <i class=\"fas fa-comment-dots\"></i> Parler au Dr. {{user.nom}}</a>
    </div>

  </section>

{% endblock body %}
", "infos/infos.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/infos/infos.html.twig");
    }
}
