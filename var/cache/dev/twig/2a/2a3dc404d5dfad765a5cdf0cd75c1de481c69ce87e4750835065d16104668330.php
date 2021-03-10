<?php

/* edit_infos/editInfos.html.twig */
class __TwigTemplate_e446fb2c38b2ff8e951ee83e5888a75bd3144f018e65035135f64154c88c2fb5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "edit_infos/editInfos.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit_infos/editInfos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit_infos/editInfos.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("edit_infos/css/style.css"), "html", null, true);
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
<!-- Contenu de la page -->

<div class=\"contenu\">

    <!-- 1 : Titre de la page -->
    <div class=\"col-12\">
        <div>
            <h1 class=\"text-center m-4\">Edition : Mes informations</h1>
        </div>
    </div>

    <!-- 2 : Configuration des informations du médecin' -->
    <div class=\"container  my-5\">

        <div class=\"col-10 mx-auto pt-5 pb-5\">

            <div class=\" mx-auto p-4 profil-img mx-auto justify-content-center align-items-end\" style=\"background-image : url(";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/pp-medecin/default_dr_M.jpg"), "html", null, true);
        echo ")\">
            </div>
        </div>

        <!-- 2.1 : Formulaire' -->

        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), 'errors');
        echo "

            <div class=\"justify-content-center\">

                <div class=\"col-lg-10 mx-auto\">

                    <div class=\"row\">

                        <!-- 2.1.1 : Présentation du médecin (presentation, horaires) -->

                        <div class=\"col-12 p-4\">
                            <h3 class=\"text-center\">Présentation du médecin</h3>
                        </div>

                        <div class=\"col-12 p-4\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "presentation", array()), 'row');
        echo "
                        </div>

                        <div class=\"col-12 p-4\">
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "horaires", array()), 'row');
        echo "
                        </div>

                        <!-- 2.1.2 : Localisation du cabinet (rue, code postal, ville, pays du cabinet) -->

                        <div class=\"col-12 p-4\">
                            <h3 class=\"text-center\">Localisation du cabinet</h3>
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "rue_cabinet", array()), 'row');
        echo "
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "code_postal", array()), 'row');
        echo "
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "ville_cabinet", array()), 'row');
        echo "
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "pays_cabinet", array()), 'row');
        echo "
                        </div>

                        <!-- 2.1.3 : Tarif et remboursement (tarif, convention, carte vitale) -->

                        <div class=\"col-12 p-4\">
                            <h3 class=\"text-center\">Tarif et remboursement</h3>
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "tarif", array()), 'row');
        echo "
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "convention", array()), 'row');
        echo "
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "carte_vitale", array()), 'row');
        echo "
                        </div>

                        <!-- 2.1.4 : Modalités de paiement (carte bancaire, chèque, espèce) -->

                        <div class=\"col-12 p-4\">
                            <h3 class=\"text-center\">Modalités de paiement</h3>
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "cb", array()), 'row');
        echo "
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), "cheque", array()), 'row');
        echo "
                        </div>

                        <div class=\"col-md-6 p-4\">
                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->source); })()), "espece", array()), 'row');
        echo "
                        </div>

                        <!-- 2.1.5 : Bouton submit -->

                        <div class=\"col-12 mx-auto m-4 mb-5\">

                            <div class=\"row\">

                                <div class=\"col-md-6 mx-auto text-center my-2\">
                                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->source); })()), "sauvegarder", array()), 'row');
        echo "
                                </div>

                            </div>

                        </div>

                        <!-- End: 2.1.5 : Bouton submit -->

                    </div>

                </div>

            </div>

        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), "_token", array()), 'row');
        echo "
        ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->source); })()), 'form_end');
        echo "

        <!-- End: 2.1 : Formulaire' -->

    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "edit_infos/editInfos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 135,  252 => 134,  234 => 119,  221 => 109,  214 => 105,  207 => 101,  194 => 91,  187 => 87,  180 => 83,  167 => 73,  160 => 69,  153 => 65,  146 => 61,  133 => 51,  126 => 47,  108 => 32,  104 => 31,  95 => 25,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('edit_infos/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block body %}

<!-- Contenu de la page -->

<div class=\"contenu\">

    <!-- 1 : Titre de la page -->
    <div class=\"col-12\">
        <div>
            <h1 class=\"text-center m-4\">Edition : Mes informations</h1>
        </div>
    </div>

    <!-- 2 : Configuration des informations du médecin' -->
    <div class=\"container  my-5\">

        <div class=\"col-10 mx-auto pt-5 pb-5\">

            <div class=\" mx-auto p-4 profil-img mx-auto justify-content-center align-items-end\" style=\"background-image : url({{ asset('dist/img/pp-medecin/default_dr_M.jpg')}})\">
            </div>
        </div>

        <!-- 2.1 : Formulaire' -->

        {{ form_start(form) }}
        {{ form_errors(form) }}

            <div class=\"justify-content-center\">

                <div class=\"col-lg-10 mx-auto\">

                    <div class=\"row\">

                        <!-- 2.1.1 : Présentation du médecin (presentation, horaires) -->

                        <div class=\"col-12 p-4\">
                            <h3 class=\"text-center\">Présentation du médecin</h3>
                        </div>

                        <div class=\"col-12 p-4\">
                            {{ form_row(form.presentation) }}
                        </div>

                        <div class=\"col-12 p-4\">
                            {{ form_row(form.horaires) }}
                        </div>

                        <!-- 2.1.2 : Localisation du cabinet (rue, code postal, ville, pays du cabinet) -->

                        <div class=\"col-12 p-4\">
                            <h3 class=\"text-center\">Localisation du cabinet</h3>
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.rue_cabinet) }}
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.code_postal) }}
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.ville_cabinet) }}
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.pays_cabinet) }}
                        </div>

                        <!-- 2.1.3 : Tarif et remboursement (tarif, convention, carte vitale) -->

                        <div class=\"col-12 p-4\">
                            <h3 class=\"text-center\">Tarif et remboursement</h3>
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.tarif) }}
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.convention) }}
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.carte_vitale) }}
                        </div>

                        <!-- 2.1.4 : Modalités de paiement (carte bancaire, chèque, espèce) -->

                        <div class=\"col-12 p-4\">
                            <h3 class=\"text-center\">Modalités de paiement</h3>
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.cb) }}
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.cheque) }}
                        </div>

                        <div class=\"col-md-6 p-4\">
                            {{ form_row(form.espece) }}
                        </div>

                        <!-- 2.1.5 : Bouton submit -->

                        <div class=\"col-12 mx-auto m-4 mb-5\">

                            <div class=\"row\">

                                <div class=\"col-md-6 mx-auto text-center my-2\">
                                    {{ form_row(form.sauvegarder) }}
                                </div>

                            </div>

                        </div>

                        <!-- End: 2.1.5 : Bouton submit -->

                    </div>

                </div>

            </div>

        {{ form_row(form._token) }}
        {{ form_end(form) }}

        <!-- End: 2.1 : Formulaire' -->

    </div>

</div>

{% endblock %}
", "edit_infos/editInfos.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/edit_infos/editInfos.html.twig");
    }
}
