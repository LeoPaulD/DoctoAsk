<?php

/* default/index.html.twig */
class __TwigTemplate_fd93e2c5e4ca3f314881aa64c5ea1dc2b11309a6230904389388d25641b30b7b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<section class=\"contenu\">
      <!-- Page d'accueil  -->
      <div class=\"first\">
        <div class=\"container\">
          <div class=\"row\">
            <!-- Image mascotte -->
            <div class=\"col-6 col-md-4 mx-auto\">
              <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/personnage-femme.png"), "html", null, true);
        echo "\" alt=\"mascotte doctoask\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-10 mx-auto\">
              <h1 class=\"accroche mx-auto\">Bonjour, Comment puis-je vous aider&nbsp;?</h1>
            </div>
          </div>
          <!-- Barre de recherche -->
          <div class=\"row\">
            <div class=\"input-group search col-8 mx-auto\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fas fa-search\"></i></span>
              </div>
              <input type=\"text\" id=\"input_doctor\" class=\"form-control\" placeholder=\"Rechercher un medecin\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-7  mx-auto \" id=\"liste\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docteurs"]) || array_key_exists("docteurs", $context) ? $context["docteurs"] : (function () { throw new Twig_Error_Runtime('Variable "docteurs" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["docteur"]) {
            // line 34
            echo "                  <p id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docteur"], "id", array()), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("infos", array("id" => twig_get_attribute($this->env, $this->source, $context["docteur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docteur"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docteur"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docteur"], "specialite", array()), "html", null, true);
            echo "</a></p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </div>
          </div>
          <!-- Boutons -->
          <div class=\"row justify-content-center mt-3\">
              <div class=\"col-7 col-lg-3 d-flex \">
                  <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "\" class=\"btn bg-sub-light m-2 mx-auto\">
                    Annuaire médical
                  </a>
              </div>
              <div class=\"col-8 col-lg-3 d-flex\">
                  <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\" class=\"btn bg-sub-light m-2 mx-auto\">
                    Êtes-vous praticien ?
                  </a>
              </div>
          </div>
          <div class=\"row py-3 text-light\">
              <p class=\"col-12 text-center\">Hey, par ici !</p>
              <i class=\"fas fa-angle-down fa-3x bounce arrow mx-auto\"></i>
          </div>
        </div>
      </div>
      <!-- Didactitiel -->
      <div class=\"dictaticiel\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-4 mx-auto\">
              <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/loader.gif"), "html", null, true);
        echo "\" alt=\"mascotte doctoask\">
            </div>
          </div>

          <div class=\"row\">
            <button type=\"button\" class=\"btn bg-sub-light mx-auto\">
              Didactitiel bientôt disponible
            </button>
          </div>
        </div>
      </div>

      <div class=\"guide mb-5\">
        <div class=\"container-fluid\">
          <!-- Notre mission -->
          <div class=\"row\">
            <div class=\"col-12 col-md-6 pl-4 pr-4\">
              <h1 class=\"mx-4 mb-0\">Notre mission<br><span>DoctoAsk, l'assistant de votre médecin, afin d'obtenir des renseignement en quelques clics !</span></h1>
              <p class=\"mx-4\">
                DoctoAsk permet aux médecins de fournir des réponses simples aux questions les plus courantes de leurs patients, tout en restant concentrés sur les tâches les plus importantes de leur travail quotidien. Plus besoin de devoir rechercher sur internet ou d’appeler son cabinet pour obtenir des informations sur votre médecin, grâce à DoctoAsk, vous obtiendrez rapidement vos réponses !
              </p>
            </div>
            <div class=\"col-12 col-md-6 d-flex align-items-center\">
              <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/bg-accueil/background-para.jpg"), "html", null, true);
        echo "\" alt=\"bgpara\">
            </div>
          </div>
          <!-- Trouver votre médecin -->
          <div class=\"row\">
            <div class=\"col-12 col-md-6 \">
              <h1 class=\"mx-4 mb-0\">Trouver votre médecin en quelques clics.<br><span>À votre disposition 24/7</span></h1>
              <p class=\"mx-4\">
                Votre médecin est déjà sur l’application ? Consultez l’annuaire ou saisissez son nom dans la barre de recherche afin d’acceder à son chatbot, vous pourrez ainsi lui poser vos questions.
                Toutes les réponses sont certifiées par votre practicien, il n’existe pas de source plus sûre !
                Si celui-ci n’est pas encore sur l’application, invitez le à nous découvrir grâce à son adresse mail.
              </p>
              <div class=\"\">
              <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "\">
                <button  type=\"button\" class=\"btn bg-sub mt-4\">
                  Explorer l'annuaire médicale
                </button>
              </a>
              </div>

            </div>
            <div class=\"col-12 col-md-6 d-flex align-items-center\">
              <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/bg-accueil/bg-trouver.jpeg"), "html", null, true);
        echo "\" alt=\"bgaccueil\">
            </div>
          </div>
          <!-- Agissez -->
          <div class=\"row\">
            <div class=\"col-12 col-md-6 \">
              <h1 class=\"mx-4 mb-0\">Agissez en tant que membre DoctoAsk<br><span>Et facilitez-vous la vie</span></h1>
              <p class=\"mx-4\">
                Grâce à nous, vous ne perdrez plus de temps à répondre toujours là même chose aux même questions.
  Notre application vous permettra de saisir ces questions ainsi que leur réponse pour que vos patients trouvent facilement l’information souhaitée, sans vous déranger pendant vos heures de travail.
              </p>
              <div class=\"\">
                <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qui_sommes_nous");
        echo "\">
                  <button  type=\"button\" class=\"btn bg-sub mt-4\">
                    En savoir plus
                  </button>
                </a>
              </div>

            </div>
            <div class=\"col-12 col-md-6 d-flex align-items-center\">
              <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/bg-accueil/bg-agire.jpg"), "html", null, true);
        echo "\" alt=\"bgagire\">
            </div>
          </div>

        </div>
      </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 137
        echo "        <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
        <script>
            \$(document).ready( function() {
            \$(\"#liste\").hide();
              \$('#input_doctor').keyup(function (e) {
                \$(\"#liste\").hide();
                \$(\"#liste p\").hide();
                console.log(\"test\");
                contenu = \$('#input_doctor').val();
                \$.ajax({
                  type: 'POST',
                  url: \"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_docteurs");
        echo "\",
                  data: 'nom_medecin=' + contenu,
                  success: function (data) {

                     console.log(data);
                     \$.each( data, function( key, val ) {
                       \$(\"#liste\").show();
                        \$('#'+val.id).show();
                      });
                      \$(\"#list\").html(data)
                  }
              });
             });
            });
\t    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 148,  271 => 137,  262 => 136,  244 => 128,  232 => 119,  217 => 107,  205 => 98,  189 => 85,  163 => 62,  144 => 46,  136 => 41,  129 => 36,  112 => 34,  108 => 33,  86 => 14,  77 => 7,  68 => 6,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('default/css/style.css')}}\" type=\"text/css\">
{% endblock %}
{% block body %}
<section class=\"contenu\">
      <!-- Page d'accueil  -->
      <div class=\"first\">
        <div class=\"container\">
          <div class=\"row\">
            <!-- Image mascotte -->
            <div class=\"col-6 col-md-4 mx-auto\">
              <img src=\"{{ asset('dist/img/personnage-femme.png')}}\" alt=\"mascotte doctoask\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-10 mx-auto\">
              <h1 class=\"accroche mx-auto\">Bonjour, Comment puis-je vous aider&nbsp;?</h1>
            </div>
          </div>
          <!-- Barre de recherche -->
          <div class=\"row\">
            <div class=\"input-group search col-8 mx-auto\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fas fa-search\"></i></span>
              </div>
              <input type=\"text\" id=\"input_doctor\" class=\"form-control\" placeholder=\"Rechercher un medecin\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-7  mx-auto \" id=\"liste\">
                {% for docteur in docteurs %}
                  <p id=\"{{docteur.id}}\"><a href=\"{{ path('infos', {'id':docteur.id}) }}\">{{docteur.nom}} {{docteur.prenom}} {{docteur.specialite}}</a></p>
                {% endfor %}
            </div>
          </div>
          <!-- Boutons -->
          <div class=\"row justify-content-center mt-3\">
              <div class=\"col-7 col-lg-3 d-flex \">
                  <a href=\"{{ path('annuaire')}}\" class=\"btn bg-sub-light m-2 mx-auto\">
                    Annuaire médical
                  </a>
              </div>
              <div class=\"col-8 col-lg-3 d-flex\">
                  <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn bg-sub-light m-2 mx-auto\">
                    Êtes-vous praticien ?
                  </a>
              </div>
          </div>
          <div class=\"row py-3 text-light\">
              <p class=\"col-12 text-center\">Hey, par ici !</p>
              <i class=\"fas fa-angle-down fa-3x bounce arrow mx-auto\"></i>
          </div>
        </div>
      </div>
      <!-- Didactitiel -->
      <div class=\"dictaticiel\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-4 mx-auto\">
              <img src=\"{{ asset('dist/img/loader.gif')}}\" alt=\"mascotte doctoask\">
            </div>
          </div>

          <div class=\"row\">
            <button type=\"button\" class=\"btn bg-sub-light mx-auto\">
              Didactitiel bientôt disponible
            </button>
          </div>
        </div>
      </div>

      <div class=\"guide mb-5\">
        <div class=\"container-fluid\">
          <!-- Notre mission -->
          <div class=\"row\">
            <div class=\"col-12 col-md-6 pl-4 pr-4\">
              <h1 class=\"mx-4 mb-0\">Notre mission<br><span>DoctoAsk, l'assistant de votre médecin, afin d'obtenir des renseignement en quelques clics !</span></h1>
              <p class=\"mx-4\">
                DoctoAsk permet aux médecins de fournir des réponses simples aux questions les plus courantes de leurs patients, tout en restant concentrés sur les tâches les plus importantes de leur travail quotidien. Plus besoin de devoir rechercher sur internet ou d’appeler son cabinet pour obtenir des informations sur votre médecin, grâce à DoctoAsk, vous obtiendrez rapidement vos réponses !
              </p>
            </div>
            <div class=\"col-12 col-md-6 d-flex align-items-center\">
              <img src=\"{{ asset('dist/img/bg-accueil/background-para.jpg')}}\" alt=\"bgpara\">
            </div>
          </div>
          <!-- Trouver votre médecin -->
          <div class=\"row\">
            <div class=\"col-12 col-md-6 \">
              <h1 class=\"mx-4 mb-0\">Trouver votre médecin en quelques clics.<br><span>À votre disposition 24/7</span></h1>
              <p class=\"mx-4\">
                Votre médecin est déjà sur l’application ? Consultez l’annuaire ou saisissez son nom dans la barre de recherche afin d’acceder à son chatbot, vous pourrez ainsi lui poser vos questions.
                Toutes les réponses sont certifiées par votre practicien, il n’existe pas de source plus sûre !
                Si celui-ci n’est pas encore sur l’application, invitez le à nous découvrir grâce à son adresse mail.
              </p>
              <div class=\"\">
              <a href=\"{{ path('annuaire')}}\">
                <button  type=\"button\" class=\"btn bg-sub mt-4\">
                  Explorer l'annuaire médicale
                </button>
              </a>
              </div>

            </div>
            <div class=\"col-12 col-md-6 d-flex align-items-center\">
              <img src=\"{{ asset('dist/img/bg-accueil/bg-trouver.jpeg')}}\" alt=\"bgaccueil\">
            </div>
          </div>
          <!-- Agissez -->
          <div class=\"row\">
            <div class=\"col-12 col-md-6 \">
              <h1 class=\"mx-4 mb-0\">Agissez en tant que membre DoctoAsk<br><span>Et facilitez-vous la vie</span></h1>
              <p class=\"mx-4\">
                Grâce à nous, vous ne perdrez plus de temps à répondre toujours là même chose aux même questions.
  Notre application vous permettra de saisir ces questions ainsi que leur réponse pour que vos patients trouvent facilement l’information souhaitée, sans vous déranger pendant vos heures de travail.
              </p>
              <div class=\"\">
                <a href=\"{{ path('qui_sommes_nous')}}\">
                  <button  type=\"button\" class=\"btn bg-sub mt-4\">
                    En savoir plus
                  </button>
                </a>
              </div>

            </div>
            <div class=\"col-12 col-md-6 d-flex align-items-center\">
              <img src=\"{{ asset('dist/img/bg-accueil/bg-agire.jpg')}}\" alt=\"bgagire\">
            </div>
          </div>

        </div>
      </div>
    </section>
{% endblock %}
{% block javascript%}
        <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
        <script>
            \$(document).ready( function() {
            \$(\"#liste\").hide();
              \$('#input_doctor').keyup(function (e) {
                \$(\"#liste\").hide();
                \$(\"#liste p\").hide();
                console.log(\"test\");
                contenu = \$('#input_doctor').val();
                \$.ajax({
                  type: 'POST',
                  url: \"{{ path('liste_docteurs') }}\",
                  data: 'nom_medecin=' + contenu,
                  success: function (data) {

                     console.log(data);
                     \$.each( data, function( key, val ) {
                       \$(\"#liste\").show();
                        \$('#'+val.id).show();
                      });
                      \$(\"#list\").html(data)
                  }
              });
             });
            });
\t    </script>

{% endblock %}
", "default/index.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/default/index.html.twig");
    }
}
