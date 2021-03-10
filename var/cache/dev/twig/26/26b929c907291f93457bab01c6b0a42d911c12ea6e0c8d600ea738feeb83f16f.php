<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_32090859ba46c0267be176ce6a9ad8ecbeb84df48d4866da1b96039f9fef7671 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<!-- Contenu de la page -->
<section class=\"contenu\">
<div class=\"col-12\">
    <div>
        <h1 class=\"text-center m-4\">Praticien&nbsp;? Inscrivez-vous&nbsp;!</h1>
    </div>
</div>
<!-- 1 : Configuration du profil medecin -->
<div class=\"container\">

    <div class=\"mx-auto p-4 profil-img mx-auto justify-content-center align-items-center col-12\">
        <div class=\"justify-content-center align-items-center\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
        </div>
    </div>

    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', array("method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
      ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), 'errors');
        echo "
          <div class=\"justify-content-center\">
              <div class=\"col-lg-12  mx-auto\">
                  <div class=\"row\">
                      <div class=\"row inscription\">
                          <div class=\"col-md-12 font-italic mt-3 text-center requis\">
                              Les champs marqués de * sont requis.
                          </div>
                          <div class=\"col-md-6 ml-2 mt-5\">
                              ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "genre", array()), 'row');
        echo "
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Nom-->
                              ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "nom", array()), 'row');
        echo "
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Prénom-->
                              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "prenom", array()), 'row');
        echo "
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Spécialité-->
                              ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "specialite", array()), 'row');
        echo "
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Email-->
                              ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "email", array()), 'row');
        echo "
                          </div>
                      </div>
                      <div class=\"row password\">
                          <div class=\"row-md-12 w-100 p-4\">
                              <!--password - rue-->
                              ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "plainPassword", array()), 'row');
        echo " 
                          </div>
                      </div>
                      <div class=\"row inscription\">
                          <div class=\"container mt-4\">
                              <h2 class=\"text-center\">Informations complémentaires</h2>
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Téléphone-->
                              ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "telephone", array()), 'row');
        echo "
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Site web-->
                              ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "site_web", array()), 'row');
        echo "
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Lien doctolib-->
                              ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "doctolib", array()), 'row');
        echo "
                          </div>
                      </div>
                      <div class=\"col-10 mx-auto m-4 mb-5\">
                          <div class=\"row\">
                              <div class=\"col mb-3 ml-3\">
                                  <input type=\"checkbox\" class=\"mt-1 mr-2\" required><span>J'ai lu et j'accepte les <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\" target=\"_blank\">conditions générales d'utilisation*</a></span><br>
                                  <input type=\"checkbox\" class=\"mt-1 mr-2\" checked><span>J'accepte de recevoir la newsletter de <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\" target=\"_blank\">DoctoAsk</a></span>
                              </div>
                              <div class=\"col-md-6 text-center mt-2 mb-4\">
                                  <input type=\"submit\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn bg-sub primary-btn col-8\" />
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "_token", array()), 'row');
        echo "
    ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        echo "
    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), 'rest');
        echo "

  </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 89,  168 => 88,  164 => 87,  153 => 79,  147 => 76,  143 => 75,  134 => 69,  127 => 65,  120 => 61,  108 => 52,  99 => 46,  92 => 42,  85 => 38,  78 => 34,  71 => 30,  59 => 21,  55 => 20,  51 => 19,  44 => 15,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<!-- Contenu de la page -->
<section class=\"contenu\">
<div class=\"col-12\">
    <div>
        <h1 class=\"text-center m-4\">Praticien&nbsp;? Inscrivez-vous&nbsp;!</h1>
    </div>
</div>
<!-- 1 : Configuration du profil medecin -->
<div class=\"container\">

    <div class=\"mx-auto p-4 profil-img mx-auto justify-content-center align-items-center col-12\">
        <div class=\"justify-content-center align-items-center\">
            <img src=\"{{ asset('dist/img/logo.png')}}\" alt=\"logo\">
        </div>
    </div>

    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_start(form) }}
      {{ form_errors(form) }}
          <div class=\"justify-content-center\">
              <div class=\"col-lg-12  mx-auto\">
                  <div class=\"row\">
                      <div class=\"row inscription\">
                          <div class=\"col-md-12 font-italic mt-3 text-center requis\">
                              Les champs marqués de * sont requis.
                          </div>
                          <div class=\"col-md-6 ml-2 mt-5\">
                              {{ form_row(form.genre) }}
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Nom-->
                              {{ form_row(form.nom) }}
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Prénom-->
                              {{ form_row(form.prenom) }}
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Spécialité-->
                              {{ form_row(form.specialite) }}
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Email-->
                              {{ form_row(form.email) }}
                          </div>
                      </div>
                      <div class=\"row password\">
                          <div class=\"row-md-12 w-100 p-4\">
                              <!--password - rue-->
                              {{ form_row(form.plainPassword) }} 
                          </div>
                      </div>
                      <div class=\"row inscription\">
                          <div class=\"container mt-4\">
                              <h2 class=\"text-center\">Informations complémentaires</h2>
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Téléphone-->
                              {{ form_row(form.telephone) }}
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Site web-->
                              {{ form_row(form.site_web) }}
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <!--Lien doctolib-->
                              {{ form_row(form.doctolib) }}
                          </div>
                      </div>
                      <div class=\"col-10 mx-auto m-4 mb-5\">
                          <div class=\"row\">
                              <div class=\"col mb-3 ml-3\">
                                  <input type=\"checkbox\" class=\"mt-1 mr-2\" required><span>J'ai lu et j'accepte les <a href=\"{{ path('cgu')}}\" target=\"_blank\">conditions générales d'utilisation*</a></span><br>
                                  <input type=\"checkbox\" class=\"mt-1 mr-2\" checked><span>J'accepte de recevoir la newsletter de <a href=\"{{ path('default')}}\" target=\"_blank\">DoctoAsk</a></span>
                              </div>
                              <div class=\"col-md-6 text-center mt-2 mb-4\">
                                  <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" class=\"btn bg-sub primary-btn col-8\" />
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

    {{ form_row(form._token) }}
    {{ form_end(form) }}
    {{ form_rest(form) }}

  </div>
</section>
", "@FOSUser/Registration/register_content.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/bundles/FOSUserBundle/Registration/register_content.html.twig");
    }
}
