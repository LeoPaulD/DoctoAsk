<?php

/* annuaire/annuaire.html.twig */
class __TwigTemplate_487b421edb4cd23707ccf1774b6b169319ede3c3735b252bbed43caf48a90c40 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "annuaire/annuaire.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annuaire/annuaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annuaire/annuaire.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("annuaire/css/style.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("annuaire/js/monscript.js"), "html", null, true);
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
        echo "<div class=\"contenu\">
        <div class=\"col-12\">
            <div>
                <h1 class=\"text-center m-4\">Annuaire praticiens</h1>
            </div>
        </div>
        <!----Contenu de la page
        <div id=\"filtreMobile\" class=\"container fixed-bottom col-12 col-lg-4\">
            <div class=\"row\">
              <div class=\"col-12\">
                <p><i class=\"fas fa-sliders-h\"></i> Filtre</p>
              </div>
            </div>
            <div id=\"champs\" class=\"row\">
              <div class=\"col-12 pt-3\">
                <form>
                  <p>Choix de la ville</p>
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control inClass\" id=\"champVille\"  placeholder=\"Entrez une ville...\">
                  </div>
                  <p>Spécialité</p>
                  <div class=\"row\">
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Généraliste</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Neurologue</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Ophtalmologue</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Pneumologue</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Psychiatre</span></label>
                      </div>

                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Chirurgien</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Kinésithérapeute</span></label>
                      </div>

                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Dentiste</span></label>
                      </div>
                    </div>
                  </div>
                  <p class=\"pt-2\">Moyen de paiment</p>
                  <div>
                    <select class=\"form-control col-12 col-md-6 mx-auto\" id=\"moyenPaiement\">
                      <option>...</option>
                      <option>Carte</option>
                      <option>Chèque</option>
                      <option>Liquide</option>
                    </select>
                  </div>

                  <div class=\"form-group my-3\">
                    <button type=\"submit\" class=\"btn btn-primary col-12 bg-sub\">Rechercher</button>
                  </div>

                </form>
              </div>
            </div>
          </div>

        -->

        <!-- 1 : Les Annonces -->

        <div class=\"container-fluid\">

            <div class=\"col-md-12\">
                <div class=\"row\">
            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 105
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new Twig_Error_Runtime('Variable "infos" does not exist.', 105, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 106
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["info"], "idMedecin", array()))) {
                    // line 107
                    echo "                    <div class=\" col-lg-4 col-md-6 p-3\">
                        <div class=\"col-12\">
                            <div class=\"fiche shadow  bg-white rounded\">
                                <div class=\"img-medecin align-items-end mx-auto \" style=\"background-image : url(";
                    // line 110
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("annuaire/img/bertrand.jpg"), "html", null, true);
                    echo ");\">
                                    <div class=\" pt-3 pl-4\">
                                        <p><b>Dr ";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", array()), "html", null, true);
                    echo "</b><br>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "villeCabinet", array()), "html", null, true);
                    echo "</p>
                                    </div>
                                </div>
                                <div class=\"\">
                                  <a href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("infos", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                    echo "\" class=\"search-icon\" title=\"Informations médecin\">
                                    <i class=\"fas fa-search\"></i>
                                  </a>
                                    <p class=\"pt-3 pl-4\"><b>Spécialité</b> </p>
                                    <span class=\"badge  ml-4 mb-4\">";
                    // line 120
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "specialite", array()), "html", null, true);
                    echo "</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    ";
                }
                // line 127
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annuaire/annuaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 129,  247 => 128,  241 => 127,  231 => 120,  224 => 116,  215 => 112,  210 => 110,  205 => 107,  202 => 106,  197 => 105,  193 => 104,  99 => 12,  90 => 11,  77 => 8,  68 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('annuaire/css/style.css')}}\" type=\"text/css\">
{% endblock %}

{% block javascript %}
    <script src=\"{{ asset('annuaire/js/monscript.js') }}\"></script>
{% endblock %}

{% block body %}
<div class=\"contenu\">
        <div class=\"col-12\">
            <div>
                <h1 class=\"text-center m-4\">Annuaire praticiens</h1>
            </div>
        </div>
        <!----Contenu de la page
        <div id=\"filtreMobile\" class=\"container fixed-bottom col-12 col-lg-4\">
            <div class=\"row\">
              <div class=\"col-12\">
                <p><i class=\"fas fa-sliders-h\"></i> Filtre</p>
              </div>
            </div>
            <div id=\"champs\" class=\"row\">
              <div class=\"col-12 pt-3\">
                <form>
                  <p>Choix de la ville</p>
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control inClass\" id=\"champVille\"  placeholder=\"Entrez une ville...\">
                  </div>
                  <p>Spécialité</p>
                  <div class=\"row\">
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Généraliste</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Neurologue</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Ophtalmologue</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Pneumologue</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Psychiatre</span></label>
                      </div>

                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Chirurgien</span></label>
                      </div>
                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Kinésithérapeute</span></label>
                      </div>

                    </div>
                    <div class=\"col-6\">
                      <div class=\"checkbox\">
                        <label><input type=\"checkbox\" value=\"\"><span>Dentiste</span></label>
                      </div>
                    </div>
                  </div>
                  <p class=\"pt-2\">Moyen de paiment</p>
                  <div>
                    <select class=\"form-control col-12 col-md-6 mx-auto\" id=\"moyenPaiement\">
                      <option>...</option>
                      <option>Carte</option>
                      <option>Chèque</option>
                      <option>Liquide</option>
                    </select>
                  </div>

                  <div class=\"form-group my-3\">
                    <button type=\"submit\" class=\"btn btn-primary col-12 bg-sub\">Rechercher</button>
                  </div>

                </form>
              </div>
            </div>
          </div>

        -->

        <!-- 1 : Les Annonces -->

        <div class=\"container-fluid\">

            <div class=\"col-md-12\">
                <div class=\"row\">
            {% for user in users  %}
              {% for info in infos %}
                  {% if user.id == info.idMedecin %}
                    <div class=\" col-lg-4 col-md-6 p-3\">
                        <div class=\"col-12\">
                            <div class=\"fiche shadow  bg-white rounded\">
                                <div class=\"img-medecin align-items-end mx-auto \" style=\"background-image : url({{ asset('annuaire/img/bertrand.jpg')}});\">
                                    <div class=\" pt-3 pl-4\">
                                        <p><b>Dr {{user.nom}}</b><br>{{info.villeCabinet}}</p>
                                    </div>
                                </div>
                                <div class=\"\">
                                  <a href=\"{{ path('infos', {'id':user.id}) }}\" class=\"search-icon\" title=\"Informations médecin\">
                                    <i class=\"fas fa-search\"></i>
                                  </a>
                                    <p class=\"pt-3 pl-4\"><b>Spécialité</b> </p>
                                    <span class=\"badge  ml-4 mb-4\">{{user.specialite}}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    {% endif %}
                {% endfor %}
            {% endfor %}
            </div>
        </div>

    </div>

{% endblock %}
", "annuaire/annuaire.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/annuaire/annuaire.html.twig");
    }
}
