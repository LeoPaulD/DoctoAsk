<?php

/* qui_sommes_nous/quisommesnous.html.twig */
class __TwigTemplate_e8663aa784d927d66caec4d0a854e33ef8705a96f31d26962dca1eb58e25c14f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "qui_sommes_nous/quisommesnous.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "qui_sommes_nous/quisommesnous.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "qui_sommes_nous/quisommesnous.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("quisommesnous/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("quisommesnous/js/monscript.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <section class=\"contenu text-center\">
    <!----Qui sommes-nous ?-->
    <div class=\"qsm-color\">
        <div class=\"container\">
            <h1 class=\"m-3\">Qui sommes-nous&nbsp?</h1>
            <p class=\"mt-3\">DoctoAsk est une application réalisée par des étudiants de l'Université de Bordeaux mettant en lien des médecins avec leurs patients via un chatbot. Notre équipe est composée de cinq étudiants, tous issus d'une formation technologique.
            </p>
        </div>
    </div>
    <!----Notre équipe-->
    <div class=\"container\">
        <div class=\"qsm-border\">
            <h1 class=\"qsm-title\">Notre équipe</h1>
            <p>Nous sommes complémentaires, passionnés et spécialisés dans le développement et la programmation web. Nous ferons tout pour que votre recherche et votre expérience sur DoctoAsk se fassent dans les meilleures conditions !
            </p>
        </div>
        <div class=\"qsm-main\">
            <div class=\"justify-content-center row\">
                <!----Léo-Paul Dubourg-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/l%C3%A9o-paul-dubourg/\" target=\"_blank\"><img alt=\"Leo-Paul Dubourg\" title=\"Léo-Paul Dubourg\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/Leo-Paul.png"), "html", null, true);
        echo "\"></a>
                    <h2>Léo-Paul Dubourg</h2>
                    <p>Chef de projet / Community Manager</p>
                </div>
                <!----Tom Quemener-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/tom-quemener/\" target=\"_blank\"><img class=\"img_hover2\" alt=\"Tom Quemener\" title=\"Tom Quemener\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/Tom.png"), "html", null, true);
        echo "\"></a>
                    <h2>Tom Quemener</h2>
                    <p>Développeur Back-end</p>
                </div>
                <!----Yoann Chevessier-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/yoannchevessier/\" target=\"_blank\"><img alt=\"Yoann Chevessier\" title=\"Yoann Chevessier\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/Yoann.png"), "html", null, true);
        echo "\"></a>
                    <h2>Yoann Chevessier</h2>
                    <p>Coordinateur / Développeur Full-Stack</p>
                </div>
                <!----Jean Magné-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/jean-magne-18a63b153/\" target=\"_blank\"><img class=\"img_hover2\" alt=\"Jean Magne\" title=\"Jean Magné\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/Jean.png"), "html", null, true);
        echo "\"></a>
                    <h2>Jean Magné</h2>
                    <p>Développeur Full-Stack</p>
                </div>
                <!----Sébastien Leduc-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/sebastien-led/\" target=\"_blank\"><img alt=\"Sebastien Leduc\" title=\"Sébastien Leduc\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/Sebastien.png"), "html", null, true);
        echo "\"></a>
                    <h2>Sébastien Leduc</h2>
                    <p>Graphiste / Intégrateur</p>
                </div>
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
        return "qui_sommes_nous/quisommesnous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  148 => 50,  139 => 44,  130 => 38,  121 => 32,  99 => 12,  90 => 11,  77 => 8,  68 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('quisommesnous/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block javascript %}
    <script src=\"{{ asset('quisommesnous/js/monscript.js') }}\"></script>
{% endblock %}

{% block body %}
    <section class=\"contenu text-center\">
    <!----Qui sommes-nous ?-->
    <div class=\"qsm-color\">
        <div class=\"container\">
            <h1 class=\"m-3\">Qui sommes-nous&nbsp?</h1>
            <p class=\"mt-3\">DoctoAsk est une application réalisée par des étudiants de l'Université de Bordeaux mettant en lien des médecins avec leurs patients via un chatbot. Notre équipe est composée de cinq étudiants, tous issus d'une formation technologique.
            </p>
        </div>
    </div>
    <!----Notre équipe-->
    <div class=\"container\">
        <div class=\"qsm-border\">
            <h1 class=\"qsm-title\">Notre équipe</h1>
            <p>Nous sommes complémentaires, passionnés et spécialisés dans le développement et la programmation web. Nous ferons tout pour que votre recherche et votre expérience sur DoctoAsk se fassent dans les meilleures conditions !
            </p>
        </div>
        <div class=\"qsm-main\">
            <div class=\"justify-content-center row\">
                <!----Léo-Paul Dubourg-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/l%C3%A9o-paul-dubourg/\" target=\"_blank\"><img alt=\"Leo-Paul Dubourg\" title=\"Léo-Paul Dubourg\" src=\"{{ asset('dist/img/Leo-Paul.png') }}\"></a>
                    <h2>Léo-Paul Dubourg</h2>
                    <p>Chef de projet / Community Manager</p>
                </div>
                <!----Tom Quemener-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/tom-quemener/\" target=\"_blank\"><img class=\"img_hover2\" alt=\"Tom Quemener\" title=\"Tom Quemener\" src=\"{{ asset('dist/img/Tom.png') }}\"></a>
                    <h2>Tom Quemener</h2>
                    <p>Développeur Back-end</p>
                </div>
                <!----Yoann Chevessier-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/yoannchevessier/\" target=\"_blank\"><img alt=\"Yoann Chevessier\" title=\"Yoann Chevessier\" src=\"{{ asset('dist/img/Yoann.png') }}\"></a>
                    <h2>Yoann Chevessier</h2>
                    <p>Coordinateur / Développeur Full-Stack</p>
                </div>
                <!----Jean Magné-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/jean-magne-18a63b153/\" target=\"_blank\"><img class=\"img_hover2\" alt=\"Jean Magne\" title=\"Jean Magné\" src=\"{{ asset('dist/img/Jean.png') }}\"></a>
                    <h2>Jean Magné</h2>
                    <p>Développeur Full-Stack</p>
                </div>
                <!----Sébastien Leduc-->
                <div class=\"col-sm-12 col-md-6 col-lg-4\">
                    <a href=\"https://www.linkedin.com/in/sebastien-led/\" target=\"_blank\"><img alt=\"Sebastien Leduc\" title=\"Sébastien Leduc\" src=\"{{ asset('dist/img/Sebastien.png') }}\"></a>
                    <h2>Sébastien Leduc</h2>
                    <p>Graphiste / Intégrateur</p>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "qui_sommes_nous/quisommesnous.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/qui_sommes_nous/quisommesnous.html.twig");
    }
}
