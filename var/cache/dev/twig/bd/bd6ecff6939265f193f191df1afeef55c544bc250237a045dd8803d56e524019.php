<?php

/* configchatbot/index.html.twig */
class __TwigTemplate_c2e24a496e257e4647d4290d69f38085bd88f4b9f20b22b243307b0be8eabe0f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "configchatbot/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configchatbot/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configchatbot/index.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("configchatbot/css/style.css"), "html", null, true);
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
<div class=\"container\" id=\"listeQuestion\">
  
    <div class=\"row\">    
      <h1 class=\"m-3 text-centerr\">Configuration de votre chatbot &nbsp!</h1>
      <p class=\"mt-3\">Cette page vous permet de configurer votre chatbot en y ajoutant, modifiant ou supprimer vos porpre question.</p>
    </div>
    ";
        // line 14
        if (((isset($context["maxQuestion"]) || array_key_exists("maxQuestion", $context) ? $context["maxQuestion"] : (function () { throw new Twig_Error_Runtime('Variable "maxQuestion" does not exist.', 14, $this->source); })()) != true)) {
            // line 15
            echo "    <div class=\"row card-input\">
      <div class=\"card col-12 m-3 p-0\" id=\"card-ajout\">
        <div class=\"card-header\">Ajouter une question</div>
        <div class=\"card-body\">
          <input type=\"text\" id=\"ajoutQuestion\" class=\"form-control mb-2\" name=\"\" placeholder=\"Votre question\">
          <input type=\"text\" id=\"ajoutReponse\" class=\"form-control mb-2\" name=\"\" placeholder=\"Votre reponse\">
          <button type=\"button\" name=\"button\" class=\"bg-sub ajout\" >Ajouter la question</button>
        </div>
      </div>
    </div>
    ";
        }
        // line 26
        echo "    ";
        $context["cmpt"] = 0;
        // line 27
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 28
            echo "      ";
            $context["cmpt"] = ((isset($context["cmpt"]) || array_key_exists("cmpt", $context) ? $context["cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "cmpt" does not exist.', 28, $this->source); })()) + 1);
            // line 29
            echo "      <div class=\"row\">
        <div class=\"card col-12 m-3 p-0\">
          <div class=\"card-header\">
            Question n° ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["cmpt"]) || array_key_exists("cmpt", $context) ? $context["cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "cmpt" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "
          </div>
          <div class=\"card-body\">
            <label for=\"question\">Question</label>
            <input type=\"text\" class=\"form-control mb-2\" id=\"question_";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
            echo "\" name=\"question\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "contenu", array()), "html", null, true);
            echo "\">
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new Twig_Error_Runtime('Variable "reponses" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 38
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["question"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", array()))) {
                    // line 39
                    echo "                <label for=\"reponse\">réponse</label>
                <input type=\"text\" class=\"form-control mb-2\" id=\"reponse_";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
                    echo "\" name=\"name\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "contenu", array()), "html", null, true);
                    echo "\">
              ";
                }
                // line 42
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            <button type=\"button\" name=\"button\" class=\"modifier btn btn-warning text-uppercase\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
            echo "\">Modifer</button>
            <button type=\"button\" name=\"button\" class=\"supprimer btn btn-danger text-uppercase\" id=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", array()), "html", null, true);
            echo "\">Supprimer</button>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 54
        echo "<script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("chatbot/js/monscript.js"), "html", null, true);
        echo "\"></script>
<script>
      \$(document).ready( function() {

        //click boutton ajout d'un nouvelles question
        \$(\"#listeQuestion\").on(\"click\",\".ajout\",function(){
          //\$(\"#bntAjout\").prop(\"disabled\", true);
          console.log(\"ajout\");
          question = \$('#ajoutQuestion').val();
          reponse = \$('#ajoutReponse').val();
          
          \$.ajax({
            type: 'POST',
            url: \"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 68, $this->source); })()))), "html", null, true);
        echo "\",
            data: 'question=' + question + '&reponse=' + reponse,
            success: function (data) {
              \$('#listeQuestion').load('";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("configchatbot", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 71, $this->source); })()))), "html", null, true);
        echo " .row')
              //\$(\"#bntAjout\").prop(\"disabled\", false);
              console.log(data);
            }
          });
        });

        //click boutton modifier question
         \$(\"#listeQuestion\").on(\"click\",\".modifier\",function(){
          idBtn= this.id;
          console.log(\"modifier\");
          question = \$('#question_'+idBtn).val();
          reponse = \$('#reponse_'+idBtn).val();
          \$.ajax({
            type: 'POST',
            url: \"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 86, $this->source); })()))), "html", null, true);
        echo "\",
            data: 'idQuestion='+ idBtn +'&question=' + question + '&reponse=' + reponse,
            success: function (data) {
              \$('#listeQuestion').load('";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("configchatbot", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 89, $this->source); })()))), "html", null, true);
        echo " .row')
            }
          });
        });

        //click boutton supprimer la question
        
        \$(\"#listeQuestion\").on(\"click\",\".supprimer\", function(){
          idBtn= this.id;
          console.log(\"suppr\");
          \$.ajax({
            type: 'POST',
            url: \"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimer", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 101, $this->source); })()))), "html", null, true);
        echo "\",
            data: 'idQuestion='+ idBtn,
            success: function (data) {
              \$('#listeQuestion').load('";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("configchatbot", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 104, $this->source); })()))), "html", null, true);
        echo " .row')
            }
          });
        });


      });
</script>        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "configchatbot/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 104,  254 => 101,  239 => 89,  233 => 86,  215 => 71,  209 => 68,  193 => 55,  190 => 54,  181 => 53,  169 => 49,  158 => 44,  153 => 43,  147 => 42,  140 => 40,  137 => 39,  134 => 38,  130 => 37,  124 => 36,  117 => 32,  112 => 29,  109 => 28,  104 => 27,  101 => 26,  88 => 15,  86 => 14,  77 => 7,  68 => 6,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('configchatbot/css/style.css')}}\" type=\"text/css\">
{% endblock %}
{% block body %}
<section class=\"contenu\">
<div class=\"container\" id=\"listeQuestion\">
  
    <div class=\"row\">    
      <h1 class=\"m-3 text-centerr\">Configuration de votre chatbot &nbsp!</h1>
      <p class=\"mt-3\">Cette page vous permet de configurer votre chatbot en y ajoutant, modifiant ou supprimer vos porpre question.</p>
    </div>
    {% if maxQuestion != true %}
    <div class=\"row card-input\">
      <div class=\"card col-12 m-3 p-0\" id=\"card-ajout\">
        <div class=\"card-header\">Ajouter une question</div>
        <div class=\"card-body\">
          <input type=\"text\" id=\"ajoutQuestion\" class=\"form-control mb-2\" name=\"\" placeholder=\"Votre question\">
          <input type=\"text\" id=\"ajoutReponse\" class=\"form-control mb-2\" name=\"\" placeholder=\"Votre reponse\">
          <button type=\"button\" name=\"button\" class=\"bg-sub ajout\" >Ajouter la question</button>
        </div>
      </div>
    </div>
    {% endif %}
    {% set cmpt = 0 %}
    {% for question in questions %}
      {% set cmpt = cmpt + 1 %}
      <div class=\"row\">
        <div class=\"card col-12 m-3 p-0\">
          <div class=\"card-header\">
            Question n° {{cmpt}}
          </div>
          <div class=\"card-body\">
            <label for=\"question\">Question</label>
            <input type=\"text\" class=\"form-control mb-2\" id=\"question_{{question.id}}\" name=\"question\" value=\"{{question.contenu}}\">
            {% for reponse in reponses %}
              {% if question.id == reponse.idQuestion %}
                <label for=\"reponse\">réponse</label>
                <input type=\"text\" class=\"form-control mb-2\" id=\"reponse_{{question.id}}\" name=\"name\" value=\"{{reponse.contenu}}\">
              {% endif %}
            {% endfor %}
            <button type=\"button\" name=\"button\" class=\"modifier btn btn-warning text-uppercase\" id=\"{{question.id}}\">Modifer</button>
            <button type=\"button\" name=\"button\" class=\"supprimer btn btn-danger text-uppercase\" id=\"{{question.id}}\">Supprimer</button>
          </div>
        </div>
      </div>
    {% endfor %}
    
</div>
{% endblock %}

{% block javascript%}
<script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('chatbot/js/monscript.js') }}\"></script>
<script>
      \$(document).ready( function() {

        //click boutton ajout d'un nouvelles question
        \$(\"#listeQuestion\").on(\"click\",\".ajout\",function(){
          //\$(\"#bntAjout\").prop(\"disabled\", true);
          console.log(\"ajout\");
          question = \$('#ajoutQuestion').val();
          reponse = \$('#ajoutReponse').val();
          
          \$.ajax({
            type: 'POST',
            url: \"{{ path('ajout', {'id':id}) }}\",
            data: 'question=' + question + '&reponse=' + reponse,
            success: function (data) {
              \$('#listeQuestion').load('{{ path('configchatbot', {'id':id}) }} .row')
              //\$(\"#bntAjout\").prop(\"disabled\", false);
              console.log(data);
            }
          });
        });

        //click boutton modifier question
         \$(\"#listeQuestion\").on(\"click\",\".modifier\",function(){
          idBtn= this.id;
          console.log(\"modifier\");
          question = \$('#question_'+idBtn).val();
          reponse = \$('#reponse_'+idBtn).val();
          \$.ajax({
            type: 'POST',
            url: \"{{ path('modifier', {'id':id}) }}\",
            data: 'idQuestion='+ idBtn +'&question=' + question + '&reponse=' + reponse,
            success: function (data) {
              \$('#listeQuestion').load('{{ path('configchatbot', {'id':id}) }} .row')
            }
          });
        });

        //click boutton supprimer la question
        
        \$(\"#listeQuestion\").on(\"click\",\".supprimer\", function(){
          idBtn= this.id;
          console.log(\"suppr\");
          \$.ajax({
            type: 'POST',
            url: \"{{ path('supprimer', {'id':id}) }}\",
            data: 'idQuestion='+ idBtn,
            success: function (data) {
              \$('#listeQuestion').load('{{ path('configchatbot', {'id':id}) }} .row')
            }
          });
        });


      });
</script>        
{% endblock %}", "configchatbot/index.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/configchatbot/index.html.twig");
    }
}
