<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_9b36991544698260b889a27c4d895382c26b3b510ebdf92b4095265636d99020 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<section class=\"contenu\">

  <div class=\"container-fluid py-4\">
    <div class=\"row\">

      <div class=\"mx-auto\">
        <img
          src=\"

              ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/pp-medecin/default_dr_M.jpg"), "html", null, true);
        echo "
          
          \"
          alt=\"Photo de profil du ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "specialite", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "prenom", array()), "html", null, true);
        echo "\">
      </div>

    </div>

    <div class=\"row pt-4\">
      <h1 class=\"mx-auto\">Dr. ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "nom", array()), "html", null, true);
        echo "</h1>
    </div>

    <div class=\"row\">
      <h2 class=\"mx-auto\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 25, $this->source); })()), "specialite", array()), "html", null, true);
        echo "</h2>
    </div>

  </div>

  <div class=\"container pt-3 pb-5\">

    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-6 btn-chat m-3\">
         <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("configchatbot", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">
           <i class=\"fas fa-sliders-h\"></i>Configurer mon Chatbot</a>
       </div>
    </div>

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Présentation</h1>
        ";
        // line 44
        echo "      </div>

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Horaires</h1>
        ";
        // line 49
        echo "      </div>

    </div>

    
  </section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 49,  91 => 44,  79 => 34,  67 => 25,  60 => 21,  47 => 15,  41 => 12,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<section class=\"contenu\">

  <div class=\"container-fluid py-4\">
    <div class=\"row\">

      <div class=\"mx-auto\">
        <img
          src=\"

              {{ asset('dist/img/pp-medecin/default_dr_M.jpg')}}
          
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
        <div class=\"col-12 col-md-6 btn-chat m-3\">
         <a href=\"{{ path('configchatbot', {'id':user.id}) }}\">
           <i class=\"fas fa-sliders-h\"></i>Configurer mon Chatbot</a>
       </div>
    </div>

    <div class=\"row justify-content-center\">

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Présentation</h1>
        {# <p>{{ infos.presentation }}</p> #}
      </div>

      <div class=\"jumbotron col-12 col-md-5 m-1\">
        <h1>Horaires</h1>
        {# <p>{{ infos.horaires }}</p> #}
      </div>

    </div>

    
  </section>
", "@FOSUser/Profile/show_content.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/bundles/FOSUserBundle/Profile/show_content.html.twig");
    }
}
