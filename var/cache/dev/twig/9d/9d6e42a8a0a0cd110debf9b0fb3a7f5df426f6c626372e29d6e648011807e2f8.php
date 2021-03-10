<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_d12d4fc1cd0ff2b427f9a1a68f60f7eb25effb6673af8232ddcba1665334812d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<!-- Contenu de la page -->
<section class=\"contenu\">
    <div class=\"col-12\">
        <div>
            <h1 class=\"text-center m-4\">Connectez-vous !</h1>
        </div>
    </div>

    <!-- 1 : Configuration du profil medecin -->
    <div class=\"container\">

        <div class=\"mx-auto p-4 profil-img mx-auto justify-content-center align-items-center col-12\">
            <div class=\"justify-content-center align-items-center\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" width=100>
            </div>
        </div>

        <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 21
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\" />
            ";
        }
        // line 24
        echo "            <div class=\"justify-content-center\">
                  <div class=\"col-lg-10 mx-auto\">
                      <div class=\"row\">
                          <div class=\"col-md-6 p-4\">
                              <label for=\"email\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                              <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                              ";
        // line 30
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                                  <div class=\"error-message text-center mt-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 31, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 31, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                              ";
        }
        // line 33
        echo "                          </div>
                          <div class=\"col-md-6 p-4\">
                              <label for=\"password\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                              <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                              <span class=\"float-right mt-1\">
                                  <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgotpwd");
        echo "\">Mot de passe oublié ?</a>
                              </span>
                          </div>
                          <div class=\"col-12 mx-auto m-4 mb-5\">
                              <div class=\"row\">
                                  <div class=\"col-md-6 text-center my-2\">
                                      <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn bg-sub primary-btn col-8\" />
                                  </div>
                                  <div class=\"col-md-6 text-center my-2\">
                                      <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" class=\"btn bg-sub primary-btn col-8\">
                                          <p class=\"pt-2\" title=\"S'inscrire\">S'inscrire</p>
                                      </a>
                                  </div>
                                  <div class=\"ml-5\">
                                  <input class=\"ml-4 mt-1\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                  <label class=\"ml-1\" for=\"remember_me\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
        </form>

  <!-- End : Contenu de la page -->
  </div>

  <!-- End : Configuration du profil medecin -->
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 53,  111 => 47,  105 => 44,  96 => 38,  90 => 35,  86 => 33,  80 => 31,  78 => 30,  74 => 29,  70 => 28,  64 => 24,  58 => 22,  56 => 21,  52 => 20,  45 => 16,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<!-- Contenu de la page -->
<section class=\"contenu\">
    <div class=\"col-12\">
        <div>
            <h1 class=\"text-center m-4\">Connectez-vous !</h1>
        </div>
    </div>

    <!-- 1 : Configuration du profil medecin -->
    <div class=\"container\">

        <div class=\"mx-auto p-4 profil-img mx-auto justify-content-center align-items-center col-12\">
            <div class=\"justify-content-center align-items-center\">
                <img src=\"{{ asset('dist/img/logo.png')}}\" alt=\"logo\" width=100>
            </div>
        </div>

        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div class=\"justify-content-center\">
                  <div class=\"col-lg-10 mx-auto\">
                      <div class=\"row\">
                          <div class=\"col-md-6 p-4\">
                              <label for=\"email\">{{ 'security.login.email'|trans }}</label>
                              <input type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                              {% if error %}
                                  <div class=\"error-message text-center mt-2\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                              {% endif %}
                          </div>
                          <div class=\"col-md-6 p-4\">
                              <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                              <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                              <span class=\"float-right mt-1\">
                                  <a href=\"{{ path('forgotpwd') }}\">Mot de passe oublié ?</a>
                              </span>
                          </div>
                          <div class=\"col-12 mx-auto m-4 mb-5\">
                              <div class=\"row\">
                                  <div class=\"col-md-6 text-center my-2\">
                                      <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn bg-sub primary-btn col-8\" />
                                  </div>
                                  <div class=\"col-md-6 text-center my-2\">
                                      <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn bg-sub primary-btn col-8\">
                                          <p class=\"pt-2\" title=\"S'inscrire\">S'inscrire</p>
                                      </a>
                                  </div>
                                  <div class=\"ml-5\">
                                  <input class=\"ml-4 mt-1\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                  <label class=\"ml-1\" for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
        </form>

  <!-- End : Contenu de la page -->
  </div>

  <!-- End : Configuration du profil medecin -->
</section>
", "@FOSUser/Security/login_content.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/bundles/FOSUserBundle/Security/login_content.html.twig");
    }
}
