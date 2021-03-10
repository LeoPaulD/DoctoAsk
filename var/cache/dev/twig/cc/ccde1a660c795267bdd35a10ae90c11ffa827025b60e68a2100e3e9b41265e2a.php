<?php

/* layout.html.twig */
class __TwigTemplate_64bd6739c517c8149d2ed7489ff9bd5aafe66e8e271489c98be3fea2af8ec4d1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>DoctoAsk</title>
        <meta charset=\"utf-8\">

            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("header-footer/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/doctostyle.css"), "html", null, true);
        echo "\" type=\"text/css\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
        ";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        // line 20
        echo "    </head>
    <body>

  <!-- HEADER DESKTOP -->
  <header id=\"header\" role=\"banner\" class=\"main-header desktop p-3 border-bottom d-none d-md-flex align-items-center bg-white\">

    <section>
      <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\"><img class=\"md-size mr-3\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/md-logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
      <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\"><img class=\"xl-size ml-2 mr-4\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" ></a>
    </section>

    <!-- NAVIGATION -->
    <nav class=\"w-100 d-flex justify-content-between align-items-center\">
      <ul class=\"list-unstyled d-flex align-items-center m-0\">
        <li class=\"text-uppercase\">
          <a class=\"mr-3\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "\">Annuaire praticiens</a>
        </li>
        <li class=\"text-uppercase\">
          <a class=\"mr-3\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qui_sommes_nous");
        echo "\">Qui sommes-nous&nbsp;?</a>
        </li>
        <li class=\"text-uppercase\">
          <a class=\"mr-3\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
        echo "\">Nos offres</a>
        </li>
        <li class=\"text-uppercase\">
          <a class=\"mr-3\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help");
        echo "\">Besoin d'aide&nbsp;?</a>
        </li>
      </ul>

      ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 49
            echo "          <section>
              <div class=\"dropdown\">
                  <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                    <img
                      src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/pp-medecin/default_dr_M.jpg"), "html", null, true);
            echo "\"
                      alt=\"Photo de profil du ...\" width=\"25\">
                    <span class=\"caret\"></span>
                  </button>
                  <ul class=\"dropdown-menu dropdown-menu-right p-3 pr-2\">
                      <li><a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mon profil</a></li>
                      <li><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                  </ul>
              </div>
          </section>
      ";
        } else {
            // line 64
            echo "          <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">
            <button class=\"btn bg-sub text-uppercase\" type=\"button\" name=\"button\"><span class=\"d-md-hide\">Êtes-vous </span>praticien&nbsp;?</button>
          </a>
      ";
        }
        // line 68
        echo "
    </nav>

  </header>

  <!-- HEADER MOBILE -->
  <header class=\"mobile d-flex d-md-none position-relative bg-white justify-content-between align-items-center p-3 border-bottom\">

    <section>
      <div>
        <span class=\"d-block\"></span>
        <span class=\"d-block\"></span>
        <span class=\"d-block m-0\"></span>
      </div>

      <!-- NAVIGATION -->
      <nav class=\"position-absolute bg-white d-flex flex-column justify-content-between\">

        <div>
          <div class=\"position-relative\">
            <span class=\"d-block bg-dark position-relative\"></span>
            <span class=\"d-block bg-dark\"></span>
          </div>

          <ul class=\"list-unstyled py-3 px-4 d-flex flex-column\">
            <li class=\"text-uppercase mb-2\">
              <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Accueil</a>
            </li>
            <li class=\"text-uppercase mb-2\">
              <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "\">Annuaire praticiens</a>
            </li>
            <li class=\"text-uppercase mb-2\">
              <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qui_sommes_nous");
        echo "\">Qui sommes-nous ?</a>
            </li>
            <li class=\"text-uppercase mb-2\">
              <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
        echo "\">Nos offres</a>
            </li>
            <li class=\"text-uppercase mb-2\">
              <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help");
        echo "\">Besoin d'aide ?</a>
            </li>
            <li class=\"mt-4 align-self-center\">
              <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "!\">
                <button class=\"btn bg-sub text-uppercase\" type=\"button\" name=\"button\">Êtes-vous praticien&nbsp;?</button>
              </a>
            </li>
          </ul>
        </div>

        <ul class=\"list-unstyled d-flex flex-row justify-content-between align-self-center\">
          <a href=\"https://www.facebook.com/doctoask/\">
            <li>
              <i class=\"fab fa-facebook-square\"></i>
            </li>
          </a>
          <a href=\"https://twitter.com/_DoctoAsK\">
            <li>
              <i class=\"fab fa-twitter-square\"></i>
            </li>
          </a>
          <a href=\"https://www.linkedin.com/company/doctoask\">
            <li>
              <i class=\"fab fa-linkedin\"></i>
            </li>
          </a>
        </ul>
      </nav>
    </section>

    <section>
      <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/logo.png"), "html", null, true);
        echo "\"alt=\"logo\"></a>
    </section>


    ";
        // line 141
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 142
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
              <img
                src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/pp-medecin/default_dr_M.jpg"), "html", null, true);
            echo "\"
                alt=\"Photo de profil du ...\" width=\"25\">
              <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu dropdown-menu-right p-3 pr-2\">
                <li><a href=\"";
            // line 150
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mon profil</a></li>
                <li><a href=\"";
            // line 151
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            </ul>
        </div>
    ";
        } else {
            // line 155
            echo "        <section>
          <a href=\"";
            // line 156
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">
            <i class=\"fas fa-user-md\"></i>
          </a>
        </section>
    ";
        }
        // line 161
        echo "  </header>

        ";
        // line 163
        $this->displayBlock('body', $context, $blocks);
        // line 164
        echo "
        <!-- Footer -->
<footer class=\"py-2\">

    <!-- Footer Links -->
    <div class=\"container-fluid text-left\">

      <!-- Grid row -->
      <div class=\"row p-2\">

        <!-- Grid column -->
        <div class=\"col-md-4\">

          <!-- Content -->

          <!-- Grid column -->
          <hr class=\"d-block d-md-none clearfix w-100 border-top border-light my-1\">

          <div class=\"d-flex justify-content-between align-items-center\">
            <h5 class=\"text-white text-uppercase\">Plan du Site</h5>
            <i class=\"fas fa-angle-down d-md-none d-block mr-3 text-light\"></i>
          </div>

          <!-- Links -->
          <ul class=\"list-unstyled my-0\">
            <li>
              <a class=\"text-white\" href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Accueil</a>
            </li>
            <li>
              <a class=\"text-white\" href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "\">Annuaire praticiens</a>
            </li>
            <li>
              <a class=\"text-white\" href=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qui_sommes_nous");
        echo "\">Qui sommes-nous ?</a>
            </li>
            <li>
              <a class=\"text-white\" href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offres");
        echo "\">Nos offres</a>
            </li>
            <li>
              <a class=\"text-white\" href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help");
        echo "\">Besoin d'aide ?</a>
            </li>
          </ul>

        </div>

        <!-- Grid column -->
        <div class=\"col-md-4\">

          <!-- Links -->
          <h5 class=\"text-white text-uppercase d-md-block d-none\">Annexes</h5>

          <ul class=\"list-unstyled\">

            <!-- Grid column -->
            <hr class=\"clearfix w-100 d-md-none border-top border-light my-1\">
            <li>
              <a class=\"text-white\" href=\"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help");
        echo "\">S.A.V</a>
            </li>

            <!-- Grid column -->
            <hr class=\"clearfix w-100 d-md-none border-top border-light my-1\">
            <li>
              <a class=\"text-white\" href=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presse");
        echo "\">Presse</a>
            </li>

            <!-- Grid column -->
            <hr class=\"clearfix w-100 d-md-none border-top border-light my-1\">
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 text-center\">

          <a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">
            <button class=\"btn bg-sub-light text-uppercase\" type=\"button\" name=\"button\">Êtes-vous praticien&nbsp;?</button>
          </a>

          <ul class=\"list-unstyled mb-0 my-3 d-flex justify-content-center\">
            <a class=\"mx-2\" href=\"https://www.facebook.com/doctoask/\" target=\"_blank\">
              <li>
                <i class=\"fab fa-facebook-square text-light\"></i>
              </li>
            </a>
            <a class=\"mx-2\" href=\"https://twitter.com/_DoctoAsK\" target=\"_blank\">
              <li>
                <i class=\"fab fa-twitter-square text-light\"></i>
              </li>
            </a>
            <a class=\"mx-2\" href=\"https://www.linkedin.com/company/doctoask\" target=\"_blank\">
              <li>
                <i class=\"fab fa-linkedin text-light\"></i>
              </li>
            </a>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class=\"text-center d-flex flex-column\">
      <a class=\"my-3\" href=\"";
        // line 271
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">
        <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/Logo_Version_Finale_Blanc.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"color: white;\">
      </a>
      <span class=\"text-white\">Copyright &#9400; 2018 DoctoAsk. Tous droits réservés. Projet étudiant de l'Université de Bordeaux</span>
      <div>
        <a href=\"";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">CGU</a>
        <span>|</span>
        <a href=\"../sitemap/index.php\">Site Map</a>
      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>

<script type=\"text/javascript\">
    //Mobile Navbar fonctionnement
    \$('.mobile > section:first-child > div').on('click', function() {
      \$('.mobile > section:first-child').addClass('is-active');
    });

    \$('.mobile > section:first-child > nav > div').on('click', function() {
      \$('.mobile > section:first-child.is-active').removeClass('is-active');
    });

    //Hidden overflow menu FOOTER
    \$('footer > div > div > div:first-child > div').on('click', function() {
      \$(this).siblings('ul').toggleClass('is-active');
    });
</script>

<script>
    (function() {
      var lastTime = 0;
      var vendors = ['ms', 'moz', 'webkit', 'o'];
      for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
      }

      if ( ! window.requestAnimationFrame ) {
        window.requestAnimationFrame = function(callback, element) {
          var currTime = new Date().getTime();
          var timeToCall = Math.max(0, 16 - (currTime - lastTime));
          var id = window.setTimeout(function() { callback(currTime + timeToCall); },
          timeToCall);
          lastTime = currTime + timeToCall;
          return id;
        };
      }

      if ( ! window.cancelAnimationFrame ) {
        window.cancelAnimationFrame = function(id) {
          clearTimeout(id);
        };
      }
    }());

    (function(w,d,undefined){
      var el_html = d.documentElement,
        el_body = d.getElementsByTagName('body')[0],
        header = d.getElementById('header'),
        menuIsStuck = function(triggerElement) {
          var _scrollTop\t= w.pageYOffset || el_body.scrollTop,
            regexp\t\t= /(nav\\-is\\-stuck)/i,
            classFound\t= el_html.className.match( regexp ),
            navHeight\t= header.offsetHeight,
            bodyRect\t= el_body.getBoundingClientRect(),
            scrollValue\t= triggerElement ? triggerElement.getBoundingClientRect().top - bodyRect.top - navHeight  : 400,
            scrollValFix = classFound ? scrollValue : scrollValue + navHeight;

          if ( _scrollTop > scrollValFix && !classFound ) {
            el_html.className = el_html.className + ' nav-is-stuck';
            el_body.style.paddingTop = navHeight + 'px';
          }

          if ( _scrollTop <= 2 && classFound ) {
            el_html.className = el_html.className.replace( regexp, '' );
            el_body.style.paddingTop = '0px';
          }
        },
        onScrolling = function() {
          menuIsStuck( d.getElementById('main') );
        };


      el_html.className = el_html.className + ' js';

      w.addEventListener('scroll', function(){
        w.requestAnimationFrame( onScrolling );
      });


    }(window, document));
\t\t</script>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 163,  566 => 19,  557 => 18,  547 => 14,  538 => 13,  434 => 276,  427 => 272,  423 => 271,  387 => 238,  371 => 225,  362 => 219,  342 => 202,  336 => 199,  330 => 196,  324 => 193,  318 => 190,  290 => 164,  288 => 163,  284 => 161,  276 => 156,  273 => 155,  266 => 151,  262 => 150,  254 => 145,  249 => 142,  247 => 141,  238 => 137,  207 => 109,  201 => 106,  195 => 103,  189 => 100,  183 => 97,  177 => 94,  149 => 68,  141 => 64,  133 => 59,  129 => 58,  121 => 53,  115 => 49,  113 => 48,  106 => 44,  100 => 41,  94 => 38,  88 => 35,  76 => 28,  70 => 27,  61 => 20,  59 => 18,  54 => 15,  52 => 13,  48 => 12,  44 => 11,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>DoctoAsk</title>
        <meta charset=\"utf-8\">

            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

            <link rel=\"stylesheet\" href=\"{{ asset('header-footer/style.css')}}\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/doctostyle.css')}}\" type=\"text/css\">
        {% block stylesheets %}
        {% endblock %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
        {% block javascript %}
        {% endblock %}
    </head>
    <body>

  <!-- HEADER DESKTOP -->
  <header id=\"header\" role=\"banner\" class=\"main-header desktop p-3 border-bottom d-none d-md-flex align-items-center bg-white\">

    <section>
      <a href=\"{{ path('default') }}\"><img class=\"md-size mr-3\" src=\"{{ asset('dist/img/md-logo.png')}}\" alt=\"logo\"></a>
      <a href=\"{{ path('default') }}\"><img class=\"xl-size ml-2 mr-4\" src=\"{{ asset('dist/img/logo.png')}}\" alt=\"logo\" ></a>
    </section>

    <!-- NAVIGATION -->
    <nav class=\"w-100 d-flex justify-content-between align-items-center\">
      <ul class=\"list-unstyled d-flex align-items-center m-0\">
        <li class=\"text-uppercase\">
          <a class=\"mr-3\" href=\"{{ path('annuaire') }}\">Annuaire praticiens</a>
        </li>
        <li class=\"text-uppercase\">
          <a class=\"mr-3\" href=\"{{ path('qui_sommes_nous') }}\">Qui sommes-nous&nbsp;?</a>
        </li>
        <li class=\"text-uppercase\">
          <a class=\"mr-3\" href=\"{{ path('offres') }}\">Nos offres</a>
        </li>
        <li class=\"text-uppercase\">
          <a class=\"mr-3\" href=\"{{ path('help') }}\">Besoin d'aide&nbsp;?</a>
        </li>
      </ul>

      {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
          <section>
              <div class=\"dropdown\">
                  <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                    <img
                      src=\"{{ asset('dist/img/pp-medecin/default_dr_M.jpg') }}\"
                      alt=\"Photo de profil du ...\" width=\"25\">
                    <span class=\"caret\"></span>
                  </button>
                  <ul class=\"dropdown-menu dropdown-menu-right p-3 pr-2\">
                      <li><a href=\"{{ path('fos_user_profile_show') }}\">Mon profil</a></li>
                      <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
                  </ul>
              </div>
          </section>
      {% else %}
          <a href=\"{{ path('fos_user_security_login') }}\">
            <button class=\"btn bg-sub text-uppercase\" type=\"button\" name=\"button\"><span class=\"d-md-hide\">Êtes-vous </span>praticien&nbsp;?</button>
          </a>
      {% endif %}

    </nav>

  </header>

  <!-- HEADER MOBILE -->
  <header class=\"mobile d-flex d-md-none position-relative bg-white justify-content-between align-items-center p-3 border-bottom\">

    <section>
      <div>
        <span class=\"d-block\"></span>
        <span class=\"d-block\"></span>
        <span class=\"d-block m-0\"></span>
      </div>

      <!-- NAVIGATION -->
      <nav class=\"position-absolute bg-white d-flex flex-column justify-content-between\">

        <div>
          <div class=\"position-relative\">
            <span class=\"d-block bg-dark position-relative\"></span>
            <span class=\"d-block bg-dark\"></span>
          </div>

          <ul class=\"list-unstyled py-3 px-4 d-flex flex-column\">
            <li class=\"text-uppercase mb-2\">
              <a href=\"{{ path('default') }}\">Accueil</a>
            </li>
            <li class=\"text-uppercase mb-2\">
              <a href=\"{{ path('annuaire') }}\">Annuaire praticiens</a>
            </li>
            <li class=\"text-uppercase mb-2\">
              <a href=\"{{ path('qui_sommes_nous') }}\">Qui sommes-nous ?</a>
            </li>
            <li class=\"text-uppercase mb-2\">
              <a href=\"{{ path('offres') }}\">Nos offres</a>
            </li>
            <li class=\"text-uppercase mb-2\">
              <a href=\"{{ path('help') }}\">Besoin d'aide ?</a>
            </li>
            <li class=\"mt-4 align-self-center\">
              <a href=\"{{ path('fos_user_security_login') }}!\">
                <button class=\"btn bg-sub text-uppercase\" type=\"button\" name=\"button\">Êtes-vous praticien&nbsp;?</button>
              </a>
            </li>
          </ul>
        </div>

        <ul class=\"list-unstyled d-flex flex-row justify-content-between align-self-center\">
          <a href=\"https://www.facebook.com/doctoask/\">
            <li>
              <i class=\"fab fa-facebook-square\"></i>
            </li>
          </a>
          <a href=\"https://twitter.com/_DoctoAsK\">
            <li>
              <i class=\"fab fa-twitter-square\"></i>
            </li>
          </a>
          <a href=\"https://www.linkedin.com/company/doctoask\">
            <li>
              <i class=\"fab fa-linkedin\"></i>
            </li>
          </a>
        </ul>
      </nav>
    </section>

    <section>
      <a href=\"{{ path('default') }}\"><img src=\"{{ asset('dist/img/logo.png')}}\"alt=\"logo\"></a>
    </section>


    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <div class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
              <img
                src=\"{{ asset('dist/img/pp-medecin/default_dr_M.jpg') }}\"
                alt=\"Photo de profil du ...\" width=\"25\">
              <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu dropdown-menu-right p-3 pr-2\">
                <li><a href=\"{{ path('fos_user_profile_show') }}\">Mon profil</a></li>
                <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
            </ul>
        </div>
    {% else %}
        <section>
          <a href=\"{{ path('fos_user_security_login') }}\">
            <i class=\"fas fa-user-md\"></i>
          </a>
        </section>
    {% endif %}
  </header>

        {% block body %}{% endblock %}

        <!-- Footer -->
<footer class=\"py-2\">

    <!-- Footer Links -->
    <div class=\"container-fluid text-left\">

      <!-- Grid row -->
      <div class=\"row p-2\">

        <!-- Grid column -->
        <div class=\"col-md-4\">

          <!-- Content -->

          <!-- Grid column -->
          <hr class=\"d-block d-md-none clearfix w-100 border-top border-light my-1\">

          <div class=\"d-flex justify-content-between align-items-center\">
            <h5 class=\"text-white text-uppercase\">Plan du Site</h5>
            <i class=\"fas fa-angle-down d-md-none d-block mr-3 text-light\"></i>
          </div>

          <!-- Links -->
          <ul class=\"list-unstyled my-0\">
            <li>
              <a class=\"text-white\" href=\"{{ path('default') }}\">Accueil</a>
            </li>
            <li>
              <a class=\"text-white\" href=\"{{ path('annuaire') }}\">Annuaire praticiens</a>
            </li>
            <li>
              <a class=\"text-white\" href=\"{{ path('qui_sommes_nous') }}\">Qui sommes-nous ?</a>
            </li>
            <li>
              <a class=\"text-white\" href=\"{{ path('offres') }}\">Nos offres</a>
            </li>
            <li>
              <a class=\"text-white\" href=\"{{ path('help') }}\">Besoin d'aide ?</a>
            </li>
          </ul>

        </div>

        <!-- Grid column -->
        <div class=\"col-md-4\">

          <!-- Links -->
          <h5 class=\"text-white text-uppercase d-md-block d-none\">Annexes</h5>

          <ul class=\"list-unstyled\">

            <!-- Grid column -->
            <hr class=\"clearfix w-100 d-md-none border-top border-light my-1\">
            <li>
              <a class=\"text-white\" href=\"{{ path('help') }}\">S.A.V</a>
            </li>

            <!-- Grid column -->
            <hr class=\"clearfix w-100 d-md-none border-top border-light my-1\">
            <li>
              <a class=\"text-white\" href=\"{{path('presse')}}\">Presse</a>
            </li>

            <!-- Grid column -->
            <hr class=\"clearfix w-100 d-md-none border-top border-light my-1\">
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 text-center\">

          <a href=\"{{ path('fos_user_security_login') }}\">
            <button class=\"btn bg-sub-light text-uppercase\" type=\"button\" name=\"button\">Êtes-vous praticien&nbsp;?</button>
          </a>

          <ul class=\"list-unstyled mb-0 my-3 d-flex justify-content-center\">
            <a class=\"mx-2\" href=\"https://www.facebook.com/doctoask/\" target=\"_blank\">
              <li>
                <i class=\"fab fa-facebook-square text-light\"></i>
              </li>
            </a>
            <a class=\"mx-2\" href=\"https://twitter.com/_DoctoAsK\" target=\"_blank\">
              <li>
                <i class=\"fab fa-twitter-square text-light\"></i>
              </li>
            </a>
            <a class=\"mx-2\" href=\"https://www.linkedin.com/company/doctoask\" target=\"_blank\">
              <li>
                <i class=\"fab fa-linkedin text-light\"></i>
              </li>
            </a>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class=\"text-center d-flex flex-column\">
      <a class=\"my-3\" href=\"{{path('default')}}\">
        <img src=\"{{ asset('dist/img/Logo_Version_Finale_Blanc.png')}}\" alt=\"logo\" style=\"color: white;\">
      </a>
      <span class=\"text-white\">Copyright &#9400; 2018 DoctoAsk. Tous droits réservés. Projet étudiant de l'Université de Bordeaux</span>
      <div>
        <a href=\"{{ path('cgu')}}\">CGU</a>
        <span>|</span>
        <a href=\"../sitemap/index.php\">Site Map</a>
      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>

<script type=\"text/javascript\">
    //Mobile Navbar fonctionnement
    \$('.mobile > section:first-child > div').on('click', function() {
      \$('.mobile > section:first-child').addClass('is-active');
    });

    \$('.mobile > section:first-child > nav > div').on('click', function() {
      \$('.mobile > section:first-child.is-active').removeClass('is-active');
    });

    //Hidden overflow menu FOOTER
    \$('footer > div > div > div:first-child > div').on('click', function() {
      \$(this).siblings('ul').toggleClass('is-active');
    });
</script>

<script>
    (function() {
      var lastTime = 0;
      var vendors = ['ms', 'moz', 'webkit', 'o'];
      for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
      }

      if ( ! window.requestAnimationFrame ) {
        window.requestAnimationFrame = function(callback, element) {
          var currTime = new Date().getTime();
          var timeToCall = Math.max(0, 16 - (currTime - lastTime));
          var id = window.setTimeout(function() { callback(currTime + timeToCall); },
          timeToCall);
          lastTime = currTime + timeToCall;
          return id;
        };
      }

      if ( ! window.cancelAnimationFrame ) {
        window.cancelAnimationFrame = function(id) {
          clearTimeout(id);
        };
      }
    }());

    (function(w,d,undefined){
      var el_html = d.documentElement,
        el_body = d.getElementsByTagName('body')[0],
        header = d.getElementById('header'),
        menuIsStuck = function(triggerElement) {
          var _scrollTop\t= w.pageYOffset || el_body.scrollTop,
            regexp\t\t= /(nav\\-is\\-stuck)/i,
            classFound\t= el_html.className.match( regexp ),
            navHeight\t= header.offsetHeight,
            bodyRect\t= el_body.getBoundingClientRect(),
            scrollValue\t= triggerElement ? triggerElement.getBoundingClientRect().top - bodyRect.top - navHeight  : 400,
            scrollValFix = classFound ? scrollValue : scrollValue + navHeight;

          if ( _scrollTop > scrollValFix && !classFound ) {
            el_html.className = el_html.className + ' nav-is-stuck';
            el_body.style.paddingTop = navHeight + 'px';
          }

          if ( _scrollTop <= 2 && classFound ) {
            el_html.className = el_html.className.replace( regexp, '' );
            el_body.style.paddingTop = '0px';
          }
        },
        onScrolling = function() {
          menuIsStuck( d.getElementById('main') );
        };


      el_html.className = el_html.className + ' js';

      w.addEventListener('scroll', function(){
        w.requestAnimationFrame( onScrolling );
      });


    }(window, document));
\t\t</script>
</html>
", "layout.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/layout.html.twig");
    }
}
