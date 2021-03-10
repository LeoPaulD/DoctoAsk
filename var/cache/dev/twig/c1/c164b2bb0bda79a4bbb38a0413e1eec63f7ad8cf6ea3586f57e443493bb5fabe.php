<?php

/* chatbot/chatbot.html.twig */
class __TwigTemplate_181e95ba49ce52af28d062329233a796f2c1bcd4b18449b58e6d021c8ab3db19 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "chatbot/chatbot.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chatbot/chatbot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chatbot/chatbot.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("chatbot/css/style.css"), "html", null, true);
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
        echo "     <div class=\"container chat d-flex flex-column mb-3 col-lg-6\" >
        <div class=\"d-flex pr-3 pl-3\">
            <div class=\"imgProfil\">
                <a href=\"#\" title=\"Dr. Nom\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/medecin_img.png"), "html", null, true);
        echo "\"></a>
            </div>
            <div class=\"alert alert-secondary\">Bonjour et bienvenue sur DoctoAsk ! Je suis Dr. Ask, l'assistant personnel du docteur ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "nom", array()), "html", null, true);
        echo ". 
            <br>Si vous avez une question en particulier n'hésitez pas, je suis disponible quel que soit la date, le jour, et l'heure !
            <br>
            <br><i>Pour plus d'informations veuillez saisir la commande !help</i></div>
        </div>
        <div class=\"inputChat\">
            <input class=\"msg\" type=\"text\" placeholder=\"Écrivez quelque chose...\" autofocus>
            <input class=\"send btn bg-sub primary-btn\" type=\"button\" value=\"Discuter\">
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 26
        echo "        <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
         <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("chatbot/js/monscript.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready( function() {
                // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
            \$('.send').click(function(){
                question=\$('.msg').val();
                \$.ajax('";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_compare", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 33, $this->source); })()))), "html", null, true);
        echo "', {
                    type: 'POST',
                    data: 'question=' + question,
                    success: function(data) {
                        if(data != \"empty\")
                        {
                            \$(\".chat\").append('<div class=\"pr-3 pl-3\"><div class=\"alert alert-primary msg\" role=\"alert\">'+question+'</div><div class=\"send-time\">Envoyé</div></div>');
                            \$(\".chat\").append('<div class=\"d-flex pr-3 pl-3\"><div class=\"imgProfil\"><a href=\"#\" title=\"Dr. Nom\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/medecin_img.png"), "html", null, true);
        echo "\"></a></div><div class=\"alert alert-secondary msg\" role=\"alert\">'+data+'</div></div>');
                        }
                        else
                        {
                            \$(\".chat\").append('<div class=\"alert alert-secondary\" role=\"alert\">'+question+'</div>');
                            \$(\".chat\").append('<div class=\"alert alert-danger\" role=\"alert\">Veuillez me poser une question</div>');
                        }
                    }
                });
            return false;
            });                
            });
\t    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "chatbot/chatbot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  129 => 33,  120 => 27,  117 => 26,  108 => 25,  87 => 13,  82 => 11,  77 => 8,  68 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('chatbot/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}
     <div class=\"container chat d-flex flex-column mb-3 col-lg-6\" >
        <div class=\"d-flex pr-3 pl-3\">
            <div class=\"imgProfil\">
                <a href=\"#\" title=\"Dr. Nom\"><img src=\"{{ asset('dist/img/medecin_img.png') }}\"></a>
            </div>
            <div class=\"alert alert-secondary\">Bonjour et bienvenue sur DoctoAsk ! Je suis Dr. Ask, l'assistant personnel du docteur {{ user.nom }}. 
            <br>Si vous avez une question en particulier n'hésitez pas, je suis disponible quel que soit la date, le jour, et l'heure !
            <br>
            <br><i>Pour plus d'informations veuillez saisir la commande !help</i></div>
        </div>
        <div class=\"inputChat\">
            <input class=\"msg\" type=\"text\" placeholder=\"Écrivez quelque chose...\" autofocus>
            <input class=\"send btn bg-sub primary-btn\" type=\"button\" value=\"Discuter\">
        </div>
    </div>
{% endblock %}

{% block javascript%}
        <script src=\"https://code.jquery.com/jquery-3.3.1.js\" integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\" crossorigin=\"anonymous\"></script>
         <script src=\"{{ asset('chatbot/js/monscript.js') }}\"></script>
        <script>
            \$(document).ready( function() {
                // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
            \$('.send').click(function(){
                question=\$('.msg').val();
                \$.ajax('{{ path('question_compare',{'id':id}) }}', {
                    type: 'POST',
                    data: 'question=' + question,
                    success: function(data) {
                        if(data != \"empty\")
                        {
                            \$(\".chat\").append('<div class=\"pr-3 pl-3\"><div class=\"alert alert-primary msg\" role=\"alert\">'+question+'</div><div class=\"send-time\">Envoyé</div></div>');
                            \$(\".chat\").append('<div class=\"d-flex pr-3 pl-3\"><div class=\"imgProfil\"><a href=\"#\" title=\"Dr. Nom\"><img src=\"{{ asset('dist/img/medecin_img.png') }}\"></a></div><div class=\"alert alert-secondary msg\" role=\"alert\">'+data+'</div></div>');
                        }
                        else
                        {
                            \$(\".chat\").append('<div class=\"alert alert-secondary\" role=\"alert\">'+question+'</div>');
                            \$(\".chat\").append('<div class=\"alert alert-danger\" role=\"alert\">Veuillez me poser une question</div>');
                        }
                    }
                });
            return false;
            });                
            });
\t    </script>

{% endblock%}", "chatbot/chatbot.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/chatbot/chatbot.html.twig");
    }
}
